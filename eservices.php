<?php
    include("phpgraphlib.php");
    $graph=new phpgraphlib(550,600);
    $link=new Mongo();
    $db=$link->project;
    $collection=$db->feedback;
    $poor=$collection->find(array('e-ticket'=>'poor'));
    $countpoor=$poor->count();
    $avg=$collection->find(array('e-ticket'=>'avg'));
    $countavg=$avg->count();
    $neutral=$collection->find(array('e-ticket'=>'neutral'));
    $countneutral=$neutral->count();
    $good=$collection->find(array('e-ticket'=>'good'));
    $countgood=$good->count();
    $vgood=$collection->find(array('e-ticket'=>'vgood'));
    $countvgood=$vgood->count();
    
    $data=array("Poor"=>$countpoor, "Average"=>$countavg, "Neutral"=>$countneutral,"Good"=>$countgood,"Very Good"=>$countvgood);
    $graph->addData($data);
    $graph->setTitle('E-services');
    $graph->setGradient('lime', 'green');
    $graph->setBarOutlineColor("black");
    $graph->setDataValues(TRUE);
    $graph->createGraph();

?>