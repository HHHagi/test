<?php
$question = array();
$answer = array();

$question["問題"] = "日本の首都は？";
$answer["回答1"] = "大阪";
$answer["回答2"] = "北海道";
$answer["回答3"] = "箱根";
$answer["回答4"] = "東京";

foreach ($question as $title => $question1) {
    echo "{$title}　{$question1}" . "</br></br>";
}
foreach ($answer as $answer_num => $answer) {
    echo "{$answer_num}　{$answer}" . "</br>";
}
?>