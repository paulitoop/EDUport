<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мероприятия</title>
    <style>
      body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f4f4f4;
}

.center {
    text-align: center;
}

h1 {
    font-size: 36px;
    margin-bottom: 20px;
}

.buttons {
    display: flex;
    justify-content: center;
}

.button {
    display: inline-block;
    padding: 10px 20px;
    margin: 0 10px;
    text-decoration: none;
    font-size: 18px;
    color: #fff;
    background-color: #007bff;
    border: 2px solid #007bff;
    border-radius: 5px;
    transition: background-color 0.3s, border-color 0.3s;
}

.button:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}
</style>
</head>
<body>
    <div class="center">
        <h1>Какие мероприятия вас интересуют?</h1>
        <div class="buttons">
            <a href="/eventsEdu" class="button">Образовательные</a>
            <a href="/eventsGo" class="button">Развлекательные</a>
        </div>
    </div>
</body>
</html>