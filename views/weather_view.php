<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <link rel="stylesheet" href="../views/css/weather_view.css">
</head>
<body>
<?php if ($weatherData): ?>
    <h1>Weather in <?= $weatherData['name'] ?></h1>
    <p>Description: <?= $weatherData['weather'][0]['description'] ?></p>
    <p>Temperature: <?= $weatherData['main']['temp'] ?>°C</p>
    <p>Humidity: <?= $weatherData['main']['humidity'] ?>%</p>

<?php else: ?>
    <p>Weather data not found for this city.</p>
<?php endif; ?>
    <a href="../index.php">Back</a>
</body>
</html>
