<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{ 
    
   if($conn = mysqli_connect('localhost','root','','stockmaintenance'))
   {  $f1=$f2=$f3=$f4=$f5=$f6=$f7=$f8=$f9="";

     $f1=$_POST["name"];
     $f2=$_POST["username"];
     $f3=$_POST["password"];
     $f4=$_POST["dob"];
     $f5=$_POST["gender"];
     $f6=$_POST["email"];
     $f7=$_POST["phone"];
     $f8=$_POST["address"];
     $f9=$_POST["member"];
      
       
     $sql= "INSERT INTO personal_details (name,username,password,dob,gender,email,phone,address,member) VALUES ('$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8','$f9');";
    
      if(mysqli_query($conn,$sql))
    {
        $f1=$f2=$f3=$f4=$f5=$f6=$f7=$f8=" ";
    echo "<script>
alert('SIGN-UP SUCCESSFUL');
window.location.href='home.php';
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