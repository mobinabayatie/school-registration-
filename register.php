<?php 
  session_start();

?>
<!Doctype html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet"></head>
    <link rel="stylesheet" href="../student managment/style.css">  

    <title>Register</title>
   <style>
body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    font-family: 'Montserrat', sans-serif;
}

main {
    flex: 1;
    padding: 5rem 0;
}

.formcontainer {
    padding-top: 5rem;
    padding-bottom: 5rem;
    width: 60%;
    flex-direction: column;
    display: flex;
    margin: 0 auto;
}

footer {
    background: #2e3267;
    color: #fff;
    padding: 2rem 0;
    flex-shrink: 0;
}

.formcontainer .card {
    background: #fff;
    color: #000;
    border-radius: 0.5rem;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border: 1px solid #2e3267;
}

.formcontainer .card-header {
    background: #2e3267;
    color: #fff;
    border-bottom: none;
    padding: 1rem;
    border-radius: 0.5rem 0.5rem 0 0;
}

.formcontainer .card-header h4 {
    margin: 0;
}

.formcontainer .card-body {
    padding: 2rem;
}

.formcontainer .form-control {
    border: 1px solid #2e3267;
    border-radius: 0.25rem;
    padding: 0.5rem;
    color: #2e3267;
}

.formcontainer .form-control:focus {
    border-color: #4a50a1;
    box-shadow: 0 0 5px rgba(46, 50, 103, 0.3);
}

.formcontainer label {
    font-weight: 500;
    margin-bottom: 0.5rem;
    color: #2e3267;
}

.formcontainer .btn-primary {
    background: #2e3267;
    border-color: #2e3267;
    color: #fff;
}

.formcontainer .btn-primary:hover {
    background: #4a50a1;
    border-color: #4a50a1;
}

.btn-custom {
    transition: all 0.3s ease;
}

.btn-register {
    border: 1px solid #2e3267;
    color: #2e3267;
    background: white;
}

.btn-register:hover {
    background-color: #2e3267;
    color: white;
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
                  <li><a href="table.php"> Students</a></li>
                </ul>
                <button id="open-menu-btn"> <i class="uil uil-bars"></i></button>
                <button id="open-menu-btn"> <i class="uil uil-multiply"></i></button>


        </div>    
    </nav>
    <div class="formcontainer mt-5">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="mb-0">Register</h4>

                        </div>
                        <div class="card-body">
                            <form action="../student managment/student.php" method="POST">
                                <div class="mb-3">
                                    <label for="student_name">Student Name</label>
                                    <input type="text" name="student_name" class="form-control" id="student_name">
                                </div>
                                <div class="mb-3">
                                    <label for="student_email">Student Email</label>
                                    <input type="email" name="student_email" class="form-control" id="student_email">
                                </div>
                                <div class="mb-3">
                                    <label for="student_phone">Student Phone</label>
                                    <input type="text" name="student_phone" class="form-control" id="student_phone">
                                </div>
                                <div class="mb-3">
                                    <label for="student_course">Student Course</label>
                                    <input type="text" name="student_course" class="form-control" id="student_course">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="save_student" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>










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

     <script src="./main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

   
  </body>
</html>