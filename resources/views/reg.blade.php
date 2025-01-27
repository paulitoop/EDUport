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
   font-size: 20px;
   font-weight: bold;
  
   /* padding-left: 10%; */
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
</style>
<body>
   <header>
       <div class="logo">EduPort</div>
       <nav>
           <a href="#">Войти</a>
       </nav>
   </header>
   <main>
       <section class="form">
           <h2>Создать аккаунт</h2>
           <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

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
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
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
           <a href="#">2023 EduPort</a>
           <a href="#">All Rights Reserved</a>
           <a href="#">Политика использования</a>
           <a href="#">Политика приватности</a>
           <a href="#">Поддержка</a>
       </div>
   </footer>
</body>
</html>