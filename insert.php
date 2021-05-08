<?php 

    include_once('function.php');
    $insertdata = new DB_con();

    if(isset($_POST['insert'])){
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];

        $sql = $insertdata->insert($fname, $lname, $email, $phonenumber, $address);

        if($sql){
            echo "<script>alert('Reccord Inserted Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        }else{
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='insert.php'</script>";
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <a class='btn btn-primary mt-3' href='index.php'>Back</a>
        <hr>
        <h1 class='mt-5'>Insert Page</h1>
        <hr>
        <form action="" method="post">
            <div class="mb-3">
                <label for="firstname" class="form-label">Frist Name</label>
                <input type="text" class="form-control" name='firstname' required>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name='lastname'required>
            </div>
            <div class="mb-3">
                <label class="email"  class="form-label" >Email</label>
                <input type="email" class="form-control" name='email'required>
            </div>
            <div class="mb-3">
                <label class="phonenumber"  class="form-label" >Phone Number</label>
                <input type="text" class="form-control" name='phonenumber'required>
            </div>
            <div class="mb-3">
                <label class="address"  class="form-label" >Address</label>
                <textarea name='address' cols='30' row='10' class='form-control'required></textarea>
            </div>
            <button type="submit" name='insert' class="btn btn-success">Insert</button>
        </form>
    
    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
</body>
</html>