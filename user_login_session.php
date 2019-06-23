<?php
session_start();
$message="";
if(count($_POST)>0) {
$conn = mysqli_connect("localhost","root","","stockmaintenance");
$sql="SELECT * FROM personal_details WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'";
$result = mysqli_query($conn,$sql);
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
    
if($row["id"]==12)
    
{
    $_SESSION["username"] = $row[username];
$_SESSION["password"] = $row[password];
header("Location:admin.html");
}
else
{
$_SESSION["username"] = $row[username];
$_SESSION["password"] = $row[password];
header("Location:productframe.html");
} 
}
else {
    
   echo "<script>
alert('Invalid username or password');
window.location.href='home.php';  
</script>";
}
   

}

?>
