<div class="relative flex items-center justify-center w-full py-5 xl:py-8 scrollbar-hide" >
  <div class="absolute w-screen h-full bg-gradient-to-b from-[#5DE0E6] "></div>
  <div class="relative flex items-center justify-center w-full pt-1 pb-6 md:py-6">
    <div class="absolute flex w-full h-full py-14">
      <div class="relative aspect-video">
        <div id="slide1-load" class="absolute w-full h-full rounded-lg bg-gray-700/50"></div>
        <img id="slide1" src="" class="rounded-lg"/>
      </div>
    </div>
    <div class="relative z-10 w-full 2xl:w-1/2 md:w-2/3 sm:w-10/12 aspect-video">
      <div id="slide2-load" class="absolute w-full h-full rounded-lg bg-gray-700/50"></div>
      <a id="carousel-link" href="#" target="_blank">
        <img id="slide2" src="" class="rounded-lg"/>
      </a>
    </div>
    <div class="absolute flex justify-end w-full h-full py-14">
      <div class="relative float-right aspect-video">
        <div id="slide3-load" class="absolute w-full h-full rounded-lg bg-gray-700/50"></div>
        <img id="slide3" src="" class="rounded-lg"/>
      </div>
    </div>
  </div>
    <div class="absolute z-10 flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <button class="btn btn-circle" onclick="prev_carousel()"><i data-lucide="chevron-left"></i></button>
        <button class="btn btn-circle" onclick="next_carousel()"><i data-lucide="chevron-right"></i></button>
    </div>
</div>
<div class="relative flex items-center justify-center w-full">
  <p id="carousel-text" class="w-full px-0 text-center text-gray-400 md:px-4 2xl:w-1/2 md:w-2/3 sm:w-10/12 transition-[height] duration-500 ease-in-out h-min "></p> 
  <p id="carousel-text-imaginary" class="absolute w-full px-0 text-center text-sky-400/0 md:px-4 2xl:w-1/2 md:w-2/3 sm:w-10/12"></p> <!-- Imaginary text to calculate height -->
  <i id="carousel-loading" class="absolute px-0 text-gray-400 animate-spin" data-lucide="loader-circle"></i> <!-- Loading icon -->
</div>

<div class="flex items-center justify-center w-4/5 p-8 mx-auto my-8 bg-red-300 bg-opacity-50 rounded-lg animate-pulse">
  <span class="mr-2">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
      <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd"></path>
    </svg>
  </span>
  <p>Participation Requests are now Available, but the service is still in development!!; You Can Check for Updates on <a class="link" href="https://github.com/bcdlab-project">Github</a>!</p>
</div>

<div class="sticky top-0 z-20">
  <div class="relative flex items-center justify-center w-full mt-8">
    <div class="absolute top-0 w-screen h-full bg-white dark:bg-zinc-800"></div>
    <div class="absolute top-0 z-30 w-screen border-t border-zinc-200 gap-x-3 dark:border-zinc-600"></div>
    <div role="tablist" class="z-20 flex items-center w-full overflow-x-scroll text-sm fliped" style="outline: none;">
      <a id="about-nav" href="#about" data-state="active" class="group outline-none py-1.5 border-b-2 border-white dark:border-zinc-800 text-gray-500 data-[state=active]:!border-bcdlab-d data-[state=active]:text-bcdlab-d">
        <div class="flex items-center gap-x-2 py-1.5 px-3 rounded-lg duration-150 group-hover:text-bcdlab-d group-hover:bg-gray-50 dark:group-hover:bg-zinc-900 font-medium text-nowrap">
            <i data-lucide="info"></i>About Us
        </div>
      </a>
      <a id="join-nav" href="#join" data-state="inactive" class="group outline-none py-1.5 border-b-2 border-white dark:border-zinc-800 text-gray-500 data-[state=active]:!border-bcdlab-d data-[state=active]:text-bcdlab-d">
        <div class="flex items-center gap-x-2 py-1.5 px-3 rounded-lg duration-150 group-hover:text-bcdlab-d group-hover:bg-gray-50 dark:group-hover:bg-zinc-900 font-medium text-nowrap">
            <i data-lucide="users"></i>Join Us
        </div>
      </a>
      <!-- <a id="projects-nav" href="#projects" data-state="inactive" class="group outline-none py-1.5 border-b-2 border-white dark:border-zinc-800 text-gray-500 data-[state=active]:!border-bcdlab-d data-[state=active]:text-bcdlab-d">
        <div class="flex items-center gap-x-2 py-1.5 px-3 rounded-lg duration-150 group-hover:text-bcdlab-d group-hover:bg-gray-50 dark:group-hover:bg-zinc-900 font-medium text-nowrap">
            <i data-lucide="folder-kanban"></i>Some Projects
        </div>
      </a> -->
      <a id="collaborators-nav" href="#collaborators" data-state="inactive" class="group outline-none py-1.5 border-b-2 border-white dark:border-zinc-800 text-gray-500 data-[state=active]:!border-bcdlab-d data-[state=active]:text-bcdlab-d">
        <div class="flex items-center gap-x-2 py-1.5 px-3 rounded-lg duration-150 group-hover:text-bcdlab-d group-hover:bg-gray-50 dark:group-hover:bg-zinc-900 font-medium text-nowrap">
            <i data-lucide="hand-helping"></i>Our Colaborators
        </div>
      </a>
      <a id="contact-nav" href="#contact" data-state="inactive" class="group outline-none py-1.5 border-b-2 border-white dark:border-zinc-800 text-gray-500 data-[state=active]:!border-bcdlab-d data-[state=active]:text-bcdlab-d">
        <div class="flex items-center gap-x-2 py-1.5 px-3 rounded-lg duration-150 group-hover:text-bcdlab-d group-hover:bg-gray-50 dark:group-hover:bg-zinc-900 font-medium text-nowrap">
            <i data-lucide="mail"></i>Contact Us
        </div>
      </a>
    </div>
    <div class="absolute bottom-0 z-30 w-screen border-b border-zinc-200 gap-x-3 dark:border-zinc-600"></div>
  </div>
</div>

<div class="flex flex-col gap-4">

<!-- About Us -->
  <div id="about" class="flex flex-col gap-6">
    <h1 class="text-3xl font-semibold sm:text-4xl pt-14">About Us</h1>
    <div class="flex justify-start">
      <div class="lg:w-1/2">
        <h1 class="mb-3 text-2xl">The Project</h1>
        <p>Welcome to our unique community-driven platform, where collaboration is at the core of everything we do. Our project is not just about hosting; it's about creating a network of tech enthusiasts who believe in the power of collaboration and sharing resources.</p>
      </div>
    </div>
    <div class="flex justify-end">
      <div class="lg:w-1/2">
        <h1 class="mb-3 text-2xl">Key Focus Areas</h1>
        <ul class="pl-6 list-disc">
          <li class="mb-2"><span class="font-bold">Shared Resources:</span>  Our community shares the hosting responsibility, ensuring that every project finds a home. This collaborative effort allows us to collectively support each other's endeavors.</li>
          <li><span class="font-bold">Collaboration in Action:</span> Our community thrives on active collaboration, a shared space where members engage, share resources, and contribute to the flourishing growth of our interconnected IT ecosystem.</li>
        </ul>
      </div>
    </div>
    <div class="flex justify-start">
      <div class="lg:w-1/2">
        <h1 class="mb-3 text-2xl">How It Works</h1>
        <ul class="pl-6 list-disc">
          <li class="mb-2"><span class="font-bold">Collaboration Nodes:</span> Unlike traditional hosting services, our platform operates on the principle of collaboration nodes. Tech-savvy individuals, developers, and freelancers from around the world collaborate by providing hosting resources from their homelabs and servers.</li>
          <li class="mb-2"><span class="font-bold">Code Reviewers:</span> To ensure the safety of our collaborators and users, all code slated for hosting undergoes a thorough safety check, confirming its integrity and absence of potential harm in the tech world.</li>
          <li class="mb-2"><span class="font-bold">Host Your Projects:</span> Once your participation request is confirmed, you gain access to the user Dashboard. On this Dashboard, you can request a new project or manage the ones you already have.</li>
          <li><span class="font-bold">Connect GitHub:</span> Streamline your code upload process by connecting GitHub directly to our platform. No need to manually upload code; just commit changes to GitHub.</li>
        </ul>
      </div>
    </div>
    <p class="mt-4 text-xl text-center">Ready to carve your path in a collaborative environment? Contact us and let's shape the future of IT and collaboration together!</p>
  </div>

  <!-- Join Us -->
  <div id="join" class="flex flex-col">
    <h1 class="mb-6 text-3xl font-semibold sm:text-4xl pt-14">Join Us in Building Something Great!</h1>
    <p class="text-justify">Our project thrives on community collaboration, and we're excited to invite you to be a part of it. Your involvement can make a significant impact, and together, we can achieve something extraordinary. We currently have various roles available, each offering a unique opportunity for you to contribute to the growth and success of our community. Explore the available roles below and find the perfect fit for your skills and interests:</p>
    <h2 class="mt-6 mb-4 text-3xl">Available Roles:</h2>
    <ul class="grid gap-3 lg:grid-cols-2 2xl:grid-cols-3">
      <li class="px-4 py-5 duration-150 bg-opacity-50 rounded-xl hover:!bg-opacity-25 bg-zinc-300 dark:bg-opacity-50 dark:bg-zinc-950">
        <div class="flex items-center gap-x-3">
          <div class="flex items-center justify-center border border-black rounded-full w-14 h-14 dark:border-white">
            <svg viewBox="0 -28.5 256 256" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg">
              <path d="M216.856339,16.5966031 C200.285002,8.84328665 182.566144,3.2084988 164.041564,0 C161.766523,4.11318106 159.108624,9.64549908 157.276099,14.0464379 C137.583995,11.0849896 118.072967,11.0849896 98.7430163,14.0464379 C96.9108417,9.64549908 94.1925838,4.11318106 91.8971895,0 C73.3526068,3.2084988 55.6133949,8.86399117 39.0420583,16.6376612 C5.61752293,67.146514 -3.4433191,116.400813 1.08711069,164.955721 C23.2560196,181.510915 44.7403634,191.567697 65.8621325,198.148576 C71.0772151,190.971126 75.7283628,183.341335 79.7352139,175.300261 C72.104019,172.400575 64.7949724,168.822202 57.8887866,164.667963 C59.7209612,163.310589 61.5131304,161.891452 63.2445898,160.431257 C105.36741,180.133187 151.134928,180.133187 192.754523,160.431257 C194.506336,161.891452 196.298154,163.310589 198.110326,164.667963 C191.183787,168.842556 183.854737,172.420929 176.223542,175.320965 C180.230393,183.341335 184.861538,190.991831 190.096624,198.16893 C211.238746,191.588051 232.743023,181.531619 254.911949,164.955721 C260.227747,108.668201 245.831087,59.8662432 216.856339,16.5966031 Z M85.4738752,135.09489 C72.8290281,135.09489 62.4592217,123.290155 62.4592217,108.914901 C62.4592217,94.5396472 72.607595,82.7145587 85.4738752,82.7145587 C98.3405064,82.7145587 108.709962,94.5189427 108.488529,108.914901 C108.508531,123.290155 98.3405064,135.09489 85.4738752,135.09489 Z M170.525237,135.09489 C157.88039,135.09489 147.510584,123.290155 147.510584,108.914901 C147.510584,94.5396472 157.658606,82.7145587 170.525237,82.7145587 C183.391518,82.7145587 193.761324,94.5189427 193.539891,108.914901 C193.539891,123.290155 183.391518,135.09489 170.525237,135.09489 Z" fill="currentColor"> </path>
            </svg>
          </div>
          <div>
              <span class="text-lg font-medium text-bcdlab-d">Discord Moderator</span>
              <h3>The keepers of the peace in our digital hangout</h3>
          </div>
        </div>
        <p class="mx-2 mt-2 sm:text-sm">When it comes to Discord Moderators, they're the ones making sure our online space stays positive. They enforce rules, sort out conflicts, and keep things welcoming.</p>
      </li>

      <li class="px-4 py-5 duration-150 bg-opacity-50 rounded-xl hover:!bg-opacity-25 bg-zinc-300 dark:bg-opacity-50 dark:bg-zinc-950">
        <div class="flex items-center gap-x-3">
          <div class="flex items-center justify-center border border-black rounded-full w-14 h-14 dark:border-white">
              <i data-lucide="shield"></i>
          </div>
          <div>
              <span class="text-lg font-medium text-bcdlab-d">Administrator</span>
              <h3>The big shots making sure things run smoothly</h3>
          </div>
        </div>
        <p class="mx-2 mt-2 sm:text-sm">Administrators? They're the ones steering the ship. Making decisions, handling security, and keeping the project running smooth day in, day out.</p>
      </li>

      <li class="px-4 py-5 duration-150 bg-opacity-50 rounded-xl hover:!bg-opacity-25 bg-zinc-300 dark:bg-opacity-50 dark:bg-zinc-950">
        <div class="flex items-center gap-x-3">
          <div class="flex items-center justify-center border border-black rounded-full w-14 h-14 dark:border-white">
              <i data-lucide="users"></i>
          </div>
          <div>
              <span class="text-lg font-medium text-bcdlab-d">Collaborator</span>
              <h3>The Project buddies powering up the game</h3>
          </div>
        </div>
        <p class="mx-2 mt-2 sm:text-sm">Collaborators play a key role, contributing with self-hosted nodes, boosting our project capabilities, and fostering collective growth.</p>
      </li>

      <li class="px-4 py-5 duration-150 bg-opacity-50 rounded-xl hover:!bg-opacity-25 bg-zinc-300 dark:bg-opacity-50 dark:bg-zinc-950">
        <div class="flex items-center gap-x-3">
          <div class="flex items-center justify-center border border-black rounded-full w-14 h-14 dark:border-white">
              <i data-lucide="code"></i>
          </div>
          <div>
              <span class="text-lg font-medium text-bcdlab-d">Code Reviewer</span>
              <h3>The code wizards ensuring our codes are top-notch</h3>
          </div>
        </div>
        <p class="mx-2 mt-2 sm:text-sm">Carefull!! That the Code Reviewers are like the watchful eyes on all code. They confirm user code, offer feedback, and help keep our tech stay functional and secure.</p>
      </li>
    </ul>
  </div>


  <!-- Some Projects -->
  <!-- <div id="projects" class="h-[1000px]">
  </div> -->

  <!-- Our collaborator -->
<div id="collaborators" class="">
  <h1 class="mb-6 text-3xl font-semibold text-center sm:text-4xl pt-14">Collaborators</h1>
  <p class="text-xl text-center">Have some resource space on your server and want to help the project?<br>Be part of our project's journey by becoming one of our first collaborators! Let's work together to shape the future.</p>

  <p class="p-3 mt-10 text-center rounded-lg xl:mx-52 bg-zinc-300/50 dark:bg-zinc-950/50">Collaboration opportunities will be available soon! If you're a company or want to reserve your spot, please send us an email at <a href="mailto:contact@mail.bcdlab.xyz" class="font-medium duration-150 text-bcdlab-d text-nowrap hover:opacity-75">contact@mail.bcdlab.xyz</a></p>

</div>

<!-- Contact Us -->
<div id="contact" class="relative flex items-center justify-center w-full pb-8 pt-28 md:pb-12">
  <div class="absolute w-screen h-full bg-gradient-to-t from-[#004AAD]"></div>
  <div class="z-10 text-gray-900 dark:text-gray-300">
    <div class="gap-12 lg:flex">
      <div class="max-w-md">
          <h3 class="text-3xl font-semibold sm:text-4xl">Contact Us</h3>
          <p class="mt-3">If you have any questions or would like to get in touch, please feel free to contact us. We are always looking for new opportunities to collaborate and grow our community. We look forward to hearing from you!</p>
      </div>
      <div>
        <ul class="items-stretch mt-12 gap-y-6 gap-x-12 md:flex lg:gap-x-0 lg:mt-0">
          <li class="py-6 space-y-3 border-t border-gray-900 md:max-w-sm md:py-0 md:border-t-0 lg:border-l lg:px-8 lg:max-w-none dark:border-gray-300">
            <div class="flex items-center justify-center w-12 h-12 border border-gray-900 rounded-full dark:border-gray-300">
              <i data-lucide="github"></i>
            </div>
            <h4 class="text-lg font-medium xl:text-xl">See Our Github</h4>
            <p>We have the discussions on our Github!</p>
            <a href="https://github.com/bcdlab-Project" target="_blank" class="flex items-center gap-1 text-sm font-medium duration-150 text-bcdlab-d hover:opacity-75">
              Go to Github
              <i data-lucide="arrow-right"></i>
            </a>
          </li>
          <li class="py-6 space-y-3 border-t border-gray-900 md:max-w-sm md:py-0 md:border-t-0 lg:border-l lg:px-8 lg:max-w-none dark:border-gray-300">
            <div class="flex items-center justify-center w-12 h-12 border border-gray-900 rounded-full dark:border-gray-300">
              <svg viewBox="0 -28.5 256 256" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg">
                <path d="M216.856339,16.5966031 C200.285002,8.84328665 182.566144,3.2084988 164.041564,0 C161.766523,4.11318106 159.108624,9.64549908 157.276099,14.0464379 C137.583995,11.0849896 118.072967,11.0849896 98.7430163,14.0464379 C96.9108417,9.64549908 94.1925838,4.11318106 91.8971895,0 C73.3526068,3.2084988 55.6133949,8.86399117 39.0420583,16.6376612 C5.61752293,67.146514 -3.4433191,116.400813 1.08711069,164.955721 C23.2560196,181.510915 44.7403634,191.567697 65.8621325,198.148576 C71.0772151,190.971126 75.7283628,183.341335 79.7352139,175.300261 C72.104019,172.400575 64.7949724,168.822202 57.8887866,164.667963 C59.7209612,163.310589 61.5131304,161.891452 63.2445898,160.431257 C105.36741,180.133187 151.134928,180.133187 192.754523,160.431257 C194.506336,161.891452 196.298154,163.310589 198.110326,164.667963 C191.183787,168.842556 183.854737,172.420929 176.223542,175.320965 C180.230393,183.341335 184.861538,190.991831 190.096624,198.16893 C211.238746,191.588051 232.743023,181.531619 254.911949,164.955721 C260.227747,108.668201 245.831087,59.8662432 216.856339,16.5966031 Z M85.4738752,135.09489 C72.8290281,135.09489 62.4592217,123.290155 62.4592217,108.914901 C62.4592217,94.5396472 72.607595,82.7145587 85.4738752,82.7145587 C98.3405064,82.7145587 108.709962,94.5189427 108.488529,108.914901 C108.508531,123.290155 98.3405064,135.09489 85.4738752,135.09489 Z M170.525237,135.09489 C157.88039,135.09489 147.510584,123.290155 147.510584,108.914901 C147.510584,94.5396472 157.658606,82.7145587 170.525237,82.7145587 C183.391518,82.7145587 193.761324,94.5189427 193.539891,108.914901 C193.539891,123.290155 183.391518,135.09489 170.525237,135.09489 Z" fill="currentColor"> </path>
              </svg>
            </div>
            <h4 class="text-lg font-medium xl:text-xl">Join our community</h4>
            <p>Here you can get the latest news and talk with other developers! (In Develoment)</p>
            <p class="flex items-center gap-1 text-sm font-medium duration-150 text-bcdlab-d hover:opacity-75"> <!-- a href="" target="_blank" -->
              Join our Discord
              <i data-lucide="arrow-right"></i>
            </p>
          </li>
          <li class="py-6 space-y-3 border-t border-gray-900 md:max-w-sm md:py-0 md:border-t-0 lg:border-l lg:px-8 lg:max-w-none dark:border-gray-300">
            <div class="flex items-center justify-center w-12 h-12 border border-gray-900 rounded-full dark:border-gray-300">
              <i data-lucide="inbox"></i>
            </div>
            <h4 class="text-lg font-medium xl:text-xl">Try our Email</h4>
            <p>We also have our email, if you prefer this method of contact.</p>
            <div class="flex flex-wrap items-center gap-1 text-sm font-medium text-bcdlab-d">
              <a href="mailto:contact@mail.bcdlab.xyz" class="flex items-center gap-1 text-sm font-medium duration-150 text-nowrap hover:opacity-75">
                Send us an Email
                <i data-lucide="arrow-right"></i>
              </a>
              <span>(contact@mail.bcdlab.xyz)</span>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>