<?php
class Blogpost
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getPosts()
    {
        $status = '0';
        $this->db->query(' SELECT * FROM categories INNER JOIN  posts ON posts.category_id=categories.cat_id WHERE posts.is_aval= :status ORDER BY posts.id DESC; ');
        $this->db->bind(':status', $status);
        $results = $this->db->resultSet();

        return $results;
    }

    public function getPostById($id)
    {

        $this->db->query('SELECT * FROM categories INNER JOIN  posts ON posts.category_id=categories.cat_id WHERE posts.id = :id ');
        $this->db->bind(':id', $id);
        $row = $this->db->single();

        return $row;
    }

    public function getCat()
    {
        $status = '0';
        $this->db->query(' SELECT * FROM categories WHERE is_aval= :status ORDER BY cat_id DESC; ');
        $this->db->bind(':status', $status);
        $results = $this->db->resultSet();

        return $results;
    }

    public function getPostByCat($id)
    {
        $status = '0';
        $this->db->query('SELECT * FROM categories INNER JOIN  posts ON posts.category_id=categories.cat_id WHERE categories.cat_id = :id AND posts.is_aval= :status ');
        $this->db->bind(':id', $id);
        $this->db->bind(':status', $status);
        $results = $this->db->resultSet();

        return $results;
    }

    public function getCatTitle($id)
    {
        $status = '0';
        $this->db->query('SELECT * FROM categories WHERE is_aval= :status AND cat_id= :id');
        $this->db->bind(':id', $id);
        $this->db->bind(':status', $status);
        $row = $this->db->single();

        return $row;
    }

    public function searchResults($data)
    {
        $status = '0';
        $this->db->query('SELECT * FROM posts WHERE title LIKE :data OR body LIKE :data AND is_aval= :status ');
        $this->db->bind(':data', $data['search']);
        $this->db->bind(':status', $status);
        $results = $this->db->resultSet();

        if (!empty($results)) {
            return $results;
        } else {
            return false;
        }
    }

    public function addNewMsg($data)
    {
        
      // $hireDate = $DateTime;
        $this->db->query('INSERT INTO messages(name_msg,email_msg,city_msg,phone_msg,message) VALUES(:name, :email, :city, :phone, :msg)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':msg', $data['msg']);
        
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
