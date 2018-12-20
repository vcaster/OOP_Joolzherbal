<?php
class Users extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }


    public function login()
    {
      // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          // Process form
          // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

          // Init data
            $data =[
            'email' => trim($_POST['email']),
            //'password' => trim($_POST['password']),
            'password' => trim($_POST['password']),
            'email_err' => '',
            'password_err' => '',
            ];

          // Validate Email
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            }

          // Validate Password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter password';
            }

          // Check Emaill
            if ($this->userModel->findUserByEmail($data['email'])) {
            } else {
                $data['email_err'] = 'Email not found';
            }

          // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['password_err'])) {
              // Validated
              //check and set Login
                    
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);

                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['password_err'] = "Incorrect Username or Password";
                    $this->view('users/login', $data);
                }
            } else {
              // Load view with errors
                $this->view('users/login', $data);
            }
        } else {
          // Init data
            $data =[
            'email' => '',
            'password' => '',
            'email_err' => '',
            'password_err' => '',
            ];

          // Load view
            $this->view('users/login', $data);
        }
    }

    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_name'] = $user->name;

        redirect("admins/index");
    }

    public function Logout()
    {
        
        redirect('users/login');
    }
}
