<?php
{
    include('loginadminphpmain.php');    
}?>
<html>
	<head>
		<title>
		Admin Login
		</title>
        <style>
        h1
        {
            background-color: navy;
            color:#FFFFFF;
        }
        .button
		{
			background-color: navy;
			color: #FFFFFF;
			width: 100px;
			height: 40px;
			font-size:17;
		}
		.main
		{
		    background-color:#D3D3D3;
		    width: 350px;
		    height: 300px;
            padding: 15px;
           border:5px inset;
                  
            
		}
		
        </style>
	</head>
	<body background="airplane.jpg">
		<br/><br/><br/><br/><br/><br/>
           <center>
           <div class="main">
			
            <h1>ADMIN LOGIN</h1>
				<form action="" method="POST">
					<table>
						<tr><td><b>Username</b>: </td><td><input type="text" name="username"/></td></tr><br/>
						<tr></tr>
						<tr></tr>	
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr><td><b>Password</b>: </td><td><input type="password" name="password"/></td></tr><br/>
						<tr></tr>
						<tr></tr>	
						<tr></tr>
						<tr></tr>
						<tr></tr>
					</table>
                     <br />
                     <?php echo  $error ; ?> 
                    <br/><br/>
					<center><input type="submit" value="SIGN IN" name="submit" class="button"></center>
					
					
				</form>		
				
            </div>
            </center>
	</body>
</html> 
