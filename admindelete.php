<?php
// Create connection
$conn = mysqli_connect("localhost","root","","stockmaintenance");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 $f1=$_POST["prodid"];
$sql = "SELECT * FROM product_details WHERE productid='$f1'";
$result = mysqli_query($conn,$sql);
$row  = mysqli_fetch_array($result);
if(is_array($row)) {

$sql = "DELETE FROM product_details WHERE productid='$f1'";

if ($conn->query($sql)) {
    echo "<script>
alert('Product Removed From Stock.');
window.location.href='adelete.html';  
</script>";
} 

else {
    echo "Error deleting record: " . $conn->error;
      echo "<script>
window.location.href='adelete.html';  
</script>";
    
}}

else
{
     echo "<script>
alert('Invalid product id.');
window.location.href='adelete.html';  
</script>";
}

$conn->close();
?>