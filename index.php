<?php
    // $file_path = './tasks.json';
    // $tasks_json_string = file_get_contents($file_path);
    // header('Content-Type: application/json');

    // header("Access-Control-Allow-Headers: X-Requested-With");

    // echo new_task_json_string;

    //  $file_path = './tasks.json';
    // $tasks_json_string = file_get_contents($file_path);
    // $tasks_array = json_decode($tasks_json_string);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-todo-list-json</title>
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fontawesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- bootstrap -->
    <link rel="stylesheet" href="./style.css" />
    <!-- css -->
    <script src="https://unpkg.com/vue@next"></script>
</head>

<body  > 
   <div id="app">
       <header>
           <div class="container text-start mt-5 p-3">
               <div class="row">
                   <div class="col-6 shadow ">
                       <h1>Todo List</h1>
                   </div>
               </div>
           </div>
       </header>
       <main>
           <div class="container ">
               <div class="row">
                   <div class="col-6 shadow pt-5 bg-light">
                       <ul class="">
                           <li v-for="task in tasks">
                               {{task.text}} 
                           </li>
                       </ul>
                   </div>
               </div>
           </div>
   
           <div class="container">
               <div class="row ">
                   <div class="col-6 shadow mt-2 d-flex justify-content-start bg-light">
                   <nav class="navbar navbar-light bg-light">
                           <form class="add_task form-inline d-flex ">
                           <input class="form-control mr-sm-2" aria-label="inserisci" type="text" v-model="new_task" @keyup.enter="add_task" placeholder="task here">
   
                               <button class="btn btn-outline-success  my-sm-0 my-2" type="button" @click="add_task">add</button>
                           </form>
                       </nav>
                   </div>
               </div>
           </div>
   
           
       </main>
   </div>
  

  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <!-- axios -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.2.47/vue.cjs.js" integrity="sha512-DD31SaA8/u+cn6fBAdPBcABgOkmiogzhPd/dNHvkMmazQLEjiaT9ZP51rkGTpFcx+jFl0EeNCxgxLaNniutt2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- VUE -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
   <script src="./app.js"></script>

</body>