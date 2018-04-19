<?php
/**
 * Created by PhpStorm.
 * User: JeK2Ka
 * Date: 17.04.2018
 * Time: 22:25
 */

require_once('..\model\db.php');

use db\DB;

/**
 * Формы с вопросами для тестирования
 */

class form
{
    /**
     * Получение всех форм
     * @return array
     */
    public static function getForms()
    {
        $query = "SELECT * FROM form";
        $db = DB::getConnection();
        $que = $db->query($query);
        $forms = $que->fetchAll();

        return $forms;
    }

    /**
     * Добавление формы
     * @param $formjson
     * @param $countquestions
     * @param $countcorrectanswers
     * @param $evaluation
     * @return bool
     */
    public static function addForm($formjson, $countquestions, $countcorrectanswers, $evaluation) {
        // Соединение с БД
        $db = DB::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO form (form_json, amount_questions, correct_answers, evaluation) '
             . 'VALUES (:formjson, :amountquestions, :correctanswers, :evaluation)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':formjson', $formjson, PDO::PARAM_STR);
        $result->bindParam(':amountquestions', $countquestions, PDO::PARAM_INT);
        $result->bindParam(':correctanswers', $countcorrectanswers, PDO::PARAM_INT);
        $result->bindParam(':evaluation', $evaluation, PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * @return array
     */
    public static function getStatistic()
    {
        $forms = self::getForms();

        $countquestion = 0;
        $countcorrectanswers = 0;

        foreach ($forms as $form) {
            $countquestion += $form['amount_questions'];
            $countcorrectanswers += $form['correct_answers'];
        }

        $persetcorreanswers = (int) (($countcorrectanswers / $countquestion) * 100);

        $statistic = array(
            'amount_form' => count($forms),
            'perset_right_answers' => $persetcorreanswers
        );


        return $statistic;
    }

}