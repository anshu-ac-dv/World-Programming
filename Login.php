<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <?php
  
      session_start();
    
      if (isset($_POST['login'])) {
        
        include 'dbcon.php';
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "SELECT * FROM registration WHERE Email ='$username' AND Password='$password'";
        
        $r = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($r) === 1) {
            $row = mysqli_fetch_assoc($r);
            
            if ($row['Email'] === $username && $row['Password'] === $password) {
                 $_SESSION['Email'] = $row['Email'];
                  
                  header("Location: Dashboard.php");
                  exit();
              }
              else{
                
                header("Location: Login.php?error=Incorect User name or password");
                
                exit();
              }
            }
            else{
              header("Location: Login.php?error=Incorect User name or password");
                  exit();
            }
        }
        
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <div class="container">
      <form class="p-5 shadow bg-info" action="Login.php" method="post">
        <center><h3>Login Now</h3></center>
        <div class="row g-3">
          <div class="col mb-3 mt-5">
            <label class="form-label">Enter Email</label>
            <input type="email" class="form-control" name="username">
          </div>
          <div class="col mb-3 mt-5">
            <label class="form-label">Enter Password</label>
            <input type="password" class="form-control" name="password">
          </div>
        </div>
        <button type="submit" name="login" class="btn btn-primary">Login Now</button><br><br>
        <p>If you do not have any account then <a href="Register.php"> register</a> yourself.</p>
      </form>
    </div>
  </body>
</html>