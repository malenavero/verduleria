<?php
    function getCurrentSeason(){
        //get current season in Argentina

            // Guardamos en una variable el día del año
            $day = date('z');  
         
            // Si la fecha actual es anterior al 21 de marzo
            if ( $day < 79 || $day > 354) {
                $currentSeason = 'summer';
         
            // Si la fecha actual es anterior al 21 de junio
            } elseif ( $day < 171 ) {
                $currentSeason = 'autumn';
         
            // Si la fecha actual es anterior al 21 de septiembre
            } elseif ( $day < 263 ) {
                $currentSeason = 'winter';
         
            // Si la fecha actual es anterior al 21 de diciembre
            } elseif ( $day < 354 ) {
                $currentSeason = 'spring';
            }     
        return $currentSeason;       
    }

    function toSpanish($season){    
        //translate to spanish every season  
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
    }

    function getActiveSeason(){
        //return select season, if is empty returns current

       if (empty($_GET["season"])){
           $activeSeason = getCurrentSeason();           
       }
       else {
           $activeSeason = $_GET["season"];
       }

       return $activeSeason;
    }

    function getSeasonArray(){
        //generate a new array only with season vegetables

        $res = file_get_contents("http://localhost/repos/queComo/php/api.php");
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
                }
            }            
        }
        return $seasonArray;
    }

    function getSeasonArrayList(){
        //generate a list for the season array

        $seasonArray = getSeasonArray();
        for ($i = 0; $i < count($seasonArray); $i++){
            echo 
            "<li>
                <div class = 'cap'>
                    <p>" . $seasonArray[$i]['name'] . "</p>
                </div>
                <img src = '" . $seasonArray[$i]['img'] . "' >
            </li>";  
            /* echo $seasonArray[$i]['name'];  */
         }
    }


    function getSeasonList(){
        //generate a list of seasons to select
        
        $arraySeasons = ['summer', 'autumn', 'winter', 'spring'];        
        $activeSeason = getActiveSeason();

        foreach($arraySeasons as $season){

            $estacion = toSpanish($season);

            if ( $season === $activeSeason ){

                echo "<li class='season-item active'><a href='index.php?season=" . $season . "'>" . $estacion . "</a></li>";
            }
            else {
                echo "            
                    <li class='season-item'>
                        <a href='index.php?season=" . $season . "'>" . $estacion . "</a>
                    </li>
                    ";
            }
        }
    }
?>
