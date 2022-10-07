<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $word_list_en=array("one","two","three","four","five","six","seven","eight","nine","ten");

        $word_list_es=array("uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve","diez");

        $palabra="ten";


        for($i=0;$i<count($word_list_en);$i++){
            if(strcmp($palabra, $word_list_en[$i]) === 0){
                echo "La traducción de " . $palabra . " es " . $word_list_es[$i];
            }

            if(strcmp($palabra, $word_list_es[$i]) === 0){
                echo "La traducción de " . $palabra . " es " . $word_list_en[$i];
            }

        }


    ?>


</body>
</html>