<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <title>Info</title>

    <link rel="stylesheet" href="main.css" />
    <link rel="stylesheet" href="index.css" />

    <link rel="stylesheet" href="aos-master/dist/aos.css" />
    <script src="aos-master/dist/aos.js"></script>

</head>

<div style="display: none">
    <?php
    if (!empty($_POST["send"])) {
        $name = $_POST["userName"];
        $email = $_POST["userEmail"];
        $subject = $_POST["userSubject"];
        $message = $_POST["userMessage"];

        $toEmail = "jakob_horvath@hotmail.com";
        $headers = "From: " . $name . "<" . $email . ">\r\n";
        if (mail($toEmail, $subject, $message, $headers)) {
            $replyMessage = "Thank you. We will get back to you within 24 hours.";
            $type = "success";
        }
    }
    ?>
</div>

<!-- inline style for de-blur header effect (js searches this document) -->
<style>
    header {
        display: block;
    }

    .index-header {
        overflow: hidden;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        height: 50vw;
        margin: 0 auto;
        background-color: #567DA7;
        background-size: cover;
        background-position: 50% 0;
        background-image: url(photos/header-lowest-res.jpg);
    }

    .index-header-enhanced {
        background-image: url(photos/header-high-res.jpg);
    }

    @supports (background-image: filter(url('i.jpg'), blur(1px))) {
        .index-header {
            transform: translateZ(0);
        }

        .index-header-enhanced {
            animation: sharpen 0.5s both;
        }

        @keyframes sharpen {
            from {
                background-image: filter(url(photos/header-high-res.jpg), blur(20px));
            }

            to {
                background-image: filter(url(photos/header-high-res.jpg), blur(0px));
            }
        }
    }
</style>

<body>
    <!-- collapsed header -->
    <div class="sidebar" id="collapsedSidebar">
        <a class="active" href="index.html">Home</a>
        <hr class="link-separator">
        <!-- <a href="info.html">Information</a>
        <hr class="link-separator">
        <a href="incentives.html">Incentives</a> -->
    </div>

    <!-- full-size header -->
    <div class="header">
        <div class="quick-links">
            <a class="active" href="index.html">Home</a>
            <!-- <a href="info.html">Information</a>
            <a href="incentives.html">Incentives</a> -->
        </div>
        <button class="navbtn" id="navBtn" onclick="clickNav()">
            ☰
        </button>
    </div>

    <header class="index-header">
        <h1 class="index-title" data-aos="fade-right" data-aos-duration="2000">
            Get the concierge service you deserve. Right here.
        </h1>

        <div class="contact-btn" onclick="scrollToForm()" data-aos="fade-right" data-aos-duration="2000">
            Contact Us
        </div>
    </header>

    <div id="main">
        <!-- text sections -->
        <div class="section1">
            <div class="section-title">
                The Best Concierge Service in Florida
            </div>

            <div class="section-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nullam finibus, erat et accumsan volutpat, ligula tortor
                pellentesque dolor, et hendrerit eros arcu et augue.
                Praesent bibendum odio eu lorem bibendum, quis tempor enim
                fermentum.
            </div>
        </div>

        <hr class="body-separator">

        <div class="section2">
            <div class="section-title">
                About the Service
            </div>

            <div class="section-body">
                Etiam imperdiet massa sit amet posuere ullamcorper.
                Maecenas a porttitor neque, et convallis lectus. Proin
                convallis nisi eget nisi varius, id gravida elit cursus.
                Praesent in leo posuere, euismod felis non, mattis lacus.
                Etiam vitae tincidunt metus, semper eleifend mauris. Aenean
                ut posuere enim, vel eleifend tellus.
            </div>

            <div class="section-body">
                In placerat tempus sem et vehicula. Nullam nec tortor a
                libero aliquam vehicula et eu mi. Sed pulvinar sodales
                augue, a viverra enim ullamcorper tempor. Donec neque velit,
                elementum at dapibus in, gravida non risus.
            </div>
        </div>

        <hr class="body-separator">

        <div class="section3">
            <div class="section-title">
                Incentives
            </div>

            <div class="section-body">
                Nulla rutrum vel urna id tempor. Curabitur consectetur dui
                ac sem consectetur ullamcorper. Proin id eros at mi molestie
                interdum ut non tortor. Donec et nulla maximus, sagittis
                mauris non, molestie turpis. Sed nulla enim, maximus sed
                viverra vitae, interdum eu sapien.
            </div>

            <ul>
                <li class="i-list" data-aos="fade-right" data-aos-duration="1500">Enim ut sem viverra aliquet eget sit
                    amet tellus.</li>
                <li class="i-list" data-aos="fade-right" data-aos-duration="1500">Elementum nibh tellus molestie nunc
                    non blandit massa.</li>
                <li class="i-list" data-aos="fade-right" data-aos-duration="1500">In ornare quam viverra orci. Vitae
                    justo eget magna fermentum.</li>
            </ul>
        </div>

        <hr class="body-separator">

        <!-- contact form -->
        <div id="contactContainer">
            <div class="contact-bg">
                <!-- <form name="contact" method="POST" action="" onsubmit="return validateContactForm()"> -->
                <form name="contact" method="POST" action="">

                    <div class="contact-title">
                        Contact Us
                    </div>

                    <label for="name">Name</label>
                    <input type="text" id="contactName" name="contactName" placeholder="Bob Marley" required>

                    <label for="email">Email</label>
                    <input type="email" id="_contactEmail" name="_contactEmail" placeholder="littlebirds@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
                    <input type="email" id="contactEmail" name="contactEmail" placeholder="littlebirds@gmail.com" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />

                    <label for="name">Subject</label>
                    <input type="text" id="contactSubject" name="contactSubject" placeholder="Phone Call" required>

                    <label for="message">Message</label>
                    <textarea id="contactMessage" name="contactMessage" placeholder="Hello! I would like to schedule a phone call with your company." required></textarea>

                    <div>
                        <button type="submit" name="send" class="submit-btn">Send Message</button>

                        <div id="statusMessage">
                            <?php
                            if (!empty($replyMessage)) {
                            ?>
                                <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>

    <!-- footer -->
    <div class="footer">
        <div class="footer-row" data-aos="fade-down" data-aos-duration="2500">
            <div class="footer-info">
                <p class="footer-text">
                    A concierge service in Sarasota
                    <br>
                    <a href="mailto:fakemail@gmail.com" class="nostyle">
                        fakemail@gmail.com
                    </a>
                    <br>
                    123-456-7890
                    <br>
                    Sarasota, FL
                </p>
            </div>
            <div class="footer-social">
                <ul id="socialLinks1">
                    <li>
                        <a id="socialText" href="#" target="_blank">
                            Facebook
                        </a>
                    </li>
                    <li id="divider">|</li>
                    <li>
                        <a id="socialText" href="#" target="_blank">
                            Instagram
                        </a>
                    </li>
                    <li id="divider">|</li>
                    <li>
                        <a id="socialText" href="#" target="_blank">
                            Twitter
                        </a>
                    </li>
                </ul>
                <div id="socialLinks2">
                    <a id="socialImage" href="#" target="_blank">
                        <img class="social-svg" src="icons/social/facebook-rounded.svg" />
                    </a>
                    <a id="socialImage" href="#" target="_blank">
                        <img class="social-svg" src="icons/social/instagram-rounded.svg" />
                    </a>
                    <a id="socialImage" href="#" target="_blank">
                        <img class="social-svg" src="icons/social/twitter-rounded.svg" />
                    </a>
                </div>
            </div>
            <div class="footer-legal">
                <p class="footer-text">
                    Copyright 2020 *insert company name* All Rights Reserved
                </p>
            </div>
        </div>
    </div>

    <script>
        // initialize on-scroll animation script
        AOS.init({
            //disable: 'mobile',
            once: true,
        });

        var gSidebar = document.getElementById('collapsedSidebar');
        var gBtn = document.getElementById('navBtn');

        // close sidebar if click was outside it
        document.addEventListener('click', function(event) {
            var clickInside = gSidebar.contains(event.target);
            var clickInside2 = gBtn.contains(event.target);
            if (!clickInside && !clickInside2) {
                closeSidebar();
            }
        });

        // (small screen) hamburger menu controls
        function clickNav() {
            let sidebar = document.getElementById("collapsedSidebar");
            let btn = document.getElementById("navBtn");
            if (sidebar.style.width == "150px") {
                sidebar.style.width = "0px";
                btn.style.marginRight = "0px";
            } else {
                sidebar.style.width = "150px";
                btn.style.marginRight = "150px";
            }
        }

        function closeSidebar() {
            let sidebar = document.getElementById("collapsedSidebar");
            let btn = document.getElementById("navBtn");

            sidebar.style.width = "0px";
            btn.style.marginRight = "0px";
        }

        // self-explanatory
        function scrollToForm() {
            let form = document.getElementById("contactContainer");
            form.scrollIntoView(true);
        }

        // de-blur header logic
        document.addEventListener('DOMContentLoaded', () => {
            window.onload = function loadStuff() {
                var win, doc, img, header, enhancedClass;
                // quit early if older browser
                if (!('addEventListener' in window)) {
                    return;
                }

                win = window;
                doc = win.document;
                img = new Image();
                header = doc.querySelector('.index-header');
                enhancedClass = 'index-header-enhanced';

                // convoluted
                var bigSrc = (function() {
                    // find all the CssRule objects inside the inline stylesheet
                    var styles = doc.querySelector('style').sheet.cssRules;
                    // fetch the background-image declaration..
                    var bgDecl = (function() {
                        // .. via a self-executing function
                        var bgStyle, i, l = styles.length;
                        for (i = 0; i < l; i++) {
                            // .. checking if the rule is the one targeting the enhanced header
                            if (styles[i].selectorText && styles[i].selectorText == '.' + enhancedClass) {
                                bgStyle = styles[i].style.backgroundImage;
                                break;
                            }
                        }
                        // return that text
                        return bgStyle;
                    }());

                    // finally, return match for the url inside the background-image
                    return bgDecl && bgDecl.match(/(?:\(['|"]?)(.*?)(?:['|"]?\))/)[1];
                }());

                // assign onload handler to the dummy image *before* assigning the src
                img.onload = function() {
                    header.className += ' ' + enhancedClass;
                };

                // finally (again), trigger whole preloading chain by giving the dummy its source
                if (bigSrc) {
                    img.src = bigSrc;
                }
            };
        })
    </script>
</body>

</html>