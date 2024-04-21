<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Создание резюме</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 10px;
            color: #666;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            width: 97%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f5f5f5;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        input[type="submit"] {
            width: 170px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            align-self: center;
            align-content: center;
            
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        footer {
            margin-top: 20px;
            text-align: center;
            color: #666;
        }

        footer a {
            margin: 0 10px;
            color: #666;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Создание резюме</h1>
    <form method="post" action="resume.php">
        <label for="sname">Фамилия:</label> <input type="text" name="sname" required><br>
        <label for="name">Имя:</label> <input type="text" name="name" required><br>
        <label for="oname">Отчество:</label> <input type="text" name="oname" required><br>
        <label for="email">E-mail:</label> <input type="email" name="email" required><br>
        <label for="phone">Телефон:</label> <input type="tel" name="phone" required><br>
        <label for="experience">Опыт работы:</label><br>
        <textarea name="experience" rows="4" required></textarea><br>
        <label for="education">Образование:</label><br>
        <textarea name="education" rows="4" required></textarea><br>
        <label for="skills">Навыки:</label><br>
        <textarea name="skills" rows="4" required></textarea><br>
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