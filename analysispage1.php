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
        Analysis 1
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
    border-width : thin;
    color : #ffffff;
    cursor: pointer;
}
            p
            {
                font-size: 25;
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
        <tr align="right"><td><h1><font color=white>ANALYSIS 1</font></h1></td><td></td><td>
        </td><td></td><td></td><td></td><td></td><td></td><td></td><td><form action="thankyouadmin.php" method="post">
        <input type="submit" name="sub" value="LOGOUT" class="lout" /> 
        </form></td></tr>
  		</table>
		<hr/>
        
            <a href="welcomeadmin.php">Go Back</a>
        <center>
        <br/>
        <p><b>This will give you the analysis of the total number of people who have provided feedback and their opinion of our services.</p><p>The analysis is provided in 2 formats i.e Percentage and Graphical.</p><p>To view the same click on the following links:</b></p>
        <br/><p><a href="percentanalysis.php" >Click here to view the analysis(Percentage format)</a></p><p><a href="graphanalysis.php">Click here to view the analysis(Graphical format)</a></p> 
    </center>
    </body>
</html>