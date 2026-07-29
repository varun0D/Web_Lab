//date
<!DOCTYPE html>
<html>
<head>
    <title>Display Date</title>
</head>
<body>

<?php
echo "Today's Date: " . date("d-m-Y");
?>

</body>
</html>



//prime
<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Check</title>
</head>
<body>

<form method="post">
    Enter a Number:
    <input type="number" name="num" required>
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];

    if ($num <= 1) {
        echo "$num is not a Prime Number.";
    } else {
        $prime = true;

        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                $prime = false;
                break;
            }
        }

        if ($prime)
            echo "$num is a Prime Number.";
        else
            echo "$num is not a Prime Number.";
    }
}
?>

</body>
</html>
