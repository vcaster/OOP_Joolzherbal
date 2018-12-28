<?php
class Blogposts extends Controller
{

    public function __construct()
    {

        $this->blogpostModel = $this->model('Blogpost');
    }

    public function index()
    {
        if (isset($_POST["Submit"])) {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data =[
            'search' => "%".trim($_POST['search'])."%"
            ];

            if ($this->blogpostModel->searchResults($data) == false) {
                $side = $this->blogpostModel->getPosts();
                $cats = $this->blogpostModel->getCat();
                $data = [
                'posts' => null,
                'side' => $side,
                'cats' => $cats
                ];
                   // flash('post_message', 'No result found');
                $this->view('blogposts/error', $data);
            } elseif (!empty($this->blogpostModel->searchResults($data))) {
                $posts = $this->blogpostModel->searchResults($data);
                $side = $this->blogpostModel->getPosts();
                $cats = $this->blogpostModel->getCat();

                $data = [
                'posts' => $posts,
                'side' => $side,
                'cats' => $cats
                ];

                //flash('post_message', 'Found!.');
                $this->view('blogposts/index', $data);
            }
        } else {
            $posts = $this->blogpostModel->getPosts();
            $side = $this->blogpostModel->getPosts();
            $cats = $this->blogpostModel->getCat();

            $data = [
            'posts' => $posts,
            'side' => $side,
            'cats' => $cats
            ];

            $this->view('blogposts/index', $data);
        }
    }

    public function category($id)
    {

        $posts = $this->blogpostModel->getPostByCat($id);
        $side = $this->blogpostModel->getPosts();
        $cats = $this->blogpostModel->getCat();
        $catT = $this->blogpostModel->getCatTitle($id);

        $data = [
        'posts' => $posts,
        'side' => $side,
        'cats' => $cats,
        'catT' => $catT
        ];

        $this->view('blogposts/category', $data);
    }

    public function about()
    {
        $data = [
        'title' => 'About Us'
        ];
        $this->view("blogposts/about", $data);
    }
    public function fullpost($id)
    {
        $side = $this->blogpostModel->getPosts();
        $posts = $this->blogpostModel->getPostById($id);
        $cats = $this->blogpostModel->getCat();
        $data = [
        'posts' => $posts,
        'side' => $side,
        'cats' => $cats
        ];
            
        $this->view("blogposts/fullpost", $data);
    }
    public function contact()
    {
        if (isset($_POST["MSG"])) {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data =[
            'name' => trim($_POST['name']),
            'email' => trim($_POST['email']),
            'phone' => trim($_POST['phone']),
            'city' => trim($_POST['city']),
            'msg' => trim($_POST['message'])
            ];

            if ($this->blogpostModel->addNewMsg($data)) {
                //flash('post_message', 'Message Sent.');
                $data = 'Message Sent.';

                $this->view("blogposts/contact", $data);
            }
        }
            $data = null;
            $this->view("blogposts/contact", $data);
    }

    public function error()
    {
        $data = [
        'title' => 'Contact'
        ];
        $this->view("blogposts/error", $data);
    }
}
