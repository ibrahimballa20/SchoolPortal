<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>School Portal</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME ICONS STYLES-->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" />
    <!--CUSTOM STYLES-->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a  class="navbar-brand" href="index.html">DesignBootstrap

            </a>
        </div>

        <div class="notifications-wrapper">
            <ul class="nav">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">30% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                            <span class="sr-only">30% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">90% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                            <span class="sr-only">90% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See Tasks List + </strong>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user-plus"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user-plus"></i> My Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </nav>
    <!-- /. NAV TOP  -->
    @include('Layout.navigation')
    <!-- /. SIDEBAR MENU (navbar-side) -->
    <div id="page-wrapper" class="page-wrapper-cls">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">DASHBOARD</h1>
                </div>
            </div>

            <div class="row">
                <div class=" col-md-3 col-sm-3">
                    <div class="style-box-one Style-one-clr-one">
                        <a href="#">
                            <span class="glyphicon glyphicon-headphones"></span>
                            <h5>Some Sample Text</h5>
                        </a>
                    </div>
                </div>
                <div class=" col-md-3 col-sm-3">
                    <div class="style-box-one Style-one-clr-two">
                        <a href="#">
                            <span class="glyphicon glyphicon-repeat"></span>
                            <h5>Some Sample Text</h5>
                        </a>
                    </div>
                </div>
                <div class=" col-md-3 col-sm-3">
                    <div class="style-box-one Style-one-clr-three">
                        <a href="#">
                            <span class="glyphicon glyphicon-camera"></span>
                            <h5>Some Sample Text</h5>
                        </a>
                    </div>
                </div>
                <div class=" col-md-3 col-sm-3">
                    <div class="style-box-one Style-one-clr-four">
                        <a href="#">
                            <span class="glyphicon glyphicon-cog"></span>
                            <h5>Some Sample Text</h5>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class=" col-md-4 col-sm-4">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Username</th>
                                <th>User No.</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><span class="label label-primary">Lolo Bird</span></td>
                                <td>@twitter</td>
                                <td>100090</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td><span class="label label-info">100090</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>100090</td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td><span class="label label-primary">the Bird</span></td>
                                <td>@twitter</td>
                                <td>100090</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><span class="label label-success">Thornton</span></td>
                                <td>@fat</td>
                                <td><span class="label label-danger">100090</span></td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td><span class="label label-info">100090</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                </div>


                <div class=" col-md-8 col-sm-8">

                    <br />
                    <h2> Bootstrap Media Objects</h2>
                    <br />

                    <div class="media">
                        <a class="media-left" href="#">
                            <img src="assets/img/1.jpg" alt="" class="img-rounded" />
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Media heading </h4>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                        </div>
                    </div>
                    <div class="media">
                        <a class="media-left" href="#">
                            <img src="assets/img/2.jpg" alt="" class="img-rounded" />
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Media heading</h4>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                            <div class="media">
                                <a class="media-left" href="#">
                                    <img src="assets/img/1.jpg" alt="" class="img-rounded" />
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Nested media heading</h4>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
</div>
<!-- /. WRAPPER  -->
<footer  >
    &copy; 2015 YourCompany |
</footer>
<!-- /. FOOTER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="{{asset('js/jquery-1.11.1.js')}}"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="{{asset('js/bootstrap.js')}}"></script>
<!-- METISMENU SCRIPTS -->
<script src="{{asset('js/jquery.metisMenu.js')}}"></script>
<!-- CUSTOM SCRIPTS -->
<script src="{{asset('js/custom.js')}}"></script>


</body>
</html>
