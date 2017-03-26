<?php

use phprs\ezsql\Sql;
class Message{
    public  function __construct($msg){
        $this->msg = $msg;
    }
    public $msg;
}
/**
 * 
 * @author caoym
 * @path("/hw")
 */
class HelloWorld
{
    /** 
     * @param({"callback", "$._GET.callback"})
     * @param({"username", "$._GET.username"})
     * @param({"password", "$._GET.password"})
     * @route({"GET","/"})
     */
    public function doSomething1($callback, $username, $password){
	header("Content-type: application/json");  
        $data = array(
	    'name' => $username,
	    'password' => $password,
	    'msg' =>'err',
	    'info' => '跨域解决了',
	);
	$tmp = json_encode($data, JSON_UNESCAPED_UNICODE);
	echo $callback.'('.$tmp.')';
    }
    
    /**
     * @property({"default":"@db"}) 注入pdo实例
     */
    //private $db;
}
