<!-- Aakash -->
<!-- 8622564 -->

<?php
session_start();
if($_SESSION['login'] == true)
{
    echo "Welcome to your account";

}
else
{
    header("Location: index.html");
}
?>
