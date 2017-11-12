<?php
    session_start();
    if(!isset($_SESSION['login_admin']))
        {
            header("location: welcomemain.html");
        } 
  
?><html>
<head>
<title>Welcome Admin</title>
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

    .one
    {
        font-weight: bold;
        font-size:30;
    }
    .two
    {
        font-size:22;
        color:red;
    }

</style>
</head>

<body bgcolor="#D3D3D3">
    <table width=100% bgcolor="navy" >
  			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
        <tr align="right"><td><h1><font color=white>WELCOME ADMIN</font></h1></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>
        </td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><form action="thankyou.php" method="post">
        <input type="submit" name="sub" value="LOGOUT" class="lout" /> 
        </form></td></tr>
  		</table>
		<hr/>
<div class="one"><center>Please choose what analysis you want to do:</center></div>
    <br/><br/><br/>
<center>
<a href="analysispage1.php" class="two">SERVICE ANALYSIS</a>
    </br></br></br>
<a href="analysispage2.php" class="two">ROUTE ANALYSIS</a>
    </br></br></br>
<a href="analysispage3.php" class="two">COMMENTS ANALYSIS</a>
    </br></br></br>
</center>
</body>

</html>