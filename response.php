<?php
//namespace App\Core\Http;

class Response{

    public function json($data = [],$code = 200){ 
        header('Access-Control-Allow-Origin: *');   
        header("Content-type: application/json; charset=utf-8 , Access-Control-Request-Method");
        // header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header('Access-Control-Allow-Headers: Content-Type, Authorization');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Allow: GET, POST, OPTIONS, PUT, DELETE"); 
        // header("Access-Control-Max-Age: 3600");
        http_response_code($code);
        // return json_encode($data,true);
        return json_encode($data,JSON_PRETTY_PRINT); 
    }
    
    public function send($str){
        return $srt;
    }

    public function jsonData($data = [],$code = 200){
        // header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
        header("Content-type: application/json; charset=utf-8 , Access-Control-Request-Method");
        http_response_code($code);
        return json_encode(["data" => $data],JSON_PRETTY_PRINT); 
    }

    public function is($str){
        // $_SERVER['REDIRECT_URL']
        // $_SERVER['REQUEST_URI']
        // $_SERVER['PATH_INFO']
        
        $request_uri = trim(rawurldecode($_SERVER['PATH_INFO']),'/');
        return ($request_uri === trim($str,'/'))? true: false;
    }

    public function isActive($str){
        $request_uri = explode('/',$_SERVER['REQUEST_URI']);
        return ($request_uri[1] === $str)? true: false;
    }
}
