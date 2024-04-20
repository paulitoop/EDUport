<!DOCTYPE html>
<html lang="en">
    <style>
        body {
           font-family: Arial, sans-serif;
           margin: 0;
           padding: 0;
           display: flex;
           flex-direction: column;
           align-items: center;
           justify-content: center;
           height: 100vh;
           color: #1a1a1a;
        }
        
        header {
           display: flex;
           justify-content: space-between;
           align-items: center;
           width: 80%;
           padding: 20px;
           background-color: #f5f5f5;
           border-radius: 10px;
           box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        
        .logo {
           font-size: 20px;
           font-weight: bold;
          
           /* padding-left: 10%; */
        }
        
        nav a {
           /* padding-right: 10%; */
           text-decoration: none;
           color: #333;
        }
        
        main {
           display: flex;
           flex-direction: column;
           align-items: center;
           justify-content: center;
           width: 90%;
           padding: 20px;
        }
        
        .form {
           display: flex;
           flex-direction: column;
           align-items: center;
           justify-content: center;
           width: 300px;
           padding: 20px;
           background-color: #f0f0f0;
           border-radius: 10px;
           box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        
        .form h2 {
           margin-top: 0;
           color: #1a1a1a;
        }
        
        .form input, .form button {
           width: 100%;
           margin-bottom: 10px;
           padding: 10px;
           border-radius: 10px;
           border: 1px solid #ddd;
           background-color: #fafafa;
        }
        
        .form button {
           background-color: #1a1a1a;
           color: #fff;
           cursor: pointer;
        }
        
        footer {
           display: flex;
           justify-content: center;
           align-items: center;
           width: 80%;
           padding: 20px;
           background-color: #f5f5f5;
           border-radius: 10px;
           box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        
        footer a {
           margin: 0 10px;
           text-decoration: none;
           color: #333;
        }
        </style>
<head>
    <meta charset="UTF-8">
    <title>Создание резюме</title>
</head>
<body>
<div class="container">

<h1>Создание резюме</h1>

<form method="post" action="resume.php">
    <label for="name">Имя:</label> <input type="text" name="name" required><br><br>
    <label for="email">E-mail:</label> <input type="email" name="email" required><br><br>
    <label for="phone">Телефон:</label> <input type="tel" name="phone" required><br><br>
    <label for="experience">Опыт работы:</label><br>
    <textarea name="experience" rows="4" cols="50" required></textarea><br><br>
    <label for="education">Образование:</label><br>
    <textarea name="education" rows="4" cols="50" required></textarea><br><br>
    <label for="skills">Навыки:</label><br>
    <textarea name="skills" rows="4" cols="50" required></textarea><br><br>
    <input type="submit" value="Сохранить резюме">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $experience = $_POST['experience'];
    $education = $_POST['education'];
    $skills = $_POST['skills'];

    // Здесь можно сохранить данные в базу данных или файл

    echo "<h2>Ваше резюме:</h2>";
    echo "<p><strong>Имя:</strong> $name</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Телефон:</strong> $phone</p>";
    echo "<p><strong>Опыт работы:</strong> $experience</p>";
    echo "<p><strong>Образование:</strong> $education</p>";
    echo "<p><strong>Навыки:</strong> $skills</p>";
}
?>

<footer>
    <div>
        <a href="http://inport.stud/">Главная</a>
        <a href="#">Все права соблюдены</a>
        <a href="#">Политика использования</a>
        <a href="#">Политика приватности</a>
        <a href="#">Поддержка</a>
    </div>
</footer>
</div>
</body>

</html>
