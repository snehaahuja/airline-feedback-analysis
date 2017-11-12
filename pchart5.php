<?php
    
$link=new Mongo();
$db=$link->project;
$collection=$db->feedback;

include("phpgraphlib.php");
include("phpgraphlib_pie.php");
$graph=new PHPGraphLibPie(450,280);

            
$m1=$collection->find(array('Source'=>'Mumbai','Destination'=>'Chennai'));
$countm1=$m1->count();


$m2=$collection->find(array('Source'=>'Mumbai','Destination'=>'Delhi'));
$countm2=$m2->count();
       

$m3=$collection->find(array('Source'=>'Mumbai','Destination'=>'Goa'));
$countm3=$m3->count();

$m4=$collection->find(array('Source'=>'Mumbai','Destination'=>'Kolkata'));
$countm4=$m4->count();
            
$m5=$collection->find(array('Source'=>'Mumbai','Destination'=>'Mumbai'));
$countm5=$m5->count();

            
$m6=$collection->find(array('Source'=>'Mumbai','Destination'=>'Pune'));
$countm6=$m6->count();


$data=array("Mumbai to Chennai"=>$countm1,"Mumbai to Delhi"=>$countm2,"Mumbai to Goa"=>$countm3,"Mumbai to Kolkata"=>$countm4,"Mumbai to Mumbai"=>$countm5,"Mumbai to Pune"=>$countm6);
$graph->addData($data);
$graph->setTitle("Mumbai Route Analysis");
$graph->setLabelTextColor("blue");
$graph->createGraph();
?>

?>
