<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Cows And Bulls Game</title>
    <style>
        body {
            height: 635px;
            width : 1366px;
            background: linear-gradient(to bottom left, #33ccff 0%, #ff99cc 100%);
            }
        .alert{
            padding: 0px;
            height: 50px;
            text-align: center;
        }
    </style>
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
        $sql = "SELECT * from game ORDER BY score desc LIMIT 5";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0)
        {  ?>
              <table class='table table-dark'>
                  <thead>
                      <tr>
                          <th scope="col" colspan="3"><h3><center>Top 5 Scorers</center></h3></th>
                      </tr>
                    <tr>
                      <th scope='col'>#</th>
                      <th scope='col'>Name</th>
                      <th scope='col'>Score</th>
                    </tr>
                  </thead>
                  <tbody>

          <?php while($row = mysqli_fetch_assoc($result))
          { ?>
              <tr>
                <th scope='row'><?=$row["id"] ?></th>
                <td><?=$row["name"] ?></td>
                <td><?=$row["score"] ?></td>
              </tr>
          <?php } ?>
        </tbody>
      </table>
        <?php } 
        else{ ?>
            <div class='alert alert-danger' role='alert'>
                <h1>No Data Found</h1>
            </div>
        <?php } ?> 
    <br>
    <div align="center">
        <form id="game" method="post">
            <div class="col-md-4">
                <input type="text" class="form-control" name="length" id="length" 
                        placeholder="Enter Your Name"><br>
            </div>
            <div class="col-md-12">
                <button class="btn btn-primary" type="submit" name="submit">Start Game</button>
            </div>
        </form>
    </div>
  </body>
</html>