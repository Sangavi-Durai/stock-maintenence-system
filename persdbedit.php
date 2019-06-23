<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{ 
    
   if($conn = mysqli_connect('localhost','root','','stockmaintenance'))
   {  $f1=$f2=$f3=$f4=$f5=$f6=$f7=$f8=$f9=$f10=$f11="";

     $f1=$_POST["id"];
     $f2=$_POST["name"];
     $f3=$_POST["username"];
     $f4=$_POST["password"];
     $f5=$_POST["dob"];
     $f6=$_POST["gender"];
     $f7=$_POST["email_id"];
     $f8=$_POST["phone"];
     $f9=$_POST["address"];
     $f10=$_POST["member"];
     $f11=$_POST["feedback"];
       
     $sql= "UPDATE personal_details SET name='$f2',username='$f3',password='$f4',dob='$f5',gender='$f6',email='$f7',phone='$f8',address='$f9',member='$f10',feedback='$f11' where id=$f1;";
    
      if(mysqli_query($conn,$sql))
    {
        $f1=$f2=$f3=$f4=$f5=$f6=$f7=$f8=$f9=$f10=$f11="";
    echo "<script>
alert('SAVED CHANGES');
window.location.href='personaldisplay.php';
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
 
    
    
}
else
    {echo '<script language="javascript">';
echo 'alert("Error1")';
echo '</script>';
    }
     





?>