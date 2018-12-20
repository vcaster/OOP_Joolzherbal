<?php
class Admin
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function addNewPost($data)
    {
        
      // $hireDate = $DateTime;
        $this->db->query('INSERT INTO posts(title,body,image,published_at,category_id) VALUES(:title, :body, :image, :pub, :cat)');
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':body', $data['body']);
        $this->db->bind(':pub', $data['datetime']);
        $this->db->bind(':image', $data['filename']);
        $this->db->bind(':cat', $data['cat']);
        
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function UpdatePost($data)
    {
        
      // $hireDate = $DateTime;
        $this->db->query('UPDATE posts SET title= :title, body= :body, image= :image, published_at= :pub, category_id= :cat WHERE id= :id');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':body', $data['body']);
        $this->db->bind(':pub', $data['datetime']);
        $this->db->bind(':image', $data['filename']);
        $this->db->bind(':cat', $data['cat']);
        
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getPosts()
    {
        $status = '0';
        $this->db->query(' SELECT * FROM posts WHERE is_aval= :status ORDER BY id DESC; ');
        $this->db->bind(':status', $status);
        $results = $this->db->resultSet();

        return $results;
    }

    public function getPostById($id)
    {

        $this->db->query('SELECT * FROM posts WHERE id = :id ');
        $this->db->bind(':id', $id);
        $row = $this->db->single();

        return $row;
    }

    public function getCat()
    {
        $status = '0';
        $this->db->query(' SELECT * FROM categories WHERE is_aval= :status ORDER BY id DESC; ');
        $this->db->bind(':status', $status);
        $results = $this->db->resultSet();

        return $results;
    }
    

    public function addNewCat($data)
    {
        $this->db->query('INSERT INTO categories(title) VALUES(:title)');
        $this->db->bind(':title', $data['catname']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    
    public function deletecat($id)
    {
        $status = '1';
        $this->db->query('UPDATE categories SET is_aval = :status WHERE ID=:id');
        $this->db->bind(':id', $id);
        $this->db->bind(':status', $status);
        
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deletepost($id)
    {
        $status = '1';
        $this->db->query('UPDATE posts SET is_aval = :status WHERE ID=:id');
        $this->db->bind(':id', $id);
        $this->db->bind(':status', $status);
        
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
