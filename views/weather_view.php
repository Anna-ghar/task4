<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            text-align: center;
        }

        h1 {
            margin-top: 50px;
            color: #333;
        }

        p {
            margin-top: 20px;
            color: #555;
        }
    </style>
</head>
<body>
<?php if ($weatherData): ?>
    <h1>Weather in <?= $weatherData['name'] ?></h1>
    <p>Description: <?= $weatherData['weather'][0]['description'] ?></p>
    <p>Temperature: <?= $weatherData['main']['temp'] ?>°C</p>
    <p>Humidity: <?= $weatherData['main']['humidity'] ?>%</p>
    <a href="../index.php">Back</a>
<?php else: ?>
    <p>Weather data not found for this city.</p>
<?php endif; ?>
</body>
</html>
