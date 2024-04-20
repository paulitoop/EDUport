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
   height: 100vh;
}

.logo {
   font-size: 3em;
   text-align: center;
   margin: 20px 0;
}

.login-form {
   display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: center;
   width: 300px;
   height: 300px;
   background-color: #f0f0f0;
   border-radius: 10px;
   margin: 20px 0;
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

footer {
   margin-top: 20px;
   font-size: 0.8em;
   color: #999;
}

footer a {
   margin: 0 10px;
   color: #333;
   text-decoration: none;
}
</style>
<body>
   <header>
       <div class="logo">EduPort</div>
   </header>
   <main>
      <form method="POST" action="{{ route('login') }}">
         @csrf

         <div class="row mb-3">
             <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

             <div class="col-md-6">
                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                 @error('email')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror
             </div>
         </div>

         <div class="row mb-3">
             <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

             <div class="col-md-6">
                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                 @error('password')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror
             </div>
         </div>

         <div class="row mb-3">
             <div class="col-md-6 offset-md-4">
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                     <label class="form-check-label" for="remember">
                         {{ __('Remember Me') }}
                     </label>
                 </div>
             </div>
         </div>

         <div class="row mb-0">
             <div class="col-md-8 offset-md-4">
                 <button type="submit" class="btn btn-primary">
                     {{ __('Login') }}
                 </button>

                 @if (Route::has('password.request'))
                     <a class="btn btn-link" href="{{ route('password.request') }}">
                         {{ __('Forgot Your Password?') }}
                     </a>
                 @endif
             </div>
         </div>
     </form>
       <!-- <form class="login-form">
           <label for="username">Авторизация</label>
           <input type="email" id="email" placeholder="Почта">
           <input type="password" id="password" placeholder="Пароль">    
           <button type="submit">Войти</button>
       </form> -->
   </main>
   <footer>
       <a href="http://inport.stud/">Home</a>
       <a href="#">All Rights Reserved.</a>
       <a href="#">Terms of Service</a>
       <a href="#">Privacy Policy</a>
       <a href="#">Support</a>
   </footer>
</body>
</html>