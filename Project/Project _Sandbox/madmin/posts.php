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

  <!-- Section: Posts -->
  <section class="section section-posts grey lighten-4">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <div class="card">
            <div class="card-content">
              <span class="card-title">Posts</span>
              <table class="striped">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Date Created</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Post One</td>
                    <td>Web Development</td>
                    <td>Jan 1, 2018</td>
                    <td>
                      <a href="details.php" class="btn blue lighten-2">Details</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Post Two</td>
                    <td>Graphic Design</td>
                    <td>Jan 2, 2018</td>
                    <td>
                      <a href="details.php" class="btn blue lighten-2">Details</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Post Three</td>
                    <td>Web Development</td>
                    <td>Jan 3, 2018</td>
                    <td>
                      <a href="details.php" class="btn blue lighten-2">Details</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Post Four</td>
                    <td>Tech Gadgets</td>
                    <td>Jan 5, 2018</td>
                    <td>
                      <a href="details.php" class="btn blue lighten-2">Details</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Post Five</td>
                    <td>Graphic Design</td>
                    <td>Jan 6, 2018</td>
                    <td>
                      <a href="details.php" class="btn blue lighten-2">Details</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Post Six</td>
                    <td>Web Development</td>
                    <td>Jan 7, 2018</td>
                    <td>
                      <a href="details.php" class="btn blue lighten-2">Details</a>
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

  <!-- Fixed Action Button -->
  <div class="fixed-action-btn">
    <a href="#post-modal" class="modal-trigger btn-floating btn-large red">
      <i class="material-icons">add</i>
    </a>
  </div>

  <!-- Add Post Modal -->
  <div id="post-modal" class="modal">
    <div class="modal-content">
      <h4>Add Post</h4>
      <form>
        <div class="input-field">
          <input type="text" id="title">
          <label for="title">Title</label>
        </div>
        <div class="input-field">
          <select>
            <option value="" disabled selected>Select option</option>
            <option value="1">Web Development</option>
            <option value="2">Graphic Design</option>
            <option value="3">Tech Gadgets</option>
            <option value="4">Other</option>
          </select>
          <label>Category</label>
        </div>
        <div class="input-field">
          <textarea name="body" id="body" class="materialize-textarea"></textarea>
          <label for="body">Body</label>
        </div>
      </form>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close btn blue white-text">Submit</a>
      </div>
    </div>
  </div>

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
  <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>

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

        // Init Select
        $('select').material_select();

        CKEDITOR.replace('body');

      });
    }, 1000);
  </script>
</body>

</html>