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
    &nbsp;&nbsp;<a class="btn btn-outline-dark" href="index.php" role="button">Back</a>
    <form action="insert_script.php" method="post">
      <div class="form-col">
        <div class="col-md-4 mb-3">
          <label for="fname">First name</label>
          <input type="text" class="form-control" name="fname" id="fname" placeholder="First name" required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="lname">Last name</label>
          <input type="text" class="form-control" name="lname" id="lname" placeholder="Last name" required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="uname">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend2">@</span>
            </div>
            <input type="text" class="form-control" name="uname" id="uname" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
          </div>
        </div>
      </div>
      <div class="form-col">
        <div class="col-md-3 mb-3">
          <label for="city">City</label>
          <input type="text" class="form-control" name="city" id="city" placeholder="City" required>
        </div>
        <div class="col-md-3 mb-3">
          <label for="state">State</label>
          <input type="text" class="form-control" name="state" id="state" placeholder="State" required>
        </div>
        <div class="col-md-3 mb-3">
          <label for="zip">Zip</label>
          <input type="text" class="form-control" name="zip" id="zip" placeholder="Zip" required>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
          <label class="form-check-label" for="invalidCheck2">
            Agree to terms and conditions
          </label>
        </div>
      </div>
      &nbsp;&nbsp;&nbsp;<button class="btn btn-primary" type="submit">Submit form</button>
    </form>
  </body>
</html>