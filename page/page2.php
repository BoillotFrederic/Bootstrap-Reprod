<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo BootStrap</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <nav class="navbar navbar-default navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="#">Brand</a>
</div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="../index.php">Accueil</a></li>
              <li class="active"><a href="page2.php">Page 2 <span class="sr-only">(current)</span></a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu déroulant <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form navbar-right">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="row text-center">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <h1 class="h1">Titre de page 2</h1>
          <p class="lead text-justify text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <button class="btn btn-lg btn-primary">Mon bouton</button>
        </div>
      </div>
      <div class="page-header text-center">
        <h2>Page header</h2>
      </div>
      <div class="row">
        <div class="col-md-4 col-xs-12">
          <a href="#" class="thumbnail">
            <img src="https://pbs.twimg.com/profile_images/378800000017423279/1a6d6f295da9f97bb576ff486ed81389_400x400.png" class="img-responsive" alt="IMG" />
          </a>
        </div>
        <div class="col-md-4 col-xs-12">
          <a href="#" class="thumbnail">
            <img src="https://pbs.twimg.com/profile_images/378800000017423279/1a6d6f295da9f97bb576ff486ed81389_400x400.png" class="img-responsive" alt="IMG" />
          </a>
        </div>
        <div class="col-md-4 col-xs-12">
          <a href="#" class="thumbnail">
            <img src="https://pbs.twimg.com/profile_images/378800000017423279/1a6d6f295da9f97bb576ff486ed81389_400x400.png" class="img-responsive" alt="IMG" />
          </a>
        </div>
      </div>
      <div class="row text-center">
        <nav aria-label="Page navigation">
          <ul class="pagination">
            <li>
              <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
              <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="row">
        <div class="col-md-3 verticalAlign hidden-xs">
          <img src="http://qnimate.com/wp-content/uploads/2014/03/images2.jpg" class="img-responsive img-circle" alt="IMG" />
        </div>
        <div class="col-md-9 col-xs-12">
          <div class="page-header text-center">
            <h3>Page Header</h3>
          </div>
          <div class="container-fluid">
            <div class="row">
              <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                  <span class="sr-only">40% Complete (success)</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="progress">
                <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                  <span class="sr-only">20% Complete (waning)</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="progress">
                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                  <span class="sr-only">80% Complete (info)</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="progress">
                <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                  <span class="sr-only">70% Complete (danger)</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container text-center">
        <span class="glyphicon glyphicon-music"></span>
        <span class="glyphicon glyphicon-cloud"></span>
        <p class="text-muted text-center">Tous droits réservés</p>
      </div>
    </footer>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  </body>
</html>
