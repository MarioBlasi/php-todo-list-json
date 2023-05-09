<?php

if (isset($_POST['new_task'])){
    $task = [
        "text"=> $_POST['new_task'],
        "done"=> false
    ];
    // leggi il file json con il file get contents
    $tasks_string = file_get_contents('./tasks.json');

   
    // converti la json stringa e json decode
    $tasks_array = json_decode($tasks_string, true);
    // aggiungere la nuova attività all'array
    array_unshift($tasks_array, $task);


    //riconvertiamo l'array in una stringa json 
    $new_task_json_string = json_encode($tasks_array);
    //sostituisci il contenuto del file usando file_put_contents()
    file_put_contents($file_path, $new_task_json_string);
    //aggiungo application/json
    header('Content-Type: application/json');
    header("Access-Control-Allow-Headers: X-Requested-With");
    //echo json
    echo $new_task_json_string;


   
}
