<?php
//namespace App\Core\Http;
/*
 $request= new Request(['name'=>'Andres','surname'=>'Paucar']);
  echo $request->name;
  echo $request->surname;
*/

class Request {

    public $data = [];

    function __construct(array $args = []){
        $this->data = $args; 
    }
    // public function fill(array $attr){
    //     $this->data = $attr;
    // } 
    

    public function getUrl(){
        $path = $_SERVER['REQUEST_URI'];
        $position = strpos($path, '?');
        if ($position !== false) {
            $path = substr($path, 0, $position);
        }
        return $path;
    }

    public function header(string $str){
        return getallheaders()[$str];//$request->header('X-CSRF-TOKEN');
    }

    public function paramAll(){
        return  $this->data ;
    }

    public function param(string $str){ 
        return $this->data[$str];
    }

    public function body(string $str){
        return $_POST[$str];
    }
    public function bodyAll(){
        return $_POST;
    }
    public function query(string $str){
        return $_GET[$str] ?? null;//'No existe QUERY '.$str;
    }
    public function queryAll():array{
        return $_GET;
    }

    // protected function getAttribute($name){
    //     if(array_key_exists($name,$this->data)){
    //         return $this->data[$name];
    //     }
    // }
    // protected function setAttribute($name,$value){
    //     return $this->data[$name] = $value;
    //  }
    // public function __get($name){
    //     return $this->getAttribute($name);
    // }
    // public function __set($name,$vale){ // $name->value
    //     return $this->setAttribute($name,$value);
    // }
    

    public function input($str){
        $input = json_decode(file_get_contents('php://input'),false);// True, for Array|| True, for ArrayOBject
        return $input->$str;
    }

    public static function all(){
        return json_decode(file_get_contents('php://input'),false); // False, for convert array Object
    }

    public function file($str){
        return $_FILES;
    }
    public function hasFile($str){
    }
    
}
