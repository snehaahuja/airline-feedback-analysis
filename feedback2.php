<?php
if(isset($_POST['submit'])) 
{
    $type=$_POST['sel'];
    $comment=$_POST['t1'];

    $project=new Mongo();
    $db=$project->project;
    $collection=$db->comments;
    $document=array(
    "Username"=>$_SESSION['login_user'],
    "Type of feedback"=>$type,
    "Comment"=>$comment
    );
    $collection->insert($document);
    header("location: thankyouhtmlmain.php");
}   



?>