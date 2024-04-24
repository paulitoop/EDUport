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
  font-size: 20px;
  
/* use %, em, px. % and em are recommended. */
}
.user-info a:hover{
  
   color: #562664;
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
   align-items:center;
   position: absolute;
   right: 200px;
   /* width: 600px; */
   text-align: right;
 
   
   
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
   text-align: center;
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

.nav-link.dropdown-toggle{
   
}

</style>
<head>


</head>
<body>
   <div class="container">
       <header>
           <div class="logo"><a href="/"> ⚛️ Главная</a></div>
           <div class="user-info">
               {{-- <a class="link" href='http://inport.stud/login'>Войти</a>
               <a class="link" href="http://inport.stud/register">Зарегистрироваться</a> --}}
               
                  <!-- Authentication Links -->
                  @guest
                      @if (Route::has('login'))
                          
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>
                          
                      @endif

                      @if (Route::has('register'))
                          
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Зарегистрироваться') }}</a>
                          
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
               <p>Твоё идеальное портфолио</p>
            </div>
       </div>
       <div class="content">
           <h2>Настройки профиля</h2>
           <div class="grid">
               <div class="grid-item">
                   <h3><a href="/newsert">⚛️ Загрузка достижений</a></h3>
                   <p>Делитесь своими успехами в учебе и внеучебной деятельности.</p>
               </div>
               <div class="grid-item">
                   <h3><a href="/events">⚛️ Мероприятия</a></h3>
                   <p>Проведите время с пользой, благодаря персональной подборке мероприятий.</p>
               </div>
               <div class="grid-item">
                   <h3><a href="/programs">⚛️ Образование</a></h3>
                   <p>Ознакомтесь с актуальным списком доступного обучения.</p>
               </div>
               <div class="grid-item">
                     <h3><a href="/profile_dir">⚛️Личный кабинет</a></h3>
                     <p>Обновите свою личную информацию.</p>
                     <p>Просматривайте и редактируйте академические записи</p>
                     <p>Управляйте достижениями и сертификатами</p>
               </div>
           </div>
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