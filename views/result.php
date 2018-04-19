<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Общая статистика по всем заполненным формам</title>
</head>
<body>
<div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 row">
        <h2 class="text-center">Общая статистика по всем заполненным формам</h2>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
            <table class="table text-center">
                <thead>
                    <tr><th>Форма</th><th>Правильных ответов на вопросы</th><th>Всего вопросов</th></tr>
                </thead>
                <tbody>
                    <?php foreach ($forms as $key => $form) {
                        $key++;
                        echo "<tr><td>$key</td><td>{$form['correct_answers']}</td><td>{$form['amount_questions']}</td></tr>";
                    } ?>
                </tbody>
            </table>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <?php
            echo "<p class='text-left'>Всего заполненных форм: {$statistic['amount_form']}</p>";
            echo "<p class='text-left'>Процент правильных ответов: {$statistic['perset_right_answers']}%</p>";
            ?>
        </div>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>