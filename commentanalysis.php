<?php
include('phpgraphlib.php');
include('phpgraphlib_stacked.php');
$graph = new PHPGraphLibStacked(800,500);
$link=new Mongo();
$db=$link->project;
$collection=$db->review;

    $good0=$collection->find(array('Type of feedback'=>'General','Review'=>'Good'));
    $countgood0=$good0->count();
    $bad0=$collection->find(array('Type of feedback'=>'General','Review'=>'Bad'));
    $countbad0=$bad0->count();
    $neutral0=$collection->find(array('Type of feedback'=>'General','Review'=>'Neutral'));
    $countneutral0=$neutral0->count();


    $good1=$collection->find(array('Type of feedback'=>'Airport Services','Review'=>'Good'));
    $countgood1=$good1->count();
    $bad1=$collection->find(array('Type of feedback'=>'Airport Services','Review'=>'Bad'));
    $countbad1=$bad1->count();
    $neutral1=$collection->find(array('Type of feedback'=>'Airport Services','Review'=>'Neutral'));
    $countneutral1=$neutral1->count();

    $good2=$collection->find(array('Type of feedback'=>'Baggage Services','Review'=>'Good'));
    $countgood2=$good2->count();
    $bad2=$collection->find(array('Type of feedback'=>'Baggage Services','Review'=>'Bad'));
    $countbad2=$bad2->count();
    $neutral2=$collection->find(array('Type of feedback'=>'Baggage Services','Review'=>'Neutral'));
    $countneutral2=$neutral2->count();

    $good3=$collection->find(array('Type of feedback'=>'Fares/Taxes','Review'=>'Good'));
    $countgood3=$good3->count();
    $bad3=$collection->find(array('Type of feedback'=>'Fares/Taxes','Review'=>'Bad'));
    $countbad3=$bad3->count();
    $neutral3=$collection->find(array('Type of feedback'=>'Fares/Taxes','Review'=>'Neutral'));
    $countneutral3=$neutral3->count();

    $good4=$collection->find(array('Type of feedback'=>'Travel Agents','Review'=>'Good'));
    $countgood4=$good4->count();
    $bad4=$collection->find(array('Type of feedback'=>'Travel Agents','Review'=>'Bad'));
    $countbad4=$bad4->count();
    $neutral4=$collection->find(array('Type of feedback'=>'Travel Agents','Review'=>'Neutral'));
    $countneutral4=$neutral4->count();

    $good5=$collection->find(array('Type of feedback'=>'Website','Review'=>'Good'));
    $countgood5=$good5->count();
    $bad5=$collection->find(array('Type of feedback'=>'Website','Review'=>'Bad'));
    $countbad5=$bad5->count();
    $neutral5=$collection->find(array('Type of feedback'=>'Website','Review'=>'Neutral'));
    $countneutral5=$neutral5->count();


    $good = array('General'=>$countgood0, 'Airport Services'=>$countgood1, 'Baggage Services'=>$countgood2, 'Fares/Taxes'=>$countgood3,'Travel Agents'=>$countgood4,'Website'=>$countgood5);
    $bad = array('General'=>$countbad0, 'Airport Services'=>$countbad1, 'Baggage Services'=>$countbad2, 'Fares/Taxes'=>$countbad3,'Travel Agents'=>$countbad4,'Website'=>$countbad5);
    $neutral = array('General'=>$countneutral0, 'Airport Services'=>$countneutral1, 'Baggage Services'=>$countneutral2, 'Fares/Taxes'=>$countneutral3,'Travel Agents'=>$countneutral4,'Website'=>$countneutral5);
    $graph->addData($good, $neutral, $bad);
$graph->setTitle('Comment Analysis');
$graph->setTitleLocation('left');
$graph->setXValuesHorizontal(TRUE);
$graph->setTextColor('blue');
$graph->setBarColor('#0066CC', '#669999', '#66CCCC');
$graph->setLegend(TRUE);
$graph->setLegendTitle('Good', 'Neutral', 'Bad');
$graph->createGraph();
?>
