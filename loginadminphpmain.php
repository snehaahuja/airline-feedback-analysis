<?php
	session_start();
	$error='';
	if(isset($_POST['submit']))
	{
		
			$username=$_POST['username'];
			$password=$_POST['password'];

			$connect=new Mongo();
			$database=$connect->project;
			$collection=$database->admin;
			$user=$collection->find(array('username'=>$username,'password'=>$password));
			$num=$user->count();
			if($num==1)
			{
				$_SESSION['login_admin']=$username;
				header("location: welcomeadmin.php");
			}
			else
			{
				$error= "<span style='color:red'><b>Username or password is invalid</b></span>";
                
			}
		
	}	
   
	
?>