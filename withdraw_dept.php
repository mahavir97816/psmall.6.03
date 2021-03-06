<?php
include("connection.php");
session_start();
error_reporting(0);
$id = $_SESSION['admin_id'];

if($id==true)
{

}

else
{
    header("location:admin_login.php");
}

/*
$query = "SELECT *from users where phone_number='$userphone'";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);
$_SESSION['id']=$result['user_id'];
$_SESSION['pass'] = $result['password'];
$id = $_SESSION['id'];

$q_avail = "SELECT * from wallet where user_id = $id";
$run_q_avail = mysqli_query($conn,$q_avail);
$wallet_result = mysqli_fetch_assoc($run_q_avail);

*/

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Ps Club</title>
<link rel="icon" href="/img/site_logo.png" type="image/gif" sizes="32x32">
<link rel="stylesheet" href="my_account.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
</script>
 
<!-- style section start -->
<style>
  /*iput fields icon color change to #954697*/
  /*text-indent:30px; to left the text in text fields*/

  /*login button in the middle*/
  .logout_button{
  background:yellow;
    border: none;
    color: black;
    padding: 10px 14px;
    text-align: center;
    text-decoration: none;
    font-size: 14px;
  border-radius: 2px;
  font-family:sans-serif;

  }
  .logout_button:hover{ /*when hover on login button change color*/
  background:#006600;
  }


</style>
 
</head>
<body id="body_gradient" style="height:100%;font-family: Roboto,sans-serif;">
<p style="text-align:center;margin-top:30px;">
<a href="admin_logout.php" onclick="return confirm('Do you want to logout?')" style="width:70px;outline:none;" class="logout_button" >Logout</a>
</p>

<br><br><br>



</body>
</html>