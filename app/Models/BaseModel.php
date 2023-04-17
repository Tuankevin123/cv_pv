<?php

namespace App\Models;
use PDO;
use PDOException;

class BaseModel{
    protected $conn;
    protected $sqlBuilDer;
    protected $tableName;


    public function __construct()
    {
        try{
            $this->conn = new PDO("mysql:host=localhost; dbname=thiet_ke; charset=utf8", "root", "");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            throw $e;
        }
    }

    // funtion all(): lấy ra toàn bộ dữ liệu của 1 bảng

    public static function all(){
        $model = new static;
        $model->sqlBuilDer = "SELECT * FROM $model->tableName ORDER BY id DESC";
        $stmt = $model->conn->prepare($model->sqlBuilDer);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }

    public static function allCart(){
        $model = new static;
        $model->sqlBuilDer = "SELECT * FROM $model->tableName ORDER BY cart_id DESC";
        $stmt = $model->conn->prepare($model->sqlBuilDer);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }

    

    public static function four_sp(){
        $model = new static;
        $model->sqlBuilDer = "SELECT * FROM $model->tableName WHERE iddm<>8 AND iddm<>6 ORDER BY id DESC LIMIT 4";
        $stmt = $model->conn->prepare($model->sqlBuilDer);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }

    public static function sale(){
        $model = new static;
        $model->sqlBuilDer = "SELECT * FROM $model->tableName WHERE iddm<>8 AND iddm<>6 ORDER BY id ASC LIMIT 8";
        $stmt = $model->conn->prepare($model->sqlBuilDer);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }

    public static function pk_sp(){
        $model = new static;
        $model->sqlBuilDer = "SELECT * FROM $model->tableName WHERE iddm=8 ORDER BY id DESC LIMIT 8";
        $stmt = $model->conn->prepare($model->sqlBuilDer);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }

    public static function pksp_all(){
        $model = new static;
        $model->sqlBuilDer = "SELECT * FROM $model->tableName WHERE iddm=8 ORDER BY id DESC";
        $stmt = $model->conn->prepare($model->sqlBuilDer);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }

    public static function findOneIddm($id){
        $model = new static;
        $model->sqlBuilDer = "SELECT * FROM $model->tableName WHERE iddm = $id";
        $stmt = $model->conn->prepare($model->sqlBuilDer);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }

    public function insert($data=[]){
        $this ->sqlBuilDer = "INSERT INTO $this->tableName(";
        $colName ='';
        $params ='';

        foreach($data as $key=>$value){
           $colName .= "`$key`, "; 
           $params .= ":$key, ";

        }

        $colName = rtrim($colName, ', ');
        $params = rtrim($params, ', ');

        $this->sqlBuilDer.= $colName .")VALUES(". $params .")";

        $stmt = $this->conn->prepare($this->sqlBuilDer);
        $stmt->execute($data);
    }

    public static function findOne($id){
        $model = new static;
        $model->sqlBuilDer = "SELECT * FROM $model->tableName WHERE id='$id'";
        $stmt = $model->conn->prepare($model->sqlBuilDer);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        if($result){
            return $result[0];
        }
        return false;
    }

    

    

    public function update( $id, $data=[]){
        $this->sqlBuilDer = "UPDATE $this->tableName SET";

        foreach($data as $colName=>$value){
            $this->sqlBuilDer .= "`$colName`=:$colName, ";

        }

        $this->sqlBuilDer = rtrim($this->sqlBuilDer, ", ");
        $this->sqlBuilDer .= " WHERE id=:id";

        $data['id'] = $id;
        
        $stmt = $this->conn->prepare($this->sqlBuilDer);
        $stmt->execute($data);

    }

    public function delete($id){
        $this->sqlBuilDer = "DELETE FROM $this->tableName WHERE cart_id=$id";
        
        $stmt = $this->conn->prepare($this->sqlBuilDer);
        $stmt->execute();
    }

    public function where($colName, $condition, $value){
        $this->sqlBuilDer = "SELECT * FROM $this->tableName WHERE `$colName` $condition '$value'";
        return $this;
    }


    public function andWhere($colName, $condition, $value){
        $this->sqlBuilDer .= "AND `$colName` $condition '$value'";
        return $this;
    }

    public function orWhere($colName, $condition, $value){
        $this->sqlBuilDer .= "OR `$colName` $condition '$value'";
        return $this;
    }

    

    public function get(){
        $stmt = $this->conn->prepare($this->sqlBuilDer);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }

    public static function first($email,$password){
        $model = new static;
        $model->sqlBuilDer = "SELECT * FROM $model->tableName WHERE email='$email' AND password='$password'";
        $stmt = $model->conn->prepare($model->sqlBuilDer);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        if($result){return $result[0];}
        else{
            $result = false;
        }
        
    }

    public static function binhLuan($id){
        $model = new static;
        $model->sqlBuilDer = "SELECT binh_luan.noidung, binh_luan.date, binh_luan.id, khach_hang.name_kh, san_pham.id FROM $model->tableName JOIN khach_hang ON binh_luan.id_users = khach_hang.id JOIN san_pham ON binh_luan.id_product = san_pham.id WHERE san_pham.id = '$id' ORDER BY binh_luan.id DESC";
        $stmt = $model->conn->prepare($model->sqlBuilDer);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;

    }

    public static function cart($id){
        $model = new static;
        $model->sqlBuilDer = "SELECT cart.cart_id, cart.cart_idProduct, cart.cart_name, cart.cart_img, cart.cart_priceB, cart.cart_moTa, khach_hang.name_kh, COUNT(*) AS 'soluong' FROM $model->tableName JOIN khach_hang ON cart.cart_idUser = khach_hang.id WHERE khach_hang.id = '$id' GROUP BY cart.cart_name HAVING COUNT(cart.cart_name)  ORDER BY cart.cart_id DESC";
        $stmt = $model->conn->prepare($model->sqlBuilDer);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;

    }
}