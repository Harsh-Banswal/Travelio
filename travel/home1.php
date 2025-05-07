<?php 
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin = true;
} else {
  $loggedin = false;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website</title>

    <!-- Swiper Link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:wght@100;200;300;400;500;600&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- External CSS -->
    <link rel="stylesheet" href="style1.css">


</head>

<body>


    <!-- Header Section -->
    <section class="header">
        <a href="home.php" class="logo">travel.</a>
        <nav class="navbar">
        <?php
   
if (!$loggedin) {
    echo '<a href="#hm">Home</a>';
    echo '<a href="#abt">About</a>';
    echo '<a href="package.php">Package</a>';
    echo '<a href="login.php">Login</a>';

}
 else {
    
    echo '<a href="#hm">Home</a>';
    echo '<a href="#abt">About</a>';
    echo '<a href="package.php">Package</a>';
    echo '<a href="book.php">Book</a>';
    echo '<a href="logout.php">Logout</a>';
}
?>

            
           
        </nav>
        <div id="menu-btn" class="fa fa-bars"></div>
    </section>

    <!-- Home -->
    <section class="home" id="hm">
        <div class="swiper home-slider" style="height: 89vh;">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background: url(IMAGES/1.png) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>I
                </div>

                <div class="swiper-slide slide" style="background: url(IMAGES/2.png) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>Discover the new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>I
                </div>

                <div class="swiper-slide slide" style="background: url(IMAGES/3.png)no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>Make Your Tour Worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>I
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>



    <!--services-->

    <section class="services">
        <h1 class="heading-title"> our services </h1>
        <div class="box-container">
            <div class="box">
                <img src="IMAGES/6.png" height="100" alt="">
                <h3>adventure</h3>
            </div>
            <div class="box">
                <img src="IMAGES/6.png" height="100" alt="">
                <h3>tour guide</h3>
            </div>
            <div class="box">
                <img src="IMAGES/6.png" height="100" alt="">
                <h3>Hiking</h3>
            </div>
            <div class="box">
                <img src="IMAGES/6.png" height="100" alt="">
                <h3>camp fire</h3>
            </div>
            <div class="box">
                <img src="IMAGES/6.png" height="100" alt="">
                <h3>off road</h3>
            </div>
            <div class="box">
                <img src="IMAGES/6.png" height="100" alt="">
                <h3>camping</h3>
            </div>
        </div>
    </section>


    <!-- home about -->
    <section class="home-about">
        <div class="image">
            <img src="IMAGES/7.png" alt="">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit modi
                quibusdam ea assumenda, nulla quisquam repellat rem aliquid sequi maxime sapiente autem ipsum? Nobis,
                provident voluptate?</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>

    <!-- home packages -->
    <section class="home-packages">
        <h1 class="heading-title"> our packages </h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="IMAGES/7.png" width="100" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="IMAGES/8.png" width="100" alt="">

                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="IMAGES/9.png" width="100" alt="">

                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
        </div>

        <div class="load-more"><a href="package php" class="btn">Load More</a></div>
    </section>


    <!-- home offer -->

    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid
                nesciunt maiores quas! Magni cumque quaerat saepe! </p>
            <a href="book. php" class="btn">book now</a>
        </div>
    </section>

    <!-- Anout Us -->
    <div class="heading" style="background:url(IMAGES/5.png) no-repeat" id="abt">
        <h1>about us</h1>
    </div>
    <section class="about">
        <div class="image">
            <img src="IMAGES/6.png" height="400" alt="">
        </div>
        <div class="content">
            <h3>why choose us ?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Aliquid rerum, delectus voluptate aliquam
                quaerat iusto repellendus error nulla ab atque. </p>
            <p>Lorem, ipsum dolor sit amet consectetur adipiscing elit. Iure numquam nulla iusto corporis dolor
                commodi libero, vitae obcaecati optio .rerum ab culpa nesciunt, earum mollitia quasi . ipsam .non.
                Aliquid,
                iure .</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>top destinations</span>
                </div>
                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>affordable price</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 guide service</span>
                </div>
            </div>
        </div>
    </section>



    <!-- Review Section -->
    <section class="reviews">

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slider slide">
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur animi excepturi nemo earum
                        adipisci ad fugiat quia tempora expedita alias, blanditiis repellat, ullam numquam voluptates ab
                        debitis laborum. Tempora, ullam.</p>
                    <h3>john deo</h3>
                    <span>traveler</span>
                    <img src="IMAGES/1.png" alt="">
                </div>

                <div class="swiper-slider slide">
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur accusantium nesciunt mollitia
                        aut. Eveniet architecto possimus nihil porro expedita, cumque rerum. Nesciunt quos dignissimos
                        doloribus fugiat eius corrupti harum aperiam facere, praesentium minus odit repellendus nulla
                        minima itaque sed quaerat.</p>
                    <h3>john deo</h3>
                    <span>traveler</span>
                    <img src="IMAGES/1.png" alt="">
                </div>

                <div class="swiper-slider slide">
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur accusantium nesciunt mollitia
                        aut. Eveniet architecto possimus nihil porro expedita, cumque rerum. Nesciunt quos dignissimos
                        doloribus fugiat eius corrupti harum aperiam facere, praesentium minus odit repellendus nulla
                        minima itaque sed quaerat.</p>
                    <h3>john deo</h3>
                    <span>traveler</span>
                    <img src="IMAGES/5.png" alt="">
                </div>

                <div class="swiper-slider slide">
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla nisi ducimus maxime soluta, ipsum
                        delectus.</p>
                    <h3>john deo</h3>
                    <span>traveler</span>
                    <img src="IMAGES/5.png" alt="">
                </div>

                <div class="swiper-slider slide">
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nesciunt placeat molestiae quas
                        architecto ab consectetur vero dolorum est ipsam.</p>
                    <h3>john deo</h3>
                    <span>traveler</span>
                    <img src="IMAGES/5.png" alt="">
                </div>
            </div>

        </div>
    </section>

    
    <!--booking section-->
 

    <!-- Footer -->
    <section class="footer">
        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i>about</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i>package</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>

            </div>
            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
                <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
            </div>
            <div class="box">

                <h3>contact info</h3>
                <a href="#"> <i class="fa fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fa fa-phone"></i> +111-222-3333 </a>
                <a href="#"> <i class="fa fa-envelope"></i> shaikhanas@gmail.com</a>
                <a href="#"> <i class="fas fa-map"></i> mumbai, india - 400104 </a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>
        </div>
        <div class="credit"> created by <span>Shivam gupta ,nipun gupta and harsh banswal</span></div>
    </section>




    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="script1.js"></script>
    <script>


        let menu = document.querySelector('#menu-btn');
        let navbar = document.querySelector('.header .navbar');

        menu.onclick = () => {
            menu.classList.toggle('fa-times');
            navbar.classList.toggle('active');
        };

        document.addEventListener('click', (e) => {
            if (!menu.contains(e.target) && !navbar.contains(e.target)) {
                menu.classList.remove('fa-times');
                navbar.classList.remove('active');
            }
        });





        var swiper = new Swiper(".home-slider", {

            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            }


        });

        var swiper = new Swiper(".reviews-slider", {

            loop: true,
            spaceBetween: 20,
            autoHeight: true,
            grabCursor: true,
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });


        window.onscroll = () => {
            menu.classList.remove('fa-times');
            navbar.classList.remove('active');
        };

    </script>


</body>

</html>