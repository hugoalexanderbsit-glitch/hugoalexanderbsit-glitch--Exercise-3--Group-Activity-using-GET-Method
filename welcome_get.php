<?php
$name = isset($_GET["name"]) ? htmlspecialchars($_GET["name"]) : "";
$email = isset($_GET["email"]) ? htmlspecialchars($_GET["email"]) : "";
$course = isset($_GET["course"]) ? htmlspecialchars($_GET["course"]) : "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Result</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f2f5f9;
            color: #1f2937;
        }
        .container {
            width: min(560px, 92%);
            margin: 70px auto;
            background: white;
            padding: 32px;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0,0,0,.10);
        }
        h1 {
            margin-top: 0;
            text-align: center;
            color: #16a34a;
        }
        .result {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 18px;
            line-height: 1.8;
        }
        .row {
            margin-bottom: 8px;
        }
        .label {
            font-weight: bold;
        }
        .back {
            display: block;
            text-align: center;
            margin-top: 24px;
            text-decoration: none;
            color: white;
            background: #2563eb;
            padding: 12px;
            border-radius: 8px;
            font-weight: bold;
        }
        .back:hover { background: #1d4ed8; }
        .note {
            margin-top: 18px;
            text-align: center;
            color: #64748b;
            font-size: 13px;
        }
        code {
            background: #eef2ff;
            padding: 2px 6px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Submitted!</h1>

        <div class="result">
            <div class="row"><span class="label">Name:</span> <?php echo $name; ?></div>
            <div class="row"><span class="label">Email:</span> <?php echo $email; ?></div>
            <div class="row"><span class="label">Course:</span> <?php echo $course; ?></div>
        </div>

        <div class="note">
            The values above were received through <code>$_GET</code>.
        </div>

        <a class="back" href="index.php">Back to Form</a>
    </div>
</body>
</html>
