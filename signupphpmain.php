<?php
    session_start();
    $error='';
    $valid='';
    if(isset($_POST['SUBMIT']))
    {
        
    $fn=$_POST['fname'];
    $ln=$_POST['lname'];
    $ad=$_POST['address'];
    $dob=$_POST['dob'];
    $m=$_POST['mobile'];
    $e=$_POST['email'];
    $user=$_POST['username'];
    $p=$_POST['pwd1'];    
   
	if($_POST['gender']=="female")
	    {$g="F";}
    else { $g="M";}
    $project=new Mongo();
    $db=$project->project;
    $collection=$db->login;
 
    $cursor= $collection->find(array('username'=>$user));
    $num=$cursor->count();   
    $todays_date = date("Y-m-d");
    $today = strtotime($todays_date);
    $dob_date = strtotime($dob);


    if($today < $dob_date)
        {
             $valid = "<span style='color:red'>Date should be lesser than today's date!</span>";
        }
    elseif($num>0)
            
        {
            $error="<span style='color:red'>Username unavailable!</span>";
            
        }
        
        else
        {
            $enter1= array
                ( 
                "Fname" => $fn, 
                "Lname" => $ln, 
                "Address" => $ad,
                "Dob" => $dob,
                "Gender" => $g,
                "Mobileno" => $m,
                "Email" => $e,
                "username" => $user,
                "password" => $p   );

                $collection->insert($enter1);
                header("location: loginuserhtmlmain.php");
        }

        
            
        }
    
?>