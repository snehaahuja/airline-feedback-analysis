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
    Graphical analysis
    </title>
        <style>
            a
            {
                color: red;
                font-size: 22;
            }
            
            h1
            {
                background-color: navy;
                color: #FFFFFF;
            }
            p
            {
                font-size: 25; 
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
        </style>    
    </head>
    <body bgcolor="#D3D3D3">
        <center>
            
             <table width=100% bgcolor="navy" >
  			<tr><td><?php echo '<div style="Color:white">Welcome, '.$_SESSION['login_admin'].'</div>'; ?></td></tr>
        <tr align="right"><td><h1><font color=white>GRAPHICAL ANALYSIS</font></h1></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><form action="thankyouadmin.php" method="post">
        <input type="submit" name="sub" value="LOGOUT" class="lout" /> 
        </form></td></tr>
  		</table>
		<hr/></center>
            <a href="analysispage1.php">Go Back</a> 
            <br/><br/><br/>
            <center>
                <p><b>Choose one of the following services, whose analysis you want to view:</b></p>
            <br/><br/>
        <a href="eservices.html">E-Services</a><br/><br/>
        <a href="preflightservice.html">Pre-Flight Service</a><br/><br/>
        <a href="inflight.html">In-Flight Service</a><br/><br/>
        <a href="transfer.html">Transfer</a><br/><br/>
        <a href="arrivalservice.html">Arrival Service</a><br/><br/>
        <a href="satisfied.html">Satisfactory Rate</a>
            
    </center>
        
    </body>
</html>