<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <link rel="stylesheet" href="../views/css/home_view.css">
</head>
<body>
<h1>Select a city:</h1>
<ul>
    <?php foreach ($cityData['list'] as $city): ?>
        <li><a href="index.php?route=city&city_id=<?= $city['id'] ?>"><?= $city['name'] ?></a></li>
    <?php endforeach; ?>
</ul>
</body>
</html>


