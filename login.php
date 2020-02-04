<!-- Aakash -->
<!-- 8622564 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html><?php
//require Database Connection
require('mysqli_connect.php');
//creating varibles
$username = mysqli_real_escape_string($dbc,trim($_POST['username']));
$password = mysqli_real_escape_string($dbc,trim($_POST['password'])); 

  
//that selects the users who have the username=$username AND password=$password
$query ="SELECT * FROM users WHERE username = '$username' AND password='$password'  LIMIT 1";
$result = mysqli_query($dbc,$query) or die ("COuld not connect to the database");

 
if(mysqli_num_rows($result)>0)
{
    //session start
    session_start();
    $_SESSION['login'] =true;
    header("Location: account.php");

}
else
{
    echo "Invalid Login Information";
}
        ?>
