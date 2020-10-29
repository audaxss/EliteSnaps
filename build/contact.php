<?php include_once 'app/php/getRecentPage.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact - EliteSnaps </title>

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
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <!-- Style Tags -->
    <link rel="stylesheet" type="text/css" href="app/style/main.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <!-- Preconnect Tags -->
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://cdn.jsdelivr.net/">
    <!-- Preload -->
    <link rel="preload" href="app/assets/icon/logo-long.svg" as="image">
    <link rel="preload" href="app/style/main.min.css" as="style">
    <link rel="preload" href="app/script/components.min.js" as="script">
    <link rel="preload" href="app/script/cursor-animate.min.js" as="script">
    <link rel="preload" href="app/script/side-bar.min.js" as="script">
    <link rel="preload" href="app/script/side-line.min.js" as="script">
    <link rel="preload" href="app/script/smooth-scroll.min.js" as="script">
    <link rel="preload" href="app/script/top-bar.min.js" as="script">
</head>

<body id="body" class="body gradient-background">

    <div id="lowerlay-left" class="line__context line__context--center">
        <p class="text__left text__left--left text__left--left--contact">If you have more questions</p>
        <div class="line line__left"></div>
        <p class="text__left text__left--right text__left--right--contact">Contact Us</p>
    </div>

    <div style="display: none" id="goBack" page="<?php echo getRecentPage(); ?>"></div>

    <div id="lowerlay-right" class="line__context line__context--center">
        <a id="go-back" class="line__hover">
            <p class="text__right text__right--left">
                <?php echo getRecentPage() == @explode('.', basename($_SERVER['REQUEST_URI']))[0] ? null : 'return'; ?>
            </p>
            <div class="line line__right"></div>
            <p class="text__right text__right--right">
                <?php echo getRecentPage() == @explode('.', basename($_SERVER['REQUEST_URI']))[0] ? null : 'Back'; ?>
            </p>
        </a>
    </div>

    <main class="main" id="app">
        <div id="overlay" class="overlay-background__load overlay-background__hover"></div>

        <navigation-bar></navigation-bar>

        <section id="content" class="content anchor-animate--fadein">
            <div class="content__header__title">
                <p>IF YOU HAVE MORE QUESTIONS</p>
                <span class="horizontal-line"></span>
                <h3>Contact Us</h3>
            </div>

            <div class="content__wrapper">
                <div class="content--center content--maxheight">
                    <div class="row-container">
                        <div class="content__contact__details">

                            <p>CONTACTS AND DETAILS</p>
                            <h2>How to reach us</h2>

                            <div class="content__contact__infos">

                                <div class="container">
                                    <div class="circle-image">
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTIgMGMtNC4xOTggMC04IDMuNDAzLTggNy42MDIgMCA2LjI0MyA2LjM3NyA2LjkwMyA4IDE2LjM5OCAxLjYyMy05LjQ5NSA4LTEwLjE1NSA4LTE2LjM5OCAwLTQuMTk5LTMuODAxLTcuNjAyLTgtNy42MDJ6bTAgMTFjLTEuNjU3IDAtMy0xLjM0My0zLTNzMS4zNDItMyAzLTMgMyAxLjM0MyAzIDMtMS4zNDMgMy0zIDN6Ii8+PC9zdmc+">
                                    </div>
                                    <div class="info">
                                        <p>
                                            London – United Kingdom
                                        </p>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="circle-image">
                                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0yNCAyMWgtMjR2LTE4aDI0djE4em0tMjMtMTYuNDc3djE1LjQ3N2gyMnYtMTUuNDc3bC0xMC45OTkgMTAtMTEuMDAxLTEwem0yMS4wODktLjUyM2gtMjAuMTc2bDEwLjA4OCA5LjE3MSAxMC4wODgtOS4xNzF6Ii8+PC9zdmc+">
                                    </div>
                                    <div class="info">
                                        <p>
                                            <a id="anchor" href="mailto:bookings@elitesnaps.co.uk">bookings@elitesnaps.co.uk</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="circle-image">
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNNi4xNzYgMS4zMjJsMi44NDQtMS4zMjIgNC4wNDEgNy44OS0yLjcyNCAxLjM0MWMtLjUzOCAxLjI1OSAyLjE1OSA2LjI4OSAzLjI5NyA2LjM3Mi4wOS0uMDU4IDIuNjcxLTEuMzI4IDIuNjcxLTEuMzI4bDQuMTEgNy45MzJzLTIuNzY0IDEuMzU0LTIuODU0IDEuMzk2Yy03Ljg2MiAzLjU5MS0xOS4xMDMtMTguMjU4LTExLjM4NS0yMi4yODF6bTEuOTI5IDEuMjc0bC0xLjAyMy41MDRjLTUuMjk0IDIuNzYyIDQuMTc3IDIxLjE4NSA5LjY0OCAxOC42ODZsLjk3MS0uNDc0LTIuMjcxLTQuMzgzLTEuMDI2LjVjLTMuMTYzIDEuNTQ3LTguMjYyLTguMjE5LTUuMDU1LTkuOTM4bDEuMDA3LS40OTctMi4yNTEtNC4zOTh6Ii8+PC9zdmc+">
                                    </div>
                                    <div class="info">
                                        <p>
                                            <a id="anchor" href="tel:+44 7578 870233">+44 7578 870233</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="circle-image">
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTIgMi4xNjNjMy4yMDQgMCAzLjU4NC4wMTIgNC44NS4wNyAzLjI1Mi4xNDggNC43NzEgMS42OTEgNC45MTkgNC45MTkuMDU4IDEuMjY1LjA2OSAxLjY0NS4wNjkgNC44NDkgMCAzLjIwNS0uMDEyIDMuNTg0LS4wNjkgNC44NDktLjE0OSAzLjIyNS0xLjY2NCA0Ljc3MS00LjkxOSA0LjkxOS0xLjI2Ni4wNTgtMS42NDQuMDctNC44NS4wNy0zLjIwNCAwLTMuNTg0LS4wMTItNC44NDktLjA3LTMuMjYtLjE0OS00Ljc3MS0xLjY5OS00LjkxOS00LjkyLS4wNTgtMS4yNjUtLjA3LTEuNjQ0LS4wNy00Ljg0OSAwLTMuMjA0LjAxMy0zLjU4My4wNy00Ljg0OS4xNDktMy4yMjcgMS42NjQtNC43NzEgNC45MTktNC45MTkgMS4yNjYtLjA1NyAxLjY0NS0uMDY5IDQuODQ5LS4wNjl6bTAtMi4xNjNjLTMuMjU5IDAtMy42NjcuMDE0LTQuOTQ3LjA3Mi00LjM1OC4yLTYuNzggMi42MTgtNi45OCA2Ljk4LS4wNTkgMS4yODEtLjA3MyAxLjY4OS0uMDczIDQuOTQ4IDAgMy4yNTkuMDE0IDMuNjY4LjA3MiA0Ljk0OC4yIDQuMzU4IDIuNjE4IDYuNzggNi45OCA2Ljk4IDEuMjgxLjA1OCAxLjY4OS4wNzIgNC45NDguMDcyIDMuMjU5IDAgMy42NjgtLjAxNCA0Ljk0OC0uMDcyIDQuMzU0LS4yIDYuNzgyLTIuNjE4IDYuOTc5LTYuOTguMDU5LTEuMjguMDczLTEuNjg5LjA3My00Ljk0OCAwLTMuMjU5LS4wMTQtMy42NjctLjA3Mi00Ljk0Ny0uMTk2LTQuMzU0LTIuNjE3LTYuNzgtNi45NzktNi45OC0xLjI4MS0uMDU5LTEuNjktLjA3My00Ljk0OS0uMDczem0wIDUuODM4Yy0zLjQwMyAwLTYuMTYyIDIuNzU5LTYuMTYyIDYuMTYyczIuNzU5IDYuMTYzIDYuMTYyIDYuMTYzIDYuMTYyLTIuNzU5IDYuMTYyLTYuMTYzYzAtMy40MDMtMi43NTktNi4xNjItNi4xNjItNi4xNjJ6bTAgMTAuMTYyYy0yLjIwOSAwLTQtMS43OS00LTQgMC0yLjIwOSAxLjc5MS00IDQtNHM0IDEuNzkxIDQgNGMwIDIuMjEtMS43OTEgNC00IDR6bTYuNDA2LTExLjg0NWMtLjc5NiAwLTEuNDQxLjY0NS0xLjQ0MSAxLjQ0cy42NDUgMS40NCAxLjQ0MSAxLjQ0Yy43OTUgMCAxLjQzOS0uNjQ1IDEuNDM5LTEuNDRzLS42NDQtMS40NC0xLjQzOS0xLjQ0eiIvPjwvc3ZnPg==">
                                    </div>
                                    <div class="info">
                                        <p>
                                            <a id="anchor" href="https://instagram.com/elitesnapsuk" target="_blank">@elitesnapsuk</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="circle-image">
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMjQgNC41NTdjLS44ODMuMzkyLTEuODMyLjY1Ni0yLjgyOC43NzUgMS4wMTctLjYwOSAxLjc5OC0xLjU3NCAyLjE2NS0yLjcyNC0uOTUxLjU2NC0yLjAwNS45NzQtMy4xMjcgMS4xOTUtLjg5Ny0uOTU3LTIuMTc4LTEuNTU1LTMuNTk0LTEuNTU1LTMuMTc5IDAtNS41MTUgMi45NjYtNC43OTcgNi4wNDUtNC4wOTEtLjIwNS03LjcxOS0yLjE2NS0xMC4xNDgtNS4xNDQtMS4yOSAyLjIxMy0uNjY5IDUuMTA4IDEuNTIzIDYuNTc0LS44MDYtLjAyNi0xLjU2Ni0uMjQ3LTIuMjI5LS42MTYtLjA1NCAyLjI4MSAxLjU4MSA0LjQxNSAzLjk0OSA0Ljg5LS42OTMuMTg4LTEuNDUyLjIzMi0yLjIyNC4wODQuNjI2IDEuOTU2IDIuNDQ0IDMuMzc5IDQuNiAzLjQxOS0yLjA3IDEuNjIzLTQuNjc4IDIuMzQ4LTcuMjkgMi4wNCAyLjE3OSAxLjM5NyA0Ljc2OCAyLjIxMiA3LjU0OCAyLjIxMiA5LjE0MiAwIDE0LjMwNy03LjcyMSAxMy45OTUtMTQuNjQ2Ljk2Mi0uNjk1IDEuNzk3LTEuNTYyIDIuNDU3LTIuNTQ5eiIvPjwvc3ZnPg==">
                                    </div>
                                    <div class="info">
                                        <p>
                                            <a id="anchor" href="https://twitter.com/elitesnapsuk" target="_blank">@elitesnapsuk</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="circle-image">
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNOSA4aC0zdjRoM3YxMmg1di0xMmgzLjY0MmwuMzU4LTRoLTR2LTEuNjY3YzAtLjk1NS4xOTItMS4zMzMgMS4xMTUtMS4zMzNoMi44ODV2LTVoLTMuODA4Yy0zLjU5NiAwLTUuMTkyIDEuNTgzLTUuMTkyIDQuNjE1djMuMzg1eiIvPjwvc3ZnPg==">
                                    </div>
                                    <div class="info">
                                        <p>
                                            <a id="anchor" href="https://www.facebook.com/elitesnaps/" target="_blank">@elitesnaps</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="circle-image">
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTkuNjE1IDMuMTg0Yy0zLjYwNC0uMjQ2LTExLjYzMS0uMjQ1LTE1LjIzIDAtMy44OTcuMjY2LTQuMzU2IDIuNjItNC4zODUgOC44MTYuMDI5IDYuMTg1LjQ4NCA4LjU0OSA0LjM4NSA4LjgxNiAzLjYuMjQ1IDExLjYyNi4yNDYgMTUuMjMgMCAzLjg5Ny0uMjY2IDQuMzU2LTIuNjIgNC4zODUtOC44MTYtLjAyOS02LjE4NS0uNDg0LTguNTQ5LTQuMzg1LTguODE2em0tMTAuNjE1IDEyLjgxNnYtOGw4IDMuOTkzLTggNC4wMDd6Ii8+PC9zdmc+">
                                    </div>
                                    <div class="info">
                                        <p>
                                            <a id="anchor" href=" https://www.youtube.com/channel/UC2RnO-NeZsjBhQQk7HNPmsA" target="_blank">@elitesnapsuk</a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="content__contact__form">
                            <?php
                            $error = '';
                            $isTriggered = isset($_POST['send-email']);
                            if ($isTriggered) {

                                $to = 'bookings@elitesnaps.co.uk';
                                $carbon_copy = 'gowsi@elitesnaps.co.uk';

                                $user_name =  htmlentities(trim($_POST['user-name']));
                                $email_address =  htmlentities(trim($_POST['email-address']));
                                $mobile_number =  htmlentities(trim($_POST['mobile-number']));
                                $msg = htmlentities(trim($_POST['user-message']));

                                $msg = "Name: $user_name\nEmail: $email_address\nMobile Number: $mobile_number\n\nMessage:\n$msg";
                                $headers = "From: $email_address" . "\r\n" . "CC: $carbon_copy";

                                $isEmailSent = @mail($to, 'Contact Form', $msg, $headers);

                                if (!$isEmailSent) {
                                    $error = '<span class="message__error">Something went wrong while sending mail.</span>';
                                } else {
                                    $error = '<span class="message__success">Mail has been sent successfully.</span>';
                                }
                            }
                            ?>
                            <form action="" method="post">
                                <div class="content__contact__form__container">
                                    <?php echo $error; ?>
                                    <div class="group-input-3">
                                        <input type="text" name="user-name" placeholder="Your Name" required>
                                        <input type="email" name="email-address" placeholder="Your Email" required>
                                        <input type="tel" name="mobile-number" placeholder="Your Phone" required>
                                    </div>

                                    <div class="group-input-1">
                                        <textarea placeholder="Your message" name="user-message" rows="10" width="100%" required></textarea>
                                    </div>

                                    <div class="button-container">
                                        <button type="submit" name="send-email">Send Message</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <p>COPYRIGHT © 2020. ALL RIGHTS RESERVED.</p>
        </footer>

    </main>
    <span id="circle" class="circle circle--hide"></span>
</body>

<!-- Third Party Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.5.3/smooth-scrollbar.js" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<!-- Local Scripts -->
<script src="app/script/components.min.js" defer></script>
<script src="app/script/side-line.min.js" defer></script>
<script src="app/script/smooth-scroll.min.js" defer></script>
<script src="app/script/side-bar.min.js" defer></script>
<script src="app/script/top-bar.min.js" defer></script>
<script src="app/script/cursor-animate.min.js" defer></script>

</html>