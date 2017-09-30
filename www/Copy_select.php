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

<!-- Start Contact Section-->
<section id="contact" class="contactUs">
    <div class="container">
        <h2>Show Physical Copy Table</h2>
        <hr>
        <p>1600 Pennsylvania Ave NW, Washington, DC 20500, United States of America. Tel: (202) 456-1111</p>
        <div class="contact">
            <?php
            include 'config.php';
            echo "<table style='border: solid 1px black;'>";
            echo "<tr><th>Catalog No</th><th>ISBN</th><th>Location</th><th>Max Day For loan</th><th>Charge dely Per Day</th></tr>";

            class TableRows extends RecursiveIteratorIterator {
                function __construct($it) {
                    parent::__construct($it, self::LEAVES_ONLY);
                }

                function current() {
                    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
                }

                function beginChildren() {
                    echo "<tr>";
                }

                function endChildren() {
                    echo "</tr>" . "\n";
                }
            }

            try {
                $stmt = $conn->prepare("SELECT * FROM physical_copy");
                $stmt->execute();

                // set the resulting array to associative
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                    echo $v;
                }
            }
            catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            $conn = null;
            echo "</table>";
            ?>
        </div>

    </div>
</section>

<!-- End Contact Section-->
<!--Start Insert PhP-->

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