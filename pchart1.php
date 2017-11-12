<?php
include("phpgraphlib.php");
include("phpgraphlib_pie.php");
$graph=new PHPGraphLibPie(450,280);
$link=new Mongo();
$db=$link->project;
$collection=$db->feedback;


$c1=$collection->find(array('Source'=>'Chennai','Destination'=>'Chennai'));
$countc1=$c1->count();
           
$c2=$collection->find(array('Source'=>'Chennai','Destination'=>'Delhi'));
$countc2=$c2->count();

$c3=$collection->find(array('Source'=>'Chennai','Destination'=>'Goa'));
$countc3=$c3->count();

$c4=$collection->find(array('Source'=>'Chennai','Destination'=>'Kolkata'));
$countc4=$c4->count();
            
$c5=$collection->find(array('Source'=>'Chennai','Destination'=>'Mumbai'));
$countc5=$c5->count();

$c6=$collection->find(array('Source'=>'Chennai','Destination'=>'Pune'));
$countc6=$c6->count();

$data=array("Chennai to Chennai"=>$countc1,"Chennai to Delhi"=>$countc2, "Chennai to Goa"=>$countc3,"Chennai to Kolkata"=>$countc4,"Chennai to Mumbai"=>$countc5,"Chennai to Pune"=>$countc6);
$graph->addData($data);
$graph->setTitle("Chennai Route Analysis");
$graph->setLabelTextColor("blue");
$graph->createGraph();
?>