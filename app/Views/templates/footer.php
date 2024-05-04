    </section> 
    <footer class="absolute bottom-0 w-full p-2 py-4 text-center text-white bg-zinc-900">
        <a href="https://github.com/bcdlab-Project" target="_blank">Copyright &copy; <?= date('Y')?> bcdlab Project</a>
    </footer>

    <div onclick="closeSidemenu()" id="sidemenu-overlay" class="transition duration-700 fixed top-0 right-0 w-screen h-screen bg-overlay translate-x-full data-[sidemenuhidden='false']:-translate-x-0" data-sidemenuhidden="true"></div>
    <nav id="sidemenu" class="z-10 fixed block transition duration-700 top-0 right-0 w-2/3 h-full bg-zinc-100 dark:bg-zinc-900 dark:text-white text-black sm:w-64 translate-x-full data-[sidemenuhidden='false']:-translate-x-0" data-sidemenuhidden="true">
        <div class="flex flex-col h-full">
            <div class="clear-right p-2 px-5">
                <button class="float-right btn btn-ghost btn-circle" onclick="closeSidemenu()"> <i data-lucide="x"></i> </button>
            </div>
            <div class="flex flex-col flex-1 h-full overflow-auto">
                <ul class="flex-1 px-4">
                    <li><a class="justify-start w-full text-lg btn btn-ghost" href="/"><i data-lucide="home"></i> Home</a></li>
                    <li><a class="justify-start w-full text-lg btn btn-ghost" href="/Participate"><i data-lucide="pen-line"></i> Participate</a></li>
                </ul>
                <div>
                    <div class="px-4 py-4 border-t border-black dark:border-white">
                        <div>
                            <a class="justify-start w-full text-lg btn btn-ghost" href="https://dash.bcdlab.xyz/login"><i data-lucide="user"></i> Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <?php
        if (isset($scripts)) {
            foreach (esc($scripts) as $script) {
                echo '<script src="'.base_url().'js/'.$script.'"></script>';
            }
        }

        if (isset($view)) {
            echo '<script src="'.base_url().'js/views/'.esc($view).'.js"></script>';
        }
    ?>

    <script src="<?=base_url()?>js/scrollLock.js"></script>
    <script>lucide.createIcons();</script>
</body>
</html>