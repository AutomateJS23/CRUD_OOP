<?php
    include_once('function.php');

    $updatedata = new DB_con();

    if(isset($_POST['update'])){
        $userid = $_GET['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];

        $sql = $updatedata->update($fname, $lname, $email, $phonenumber, $address, $userid);

        if($sql){
            echo "<script>alert('Update Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        }else{
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='update.php'</script>";
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
        <h1 class='mt-5'>Update</h1>
        <?php
            $userid = $_GET['id'];
            $updateuser = new DB_con();
            $sql = $updateuser->fetchonerecord($userid);
            while($row = mysqli_fetch_array($sql)){
        ?>
        <form action="" method="post">
                <div class="mb-3">
                    <label for="firstname" class="form-label">Frist Name</label>
                    <input type="text" class="form-control" name='firstname' 
                     value='<?php echo $row['firstname']; ?>' required>
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name='lastname' 
                    value='<?php echo $row['lastname']; ?>' required>
                </div>
                <div class="mb-3">
                    <label class="email"  class="form-label" >Email</label>
                    <input type="email" class="form-control" name='email'
                    value='<?php echo $row['email']; ?>' required>
                </div>
                <div class="mb-3">
                    <label class="phonenumber"  class="form-label" >Phone Number</label>
                    <input type="text" class="form-control" name='phonenumber'
                    value='<?php echo $row['phonenumber']; ?>'required>
                </div>
                <div class="mb-3">
                    <label class="address"  class="form-label" >Address</label>
                    <textarea name='address' cols='30' row='10' class='form-control'required><?php echo $row['address']; ?></textarea>
                </div>
                <?php } ?>
                <button type="submit" name='update' class="btn btn-success">Update</button>
            </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>

</body>
</html>