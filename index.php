<?php

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
    <link rel="stylesheet" href="style.css" />
    <!-- css -->
    <script src="https://unpkg.com/vue@next"></script>
</head>

<body> 
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
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.2.47/vue.cjs.js" integrity="sha512-DD31SaA8/u+cn6fBAdPBcABgOkmiogzhPd/dNHvkMmazQLEjiaT9ZP51rkGTpFcx+jFl0EeNCxgxLaNniutt2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <!-- VUE -->
    <!-- <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script> -->
    <!-- vue3.2.47 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.2.47/vue.cjs.min.js" integrity="sha512-GAZdoqaWBVt41E9aFD6m/Ng1bttD+LdVCMKIZ9CK9NrGvElI6RzUlAtoV+Yew+s1oOSOwZFUSiGSOwhXMTINsQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
       <!-- vue3.2.47 -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap-grid.min.css" integrity="sha512-JQksK36WdRekVrvdxNyV3B0Q1huqbTkIQNbz1dlcFVgNynEMRl0F8OSqOGdVppLUDIvsOejhr/W5L3G/b3J+8w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="./app.js"></script>

</body>
</html>