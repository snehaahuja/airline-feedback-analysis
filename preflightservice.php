<?php

    include("phpgraphlib.php");
    $graph=new phpgraphlib(550,600);
    $link=new Mongo();
    $db=$link->project;
    $collection=$db->feedback;
    $poor=$collection->find(array('Reservation Department'=>'poor'));
    $countpoor=$poor->count();
    $avg=$collection->find(array('Reservation Department'=>'avg'));
    $countavg=$avg->count();
    $neutral=$collection->find(array('Reservation Department'=>'neutral'));
    $countneutral=$neutral->count();
    $good=$collection->find(array('Reservation Department'=>'good'));
    $countgood=$good->count();
    $vgood=$collection->find(array('Reservation Department'=>'vgood'));
    $countvgood=$vgood->count();
    
    $data=array("Poor"=>$countpoor, "Average"=>$countavg, "Neutral"=>$countneutral,"Good"=>$countgood,"Very Good"=>$countvgood);
    $graph->addData($data);
    $graph->setTitle('Pre-Flight Service');
    $graph->setGradient('lime', 'green');
    $graph->setBarOutlineColor("black");
    $graph->setDataValues(TRUE);
    $graph->createGraph();

?>

