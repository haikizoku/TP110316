<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Off Canvas Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">
  </head>

  <body>
  <?php require_once 'data.php'; ?>
  <?php if(isset($dataMenu) && !empty($dataMenu)):?>
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <?php foreach ($dataMenu as $label => $status) {//Gestion de nav bar
            if($status == 1){//Lien enabled
              echo '<li><a href="#">' . $label . '</a></li>';
                            }      
            }?>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
    <?php endif; ?>

    <div class="container">
      <?php if(isset($jumbotronTitre) && !empty($jumbotronTitre)):?>
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">    
              <?php echo '<h1>'. $jumbotronTitre [0] .'<h1>';
                    echo '<p>' . $jumbotronTitre [1] .'</p>';?>
          </div>
              <?php endif; ?><!--fgestion  du bloc  texte -->
                
               
          <?php if(isset($TitreTableauUsers) && !empty($TitreTableauUsers)):?>
          <div class="bs-example data-example-id=table-within-panel"> 
            <div class="panel panel-default">  
              <div class="panel-heading"><?php echo  $panelTab [0] ;?></div> 
              <div class="panel-body"><?php echo  $panelTab [1] ;?> </div>
           <table class="table"> 
              <thead> 
                  <tr>  
                  <?php foreach ($TitreTableauUsers as $label => $status){
                    if($status == 1){//Lien enabled
                      echo '<th>' . $label . '</th>';
                                    }      
                          }?>
                    </tr> 
                </thead> 
                <tbody> 
                  <tr>
                    <?php foreach ($TabUsers  as list($a, $b ,$c ,$d)) { 
                      echo '<th>' . $a.'</th>'  , '<td>' . $b . '</td>' , '<td>' . $c . '</td>' , '<td>' . $d . '</td>' ;
                        echo '</tr>';}
                        ?><!--- fin de  gestion  tableau---->
                </tbody> 
              </table> 
            </div>
          </div>
        </div><!--/.col-xs-12.col-sm-9-->
            <?php endif; ?>
            <?php if(isset($ListLink) && !empty($ListLink)):?> 
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <ul class="list-group">
            
             <?php foreach ($ListLink1 as list($a, $b)) {//Gestion du niveau 1
            if($status == 1){//Lien enabled
               echo '<li href="#" class="list-group-item active ">' . $a . '</a><span class="badge">'. $b .'</span></li>';
                  }
            }?>
            <?php foreach ($ListLink as list($a, $b)) {//Gestion du niveau 1
            if($status == 1){//Lien enabled
               echo '<li href="#" class="list-group-item ">' . $a . '</a><span class="badge">'. $b .'</span></li>';
                
             
             }
            }?>
            
          </ul>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->

      <hr>
       <?php endif; ?>
       <?php if(isset($footer ) && !empty($footer )):?>
      <footer>
         <?php foreach ($footer  as $label => $status){
                    if($status == 1){//Lien enabled
                      echo " " .$label ;
                                    }      
                          }?>
      
      </footer>
  <?php endif; ?><!--fgestion  du  footer-->
    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>