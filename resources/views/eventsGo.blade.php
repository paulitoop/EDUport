<!DOCTYPE html>
<html lang="en">
<style>
body {
   font-family: Arial, sans-serif;
   margin: 0;
   padding: 0;
   background-color: #f0f0f0;
}

.container {
   max-width: 1200px;
   margin: 0 auto;
   padding: 20px;
}

.user-info a{
  margin-left: 5%; 
  color: black;
  text-decoration: none; 
  
/* use %, em, px. % and em are recommended. */
}

header {
   display: flex;
   justify-content: space-between;
   align-items: center;
   background-color: #fff;
   padding: 20px;
   border-radius: 10px;
}

.logo {
   font-size: 24px;
   font-weight: bold;
   
   
}
.logo a{
    color: #000;
    text-decoration: none;
}

.logo a:hover {
   color: #562664;
   
}

.user-info {
   display: flex;
   align-items: center;
   position: absolute;
   right: 200px;
 

   
}
.user-info a{
  margin-left: 5%; 
  color: black;
  text-decoration: none; 
  font-size: 20px;
  
/* use %, em, px. % and em are recommended. */
}
.user-info a:hover{
  
   color: #562664;
/* use %, em, px. % and em are recommended. */
}

.link:hover {
   color: #00B3FF;
}



.banner {
   background-image: url('back.png');
   background-size: cover;
   color: #fff;
   text-align: center;
   padding: 50px 0;
   background-position: 50% 50%;
  
   
   
}

.banner-text {
   margin-left: 16%;
   margin-right: 16%;
   width: 30p;
   border-radius: 15px;
   padding: 50px 20%;
   background-size: auto;
   background-color: rgba(59, 59, 59, 0.497);
   font-size: 25px;
   
}

.content {
   margin-top: 50px;
}

.content h2 {
   color: #333;
   margin-bottom: 20px;
}

.grid {
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
   gap: 20px;
}

.grid-item {
   background-color: #fff;
   padding: 20px;
   border-radius: 10px;
}

.grid-item h3 {
   color: #333;
   margin-bottom: 10px;
}

.grid-item p {
   color: #666;
   font-size: 14px;
}

.grid-item a {
   text-decoration: none; 
   color: #333;
   margin-bottom: 10px;
}

.grid-item a:hover {
   color: #562664;
   
}

footer {
   background-color: #fff;
   padding: 20px;
   border-radius: 10px;
   display: flex;
   justify-content: space-around;
   align-items: center;
   margin-top: 50px;
}

.footer-item {
   text-align: center;
}

.footer-item h3 {
   color: #333;
   margin-bottom: 10px;
}

.footer-item p {
   color: #666;
   font-size: 14px;
}

.event {
            border: 1px solid #ccc;
            margin-bottom: 20px;
            padding: 10px;
            
        }
</style>
<head>


</head>
<body>
   <div class="container">
       <header>
           <div class="logo"><a href="/"> ⚛️ Развлекательные мероприятия</a></div>
           <div class="user-info">
            {{-- <a class="link" href='http://inport.stud/login'>Войти</a>
            <a class="link" href="http://inport.stud/register">Зарегистрироваться</a> --}}
            
               <!-- Authentication Links -->
               @guest
                   @if (Route::has('login'))
                       
                           <a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>
                       
                   @endif

                   @if (Route::has('register'))
                       
                           <a class="nav-link" href="{{ route('register') }}">{{ __('Зарегестрироваться') }}</a>
                       
                   @endif
               @else
                   {{-- <li class="nav-item dropdown"> --}}
                    
                       <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/profile" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           {{Auth::user()->name }}
                       </a>

                       {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> --}}
                        <div class="dropdown-menu dropdown-menu-end">
                           <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                               {{ __('Выйти') }}
                           </a>

                           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                               @csrf
                           </form>
                       </div>
         
                   {{-- </li> --}}
               @endguest
           
        </div>
       </header>
       <div class="banner">
            <div class="banner-text">
               <h1>EduPort</h1>
               <p>Твои персональные мероприятия</p>
            </div>
       </div>
       <div>
         <?php
// Задаем URL для GET запроса
$date = time();
// $current_datetime = new DateTime();

// Преобразуем объект DateTime в строку в нужном формате
// $date_time_string = $current_datetime->format('Y-m-d H:i:s');
// echo $date_time_string;
// echo $date;
$url = 'https://spb-afisha.gate.petersburg.ru/kg/external/afisha/events/?categories=education&fields=dates,title,place,description,site_url&actual_since='. $date;

// Получаем JSON данные из GET запроса
$json_data = file_get_contents($url);

// Декодируем JSON данные в массив PHP
$data = json_decode($json_data, true);

// Проверяем, удалось ли декодировать JSON
if ($data !== null) {
    // Перебираем каждое мероприятие
    foreach ($data['data'] as $event) {
        // Выводим информацию о мероприятии
        echo '<div class="event">';
        echo '<h2>' . $event['title'] . '</h2>';
        echo '<p>' . $event['description'] . '</p>';
      //   if (isset($event['place']) && isset($event['place']['id'])) {
      //       echo '<p>Место проведения: ' . $event['place']['id'] . '</p>';
      //   }
        if (isset($event['dates'])) {
            echo '<p>Дата начала: ' . date('Y-m-d H:i:s', $event['dates'][0]['start']) . '</p>';
            if (count($event['dates']) > 1) {
                echo '<p>Дата окончания: ' . date('Y-m-d H:i:s', $event['dates'][1]['end']) . '</p>';
            }
        }
        echo '<a href="' . $event['site_url'] . '">Подробнее</a>';
        echo '</div>';
    }
} else {
    echo 'Ошибка чтения данных';
}
?>
       </div>
       <footer>
           <div class="footer-item">
               <h3>⚛️ Поддержка</h3>
               <p>Помощь</p>
               <p>FAQs</p>
               <p>Навигация</p>
               <p>Контакты</p>
           </div>
       </footer>
   </div>
</body>
</html>