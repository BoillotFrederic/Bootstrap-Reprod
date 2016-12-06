<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo BootStrap</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styleMK4.css">
    <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row" id="navBar">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="../"><span class="glyphicon glyphicon-home"></span></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <form class="navbar-form navbar-left">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Page <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="../index.php">MockUp 1</a></li>
                    <li><a href="page2.php">MockUp 2</a></li>
                    <li><a href="page3.php">MockUp 3</a></li>
                    <li><a href="page4.php">MockUp 4 <span class="glyphicon glyphicon-ok"></span></a></li>
                  </ul>
                </li>
                <li><a href="#">IP</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <div class="row" id="title">
        <h1>Lorem ipsum dolor</h1>
      </div>
      <div class="row">
        <div class="col-md-4" id="columnLeft">
          <div class="container-fluid">
              <h2 class="text-center">Formulaire</h2>
              <hr />
              <form class="text-center">
                <div class="form-group">
                  <input type="text" class="form-control" id="object" placeholder="Objet"><br />
                  <input type="text" class="form-control" id="dest" placeholder="Destination"><br />
                  <input type="text" class="form-control" id="copy" placeholder="Copie"><br />
                  <textarea class="form-control" rows="8"></textarea><br />

                  <button type="submit" class="btn btn-default">Ajouter</button>
                </div>
              </form>
          </div>
        </div>
        <div class="col-md-8" id="content">
          <div class="container-fluid">
            <form class="row">
              <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <input type="checkbox">
              </div>
              <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <span class="glyphicon glyphicon-star"></span>
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <input type="text" class="form-control" id="text" placeholder="Text bold">
              </div>
              <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                <input type="text" class="form-control" id="text" placeholder="Text bold">
              </div>
              <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <span class="glyphicon glyphicon-remove"></span>
              </div>
            </form>
            <form class="row">
              <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <input type="checkbox">
              </div>
              <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <span class="glyphicon glyphicon-star"></span>
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <input type="text" class="form-control" id="text" placeholder="Text bold">
              </div>
              <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                <input type="text" class="form-control" id="text" placeholder="Text bold">
              </div>
              <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <span class="glyphicon glyphicon-remove"></span>
              </div>
            </form>
            <form class="row">
              <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <input type="checkbox">
              </div>
              <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <span class="glyphicon glyphicon-star"></span>
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <input type="text" class="form-control" id="text" placeholder="Text bold">
              </div>
              <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                <input type="text" class="form-control" id="text" placeholder="Text bold">
              </div>
              <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <span class="glyphicon glyphicon-remove"></span>
              </div>
            </form>
            <form class="row">
              <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <input type="checkbox">
              </div>
              <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <span class="glyphicon glyphicon-star"></span>
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <input type="text" class="form-control" id="text" placeholder="Text bold">
              </div>
              <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                <input type="text" class="form-control" id="text" placeholder="Text bold">
              </div>
              <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <span class="glyphicon glyphicon-remove"></span>
              </div>
            </form>
            <form class="row">
              <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <input type="checkbox">
              </div>
              <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <span class="glyphicon glyphicon-star"></span>
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <input type="text" class="form-control" id="text" placeholder="Text bold">
              </div>
              <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                <input type="text" class="form-control" id="text" placeholder="Text bold">
              </div>
              <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <span class="glyphicon glyphicon-remove"></span>
              </div>
            </form>
            <form class="row">
              <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <input type="checkbox">
              </div>
              <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <span class="glyphicon glyphicon-star"></span>
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <input type="text" class="form-control" id="text" placeholder="Text bold">
              </div>
              <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                <input type="text" class="form-control" id="text" placeholder="Text bold">
              </div>
              <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <span class="glyphicon glyphicon-remove"></span>
              </div>
            </form>
            <form class="row">
              <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <input type="checkbox">
              </div>
              <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <span class="glyphicon glyphicon-star"></span>
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <input type="text" class="form-control" id="text" placeholder="Text bold">
              </div>
              <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                <input type="text" class="form-control" id="text" placeholder="Text bold">
              </div>
              <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <span class="glyphicon glyphicon-remove"></span>
              </div>
            </form>
            <div class="text-center" id="footer">
              <span class="glyphicon glyphicon-search"></span>
              Voir plus +
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  </body>
</html>
