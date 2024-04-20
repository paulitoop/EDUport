<!DOCTYPE html>
<html lang="en">
<?php
if (isset($_POST['submit'])) {
    // Получаем данные из формы
    $eventName = $_POST['eventName'];
    $organization = $_POST['organization'];
    $description = $_POST['description'];

    // Путь для сохранения изображения
    $imageUploadPath = 'C:\laragon\www\inport\public\uploads';
    
    // Путь для сохранения текстового файла
    $textFilePath = 'C:\laragon\www\inport\public\text_files';

    // Проверяем загружено ли изображение
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Получаем имя файла
        $imageName = $_FILES['image']['name'];
        // Перемещаем файл в папку для загрузки изображений
        move_uploaded_file($_FILES['image']['tmp_name'], $imageUploadPath . $imageName);
        
        // Создаем текстовый файл и записываем в него данные
        $textData = "Название мероприятия: $eventName\nОрганизация: $organization\nОписание: $description";
        file_put_contents($textFilePath . 'certificate_info.txt', $textData);

        // Выводим сообщение об успешном сохранении
        echo '<p>Изображение и данные успешно сохранены.</p>';
    } else {
        // Выводим сообщение об ошибке загрузки изображения
        echo '<p>Произошла ошибка при загрузке изображения.</p>';
    }
}
?>

<style>
body {
   font-family: Arial, sans-serif;
   margin: 0;
   padding: 0;
   color: #333;
}

header {
   display: flex;
   justify-content: space-between;
   align-items: center;
   padding: 50px;
   background-color: #fff;
   position: relative;
}

.logo {
   font-size: 2em;
   color: #333;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
}


.account {
   display: flex;
   align-items: center;
}

.account a {
   margin-left: 10px;
   color: #fff;
   text-decoration: none;
   padding: 5px;
   border: 1px solid #ccc;
   border-radius: 10px;
}

.account a.active {
   background-color: #333;
}

.info {
   max-width: 800px;
   margin: 0 auto;
   padding: 20px;
   background-color: #f0f0f0;
   border-radius: 10px;
}
footer {
   position: absolute;
   bottom: 0;
   width: 100%;
   padding: 20px;
   display: flex;
   justify-content: center;
   align-items: center;
   background-color: #f5f5f5;
   border-radius: 10px;
   box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.info form {
   display: flex;
   flex-direction: column;
   align-items: center;
}

.info input, .info textarea {
   width: 100%;
   margin-bottom: 20px;
   padding: 10px;
   border: 1px solid #ccc;
   border-radius: 10px;
}

.info input[type="submit"] {
   background-color: #333;
   color: #fff;
   cursor: pointer;
}

.help {
   max-width: 800px;
   margin: 0 auto;
   padding: 20px;
   text-align: center;
}

.help a {
   display: block;
   margin-bottom: 10px;
   color: #333;
   text-decoration: none;
   font-size: 1.2em;
}
</style>
<body>
   <header>
       <div class="logo">Добавить сертификат</div>
       
   </header>
   <section class="info">
   <form method="POST" action="/newsert" enctype="multipart/form-data">
    <h2>Информация о сертификате</h2>
    <input type="text" name="eventName" placeholder="Название мероприятия">
    <input type="text" name="organization" placeholder="Организация">
    <input type="text" name="description" placeholder="Описание">
    <input type="file" name="image" accept="image/*">
    <button type="submit" name="submit">Сохранить изображение</button>
</form>

   </section>
   <footer>
       <div>
           <a href="http://inport.stud/">Главная</a>
           <a>Все права соблюдены</a>
           <a>Политика использования</a>
           <a>Политика приватности</a>
           <a>Поддержка</a>
       </div>
   </footer>
</body>
</html>