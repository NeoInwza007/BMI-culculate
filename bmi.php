<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Result</title>
</head>
<body>
    <h2>BMI Result</h2>

    <?php

    if (isset($_POST['weight']) && isset($_POST['height'])) {

        $weight = $_POST['weight'];
        $height = $_POST['height'] / 100;


        $bmi = $weight / ($height * $height);


        echo "<p>Your BMI: $bmi kg/m<sup>2</sup></p>";

        if ($bmi < 18.5) {
            echo "<p>ผอม</p>";
        } elseif ($bmi >= 18.5 && $bmi < 23) {
            echo "<p>ปรกติ</p>";
        } elseif ($bmi >= 23 && $bmi < 25) {
            echo "<p>ท้วม</p>";
        } elseif ($bmi >= 25 && $bmi < 30) {
            echo "<p>อ้วน</p>";
        } else {
            echo "<p>อ้วนมาก</p>";
        }
    } else {

        echo "<p>Please fill out all fields. <a href='bmi_form.html'>Go back to BMI form</a></p>";
    }
    ?>

</body>
</html>