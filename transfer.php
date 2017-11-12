<?php
  include("phpgraphlib.php");
    $graph=new phpgraphlib(550,600);
    $link=new Mongo();
    $db=$link->project;
    $collection=$db->feedback;
    $poor=$collection->find(array('From and to aircraft'=>'poor'));
    $countpoor=$poor->count();
    $avg=$collection->find(array('From and to aircraft'=>'avg'));
    $countavg=$avg->count();
    $neutral=$collection->find(array('From and to aircraft'=>'neutral'));
    $countneutral=$neutral->count();
    $good=$collection->find(array('From and to aircraft'=>'good'));
    $countgood=$good->count();
    $vgood=$collection->find(array('From and to aircraft'=>'vgood'));
    $countvgood=$vgood->count();
    
    $data=array("Poor"=>$countpoor, "Average"=>$countavg, "Neutral"=>$countneutral,"Good"=>$countgood,"Very Good"=>$countvgood);
    $graph->addData($data);
    $graph->setTitle('Transfer');
    $graph->setGradient('lime', 'green');
    $graph->setBarOutlineColor("black");
    $graph->setDataValues(TRUE);
    $graph->createGraph();
?>

