<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LRI | Ajouter un membres</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header" style="position: fixed; width: 100%">
    <!-- Logo -->
    <a href="dashboard.php" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="logo.png" style="width: 50px"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="logo.png"></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
  
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/avatar04.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Membre</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/avatar04.png" class="img-circle" alt="User Image">

                <p>
                Membre
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="userProfil.php" class="btn btn-default btn-flat">Profil</a>
                </div>
                <div class="pull-right">
                  <a href="login-page/login.php" class="btn btn-default btn-flat">Déconnexion</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="position: fixed;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="padding-top: 50px;">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/avatar04.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Membre<br>  <smal>Prénom </smal> </p>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->

      <ul class="sidebar-menu" data-widget="tree">
        <li >
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-user"></i> <span>Membres</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="trombino.php"><i class="fa fa-id-badge"></i> Trombinoscope</a></li>
            <li><a href="liste.php"><i class="fa fa-list"></i> Liste</a></li>
          </ul>
        </li>
        <li>
          <a href="equipes.php">
            <i class="fa fa-group"></i> 
            <span>Equipes</span>
          </a>
        </li>
        <li>
          <a href="projets.php">
            <i class="fa fa-folder-open-o"></i> 
            <span>Projets</span>
          </a>
        </li>
        
        <li>
          <a href="thèses.php">
            <i class="fa fa-file-pdf-o"></i> 
            <span>Thèses</span>
          </a>
        </li>

        <li>
          <a href="articles.php">
            <i class="fa fa-newspaper-o"></i> 
            <span>Articles</span></a>
          </li>

          <li>
          <a href="parametre.php">
            <i class="fa fa-gears"></i> 
            <span>Paramètres</span></a>
          </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="padding-top: 50px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Membres
        <small>Nouveau</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="liste.php">Membres</a></li>
        <li class="active">Nouveau</li>
      </ol>
    </section>

  <section class="content" style="padding-top: 30px">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
            
          <div class="container col-xs-12">

            <form class="well form-horizontal" action=" " method="post"  id="contact_form">
              <fieldset>

                <!-- Form Name -->
                <legend><center><h2><b>Nouveau Membre</b></h2></center></legend><br>

                <!-- Text input-->
                    <div class="col-md-5">

                      <div class="form-group ">
                        <label class="col-md-3 control-label">Nom</label>  
                        <div class="col-md-9 inputGroupContainer">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="nom" placeholder="Nom" class="form-control"  type="text">
                          </div>
                        </div>
                      </div>

                       <!-- Text input-->

                      <div class="form-group">
                        <label class="col-md-3 control-label">Prénom</label>  
                        <div class="col-md-9 inputGroupContainer">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="prenom" placeholder="Prénom" class="form-control"  type="text">
                          </div>
                        </div>
                      </div>


                       <div class="form-group"> 
                          <label class="col-md-3 control-label">Grade</label>
                            <div class="col-md-9 selectContainer">
                              <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
                                  <select name="department" class="form-control selectpicker">
                                    <option value="">MAA</option>
                                    <option>MAB</option>
                                    <option >MCA</option>
                                    <option >MCB</option>
                                    <option>Doctorant</option>
                                    <option >Professeur</option>
                                  </select>
                              </div>
                            </div>
                      </div>

                      <div class="form-group"> 
                          <label class="col-md-3 control-label">Equipe</label>
                            <div class="col-md-9 selectContainer">
                              <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                  <select name="department" class="form-control selectpicker">
                                    <option value="">equipe1</option>
                                    <option>equipe2</option>
                                    <option >equipe3</option>
                                    <option >equipe4</option>
                                  </select>
                              </div>
                            </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-3 control-label">E-Mail</label>  
                          <div class="col-md-9 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                          </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-3 control-label">Password</label>  
                          <div class="col-md-9 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa  fa-lock"></i></span>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                          </div>
                      </div>

                    </div>

                    
                <div class="col-md-7">
                    <div class="row">
                      <div class="col-md-9">
                      <div class="form-group">
                            <label class="col-md-4 control-label">Date De Naissance</label>  
                            <div class="col-md-8 inputGroupContainer input-group Date">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control pull-right" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask id="datepicker">
                            </div>
                      </div>
                      </div>
                      <div class="col-md-3">
                      <div class="form-group">
                            <label class="col-md-4 control-label" title="publique?">
                              <input type="checkbox" class="flat-red" >
                            </label>  
                            <label class="control-label">publique ?</label> 
                           </div>
                         </div>
                    </div>

                    <div class="row">
                      <div class="col-md-9">
                      <div class="form-group">
                              <label class="col-md-4 control-label">N° Téléphone</label>  
                                <div class="col-md-8 input-group">
                                <div class="input-group-addon">
                                  <i class="fa fa-phone"></i>
                                </div>
                                <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                              </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                      <div class="form-group">
                            <label class="col-md-4 control-label" title="publique?">
                              <input type="checkbox" class="flat-red" >
                            </label>  
                            <label class="control-label">publique ?</label> 
                           </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-9">
                      <div class="form-group">
                              <label class="col-md-4 control-label">Linkedin</label>  
                                <div class="col-md-8 inputGroupContainer">
                                <div class="input-group">
                                <span class="input-group-addon"><i class="fa  fa-linkedin-square"></i></span>
                                <input type="email" class="form-control" placeholder="URL">
                              </div>
                              </div>
                        </div>
                     </div>
                     <div class="col-md-3">
                      <div class="form-group">
                            <label class="col-md-4 control-label" title="publique?">
                              <input type="checkbox" class="flat-red" >
                            </label>  
                            <label class="control-label">publique ?</label> 
                           </div>
                         </div>
                    </div>

                    <div class="row">
                      <div class="col-md-9">
                      <div class="form-group">
                              <label class="col-md-4 control-label">ResearshGate</label>  
                                <div class="col-md-8 inputGroupContainer">
                                <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input type="email" class="form-control" placeholder="URL">
                              </div>
                              </div>
                          </div>
                     </div>
                     <div class="col-md-3">
                      <div class="form-group">
                            <label class="col-md-4 control-label" title="publique?">
                              <input type="checkbox" class="flat-red" >
                            </label>  
                            <label class="control-label">publique ?</label> 
                           </div>
                         </div>
                    </div>

                    <div class="row">
                         <div class="col-md-9">
                           <div class="form-group">
                              <label class="col-md-4 control-label">Photo</label>  
                              <div class="col-md-8 inputGroupContainer">
                              <input name="photo" type="file" accept="image/*">
                             </div>
                            </div>
                          </div>

                         <div class="col-md-3">
                           <div class="form-group">
                            <label class="col-md-4 control-label">
                              <input type="checkbox" class="flat-red" >
                            </label>  
                            <label class="control-label">publique ?</label> 
                           </div>
                         </div>
                       </div>

                </div>   

              </fieldset>

              <div style="padding-top: 30px; margin-left: 35%;">
              <button type="submit" class=" btn btn-lg btn-default"><i class="fa  fa-mail-reply"></i> &nbsp;Annuler</button>
               <button type="submit" class=" btn btn-lg btn-primary"><i class="fa fa-check"></i> Valider</button> 
                  </div>
            </form>
          </div>
         </div><!-- /.container -->
       </div>
      </div>

  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark " style="position: fixed;">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <!-- /.control-sidebar-menu -->
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
</body>
</html>
