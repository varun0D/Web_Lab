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
  <title>Prime Number Checker</title>
</head>

<body>
  <h1>Prime Number Checker</h1>
  <form method="POST">
    <label>Number</label>
    <input name="num" type="number" required />
    <button type="submit">Check!</button>
  </form>
  <p>
    <?php
    function isPrime($num)
    {
      if ($num <= 1)
        return false;
      if ($num == 2)
        return true;
      for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0)
          return false;
      }
      return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $num = $_POST["num"];
      if ($num == 1 || $num == 0) {
        echo "The number $num is neither prime nor composite";
      } else if (isPrime($num)) {
        echo "The number $num is a prime number";
      } else {
        echo "The number $num is not a prime number";
      }
    }
    ?>
  </p>
</body>

</html>
