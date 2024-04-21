<!DOCTYPE html>
<html lang="en">
<style>
body {
   font-family: Arial, sans-serif;
   margin: 0;
   padding: 0;
   color: #333;
}

.container {
   max-width: 1200px;
   margin: 0 auto;
   padding: 20px;
   background-color: #fff;
   box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.header {
   text-align: center;
   padding: 50px 0;
   background-color: #d4c6c6;
   border-radius: 40px;
}

.header img {
   width: 100px;
   height: 100px;
   border-radius: 50%;
   background-color: #000;
}

.header h1 {
   margin: 10px 0;
   font-size: 24px;
}

.header h2 {
   font-size: 18px;
}
.header p {
   margin: 0;
   font-size: 12px;
  
}

.header a {
   padding-top: 1%;
   padding-left: 47%;
   color: #000;
   text-decoration: none; 
   display: flex;
   align-items: center;
   position:relative;
}

.content {
   display: flex;
   justify-content: space-between;
   margin-top: 50px;
}

.left-column, .right-column {
   width: 45%;
}

.left-column img, .right-column img {
   width: 100%;
   height: 400px;
   background-color: #ffffff28;
   border-radius: 10px;
   margin-bottom: 20px;
   object-fit: contain;
}

.left-column h2, .right-column h2 {
   font-size: 18px;
   margin-bottom: 20px;
}

.left-column p, .right-column p {
   font-size: 14px;
   line-height: 1.5;
   margin-bottom: 20px;
}

.left-column a, .right-column a {
   display: block;
   padding: 10px;
   text-decoration: none;
   color: #333;
   border: 1px solid #333;
   border-radius: 10px;
   text-align: center;
   margin-bottom: 20px;
}

.right-column img {
   width: 100px;
   height: 100px;
   background-color: #000;
   border-radius: 50%;
   margin-bottom: 20px;
}

.right-column h3 {
   font-size: 18px;
   margin-bottom: 10px;
}

.right-column p {
   font-size: 14px;
   line-height: 1.5;
   margin-bottom: 20px;
}
</style>
<body>
   <div class="container">
       <div class="header">
           <img src="ava_r.jpg" alt="Employer Profile">
           <h1>{{$user = auth()->user()->name;}}</h1>
           <p>57/100 Рейтинг</p>
           <a href="#">Контакты</a>
          
            <div>Название компании</div>

          
              <div>Статус пользователя: {{$status = auth()->user()->status}}</div>
           <?php
               $url = "https://favqs.com/api/qotd";
               $options = "r9u/R/7cSe2S7Am1gVfeZw==NxylCc0P9PR9KmfZ";
              
               $ch = curl_init();
               curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
               curl_setopt($ch, CURLOPT_URL,$url.'?'.$options);
               $json_data = curl_exec($ch);
               $data = (array) json_decode($json_data, true);
               
               
               // echo $data;
           ?>
           <h2>Цитата дня - {{$data["quote"]["body"]}}</h1>
       </div>
       <div class="content">
           <div class="left-column">
               <h2>Активность</h2>
               <a href="/">Главная</a>
               <a href="#">Просмотр кандидатов</a>
               <a href="#">Добавить вакансию</a>
               <a href="#">Загрузить файл</a>
               
               

               
             
               
           </div>
           <div class="right-column">
               <h2>Персональные данные</h2>
               <p>Обновить профиль</p>
               <p>Редактировать профиль</p>
               
               
               <h2>Помощь</h2>
               <p>Вопросы</p>
               <a href="#">FAQs</a>
               <a href="#">Контакты</a>
           </div>
       </div>
   </div>
</body>
</html>

