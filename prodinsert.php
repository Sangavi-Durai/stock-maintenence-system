<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    .button {
    background-color: azure; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
    .button2 {
    background-color: white; 
    color: black; 
    border: 2px solid green;
}

.button2:hover {
    background-color: green;
    color: white;
}
    .button3 {
    background-color: white; 
    color: black; 
    border: 2px solid red;
}

.button3:hover {
    background-color: red;
    color: white;
}
body {font-family: Arial, Helvetica, sans-serif;}
table,th,td{
border: solid black;
padding: 5px;
margin-top: 100px;
    text-align: center;
}

  
	.det{
margin-top:13px;}
</style>
</head>
    <body>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{ 
    
   if($conn = mysqli_connect('localhost','root','','stockmaintenance'))
   {  $f1=$f2=$f3=$f4=$f5=$f6=$f7=$f8=$f9="";

     $f1=$_POST["prodid"];
     $f2=$_POST["qty"];
   
      
       
     $sql= "UPDATE product_details set qty=$f2 where productid='$f1'";
    
      mysqli_query($conn,$sql);
    
    $sql1 = "SELECT price FROM product_details WHERE productid='$f1'";
$price = $conn->query($sql1);
    $row = $price->fetch_assoc();
    $amt= $row["price"]*$f2;
     $sql= "UPDATE product_details set amt=$amt where productid='$f1'";
     mysqli_query($conn,$sql);
   
   }
    else  {
       
    echo "<script>
window.location.href='addtocartright.php';
</script>";
          
      }
$sql1 = "SELECT productid,productname,qty,amt FROM product_details WHERE productid='$f1'";
$result = $conn->query($sql1);
echo "<br><br><br><br><center><h2>RECEIPT</h2></center>";
echo "<center><table><tr><th>PRODUCT ID</th><th>PRODUCT NAME</th><th>QUANTITY</th><th>AMOUNT</th></tr>";
$row = $result->fetch_assoc(); 
echo "<tr><td>" . $row["productid"]. "</td><td>" . $row["productname"]. "</td><td>" . $row["qty"]. "</td><td>" . $row["amt"]. "</td></tr></table></center>";
$tax=100;
$gt=$row["amt"]+$tax;
echo "<center><b><br><br> Tax = Rs.".$tax;
echo "<br><br> Grand Total = Rs.".$gt;
echo "</b></center>";
}
?>

<center><br><br>
<form name="frmUser" method="post" action="javascript: con();">
      <input type="text" name="prodid" placeholder="Enter card number" required><br><br>
      <input type="password" name="qty" placeholder="Enter pin number" required><br><br>
    <?php echo " <input type='hidden' name='id' value='$f1'/>";?>
        <input type="submit" class="button button2" value="PAY"/>
<button type="button" onclick="top.location.href='productframe.html'" class="button button3">Cancel</button>    
</form>
</center>
</body>
<script>
    function con()
    { if(confirm("Are you sure?"))
        {
        alert("Payment Successful! Product will be delivered within a week.");
        top.location.href='productframe.html';
           <?php
            $sql2= "SELECT quantity FROM product_details WHERE productid='$f1'";
    $pr= $conn->query($sql2);
    $p= $pr->fetch_assoc();
    $p2=$p["quantity"]-$f2;
             $sql= "UPDATE product_details set quantity=$p2 where productid='$f1'"; 
            mysqli_query($conn,$sql);
    ?>}
    }
    </script>
</html>
