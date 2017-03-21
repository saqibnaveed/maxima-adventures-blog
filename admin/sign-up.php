<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maxima Adventures - Blog</title>

    <!-- Bootstrap and font css files -->
    <link rel="stylesheet" href="../assests/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assests/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald:600" rel="stylesheet">
    <!-- custom css file(s) -->
    <link rel="stylesheet" href="../assests/css/main.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Maxima Adventures</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav pull-right">
            <li class="active"><a href="#">Home</a></li>
            <li class="dropdown">
                  <a href="#categories" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Hiking</a></li>
                    <li><a href="#">Camping</a></li>
                    <li><a href="#">Scuba Diving</a></li>
                    <li><a href="#">Bike Touring</a></li>
                  </ul>
            </li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
                  <a href="#members" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Members <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#sign-up.php">Sign up</a></li>
                    <li><a href="#login-php">Login</a></li>
                  </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <form class="sign-up-form">
      <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" placeholder="e.g. john@jdoe.com" name="email">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" placeholder="Your Password" name="pwd">
      </div>
      <div class="checkbox">
        <label><input type="checkbox" name="checkbox"> Remember me</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>



    <footer>
      <div class="container">
        <div class="row">
          <p>social media icons</p>
          <p>Policy, terms, etc.</p>
          <p>&copy 2017 Maxima Adventures</p>
        </div>
      </div>
    </footer>

    <!-- Bootstrap and jquery files -->
    <script src="../assests/js/jquery-3.1.1.min.js" charset="utf-8"></script>
    <script src="../assests/js/bootstrap.min.js" charset="utf-8"></script>
    <!-- Custom JS file(s) -->
    <script src="../assests/js/scripts.js" charset="utf-8"></script>
  </body>
</html>
