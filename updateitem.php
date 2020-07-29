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

        <!-- jquery link -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/menu_for_item_deletion.js"></script>


        <!-- templates -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">






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
                        
                       
                        <li class="nav-item">
                            <a class="nav-link" href="addinventory.php" style="font-size: 20px;font-family: 'Spicy Rice', cursive;padding-left: 40px;">Add to Inventory</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="deleteitem.php" style="font-size: 20px;font-family: 'Spicy Rice', cursive;padding-left: 40px;">Delete from Inventory</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="updateitem.php" style="font-size: 20px;font-family: 'Spicy Rice', cursive;padding-left: 40px;">Update Inventory</a>
                        </li>
                    </ul>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" style="font-size: 20px;font-family: 'Spicy Rice', cursive;padding-left: 40px;">Logout</a>
                    </li>

                </div>
            </nav>
        </div>

        <div id = "update_item">

            <div class="wrapper">


                <form class="form-signin" form action="updation.php" method="post" enctype="multipart/form-data" style="color:white">

                    Fill in the details to make updations to the existing Inventory
                    Note: Item ID is mandatory to make any change
                    <label for="Item ID:">Enter Item ID:</label>
                    <input type="number" id="itemid" name="itemid" class="form-control" required="" autofocus=""/>



                    <br>
                    <br>
                    <label for="itemtype">Update Item Category:</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span><i></i></span>
                            <select id="itemtype" name="itemtype" class="form-control-lg">
                                <option value="drinks">Drinks</option>
                                <option value="snacks">Snacks</option>
                                <option value="desserts">Desserts</option>
                            </select>
                        </div>
                        <input type="submit" class="form-control-lg" name="submit1" id="submit1" value="Update Category">
                    </div>
                    <label for="itemname">Enter Item Name:</label>
                    <input type="text" id="itemname" name="itemname" class="form-control"><input type="submit" name="submit2" id="submit2" value="Update Item Name"> 

                    <br>
                    <label for="description">Enter Item Description:</label>
                    <input type="text" id="description" name="description" class="form-control"><input type="submit" name="submit3" id="submit3" value="Update Description"> 

                    <br>
                    <label for="quantity">Enter Item Quantity:</label>
                    <input type="text" id="quantity" name="quantity" class="form-control"><input type="submit" name="submit4" id="submit4" value="Update Quantity"> 

                    <br>

                    <label for="price">Enter Price:</label>
                    <input type="text" id="price" name="price" class="form-control"><input type="submit" name="submit5" id="submit5" value="Update Price">

                    <br>
                    Replace Image : Browse the new image to replace the existing one
                    <label for="file">Filename</label>
                    <input type="file" name="file" class="form-control" id="file" /><input type="submit" name="submit6" id="submit6" value="Update Image"> 
                    <br>

                    <label for="softdelete">Soft Delete? :</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span><i></i></span>
                            <select id="softdelete" name="softdelete" class="form-control-lg">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                        <input type="submit" name="submit7" id="submit7" value="Update Soft Delete">
                    </div>


                    <div id="tab"></div>

                </form>

            </div>

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
                    <input type="text" class="input" placeholder="Search the existing Inventory">
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

        <div id="#confirmation"></div>

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
        <script type=text/javascript>

            $(document).ready(function() {

                $("#submit2").click(function(){

                    var item_id_val = $("#itemid").val();
                    var itemname_val = $("#itemname").val();
                    $.ajax({
                        url:"updation.php",
                        method:"POST",
                        data: {itemid:itemid_val,itemname:itemname_val},
                        dataType:"text",
                        success:function(html){

                        }
                    }

                          );    

                });
                $("#submit1").click(function(){

                    var item_id_val = $("#itemid").val();
                    var itemtype_val = $("#itemtype").val();
                    $.ajax({
                        url:"updation.php",
                        method:"POST",
                        data: {itemid:itemid_val,itemtype:itemtype_val},
                        dataType:"text",
                        success:function(html){

                        }
                    }

                          );    

                });
                $("#submit3").click(function(){

                    var item_id_val = $("#itemid").val();
                    var description_val = $("#description").val();
                    $.ajax({
                        url:"updation.php",
                        method:"POST",
                        data: {itemid:itemid_val,description:description_val},
                        dataType:"text",
                        success:function(html){

                        }
                    }

                          );    

                });
                $("#submit4").click(function(){

                    var item_id_val = $("#itemid").val();
                    var quantity_val = $("#quantity").val();
                    $.ajax({
                        url:"updation.php",
                        method:"POST",
                        data: {itemid:itemid_val,quantity:quantity_val},
                        dataType:"text",
                        success:function(html){

                        }
                    }

                          );    

                });
                $("#submit5").click(function(){

                    var item_id_val = $("#itemid").val();
                    var price_val = $("#price").val();
                    $.ajax({
                        url:"updation.php",
                        method:"POST",
                        data: {itemid:itemid_val,price:price_val},
                        dataType:"text",
                        success:function(html){
                        }
                    }

                          );    

                });
                $("#submit6").click(function(){

                    var item_id_val = $("#itemid").val();
                    var file_val = $('#file').val();
                    $.ajax({
                        url:"updation.php",
                        method:"POST",
                        data: {itemid:itemid_val,file:file_val},
                        dataType:"text",
                        success:function(html){

                        }
                    }

                          );    

                });
                $("#submit7").click(function(){

                    var item_id_val = $("#itemid").val();
                    var soft_delete_val = $("#softdelete").val();
                    $.ajax({
                        url:"updation.php",
                        method:"POST",
                        data: {itemid:itemid_val,softdelete:soft_delete_val},
                        dataType:"text",
                        success:function(html){

                        }
                    }

                          );    

                });


            });
        </script>
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





?>