<?php
 include("phpgraphlib.php");
    $graph=new phpgraphlib(550,600);
    $link=new Mongo();
    $db=$link->project;
    $collection=$db->feedback;

    $poorcc=$collection->find(array('Cabin Comfort'=>'poor'));
    $countpoorcc=$poorcc->count();
    $avgcc=$collection->find(array('Cabin Comfort'=>'avg'));
    $countavgcc=$avgcc->count();
    $neutralcc=$collection->find(array('Cabin Comfort'=>'neutral'));
    $countneutralcc=$neutralcc->count();
    $goodcc=$collection->find(array('Cabin Comfort'=>'good'));
    $countgoodcc=$goodcc->count();
    $vgoodcc=$collection->find(array('Cabin Comfort'=>'vgood'));
    $countvgoodcc=$vgoodcc->count();
    
    $poorccl=$collection->find(array('Cabin Cleanliness'=>'poor'));
    $countpoorccl=$poorccl->count();
    $avgccl=$collection->find(array('Cabin Cleanliness'=>'avg'));
    $countavgccl=$avgccl->count();
    $neutralccl=$collection->find(array('Cabin Cleanliness'=>'neutral'));
    $countneutralccl=$neutralccl->count();
    $goodccl=$collection->find(array('Cabin Cleanliness'=>'good'));
    $countgoodccl=$goodccl->count();
    $vgoodccl=$collection->find(array('Cabin Cleanliness'=>'vgood'));
    $countvgoodccl=$vgoodccl->count();

    $poorfd=$collection->find(array('Food/Drink'=>'poor'));
    $countpoorfd=$poorfd->count();
    $avgfd=$collection->find(array('Food/Drink'=>'avg'));
    $countavgfd=$avgfd->count();
    $neutralfd=$collection->find(array('Food/Drink'=>'neutral'));
    $countneutralfd=$neutralfd->count();
    $goodfd=$collection->find(array('Food/Drink'=>'good'));
    $countgoodfd=$goodfd->count();
    $vgoodfd=$collection->find(array('Food/Drink'=>'vgood'));
    $countvgoodfd=$vgoodfd->count();

    $poorccs=$collection->find(array('Cabin Crew Services'=>'poor'));
    $countpoorccs=$poorccs->count();
    $avgccs=$collection->find(array('Cabin Crew Services'=>'avg'));
    $countavgccs=$avgccs->count();
    $neutralccs=$collection->find(array('Cabin Crew Services'=>'neutral'));
    $countneutralccs=$neutralccs->count();
    $goodccs=$collection->find(array('Cabin Crew Services'=>'good'));
    $countgoodccs=$goodccs->count();
    $vgoodccs=$collection->find(array('Cabin Crew Services'=>'vgood'));
    $countvgoodccs=$vgoodccs->count();

    $poorfb=$collection->find(array('In-flight briefing'=>'poor'));
    $countpoorfb=$poorfb->count();
    $avgfb=$collection->find(array('In-flight briefing'=>'avg'));
    $countavgfb=$avgfb->count();
    $neutralfb=$collection->find(array('In-flight briefing'=>'neutral'));
    $countneutralfb=$neutralfb->count();
    $goodfb=$collection->find(array('In-flight briefing'=>'good'));
    $countgoodfb=$goodfb->count();
    $vgoodfb=$collection->find(array('In-flight briefing'=>'vgood'));
    $countvgoodfb=$vgoodfb->count();

    $poorfr=$collection->find(array('Flight/Route Information'=>'poor'));
    $countpoorfr=$poorfr->count();
    $avgfr=$collection->find(array('Flight/Route Information'=>'avg'));
    $countavgfr=$avgfr->count();
    $neutralfr=$collection->find(array('Flight/Route Information'=>'neutral'));
    $countneutralfr=$neutralfr->count();
    $goodfr=$collection->find(array('Flight/Route Information'=>'good'));
    $countgoodfr=$goodfr->count();
    $vgoodfr=$collection->find(array('Flight/Route Information'=>'vgood'));
    $countvgoodfr=$vgoodfr->count();

    $poorfe=$collection->find(array('In-flight Entertainment'=>'poor'));
    $countpoorfe=$poorfe->count();
    $avgfe=$collection->find(array('In-flight Entertainment'=>'avg'));
    $countavgfe=$avgfe->count();
    $neutralfe=$collection->find(array('In-flight Entertainment'=>'neutral'));
    $countneutralfe=$neutralfe->count();
    $goodfe=$collection->find(array('In-flight Entertainment'=>'good'));
    $countgoodfe=$goodfe->count();
    $vgoodfe=$collection->find(array('In-flight Entertainment'=>'vgood'));
    $countvgoodfe=$vgoodfe->count();

    $poortv=$collection->find(array('Travel Value Products'=>'poor'));
    $countpoortv=$poortv->count();
    $avgtv=$collection->find(array('Travel Value Products'=>'avg'));
    $countavgtv=$avgtv->count();
    $neutraltv=$collection->find(array('Travel Value Products'=>'neutral'));
    $countneutraltv=$neutraltv->count();
    $goodtv=$collection->find(array('Travel Value Products'=>'good'));
    $countgoodtv=$goodtv->count();
    $vgoodtv=$collection->find(array('Travel Value Products'=>'vgood'));
    $countvgoodtv=$vgoodtv->count();

    $poorbm=$collection->find(array('Blue Magazine'=>'poor'));
    $countpoorbm=$poorbm->count();
    $avgbm=$collection->find(array('Blue Magazine'=>'avg'));
    $countavgbm=$avgbm->count();
    $neutralbm=$collection->find(array('Blue Magazine'=>'neutral'));
    $countneutralbm=$neutralbm->count();
    $goodbm=$collection->find(array('Blue Magazine'=>'good'));
    $countgoodbm=$goodbm->count();
    $vgoodbm=$collection->find(array('Blue Magazine'=>'vgood'));
    $countvgoodbm=$vgoodbm->count();

    $totalpoor=$countpoorcc+$countpoorccl+$countpoorfd+$countpoorccs+$countpoorfb+$countpoorfr+$countpoorfe+$countpoortv+$countpoorbm;
    $totalavg=$countavgcc+$countavgccl+$countavgfd+$countavgccs+$countavgfb+$countavgfr+$countavgfe+$countavgtv+$countavgbm;
    $totalneutral=$countneutralcc+$countneutralccl+$countneutralfd+$countneutralccs+$countneutralfb+$countneutralfr+$countneutralfe+$countneutraltv+$countneutralbm;
    $totalgood=$countgoodcc+$countgoodccl+$countgoodfd+$countgoodccs+$countgoodfb+$countgoodfr+$countgoodfe+$countgoodtv+$countgoodbm;
    $totalvgood=$countvgoodcc+$countvgoodccl+$countvgoodfd+$countvgoodccs+$countvgoodfb+$countvgoodfr+$countvgoodfe+$countvgoodtv+$countvgoodbm;
    

    $data=array("Poor"=>$totalpoor, "Average"=>$totalavg, "Neutral"=>$totalneutral,"Good"=>$totalgood,"Very Good"=>$totalvgood);
    $graph->addData($data);
    $graph->setTitle('In-Flight Service');
    $graph->setGradient('lime', 'green');
    $graph->setBarOutlineColor("black");
    $graph->setDataValues(TRUE);
    $graph->createGraph();
?>


