<?php

$config = require("config/app.php");

$id = $_GET['id'] ?? null;

if ($id) {

    $db = new Database($config);
    $note = $db->query("select * from notes where id = :id", [
        'id' => $id
    ])->fetch();

    $title = "Nota";

    if (!$note) {
        abort();
    }

    if ($note['user_id'] !== 1) {
        abort(403);
    }

    require("views/note.view.php");
} else {
    header('Location: /notes');
    exit;
}
