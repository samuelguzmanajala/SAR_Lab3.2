<?php

if (isset($_POST['userName']) && isset($_POST['comentarioInput'])) {
    $coment=$_POST['comentarioInput'];
    
    $json=file_get_contents('../data/MOCK_DATA.json')or die('no ha sido posible cargar los comentarios');
    $data=json_decode($json);

    $coments= new StdClass();

    $coments->id=count($data)+1;
    $coments->name=$_POST['userName'];

    if(isset($_POST['emailInput'])){
        if($_POST['publicInput']=='publica'){
            $coments->email=$_POST['emailInput'];
        }else{
            $coments->email="Anonimo";
        }
    }else{
        $coments->email="anonimo";
    }

    $coments->comentary=$coment;
    $today=date("d/m/y");
    $coments->date=$today;

    $preguntaarray[0] = $coments;
    array_push($data, $preguntaarray[0]) or die('No ha sido posible añadir la pregunta');

    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents("../data/MOCK_DATA.json", $jsonData);
    
    echo 'comentario enviado correctamente, para ver los comentarios pulse <a href="server.php">aqui</a>';
    # code...
}
?>