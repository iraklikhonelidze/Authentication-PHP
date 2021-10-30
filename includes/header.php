
<!doctype html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/site.css" />
    
    <title><?php echo $title ?></title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container">
      <a class="navbar-brand" href="index.php">I . KH</a>
      
      <div class="collapse navbar-collapse">
        <div class="navbar-nav mr-auto">
          <a class="nav-item nav-link" href="index.php">Home </a>
        </div>
        <div class="navbar-nav ml-auto">
            
            <a class="nav-item nav-link" href="signup.php">Sign Up</a>
          <?php 
              if(!isset($_SESSION['userid'])){
          ?>
            <a class="nav-item nav-link" href="login.php">Login</a>
          <?php } else { ?>
            <a class="nav-item nav-link" href="#"><span>Hello <?php echo $_SESSION['username'] ?>! </span> <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
          <?php } ?>
        </div>
      </div>
    </nav>
    <div class="container">

<style type="text/css">
   body { background: darkgray !important; }
</style>

    
        
    
    <br/>