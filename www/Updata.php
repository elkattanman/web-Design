<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--meta for mobile-->
    <meta  name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Library</title>
</head>

<body>
<header>
    <nav>
        <div class="container">
            <div class="branding">
                <h2>Library</h2>
            </div>
            <div class="navBar">
                <div class="container">
                    <ul>
                        <li><a href="Select.php">Select</a></li>
                        <li><a href="Insert.php">Insert</a></li>
                        <li class="active"><a href="Updata.php">Updata</a></li>
                        <li><a href="Delete.php">Delete</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="clear"></div>
</header>
<!-- end header section-->
<section id="services" class="services">
    <div class="container">
        <h2>Update record from table</h2>
        <hr>
        <p>We are working with both individuals and businesses from all over the globe
            to create awesome websites and applications.
        </p>
        <div class="service wow bounceInUp" data-WOW-duration="4s"  data-wow-offset="300" >
            <i class="fa fa-book" aria-hidden="true"></i>
            <h3><a href="book_update.php">Book</a></h3>
            <p>Lorem ipsum dolor sit amet,
                consectetuer adipiscing elit, sed diam nonummy nibh.</p>
        </div>
        <div class="service wow bounceInDown" data-WOW-duration="4s"  data-wow-offset="300" >
            <i class="fa fa-flag" aria-hidden="true"></i>
            <h3><a href="loan_update.php">loan</a></h3>
            <p>Lorem ipsum dolor sit amet,
                consectetuer adipiscing elit, sed diam nonummy nibh.</p>
        </div>
        <div class="service wow bounceInUp" data-WOW-duration="4s" data-wow-offset="300" >
            <i class="fa fa-pencil" aria-hidden="true"></i>
            <h3><a href="reader_update.php">reader</a></h3>
            <p>Lorem ipsum dolor sit amet,
                consectetuer adipiscing elit, sed diam nonummy nibh.</p>
        </div>
        <div class="service wow bounceInDown" data-WOW-duration="4s"  data-wow-offset="300" >
            <i class="fa fa-clipboard" aria-hidden="true"></i>
            <h3><a href="Copy_update.php">Physical Copy</a></h3>
            <p>Lorem ipsum dolor sit amet,
                consectetuer adipiscing elit, sed diam nonummy nibh.</p>
        </div>
    </div>
</section>
<div class="clear"></div>
<!--end services section-->

<!-- start skills section-->

<div class="clear"></div>
<!-- start Portfolio Section-->

<!--End footer section-->
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/wow.min.js"></script>
<script>new WOW().init();</script>
<script src="js/plugin.js"></script>
<script src="js/custom.js"></script>
</body>
</html>