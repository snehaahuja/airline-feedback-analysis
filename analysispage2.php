<?php
    session_start();
    if(!isset($_SESSION['login_admin']))
        {
            header("location: welcomemain.html");
        } 
  
    
?>
<html>
<head>
<title>
Analysis 2
</title>
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
             } p
            {
                font-size: 25;
                font-weight: bold;
            }
            a
            {
                font-size:22;
                color: red;
            }
</style>
</head>
<body bgcolor="#D3D3D3">

  
   <table width=100% bgcolor="navy" >
  			<tr><td><?php echo '<div style="Color:white">Welcome, '.$_SESSION['login_admin'].'</div>'; ?></td></tr><tr></tr>
        <tr align="right"><td><h1><font color=white>ANALYSIS 2</font></h1></td>
            <td></td><td></td><td></td><td><form action="thankyouadmin.php" method="post">
        <input type="submit" name="sub" value="LOGOUT" class="lout" /> 
        </form></td></tr>
  		</table>
		<hr/>
    <a href="welcomeadmin.php">Go Back</a>  
    <center><br/> <p><b>This will give you the analysis of the routes that are most travelled by  the customer who have filled in the feedback form.</b></p><p><b>The analysis is provided in 2 formats i.e List and Graphical.</b></p><p><b>To view the same click on the following links:</b></p></center>
    <br/><br/>
    
<center>
<a href="routeanalysis.php"><div class="two">Click here to view the analysis(List format)</div></a>
    <br/><br/>
    <a href="pchart.html"><div class="two">Click here to view the analysis(Graphical format)</div></a>
 </center> 

</body>

</html>




