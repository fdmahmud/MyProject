<!DOCTYPE html>
<html>
<head>
	<title>MyProject</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php 
        // require_once 'process.php';

        $localhost = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'database1';

        $var1 = mysqli_connect($localhost,$user,$password,$database);

if (isset($_POST["submit"])) {
            $varww = $_POST['fname'];
            $varw2 = $_POST['lname'];
            $varw3 = $_POST['email'];
            $varw4 = $_POST['password'];
            $sql = "insert into datas (id,Fname,Lname,Email,Pass) values ('','$varww','$varw2','$varw3'.'$varw4')";
            
        if ($var1->query($sql) === TRUE) {
            // header('location:alert.php');
            } else {
            // echo "Error creating database: " . $var1->error;
        }
    $var1->close();
        }


    // if (isset($_POST['submit'])){
    //     $fname = $_POST['fname'];
    //     $lname = $_POST['lname'];
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];

    //     $mysqli->query("INSERT INTO table (Fname, Lname, Email, Pass) VALUES('$fname','$lname','$email','$password')") or die($mysqli->error);
    // }

    ?>

    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h1>Fillup the form</h1>
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">First Name:</label>
                        <div class="col-sm-10">
                        <input type="text" name="fname" class="form-control" placeholder="First Name">
                        </div>
                    </div>

                    <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Last Name:</label>
                        <div class="col-sm-10">
                        <input type="text" name="lname" class="form-control" placeholder="Last Name">
                        </div>
                    </div>

                <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" placeholder="example@you.com">
                    </div>
                </div>

                <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password:</label>
                    <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                </div>
          
                <input type="submit" name="submit" class="btn btn-primary"/>
                </form>
            </div>
        </div>
    </div>



</form>
</body>
</html>
