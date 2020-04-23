<?php
session_start();
if (isset($_SESSION['username'])) {
    include '../../res/includes/header.php';
    ?>


    <div class="row">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <?php if($_SESSION['role']=="Admin"){ ?>
                    <a class="navbar-brand" href="../admin/home.php"><i class="glyphicon glyphicon-home"></i> </a>
                    <?php } else{?>
                    <a class="navbar-brand" href="home.php"><i class="glyphicon glyphicon-home"></i> </a>
                    <?php }?>
                </div>
                <ul class="nav navbar-nav">
                    <li ><a href="new_patient.php">New Patient</a></li>
                    <li><a href="find_patient.php">Find Patient</a></li>

    <!--                    <li><a href="admission_list.php">Admission <span class="badge"><?php //echo get_admossion_count()  ?></span> </a>
     </li>-->
                </ul>
                <ul class="nav navbar-nav navbar-right ">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-setting"></i>Settings <span class="caret"></span></a>
                        <ul class="dropdown-menu">

                            <li><a href="../logout.php">Logout</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#change_password">Change My Password</a></li>

                        </ul>
                    </li>

                </ul>

            </div>
        </nav> 


        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <a href="../../controller/patient_controller.php?fetch_all_patient=1"> <div class="info-box blue-bg">
                    <i class="fa fa-users"></i>
                    <div class="count"><?php echo get_patient_count(); ?></div>
                    <div class="title">Total Records</div>
                    </div></a>
                <!--/.info-box-->
            </div>
            <!--/.col-->

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <a href="../../controller/patient_controller.php?fetch_private_patient=1">
                    <div class="info-box green-bg">
                    <i class="fa fa-user"></i>
                    <div class="count"><?php //echo get_private_patient_count() ?></div>
                    <div class="title">Admission</div>
                    </div></a>
                <!--/.info-box-->
            </div>
            <!--/.col-->
            
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <a href="../../controller/patient_controller.php?fetch_family_patient=1">
                <div class="info-box brown-bg">
                    <i class="fa fa-child"></i>
                    <div class="count"><?php //echo get_family_patient_count(); ?></div>
                    <div class="title">Discharge</div>
                </div></a>
                <!--/.info-box-->
            </div>
            <!--/.col-->

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
               <a href="../../controller/patient_controller.php?fetch_insurance_patient=1">
                <div class="info-box dark-bg">
                    <i class="fa fa-bank"></i>
                    <div class="count"><?php //echo get_insurance_patient_count(); ?></div>
                    <div class="title">Deaths</div>
                </div></a>
                <!--/.info-box-->
            </div>
            <!--/.col-->

            

        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <a href="new_patient.php">  <div class="info-box green-bg">

                        <span  class="   text-center col-xs-12 " style="padding:20px 10px 10px 10px; height:150px;">
                            <h1 class="fa fa-user" style="margin-bottom: 0px; margin-top: 0px"></h1><h3>NEW PATIENT</h3></span> 
                    </div></a>
                <!--/.info-box-->
            </div>
            <!--/.col-->
            <!--/.col--><?php if($_SESSION['role']=="Admin"){?>
             <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                 <a href="../admin/new_insurance.php">  <div class="info-box purple-bg">

                        <span  class="   text-center col-xs-12 " style="padding:20px 10px 10px 10px; height:150px;">
                            <h1 class="fa fa-bank" style="margin-bottom: 0px; margin-top: 0px"></h1><h3>NEW ISOLATION</h3></span> 
                    </div></a>
                <!--/.info-box-->
            </div>
          <?php } ?>
            <!--/.col-->

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <a href="../logout.php">  <div class="info-box red-bg">

                        <span  class="   text-center col-xs-12 " style="padding:20px 10px 10px 10px; height:150px;">
                            <h1 class="fa fa-lock" style="margin-bottom: 0px; margin-top: 0px"></h1><h3>LOGOUT</h3></span> 
                    </div></a>
                <!--/.info-box-->
            </div>
            <!--/.col-->

           
            <!--/.col-->

        </div>
        <!--/.row-->
      
       
    </div>
    </div>


    </div>  
    </div>



    </div>
    </div>

    <?php
    include '../change_password.php';
    include '../../res/includes/footer.php';
} else {
    header('Location: ../logout.php');
}