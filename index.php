<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise #3 - GET Method</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f2f5f9;
            color: #1f2937;
        }
        .container {
            width: min(520px, 92%);
            margin: 70px auto;
            background: white;
            padding: 32px;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0,0,0,.10);
        }
        h1 {
            margin-top: 0;
            text-align: center;
            color: #1d4ed8;
        }
        p {
            text-align: center;
            color: #6b7280;
            margin-bottom: 28px;
        }
        label {
            display: block;
            margin: 14px 0 6px;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 15px;
        }
        input:focus {
            outline: none;
            border-color: #2563eb;
        }
        button {
            width: 100%;
            margin-top: 22px;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: #2563eb;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }
        button:hover { background: #1d4ed8; }
        .student {
            margin-top: 22px;
            text-align: center;
            font-size: 13px;
            color: #6b7280;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>PHP GET Method</h1>
        <p>Exercise #3 - Group Activity</p>

        <form action="welcome_get.php" method="get">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="course">Course</label>
            <input type="text" id="course" name="course" placeholder="Enter your course" required>

            <button type="submit">Submit using GET</button>
        </form>

        <div class="student">Alexander Hugo • BSIT 3J</div>
    </div>
</body>
</html>
