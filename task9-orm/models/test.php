<?php 
    include "baseModel.php";
    class test extends BaseModel{
        function insert($name,$family){
            $this->connectDb();
            $test = R::dispense('test1');
            $test['name'] = $name;
            $test['family'] = $family;
            R::store($test);
            $this->dcConnectDbDB();

        }
        function fetchAll(){
            $this->connectDb();
            $info = R::findAll('test1');
            $this->dcConnectDbDB();
            return $info;
        }
        function fetchById($id){
            $this->connectDb();
            $info = R::find('test1',"id = $id");
            $this->dcConnectDbDB();
            return $info;
        }
        function Load($id){
            $this->connectDb();
            $product = R::load('test1', $id);
            $this->dcConnectDbDB();
            return $product;
        }
        function loadOrCreat($id){
            $this->connectDb();
            $book = R::findOrCreate( 'test', [
                'id' => $id,
                'name' => 'mohammad', 
                'family' => 'kermani'] );
            $this->connectDb();
            return $book;    
        }
    }
?>