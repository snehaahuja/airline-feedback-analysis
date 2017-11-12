<?php
    
$link=new Mongo();
$db=$link->project;
$collection=$db->feedback;

include("phpgraphlib.php");
include("phpgraphlib_pie.php");
$graph=new PHPGraphLibPie(450,280);

            
$g1=$collection->find(array('Source'=>'Goa','Destination'=>'Chennai'));
$countg1=$g1->count();


$g2=$collection->find(array('Source'=>'Goa','Destination'=>'Delhi'));
$countg2=$g2->count();
       

$g3=$collection->find(array('Source'=>'Goa','Destination'=>'Goa'));
$countg3=$g3->count();

$g4=$collection->find(array('Source'=>'Goa','Destination'=>'Kolkata'));
$countg4=$g4->count();
            
$g5=$collection->find(array('Source'=>'Goa','Destination'=>'Mumbai'));
$countg5=$g5->count();

            
$g6=$collection->find(array('Source'=>'Goa','Destination'=>'Pune'));
$countg6=$g6->count();


$data=array("Goa to Chennai"=>$countg1,"Goa to Delhi"=>$countg2,"Goa to Goa"=>$countg3,"Goa to Kolkata"=>$countg4,"Goa to Mumbai"=>$countg5,"Goa to Pune"=>$countg6);
$graph->addData($data);
$graph->setTitle("Goa Route Analysis");
$graph->setLabelTextColor("blue");
$graph->createGraph();
?>

