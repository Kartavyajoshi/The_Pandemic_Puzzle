<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pandemic Puzzle</title>
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="healthcare.png" type="image/x-icon">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div>
        <div class=" text-center margin marginbase">
            <img class="d-block mx-auto" src="healthcare.png" alt="" width="72" height="65">
            <h1 class="display-5 fw-bold text-body-emphasis">Health is the greatest gift</h1>
            <div class="col-lg-6 mx-auto">
              <p class="lead mb-4">Welcome to our health care website, where we are committed to providing you with the highest quality care and services. Our team of experienced and dedicated healthcare professionals is here to help you achieve your health goals and improve your overall well-being.</p>
              <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3"><a href="Login.php" style="text-decoration:none; color:white" > Log in</a></button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4"><a href="SignUp.php" style="text-decoration:none; color:black"> Sign up</a></button>
              </div>
            </div>
          </div>
    </div>

    <div>
    <center>
       <footer>
        <p>© Copyright | <?php echo date("Y"); ?>   E-healthcare   Inc. All right reserved</p>
       </footer>
    </center>
    </div>

    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
