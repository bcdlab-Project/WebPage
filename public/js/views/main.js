window.onscroll = () => {
    const sections = ['about', 'join', 'collaborators', 'contact'].map((id) => document.getElementById(id)); // 'projects', 
  
    sections.forEach((section) => {
        const navItem = document.getElementById(section.getAttribute("id") + "-nav");
        navItem.setAttribute("data-state", "inactive"); 
      });
  
    if ((sections[3].offsetTop - 1)+sections[3].offsetHeight <= pageYOffset + window.innerHeight) {
      document.getElementById("contact-nav").setAttribute("data-state", "active");
    } else if (pageYOffset < sections[0].offsetTop) {
      document.getElementById("about-nav").setAttribute("data-state", "active");
    } else {
      sections.forEach((section) => {
        const sectionTop = section.offsetTop - 1;
        const sectionBottom = sectionTop + section.offsetHeight;
        const navItem = document.getElementById(section.getAttribute("id") + "-nav");
        if (pageYOffset >= sectionTop && pageYOffset < sectionBottom) {
          navItem.setAttribute("data-state", "active");
        }
      });
    }
  };
  
  var currentId = 1;
  
  fetch("/content/carousel?currentId=" + currentId + "&action=get")
  .then(response => response.json())
  .then(data => {
    loadCaroucel(data.slides);
  });
  
  function loadCaroucel(slides) {
    const slide1 = slides[0];
    const slide2 = slides[1];
    const slide3 = slides[2];
    const text = slide2.text_html;
    
    currentId = slide2.id;
  
    const carouselLink = document.getElementById("carousel-link");
    const carouselText = document.getElementById("carousel-text");
    const carouselTextImaginary = document.getElementById("carousel-text-imaginary");
    const carouselLoading = document.getElementById("carousel-loading");
    const slide1Load = document.getElementById("slide1-load");
    const slide2Load = document.getElementById("slide2-load");
    const slide3Load = document.getElementById("slide3-load");
  
    slide1Load.classList.remove("hidden");
    slide2Load.classList.remove("hidden");
    slide3Load.classList.remove("hidden");
  
    carouselLink.href = (slide2.url_link != null) ? slide2.url_link : "#";
    carouselLink.setAttribute("target", ((slide2.url_link != null) ? "_blank" : ""));
  
    carouselText.innerHTML = "";
    carouselLoading.classList.remove("hidden");
    carouselTextImaginary.innerHTML = text;
    carouselText.style.height = carouselTextImaginary.offsetHeight + "px";
  
    setTimeout(() => {
      carouselLoading.classList.add("hidden");
      carouselText.innerHTML = text;
      document.getElementById("slide1").src = slide1.image;
      slide1Load.classList.add("hidden");
      document.getElementById("slide2").src = slide2.image;
      slide2Load.classList.add("hidden");
      document.getElementById("slide3").src = slide3.image;
      slide3Load.classList.add("hidden");
    }, 500);
    
  }
  
  function next_carousel() {
    fetch("/content/carousel?currentId=" + currentId + "&action=next")
    .then(response => response.json())
    .then(data => {
      loadCaroucel(data.slides);
    });
  }
  
  function prev_carousel() {
    fetch("/content/carousel?currentId=" + currentId + "&action=prev")
    .then(response => response.json())
    .then(data => {
      loadCaroucel(data.slides);
    });
  }