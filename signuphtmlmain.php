<?php
include('signupphpmain.php');
?>	



<html>
	
	<head>
		
		<title>
		Sign Up		
        </title>
		<style>
		input:required:invalid, 
    	input:focus:invalid
        {
       	    background-image: url("alert1.png");
    	    background-position: right;
    	    background-repeat: no-repeat;
  	    }
    	input:required:valid
	    {
    	    background-image: url("tick.jpg");
 	        background-position: right;
 	        background-repeat: no-repeat;
 	    }
		
		h1
		{
			background-color: navy;
			color: #FFFFFF;
			
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
		    height: 590px;
            padding: 15px;
            border: 5px inset;
                  
            
		}
		
		</style>
	
	</head>
	
	
	<body background="airplane.jpg">
	<script>
     function same() {

         var pass1 = document.getElementById("pwd1").value;
         var pass2 = document.getElementById("pwd2").value;
         var ok = true;
         if (pass1 != pass2) {
             ok = false;
         }
         return ok;
     }

     function checkForm(form) {

         if (form.pwd1.value == form.pwd2.value) {

             form.pwd1.focus();
             return true;

         }
         else {

             form.pwd1.focus();
             return false;
         }

     }

    </script>
	<center> 
    <div class="main">
		
	<h1>SIGN UP</h1>
	
		
		
		<form name="SignUp" action="" method="post" enctype="multipart/form-data" onsubmit="return checkForm(this);">
			
			
			<table>
			
				
				<tr><td><b>First Name</b><font color="red">*</font>: </td><td><input type="TEXT" name="fname" Maxlength="50" pattern="^[A-Za-z]+$" title="Should be only characters" required required autocomplete="off"/></tr>

				<tr><tr/><tr><tr/><tr><tr/>
				<tr><td><b>Last Name</b><font color="red">*</font>: </td><td><input type="TEXT" name="lname" Maxlength="50" pattern="^[A-Za-z]+$" title="Should be only characters" required required autocomplete="off"/></tr>   
				
				<tr><tr/><tr><tr/><tr><tr/>
				<tr><td><b>Address</b>: </td><td><Textarea rows="3" name="address"></textarea></td></tr>
				<tr><tr/><tr><tr/><tr><tr/>
				<tr><td><b>Date of Birth</b>: </td><td><input type="DATE" name="dob"/></td></tr>				
				<tr><td></td><td><?php echo $valid;?></td><tr/><tr><tr/><tr><tr/>
				<tr><td><b>Gender</b>: </td><td><input type="RADIO" name="gender" value="female" checked/>Female<input type="RADIO" name="gender" value="male"/>Male
				
				<tr><tr/><tr><tr/><tr><tr/>
				<tr><td><b>Mobile No.</b>: </td><td><input type="TEXT" name="mobile" Maxlength="10" placeholder="10 digits" pattern="^\d{10}$" title="Should have 10 digits" autocomplete="off"/>
</td></tr>				
				<tr><tr/><tr><tr/><tr><tr/>
				<tr><td><b>Email-ID</b><font color="red">*</font>: </td><td><input type="TEXT" name="email" Maxlength="50" placeholder="ex: abc@xyz.com" pattern="([A-Za-z0-9_\.])+\@([A-Za-z])+\.([A-Za-z.]{2,5})" title="Should be a valid email-id" required autocomplete="off"/></td></tr>
				
				<tr><tr/><tr><tr/><tr><tr/>
				<tr><td><b>Username</b><font color="red">*</font>: </td><td><input type="TEXT"  name="username" maxlength="50" required autocomplete="off" /><?php echo $error;?>
</td></tr>				
				<tr><tr/><tr><tr/><tr><tr/>
				<tr><td><b>Password</b><font color="red">*</font>: </td><td><input type="password" name="pwd1" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="It should have atleast 1 Uppercase character,1 Lowercase character,1 number and minimum length of 6" onchange="form.pwd2.pattern = this.value;"/>
</td></tr>				
				<tr><tr/><tr><tr/><tr><tr/>
				<tr><td><b>Confirm Password</b><font color="red">*</font>: </td><td><input type="password" name="pwd2" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Passwords do not match" onfocus=" form.pwd2.pattern = form.pwd1.value;"/></td></tr>
				
				<tr><tr/><tr><tr/>
			</table>

			<font color="red">* :-required
            </font>
			<br/>
			<table>
				<tr><td><input type="SUBMIT" name="SUBMIT" value="SUBMIT" class="button"/></td><td><input type="RESET" name="RESET" value="RESET" class="button"/></td></tr>
			</table>
		
					
		</form>
		</div>
	</center>
	
	
	
	
	</body>

</html>
