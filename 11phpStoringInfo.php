<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>

    <style>
        .container {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 10px;
            text-align: center;
        }

        textarea {
            width: 90%;
            padding: 10px;
        }

        input[type="submit"],
        input[type="reset"] {
            padding: 8px 15px;
            margin: 10px;
        }

        .output {
            margin-top: 20px;
            padding: 10px;
            background-color: #e8f5e9;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Enter Your Information</h2>

    <form method="POST">
        <textarea name="info" rows="6" placeholder="Enter your information here..." required></textarea>
        <br><br>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $info = $_POST["info"];

    if (!empty($info)) {

        // Store data into text file
        $file = fopen("form.txt", "a");
        fwrite($file, $info . "\n");
        fclose($file);

        // Display the submitted information
        echo "<div class='output'>";
        echo "<h3>Submitted Information</h3>";
        echo "<p>" . htmlspecialchars($info) . "</p>";
        echo "<p><b>Information stored successfully in form.txt</b></p>";
        echo "</div>";
    }
}
?>

</div>

</body>
</html>
