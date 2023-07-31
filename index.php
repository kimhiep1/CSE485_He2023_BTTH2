<?php
$controller = isset($_GET['c'])?$_GET['c']:'home';
$action = isset($_GET['a'])?$_GET['a']:'index'; //nếu a tồn tại thì lấy giá trị của a còn ko có thì lấy giá trị index
echo $controller .'--' . $action;
 
$controller = ucfirst($controller);
$controller = $controller .'Controller';
$pathController = "app/controllers/".$controller.".php";
echo $pathController;

if(!file_exists($pathController)){
    die('not found');
}
include($pathController);

$mycontroller = new $controller(); //gọi ra được tệp ->> tạo ra đối tượng
$mycontroller->$action();
?>