<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PINKVILLA</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    </head>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="pr-4" href="https://www.pinkvilla.com">
      <img src="https://www.pinkvilla.com/sites/all/themes/pinkvillalite/images/logo.png" alt="" title="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">LATEST <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">#CORONAVIRUS</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">ENTERTAINMENT</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">TV</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">FASHION</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">VIDEOS</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <body>

        <div class="loader" id="loader"></div>
        <div class="content pt-4" id="photos">
            
        </div>
        
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <script type="text/javascript">
        sendRequest('api.php');
    </script>
</html>
