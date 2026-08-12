<?php
$groupName = "Group 1";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team Profile</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f4f4f4;
            color: #333;
        }

        header {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 30px;
        }

        h1 {
            margin-bottom: 10px;
        }

        .container {
            width: 90%;
            margin: 30px auto;
        }

        .team {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 25px;
        }

        .card {
            width: 280px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .info {
            padding: 20px;
        }

        .info h2 {
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .info p {
            margin: 6px 0;
        }

        button {
            display: block;
            margin: 30px auto;
            padding: 12px 25px;
            background: #2c3e50;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background: #34495e;
        }

        #message {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }

        footer {
            text-align: center;
            background: #2c3e50;
            color: white;
            padding: 15px;
            margin-top: 30px;
        }
    </style>
</head>

<body>

<header>
    <h1>Team Profile</h1>
    <p><?php echo $groupName; ?></p>
</header>

<div class="container">

    <div class="team">

        <!-- Member 1 -->
        <div class="card">
            <img src="Jyke.jpg" alt="Member 1">
            <div class="info">
                <h2>Jyke Rafael A. Deala</h2>
                <p><strong>Role:</strong> Leader</p>
                <p><strong>Course:</strong> BS Information Technology</p>
                <p><strong>Age:</strong> 20</p>
            </div>
        </div>

        <!-- Member 2 -->
        <div class="card">
            <img src="Pocio.png" alt="Member 2">
            <div class="info">
                <h2>Christer Pocio</h2>
                <p><strong>Role:</strong> Member</p>
                <p><strong>Course:</strong> BS Information Technology</p>
                <p><strong>Age:</strong> 21</p>
            </div>
        </div>

        <!-- Member 3 -->
        <div class="card">
            <img src="Christian.jpg" alt="Member 3">
            <div class="info">
                <h2>Christian Miguel Cervantes</h2>
                <p><strong>Role:</strong> Member</p>
                <p><strong>Course:</strong> BS Information Technology</p>
                <p><strong>Age:</strong> 22</p>
            </div>
        </div>

        <!-- Member 4 -->
        <div class="card">
            <img src="James.jpg" alt="Member 4">
            <div class="info">
                <h2>James Gonzalo</h2>
                <p><strong>Role:</strong> Member</p>
                <p><strong>Course:</strong> BS Information Technology</p>
                <p><strong>Age:</strong> 21</p>
            </div>
        </div>

        <!-- Member 5 -->
        <div class="card">
            <img src="Pans.jpg" alt="Member 5">
            <div class="info">
                <h2>Christian Pañoso</h2>
                <p><strong>Role:</strong> Member</p>
                <p><strong>Course:</strong> BS Information Technology</p>
                <p><strong>Age:</strong> 22</p>
            </div>
        </div>

        <!-- Member 6 -->
        <div class="card">
            <img src="Jayrome.jpg" alt="Member 6">
            <div class="info">
                <h2>Jayrome Mondido</h2>
                <p><strong>Role:</strong> Member</p>
                <p><strong>Course:</strong> BS Information Technology</p>
                <p><strong>Age:</strong> 21</p>
            </div>
        </div>

    </div>

    <!-- JavaScript Button -->
    <button onclick="showMessage()">Click Here</button>

    <p id="message"></p>

</div>

<footer>
    Group 1 | SYSINTG-System Integration & Architecture 1
</footer>

<script>
    function showMessage() {
        document.getElementById("message").innerHTML =
            "Welcome to Group 1!";
    }
</script>

</body>
</html>
