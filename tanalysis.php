<?php
    session_start();
    if(!isset($_SESSION['login_admin']))
        {
            header("location: welcomemain.html");
        } 
        include('feedback21.php');
?>
<html>
<head>
    <style>
                       .lout {
    float: right;
    display: block;
    width: 134px;
    height: 35px;
    border: 0 none;
    font-weight: bold;
    text-align: center;
    background-color: navy;
    border-width : thin;
    color : #ffffff;
    cursor: pointer;
}
           a
            {
                color: red;
                font-size: 22;
            }
</style>
<title>text analysis</title>
</head>
<body bgcolor="#D3D3D3">


    <table width=100% bgcolor="navy" >
  			<tr><td><?php echo '<div style="Color:white">Welcome, '.$_SESSION['login_admin'].'</div>'; ?></td></tr>
        <tr align="right"><td><h1><font color=white>COMMENT ANALYSIS</font></h1></td><td></td><td></td><td></td><td></td><td></td><td></td>
        <td></td><td><td></td><td></td></td><td></td><td></td><td></td><td><form action="thankyouadmin.php" method="post">
        <input type="submit" name="sub" value="LOGOUT" class="lout" /> 
        </form></td></tr>
  		</table>
		<hr/></center>
   <a href="analysispage3.php">Go Back</a><br/><br/><br/>
<?php
     foreach ($cursor as $obj) 
    {
        $user=$obj["Username"];
        $haystack=$obj["Comment"];
        $ty=$obj["Type of feedback"];
        $num=str_word_count($haystack, 1);
        $good = preg_grep ('/good+/i', $num);
        $nice = preg_grep ('/nice+/i', $num);
        $awesome = preg_grep ('/awesome+/i', $num);
        $amazing = preg_grep ('/amazing+/i', $num);
        $terrific = preg_grep ('/terrific+/i', $num);
        $fabulous = preg_grep ('/fabulous+/i', $num);
        $fantastic = preg_grep ('/fantastic+/i', $num);
        $satisf = preg_grep ('/satisf+/i', $num);
        $positive = preg_grep ('/positive+/i', $num);
        $brilliant = preg_grep ('/brilliant+/i', $num);
        $content = preg_grep ('/content+/i', $num);
        $clean = preg_grep ('/^clean+/i', $num);
        $hygiene = preg_grep ('/^hygien+/i', $num);
        $like = preg_grep('/^like+/i',$num);
        $love = preg_grep('/^love+/i',$num);

        $bad = preg_grep ('/bad+/i', $num);
        $horrible = preg_grep ('/horrible+/i', $num);
        $negative = preg_grep ('/negative+/i', $num);
        $disgust = preg_grep ('/disgust+/i', $num);
        $dissatis = preg_grep ('/dissatis+/i', $num);
        $pathetic = preg_grep ('/pathetic+/i', $num);
        $uncooper = preg_grep ('/uncooper+/i', $num);
        $lack = preg_grep ('/lack+/i', $num);
        $unclean = preg_grep ('/unclean+/i', $num);
        $lousy = preg_grep ('/lousy+/i', $num);
        $terrible = preg_grep ('/terrible+/i', $num);
        $gross=preg_grep('/gross+/i',$num);
        $unhyg=preg_grep('/unhyg+/i',$num);

        $ngood=count($good);
        $nnice=count($nice);
        $nawesome=count($awesome);
        $namazing=count($amazing);
        $nterrific=count($terrific);
        $nfabulous=count($fabulous);
        $nfantastic=count($fantastic);
        $nsatisf=count($satisf);
        $npositive=count($positive);
        $nbrilliant=count($brilliant);
        $ncontent=count($content);
        $nclean=count($clean);
        $nhygiene=count($hygiene);
        $nlike=count($like);
        $nlove=count($love);

        $nbad=count($bad);
        $nhorrible=count($horrible);
        $nnegative=count($negative);
        $ndisgust=count($disgust);
        $ndissatis=count($dissatis);
        $npathetic=count($pathetic);
        $nuncooper=count($uncooper);
        $nlack=count($lack);
        $nunclean=count($unclean);
        $nlousy=count($lousy);
        $nterrible=count($terrible);
        $ngross=count($gross);
        $nunhyg=count($unhyg);

        
        $u='User : ';
        $t='Type of feedback : ';
        $q='Comment : ';
        $r='Reveiw : ';
        $count1=$ngood+$nnice+$nterrific+$namazing+$nawesome+$nfabulous+$nfantastic+$nsatisf+$npositive+$nbrilliant+$ncontent+$nclean+$nhygiene+$nlove+$nlike;
        $count2=$nbad+$nhorrible+$nnegative+$ndisgust+$ndissatis+$npathetic+$nuncooper+$nlack+$nunclean+$nlousy+$nterrible+$ngross+$nunhyg;
        
        $project=new Mongo();
        $db=$project->project;
        $collection1=$db->review;
    
        if($count1>$count2)
        {
            
            $c='Good';
            $document=array("Username"=>$user,"Type of feedback"=>$ty,"Comments"=>$haystack,"Review"=>$c);
            $collection1->insert($document);
            echo $u.$user."<br/>";
            echo $t.$ty."<br/>";
            echo $q.$haystack."<br/>";
            echo $r.$c."<br/><br/>";
        }
        if($count1<$count2)
        {
           
             $c='Bad';
             $document=array("Username"=>$user, "Type of feedback"=>$ty,"Comments"=>$haystack,"Review"=>$c);
             $collection1->insert($document);
             echo $u.$user."<br/>";
             echo $t.$ty."<br/>";
             echo $q.$haystack."<br/>";
             echo $r.$c."<br/><br/>";
        }
        if($count1==$count2)
        {
           
            $c='Neutral';
            $document=array("Username"=>$user, "Type of feedback"=>$ty,"Comments"=>$haystack,"Review"=>$c);
            $collection1->insert($document);
            echo $u.$user."<br/>";
            echo $t.$ty."<br/>";
            echo $q.$haystack."<br/>";
            echo $r.$c."<br/><br/>";
        }
    }

    
   


echo '
</table>';


  ?>
            </center>
        
</body>
</html>