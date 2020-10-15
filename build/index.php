<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> EliteSnaps </title>

    <meta name="keywords" content="Photography, Videography, Photo, Image, EliteSnaps, Esnaps">
    <meta name="description" content="We are a photography company founded by students. We aim to provide high quality photos and videos that captures the memories of that night.">
    <meta name="author" content="EliteSnaps">
    <meta name="subject" content="Elite Snaps Website">
    <meta name="copyright" content="EliteSnaps">
    <meta name="robots" content="index,follow">
    <meta name="theme-color" content="#000">
    <meta name="referrer" content="no-referrer">
    <meta name="designer" content="Justin Pascual">
    <meta name="url" content="https://elitesnaps.co.uk">
    <meta name="identifier-URL" content="https://elitesnaps.co.uk">
    <!-- Google Meta Tags -->
    <meta name="googlebot" content="index,follow">
    <meta name="google" content="notranslate">
    <!-- Open Graphs Tags -->
    <meta itemprop="name" content="EliteSnaps">
    <meta itemprop="description" content="We are a photography company founded by students. We aim to provide high quality photos and videos that captures the memories of that night.">
    <meta itemprop="image" content="app/assets/component/og_background.jpg">
    <meta property="fb:app_id" content="https://www.facebook.com/elitesnaps/">
    <meta property="og:url" content="https://elitesnaps.co.uk">
    <meta property="og:type" content="Website">
    <meta property="og:title" content="EliteSnaps">
    <meta property="og:image" content="app/assets/component/og_background.jpg">
    <meta property="og:image:alt" content="Levitating Ring">
    <meta property="og:description" content="We are a photography company founded by students. We aim to provide high quality photos and videos that captures the memories of that night.">
    <meta property="og:site_name" content="EliteSnaps">
    <meta property="og:locale" content="en_US">
    <meta property="article:author" content="https://www.facebook.com/elitesnaps/">
    <!-- Twitter Card -->
    <meta name="tweetmeme-title" content="EliteSnaps">
    <meta name="twitter:card" content="app/assets/component/og_background.jpg">
    <meta name="twitter:site" content="@elitesnapsuk">
    <meta name="twitter:creator" content="@gxwsi">
    <meta name="twitter:url" content="https://elitesnaps.co.uk">
    <meta name="twitter:title" content="EliteSnaps">
    <meta name="twitter:description" content="We are a photography company founded by students. We aim to provide high quality photos and videos that captures the memories of that night.">
    <meta name="twitter:image" content="app/assets/component/og_background.jpg">
    <meta name="twitter:image:alt" content="Levitating Ring">
    <meta name="twitter:dnt" content="on">
    <!-- Link Tags -->
    <link rel="canonical" href="https://elitesnaps.co.uk">
    <!-- Icons -->
    <link rel="icon" type="image/ico" href="app/assets/icon/favicon.ico">
    <link rel="icon" type="image/png" sizes="192x192" href="app/assets/icon/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="192x192" href="app/assets/icon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="app/assets/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="app/assets/icon/favicon-16x16.png">
    <!-- Apple Touch Icon (reuse 192px icon.png) -->
    <link rel="apple-touch-icon" href="app/assets/icon/apple-touch-icon.png">
    <!-- Font Tags -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Overpass&display=swap">
    <!-- Style Tags -->
    <link rel="stylesheet" type="text/css" href="app/style/main.min.css">
    <!-- Preconnect Tags -->
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://code.jquery.com">
    <!-- Preload -->
    <link rel="preload" href="app/assets/icon/logo-long.svg" as="image">
</head>

<body class="gradient-background">
    <main class="main" id="app">
        <div id="overlay" class="overlay-background__load overlay-background__hover"></div>

        <navigation-bar></navigation-bar>

        <video id="content" class="videoBG" playsinline autoplay muted loop preload="auto">
            <source src="app/assets/video/home-background.webm" type="video/webm">
        </video>

        <footer class="footer footer__home">
            <p>COPYRIGHT © 2020. ALL RIGHTS RESERVED.</p>
        </footer>

        <span id="circle" class="circle circle--hide"></span>
    </main>
</body>

<!-- Third Party Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<!-- Local Scripts -->
<script>
    document.querySelector('.videoBG').play();
</script>
<script src="app/script/components.min.js" defer></script>
<script src="app/script/side-bar.min.js" defer></script>
<script src="app/script/top-bar.min.js" defer></script>
<script src="app/script/cursor-animate.min.js" defer></script>

</html>