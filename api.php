<?php

$filename = "tasks.json";

function readTasks() {
  global $filename;
  if (file_exists($filename)) {
    $tasks = json_decode(file_get_contents($filename), true);
    if ($tasks !== null) {
      return $tasks;
    }
  }
  return [];
}

function writeTasks($tasks) {
  global $filename;
  file_put_contents($filename, json_encode($tasks, JSON_PRETTY_PRINT));
}

if ($_SERVER["REQUEST_METHOD"] === "GET") {
  $tasks = readTasks();
  header("Content-Type: application/json");
  echo json_encode($tasks);
} elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
  $data = json_decode(file_get_contents("php://input"), true);
  $tasks = readTasks();
  $task = [
    "id" => uniqid(),
    "title" => $data["title"],
  ];
  array_push($tasks, $task);
  writeTasks($tasks);
} elseif ($_SERVER["REQUEST_METHOD"] === "DELETE") {
  $id = $_GET["id"];
  $tasks = readTasks();
  $index = array_search($id, array_column($tasks, "id"));
  if ($index !== false) {
    array_splice($tasks, $index, 1);
    writeTasks($tasks);
  }
}

?>
