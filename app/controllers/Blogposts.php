<?php
class Blogposts extends Controller
{

    public function __construct()
    {

        $this->postModel = $this->model('Post');
    }

    public function index()
    {

        $data = [
        'title' => 'Joolzherbal'
        ];

        $this->view('blogposts/index', $data);
    }

    public function about()
    {
        $data = [
        'title' => 'About Us'
        ];
        $this->view("blogposts/about", $data);
    }
    public function fullpost()
    {
        $data = [
        'title' => 'Full post'
        ];
        $this->view("blogposts/fullpost", $data);
    }
    public function contact()
    {
        $data = [
        'title' => 'Contact'
        ];
        $this->view("blogposts/contact", $data);
    }
}
