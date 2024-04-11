<?php
    helper('cookie');

    if (!get_cookie('theme')) {
        set_cookie('theme', 'dark',path: '/', httpOnly: false, expire: 3600*24*365);
        $theme = 'dark';
    } else {
        $theme = get_cookie('theme');
    }
?>
<!DOCTYPE html>
<html lang="en" class="<?=$theme?> color-scheme-<?=$theme?> scroll-smooth">
<head>
    <meta charset="UTF-8">
    <title><?=esc($title)?></title>
    <meta name="description" content="Community Hosting: For Tech Enthusiasts, By Tech Enthusiasts. Find Hosting Solutions, Share Resources, Connect with Your Others. Join the Community!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="nofollow, noarchive, notranslate, noimageindex">
    <meta name="keywords" content="hosting, community, project, developers, tech enthusiasts, collaborative" />
    <meta name="google-site-verification" content="2LEKDXtQ04UFdiegGRymQBRk6PHqbNhDA98WhLdJb9g">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" href="<?=base_url()?>css/styles.css">
    <script src="<?=base_url()?>js/header.js"></script>
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <script type="application/ld+json">
    {
      "@context" : "https://schema.org",
      "@type" : "WebSite",
      "name" : "bcdLab Project",
      "alternateName" : ["bcdLab", "bcdLab Community", "bcdLab Hosting"],
      "url" : "https://bcdlab.xyz/"
    }
  </script>
</head>
<body class="relative min-h-screen text-black bg-white dark:bg-zinc-800 dark:text-white">
    <div itemscope itemtype="https://schema.org/WebSite">
        <meta itemprop="url" content="https://bcdlab.xyz/"/>
        <meta itemprop="name" content="bcdLab Project"/>
        <meta itemprop="alternateName" content="bcdLab, bcdLab Community, bcdLab Hosting"/>
    </div>    
    <header class="absolute top-0 z-10 flex items-center w-full p-2 px-2 text-white md:px-24 xl:px-40 bg-zinc-900">
        <a href="/" class="gap-0 px-1 btn btn-ghost"><span class="text-3xl text-bcdlab-b">b</span><span class="text-3xl">c</span><span class="text-3xl text-bcdlab-d">d</span><span class="text-3xl">lab</span><span> Project</span></a>
        <div class="flex items-center flex-1 ml-5">
            <ul class="items-center justify-center hidden space-x-6 md:flex">
                <li class=" dark:hover:text-slate-400 hover:text-slate-600"><a class="block" href="/">Home</a></li>
                <li class=" dark:hover:text-slate-400 hover:text-slate-600"><a class="block" href="/Participate">Participate</a></li>
            </ul>
            <div class="flex items-center justify-end flex-1">
                <button onclick="changeTheme()" class="btn btn-ghost btn-circle" href="/utilities/changetheme"><i id="changeTheme-icon-sun" class="<?=($theme === 'dark') ? '' : 'hidden'?>" data-lucide="sun"></i><i id="changeTheme-icon-moon" class="<?=($theme === 'dark') ? 'hidden' : ''?>" data-lucide="moon"></i></button>
                <button class="btn btn-ghost btn-circle md:hidden" onclick="openSidemenu()"><i data-lucide="menu"></i></button>
                <div class="hidden md:block">
                    <?php if (get_cookie('loggedIn')) { ?>
                        <a class="px-1 text-base btn btn-ghost" href="https://dash.bcdlab.xyz">Dasboard</a>
                    <?php } else { ?>
                        <a class="px-1 text-base btn btn-ghost" href="https://dash.bcdlab.xyz/login">Login</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </header>   
    <section data-nosnippet class="px-2 md:px-24 2xl:px-40 min-h-screen <?=(esc($pageMargin)) ? 'pb-10 pt-16' : 'flex' ?>">