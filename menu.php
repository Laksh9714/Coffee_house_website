<html>
    <head>
        <link rel="icon" type="image/png" href="assets/logo_icon.png">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Dallas Coffee House</title>

        <!-- css files -->
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">



        <!-- font-styles -->
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Spicy+Rice&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/4983f5ff53.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">



        <!-- templates -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- jquery link -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/menu.js"></script>




    </head>

    <body>



        <div class="mySlides fade">
            <img src="assets/img_1.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="assets/img_2.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="assets/img_3.jpg" style="width:100%">
        </div>



        <div class="navigation">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="assets/logo.png" style="width: 150px;height: 50px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="menu.php" style="font-size: 20px;font-family: 'Spicy Rice', cursive;padding-left: 40px;">Our Menu</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="cart.php" style="font-size: 20px;font-family: 'Spicy Rice', cursive;padding-left: 40px;">My Cart</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="order_history.php" style="font-size: 20px;font-family: 'Spicy Rice', cursive;padding-left: 40px;">Order History</a>
                        </li>

                    </ul>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="font-size: 20px;font-family: 'Spicy Rice', cursive;padding-left: 40px;"><?php session_start(); echo "Welcome ".$_SESSION["fname"];?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" style="font-size: 20px;font-family: 'Spicy Rice', cursive;padding-left: 40px;">Logout</a>
                    </li>
                </div>
            </nav>
        </div>

        <div class="menu">
            <div class="category_nav">
                <table>
                    <tr>
                        <td class="active_tab" id="drinks">Drinks</td>
                        <td id="snacks">Snacks</td>
                        <td id="desserts">Desserts</td>
                    </tr>
                </table>
            </div>
            <div class="search_bar">
                <div class="wrapper">
                    <input type="text" class="input" placeholder="What do you want?">
                    <div class="searchbtn">
                        <i class="fas fa-search"></i>
                    </div> 
                </div>
            </div>
            <div class="menu_items">

            </div>

            <div class="pagination">
                <div class="page_container">

                </div>
            </div>

        </div>
        <div id="overlay">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_OeOpE1/cart with items.json"  background="transparent"  speed="1"  style="width: 500px;height: 500px;"  loop autoplay >
            </lottie-player>
            <div class="text"><p>Your Item Has Been Added</p></div>
        </div>
        <div id="overlay_unavailable">
            <span style='font-size:100px;'>&#128534;</span>
            <div class="text"><p>Your Item is currently in preparation.</p></div>
        </div>


        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <h6>About</h6>
                        <p class="text-justify">Dallas Coffee is a popular coffee shop in Dallas especially famous for its various species of coffee beans,snacks,juices. It is Dallas's favourite hangout for coffee and conversations.Our coffees are sourced from thousands of small coffee planters, who made us who we are today and we're glad to be a part of their lives.We started our cafe in 2018 in Richardson,Texas.Its been an exciting journey till now and we hope it continues in the coming future as well.</p>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <h6>Contact Us</h6>
                        <p class="text-justify">7575 Frankford Road<br>Dallas TX 75252<br><i>Call us on (999) 999-9999</i></p>
                    </div>

                    <div class="col-xs-6 col-md-3">

                        <h6>Our Locations</h6>
                        <ul class="footer-links">
                            <li><a href="#">Dallas</a></li>
                            <li><a href="#">Richardson</a></li>
                            <li><a href="#">Plano</a></li>

                        </ul>
                    </div>
                </div>
                <hr>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <p>Copyright &copy; All Rights Reserved</p>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    </div>
                </div>
            </div>
        </footer>
        <script type="text/javascript">
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}
                slides[slideIndex-1].style.display = "block";  
                setTimeout(showSlides, 4000); // Change image every 4 seconds
            }
        </script>	
    </body>

</html>