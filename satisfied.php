<?php
 include("phpgraphlib.php");
    $graph=new phpgraphlib(550,600);
    $link=new Mongo();
    $db=$link->project;
    $collection=$db->feedback;
    $yes=$collection->find(array('Satisfied'=>'yes'));
    $countyes=$yes->count();
    $no=$collection->find(array('Satisfied'=>'no'));
    $countno=$no->count();
    $neutral=$collection->find(array('Satisfied'=>'neutral'));
    $countneutral=$neutral->count();
    
    $data=array("Yes"=>$countyes,  "Neutral"=>$countneutral,"No"=>$countno);
    $graph->addData($data);
    $graph->setTitle('Satisfied');
    $graph->setGradient('lime', 'green');
    $graph->setBarOutlineColor("black");
    $graph->setDataValues(TRUE);
    $graph->createGraph();
?>


