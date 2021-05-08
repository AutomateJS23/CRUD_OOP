<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Index Page</title>
</head>
<body>
    
    <div class="container">
    <h1 class='mt-5'>Information Page</h1>
    <a href='insert.php' class='btn btn-success'>Insert</a>
    <hr>
    <table id="mytable" class="table table-bordered table-striped">
        <thead>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Posting Time</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>

        <tbody>
        <?php 
            include_once('function.php');
            $fetchdata = new DB_con();
            $sql = $fetchdata->fetchdata();
            while($row = mysqli_fetch_array($sql)){
        ?>

                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['firstname'] ?></td>
                    <td><?php echo $row['lastname'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['phonenumber'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['postingdate'] ?></td>
                    <td><a href='update.php?id=<?php echo $row['id']?>' class="btn btn-primary">Edit</a></td>
                    <td><a href='delete.php?del=<?php echo $row['id']?>' class="btn btn-danger">Delete</a></td>
                </tr>
        <?php 
            }
        ?>
        </tbody>
    </table>
    </div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
</body>
</html>