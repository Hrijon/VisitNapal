<!DOCTYPE html>
<html>
<body>

<?php
 session_start();
 require'config.php';

$sql = "SELECT * FROM VisitorInfo";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Name: ". $row["VisitorName"]. " - Country: ". $row["Country"]. " - Age: " . $row["Age"]." - Date: " . $row["Date"]. "<br>";
    }
} else {
    echo "0 results";
}

$con->close();
?>

</body>
</html>