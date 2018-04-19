<?php

define('ROOT', dirname(__FILE__));

require_once(ROOT . '../model/question.php');

$questions = question::getQuestions();

require_once(ROOT . '../views/form.php');





