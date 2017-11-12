<?php
include("phpgraphlib.php");
include("phpgraphlib_pie.php");
$graph=new PHPGraphLibPie(450,280);
$link=new Mongo();
$db=$link->project;
$collection=$db->feedback;


$d1=$collection->find(array('Source'=>'Delhi','Destination'=>'Chennai'));
$countd1=$d1->count();

$d2=$collection->find(array('Source'=>'Delhi','Destination'=>'Delhi'));
$countd2=$d2->count();

$d3=$collection->find(array('Source'=>'Delhi','Destination'=>'Goa'));
$countd3=$d3->count();
            
$d4=$collection->find(array('Source'=>'Delhi','Destination'=>'Kolkata'));
$countd4=$d4->count();
            
$d5=$collection->find(array('Source'=>'Delhi','Destination'=>'Mumbai'));
$countd5=$d5->count();
            
$d6=$collection->find(array('Source'=>'Delhi','Destination'=>'Pune'));
$countd6=$d6->count();
            

$data=array("Delhi to Chennai"=>$countd1,"Delhi to Delhi"=>$countd2, "Delhi to Goa"=>$countd3,"Delhi to Kolkata"=>$countd4,"Delhi to Mumbai"=>$countd5,"Delhi to Pune"=>$countd6);
$graph->addData($data);
$graph->setTitle("Delhi Route Analysis");
$graph->setLabelTextColor("blue");
$graph->createGraph();
?>