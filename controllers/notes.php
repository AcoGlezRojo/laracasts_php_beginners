<?php

$config = require("config/app.php");

$db = new Database($config);
$notes = $db->query("select * from notes where user_id = :id", ['id' => 1])->fetchAll(PDO::FETCH_ASSOC);

$title = "Notas";

require("views/notes.view.php");
