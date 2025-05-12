<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rising Together</title>
    <link rel="stylesheet" href="./assets/css/donatestyle.css">
    <script src="https://kit.fontawesome.com/ba7cac5588.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <nav>
            <div class="logo">
                <img src="./assets/img/logo.png" alt="Rising Together Logo" class="logoimg">
            </div>
            <ul class="nav-links" id="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <div class="donatebtn">
            <button onclick='window.location.href="Donation.php"'>Donate</button>
        </div>

        <div class="hamburger" id="hamburger">
            <i class="fa-solid fa-bars"></i>
        </div>
        </nav>
        <section class="donation">
            <div class="back-banner">
                <img src="./assets/img/Donate.png" alt="" class="donatebanner">
                <div class="whiteback">
                    <h1 class="lead" style="padding-top:20%; color:#fff; font-size:2rem">“The meaning of life is to find your gift. The purpose of life is to give it away.”</h1><br>
                    <p style="color:#fff">– Pablo Picasso</p>
                </div>
                    <h1>Support Our Cause</h1><br>
                    <p>Your generous donation helps us make a difference in the lives of those in need.</p>
                    <div class="donate-section">
                        <div class="row">
                            <div class="col">
                                <form action="pay.php" method="post">
                                    <h2>Donate Now</h2>
                                    <div class="form-group">
                                        <label for="name">Name:</label><br>
                                        <input type="text" id="name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:</label><br>
                                        <input type="email" id="email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="amount">Amount:</label><br>
                                        <input type="number" id="amount" name="amount" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message:</label><br>
                                        <textarea id="message" name="message" rows="5" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="submitbtn">Donate</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col">
                                <img src="./assets/img/Donateillu.png" width="75%" style="margin-top:20%" alt="">
                            </div>
                        </div>
                        <div id="thankYouModal" class="modal" style="display:none;">
                            <div class="modal-content">
                                <h3>Thank You! 💚</h3>
                                <p>Your donation was successfully received.</p>
                                <button class="close-btn" onclick="closeModal()">Close</button>
                        </div>
                </div>
            </div>
        </section>

        <footer>
    <div class="footer">
        <div class="footer-container">
            <div class="footer-column">
            <img src="./assets/img/footerlogo.png" width="25%" alt="Location">
            <p>Empowering communities through education, health, and sustainability. Together, we create lasting change.</p>
            <div class="icon-text">
                <i class="fa-solid fa-map-pin"></i>
                <span>123 Community Road, Delhi, India</span>
            </div>
            <div class="icon-text">
                <i class="fa-solid fa-phone"></i>
                <span>+91 981234567</span>
            </div>
            <div class="icon-text">
                <i class="fa-solid fa-paper-plane"></i>
                <span>contact@risetogether.org</span>
            </div>
            </div>
            <div class="footer-column">
            <h4>Quick Links</h4>
            <a href="#">Home</a><br>
            <a href="#">About Us</a><br>
            <a href="#">Our Programs</a><br>
            <a href="#">Get Involved</a><br>
            <a href="#">Donate</a><br>
            <a href="#">Contact</a>
            </div>
            <div class="footer-column">
            <h4>Follow Us</h4>
            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-facebook" style="font-size:2rem; margin-right:10px;"></i></a>
                <a href="#"><i class="fa-brands fa-square-instagram" style="font-size:2rem; margin-right:10px; "></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter" style="font-size:2rem; margin-right:10px;"></i></a>
            </div>
            <h4>Legal</h4>
            <a href="#">Privacy Policy</a><br>
            <a href="#">Terms & Conditions</a>
            </div>
        </div>
        <div class="footer-bottom">
            © 2025 RiseTogether. All rights reserved.
        </div>
        </div>
    </footer>
    </div>

    <!--GSAP-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js" integrity="sha512-NcZdtrT77bJr4STcmsGAESr06BYGE8woZdSdEgqnpyqac7sugNO+Tr4bGwGF3MsnEkGKhU2KL2xh6Ec+BqsaHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js" integrity="sha512-P2IDYZfqSwjcSjX0BKeNhwRUH8zRPGlgcWl5n6gBLzdi4Y5/0O4zaXrtO4K9TZK6Hn1BenYpKowuCavNandERg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="./assets/js/modal.js" defer></script>
    <script src="./assets/js/script.js" defer></script>

</html>
</body>
</html>