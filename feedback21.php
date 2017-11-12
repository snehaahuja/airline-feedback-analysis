<?php
    $project=new Mongo();
    $db=$project->project;
    $collection=$db->comments;
    $cursor = $collection->find();
    $times=$cursor->count();
   
  
?>