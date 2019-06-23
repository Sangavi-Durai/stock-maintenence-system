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
     .button1 {
    background-color: white; 
    color: black; 
    border: 2px solid green;
         margin-top: 800px;
}

.button1:hover {
    background-color: green;
    color: white;
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

body {font-family: Arial, Helvetica, sans-serif;
background-image: url("cart.jpg");
   background-repeat:no-repeat;
    background-size: contain;
    background-color: #f4f7fc;
    background-position: center;
  margin: 0;

}

.centered {
    position: absolute;
    padding-top: 40%;
    left: 50%;
   transform: translate(-50%, -50%);  
}
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    font-size:20px;
    background-color: blue;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body><br>

<?php include("user_login_session.php"); ?>
<?php 

$conn = mysqli_connect("localhost","root","","stockmaintenance");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id=$_SESSION["username"];
    $sql = "SELECT * FROM personal_details where username='$id';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo"<center><h3>Welcome ".$row["name"]."</h3></center>";

$conn->close();
?> 

<div class="centered">
 <center>

<br/>
<br/>
<button class="button button1" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">ADD TO CART</button>
</center>
</div>



<div id="id01" class="modal">
  
  <center><form name="frmUser" class="modal-content animate" method="post" action="prodinsert.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
      <label for="uname"><b>PRODUCT ID</b></label>
      <input type="text" name="prodid" required><br>

      <label for="psw"><b>QUANTITY</b></label><br>
      <input type="number" name="qty" required><br><br>
         <label for="psw"><b>Confirm</b></label>
        <input type="checkbox" value="" required><br>
        <input type="submit" class="button button2" value="PAY"/>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
      </form></center>
</div>

<script>
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>



