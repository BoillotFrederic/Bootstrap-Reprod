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
    <div class="container-fluid" id="navBar">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
              <span class="glyphicon glyphicon-th-large"></span>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-left">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="../index.php">Accueil</a></li>
              <li><a href="page2.php">Page 2</a></li>
              <li class="active"><a href="page3.php">Page 3 <span class="sr-only">(current)</span></a></li>
              <li><a href="page4.php">Page 4</a></li>
              <li><img src="../imgs/hol.png" class="img-circle" alt="profil" /></li>
              <li><a href="#">Hollande</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#"><span class="glyphicon glyphicon-pencil"></span> Edit</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-off"></span> Deconnexion</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="row containerBg">
      <div class="col-md-4 col-sm-12">
        <div class="row" id="profilContain">
          <div class="row">

            <div class="col-md-12 col-sm-6 col-xs-12">
              <div class="container-fluid">
                <div></div>
              </div>
            </div>
            <div class="col-md-12 col-sm-6 col-xs-12 visible-sm">
              <div id="nameCenter" class="row">
                <h1 class="text-center">Hollande</h1>
              </div>
            </div>
            <h1 class="col-md-12 col-sm-6 text-center">Hollande</h1>
          </div>

          <div class="col-md-12 col-sm-6 col-xs-6">
            <p>DESCRIPTION :<br />
              FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF
              FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF
              FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF
              FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF
            </p>
          </div>
          <div class="col-md-12 col-sm-6 col-xs-6">
            <p>COMPETENCES :<br />
              FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF
              FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF
              FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF
              FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF
            </p>
          </div>
          <div class="col-md-12 col-sm-6 col-xs-6">
            <p>HOBBIES :<br />
              FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF
              FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF
              FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF
              FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF
            </p>
          </div>
          <div class="col-md-12 col-sm-6 col-xs-6">
            <p>LANGUES :<br />
              FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF
              FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF
              FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF
              FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="container-fluid">
          <img id="imgMain" src="https://media.licdn.com/media/AAEAAQAAAAAAAANbAAAAJDE5NjBkNDk1LTY3ZGQtNDA0NS04YTJiLTdkNmU3NjZiNjI3Mg.png" alt="IMG" />
        </div>
        <div class="container-fluid">
          <div class="sectionBg">
            <div class="text-right">
              <span class="glyphicon glyphicon-picture"></span>
              <span class="glyphicon glyphicon-file"></span>
              <span class="glyphicon glyphicon-user"></span>
              <span class="glyphicon glyphicon-option-horizontal"></span>
            </div>
            <form action="#" method="post" class="text-right">
              <textarea class="form-control" rows="5"></textarea>
              <button type="submit" class="btn btn-default">Envoyer</button>
            </form>
          </div>
          <div class="sectionBg">
            <div class="row">
              <div class="col-md-2">
                <img src="../imgs/hol.png" alt="IMG" />
              </div>
              <div class="col-md-10">
                <h2>TITLE<br /><small>SUB TITLE</small></h2>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <p class="text-justify">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <div class="text-right">
                  <span class="glyphicon glyphicon-plus"></span>
                  <span class="glyphicon glyphicon-minus"></span>
                  <span class="glyphicon glyphicon-asterisk"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="sectionBg">
            <div class="row">
              <div class="col-md-2">
                <img src="../imgs/hol.png" alt="IMG" />
              </div>
              <div class="col-md-10">
                <h2>TITLE<br /><small>SUB TITLE</small></h2>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <p class="text-justify">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <div class="text-right">
                  <span class="glyphicon glyphicon-plus"></span>
                  <span class="glyphicon glyphicon-minus"></span>
                  <span class="glyphicon glyphicon-asterisk"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="sectionBg">
            <div class="row">
              <div class="col-md-2">
                <img src="../imgs/hol.png" alt="IMG" />
              </div>
              <div class="col-md-10">
                <h2>TITLE<br /><small>SUB TITLE</small></h2>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <p class="text-justify">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <div class="text-right">
                  <span class="glyphicon glyphicon-plus"></span>
                  <span class="glyphicon glyphicon-minus"></span>
                  <span class="glyphicon glyphicon-asterisk"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row containerBg text-center" id="copyright">
      <div>
        © Tous droits réservés<br />
        <a href="#" target="_blank"><span class="social social-facebook"></span></a>
        <a href="#" target="_blank"><span class="social social-google-plus"></span></a>
        <a href="#" target="_blank"><span class="social social-twitter"></span></a>
      </div>
    </div>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  </body>
</html>
