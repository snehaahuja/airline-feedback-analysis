<?php
    session_start();
    if(!isset($_SESSION['login_admin']))
        {
            header("location: welcomemain.html");
        } 
?><html>
    <head>
    <title>Route Analysis</title>
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
             a
            {
                font-size:22;
                color: red;
            }
        </style>
    </head>
<body bgcolor="#D3D3D3">
    <center>
    <table width=100% bgcolor="navy" >
  			<tr><td><?php echo '<div style="Color:white">Welcome, '.$_SESSION['login_admin'].'</div>'; ?></td></tr>
        <tr align="right"><td><h1><font color=white>ROUTE ANALYSIS</font></h1></td><td></td><td></td><td></td><td></td><td></td><td></td>
        <td></td><td><td></td><td></td></td><td></td><td></td><td></td><td><form action="thankyouadmin.php" method="post">
        <input type="submit" name="sub" value="LOGOUT" class="lout" /> 
        </form></td></tr>
  		</table>
		<hr/></center>
<a href="analysispage2.php">Go Back</a>
<center>
<?php
$connect=new Mongo();
$db=$connect->project;
$collection=$db->feedback;
$collection1=$db->route;

$fromc="Chennai";
$fromd="Delhi";
$fromg="Goa";
$fromk="Kolkata";
$fromm="Mumbai";
$fromp="Pune";

$toc="Chennai";
$tod="Delhi";
$tog="Goa";
$tok="Kolkata";
$tom="Mumbai";
$top="Pune";

$c1=$collection->find(array('Source'=>'Chennai','Destination'=>'Chennai'));
$countc1=$c1->count();
$C1=$collection1->find(array('Source'=>'Chennai','Destination'=>'Chennai'));
$cntc1=$C1->count();

			if($cntc1==0)
			{
				$collection1->insert(array("Source"=>$fromc,"Destination"=>$toc,"Count"=>$countc1));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromc,"Destination"=>$toc), array('$set'=>array("Count"=>$countc1)));    
            }

           
$c2=$collection->find(array('Source'=>'Chennai','Destination'=>'Delhi'));
$countc2=$c2->count();
$C2=$collection1->find(array('Source'=>'Chennai','Destination'=>'Delhi'));
$cntc2=$C2->count();

			if($cntc2==0)
			{
				$collection1->insert(array("Source"=>$fromc,"Destination"=>$tod,"Count"=>$countc2));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromc,"Destination"=>$tod), array('$set'=>array("Count"=>$countc2)));    
            }
           


$c3=$collection->find(array('Source'=>'Chennai','Destination'=>'Goa'));
$countc3=$c3->count();
$C3=$collection1->find(array('Source'=>'Chennai','Destination'=>'Goa'));
$cntc3=$C3->count();

			if($cntc3==0)
			{
				$collection1->insert(array("Source"=>$fromc,"Destination"=>$tog,"Count"=>$countc3));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromc,"Destination"=>$tog), array('$set'=>array("Count"=>$countc3)));    
            }
            


$c4=$collection->find(array('Source'=>'Chennai','Destination'=>'Kolkata'));
$countc4=$c4->count();
$C4=$collection1->find(array('Source'=>'Chennai','Destination'=>'Kolkata'));
$cntc4=$C4->count();

			if($cntc4==0)
			{
				$collection1->insert(array("Source"=>$fromc,"Destination"=>$tok,"Count"=>$countc4));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromc,"Destination"=>$tok), array('$set'=>array("Count"=>$countc4)));    
            }
            
            
$c5=$collection->find(array('Source'=>'Chennai','Destination'=>'Mumbai'));
$countc5=$c5->count();
$C5=$collection1->find(array('Source'=>'Chennai','Destination'=>'Mumbai'));
$cntc5=$C5->count();

			if($cntc5==0)
			{
				$collection1->insert(array("Source"=>$fromc,"Destination"=>$tom,"Count"=>$countc5));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromc,"Destination"=>$tom), array('$set'=>array("Count"=>$countc5)));    
            }
            
$c6=$collection->find(array('Source'=>'Chennai','Destination'=>'Pune'));
$countc6=$c6->count();
$C6=$collection1->find(array('Source'=>'Chennai','Destination'=>'Pune'));
$cntc6=$C6->count();

			if($cntc6==0)
			{
				$collection1->insert(array("Source"=>$fromc,"Destination"=>$top,"Count"=>$countc6));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromc,"Destination"=>$top), array('$set'=>array("Count"=>$countc6)));    
            }

            
$d1=$collection->find(array('Source'=>'Delhi','Destination'=>'Chennai'));
$countd1=$d1->count();
$D1=$collection1->find(array('Source'=>'Delhi','Destination'=>'Chennai'));
$cntd1=$D1->count();

			if($cntd1==0)
			{
				$collection1->insert(array("Source"=>$fromd,"Destination"=>$toc,"Count"=>$countd1));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromd,"Destination"=>$toc), array('$set'=>array("Count"=>$countd1)));    
            }
            
$d2=$collection->find(array('Source'=>'Delhi','Destination'=>'Delhi'));
$countd2=$d2->count();
$D2=$collection1->find(array('Source'=>'Delhi','Destination'=>'Delhi'));
$cntd2=$D2->count();

			if($cntd2==0)
			{
				$collection1->insert(array("Source"=>$fromd,"Destination"=>$tod,"Count"=>$countd2));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromd,"Destination"=>$tod), array('$set'=>array("Count"=>$countd2)));    
            }
            

$d3=$collection->find(array('Source'=>'Delhi','Destination'=>'Goa'));
$countd3=$d3->count();
$D3=$collection1->find(array('Source'=>'Delhi','Destination'=>'Goa'));
$cntd3=$D3->count();

			if($cntd3==0)
			{
				$collection1->insert(array("Source"=>$fromd,"Destination"=>$tog,"Count"=>$countd3));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromd,"Destination"=>$tog), array('$set'=>array("Count"=>$countd3)));    
            }
            
$d4=$collection->find(array('Source'=>'Delhi','Destination'=>'Kolkata'));
$countd4=$d4->count();
$D4=$collection1->find(array('Source'=>'Delhi','Destination'=>'Kolkata'));
$cntd4=$D4->count();

			if($cntd4==0)
			{
				$collection1->insert(array("Source"=>$fromd,"Destination"=>$tok,"Count"=>$countd4));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromd,"Destination"=>$tok), array('$set'=>array("Count"=>$countd4)));    
            }
            
$d5=$collection->find(array('Source'=>'Delhi','Destination'=>'Mumbai'));
$countd5=$d5->count();
$D5=$collection1->find(array('Source'=>'Delhi','Destination'=>'Mumbai'));
$cntd5=$D5->count();

			if($cntd5==0)
			{
				$collection1->insert(array("Source"=>$fromd,"Destination"=>$tom,"Count"=>$countd5));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromd,"Destination"=>$tom), array('$set'=>array("Count"=>$countd5)));    
            }
            
$d6=$collection->find(array('Source'=>'Delhi','Destination'=>'Pune'));
$countd6=$d6->count();
$D6=$collection1->find(array('Source'=>'Delhi','Destination'=>'Pune'));
$cntd6=$D6->count();

			if($cntd6==0)
			{
				$collection1->insert(array("Source"=>$fromd,"Destination"=>$top,"Count"=>$countd6));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromd,"Destination"=>$top), array('$set'=>array("Count"=>$countd6)));    
            }


            
$g1=$collection->find(array('Source'=>'Goa','Destination'=>'Chennai'));
$countg1=$g1->count();
$G1=$collection1->find(array('Source'=>'Goa','Destination'=>'Chennai'));
$cntg1=$G1->count();

			if($cntg1==0)
			{
				$collection1->insert(array("Source"=>$fromg,"Destination"=>$toc,"Count"=>$countg1));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromg,"Destination"=>$toc), array('$set'=>array("Count"=>$countg1)));    
            }


            

$g2=$collection->find(array('Source'=>'Goa','Destination'=>'Delhi'));
$countg2=$g2->count();
$G2=$collection1->find(array('Source'=>'Goa','Destination'=>'Delhi'));
$cntg2=$G2->count();

			if($cntg2==0)
			{
				$collection1->insert(array("Source"=>$fromg,"Destination"=>$tod,"Count"=>$countg2));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromg,"Destination"=>$tod), array('$set'=>array("Count"=>$countg2)));    
            }


            

$g3=$collection->find(array('Source'=>'Goa','Destination'=>'Goa'));
$countg3=$g3->count();
$G3=$collection1->find(array('Source'=>'Goa','Destination'=>'Goa'));
$cntg3=$G3->count();

			if($cntg3==0)
			{
				$collection1->insert(array("Source"=>$fromg,"Destination"=>$tog,"Count"=>$countg3));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromg,"Destination"=>$tog), array('$set'=>array("Count"=>$countg3)));    
            }

            




$g4=$collection->find(array('Source'=>'Goa','Destination'=>'Kolkata'));
$countg4=$g4->count();
$G4=$collection1->find(array('Source'=>'Goa','Destination'=>'Kolkata'));
$cntg4=$G4->count();

			if($cntg4==0)
			{
				$collection1->insert(array("Source"=>$fromg,"Destination"=>$tok,"Count"=>$countg4));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromg,"Destination"=>$tok), array('$set'=>array("Count"=>$countg4)));    
            }



            
$g5=$collection->find(array('Source'=>'Goa','Destination'=>'Mumbai'));
$countg5=$g5->count();
$G5=$collection1->find(array('Source'=>'Goa','Destination'=>'Mumbai'));
$cntg5=$G5->count();

			if($cntg5==0)
			{
				$collection1->insert(array("Source"=>$fromg,"Destination"=>$tom,"Count"=>$countg5));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromg,"Destination"=>$tom), array('$set'=>array("Count"=>$countg5)));    
            }


            
$g6=$collection->find(array('Source'=>'Goa','Destination'=>'Pune'));
$countg6=$g6->count();
$G6=$collection1->find(array('Source'=>'Goa','Destination'=>'Pune'));
$cntg6=$G6->count();

			if($cntg6==0)
			{
				$collection1->insert(array("Source"=>$fromg,"Destination"=>$top,"Count"=>$countg6));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromg,"Destination"=>$top), array('$set'=>array("Count"=>$countg6)));    
            }


            

$k1=$collection->find(array('Source'=>'Kolkata','Destination'=>'Chennai'));
$countk1=$k1->count();
$K1=$collection1->find(array('Source'=>'Kolkata','Destination'=>'Chennai'));
$cntk1=$K1->count();

			if($cntk1==0)
			{
				$collection1->insert(array("Source"=>$fromk,"Destination"=>$toc,"Count"=>$countk1));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromk,"Destination"=>$toc), array('$set'=>array("Count"=>$countk1)));    
            }


           
$k2=$collection->find(array('Source'=>'Kolkata','Destination'=>'Delhi'));
$countk2=$k2->count();
$K2=$collection1->find(array('Source'=>'Kolkata','Destination'=>'Delhi'));
$cntk2=$K2->count();

			if($cntk2==0)
			{
				$collection1->insert(array("Source"=>$fromk,"Destination"=>$tod,"Count"=>$countk2));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromk,"Destination"=>$tod), array('$set'=>array("Count"=>$countk2)));    
            }



            
$k3=$collection->find(array('Source'=>'Kolkata','Destination'=>'Goa'));
$countk3=$k3->count();
$K3=$collection1->find(array('Source'=>'Kolkata','Destination'=>'Goa'));
$cntk3=$K3->count();

			if($cntk3==0)
			{
				$collection1->insert(array("Source"=>$fromk,"Destination"=>$tog,"Count"=>$countk3));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromk,"Destination"=>$tog), array('$set'=>array("Count"=>$countk3)));    
            }

            


$k4=$collection->find(array('Source'=>'Kolkata','Destination'=>'Kolkata'));
$countk4=$k4->count();
$K4=$collection1->find(array('Source'=>'Kolkata','Destination'=>'Kolkata'));
$cntk4=$K4->count();

			if($cntk4==0)
			{
				$collection1->insert(array("Source"=>$fromk,"Destination"=>$tok,"Count"=>$countk4));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromk,"Destination"=>$tok), array('$set'=>array("Count"=>$countk4)));    
            }



            


$k5=$collection->find(array('Source'=>'Kolkata','Destination'=>'Mumbai'));
$countk5=$k5->count();
$K5=$collection1->find(array('Source'=>'Kolkata','Destination'=>'Mumbai'));
$cntk5=$K5->count();

			if($cntk5==0)
			{
				$collection1->insert(array("Source"=>$fromk,"Destination"=>$tom,"Count"=>$countk5));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromk,"Destination"=>$tom), array('$set'=>array("Count"=>$countk5)));    
            }

            





$k6=$collection->find(array('Source'=>'Kolkata','Destination'=>'Pune'));
$countk6=$k6->count();
$K6=$collection1->find(array('Source'=>'Kolkata','Destination'=>'Pune'));
$cntk6=$K6->count();

			if($cntk6==0)
			{
				$collection1->insert(array("Source"=>$fromk,"Destination"=>$top,"Count"=>$countk6));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromk,"Destination"=>$top), array('$set'=>array("Count"=>$countk6)));    
            }






$m1=$collection->find(array('Source'=>'Mumbai','Destination'=>'Chennai'));
$countm1=$m1->count();
$M1=$collection1->find(array('Source'=>'Mumbai','Destination'=>'Chennai'));
$cntm1=$M1->count();

			if($cntm1==0)
			{
				$collection1->insert(array("Source"=>$fromm,"Destination"=>$toc,"Count"=>$countm1));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromm,"Destination"=>$toc), array('$set'=>array("Count"=>$countm1)));    
            }

            


$m2=$collection->find(array('Source'=>'Mumbai','Destination'=>'Delhi'));
$countm2=$m2->count();
$M2=$collection1->find(array('Source'=>'Mumbai','Destination'=>'Delhi'));
$cntm2=$M2->count();

			if($cntm2==0)
			{
				$collection1->insert(array("Source"=>$fromm,"Destination"=>$tod,"Count"=>$countm2));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromm,"Destination"=>$tod), array('$set'=>array("Count"=>$countm2)));    
            }

            

$m3=$collection->find(array('Source'=>'Mumbai','Destination'=>'Goa'));
$countm3=$m3->count();
$M3=$collection1->find(array('Source'=>'Mumbai','Destination'=>'Goa'));
$cntm3=$M3->count();

			if($cntm3==0)
			{
				$collection1->insert(array("Source"=>$fromm,"Destination"=>$tog,"Count"=>$countm3));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromm,"Destination"=>$tog), array('$set'=>array("Count"=>$countm3)));    
            }

            






$m4=$collection->find(array('Source'=>'Mumbai','Destination'=>'Kolkata'));
$countm4=$m4->count();
$M4=$collection1->find(array('Source'=>'Mumbai','Destination'=>'Kolkata'));
$cntm4=$M4->count();

			if($cntm4==0)
			{
				$collection1->insert(array("Source"=>$fromm,"Destination"=>$tok,"Count"=>$countm4));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromm,"Destination"=>$tok), array('$set'=>array("Count"=>$countm4)));    
            }

            

$m5=$collection->find(array('Source'=>'Mumbai','Destination'=>'Mumbai'));
$countm5=$m5->count();
$M5=$collection1->find(array('Source'=>'Mumbai','Destination'=>'Mumbai'));
$cntm5=$M5->count();

			if($cntm5==0)
			{
				$collection1->insert(array("Source"=>$fromm,"Destination"=>$tom,"Count"=>$countm5));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromm,"Destination"=>$tom), array('$set'=>array("Count"=>$countm5)));    
            }
$m6=$collection->find(array('Source'=>'Mumbai','Destination'=>'Pune'));
$countm6=$m6->count();
$M6=$collection1->find(array('Source'=>'Mumbai','Destination'=>'Pune'));
$cntm6=$M6->count();

			if($cntm6==0)
			{
				$collection1->insert(array("Source"=>$fromm,"Destination"=>$top,"Count"=>$countm6));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromm,"Destination"=>$top), array('$set'=>array("Count"=>$countm6)));    
            }       
            

$p1=$collection->find(array('Source'=>'Pune','Destination'=>'Chennai'));
$countp1=$p1->count();
$P1=$collection1->find(array('Source'=>'Pune','Destination'=>'Chennai'));
$cntp1=$P1->count();

			if($cntp1==0)
			{
				$collection1->insert(array("Source"=>$fromp,"Destination"=>$toc,"Count"=>$countp1));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromp,"Destination"=>$toc), array('$set'=>array("Count"=>$countp1)));    
            }
            

$p2=$collection->find(array('Source'=>'Pune','Destination'=>'Delhi'));
$countp2=$p2->count();
$P2=$collection1->find(array('Source'=>'Pune','Destination'=>'Delhi'));
$cntp2=$P2->count();

			if($cntp2==0)
			{
				$collection1->insert(array("Source"=>$fromp,"Destination"=>$tod,"Count"=>$countp2));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromp,"Destination"=>$tod), array('$set'=>array("Count"=>$countp2)));    
            }

$p3=$collection->find(array('Source'=>'Pune','Destination'=>'Goa'));
$countp3=$p3->count();
$P3=$collection1->find(array('Source'=>'Pune','Destination'=>'Goa'));
$cntp3=$P3->count();

			if($cntp3==0)
			{
				$collection1->insert(array("Source"=>$fromp,"Destination"=>$tog,"Count"=>$countp3));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromp,"Destination"=>$tog), array('$set'=>array("Count"=>$countp3)));    
            }

$p4=$collection->find(array('Source'=>'Pune','Destination'=>'Kolkata'));
$countp4=$p4->count();
$P4=$collection1->find(array('Source'=>'Pune','Destination'=>'Kolkata'));
$cntp4=$P4->count();

			if($cntp4==0)
			{
				$collection1->insert(array("Source"=>$fromp,"Destination"=>$tok,"Count"=>$countp4));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromp,"Destination"=>$tok), array('$set'=>array("Count"=>$countp4)));    
            }

$p5=$collection->find(array('Source'=>'Pune','Destination'=>'Mumbai'));
$countp5=$p5->count();
$P5=$collection1->find(array('Source'=>'Pune','Destination'=>'Mumbai'));
$cntp5=$P5->count();

			if($cntp5==0)
			{
				$collection1->insert(array("Source"=>$fromp,"Destination"=>$tom,"Count"=>$countp5));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromp,"Destination"=>$tom), array('$set'=>array("Count"=>$countp5)));    
            }

$p6=$collection->find(array('Source'=>'Pune','Destination'=>'Pune'));
$countp6=$p6->count();
$P6=$collection1->find(array('Source'=>'Pune','Destination'=>'Pune'));
$cntp6=$P6->count();

			if($cntp6==0)
			{
				$collection1->insert(array("Source"=>$fromp,"Destination"=>$top,"Count"=>$countp6));
			}
            else
            {
                             
                $collection1->update(array("Source"=>$fromp,"Destination"=>$top), array('$set'=>array("Count"=>$countp6)));    
            }

            
            
            $record=$collection1->find();
            $n=$record->count();
            $record1=$record->sort(array('Count'=>-1));
            
            foreach($record1 as $obj)
	        {
                    echo 'Source:' .$obj['Source']. "<br/>".'Destination: ' .$obj['Destination']."<br/>".'Number of Travels: ' .$obj['Count']."<br/>"."<br/>";
                    
	        }
            


?>

</center>
</body>


</html>