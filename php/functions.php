<?php
/*
    define( "DEV_URL",  "http://localhost/repos/verduleria/php/api.php" );
    define( "TEST_URL", "https://verduleria-de-estacion.000webhostapp.com/php/api.php" );
    define( "PROD_URL", "https://cursos.altcooperativa.com/portfolio/malenavero/verduleria/php/api.php" );    */
    
    function getCurrentSeason(){
        //Trae la estacion actual en argentina            
        $day = date('z');    
        // Guardamos en una variable el día del año                 
        if ( $day < 79 || $day > 354) {
            $currentSeason = 'summer';   
        // Si la fecha actual es anterior al 21 de marzo      
        } elseif ( $day < 171 ) {
            $currentSeason = 'autumn';   
        // Si la fecha actual es anterior al 21 de junio      
        } elseif ( $day < 263 ) {
            $currentSeason = 'winter'; 
        // Si la fecha actual es anterior al 21 de septiembre        
        } elseif ( $day < 354 ) {
            $currentSeason = 'spring';
        }     
        // Si la fecha actual es anterior al 21 de diciembre
        return $currentSeason;       
    };

    function toSpanish($season){    
        //traduce a espaniol la estacion pasada por parametro
        switch ( $season ) {
            case 'spring':
              return 'Primavera';
                break;
            case 'summer':
                return 'Verano';
                break;
            case 'winter':
                return 'Invierno';
                break;
            case 'autumn':
                return 'Otoño';
                break;
          };
    };

    function getActiveSeason(){
        //retorna la estacion activa. Si no hay ninguna seleccionada devuelve la actual en Argentina.
       if ( empty ( $_GET["season"] ) ){
           $activeSeason = getCurrentSeason();           
       } else {
           $activeSeason = $_GET["season"];
       };

       return $activeSeason;
    };

   /*function getSeasonArray(){
        //$res = file_get_contents( DEV_URL );
        //$res = file_get_contents( TEST_URL );
        $res = file_get_contents( PROD_URL );
        $array_vegetables = json_decode($res, true);
        $activeSeason = getActiveSeason();
        $seasonArray = [];
        for ($i = 0; $i < count($array_vegetables); $i++){
            foreach($array_vegetables[$i]['season'] as $value){
                if ( $value == $activeSeason ){
                    $seasonArray[] = [
                        'name'  => $array_vegetables[$i]['name'],
                        'img'   => $array_vegetables[$i]['img']
                    ];
                };
            };            
        };
        return $seasonArray;
    };*/

    function getSeasonArray(){
        $current_link       = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $parse_url          = parse_url( $current_link );
        $link               = $parse_url['scheme'] . "://" . $parse_url['host'] . $parse_url['path'] . "php/api.php";   

        if ( !empty($_GET["season"])) {
            //si se pasa parametro reconstruyo la url
            $link = strstr($link, 'index', true) . "php/api.php";
        };

        $res                = file_get_contents( $link );
        $array_vegetables   = json_decode($res, true);
        $activeSeason       = getActiveSeason();
        $seasonArray        = [];

        for ($i = 0; $i < count($array_vegetables); $i++){
            foreach($array_vegetables[$i]['season'] as $value){
                if ( $value == $activeSeason ){
                    $seasonArray[] = [
                        'name'  => $array_vegetables[$i]['name'],
                        'img'   => $array_vegetables[$i]['img']
                    ];
                };
            };            
        };

        return $seasonArray;
    };

    function getSeasonArrayList(){
        //genera una lista con el array de las verduras de estacion
        $seasonArray = getSeasonArray();

        for ($i = 0; $i < count($seasonArray); $i++){
            echo 
                "<li>
                    <div class = 'cap'>
                        <p>" . $seasonArray[$i]['name'] . "</p>
                    </div>
                    <img src = '" . $seasonArray[$i]['img'] . "' >
                </li>";  
        };
    };

    function getSeasonList(){
        //genera una lista con las estaciones del anio        
        $arraySeasons = ['summer', 'autumn', 'winter', 'spring'];        
        $activeSeason = getActiveSeason();

        foreach( $arraySeasons as $season ){
            $estacion = toSpanish($season);
            if ( $season === $activeSeason ){
                echo 
                    "<li class='season-item active'>
                        <a href='index.php?season=" . $season . "'>" . $estacion . "</a>
                    </li>";
            }
            else {
                echo
                    "<li class='season-item'>
                        <a href='index.php?season=" . $season . "'>" . $estacion . "</a>
                    </li>";
            };
        };
    };
