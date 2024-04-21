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
   height: 100%;
   color: #1a1a1a;
}

.logo {
   font-size: 3em;
   text-align: center;
   margin: 20px 0;
}

.input{
   margin-bottom: 20px;
}
.login-form {
   display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: center;
   width: 500px;
   height: 400px;
   background-color: #f0f0f0;
   border-radius: 10px;
   margin: 20px 0;
}
footer {
   margin-bottom: 20px;
   display: flex;
   justify-content: center;
   align-items: center;
   width: 100%;
   padding: 20px;
  
   background-color: #f5f5f5;
   border-radius: 10px;
   box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.login-form label {
   font-size: 1.2em;
   margin: 10px 0;
}

.login-form input {
   width: 200px;
   height: 40px;
   border-radius: 10px;
   border: 1px solid #ddd;
   padding: 0 10px;
   margin: 10px 0;
}

.login-form button {
   width: 200px;
   height: 50px;
   border-radius: 10px;
   border: none;
   background-color: #222;
   color: #fff;
   font-size: 1.2em;
   margin: 10px 0;
}
.content {
   display: flex;
   justify-content: space-between;
   margin-top: 50px;
}
.container {
   max-width: 1200px;
   margin: 0 auto;
   padding: 20px;
   background-color: #fff;
   box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.left-column p, .right-column p {
   font-size: 14px;
   line-height: 1.5;
   margin-bottom: 20px;
   
}

footer a {
   margin: 0 10px;
   color: #333;
   text-decoration: none;
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
    <div><label for="sname">Фамилия:</label></div> <input type="text" name="sname"  required><br><br>
    <div><label for="name">Имя:</label></div> <input type="text" name="name" required><br><br>
    <div><label for="oname">Отчество:</label></div> <input type="text" name="oname" required><br><br>
    <div><label for="email">E-mail:</label></div> <input type="email" name="email" required><br><br>
    <div><label for="phone">Телефон:</label></div> <input type="tel" name="phone" required><br><br>
    <div><label for="experience">Опыт работы:</label><br></div>
    <textarea name="experience" rows="4" cols="50" required></textarea><br><br>
    <label for="education">Образование:</label><br>
    <textarea name="education" rows="4" cols="50" required></textarea><br><br>
    <label for="skills">Навыки:</label><br>
    <textarea name="skills" rows="4" cols="50" required></textarea><br><br>
    <div class="content">
    <div class="left-column">
    <input type="submit" class="input" value="Сохранить резюме">
    </div>
</div>
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
