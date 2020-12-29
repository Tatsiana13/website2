<?php
$right =  ($_POST['q1'] == "Berlin")
+ ($_POST['q2'] == "a")
+ ($_POST['q3'] == "b"and"c")
+ ($_POST['q4'] == "Ares")
+ ($_POST['q5'] == "b")
+ ($_POST['q6'] == "a"and"b")
+ ($_POST['q7'] == "13")
+ ($_POST['q8'] == "c")
+ ($_POST['q9'] == "a")
+ ($_POST['q10'] == "false");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="test.css">
</head>
<body>
<h1>
    <?php
    if ($right >= 5) {
        echo "You have passed exam";
        } else {
        echo "You havent passed exam";
        }
        ?>
</h1>
</body>
</html>