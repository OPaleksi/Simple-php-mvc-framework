<?php

namespace App\Models;

use PDO;

class Journal
{
    protected $id, $title, $content, $created_at;

    public function read($id)
    {
        $pdo = new PDO("mysql:host=localhost;dbname=mvc_db", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare("SELECT * FROM journal WHERE id = ?");
        $stmt->execute([$id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($data) {
            $this->id = $data['id'];
            $this->title = $data['title'];
            $this->content = $data['content'];
            $this->created_at = $data['created_at'];
        }
    }

    public function getId() { return $this->id; }
    public function getTitle() { return $this->title; }
    public function getContent() { return $this->content; }
    public function getCreatedAt() { return $this->created_at; }
}
