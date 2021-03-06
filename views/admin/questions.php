<?php
    $questions = $data['questions'];
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Fragen | myIWS</title>
    <link rel="stylesheet" href="<?=url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=url('assets/css/questions.css')?>">
</head>
<body>
    <div class="container">
        <div class="py-5 text-center">
            <img src="<?=url('assets/images/logo.png')?>">
        </div>

        <input type="text" id="iws-filter-input" class="form-control form-control-lg" value="" placeholder="Fragen filtern..." autofocus>

        <table id="iws-question-table" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Ausgabe</th>
                    <th scope="col">Runde</th>
                    <th scope="col">#</th>
                    <th scope="col">Frage</th>
                </tr>
            </thead>

            <tbody>

            <?php
            foreach ($questions as $question) {
            ?>
                <tr class="iws-question-row" data-id="<?=$question['id']?>">
                    <td><?=escape($question['season'])?></td>
                    <td><?=escape($question['round'])?></td>
                    <td><?=escape($question['question_number'])?></td>
                    <td class="iws-question-cell"><?=nl2br(escape($question['question']))?></td>
                </tr>

            <?php
            }

            ?>
            </tbody>

        </table>
       
    </div>

    <script src="<?=url('assets/js/questions.js')?>"></script>
</body>
</html>
