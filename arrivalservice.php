<?php
 include("phpgraphlib.php");
    $graph=new phpgraphlib(550,600);
    $link=new Mongo();
    $db=$link->project;
    $collection=$db->feedback;
    $poor=$collection->find(array('Baggage Delivery'=>'poor'));
    $countpoor=$poor->count();
    $avg=$collection->find(array('Baggage Delivery'=>'avg'));
    $countavg=$avg->count();
    $neutral=$collection->find(array('Baggage Delivery'=>'neutral'));
    $countneutral=$neutral->count();
    $good=$collection->find(array('Baggage Delivery'=>'good'));
    $countgood=$good->count();
    $vgood=$collection->find(array('Baggage Delivery'=>'vgood'));
    $countvgood=$vgood->count();
    
    $data=array("Poor"=>$countpoor, "Average"=>$countavg, "Neutral"=>$countneutral,"Good"=>$countgood,"Very Good"=>$countvgood);
    $graph->addData($data);
    $graph->setTitle('Arrival Service');
    $graph->setGradient('lime', 'green');
    $graph->setBarOutlineColor("black");
    $graph->setDataValues(TRUE);
    $graph->createGraph();
?>

