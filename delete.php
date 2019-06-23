<?php
 include("user_login_session.php");

    
   if($conn = mysqli_connect('localhost','root','','stockmaintenance'))
   {  $id=$_SESSION["username"];
    $sql = "SELECT * FROM personal_details where username='$id';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


     $f1=$row["id"];
       
     $sql= "DELETE FROM personal_details WHERE id='$f1'";
    
      if(mysqli_query($conn,$sql))
    {
        $f1="";
    echo "<script>
alert('ACCOUNT TERMINATED');
window.location.href='logout.php';
</script>";
}
    else
    {echo '<script language="javascript">';
echo 'alert("Error3")';
echo '</script>';
    }
   $conn->close();
   }
    else
    {echo '<script language="javascript">';
echo 'alert("Error2")';
echo '</script>';
    }
?>