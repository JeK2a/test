<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Форма для тестировния</title>
</head>
<body>
<div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>

    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <h2 class="text-center">Форма для тестировния</h2>
        <form action="..\controler\result.php" method="POST">
            <?php foreach ($questions as $question) {
                echo "<div class='container'>";
                echo "<h5 class='text-left'>{$question['question_text']}</h5>";
                foreach ($question['ansvers'] as $key => $answer) {
                    $type = (count($question['rightanswers']) == 1) ? 'radio' : 'checkbox';
                    echo "<label class=$type><input name='{$question['id']}' type=$type value='$key'>  $answer</label><br>";
                }
                echo "</div>";
            }  ?>
            <button type="submit" class="btn-info">Результат</button>
        </form>
    </div>

    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5"></div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>