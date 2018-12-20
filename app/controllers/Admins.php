<?php
class Admins extends Controller
{

    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        $this->adminModel = $this->model('Admin');
    }
    public function update($id)
    {
      // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          // Process form
          // Process form

          // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

          // Init data
             $employees = $this->employeeModel->getEmployees();

            $data =[
            'id' => $id,
            'employees' => $employees,
            'fname' => trim($_POST['fname']),
            'lname' => trim($_POST['lname']),
            'mname' => trim($_POST['mname']),
            'email' => trim($_POST['email']),
            'phonen' => trim($_POST['phonen']),
            'nationality' => trim($_POST['nationality']),
            'address' => trim($_POST['address']),
            //'sex' => trim($_POST['sex']),
            'birthdate' => trim($_POST['birthdate']),
            'age' => trim($_POST['age'])
            //'status' => trim($_POST['status']),
           
            ];

          
              //Update User
            if ($this->employeeModel->update($data)) {
                flash('post_message', 'User Updated.');
                redirect("admins/employees");
            } else {
                die('Something went wrong');
            }
        } else {
          // check id

            $emp = $this->employeeModel->getEmpdetails($id);
            $employees = $this->employeeModel->getPays($id);

          // Init data
            $data =[
            'id' => $id,
            'empdetails' => $emp,
            'employees' => $employees
            
            ];

          // Load view
            $this->view("admins/update", $data);
        }
    }
        
    public function index()
    {

        $this->view('admins/index');
    }
    public function newpost()
    {

        if (isset($_POST["Submit"])) {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $fnm = $_FILES['f']['name'];
            $dst ='images/postimages/'.$fnm;
            if (move_uploaded_file($_FILES['f']['tmp_name'], $dst)) {
                $data =[
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'datetime' => trim($_POST['datetime']),
                'filename' => $fnm,
                'cat' => trim($_POST['cat'])
                ];
            
              //Update User
                if ($this->adminModel->addNewPost($data)) {
                    flash('post_message', 'Post Added.');
                    redirect("admins/post");
                }
            }
        }

        if (isset($_POST["Draft"])) {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $fnm = $_FILES['f']['name'];
            $dst ='images/postimages/'.$fnm;
            if (move_uploaded_file($_FILES['f']['tmp_name'], $dst)) {
                $data =[
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'datetime' => 'NULL',
                'filename' => $fnm,
                'cat' => trim($_POST['cat'])
                ];
            
              //Update User
                if ($this->adminModel->addNewPost($data)) {
                    flash('post_message', 'Post Added.');
                    redirect("admins/post");
                }
            }
        }

        $cats = $this->adminModel->getCat();

        $data = [
        'cats' => $cats
        ];

        $this->view('admins/newpost', $data);
    }

    public function edit($id)
    {

        if (isset($_POST["edit"])) {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $fnm = $_FILES['f']['name'];
            $dst ='images/postimages/'.$fnm;
            if (move_uploaded_file($_FILES['f']['tmp_name'], $dst)) {
                $data =[
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'datetime' => trim($_POST['datetime']),
                'filename' => $fnm,
                'cat' => trim($_POST['cat']),
                'id' => $id
                ];
            
              //Update User
                if ($this->adminModel->UpdatePost($data)) {
                    flash('post_message', 'Post Updated.');
                    redirect("admins/post");
                } else {
                    echo 'something went wrong';
                }
            }
        } elseif (isset($_POST["Draft"])) {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $fnm = $_FILES['f']['name'];
            $dst ='images/postimages/'.$fnm;
            if (move_uploaded_file($_FILES['f']['tmp_name'], $dst)) {
                $data =[
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'datetime' => 'NULL',
                'filename' => $fnm,
                'cat' => trim($_POST['cat']),
                'id' => $id
                ];
            
              //Update User
                if ($this->adminModel->UpdatePost($data)) {
                    flash('post_message', 'Post Updated.');
                    redirect("admins/post");
                } else {
                    echo 'something went wrong';
                }
            }
        } else {
            $cats = $this->adminModel->getCat();
            $posts = $this->adminModel->getPostById($id);

            $data = [
            'cats' => $cats,
            'posts' => $posts
            ];

            $this->view('admins/edit', $data);
        }
    }

    public function post()
    {
        
        $posts = $this->adminModel->getPosts();

        $data = [
        'posts' => $posts
        ];

        $this->view('admins/post', $data);
    }

    public function categories()
    {
        if (isset($_POST["Submit"])) {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data =[
                'catname' => trim($_POST['catname'])
                ];

            if ($this->adminModel->addNewCat($data)) {
                    flash('post_message', 'Category Added.');
                    redirect("admins/categories");
            }
        }

        $cats = $this->adminModel->getCat();

        $data = [
        'cats' => $cats
        ];


        $this->view('admins/categories', $data);
    }

    public function dashboard()
    {
        $reports = $this->employeeModel->getReportsD();
        $leaves = $this->employeeModel->getOnleaveD();
        $announcements = $this->employeeModel->getAnnonuceeD();

        $data = [
        'reports' => $reports,
        'leaves' => $leaves,
        'announcements' => $announcements
        ];

        $this->view('admins/dashboard', $data);
    }

    public function deletecat($id)
    {
      // Get posts
        
        if ($this->adminModel->deletecat($id)) {
            flash('post_message', 'category deleted');
            redirect('admins/categories');
        }
    }

    public function deletepost($id)
    {
      // Get posts
        
        if ($this->adminModel->deletepost($id)) {
            flash('post_message', 'post deleted');
            redirect('admins/post');
        }
    }
}
