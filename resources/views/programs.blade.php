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
    padding: 10px; /* Поля внутри контейнера */
    border-radius: 10px; /* Закругление углов контейнера */
    background-color: #f9f9f9; /* Цвет фона контейнера */
    box-shadow: 0 0 5px rgba(135, 206, 250, 10); /* Тень для контейнера */
    position: relative;
 
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

           <div class="logo" ><a href = "/">⚛️ Программы Цифровой Кафедры</a></div>
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
               <p>Твоё дополнительное образование</p>
            </div>
       </div>
       <div class="new-class">
           <h2>Список программ</h2>
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
            <?php
            // for($i = 0; $i < 6; $i ++){
            //     echo "<a>".$data[0][$i]."</a>";
            // }
            
                for ($i = 1; $i < count($data); $i++) {
                    echo '<div class="item-container">';
                        echo "<div class='item'>";
                        echo "<div class='itemProgName'>";
                        echo $data[0][1] . ": " . $data[$i][1];
                        echo "</div>";
                        echo "</div>";
                    for ($k = 2; $k < 7; $k++) {
                        echo "<div class='item'>";
                        if ($k < 6 || $k == 7) {
                            if ($data[0][$k]!="ID" && $data[0][$k]!="Тип")
                            {
                                echo $data[0][$k] . ": " . $data[$i][$k];
                            }
                            
                        } else {
                            echo $data[$i][$k];
                        }
                        echo "</div>";
                    }
                    echo '</div>';
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