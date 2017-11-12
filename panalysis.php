<?php
 
$connect=new Mongo();
$db=$connect->project;
$collection=$db->feedback;

$total=$collection->find();       
$total1=$total->count();

$get=$collection->find(array('e-ticket'=>'poor'));
$num=$get->count();
$get1=$collection->find(array('e-ticket'=>'avg'));
$num1=$get1->count();
$get2=$collection->find(array('e-ticket'=>'neutral'));
$num2=$get2->count();
$get3=$collection->find(array('e-ticket'=>'good'));
$num3=$get3->count();
$get4=$collection->find(array('e-ticket'=>'vgood'));
$num4=$get4->count();

$pr1=($num/$total1)*100;
$pr2=($num1/$total1)*100;
$pr3=($num2/$total1)*100;
$pr4=($num3/$total1)*100;
$pr5=($num4/$total1)*100;



$bet=$collection->find(array('Reservation Department'=>'poor'));
$n=$bet->count();
$bet1=$collection->find(array('Reservation Department'=>'avg'));
$n1=$bet1->count();
$bet2=$collection->find(array('Reservation Department'=>'neutral'));
$n2=$bet2->count();
$bet3=$collection->find(array('Reservation Department'=>'good'));
$n3=$bet3->count();
$bet4=$collection->find(array('Reservation Department'=>'vgood'));
$n4=$bet4->count();

$pr6=($n/$total1)*100;
$pr7=($n1/$total1)*100;
$pr8=($n2/$total1)*100;
$pr9=($n3/$total1)*100;
$pr10=($n4/$total1)*100;

$met=$collection->find(array('Cabin Comfort'=>'poor'));
$m=$met->count();
$met1=$collection->find(array('Cabin Comfort'=>'avg'));
$m1=$met1->count();
$met2=$collection->find(array('Cabin Comfort'=>'neutral'));
$m2=$met2->count();
$met3=$collection->find(array('Cabin Comfort'=>'good'));
$m3=$met3->count();
$met4=$collection->find(array('Cabin Comfort'=>'vgood'));
$m4=$met4->count();

$pr11=($m/$total1)*100;
$pr12=($m1/$total1)*100;
$pr13=($m2/$total1)*100;
$pr14=($m3/$total1)*100;
$pr15=($m4/$total1)*100;


$let=$collection->find(array('Cabin Cleanliness'=>'poor'));
$l=$let->count();
$let1=$collection->find(array('Cabin Cleanliness'=>'avg'));
$l1=$let1->count();
$let2=$collection->find(array('Cabin Cleanliness'=>'neutral'));
$l2=$let2->count();
$let3=$collection->find(array('Cabin Cleanliness'=>'good'));
$l3=$let3->count();
$let4=$collection->find(array('Cabin Cleanliness'=>'vgood'));
$l4=$let4->count();



$pr16=($l/$total1)*100;
$pr17=($l1/$total1)*100;
$pr18=($l2/$total1)*100;
$pr19=($l3/$total1)*100;
$pr20=($l4/$total1)*100;


$wet=$collection->find(array('Food/Drink'=>'poor'));
$w=$wet->count();
$wet1=$collection->find(array('Food/Drink'=>'avg'));
$w1=$wet1->count();
$wet2=$collection->find(array('Food/Drink'=>'neutral'));
$w2=$wet2->count();
$wet3=$collection->find(array('Food/Drink'=>'good'));
$w3=$wet3->count();
$wet4=$collection->find(array('Food/Drink'=>'vgood'));
$w4=$wet4->count();

$pr21=($w/$total1)*100;
$pr22=($w1/$total1)*100;
$pr23=($w2/$total1)*100;
$pr24=($w3/$total1)*100;
$pr25=($w4/$total1)*100;





$cet=$collection->find(array('Cabin Crew Services'=>'poor'));
$c=$cet->count();
$cet1=$collection->find(array('Cabin Crew Services'=>'avg'));
$c1=$cet1->count();
$cet2=$collection->find(array('Cabin Crew Services'=>'neutral'));
$c2=$cet2->count();
$cet3=$collection->find(array('Cabin Crew Services'=>'good'));
$c3=$cet3->count();
$cet4=$collection->find(array('Cabin Crew Services'=>'vgood'));
$c4=$cet4->count();

$pr26=($c/$total1)*100;
$pr27=($c1/$total1)*100;
$pr28=($c2/$total1)*100;
$pr29=($c3/$total1)*100;
$pr30=($c4/$total1)*100;


$det=$collection->find(array('In-flight briefing'=>'poor'));
$d=$det->count();
$det1=$collection->find(array('In-flight briefing'=>'avg'));
$d1=$det1->count();
$det2=$collection->find(array('In-flight briefing'=>'neutral'));
$d2=$det2->count();
$det3=$collection->find(array('In-flight briefing'=>'good'));
$d3=$det3->count();
$det4=$collection->find(array('In-flight briefing'=>'vgood'));
$d4=$det4->count();

$pr31=($d/$total1)*100;
$pr32=($d1/$total1)*100;
$pr33=($d2/$total1)*100;
$pr34=($d3/$total1)*100;
$pr35=($d4/$total1)*100;


$fet=$collection->find(array('Flight/Route Information'=>'poor'));
$f=$fet->count();
$fet1=$collection->find(array('Flight/Route Information'=>'avg'));
$f1=$fet1->count();
$fet2=$collection->find(array('Flight/Route Information'=>'neutral'));
$f2=$fet2->count();
$fet3=$collection->find(array('Flight/Route Information'=>'good'));
$f3=$fet3->count();
$fet4=$collection->find(array('Flight/Route Information'=>'vgood'));
$f4=$fet4->count();

$pr36=($f/$total1)*100;
$pr37=($f1/$total1)*100;
$pr38=($f2/$total1)*100;
$pr39=($f3/$total1)*100;
$pr40=($f4/$total1)*100;



$eet=$collection->find(array('In-flight Entertainment'=>'poor'));
$e=$eet->count();
$eet1=$collection->find(array('In-flight Entertainment'=>'avg'));
$e1=$eet1->count();
$eet2=$collection->find(array('In-flight Entertainment'=>'neutral'));
$e2=$eet2->count();
$eet3=$collection->find(array('In-flight Entertainment'=>'good'));
$e3=$eet3->count();
$eet4=$collection->find(array('In-flight Entertainment'=>'vgood'));
$e4=$eet4->count();

$pr41=($e/$total1)*100;
$pr42=($e1/$total1)*100;
$pr43=($e2/$total1)*100;
$pr44=($e3/$total1)*100;
$pr45=($e4/$total1)*100;


$tet=$collection->find(array('Travel Value Products'=>'poor'));
$t=$tet->count();
$tet1=$collection->find(array('Travel Value Products'=>'avg'));
$t1=$tet1->count();
$tet2=$collection->find(array('Travel Value Products'=>'neutral'));
$t2=$tet2->count();
$tet3=$collection->find(array('Travel Value Products'=>'good'));
$t3=$tet3->count();
$tet4=$collection->find(array('Travel Value Products'=>'vgood'));
$t4=$tet4->count();

$pr46=($t/$total1)*100;
$pr47=($t1/$total1)*100;
$pr48=($t2/$total1)*100;
$pr49=($t3/$total1)*100;
$pr50=($t4/$total1)*100;


$vet=$collection->find(array('Blue Magazine'=>'poor'));
$v=$vet->count();
$vet1=$collection->find(array('Blue Magazine'=>'avg'));
$v1=$vet1->count();
$vet2=$collection->find(array('Blue Magazine'=>'neutral'));
$v2=$vet2->count();
$vet3=$collection->find(array('Blue Magazine'=>'good'));
$v3=$vet3->count();
$vet4=$collection->find(array('Blue Magazine'=>'vgood'));
$v4=$vet4->count();

$pr51=($v/$total1)*100;
$pr52=($v1/$total1)*100;
$pr53=($v2/$total1)*100;
$pr54=($v3/$total1)*100;
$pr55=($v4/$total1)*100;



$iet=$collection->find(array('From and to aircraft'=>'poor'));
$i=$iet->count();
$iet1=$collection->find(array('From and to aircraft'=>'avg'));
$i1=$iet1->count();
$iet2=$collection->find(array('From and to aircraft'=>'neutral'));
$i2=$iet2->count();
$iet3=$collection->find(array('From and to aircraft'=>'good'));
$i3=$iet3->count();
$iet4=$collection->find(array('From and to aircraft'=>'vgood'));
$i4=$iet4->count();

$pr56=($i/$total1)*100;
$pr57=($i1/$total1)*100;
$pr58=($i2/$total1)*100;
$pr59=($i3/$total1)*100;
$pr60=($i4/$total1)*100;

$pet=$collection->find(array('Baggage Delivery'=>'poor'));
$p=$pet->count();
$pet1=$collection->find(array('Baggage Delivery'=>'avg'));
$p1=$pet1->count();
$pet2=$collection->find(array('Baggage Delivery'=>'neutral'));
$p2=$pet2->count();
$pet3=$collection->find(array('Baggage Delivery'=>'good'));
$p3=$pet3->count();
$pet4=$collection->find(array('Baggage Delivery'=>'vgood'));
$p4=$pet4->count();

$pr61=($p/$total1)*100;
$pr62=($p1/$total1)*100;
$pr63=($p2/$total1)*100;
$pr64=($p3/$total1)*100;
$pr65=($p4/$total1)*100;

$zet=$collection->find(array('Travel Times'=>'zero'));
$z=$zet->count();
$zet1=$collection->find(array('Travel Times'=>'one to five'));
$z1=$zet1->count();
$zet2=$collection->find(array('Travel Times'=>'five to ten'));
$z2=$zet2->count();
$zet3=$collection->find(array('Travel Times'=>'ten to fifteen'));
$z3=$zet3->count();
$zet4=$collection->find(array('Travel Times'=>'fifteen+'));
$z4=$zet4->count();

$pr66=($z/$total1)*100;
$pr67=($z1/$total1)*100;
$pr68=($z2/$total1)*100;
$pr69=($z3/$total1)*100;
$pr70=($z4/$total1)*100;

$yet=$collection->find(array('Next Time'=>'Yes'));
$y=$yet->count();
$yet1=$collection->find(array('Next Time'=>'neutral'));
$y1=$yet1->count();
$yet2=$collection->find(array('Next Time'=>'No'));
$y2=$yet2->count();

$pr71=($y/$total1)*100;
$pr72=($y1/$total1)*100;
$pr73=($y2/$total1)*100;

$oet=$collection->find(array('Purpose of Trip'=>'personal'));
$o=$oet->count();
$oet1=$collection->find(array('Purpose of Trip'=>'business'));
$o1=$oet1->count();
$oet2=$collection->find(array('Purpose of Trip'=>'leisure'));
$o2=$oet2->count();
$oet3=$collection->find(array('Purpose of Trip'=>'religious'));
$o3=$oet3->count();
$oet4=$collection->find(array('Purpose of Trip'=>'other'));
$o4=$oet4->count();

$pr74=($o/$total1)*100;
$pr75=($o1/$total1)*100;
$pr76=($o2/$total1)*100;
$pr77=($o3/$total1)*100;
$pr78=($o4/$total1)*100;

$ret=$collection->find(array('Satisfied'=>'yes'));
$r=$ret->count();
$ret2=$collection->find(array('Satisfied'=>'neutral'));
$r2=$ret2->count();
$ret3=$collection->find(array('Satisfied'=>'no'));
$r3=$ret3->count();

$pr79=($r/$total1)*100;
$pr80=($r2/$total1)*100;
$pr81=($r3/$total1)*100;






?>
   
  