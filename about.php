<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website - About Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styling.css">
</head>
<body>
    <?php 
        include "header.php";
    ?>
    <div class="container-fluid" id="content" style="background-image: url('images/office.jpg');">
        <h1 style="text-align:center; font-size: 72px;">About Us</h1>
        <p class="text1">
            This might be the most distinctive website we’ve come across.

            Anton & Irene is a design agency based in Manhattan.

            Why are they a distinctive web presence?

            Because their page takes parallax scrolling to the next level.

            The snowy effects, bold colors, and quirky visuals create a truly captivating experience
        </p>
    </div>
   
    

    <div id="foot">
        <?php
            include "footer.php"
        ?>
    </div>
</body>
</html>