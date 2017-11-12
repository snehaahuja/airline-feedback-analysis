<?php
    session_start();
    if(!isset($_SESSION['login_admin']))
        {
            header("location: welcomemain.html");
        } 
        include('panalysis.php');
?>

<html>
    <head>

        <title>percentage page</title>
        <style>
        h1
            {
                background-color:navy;
                color: #FFFFFF;
            }
             a
            {
                color: red;
                font-size: 22;
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
        <tr align="right"><td><h1><font color=white>PERCENTAGE ANALYSIS</font></h1></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><form action="thankyouadmin.php" method="post">
        <input type="submit" name="sub" value="LOGOUT" class="lout" /> 
        </form></td></tr>
  		</table>
		<hr/>
            </CENTER>
        <a href="analysispage1.php">Go Back</a> <center><font size="5">Total no. of customers who have provided a feedback : <?php echo $total1;?></font></center><br/>
       <table border="5" cellpadding="10" align=center >
    		    <tr bgcolor="#dcdcdc" align="center"><td><b>E-Services</b></td><td>Poor</td><td>Average</td><td>Neutral</td><td>Good</td><td>Very Good</td></tr>
                <tr bgcolor="#f0f0f0" align=center><td align=left>e-ticket</td><td><?php echo round($pr1, 2).'%'; ?> </td><td><?php echo round ($pr2, 2).'%'; ?></td><td><?php echo round ($pr3, 2).'%'; ?></td><td><?php echo round ($pr4 , 2).'%'; ?></td><td><?php echo round ($pr5 , 2).'%'; ?></td></tr>
                <tr bgcolor="#dcdcdc" align="center"><td><b>Pre-Flight Service</b></td><td>Poor</td><td>Average</td><td>Neutral</td><td>Good</td><td>Very Good</td></tr>
                <tr bgcolor="#f0f0f0" align=center><td align=left>Booking via Go India! Airlines Reservations Department</td><td><?php echo round ($pr6 , 2).'%'; ?></td><td><?php echo round ($pr7 , 2).'%'; ?></td><td><?php echo round ($pr8 , 2).'%'; ?></td><td><?php echo round ($pr9 , 2).'%'; ?></td><td><?php echo round ($pr10 , 2).'%'; ?></td></tr>
                <tr bgcolor="#dcdcdc" align=center><td align=left><b>In-Flight Service</b></td><td>Poor</td><td>Average</td><td>Neutral</td><td>Good</td><td>Very Good</td></tr>
                <tr bgcolor="#f0f0f0" align=center><td align=left>Cabin Comfort</td><td><?php echo round ($pr11 , 2).'%'; ?></td><td><?php echo round ($pr12 , 2).'%'; ?></td><td><?php echo round ($pr13 , 2).'%'; ?></td><td><?php echo round ($pr14 , 2).'%'; ?></td><td><?php echo round ($pr15 , 2).'%'; ?></td></tr>
                <tr bgcolor="#dcdcdc" align=center><td align=left>Cabin Cleanliness</td><td><?php echo round ($pr16 , 2).'%'; ?></td><td><?php echo round ($pr17 , 2).'%'; ?></td><td><?php echo round ($pr18 , 2).'%'; ?></td><td><?php echo round ($pr19 , 2).'%'; ?></td><td><?php echo round ($pr20 , 2).'%'; ?></td></tr>
                <tr bgcolor="#f0f0f0" align=center><td align=left>Food/Drink</td><td><?php echo round ($pr21 , 2).'%'; ?></td><td><?php echo round ($pr22 , 2).'%'; ?></td><td><?php echo round ($pr23 , 2).'%'; ?></td><td><?php echo round ($pr24 , 2).'%'; ?></td><td><?php echo round ($pr25 , 2).'%'; ?></td></tr>
                <tr bgcolor="#dcdcdc" align=center><td align=left>Cabin Crew Service</td><td><?php echo round ($pr26 , 2).'%'; ?></td><td><?php echo round ($pr27 , 2).'%'; ?></td><td><?php echo round ($pr28 , 2).'%'; ?></td><td><?php echo round ($pr29 , 2).'%'; ?></td><td><?php echo round ($pr30 , 2).'%'; ?></td></tr>
                <tr bgcolor="#f0f0f0" align=center><td align=left>In-flight briefing from pilot</td><td><?php echo round ($pr31 , 2).'%'; ?></td><td><?php echo round ($pr32 , 2).'%'; ?></td><td><?php echo round ($pr33 , 2).'%'; ?></td><td><?php echo round ($pr34 , 2).'%'; ?></td><td><?php echo round ($pr35 , 2).'%'; ?></td></tr>
                <tr bgcolor="#dcdcdc" align=center><td align=left>Flight/route information from the cabin screens</td><td><?php echo round ($pr36 , 2).'%'; ?></td><td><?php echo round ($pr37 , 2).'%'; ?></td><td><?php echo round ($pr38 , 2).'%'; ?></td><td><?php echo round ($pr39 , 2).'%'; ?></td><td><?php echo round ($pr40 , 2).'%'; ?></td></tr>
                <tr bgcolor="#f0f0f0" align=center><td align=left>In-flight entertainment</td><td><?php echo round ($pr41 , 2).'%'; ?></td><td><?php echo round ($pr42 , 2).'%'; ?></td><td><?php echo round ($pr43 , 2).'%'; ?></td><td><?php echo round ($pr44 , 2).'%'; ?></td><td><?php echo round ($pr45 , 2).'%'; ?></td></tr>
                <tr bgcolor="#dcdcdc" align=center><td align=left>Travel Value products available to purchase</td><td><?php echo round ($pr46 , 2).'%'; ?></td><td><?php echo round ($pr47 , 2).'%'; ?></td><td><?php echo round ($pr48 , 2).'%'; ?></td><td><?php echo round ($pr49 , 2).'%'; ?></td><td><?php echo round ($pr50 , 2).'%'; ?></td></tr>
                <tr bgcolor="#f0f0f0" align=center><td align=left>Blue Magazine</td><td><?php echo round ($pr51 , 2).'%'; ?></td><td><?php echo round ($pr52 , 2).'%'; ?></td><td><?php echo round ($pr53 , 2).'%'; ?></td><td><?php echo round ($pr54 , 2).'%'; ?></td><td><?php echo round ($pr55 , 2).'%'; ?></td></tr>
                <tr bgcolor="#dcdcdc" align=center><td align=left><b>Transfer</b></td><td>Poor</td><td>Average</td><td>Neutral</td><td>Good</td><td>Very Good</td></tr>
                <tr bgcolor="#f0f0f0" align=center><td align=left>From and to the aircraft</td><td><?php echo round ($pr56 , 2).'%'; ?></td><td><?php echo round ($pr57 , 2).'%'; ?></td><td><?php echo round ($pr58 , 2).'%'; ?></td><td><?php echo round ($pr59 , 2).'%'; ?></td><td><?php echo round ($pr60 , 2).'%'; ?></td></tr>
                <tr bgcolor="#dcdcdc" align=center><td align=left><b>Arrival Service</b></td><td>Poor</td><td>Average</td><td>Neutral</td><td>Good</td><td>Very Good</td></tr>
                <tr bgcolor="#f0f0f0" align=center><td align=left>Baggage Delivery</td><td><?php echo round ($pr61 , 2).'%'; ?></td><td><?php echo round ($pr62 , 2).'%'; ?></td><td><?php echo round ($pr63 , 2).'%'; ?></td><td><?php echo round ($pr64 , 2).'%'; ?></td><td><?php echo round ($pr65 , 2).'%'; ?></td></tr>
                <tr bgcolor="#dcdcdc" align=center><td colspan=6 align=left><b>General Comments</b></tr>
                <tr bgcolor="#f0f0f0" align=center><td rowspan=2 align=left>How many times have you traveled with <br />Go India!, during the last year?</td><td>0</td><td>1 to 5</td><td>5 to 10</td><td>10 to 15</td><td>15+</td></tr>
                <tr bgcolor="#f0f0f0" align=center><td colspan=0.4><?php echo round ($pr66 , 2).'%'; ?></td><td colspan=0.4><?php echo round ($pr67 , 2).'%'; ?></td><td colspan=0.4><?php echo round ($pr68 , 2).'%'; ?></td><td colspan=0.4><?php echo round ($pr69 , 2).'%'; ?></td><td colspan=0.4><?php echo round ($pr70 , 2).'%'; ?></td></tr>
                <tr bgcolor="#dcdcdc" align=center><td rowspan=2 align=left>Will you fly with Go India! again?</td><td colspan=2>Yes</td><td>Neutral</td><td colspan=2>No</td></tr>
                <tr bgcolor="#dcdcdc" align=center><td colspan=2.5><?php echo round ($pr71 , 2).'%'; ?></td><td><?php echo round ($pr72 , 2).'%'; ?></td><td colspan=2.5><?php echo round ($pr73 , 2).'%'; ?></td></tr>
                <tr bgcolor="#f0f0f0" align=center><td rowspan=2 align=left>Purpose of trip</td><td>Personal</td><td>Business</td><td>Leisure</td><td>Religious</td><td>Other</td></tr>
                <tr bgcolor="#f0f0f0" align=center><td><?php echo round ($pr74 , 2).'%'; ?></td><td><?php echo round ($pr75 , 2).'%'; ?></td><td><?php echo round ($pr76 , 2).'%'; ?></td><td><?php echo round ($pr77 , 2).'%'; ?></td><td><?php echo round ($pr78 , 2).'%'; ?></td></tr>
                <tr bgcolor="#dcdcdc" align=center><td rowspan=2 align=left>Are you satisfied with our airlines?</td><td colspan=2>Yes</td></td><td>Neutral</td><td colspan=2>No</td></tr>
                <tr bgcolor="#dcdcdc"align=center><td colspan=2><?php echo round ($pr79 , 2).'%'; ?></td><td><?php echo round ($pr80 , 2).'%'; ?></td><td colspan=2><?php echo round ($pr81 , 2).'%'; ?></td></tr>
              </table>
        
       
    </body>
</html>
