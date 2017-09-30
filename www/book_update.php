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
$isbn = $title = $author = $publisher = $price =$year= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isbn = test_input($_POST["isbn"]);
    $title = test_input($_POST["title"]);
    $author = test_input($_POST["author"]);
    $publisher = test_input($_POST["publisher"]);
    $price = test_input($_POST["price"]);
    $year=test_input($_POST["year"]);
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
        <h2>Update Book By ISBN</h2>
        <hr>
        <p>1600 Pennsylvania Ave NW, Washington, DC 20500, United States of America. Tel: (202) 456-1111</p>
        <div class="contact">
            <form  method="post">
                <input type="text" name="isbn" placeholder="Enter BOOK ISBN to update" required>
                <br>
                <br>
                <input type="text" name="title" placeholder="Enter New Title BOOK" required>
                <input type="text" name="author" placeholder="Enter New BOOK Author" required>
                <input type="text" name="publisher" placeholder="Enter New Publisher" required>
                <input type="date" name="year" placeholder="Enter New Date of Publish" >
                <input type="text" name="price" placeholder="Enter New BOOK Price" >
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
$sql = "UPDATE `book` SET `Title` = '$title', `Author` = '$author', `Publisher` = '$publisher', `Year` = '$year', `Price` = '$price' WHERE ISBN = '$isbn' ";
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