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

.user-info {
   display: flex;
   align-items: center;
   position: absolute;
   right: 200px;
 
   
   
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
</style>
<head>

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
   <div class="container">
       <header>
           <div class="logo">⚛️ Мероприятия</div>
           <div class="user-info">
               {{-- <a class="link" href='http://inport.stud/login'>Войти</a>
               <a class="link" href="http://inport.stud/register">Зарегистрироваться</a> --}}
               <ul class="navbar-nav ms-auto">
                  <!-- Authentication Links -->
                  @guest
                      @if (Route::has('login'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>
                          </li>
                      @endif

                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Зарегестрироваться') }}</a>
                          </li>
                      @endif
                  @else
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/profile" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}
                          </a>

                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Выйти') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest
              </ul>
           </div>
           
       </header>
       <div class="banner">
            <div class="banner-text">
               <h1>EduPort</h1>
               <p>Твоё идеальное портфолио</p>
            </div>
       </div>
       
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
            
            <h2 id="quoteText"></h2>
            <script>
               var category = 'success';
               $.ajax({
                   method: 'GET',
                   url: 'https://api.api-ninjas.com/v1/quotes?category=' + category,
                   headers: { 'X-Api-Key': 'r9u/R/7cSe2S7Am1gVfeZw==NxylCc0P9PR9KmfZ'},
                   contentType: 'application/json',
                   success: function(result) {
                       console.log(result);
                        $('#quoteText').text(result[0].quote);
                   },
                   error: function ajaxError(jqXHR) {
                       console.error('Error: ', jqXHR.responseText);
                   }
               });
           </script>

            {{-- <h2>Цитата дня - {{$data}}</h1> --}}

           
           
           <h2 id="quoteText1"></h2>
           <script>
              var category = 'success';
              $.ajax({
                  method: 'GET',
                  url: 'https://kudago.com/public-api/v1.2/place-categories/?lang=ru',
                  headers: { 'Access-Control-Allow-Origin': 'http://localhost'},
                  contentType: 'application/json',
                  success: function(result) {
                      console.log(result);
                       $('#quoteText1').text(result);
                  },
                  error: function ajaxError(jqXHR) {
                      console.error('Error: ', jqXHR.responseText);
                  }
              });
          </script>

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