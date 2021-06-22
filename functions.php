<?php
    function getCurrentSeason(){
        //obtiene la estacion actual en Argentina

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
        //traduce al español la season    
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
        //retorna la estacion seleccionada, la default es la current.

       if (empty($_GET["season"])){
           $activeSeason = getCurrentSeason();           
       }
       else {
           $activeSeason = $_GET["season"];
       }

       return $activeSeason;
    }

    function getSeasonArray(){
        //genera un nuevo array con vegetales de estacion activa

        $res = file_get_contents("http://localhost/repos/queComo/api.php");
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
        //genera una lista a partir del array filtrado de la estacion activa 

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
        //genera lista de Estaciones para seleccionar
        
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
