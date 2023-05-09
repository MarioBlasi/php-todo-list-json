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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--font-awesome/6.4.0/css/brands.min.css-->

  </head>
  <body class="bg-secondary " >
    <div id="app" >
      <h1 class="p-5">Todo List</h1>
        <div class="container bg-light pt-3 rounded">
            <div class="row shadow rounded">
                <div class="col ">
                    <ul>
                      <li v-for="(task, index) in tasks" :key="index">
                      {{ task.title }}
                      
                      <button @click.prevent="removeTask(index)">Remove</button>
                      </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container pt-3 ">
          <div class="row shadow rounded bg-light">
            <div class="col">
              <form @submit.prevent="addTask "  class="mt-3">
                <input type="text" v-model="newTask" placeholder="Add a new task" />
                <button   class=" rounded" type="submit">Inserisci</button>
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
