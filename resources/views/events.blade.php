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
       </div>
   </div>
</body>
</html>

