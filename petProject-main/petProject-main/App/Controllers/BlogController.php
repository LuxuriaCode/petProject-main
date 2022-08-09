<?php
namespace App\Controllers;

use App\Models\Post;

class BlogController extends Controller {
    public function index() {
        $model = new Post;

        $this->render('Blog', [
            'posts' => $model->getAll()
        ]);
    }

    public function create() {
        $blogModel = new Post;
        $blogModel->create([
            'title'=>'Name',
            'image'=>'',
            'about'=>''
        ]);
        echo 'запис створеного';
    }
}