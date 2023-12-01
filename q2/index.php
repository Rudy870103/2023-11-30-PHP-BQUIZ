<?php include_once "db.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問卷調查</title>
    <link rel="stylesheet" href="../css/css/bootstrap.css">
</head>

<body>
    <header class="p-5">
        <h1 class="text-center">問卷調查</h1>
    </header>
    <main class="container col-9">
        <fieldset>
            <legend>目前位置 : 首頁 > 問卷調查</legend>

            <table class="table">
                <tr>
                    <th>編號</th>
                    <th>問卷題目</th>
                    <th>投票總數</th>
                    <th>結果</th>
                    <th>狀態</th>
                </tr>
                <?php
                $ques = $Que->all(['subject_id' => 0]);
                foreach ($ques as $idx => $que) {
                ?>
                    <tr>
                        <td><?= $idx + 1; ?></td>
                        <td><?= $que['text']; ?></td>
                        <td><?= $que['count']; ?></td>
                        <td><a class='btn btn-info' href="result.php?id=<?= $que['id']; ?>">投票結果</a></td>
                        <td>
                            <a href="vote.php?id=<?= $que['id']; ?>" class="btn btn-danger">我要投票</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>

    </main>


    </fieldset>




    <script src="../css/js/jquery-3.4.1.min.js"></script>
    <script src="./css/js/bootstrap.js"></script>
</body>

</html>