<!DOCTYPE html>
<html lang="en">

<head>

    <!--=========================================== WEBPAGE METADATA ====================================-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>W Demo</title>

    <!--=========================================== CSS FILES ===========================================-->
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main2.css">

</head>



<body style="background-color: #1b6d85">

<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1000" height="200" id="svg1">
    <defs>

        <!-- Equilateral Triangle -->
        <clipPath id="clip1">
            <polygon points="50,0 0,100 100,100" fill="" id="poly1">  <!-- Coordinate system is x,y with 0,0 being the top left corner -->
        </clipPath>

        <!-- Upside down Equilateral Triangle -->
        <clipPath id="clip2">
            <polygon points="0,0 100,0 50,100" fill="" id="poly2">
        </clipPath>

        <!-- Right Angle Triangle (Right) -->
        <clipPath id="clip3">
            <polygon points="50,0 50,100 0,100" fill="" id="poly3">
        </clipPath>

        <!-- Right Angle Triangle (Left) -->
        <clipPath id="clip4">
            <polygon points="50,0 50,100 100,100" fill="" id="poly4">
        </clipPath>
    </defs>

    <image xlink:href="//placehold.it/500x500" clip-path="url(#clip1)" id="im1"></image>
    <image xlink:href="//placehold.it/501x501" clip-path="url(#clip2)" id="im2"></image>
    <image xlink:href="//placehold.it/502x502" clip-path="url(#clip1)" id="im3"></image>
    <image xlink:href="//placehold.it/503x503" clip-path="url(#clip2)" id="im4"></image>
    <image xlink:href="//placehold.it/504x504" clip-path="url(#clip1)" id="im5"></image>

    <!-- Ends before right angles-->
    <image xlink:href="//placehold.it/501x501" clip-path="url(#clip2)" id="im0"></image>
    <image xlink:href="//placehold.it/503x503" clip-path="url(#clip2)" id="im6"></image>

    <!-- Right angled ends -->
    <image xlink:href="//placehold.it/499x499" clip-path="url(#clip3)" id="imL1"></image>
    <image xlink:href="//placehold.it/505x505" clip-path="url(#clip4)" id="imR1"></image>
</svg>






<!--=========================================== JS SCRIPTS ==========================================-->
<!-- jQuery -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<!---->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<script src="js/main.js" type="text/javascript"></script>


</body>

</html>