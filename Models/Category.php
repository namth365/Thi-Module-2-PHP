<?php
include_once './Database/Database.php'; ?>

 <?php
    class Category extends Model
    {
        public $id = 0;
        public $ten = "";
                public function find($id)
        {
            $sql = "SELECT * FROM category WHERE id = $id ";
            $stmt = $this->_db->query($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $item = $stmt->fetch();
            return $item;
        }
        public function getAll()
        {
            $sql = "SELECT * FROM category";
            $stmt = $this->_db->query($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $items = $stmt->fetchAll();
            return $items;
        }

        public function view($ten)
        {
            $sql = "SELECT * FROM category (ten) VALUES ('$ten')";
            $this->_db->query($sql);
        }
        public function create($ten)
        {
            $sql = "INSERT INTO category (id,ten) VALUES (NULL,'$ten') ";
            $this->_db->query($sql);
        }
        public function getAllSearch($ten)
        {
            $sql = "SELECT * FROM category WHERE ten LIKE '%$ten%' ";

            $stmt = $this->_db->query($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $items = $stmt->fetchAll();
            return $items;
        }
        public function update($id, $ten)
        {
            $sql = " UPDATE category SET ten='$ten' WHERE id='$id'  ";
            $this->_db->query($sql);
        }
        public function delete($id)
        {
            $sql = "DELETE FROM category WHERE id='$id'";
            $this->_db->query($sql);
        }
    }
