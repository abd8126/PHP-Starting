<?php
$txt = 'My Name is Anubhav Bhardwaj';
echo strlen("$txt");
$wordcount = 'Hello Guys this is Testing function of String Word Count';
echo '<br>';
echo str_word_count($wordcount);
$name= 'Anubhav Bhardwaj';
echo '<br>';
echo strrev('My Name is'. $name);
$name1= 'Anubhav Bhardwaj';
echo '<br>';
echo strtoupper('My  Name  is'. $name1);
echo '<br>';
echo strtolower('My  Name  is'. $name1);
echo '<br>';
echo trim('My  Name  is'. $name1);
?>


