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
    <link rel="stylesheet" href="css/media.css">
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
                        <li class="active"><a href="Select.php">Select</a></li>
                        <li><a href="Insert.php">Insert</a></li>
                        <li><a href="Updata.php">Updata</a></li>
                        <li><a href="Delete.php">Delete</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="clear"></div>
</header>

<!--Start Php code-->
<?php
// define variables and set to empty values
$catalogno = $isbn = $location = $max = $charge =$year= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $catalogno = test_input($_POST["catalogno"]);
    $isbn = test_input($_POST["isbn"]);
    $location = test_input($_POST["location"]);
    $max = test_input($_POST["max"]);
    $charge = test_input($_POST["charge"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!--End Php -->

<!-- Start Contact Section-->
<section id="contact" class="contactUs">
    <div class="container">
        <h2>Update Physical copy by Catlog no</h2>
        <hr>
        <p>1600 Pennsylvania Ave NW, Washington, DC 20500, United States of America. Tel: (202) 456-1111</p>
        <div class="contact">
            <form  method="post">
                <input type="text" name="catlogno" placeholder="Enter Catlog No." required>
                <br>
                <br>
                <input type="text" name="isbn" placeholder="Enter New ISBN" required>
                <input type="text" name="location" placeholder="Enter New Book Location" required>
                <input type="text" name="max" placeholder="Enter New Max Day For loan" required>
                <input type="text" name="charge" placeholder="Enter New Charge Dely For Day" required>
                <br>
                <input type="submit" value="Insert">
            </form>
        </div>

    </div>
</section>

<!-- End Contact Section-->
<!--Start Insert PhP-->
<?php
include 'config.php';
$sql = "UPDATE `physical_copy` SET `Loction` = '$location', `maxdayloan` = '$max', `charge_Perday` = '$charge' WHERE CatalogNo = '$catalogno'";
try{
    $conn->exec($sql);
}catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>

<!--END Insert PhP-->

<!--Start footer section-->
<footer>
    <div class="container">
        <ul>
            <li><a href="#">Facebook</a> </li>
            <li><a href="#">Twitter</a> </li>
            <li><a href="#">Google+</a> </li>
            <li><a href="#">linkendIn</a> </li>
            <li><a href="#">behance</a> </li>
            <li><a href="#">Dribble</a> </li>
            <li><a href="#">GithUp</a> </li>

        </ul>
    </div>
</footer>

</body>
</html>