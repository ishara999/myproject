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
                    <form action="index.php">
                        <div class="card-body" id="card-body">
                            <div class="form-group">
                              <label for="">First Name</label>
                              <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                              <small id="helpId" class="text-muted">Enter Your First Name</small>
                            </div>

                        
                            <div class="form-group">
                              <label for="">Last Name</label>
                              <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                              <small id="helpId" class="text-muted">Enter Your Last Name</small>
                            </div>
                            
                        
                            <div class="form-group">
                              <label for="">E Mail</label>
                              <input type="email" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                              <small id="helpId" class="text-muted">Enter Your E Mail</small>
                            </div>
                            
                        
                            <div class="form-group">
                              <label for="">Password</label>
                              <input type="password" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                              <small id="helpId" class="text-muted">Create Your Own Password</small>
                            </div>

                        </div>

                            <div class="card-footer" id="card-footer">
                                <button type="submit" class="btn btn-primary">Sign Up</button>
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