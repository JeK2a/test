<?php

/**
* Вопросы для тестирования
 */

class question
{
    /**
     * Получение нескольких адаптированных вопросов
     * @param int $limit
     * @return array
     */
    public static function getQuestions($limit = 3)
    {
        require_once(ROOT . '../model/db.php');
        $query = "SELECT * FROM question LIMIT $limit";
        $db = db\DB::getConnection();
        $que = $db->query($query);
        $questions = $que->fetchAll();

        $data = [];

        foreach ($questions as $question) {
            $data[] = self::adaptQuestion($question);
        }

        return $data;
    }

    /**
     * Получение адаптированного вопроса
     * @param $id
     * @return array
     */
    public static function getQuestion($id)
    {
        require_once('..\model\db.php');
        $query = "SELECT * FROM question WHERE id = $id";
        $db = db\DB::getConnection();
        $que = $db->query($query);
        $question = $que->fetchAll();

        $data = self::adaptQuestion($question[0]);

        return $data;
    }

    /**
     * Адаптация теста под тестовую форму
     * @param $question
     * @return array
     */
    private static function adaptQuestion($question) {
        return array('id'            => $question['id'],
                     'question_text' => $question['question_text'],
                     'ansvers'       => explode("|", $question['answers']),
                     'rightanswers'  => explode("|", $question['right_answers'])
        );
    }
}