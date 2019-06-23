<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>product</title>
<style>
    .topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
 font-weight:bold;
}

.topnav a:hover {
  background-color: blue;
  color: white;
}

.topnav a.active {
  background-color: blue;
  color: white;
}
body {font-family: Arial, Helvetica, sans-serif;}
table,th,td{
border: solid black;
padding: 5px;
margin-top: 100px;
    text-align: center;
}
.button {
    background-color: #4CAF50; /* Green */
    border-radius: 50%;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 40px 600px;
    cursor: pointer;
}
    input{
        border: none;
    }
</style>
</head>
<body style="background-color: #F4F7FC;">
    <div class="topnav">
        <a href="admin.html">Back</a>
</div><br>
<center> <?php
// Create connection
$conn = mysqli_connect("localhost","root","","stockmaintenance");;
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT productid,productname,quantity,price,manufacturer FROM product_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>PRODUCT_ID</th><th>PRODUCT_NAME</th><th>QUANTITY</th><th>PRICE</th><th>MANUFACTURER</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
                        echo "<tr><td>" . $row["productid"]. "</td><td>" . $row["productname"]. "</td><td>" . $row["quantity"]. "</td><td>" . $row["price"]. "</td><td>" . $row["manufacturer"]. "</td></tr>";
        

    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
    ?> </center>
</body>
</html>