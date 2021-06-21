<?php
    function getseason(){
        //obtiene la estacion actual         
            // Guardamos en una variable el día del año
            $day = date('z');
         
            // Si la fecha actual es anterior al 21 de marzo
            if ( $day < 79 || $day > 354) {
                $season = 'summer';
         
            // Si la fecha actual es anterior al 21 de junio
            } elseif ( $day < 171 ) {
                $season = 'autumn';
         
            // Si la fecha actual es anterior al 21 de septiembre
            } elseif ( $day < 263 ) {
                $season = 'winter';
         
            // Si la fecha actual es anterior al 21 de diciembre
            } elseif ( $day < 354 ) {
                $season = 'spring';
            }     
        return $season;       
    }

    function getSpanishSeason(){
        $season = getseason();
        switch ( $season ) {
            case 'spring':
              echo 'Primavera';
              break;
            case 'summer':
                echo 'Verano';
            break;
            case 'winter':
                echo 'Invierno';
                break;
            case 'autumn':
                echo 'Otoño';
                break;
          };
    }

    function getSeasonArray(){
        //genera un nuevo array con vegetales de estacion

        $res = file_get_contents("http://localhost/repos/queComo/api.php");
        $array_vegetables = json_decode($res, true);
        $season = getSeason();
        $seasonArray = [];

        for ($i = 0; $i < count($array_vegetables); $i++){
            foreach($array_vegetables[$i]['season'] as $value){
                if ( $value == $season ){
                    $seasonArray[] = [
                        'name'  => $array_vegetables[$i]['name'],
                        'img'   => $array_vegetables[$i]['img']
                    ];
                }
            }            
        }
        return $seasonArray;
    }

    function getSeasonArrayImgList(){
        $seasonArray = getSeasonArray();
        for ($i = 0; $i < count($seasonArray); $i++){
            echo "<li><img src = '" . $seasonArray[$i]['img'] . "' ></li>";  
            /* echo $seasonArray[$i]['name'];  */
         }
    }
    function getSeasonArrayNameList(){
        $seasonArray = getSeasonArray();
        for ($i = 0; $i < count($seasonArray); $i++){
            echo "<li>" . $seasonArray[$i]['name'] . "</li>";   
         }
    }
    
    
    


?>
