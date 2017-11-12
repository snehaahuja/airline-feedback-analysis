<?php
    session_start();
    if(!isset($_SESSION['login_user']))
        {
            header("location: welcomemain.html");
        } 
  
    include('feedback1.php');
?>

<html>
	<head>
        <title>Feedback Form</title>
        <link rel="stylesheet" type="text/css" href="feedbackcssmain.css">
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
             .link
             {
                 float: right;
                 font-size:20;
                 color: red;
                 margin-right:40px;
             }
             
    </style>
    </head>
	<body bgcolor="#D3D3D3">
        <table width=100% bgcolor="navy" >
  			<tr><td><?php echo '<div style="Color:white">Welcome, '.$_SESSION['login_user'].'</div>'; ?></td></tr>
        <tr align="right"><td><h1><font color=white>Customer Feedback</font></h1></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><form action="thankyou.php" method="post">
        <input type="submit" name="sub" value="LOGOUT" class="lout" /> 
        </form></td></tr>
  		</table>
		<hr/>
		
        <form action="" method="POST">
            
            
           
            <div class="link"><a href="finalfaq.html" target="_blank"><font color="red">FAQ</font></a></div>
            <center><h3><u>Please fill in your travel details </u> </h3>
                <div class="link"><a href="timetable.html" target="_blank"><font color="red">FLIGHT SCHEDULE</font></a></div>
            <table align="center">
            <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <td>Date of travel : </td><td><input type="date" name="date"</td><td><?php echo $valid;?></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <td>From : </td><td><select name="from"><option>Chennai</option><option>Delhi</option><option>Goa</option><option>Kolkata</option><option>Mumbai</option><option>Pune</option></select></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <td>To : </td><td><select name="to"><option>Chennai</option><option>Delhi</option><option>Goa</option><option>Kolkata</option><option>Mumbai</option><option>Pune</option></select></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <td>Class : </td><td><select name="yclass"><option>Economy</option><option>Business</option></select></td></tr>
            </table>
            </center>
            <br/><br/>
            
		    <table border="5" cellpadding="10" align=center >
    		    <tr bgcolor="#dcdcdc"><td><b>E-Services</b></td><td>Poor</td><td>Average</td><td>Neutral</td><td>Good</td><td>Very Good</td></tr>
                <tr bgcolor="#f0f0f0" align=center><td align=left>e-ticket</td><td><input type=radio name=1 value="poor"/></td><td><input type=radio name=1 value="avg"/></td><td><input type=radio name=1 value="neutral" checked/></td><td><input type=radio name=1 value="good"/></td><td><input type=radio name=1 value="vgood"/></td></tr>
                <tr bgcolor="#dcdcdc"><td><b>Pre-Flight Service</b></td><td>Poor</td><td>Average</td><td>Neutral</td><td>Good</td><td>Very Good</td></tr>
                <tr bgcolor="#f0f0f0" align=center><td align=left>Booking via Go India! Airlines Reservations Department</td><td><input type=radio name=2 value="poor"/></td><td><input type=radio name=2 value="avg"/></td><td><input type=radio name=2 value="neutral" checked></td><td><input type=radio name=2 value="good"/></td><td><input type=radio name=2 value="vgood"/></td></tr>
                <tr bgcolor="#dcdcdc" align=center><td align=left><b>In-Flight Service</b></td><td>Poor</td><td>Average</td><td>Neutral</td><td>Good</td><td>Very Good</td></tr>
                <tr bgcolor="#f0f0f0" align=center><td align=left>Cabin Comfort</td><td><input type=radio name=3 value="poor"/></td><td><input type=radio name=3 value="avg"/></td><td><input type=radio name=3 value="neutral" checked/></td><td><input type=radio name=3 value="good"/></td><td><input type=radio name=3 value="vgood"/></td></tr>
                <tr bgcolor="#dcdcdc" align=center><td align=left>Cabin Cleanliness</td><td><input type=radio name=4 value="poor"/></td><td><input type=radio name=4 value="avg"/></td><td><input type=radio name=4 value="neutral" checked/></td><td><input type=radio name=4 value="good"/></td><td><input type=radio name=4 value="vgood"/></td></tr>
                <tr bgcolor="#f0f0f0" align=center><td align=left>Food/Drink</td><td><input type=radio name=5 value="poor"/></td><td><input type=radio name=5 value="avg"/></td><td><input type=radio name=5 value="neutral" checked/></td><td><input type=radio name=5 value="good"/></td><td><input type=radio name=5 value="vgood"/></td></tr>
                <tr bgcolor="#dcdcdc" align=center><td align=left>Cabin Crew Service</td><td><input type=radio name=6 value="poor"/></td><td><input type=radio name=6 value="avg"/></td><td><input type=radio name=6 value="neutral" checked/></td><td><input type=radio name=6 value="good"/></td><td><input type=radio name=6 value="vgood" /></td></tr>
                <tr bgcolor="#f0f0f0" align=center><td align=left>In-flight briefing from pilot</td><td><input type=radio name=7 value="poor"/></td><td><input type=radio name=7 value="avg"/></td><td><input type=radio name=7 value="neutral" checked/></td></td><td><input type=radio name=7 value="good"/></td><td><input type=radio name=7 value="vgood"/></td></tr>
                <tr bgcolor="#dcdcdc" align=center><td align=left>Flight/route information from the cabin screens</td><td><input type=radio name=8 value="poor"/></td><td><input type=radio name=8 value="avg"/></td><td><input type=radio name=8 value="neutral" checked/></td><td><input type=radio name=8 value="good"/></td><td><input type=radio name=8 value="vgood"/></td></tr>
                <tr bgcolor="#f0f0f0" align=center><td align=left>In-flight entertainment</td><td><input type=radio name=9 value="poor"/></td><td><input type=radio name=9 value="avg"/></td><td><input type=radio name=9 value="neutral" checked/></td><td><input type=radio name=9 value="good"/></td><td><input type=radio name=9 value="vgood"/></td></tr>
                <tr bgcolor="#dcdcdc" align=center><td align=left>Travel Value products available to purchase</td><td><input type=radio name=10 value="poor"/></td><td><input type=radio name=10 value="avg"/></td><td><input type=radio name=10 value="neutral" checked/></td><td><input type=radio name=10 value="good"/></td><td><input type=radio name=10 value="vgood"/></td></tr>
                <tr bgcolor="#f0f0f0" align=center><td align=left>Blue Magazine</td><td><input type=radio name=11 value="poor"/></td><td><input type=radio name=11 value="avg"/></td><td><input type=radio name=11 value="neutral" checked/></td><td><input type=radio name=11 value="good"/></td><td><input type=radio name=11 value="vgood"/></td></tr>
                <tr bgcolor="#dcdcdc" align=center><td align=left><b>Transfer</b></td><td>Poor</td><td>Average</td><td>Neutral</td><td>Good</td><td>Very Good</td></tr>
                <tr bgcolor="#f0f0f0" align=center><td align=left>From and to the aircraft</td><td><input type=radio name=12 value="poor"/></td><td><input type=radio name=12 value="avg"/></td><td><input type=radio name=12 value="neutral" checked/></td><td><input type=radio name=12 value="good"/></td><td><input type=radio name=12 value="vgood"/></td></tr>
                <tr bgcolor="#dcdcdc" align=center><td align=left><b>Arrival Service</b></td><td>Poor</td><td>Average</td><td>Neutral</td><td>Good</td><td>Very Good</td></tr>
                <tr bgcolor="#f0f0f0" align=center><td align=left>Baggage Delivery</td><td><input type=radio name=13 value="poor"/></td><td><input type=radio name=13 value="avg"/></td><td><input type=radio name=13 value="neutral" checked/></td><td><input type=radio name=13 value="good"/></td><td><input type=radio name=13 value="vgood"/></td></tr>
                <tr bgcolor="#dcdcdc" align=center><td colspan=6 align=left><b>General Comments</b></tr>
                <tr bgcolor="#f0f0f0" align=center><td rowspan=2 align=left>How many times have you traveled with <br />Go India!, during the last year?</td><td>0</td><td>1 to 5</td><td>5 to 10</td><td>10 to 15</td><td>15+</td></tr>
                <tr bgcolor="#f0f0f0" align=center><td colspan=0.4><input type=radio name=14 value="zero" checked/></td><td colspan=0.4><input type=radio name=14 value="five"/></td><td colspan=0.4><input type=radio name=14 value="ten"/></td><td colspan=0.4><input type=radio value="fif" name=14 /></td><td colspan=0.4><input type=radio value="fifplus" name=14 /></td></tr>
                <tr bgcolor="#dcdcdc" align=center><td rowspan=2 align=left>Will you fly with Go India! again?</td><td colspan=2>Yes</td><td>Neutral</td><td colspan=2>No</td></tr>
                <tr bgcolor="#dcdcdc" align=center><td colspan=2.5><input type=radio name=15 value="yes" /></td><td><input type=radio name=15 value="neutral" checked/></td><td colspan=2.5><input type=radio name=15 value="no"/></td></tr>
                <tr bgcolor="#f0f0f0" align=center><td rowspan=2 align=left>Purpose of trip</td><td>Personal</td><td>Business</td><td>Leisure</td><td>Religious</td><td>Other</td></tr>
                <tr bgcolor="#f0f0f0" align=center><td><input type=radio name=16 value="personal"/></td><td><input type=radio name=16 value="business"/></td><td><input type=radio name=16 value="Leisure"/></td><td><input type=radio name=16 value="religious"/></td><td><input type=radio name=16 value="other" checked/></td></tr>
                <tr bgcolor="#dcdcdc" align=center><td rowspan=2 align=left>Are you satisfied with our airlines?</td><td colspan=2>Yes</td></td><td>Neutral</td><td colspan=2>No</td></tr>
                <tr bgcolor="#dcdcdc"align=center><td colspan=2><input type=radio name=17 value="yes"/></td><td><input type="radio" name="17" value="neutral" checked/></td><td colspan=2><input type=radio name=17 value="no"/></td></tr>
              </table>
            <br />
            <center><input class=sub name="submit" type=submit value=SUBMIT /></center>
        </form>
    </body>
</html>