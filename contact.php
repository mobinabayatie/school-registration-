<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title> 
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">  
    <link rel="stylesheet" href="contact.css">
    <style>
        html, body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            font-family: 'Montserrat', sans-serif;
        }

        main {
            flex: 1 0 auto; 
        }

      
        footer {
            background:  #2e3267;
            color: #fff;
            padding: 2rem 0;
            flex-shrink: 0; 
        }

        .footer_container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .footer_container h4 {
            margin-bottom: 1rem;
        }

        .footer_container ul {
            list-style: none;
            padding: 0;
        }

        .footer_container ul li {
            margin-bottom: 0.5rem;
        }

        .footer_container a {
            color: #fff;
            text-decoration: none;
        }

        .footer_container a:hover {
            text-decoration: underline;
        }

        .footer_socials {
            display: flex;
            gap: 1rem;
        }

        .footer_copyright {
            text-align: center;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="index.php"><h4>Shariaty School</h4></a>
            <ul class="nav_menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="course.php">Courses</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>    
    </nav>
    <section class="contact">
        <div class="container contact_container">
            <aside class="contact_aside">
                <div class="aside_img">
                    <img src="image/contact.png" alt="Contact Image">
                </div>
                <h2>Contact Us</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est nostrum recusandae
                    fuga, minus quo minima reiciendis et cupiditate autem in, soluta odio facilis dolor.
                    Sed alias animi repellendus ut eveniet.
                </p>
                <ul class="contact_details">
                    <li>
                        <i class="uil uil-envelope"></i>
                        <h5>mobinabayatie@gmail.com</h5>
                    </li>
                    <li>
                        <i class="uil uil-phone-times"></i>
                        <h5>+234567894512</h5>
                    </li>
                    <li>
                        <i class="uil uil-location-point"></i>
                        <h5>Iran, Tehran, KhaniAbad</h5>
                    </li>
                </ul>
                <ul class="contact_socials">
                    <li><a href="https://facebook.com"><i class="uil uil-facebook-f"></i></a></li>
                    <li><a href="https://instagram.com"><i class="uil uil-instagram"></i></a></li>
                    <li><a href="https://twitter.com"><i class="uil uil-twitter"></i></a></li>
                    <li><a href="https://linkedin.com"><i class="uil uil-linkedin-alt"></i></a></li>
                </ul>
            </aside>
            <form action="https://formspree.io/f/xovereyq" method="POST" class="contact_form">
                <div class="form_name"> 
                    <input type="text" name="First Name" placeholder="First Name" required>
                    <input type="text" name="Last Name" placeholder="Last Name" required>
                </div>
                <input type="email" name="Email Address" placeholder="Your Email Address" required>
                <textarea name="Message" placeholder="Message" rows="7" required></textarea>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>
    <footer>
        <div class="container footer_container">
            <div class="footer_1">
                <a href="index.php" class="footer_logo">
                    <h4>Shatiaty</h4>
                </a>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi omnis doloremque quod
                    quibusdam eveniet. Aliquid, nostrum fugiat. Dolore, ut? Ducimus!
                </p>
            </div>
            <div class="footer_2">
                <h4>PermaLinks</h4>
                <ul class="permalinks">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="course.php">Courses</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>
            </div>
            <div class="footer_3">
                <h4>Privacy</h4>
                <ul class="privacy">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms And Conditions</a></li>
                    <li><a href="#">Refund Policy</a></li>
                </ul>
            </div>
            <div class="footer_4">
                <h4>Contact Us</h4>
                <div>
                    <p>+01 234 556 8910</p>
                    <p>mobinabayatie@gmail.com</p>
                </div>
                <ul class="footer_socials">
                    <li><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                    <li><a href="#"><i class="uil uil-instagram-alt"></i></a></li>
                    <li><a href="#"><i class="uil uil-twitter"></i></a></li>
                    <li><a href="#"><i class="uil uil-linkedin-alt"></i></a></li>
                </ul>
            </div>
            <div class="footer_copyright">
                <small>Copyright © 2025 Shariaty</small>
            </div>
        </div>
    </footer>
    <script src="./main.js"></script>

</body>
</html>