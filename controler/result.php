<?php

require_once('../model/form.php');
require_once('../model/question.php');

if (!empty($_POST)) {
    $formjson = json_encode($_POST);
    $countquestions = count($_POST);

    $countcorrectanswers = 0;

    foreach ($_POST as $key => $ansver) {
        $question = question::getQuestion($key);
        if (in_array($ansver, $question['rightanswers'])) {
           $countcorrectanswers++;
        }
    }

    $evaluation = (int) (($countcorrectanswers / $countquestions) * 100);

    form::addForm($formjson, $countquestions, $countcorrectanswers, $evaluation);
}

$forms = form::getForms();

$statistic = form::getStatistic();

require_once('../views/result.php');





