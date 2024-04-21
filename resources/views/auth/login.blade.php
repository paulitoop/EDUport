<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>

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
body {
   font-family: Arial, sans-serif;
   margin: 0;
   padding: 0;
   display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: center;
   height: 100vh;
}

.logo {
    margin-left: 5%; 
    font-size: 24px;
   font-weight: bold;
   text-align: center;
   margin: 20px 0;
   
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

.login-form {
   display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: center;
   width: 500px;
   height: 450px;
   background-color: #f0f0f0;
   border-radius: 10px;
   margin: 20px 0;
}

.login-form label {
   font-size: 1.2em;
   /* margin: 10px 0; */
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

input.form-check-input {
    transform: scale(0.5); 
    width: 50px;

}
footer a {
   margin: 0 10px;
   color: #333;
   text-decoration: none;
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

.check-box{
    width: 250px;
    clear: both;
}

.check-box label{
   vertical-align: middle;
   position: relative;
   bottom: 25%;
}

.forgotPas{

    text-align: center;
}
    </style>    
</head>
<body>
    <header>
        <div class="logo">EduPort</div>
        <nav class="user-info">
            <a href="/register">Зарегестрироваться</a>
        </nav>
    </header>
   <main>
      <form method="POST" action="{{ route('login') }}">
         @csrf
        <div class="login-form">
         <div>
            <div>
                <label for="email">{{ __('Адрес Email') }}</label>
            </div>
             <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
             @error('email')
             <div>
                 <span>{{ $message }}</span>
             </div>
             @enderror
         </div>

         <div>
            <div>
                <label for="password">{{ __('Пароль') }}</label>
            </div>
             <input id="password" type="password" name="password" required autocomplete="current-password">
             @error('password')
            <div>
                 <span>{{ $message }}</span>
            </div>
             @enderror
         </div>

         <div class="check-box">
             <input type="checkbox" name="remember" id="remember" class ="form-check-input"{{ old('remember') ? 'checked' : '' }}>
             <label for="remember">{{ __('Запомнить') }}</label>
         </div>

         <div>
             <button type="submit">{{ __('Войти') }}</button>
             @if (Route::has('password.request'))
                <div class = "forgotPas">
                 <a href="{{ route('password.request') }}">{{ __('Забыли пароль?') }}</a>
                </div>
             @endif
         </div>
        </div>
     </form>
   </main>
   <footer>
       <a href="http://inport.stud/">Главная</a>
       <a href="#">Все права соблюдены</a>
       <a href="#">Политика использования</a>
       <a href="#">Политика приватности</a>
       <a href="#">Поддержка</a>
   </footer>
</body>
</html>