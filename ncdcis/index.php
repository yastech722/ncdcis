<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        session_start();
        include 'model/db_conn.php';
        ?>
        <title>YASMED</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="res/css/bootstrap.min.css">
        <link href="res/img/icon.jpg" rel="icon" type="image">
    </head>
    <body>

        <div class="container">


            <div class="container" style="padding-top: 150px">

                <div class="col-xs-12 col-sm-8 col-sm-offset-2" >
                    <div class="panel panel-default" style="background-image: linear-gradient(#34495e,#c6c6c6)">
                        <!--#DCE35B,#45B649-->
                        <div  class="panel" >
                            <div class="panel-body" style="background-image: linear-gradient(#34495e,#c6c6c6)">

                                <div class="row" style="padding: 10px 0px 0px 0px; ">
                                    <div class="col-xs-12 col-sm-6" style="padding-top:35px; font-family: monospace;color:white; height: 250px" >
                                        <center> <h2>  <?php
                                               
                                                ?></h2></center>

                                    </div>
                                    <div class="col-xs-12 col-sm-6" style="border-left:1px solid black; ">
                                        <h4 style="color: white">Log into your account</h4><hr>
                                        <?php if (isset($_SESSION['info'])) {
                                            ?>
                                            <span class="center  alert-danger"><?php echo $_SESSION['info'] ?></span>
                                        <?php
                                        }
                                        unset($_SESSION['info'])
                                        ?>

                                        <form  method="post"  action="controller/account_controller.php">


                                            <div class="form-group">
                                                <label for="emr" style="color: white">Username</label>
                                                <input type="text" name="username" class="form-control" id="emr" placeholder="Username" required="true">
                                            </div>
                                            <div class="form-group">
                                                <label for="no" style="color: white">Password</label>
                                                <input type="password" name="password" class="form-control" id="no" placeholder="Password" required>
                                            </div>




                                            <input type="submit" name="user_login"  class="btn btn-primary btn-block" value="Login">

                                            </div>


                                        </form>
                                    </div>
                                    <center>Powered by ILMA ICT &copy 2020</center>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

