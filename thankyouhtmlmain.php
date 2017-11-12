<?php
     session_start();
    if(!isset($_SESSION['login_user']))
        {
            header("location: welcomemain.html");
        } 
?>
<html>
    <head>
        <title>
        Thank you
        </title>
           <style>
           .feedback
           {
                float:right;
                color: Red;
                font-size:40;
                margin-right:100px;
                
           }
       
    .lout {
    float: right;
    display: block;
    width: 134px;
    height: 35px;
    border: 0 none;
    font-weight: bold;
    text-align: center;
    background-color: navy;
    border-width : thin;
    color : #ffffff;
    cursor: pointer;
}
.myDiv:after {
    content: "";
    position: fixed;
    z-index: -1;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-image: url(airplane.jpg);
    background-repeat:no-repeat;
    background-size:100% 100%;
    
    opacity: .5;
}
            
    
           </style>
    </head>
    <body>
     
        <table width=100% bgcolor="navy" >
  			<tr><td><?php echo '<div style="Color:white">Welcome, '.$_SESSION['login_user'].'</div>'; ?></td></tr>
        <tr><td><form action="thankyou.php" method="post">
        <input type="submit" name="sub" value="LOGOUT" class="lout" /> 
        </form></td></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
  		</table>
		<hr/>
        <div class="myDiv">
        <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
        <center>
            <font face="arial" size="60" color="navy">
            Thank you for your valuable feedback!
            </font>
        </center>
        <br /><br /><br /><br /><br />
            <a href="feedback1htmlmain.php" class="feedback">Provide another feedback</a>
        </div>
        </body>
        
</html>