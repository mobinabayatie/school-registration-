<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Managment System</title> 
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
   
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet"></head>
    

    <!-- =====swiper js===== -->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    
    <link rel="stylesheet" href="../student managment/style.css">    

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
                <button id="open-menu-btn"> <i class="uil uil-bars"></i></button>
                <button id="open-menu-btn"> <i class="uil uil-multiply"></i></button>


        </div>    
    </nav>
    <header>
        <div class="container header_container">
            <div class="header_left">
               <h1>Trust us with educating your dear child</h1>
               <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Aspernatur recusandae beatae, incidunt sit obcaecati autem
                 ratione quia accusantium minima magni.
                </p>

                <a href="register.php" class="btn btn-primary">Get Started</a>
            </div>
            <div class="header_right">
                <div class="header_right-image">
                    <img src="../student managment/image/home2.png" alt="">
                </div>
            </div>
        </div>
    </header>
    <section class="categories">
        <div class="container categories_container">
            <div class="categories_left">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                     Mollitia officia, accusantium rerum necessitatibus itaque ea nobis cum maxime repellendus 
                     provident architecto id ipsum harum a saepe iusto ad delectus hic.
                </p>
                <a href="#" class="btn">Learn More</a>
            </div>
            <div class="categories_right">
                <article class="category">
                    <span class="category_icon"><i class="uil uil-bitcoin-circle"></i></span>
                    <h5>Blockchain</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, ad!</p>
                </article>
                <article class="category">
                    <span class="category_icon"><i class="uil uil-music"></i></span>
                    <h5>Music</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, ad!</p>
                </article> <article class="category">
                    <span class="category_icon"><i class="uil uil-megaphone"></i></span>
                    <h5>Marketing</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, ad!</p>
                </article> <article class="category">
                    <span class="category_icon"><i class="uil uil-puzzle-piece"></i></span>
                    <h5>Business</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, ad!</p>
                </article> <article class="category">
                    <span class="category_icon"><i class="uil uil-palette"></i></span>
                    <h5>Graghic Design</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, ad!</p>
                </article> <article class="category">
                    <span class="category_icon"><i class="uil uil-usd-circle"></i></span>
                    <h5>Finance</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, ad!</p>
                </article>
                </div>
        </div>
    </section>
    <!-- =========courses========= -->
     <section class="courses">
        <h2>Our Popular Courses</h2>
        <div class="container courses_container">
            <article class="course">
                <div class="course_image">
                    <img src="./image/webssite.jpg" alt="">
                </div>
                <div class="course_info">
                    <h4>Creating Responsive Website</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti enim 
                        repellendus quam in, dolores velit porro.
                    </p>
                    <a href="./course.php" class="btn btn-primary">Learn More</a>

                </div>
               
            </article>

            <article class="course">
                <div class="course_image">
                    <img src="../student managment/image/webapp.jpg" alt="">
                </div>
               <div class="course_info">
                <h4>Creating Web Apps</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti enim 
                        repellendus quam in, dolores velit porro.
                    </p>
                    <a href="./course.php" class="btn btn-primary">Learn More</a>
               </div>
            </article> 

             <article class="course">
                <div class="course_image">
                    <img src="./image/uiux.png" alt="">
                </div>
                <div class="course_info">
                    <h4>UI/UX Design</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti enim 
                        repellendus quam in, dolores velit porro.
                    </p>
                    <a href="./course.php" class="btn btn-primary">Learn More</a>
                </div>
              
            </article>
        </div>
     </section>

     <!-- ===============testimonial=============== -->
    <section class="container testimonials_container  mySwiper">
        <h2>Teachers Testemonials</h2>
        <div class="swiper-wrapper">
            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="../student managment/image/teacher2.jpg" alt="">
                </div>
           
                 <div class="tesyimonial_info">
                <h5>Ms.Dina Mohebi</h5>
                <small> math teacher</small>
                </div>
                <div class="testimonial_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa excepturi quaerat 
                    rerum atque sit tenetur quia alias nam enim nesciunt?
                    </p>
                 </div>
            </article>


            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="../student managment/image/portrait-young-male-professor-education-day.jpg" alt="">
                </div>
           
                 <div class="tesyimonial_info">
                <h5>Mr.molaie</h5>
                <small> math history</small>
                </div>
                <div class="testimonial_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa excepturi quaerat 
                    rerum atque sit tenetur quia alias nam enim nesciunt?
                    </p>
                 </div>
            </article>


            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="../student managment/image/teacher3.jpg" alt="">
                </div>
           
                 <div class="tesyimonial_info">
                <h5>Ms.Azam Rezaie</h5>
                <small> cominiucation teacher</small>
                </div>
                <div class="testimonial_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa excepturi quaerat 
                    rerum atque sit tenetur quia alias nam enim nesciunt?
                    </p>
                 </div>
            </article>


            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="../student managment/image/teacher5.jpg" alt="">
                </div>
           
                 <div class="tesyimonial_info">
                <h5>mr.Ali Aghaie</h5>
                <small> programing teacher</small>
                </div>
                <div class="testimonial_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa excepturi quaerat 
                    rerum atque sit tenetur quia alias nam enim nesciunt?
                    </p>
                 </div>
            </article>


            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="../student managment/image/teacher4.jpg" alt="">
                </div>
           
                 <div class="tesyimonial_info">
                <h5>Ms.Yasamin Daneshpagoh</h5>
                <small> science teacher</small>
                </div>
                <div class="testimonial_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa excepturi quaerat 
                    rerum atque sit tenetur quia alias nam enim nesciunt?
                    </p>
                 </div>
            </article>
        </div>
        <div class="swiper-pagination"></div>
    </section>

    <!-- ============footer======= -->
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
                <li>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                </li>
                <li>
                    <a href="#"><i class="uil uil-instagram-alt"></i></a>
                </li>
                <li>
                    <a href="#"><i class="uil uil-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="uil uil-linkedin-alt"></i></a>
                </li>
            </ul>
        </div>

        <div class="footer_copyright">
            <small>Copyright &copy; 2025 Shariaty</small>
        </div>
    </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./main.js"></script>
    <script>
         var swiper = new Swiper(".mySwiper", {
        slidesPerView: 2,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            //when window width is >=600px
            breakpoints:{
                600:{
                    slidesPerView:2
                }
            }
        },
        });
    </script>
</body>
</html>