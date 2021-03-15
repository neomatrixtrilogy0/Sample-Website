<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website - Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styling.css">
    <style>
        p {
            color: white;
            font-size: 20px;
        }
    </style>

</head>
<body>
    <?php
        include "header.php"
    ?>
    <div class="container-fluid" id="content" >
        <div class="row">
            <div class="col-md-12" style="margin-top: 1%;">
                <center><h1>Get In Touch With Us</h1></center>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Hornsey%20Rd,%20London%20N7%207AJ,%20United%20Kingdom&t=k&z=9&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org">putlocker</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">google maps embed iframe</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
            </div>
            <div class="col-sm-6">
                <h2 style="color: brown;">Fill Up Your Details</h2>
                <form action="mailsend.php" method="POST">
                    <div class="form-group">
                        <label for="name">Your Full Name</label>
                        <input type="text" name="fullname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Contact Number</label>
                        <input type="phone" name="contact" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="email" name="mailid" class="form-control">
                    </div>
                    
                        <input type="submit" name="SUBMIT" class="btn btn-success">
                        <input type="reset" name="CLEAR" class="btn btn-default">
                    
                </form>
            </div>
        </div>
    </div>



    <div id="foot">
        <?php
            include "footer.php"
        ?>
    </div>
    
</body>
</html>