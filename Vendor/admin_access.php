<?php
    require_once '..\Config\connect.php';
    require_once '..\Models\User.php';
    session_start();   

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['action']) && $_POST['action'] === 'logout') {
            logout();
        } else if (isset($_POST['action']) && $_POST['action'] === 'login') {

        
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        // Init data
        $data =[
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),
          'email_err' => '',
          'password_err' => '',      
        ];

        // Validate Email
        if(empty($data['email'])){
          $data['email_err'] = 'Введіть електронну пошту';
        }

        // Validate Password
        if(empty($data['password'])){
          $data['password_err'] = 'Введіть пароль';
        }

        // Check for user/email
        if(!findUserByEmail($data['email'], $connect)) {
          // User not found
          $data['email_err'] = 'Користувача не знайдено';
        } 

        // Make sure errors are empty
        if(empty($data['email_err']) && empty($data['password_err'])){
          // Validated
          // Check and set logged in user
          $loggedInUser = login($data['email'], $data['password'], $connect);

          if($loggedInUser){
            // Create Session
            createUserSession($loggedInUser);
          } else {
            $data['password_err'] = 'Невірний пароль';

            $_SESSION['message'] = $data;
            header('Location:../admin.php');
          }
        } else {
          // Load view with errors
          $_SESSION['message'] = $data;
          header('Location:../admin.php');
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
        $_SESSION['message'] = $data;
        header('Location:../admin.php');
      }
    }

      function createUserSession($user){
        $_SESSION['user_id'] = $user['ID'];
        $_SESSION['user_email'] = $user['Email'];
        $_SESSION['user_name'] = $user['Username'];
        $_SESSION['user_admin'] = $user['IsAdmin'];
        unset($_SESSION['message']);
        header('Location:../index.php');
      }
  
      function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_admin']);
        unset($_SESSION['message']);
        session_destroy();
        header('Location:../index.php');
      }
  

