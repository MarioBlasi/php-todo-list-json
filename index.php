<?php
       
?>

<!DOCTYPE html>
<html>
  <head>
    <title>php-todo-list-json</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <!--Script Bootstrap bundle-->
  </head>
  <body>
    <div id="app">
        <div class="container">
            <div class="row shadow">
                <div class="col d-flex justify-content-start flex-column p-2 text-secondary bg-light ">
                        <h1>Todo List</h1>
                        <ul>
                            <li v-for="(task, index) in tasks" :key="index" >
                                {{ task.title }}
                                <button @click.prevent="removeTask(index)">Remove</button>
                            </li>
                        </ul>
                        <form @submit.prevent="addTask" class="w-75">
                            <input type="text"  v-model="newTask" placeholder="Add a new task" />
                            <button type="submit">Inserisci</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/vue@next"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="app.js"></script>
  </body>
</html>
