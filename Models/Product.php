<?php
include_once './Database/Database.php'; ?>

 <?php
    class Product extends Model
    {
        public $id = 0;
        public $ma_hang = "";
        public $ten_hang = "";
        public $category_id = 1;
        public $gia = "";
        public $so_luong = "";
        public $ngay_tao = "";
        public $mo_ta = "";
        public function find($id)
        {
            $sql = "SELECT * FROM product WHERE id = $id ";
            $stmt = $this->_db->query($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $item = $stmt->fetch();
            return $item;
        }
        public function getAll()
        {
            $sql = "SELECT product.*,category.ten FROM product JOIN category ON product.category_id = category.id; ";
            $stmt = $this->_db->query($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $items = $stmt->fetchAll();
            return $items;
        }

        public function view($ma_hang, $ten_hang,$category_id,$gia,$so_luong,$ngay_tao,$mo_ta)
        {
            $sql = "SELECT * FROM product JOIN category ON product.category_id = category.id WHERE ten_hang (ma_hang,ten_hang,category_id,gia,so_luong,ngay_tao,mo_ta) VALUES ('$ma_hang','$ten_hang','$category_id','$gia','$so_luong','$ngay_tao','$mo_ta')";
            $this->_db->query($sql);
        }
        public function create($ma_hang, $ten_hang,$category_id,$gia,$so_luong,$ngay_tao,$mo_ta)
        {
            $sql = "INSERT INTO product (id,ma_hang,ten_hang,category_id,gia,so_luong,ngay_tao,mo_ta) VALUES (NULL,'$ma_hang','$ten_hang','$category_id','$gia','$so_luong','$ngay_tao','$mo_ta') ";
            $this->_db->query($sql);
        }
        public function getAllSearch($ten_hang)
        {
            $sql = "SELECT * FROM product JOIN category ON product.category_id = category.id WHERE ten_hang LIKE '%$ten_hang%' ";

            $stmt = $this->_db->query($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $items = $stmt->fetchAll();
            return $items;
        }
        public function update($id, $ma_hang, $ten_hang,$category_id,$gia,$so_luong,$ngay_tao,$mo_ta)
        {
            $sql = " UPDATE product SET ma_hang='$ma_hang', ten_hang='$ten_hang',category_id='$category_id',gia='$gia',so_luong='$so_luong',ngay_tao='$ngay_tao',mo_ta='$mo_ta' WHERE id='$id'  ";
            $this->_db->query($sql);
        }
        public function delete($id)
        {
            $sql = "DELETE FROM product WHERE id='$id'";
            $this->_db->query($sql);
        }
    }
