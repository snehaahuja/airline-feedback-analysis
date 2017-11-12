
<?php
include('loginuserphpmain.php'); 
?>
<html>
	<head>
		<title>
		User Login
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
            cursor: pointer;
		}
		.main
		{
		    background-color:#D3D3D3;
		    width: 350px;
		    height: 400px;
            padding: 15px;
           border:5px inset;
                  
            
		}
		.sub1 {
    
    display: block;
    width: 134px;
    height: 35px;
    border: 0 none;
    text-decoration-line: underline;
    font-size: 15;
    //text-align: center;
    background-color : #D3D3D3;
    border-width :inherit;
    color: #f00;
    cursor: pointer;
}
        
            
        </style>
	</head>
	<body background="airplane.jpg">
		<br/><br/><br/><br/><br/><br/>
           <center>
               
           <div class="main">
			
            <h1>LOGIN</h1>
				<form action="" method="post">
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
						
						
					</table>
                    <br /><br/>
                     <?php echo  $error ; ?> 
                    <br/><br/><br/>
					<center><input type="submit" name="submit" value="SIGN IN" class="button"></center>
                    
                 
					<br/>
                    
                    
					Create an account? <a href="signuphtmlmain.php" ><font color="red">Sign Up</font></a>
				</form>		
				
            </div>
               
            </center>
	</body>
</html> 
