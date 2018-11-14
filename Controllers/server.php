<?php
    session_start();

    // initializing variables
    $username = "";
    $email    = "";
    $errors = array();

    
    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'db_koodev');



    // REGISTER USER
    if (isset($_POST['reg_user'])) {
        // receive all input values from the form
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
    
        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        if (empty($username)) { array_push($errors, "Ingrese el usuario"); }
        if (empty($email)) { array_push($errors, "Ingrese el email"); }
        if (empty($password_1)) { array_push($errors, "Ingrese la contraseña"); }
        if ($password_1 != $password_2) { array_push($errors, "La contraseña no coincide"); }
        if (empty($name)) { array_push($errors, "Ingrese su nombre"); }
        if (empty($last_name)) { array_push($errors, "Ingrese su apellido"); }
        if (empty($phone)) { array_push($errors, "Ingrese su teléfono"); }
        
    
        // first check the database to make sure 
        // a user does not already exist with the same username and/or email
        $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        
        if ($user) { // if user exists
            if ($user['username'] === $username) {
                array_push($errors, "Este usuario ya esta en uso");
            }
    
            if ($user['email'] === $email) {
                array_push($errors, "Este email ya fué registrado");
            }
        }
    
        // Finally, register user if there are no errors in the form
        if (count($errors) == 0) {
            $password = md5($password_1);//encrypt the password before saving in the database
    
            $query = "INSERT INTO users (username, email, password, first_name, last_name, phone) 
                    VALUES('$username', '$email', '$password', '$name', '$last_name', '$phone')";
            mysqli_query($db, $query);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: ../index.php');
        }
    }

    // LOGIN USER
    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
    
        if (empty($username)) {
            array_push($errors, "Ingrese el usuario");
        }
        if (empty($password)) {
            array_push($errors, "Ingrese la contraseña");
        }
    
        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $results = mysqli_query($db, $query);

            if (mysqli_num_rows($results) == 1) {
                // $_SESSION['username'] = $username;
                // $_SESSION['success'] = "¡Has iniciado sesión!";
                // header('location: admin.php');
                $logged_in_user = mysqli_fetch_assoc($results);

                if ($logged_in_user['fk_user_type'] == 1) {

                    $_SESSION['username'] = $username;
                    $_SESSION['success']  = "You are now logged in";
                    header('location: Views/admin.php');		  
                }else{
                    $_SESSION['username'] = $username;
                    $_SESSION['success']  = "You are now logged in";

                    header('location: Views/client.php');
                }
            }else {
                array_push($errors, "Usuario o contraseña incorrecta");
            }
        }
    }
?>