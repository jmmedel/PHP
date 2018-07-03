<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/main.css" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Custom Materialize Theme</title>
</head>

<body class="grey lighten-4">
  <nav class="blue darken-2">
    <div class="container">
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo">Madmin</a>
      </div>
    </div>
  </nav>

  <section class="section section-login">
    <div class="container">
      <div class="row">
        <div class="col s12 m8 offset-m2 l6 offset-l3">
          <div class="card-panel login blue darken-2 white-text center">
            <h2>Madmin Login</h2>
            <form action="index.php">
              <div class="input-field">
                <i class="material-icons prefix">email</i>
                <input type="email" id="email">
                <label class="white-text" for="email">Email</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">lock</i>
                <input type="password" id="password">
                <label class="white-text" for="password">Password</label>
              </div>
              <input type="submit" value="Login" class="btn btn-large btn-extended grey lighten-4 black-text">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer -->
 
  <?php include 'footer.php';?>



  <!-- Preloader -->
  <div class="loader preloader-wrapper big active">
    <div class="spinner-layer spinner-blue-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div>
      <div class="gap-patch">
        <div class="circle"></div>
      </div>
      <div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>

  <script>
    // Hide Sections
    $('.section').hide();

    setTimeout(function () {
      $(document).ready(function () {
        // Show sections
        $('.section').fadeIn();

        // Hide preloader
        $('.loader').fadeOut();

      });
    }, 1000);
  </script>
</body>

</html>