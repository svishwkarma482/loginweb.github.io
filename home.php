<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <script src="https://kit.fontawesome.com/a75ad23429.js"></script>


        <title>HOME</title>

        <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
        <link rel="stylesheet" href="sty.css">

    </head>

    <body class="done">
        <div class="logout-btn"><a href="logout.php">Logout</a></div>

        <h1> About To Flaxen Infosoft. <?php // echo $_SESSION['name']; 
                                        ?> </h1>

        <div class=list>

            <div class="img">
                <img src="img.jpeg" alt="">
            </div>
            <ul class="spacec">
                <li><a href="#home">Home</i></a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#about">details</a></li>
            </ul>
        </div>


        <footer>
            <div class="row">
                <div class="col">
                    <h3>About us</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique cum rerum omnis fuga </p>
                </div>
                <div class="col">
                    <h3>Jobs</h3>
                    <p>front end developer.</p>
                    <p>back end developer.</p>
                    <p>digital market.</p>
                    <p>Telly caller.</p>
                </div>
                <div class="col">
                    <h3>office</h3>
                    <p> Near Apna sweet.</p>
                    <p>Bakhatgad Building.</p>
                    <p class="email-id">Email-id-svishwkarma482@gmail.com</p>
                    <h4> MOB NO- +91 - 8349056744</h4>
                </div>

                <div class="col">
                    <h3>News letter</h3>
                    <form>
                        <i class="far fa-envelope"></i>
                        <input type="email" placeholder="Enter your name">
                        <button type="submit"><i class="fas fa-arrow-right"></i></a></button>
                    </form>
                </div>
            </div>
        </footer>

        <!-- map start -->
        <!-- <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14718.965961987584!2d75.88823949999998!3d22.7378479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1655728656170!5m2!1sen!2sin" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div> -->
        <!-- map end -->
    </body>

    </html>
<?php
} else {
    header("location: index.php");
    exit();
}
?>