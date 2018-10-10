<?php
session_start();
include('connect.php');
$username = $_POST['name'];
$password = md5($_POST['pwd']);

$query = "SELECT * FROM user_login WHERE login_name ='$username' AND login_password = '$password' AND active_status = '1'";
//echo $query;
//die();
$result = mysql_query($query)or die(mysql_error());
$num_row = mysql_num_rows($result);
		$row=mysql_fetch_array($result);
		$type_id=$row['user_type_id'];
		if( $num_row >=1 ) {
			if($type_id == 1)
			{
			echo '1';
			$_SESSION['user_name']=$row['login_name'];
			$_SESSION['user_id']=$row['login_id'];
			$_SESSION['active_status']=$row['active_status'];
			}
			elseif($type_id == 2)
			{
			echo '2';
			$_SESSION['user_name']=$row['login_name'];
			$_SESSION['user_id']=$row['login_id'];
			$_SESSION['active_status']=$row['active_status'];
			}
			elseif($type_id == 3)
			{
			echo '3';
			$_SESSION['user_name']=$row['login_name'];
			$_SESSION['user_id']=$row['login_id'];
			$_SESSION['active_status']=$row['active_status'];
			}
				
		}
		else{
			echo '0';
		}
?>