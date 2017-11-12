<?php
       $valid='';
  if(isset($_POST['submit']))
  {
    
    if($_POST[1]=="poor")
        $ticket="poor";
    elseif($_POST[1]=="avg")
        $ticket="avg";
    elseif($_POST[1]=="neutral")
        $ticket="neutral";
    elseif($_POST[1]=="good")
        $ticket="good";
    else $ticket="vgood";
     if($_POST[2]=="poor")
        $resdep="poor";
    elseif($_POST[2]=="avg")
        $resdep="avg";
    elseif($_POST[2]=="neutral")
        $resdep="neutral";
    elseif($_POST[2]=="good")
        $resdep="good";
    else $resdep="vgood";
     if($_POST[3]=="poor")
        $com="poor";
    elseif($_POST[3]=="avg")
        $com="avg";
    elseif($_POST[3]=="neutral")
        $com="neutral";
    elseif($_POST[3]=="good")
        $com="good";
    else $com="vgood";
     if($_POST[4]=="poor")
        $clean="poor";
    elseif($_POST[4]=="avg")
        $clean="avg";
    elseif($_POST[4]=="neutral")
        $clean="neutral";
    elseif($_POST[4]=="good")
        $clean="good";
    else $ticket="vgood";
     if($_POST[5]=="poor")
        $fd="poor";
    elseif($_POST[5]=="avg")
        $fd="avg";
    elseif($_POST[5]=="neutral")
        $fd="neutral";
    elseif($_POST[5]=="good")
        $fd="good";
    else $fd="vgood";
     if($_POST[6]=="poor")
        $cs="poor";
    elseif($_POST[6]=="avg")
        $cs="avg";
    elseif($_POST[6]=="neutral")
        $cs="neutral";
    elseif($_POST[6]=="good")
        $cs="good";
    else $cs="vgood";
     if($_POST[7]=="poor")
        $ifb="poor";
    elseif($_POST[7]=="avg")
        $ifb="avg";
    elseif($_POST[7]=="neutral")
        $ifb="neutral";
    elseif($_POST[7]=="good")
        $ifb="good";
    else $ifb="vgood";
     if($_POST[8]=="poor")
        $fi="poor";
    elseif($_POST[8]=="avg")
        $fi="avg";
    elseif($_POST[8]=="neutral")
        $fi="neutral";
    elseif($_POST[8]=="good")
        $fi="good";
    else $fi="vgood";
     if($_POST[9]=="poor")
        $ife="poor";
    elseif($_POST[9]=="avg")
        $ife="avg";
    elseif($_POST[9]=="neutral")
        $ife="neutral";
    elseif($_POST[9]=="good")
        $ife="good";
    else $ife="vgood";
     if($_POST[10]=="poor")
        $tv="poor";
    elseif($_POST[10]=="avg")
        $tv="avg";
    elseif($_POST[10]=="neutral")
        $tv="neutral";
    elseif($_POST[10]=="good")
        $tv="good";
    else $tv="vgood";
     if($_POST[11]=="poor")
        $bm="poor";
    elseif($_POST[11]=="avg")
        $bm="avg";
    elseif($_POST[11]=="neutral")
        $bm="neutral";
    elseif($_POST[11]=="good")
        $bm="good";
    else $bm="vgood";
     if($_POST[12]=="poor")
        $fta="poor";
    elseif($_POST[12]=="avg")
        $fta="avg";
    elseif($_POST[12]=="neutral")
        $fta="neutral";
    elseif($_POST[12]=="good")
        $fta="good";
    else $fta="vgood";
     if($_POST[13]=="poor")
        $bd="poor";
    elseif($_POST[13]=="avg")
        $bd="avg";
    elseif($_POST[13]=="neutral")
        $bd="neutral";
    elseif($_POST[13]=="good")
        $bd="good";
    else $bd="vgood";
     if($_POST[14]=="zero")
        $hm="zero";
    elseif($_POST[14]=="five")
        $hm="one to five";
     elseif($_POST[14]=="ten")
        $hm="five to ten";
    elseif($_POST[14]=="fif")
        $hm="ten to fifteen";
    else $hm="fifteen+";
     if($_POST[15]=="yes")
        $wy="Yes";
    elseif($_POST[15]=="neutral")
        $wy="neutral";
    else $wy="No";
     if($_POST[16]=="personal")
        $pt="personal";
    elseif($_POST[16]=="business")
        $pt="business";
    elseif($_POST[16]=="Leisure")
        $pt="leisure";
    elseif($_POST[16]=="religious")
        $pt="religious";
    else $pt="other";
    if($_POST[17]=="yes")
        $ayf="yes";
    elseif($_POST[17]=="neutral")
        $ayf="neutral";
    else $ayf="no";
     $date=$_POST['date'];
    $from=$_POST['from'];
    $to=$_POST['to'];
    $class=$_POST['yclass'];
     
    $connect=new Mongo();
    $db=$connect->project;
    $collection=$db->feedback;  

    $todays_date = date("Y-m-d");
    $today = strtotime($todays_date);
    $dob_date = strtotime($date);
    if($today < $dob_date)
        {
             $valid = "<span style='color:red'>Date should be lesser than today's date!</span>";
        }
        else
        {

    $row=array (
    "Username"=> $_SESSION['login_user'],
    "Date of travel"=>$date,
    "Source"=>$from,
    "Destination"=>$to,
    "Class"=> $class, 
    "e-ticket"=> $ticket,
    "Reservation Department"=> $resdep,
    "Cabin Comfort" => $com,
    "Cabin Cleanliness" => $clean,
    "Food/Drink" => $fd,
    "Cabin Crew Services" => $cs,
    "In-flight briefing" => $ifb,
    "Flight/Route Information" => $fi,
    "In-flight Entertainment" => $ife,
    "Travel Value Products" => $tv,
    "Blue Magazine" => $bm,
    "From and to aircraft" => $fta,
    "Baggage Delivery" => $bd,
    "Travel Times" => $hm,
    "Next Time" => $wy,
    "Purpose of Trip" => $pt,
    "Satisfied" => $ayf );
    
    $collection->insert($row);
    header("location: feedback2htmlmain.php");
    }
  }
?>