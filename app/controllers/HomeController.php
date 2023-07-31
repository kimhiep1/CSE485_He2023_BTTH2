<?php
class HomeController
{
    public function index(){
        include('app\views\index.php');
    }

    public function profile(){
        include('app\views\profile.php');
    }
    public function home(){
        echo "index";
    }
    public function add(){
        echo "index";
    }
    public function admin(){
        $postRepoObj = new PostRepository();
        $post = $postRepoObj ->getAllPost();
        
        include('app\views\feed.php');
    }
    
}