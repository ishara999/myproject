<?php include_once('inc/conn.php')?>

<?php //error_reporting (E_ALL ^ E_NOTICE);

    if(isset($_POST['submit'])){
        $firstname = "";
        $lastname = "";
        $email = "";
        $password = "";
    }

    // $firstname = isset($firstname) ? $firstname : '';
    // $lastname = isset($lastname) ? $lastname: '';
    // $email = isset($email) ? $email : '';
    // $password = isset($password) ? $password : '';

    $firstname = input_varify($_POST['FirstName']);    
    $lastname = input_varify($_POST['LastName']);
    $email = input_varify($_POST['EMail']);
    $password = input_varify($_POST['Password']);

    $query = "INSERT INTO tbl_user(Fname,Lname,email,pwd,Reg_DT) VALUES ('{$firstname}','{$lastname}','{$email}','{$password}',NOW())";

    if (mysqli_query($conn, $query)){
        echo "User Registration success!!";
    }else{
        echo "User Registration failed" . mysqli_error($conn);
    }

    // $result = mysqli_query($conn , $query);

    // if($result){
    //     echo "User Registration success!!";
    // }

    // else{
    //     echo mysqli_connect_error($conn);

    // }


    // echo $firstname;
    // echo "<br>";
    // echo $lastname;
    // echo "<br>";
    // echo $email;
    // echo "<br>";
    // echo $password;
    // echo "<br>";

    // echo 'First Name '  . $firstname.'<br>';
    // echo 'Last Name '  . $lastname.'<br>';
    // echo 'First Name '  . $firstname.'<br>';
    // echo 'E Mail' . $email. '<br>';
    // echo 'Password' . $password. '<br>';



    function input_varify($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);

        return $data;


    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Plugin/bootstrap.min.css">
    <script src="Plugin/jquery.min.js"></script>
    <script src="Plugin/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/signup.css">
    <title>myproject</title>
</head>
<body style="background-color: #0d1219;">

    <?php include_once('inc/navbar.php')?>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-5">
                        <div class="card-header" id="card-header">
                            <h4>Sign Up Form</h4>
                        </div>
                    <form action="signup.php" method="POST" autocomplete="off">
                        <div class="card-body" id="card-body">
                            <div class="form-group">
                              <label for="">First Name</label>
                              <input type="text" name="FirstName" id="FirstName" class="form-control" placeholder="" aria-describedby="helpId">
                              <small id="helpId" class="text-muted">Enter Your First Name</small>
                            </div>

                        
                            <div class="form-group">
                              <label for="">Last Name</label>
                              <input type="text" name="LastName" id="LastName" class="form-control" placeholder="" aria-describedby="helpId">
                              <small id="helpId" class="text-muted">Enter Your Last Name</small>
                            </div>
                            
                        
                            <div class="form-group">
                              <label for="">E Mail</label>
                              <input type="email" name="EMail" id="EMail" class="form-control" placeholder="" aria-describedby="helpId">
                              <small id="helpId" class="text-muted">Enter Your E Mail</small>
                            </div>
                            
                        
                            <div class="form-group">
                              <label for="">Password</label>
                              <input type="password" name="Password" id="Password" class="form-control" placeholder="" aria-describedby="helpId">
                              <small id="helpId" class="text-muted">Create Your Own Password</small>
                            </div>

                        </div>

                            <div class="card-footer" id="card-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
                        </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    
    
</body>
</html>