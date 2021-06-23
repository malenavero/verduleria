<?php
/*
 * Este script es un endpoint que devuelve un array de arrays, con información
 * de frutas y verduras de estacion. El formato de retorno de este endpoint es JSON.

 */
	$vegetables = [
        [
           "name"       => "zapallo",
           "img"        => "https://freepngimg.com/thumb/pumpkin/14-2-pumpkin-png-file.png",
           "season"     => ["summer", "autumn", "winter"]
        ],
        [
           "name"       => "calabaza",
           "img"        => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBKeW_soVT4GjEpQ663Hd17DmpAHUss06n-SSY4Do6c6uY_Bn2SBsI8W7Vy2kUHh2xQo8&usqp=CAU",
           "season"     => ["summer", "autumn", "winter"]
        ],
        [
            "name"       => "rabanito",
            "img"        => "http://www.aproduco.org.ar/wp-content/uploads/2014/08/ap-s-p-0084.jpg",
            "season"     => ["summer", "autumn", "winter"]
         ],
         [
            "name"       => "tomate",
            "img"        => "https://freepngimg.com/thumb/tomato/6-tomato-png-image.png",
            "season"     => ["summer"]
         ],
         [
            "name"       => "espárrago",
            "img"        => "https://www.hoyverdurascongeladas.com/wp-content/uploads/2018/06/esparragos-ampl.jpg",
            "season"     => ["summer", "spring"]
         ],
         [
            "name"       => "morrón",
            "img"        => "https://freepngimg.com/thumb/pepper/1-red-pepper-png-image.png",
            "season"     => ["summer"]
         ],
         [
            "name"       => "cebolla",
            "img"        => "https://freepngimg.com/thumb/onion/1-onion-png-image.png",
            "season"     => ["summer"]
         ],
         [
            "name"       => "chauchas",
            "img"        => "http://www.aproduco.org.ar/wp-content/uploads/2014/08/ap-s-p-0043.jpg",
            "season"     => ["summer", "autumn", "winter"]
         ],
         [
            "name"       => "pepino",
            "img"        => "https://freepngimg.com/thumb/cucumber/4-green-cucumber-png-image.png",
            "season"     => ["summer"]
         ],
         [
            "name"       => "acelga",
            "img"        => "https://www.fecoagro.com.ar/wp-content/uploads/2015/03/acelga-verde-anual.png",
            "season"     => ["summer", "spring", "autumn", "winter"]
         ],
         [
            "name"       => "berenjena",
            "img"        => "https://freepngimg.com/thumb/eggplant/5-eggplants-png-images-download.png",
            "season"     => ["summer"]
         ],
         [
            "name"       => "choclo",
            "img"        => "https://freepngimg.com/thumb/corn/2-corn-png-image.png",
            "season"     => ["summer"]
         ],
         [
            "name"       => "frambuesa",
            "img"        => "https://freepngimg.com/thumb/raspberry/3-rraspberry-png-image.png",
            "season"     => ["summer", "spring"]
         ],
         [
            "name"       => "mora",
            "img"        => "https://freepngimg.com/thumb/blackberry/9-2-blackberry-fruit-transparent.png",
            "season"     => ["summer"]
         ],
         [
            "name"       => "manzana",
            "img"        => "https://freepngimg.com/thumb/apple/52-apple-png-image.png",
            "season"     => ["summer", "spring"]
         ],
         [
            "name"       => "sandía",
            "img"        => "https://freepngimg.com/thumb/watermelon/2-2-watermelon-free-download-png.png",
            "season"     => ["summer"]
         ],
         [
            "name"       => "uva",
            "img"        => "https://freepngimg.com/thumb/grape/11-grape-png-image-download-picture.png",
            "season"     => ["summer"]
         ],
         [
            "name"       => "limón",
            "img"        => "https://freepngimg.com/thumb/lemon/7-lemon-png-image.png",
            "season"     => ["summer", "spring", "autumn", "winter"]
         ],
         [
            "name"       => "pelón",
            "img"        => "https://statics.dinoonline.com.ar/imagenes/large_460x460/3390324_l.jpg",
            "season"     => ["summer"]
         ],
         [
            "name"       => "pera",
            "img"        => "https://freepngimg.com/thumb/pear/3-pear-png-image.png",
            "season"     => ["summer", "autumn", "winter"]
         ],
         [
            "name"       => "arándanos",
            "img"        => "https://www.naturvital.com/upload/media/ingredient/0001/01/bc05c8afe4ccd0b655ea089c389002f738021a02.jpeg",
            "season"     => ["summer", "spring"]
         ],
         [
            "name"       => "frutilla",
            "img"        => "https://www.collinsdictionary.com/images/thumb/strawberry_227472010_250.jpg?version=4.0.161",
            "season"     => ["summer", "spring"]
         ],
         [
            "name"       => "higo",
            "img"        => "https://soycomocomo.es/media/2015/07/higos.jpg",
            "season"     => ["summer"]
         ],
         [
            "name"       => "melón",
            "img"        => "https://storage.googleapis.com/portalfruticola/2019/11/9ed97253-mel%C3%B3n-adobestock_189510127-1024x710.jpeg",
            "season"     => ["summer"]
         ],
         [
            "name"       => "naranja",
            "img"        => "https://freepngimg.com/thumb/orange/4-orange-png-image-download.png",
            "season"     => ["summer", "spring", "autumn", "winter"]
         ],
         [
            "name"       => "ananá",
            "img"        => "https://www.collinsdictionary.com/images/thumb/pineapple_124985672_250.jpg?version=4.0.161",
            "season"     => ["summer", "spring"]
         ],
         [
            "name"       => "ciruela",
            "img"        => "https://freepngimg.com/thumb/plum/2-plum-png-image.png",
            "season"     => ["summer", "autumn", "winter"]
         ],
         [
            "name"       => "cereza",
            "img"        => "https://freepngimg.com/thumb/cherry/1-red-cherry-png-image-download.png",
            "season"     => ["summer", "spring"]
         ],
         [
            "name"       => "damasco",
            "img"        => "https://frutasyverdurashuechuraba.cl/wp-content/uploads/2017/09/damasco.jpg",
            "season"     => ["summer"]
         ],
         [
            "name"       => "durazno",
            "img"        => "https://freepngimg.com/thumb/peach/11-peach-png-image.png",
            "season"     => ["summer", "autumn", "winter"]
         ],
         [
            "name"       => "remolacha",
            "img"        => "https://soycomocomo.es/media/2015/11/remolacha.jpg",
            "season"     => ["spring", "autumn", "winter"]
         ],
         [
            "name"       => "zapallito",
            "img"        => "https://freepngimg.com/thumb/cucumber/1-2-cucumber-png-hd.png",
            "season"     => ["spring"]
         ],
         [
            "name"       => "perejil",
            "img"        => "https://feriamoviloficial.cl/wp-content/uploads/2020/07/perejil.jpg",
            "season"     => ["spring"]
         ],
         [
            "name"       => "puerro",
            "img"        => "https://propiedadesdeweb.com/wp-content/uploads/2017/09/propiedades-del-puerro.jpg",
            "season"     => ["spring", "autumn", "winter"]
         ],
         [
            "name"       => "habas",
            "img"        => "https://www.hoyverdurascongeladas.com/wp-content/uploads/2018/06/habas-ampl.jpg",
            "season"     => ["spring"]
         ],
         [
            "name"       => "lechuga",
            "img"        => "https://freepngimg.com/thumb/salad/10-salad-png-image.png",
            "season"     => ["spring"]
         ],
         [
            "name"       => "nabo",
            "img"        => "https://www.bidfoodiberia.com/media/catalog/product/cache/1/image/600x/17f82f742ffe127f42dca9de82fb58b1/e/c/econabo.jpg",
            "season"     => ["spring", "autumn", "winter"]
         ],
         [
            "name"       => "apio",
            "img"        => "https://img2.lrgarden.com/feed_pic/78/42/1000339278_1000014626_1505714794.jpg?301",
            "season"     => ["spring", "autumn", "winter"]
         ],
         [
            "name"       => "alcaucil",
            "img"        => "https://freepngimg.com/thumb/artichokes/23094-5-artichokes-free-download.png",
            "season"     => ["spring"]
         ],
         [
            "name"       => "palta",
            "img"        => "https://freepngimg.com/thumb/avocado/5-2-avocado-png-hd.png",
            "season"     => ["spring", "autumn", "winter"]
         ],
         [
            "name"       => "banana",
            "img"        => "https://freepngimg.com/thumb/banana/1-banana-png-image.png",
            "season"     => ["spring", "autumn", "winter"]
         ],
         [
            "name"       => "aceitunas",
            "img"        => "https://carbonell-oliveoil.com/themes/user/site/default/asset/img/familia/aceitunas-verdes-manzanillas-info.jpg",
            "season"     => ["autumn", "winter"]
         ],
         [
            "name"       => "achicoria",
            "img"        => "https://static.carethy.net/consejos/wp-content/uploads/2017/01/shutterstock_97743221-min-e1484953171649.jpg",
            "season"     => ["autumn", "winter"]
         ],
         [
            "name"       => "batata",
            "img"        => "https://www.cucinare.tv/wp-content/uploads/2019/04/Batata.jpg",
            "season"     => ["autumn", "winter"]
         ],
         [
            "name"       => "berro",
            "img"        => "https://www.fruteriadevalencia.com/wp-content/uploads/2015/01/BERROS-buena-510x386.jpg",
            "season"     => ["autumn", "winter"]
         ],
         [
            "name"       => "brocolí",
            "img"        => "https://freepngimg.com/thumb/broccoli/12-broccoli-png-image-with-transparent-background.png",
            "season"     => ["autumn", "winter"]
         ],
         [
            "name"       => "coliflor",
            "img"        => "https://freepngimg.com/thumb/cabbage/3-cauliflower-png-image.png",
            "season"     => ["autumn", "winter"]
         ],
         [
            "name"       => "verdeo",
            "img"        => "https://www.repartienda.com/wp-content/uploads/2018/06/Cebolla-Verdo-650x520.jpg",
            "season"     => ["autumn", "winter"]
         ],
         [
            "name"       => "escarola",
            "img"        => "https://plantamus.com/blog/wp-content/uploads/2017/12/escarola-propiedades.jpg",
            "season"     => ["autumn", "winter"]
         ],
         [         
            "name"       => "espinaca",
            "img"        => "https://www.eluniversal.com.mx/sites/default/files/2017/07/27/m-_espinaca.jpg",
            "season"     => ["autumn", "winter"]
         ],
         [
            "name"       => "hinojo",
            "img"        => "https://babumagazine.com/wp-content/uploads/2019/01/hinojo-1.jpg",
            "season"     => ["autumn", "winter"]
         ],
         [
            "name"       => "radicheta",
            "img"        => "https://http2.mlstatic.com/D_NQ_NP_957712-MLA31886935063_082019-O.webp",
            "season"     => ["autumn", "winter"]
         ],
         [
            "name"       => "repollo",
            "img"        => "https://www.puntofresc.cl/426-tm_large_default/repollo-verde-mix.jpg",
            "season"     => ["autumn", "winter"]
         ],
         [
            "name"       => "repollitos de bruselas",
            "img"        => "https://www.sinavimo.gob.ar/sites/default/files/cultivo/imagenes/imagen_1.jpg",
            "season"     => ["autumn", "winter"]
         ],
         [
            "name"       => "zanahoria",
            "img"        => "https://freepngimg.com/thumb/carrot/1-carrot-png-image.png",
            "season"     => ["autumn", "winter"]
         ],
         [
            "name"       => "mandarina",
            "img"        => "https://freepngimg.com/thumb/orange/10-orange-png-image-download.png",
            "season"     => ["autumn", "winter"]
         ],
         [
            "name"       => "melón",
            "img"        => "https://storage.googleapis.com/portalfruticola/2019/11/9ed97253-mel%C3%B3n-adobestock_189510127-1024x710.jpeg",
            "season"     => ["autumn", "winter"]
         ],
         [
            "name"       => "membrillo",
            "img"        => "https://www.kaisershop.cl/wp-content/uploads/2020/05/membrillo.png",
            "season"     => ["autumn", "winter"]
         ],

         [
            "name"       => "pelón",
            "img"        => "https://www.barilocheya.com.ar/verduleria1/wp-content/uploads/sites/5/2020/03/pelon.jpg",
            "season"     => ["autumn", "winter"]
         ],
         [
            "name"       => "pomelo",
            "img"        => "https://www.comycebaleares.com/galeria/menus/A_pomelo_rosa.jpg",
            "season"     => ["autumn", "winter"]
         ],
    ];
		

header( 'Content-Type: application/json' );
echo json_encode($vegetables);
?>

