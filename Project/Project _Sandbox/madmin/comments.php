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
   <!-- NavVar -->
   <?php include 'nav.php';?>

  <!-- Section: Comments -->
  <section class="section section-comments grey lighten-4">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <div class="card">
            <div class="card-content">
              <span class="card-title">Comments</span>
              <table class="striped">
                <tbody>
                  <tr>
                    <td width="70">
                      <img src="img/person1.jpg" alt="" class="responsive-img circle" style="width: 40px;margin-left:10px;">
                    </td>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore, nostrum!</td>
                    <td>
                      <a href="#!" class="green-text">
                        <i class="material-icons">done</i>
                      </a>
                      <a href="#!" class="red-text">
                        <i class="material-icons">close</i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td width="70">
                      <img src="img/person2.jpg" alt="" class="responsive-img circle" style="width: 40px;margin-left:10px;">
                    </td>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore, nostrum!</td>
                    <td>
                      <a href="#!" class="green-text">
                        <i class="material-icons">done</i>
                      </a>
                      <a href="#!" class="red-text">
                        <i class="material-icons">close</i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td width="70">
                      <img src="img/person3.jpg" alt="" class="responsive-img circle" style="width: 40px;margin-left:10px;">
                    </td>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore, nostrum!</td>
                    <td>
                      <a href="#!" class="green-text">
                        <i class="material-icons">done</i>
                      </a>
                      <a href="#!" class="red-text">
                        <i class="material-icons">close</i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td width="70">
                      <img src="img/person4.jpg" alt="" class="responsive-img circle" style="width: 40px;margin-left:10px;">
                    </td>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore, nostrum!</td>
                    <td>
                      <a href="#!" class="green-text">
                        <i class="material-icons">done</i>
                      </a>
                      <a href="#!" class="red-text">
                        <i class="material-icons">close</i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-action">
              <ul class="pagination">
                <li class="disabled">
                  <a href="#!" class="blue-text">
                    <i class="material-icons">chevron_left</i>
                  </a>
                </li>
                <li class="active blue lighten-2">
                  <a href="#!" class="white-text">1</a>
                </li>
                <li class="waves-effect">
                  <a href="#!" class="blue-text">2</a>
                </li>
                <li class="waves-effect">
                  <a href="#!" class="blue-text">3</a>
                </li>
                <li class="waves-effect">
                  <a href="#!" class="blue-text">4</a>
                </li>
                <li class="waves-effect">
                  <a href="#!" class="blue-text">5</a>
                </li>
                <li class="waves-effect">
                  <a href="#!" class="blue-text">
                    <i class="material-icons">chevron_right</i>
                  </a>
                </li>
              </ul>
            </div>
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

        //Init Side nav
        $('.button-collapse').sideNav();

        // Init Modal
        $('.modal').modal();

      });
    }, 1000);
  </script>
</body>

</html>