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
   color: #1a1a1a;
}

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

nav a {
   /* padding-right: 10%; */
   text-decoration: none;
   color: #333;
}

main {
   display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: center;
   width: 90%;
   padding: 20px;
}

.form {
   display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: center;
   width: 300px;
   padding: 20px;
   background-color: #f0f0f0;
   border-radius: 10px;
   box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.form h2 {
   margin-top: 0;
   color: #1a1a1a;
}

.form input, .form button {
   width: 100%;
   margin-bottom: 10px;
   padding: 10px;
   border-radius: 10px;
   border: 1px solid #ddd;
   background-color: #fafafa;
}

.form button {
   background-color: #1a1a1a;
   color: #fff;
   cursor: pointer;
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

footer a {
   margin: 0 10px;
   text-decoration: none;
   color: #333;
}
.status-check-box{
    text-align: center;
    position: relative;
    
    
    
}
/* .status-check-box option{
    width: 50px;
    
    
} */

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


#status{
    text-align: center;
    width: 100%;
   margin-bottom: 10px;
   padding: 10px;
   border-radius: 10px;
   border: 1px solid #ddd;
   background-color: #fafafa;

}



</style>
<body>
   <header>
       <div class="logo"><a href="/">EduPort</a></div>
       <nav class="user-info">
           <a href="/login">Войти</a>
       </nav>
   </header>
   <main>
       <section class="form">
           <h2>Создать аккаунт</h2>
           <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Имя пользователя') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Адрес Email') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class = "chek-box-div">
                <label for="status">Статус</label>
                <div class="status-check-box">
                <select id="status" name="status">
                    <option value="user">Студент</option>
                    <option value="employer">Работодатель</option>
                    <option value="organizer">Организатор</option>
                </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Пароль') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Повторите пароль') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Зарегистрироваться') }}
                    </button>
                </div>
            </div>
        </form>
           <!-- <form>
               <input type="text" placeholder="Имя">
               <input type="email" placeholder="Email Address">
               <input type="password" placeholder="Password">
               <input type="password" placeholder="Confirm Password">
               <button type="submit">Зарегистрироваться</button>
           </form> -->
       </section>
   </main>
   <footer>
       <div>
           <a href="http://inport.stud/">Главная</a>
           <a href="#">Все права соблюдены</a>
           <a href="#">Политика использования</a>
           <a href="#">Политика приватности</a>
           <a href="#">Поддержка</a>
       </div>
   </footer>
</body>
</html>