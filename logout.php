


<html>
    <head>
  <link rel="stylesheet" type="text/css" href="css/menu.css">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@0.4.0/dist/lottie-player.js"></script>
    </head>
    <body>
        
        
    
<script type="text/javascript">
    
             alert("Order successfully placed");
    
  
        </script>
    


<?php
        sleep(3);
    session_start();


unset($_SESSION['fname']);
unset($_SESSION['email']);
session_destroy(); 


header('Location: index.html');
?>
        
        </body>
     </html>