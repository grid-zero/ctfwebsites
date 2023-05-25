<!DOCTYPE html>
<html>
    <head>
        <style>

#wrapper {
    border: 1px solid blue;
    
    display:flex;
}
#div1 {    
    flex:20%;
    border: 1px solid red;
}
#div2 {    
    flex:80%;
    border: 1px solid red;
    width:1%;
}
#div3 {    
    padding:0px;
    width:30%;
}
table {

  border-spacing: 10;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
        </style>
    </head>
    <body>
        <p>Hello and welcome to the secure file storage service, please select an area from the left and enter the corresponding password to recieve the location that it is stored in <br> our top of the line secure servers use the hightech sql to store the data in a proper and secure manner to ensure the very best security for your files and info</p>
        <div id="wrapper">
            <div id="div1">
            <table border='10'>
                <tr><td> images </td></tr>
                <tr><td> data </td></tr>
                <tr><td> files </td></tr>
    
            </table>
            </div>
            <div id="div2">
                <div id=div3>
            <form action="index.php" method="post">
            Enter page name: <input style = "float:right;" type = "text" name = "pagename">
            <br>
            Enter page password:  <input style = "float:right" type = "text" name = "password">
            <br>
            <input type="submit" name="someAction" value="GO" />
            </form>
</div>
                </div>
        </div>
        <p backdoor passowrd="'OR 1='1"> </p>
        <?php
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction']))
{
    func();
}
function func()
{
$username = "root";
$password = "pass";
$hostname = "localhost"; 
$database = "access";


// Create connection
$connection = new mysqli($hostname, $username,"",$database);

if ($connection->connect_error) {
    die("Connection failed: "
        . $connection->connect_error);
}



echo "<br>";
$sql = "SELECT * FROM data WHERE id = '$_POST[pagename]' AND(password = '$_POST[password]')";
echo $sql;
echo "<br>";
$result = $connection->query($sql);
$row= $result->fetch_assoc();
echo "The page location is:  ";
echo $row["location"];  
}
 ?>

    </body>




</html>