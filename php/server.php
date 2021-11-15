
<?php 

 $url='../data/MOCK_DATA.json';
 $json = file_get_contents('../data/MOCK_DATA.json');
 $json_data = json_decode($json,true);
 $array= ["fsdafdsa","fdsafdsa"];
 //echo json_encode($json_data,JSON_PRETTY_PRINT);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php 
    include '../css/table.css';
    ?> </style>
</head>
<body>

    <h2>Libro de visitas</h2>
    <p>A continuación se listan todos los comentarios recibidos hasta ahora. Para volver al menú principal haz click <a href="../html/modelo.php">aqui</a></p>
    <div class="table__container">
            <?php

                foreach ($json_data as $key => $value) {
                    //print_r($key);
                    echo
                    
                    '<table class="table">' .
                    "<tr>" .
                    "<th>" . $value['date'] . "</th>" .
                    "<th>" . $value['name'] . "</th>" .
                    "<th>" . $value['email'] . "</th>" .
                    "</tr>" . 
                    
                    '<td COLSPAN="3">' . $value['comentary'] . "</td>" . 
                    
                    '</table>'
                    ;

                    
                }
                
            ?>
    </div>
</body>
</html>