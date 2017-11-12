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
        analysispage3
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
             }
        a
        {
            color: red;
            font-size:22;
        }
         p
            {
                font-size: 25;
            }
    </style>
    </head>
<body bgcolor="#D3D3D3">
    
    <table width=100% bgcolor="navy" >
  			<tr><td><?php echo '<div style="Color:white">Welcome, '.$_SESSION['login_admin'].'</div>'; ?></td></tr>
        <tr align="right"><td><h1><font color=white>ANALYSIS 3</font></h1></td>
            <td></td><td></td><td></td><td></td><td><form action="thankyouadmin.php" method="post">
        <input type="submit" name="sub" value="LOGOUT" class="lout" /> 
        </form></td></tr>
  		</table>
		<hr/>
        <a href="welcomeadmin.php">Go Back</a>  
    <center><br/>
    <p><b>This will give you the analysis of the comments given by the customer in the feedback forms and help you decide whether it is positive,
       negative or neutral</b></p><p><b>The analysis is provided in 2 formats i.e Textual and Graphical.</b></p><p><b>To view the same click on the following links:</b></p>
    <br/>
    <a href="tanalysis.php">Click here to view the analysis(Textual format)</a><br/><br/>
        <a href="commentanalysis.html">Click here to view the analysis(Graphical format)</a>

      </center>
    </body>
</html>