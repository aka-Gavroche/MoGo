<?php
    // Login User
    function login($email, $password, $connect){
      $queryString = "SELECT * FROM users WHERE Email = '$email'";
      $query = mysqli_query($connect, $queryString);
      $user = mysqli_fetch_assoc ($query);

      if($password == $user['Pass']){
        return $user;
      } else {
        return false;
      }
    }

    // Find user by email
    function findUserByEmail($email, $connect) {
      $queryString = "SELECT * FROM users WHERE Email = '$email'";
      $query = mysqli_query($connect, $queryString);
      $user = mysqli_fetch_assoc ($query);

      // Check row
      if(!is_null($user) && count($user) > 0){
        return true;
      } else {
        return false;
      }
    }