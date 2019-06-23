<?php
// Create connection
$conn = new mysqli("localhost","root","","stockmaintenance");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$f1=$f2=$f3=$f4=$f5="";

$f1=$_POST["prodid"];
$f2=$_POST["prodname"];
$f3=$_POST["quant"];
$f4=$_POST["price"];
$f5=$_POST["manu"];

$sql = "INSERT INTO product_details (productid,productname,quantity,price,manufacturer)
VALUES ('$f1', '$f2', $f3 , $f4,'$f5')";

if ($conn->query($sql) === TRUE) {
     echo "<script>
alert('New product added to stock.');
window.location.href='ainsert.html';  
</script>";
} 

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
     echo "<script>
window.location.href='ainsert.html';  
</script>";
  
}

$conn->close();
?>

