<?php
    
$link=new Mongo();
$db=$link->project;
$collection=$db->feedback;

include("phpgraphlib.php");
include("phpgraphlib_pie.php");
$graph=new PHPGraphLibPie(450,280);

            
$p1=$collection->find(array('Source'=>'Pune','Destination'=>'Chennai'));
$countp1=$p1->count();


$p2=$collection->find(array('Source'=>'Pune','Destination'=>'Delhi'));
$countp2=$p2->count();
       

$p3=$collection->find(array('Source'=>'Pune','Destination'=>'Goa'));
$countp3=$p3->count();

$p4=$collection->find(array('Source'=>'Pune','Destination'=>'Kolkata'));
$countp4=$p4->count();
            
$p5=$collection->find(array('Source'=>'Pune','Destination'=>'Mumbai'));
$countp5=$p5->count();

            
$p6=$collection->find(array('Source'=>'Pune','Destination'=>'Pune'));
$countp6=$p6->count();


$data=array("Pune to Chennai"=>$countp1,"Pune to Delhi"=>$countp2,"Pune to Goa"=>$countp3,"Pune to Kolkata"=>$countp4,"Pune to Mumbai"=>$countp5,"Pune to Pune"=>$countp6);
$graph->addData($data);
$graph->setTitle("Pune Route Analysis");
$graph->setLabelTextColor("blue");
$graph->createGraph();
?>

?>
