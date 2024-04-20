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


</head>
<body>
   <div class="container">
       <header>
           <div class="logo">⚛️ Программы_ЦК</div>
           <div class="user-info">
               <ul class="navbar-nav ms-auto">
                  
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
       <div class="new-class">
           <h2>Список программ</h2>
           <div class="grid">
           <?php
            $file_path = "prog.csv";
            $file_encodings = ['cp1251','UTF-8'];
            $col_delimiter = '';
            $row_delimiter = '';
            
            if(!file_exists( $file_path )){
                dd($file_path);
            }
            
            $cont = trim( file_get_contents( $file_path ) );
        
            $encoded_cont = mb_convert_encoding( $cont, 'UTF-8', mb_detect_encoding( $cont, $file_encodings ) );
        
            unset( $cont );
        
            // определим разделитель
            if( ! $row_delimiter ){
                $row_delimiter = "\r\n";
                if( false === strpos($encoded_cont, "\r\n") )
                    $row_delimiter = "\n";
            }
        
            $lines = explode( $row_delimiter, trim($encoded_cont) );
            $lines = array_filter( $lines );
            $lines = array_map( 'trim', $lines );
        
            // авто-определим разделитель из двух возможных: ';' или ','.
            // для расчета берем не больше 30 строк
            if( ! $col_delimiter ){
                $lines10 = array_slice( $lines, 0, 30 );
        
                // если в строке нет одного из разделителей, то значит другой точно он...
                foreach( $lines10 as $line ){
                    if( ! strpos( $line, ',') ) $col_delimiter = ';';
                    if( ! strpos( $line, ';') ) $col_delimiter = ',';
        
                    if( $col_delimiter ) break;
                }
        
                // если первый способ не дал результатов, то погружаемся в задачу и считаем кол разделителей в каждой строке.
                // где больше одинаковых количеств найденного разделителя, тот и разделитель...
                if( ! $col_delimiter ){
                    $delim_counts = array( ';'=>array(), ','=>array() );
                    foreach( $lines10 as $line ){
                        $delim_counts[','][] = substr_count( $line, ',' );
                        $delim_counts[';'][] = substr_count( $line, ';' );
                    }
        
                    $delim_counts = array_map( 'array_filter', $delim_counts ); // уберем нули
        
                    // кол-во одинаковых значений массива - это потенциальный разделитель
                    $delim_counts = array_map( 'array_count_values', $delim_counts );
        
                    $delim_counts = array_map( 'max', $delim_counts ); // берем только макс. значения вхождений
        
                    if( $delim_counts[';'] === $delim_counts[','] )
                        return array('Не удалось определить разделитель колонок.');
        
                    $col_delimiter = array_search( max($delim_counts), $delim_counts );
                }
        
            }
            
            $data = [];
            foreach( $lines as $key => $line ){
                $data[] = str_getcsv( $line, $col_delimiter ); // linedata
                unset( $lines[$key] );
            }
        
            ?>

           <!-- <p>{{print_r($data)}}</p>
           <p>{{implode (';',$data[0])}}</p> -->
            @foreach($data as $row)
            <h>{{implode (';',$row)}}</h>
            @endforeach
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