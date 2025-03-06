<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Produkte</title>
    </head>
    <body>
        <ul>
            <li><a style="color:rgb(129, 224, 145);"class="navigation_bar_home" href="index.html"><strong>CONSPIRACY.WEB</strong></a></li>
            <li><a class="navigation_bar" href="articles.html">WEB-ARTIKEL</a></li>
            <li><a class="navigation_bar_selected" href="products.html">PRODUKTE</a></li>
            <li><a class="navigation_bar" href="forum.html">FORUM</a></li>    
        </ul> 
        <?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// Open database
$sql = "USE conspiracyweb";
if ($conn->query($sql) === TRUE) {

} else {
}

// Open database
$sql = "SEL conspiracyweb";



$sql = "SELECT * FROM table_products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<div class=\"product_list_item\">";
    echo "<img src=\"" . $row["photo"] . "\"/>";
    echo "<h1>" . $row["name"] . "</h1>";
    echo "<p class=\"product_list_item_description\">" . $row["short_text"] . "</p>";
    echo "<p class=\"price_tag\">CHF <br> " . $row["price"] . "</p>";
    echo "</div>";
    
    
    
    


    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}


$conn->close(); 
?> 

    </body>
</html>