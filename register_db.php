<?php 
    session_start();
    include('server.php'); 

    $errors = array();

    if (isset($_post['reg_user'])) {
        $user = mysqli_real_escape_string($conn, $_post['user']);
        $password = mysqli_real_escape_string($conn, $_post['pass']);

        if (empty($user)) {
            array_push($errors, "ลืม user")
        }
        if (empty($password)) {
            array_push($errors, "ลืม user")
        }

        $user_check_queruy = "SELECT * FORM user WHERE username = '$username'";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if($result) {
            if($result['username'] === $username) {
                array_push($errors, "มีอยู่")
            }
        }
        if (count($errors) == 0) {
            $password = md($password_1);

            $sql = "INSERT INTO user(username, password) VALUES ('$username', 'password')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "log in";
            header('location: index.php');
        }
    }
?>