<?php
    
$link=new Mongo();
$db=$link->project;
$collection=$db->feedback;

include("phpgraphlib.php");
include("phpgraphlib_pie.php");
$graph=new PHPGraphLibPie(450,280);

            
$k1=$collection->find(array('Source'=>'Kolkata','Destination'=>'Chennai'));
$countk1=$k1->count();


$k2=$collection->find(array('Source'=>'Kolkata','Destination'=>'Delhi'));
$countk2=$k2->count();
       

$k3=$collection->find(array('Source'=>'Kolkata','Destination'=>'Goa'));
$countk3=$k3->count();

$k4=$collection->find(array('Source'=>'Kolkata','Destination'=>'Kolkata'));
$countk4=$k4->count();
            
$k5=$collection->find(array('Source'=>'Kolkata','Destination'=>'Mumbai'));
$countk5=$k5->count();

            
$k6=$collection->find(array('Source'=>'Kolkata','Destination'=>'Pune'));
$countk6=$k6->count();


$data=array("Kolkata to Chennai"=>$countk1,"Kolkata to Delhi"=>$countk2,"Kolkata to Goa"=>$countk3,"Kolkata to Kolkata"=>$countk4,"Kolkata to Mumbai"=>$countk5,"Kolkata to Pune"=>$countk6);
$graph->addData($data);
$graph->setTitle("Kolkata Route Analysis");
$graph->setLabelTextColor("blue");
$graph->createGraph();
?>

