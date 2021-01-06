<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>CRUM Exercise</title>
  
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <?php
        include 'connect.php';
        if ( isset($_SESSION['success']))
        {?>
          <div class='alert alert-success' role='alert'>
              <?php echo $_SESSION['success']; ?>
          </div>
        <?php }
        $sql = "SELECT * from test_form";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0)
        {  ?>
              <table class='table table-dark'>
                  <thead>
                    <tr>
                      <th scope='col'>#</th>
                      <th scope='col'>First</th>
                      <th scope='col'>Last</th>
                      <th scope='col'>Username</th>
                      <th scope='col'>City</th>
                      <th scope='col'>State</th>
                      <th scope='col'>Zip</th>
                      <th scope='col'>Action</th>
                    </tr>
                  </thead>
                  <tbody>

          <?php while($row = mysqli_fetch_assoc($result))
          { ?>
              <tr>
                <th scope='row'><?=$row["id"] ?></th>
                <td><?=$row["f_name"] ?></td>
                <td><?=$row["l_name"] ?></td>
                <td><?=$row["username"] ?></td>
                <td><?=$row["city"] ?></td>
                <td><?=$row["state"] ?></td>
                <td><?=$row["zip"] ?></td>
                <td>
                  <a class="btn btn-warning" href="update.php?id=<?php echo $row['id']; ?>" role="button">Edit</a>
                  <a class="btn btn-danger" href="delete_script.php?id=<?php echo $row['id']; ?>" role="button">Delete</a>
                </td>
              </tr>
          <?php } ?>
        </tbody>
      </table>
        <?php } ?>  
    
    <br>
    &nbsp;&nbsp;<a class="btn btn-outline-success" href="insert.php" role="button">Add More..</a>
  </body>
</html>