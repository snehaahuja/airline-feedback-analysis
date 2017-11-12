<?php
    session_start();
    if(!isset($_SESSION['login_user']))
        {
            header("location: welcomemain.html");
        } 
  
    include('feedback2.php');
?><html 
    <head>
        <title>feedback ...continued</title>
        <style>

            .lout {
                float: right;
                display: block;
                width: 134px;
                height: 35px;
                border: 0 none;
                font-weight: bold;
                text-align: center;
                background-color: navy;
                border-width: thin;
                color: #ffffff;
                cursor: pointer;
            }
    
    .sub1 {
  
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
            .one
            {
                font-size:25;
                font-weight: bold;
            }
            .two
            {
                width: 134px;
                height: 100px;
                
                
            }
        </style>
    </head>
    <body bgcolor="#D3D3D3">
        
        <table width=100% bgcolor="navy" >
  			<tr><td><?php echo '<div style="Color:white">Welcome, '.$_SESSION['login_user'].'</div>'; ?></td></tr><tr></tr><tr></tr><tr></tr>
        <tr align="right"><td><h1><font color=white>Customer Feedback</font></h1></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><form action="thankyou.php" method="post">
        <input type="submit" name="sub" value="LOGOUT" class="lout" /> 
        </form></td></tr>
  		</table>
		<hr/>
        <h2><font color="navy">We would like to hear from you : </font></h2>
        <br />
        <form action="" method=post>
        <table border=5  align=center width=70% height=40%>
        <tr><td align="center"><div class="one">Select the type of service:</div></td><td><center><select name="sel"><option>General</option></option><option>Airport Services</option><option>Baggage Services</option><option>Fares/Taxes</option><option>Travel Agents</option><option>Website</option></center></select></div></td></tr>
        <tr><td align="center"><div class="one">Comments:</div></td><td><center><textarea rows=5 cols=50 placeholder="Comments" name="t1"></textarea></center></td></tr>
        </table>
        <br/><center><input type="submit" name="submit" value="SUBMIT" class="sub1"/></center>
        
        </form>
    </body>
</html>