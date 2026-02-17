<?php

$result = "";
$text = "";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $text=$_POST['text'];

    if(isset($_POST['uppercase'])){
        $result=strtoupper($text);
    }

    if(isset($_POST['lowercase'])){
        $result=strtolower($text);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Text Case Converter</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f3f4f6;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .converter-container {
            background: #ffffff;
            width: 450px;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #1f2937;
            margin-bottom: 8px;
        }

        p {
            text-align: center;
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 20px;
        }

        textarea {
            width: 100%;
            height: 150px;
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            resize: none;
            font-size: 14px;
        }

        .btn-group {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        button {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
            color: #ffffff;
        }

        .upper-btn {
            background: #2563eb;
        }

        .upper-btn:hover {
            background: #1e40af;
        }

        .lower-btn {
            background: #16a34a;
        }

        .lower-btn:hover {
            background: #166534;
        }

        .result {
            margin-top: 20px;
            background: #f9fafb;
            padding: 15px;
            border-radius: 6px;
            font-size: 14px;
            color: #111827;
            min-height: 60px;
        }
    </style>
</head>

<body>

<div class="converter-container">
    <h2>Text Case Converter</h2>
    <p>Convert your text to uppercase or lowercase</p>

    <form method="POST">
        <textarea name="text" placeholder="Type or paste your text here..."><?php echo htmlspecialchars($text); ?></textarea>

        <div class="btn-group">
            <button type="submit" name="uppercase" class="upper-btn">Convert to UPPERCASE</button>
            <button type="submit" name="lowercase" class="lower-btn">Convert to lowercase</button>
        </div>
    </form>

    <div class="result">
        <?php
        if (!empty($result)) {
            echo htmlspecialchars($result);
        } else {
            echo "Converted text will appear here...";
        }
        ?>
    </div>
</div>

</body>
</html> 