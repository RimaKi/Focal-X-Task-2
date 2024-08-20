<?php
include 'Database.php';

class Post extends Database
{
    public $id;
    public $title;
    public $content;
    public $author;
    public $created_at;
    public $updated_at;


    /*
     * Add record
     */
    public function create()
    {
        $query = "INSERT INTO posts (title, content, author) VALUES (:title, :content, :author)";
        $this->execute($query, [
            ':title' => $this->title,
            ':content' => $this->content,
            ':author' => $this->author
        ]);
    }


    /*
     * view specific item from table
     * params: record ID to display
     */
    public function read($id)
    {
        $query = "SELECT * FROM posts WHERE id = :id";
        $stmt = $this->execute($query, [':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /*
     * Edit record (item) from table
     * params: The ID of the record to be edited.
   */
    public function update($id)
    {
        $query = "UPDATE posts SET title = :title, content = :content, author = :author WHERE id = :id";
        $this->execute($query, [
            ':id' => $id,
            ':title' => $this->title,
            ':content' => $this->content,
            ':author' => $this->author
        ]);
    }

    /*
     * delete item from table
     * params: The ID of the record to be deleted.
     */
    public function delete($id)
    {
        $query = "DELETE FROM posts WHERE id = :id";
        $this->execute($query, [':id' => $id]);
    }


    /*
     * view all data from table and Sort from newest to oldest
     * A list of records is returned.
     */
    public function allPost()
    {
        $query = "SELECT * FROM posts ORDER BY created_at DESC";
        $stmt = $this->execute($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

