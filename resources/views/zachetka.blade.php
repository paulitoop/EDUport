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

/* .user-info a{
  margin-left: 5%; 
  color: black;
  text-decoration: none; 
  
/* use %, em, px. % and em are recommended. */
/* } */

header {
   display: flex;
   justify-content: space-between;
   align-items: center;
   background-color: #fff;
   padding: 20px;
   border-radius: 10px;
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
   margin: 50px; 
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

.new-class h2{
    text-align: center;
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
.footer-item p {
   color: #666;
   font-size: 14px;
}
.item-container {
    border: 1px solid #ccc; /* Граница для разделения контейнеров */
    margin-bottom: 10px; /* Отступ между контейнерами */
    width:100%;
    padding: 10px; /* Поля внутри контейнера */
    border-radius: 10px; /* Закругление углов контейнера */
    background-color: #f9f9f9; /* Цвет фона контейнера */
    box-shadow: 0 0 5px rgba(135, 206, 250, 10); /* Тень для контейнера */

 
}


.itemProgName{
    font-weight: 700;
    font-size: 20px;
    text-align: center;
}
.item-container:hover{
    transition: 0.5s;
    box-shadow: 40px 10px 10px rgba(135, 206, 250, 30);; /* make this whatever you want */
    margin-bottom: 15px; /* Отступ между контейнерами */
    margin-top: 15px; /* Отступ между контейнерами */
}
.item {
    margin-right: 10px; /* Отступ между элементами внутри контейнера */
    margin-bottom: 10px; /* Отступ между контейнерами */
    padding: 10px; /* Поля внутри контейнера */
    border: 1px solid rgba(119, 136, 153); /* Граница для разделения контейнеров */
    border-radius: 10px;
    
    /* display: inline-block; Размещение элементов внутри контейнера в строку */
    
}
</style>
<head>


</head>
<body>
   <div class="container">
       <header>

           <div class="logo" ><a href = "/">⚛️ Цифровая зачетка</a></div>
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
               <p></p>
            </div>
       </div>
       <div class="new-class">
           <h2>Актуальный контроль</h2>
           <?php
            $file = fopen('ocenki.csv', 'r'); // Открываем файл для чтения

            if ($file) {
                if(($line = fgets($file)) !== false){
                    $elements_st = str_getcsv($line);
                }
                while (($line = fgets($file)) !== false) { // Читаем файл построчно
                    
                    $elements = str_getcsv($line); // Разбираем строку CSV на массив
                    if ($elements[0] == "33,332"){
                        echo '<div class="item-container">';
                        echo '<div class="item">';
                        echo"Курс". ": ".($elements[3]);
                        echo '</div>';
                        echo '<div class="item">';
                        echo $elements_st[6]. ": ".($elements[6]); // Выводим разделенные элементы на экран
                        echo '</div>';
                        
                    for($i = 7; $i<count($elements); $i++){
                        echo '<div class="item">';
                        echo $elements_st[$i]. ": ".($elements[$i]). " "; 
                        echo '</div>';
                    }
                    echo '</div>';
                    
                }
            }
                
                fclose($file); // Закрываем файл
            } 
            else {
                echo "Ошибка при открытии файла";
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