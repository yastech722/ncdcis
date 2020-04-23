<?php
session_start();
if (isset($_SESSION['username'])) {
    include '../../res/includes/header.php';
    ?>


    <div class="row">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="home.php"><i class="glyphicon glyphicon-home"></i> </a>
                </div>
                <ul class="nav navbar-nav">
                    <li ><a href="new_patient.php">New Patient</a></li>

    <!--         <li><a href="admission_list.php">Admission <span class="badge"><?php //echo get_admossion_count()  ?></span> </a>
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
        <div class="container">

            <div class="panel-group" >
                <div class="panel panel-default">

                    <div  class="panel">
                        <div class="panel-body">

                            <div class="row" style="padding: 0px 0px 10px 0px; ">

                                <div class="col-xs-12">
                                    <h3>NEW PATIENT (CO-MORBIDITIES)  <span style="margin-left: 20px;">2 of 20</span></h3> <hr>

                                    <form  method="post"   action="../../controller/patient_controller.php?location=record&service_name=<?php echo 'Account_Creation' ?>">
                                        <div class="col-xs-12">

                                              <div class="form-group col-xs-3">
                                                <label for="name">Chronic cardiac disease</label>
                                                <div class="form-control">
                                                    <label class="radio-inline"><input type="radio" name="cardiac_disease" checked>Yes</label>
                                                    <label class="radio-inline "><input type="radio" name="cardiac_disease">No</label>
                                                    <label class="radio-inline "><input type="radio" name="cardiac_disease">Unk</label></div>
                                            </div> 
                                            

                                            <div class="form-group col-xs-3">
                                                <label for="name">Hypertension</label>
                                                <div class="form-control">
                                                    <label class="radio-inline"><input type="radio" name="hypertension" checked>Yes</label>
                                                    <label class="radio-inline "><input type="radio" name="hypertension">No</label>
                                                    <label class="radio-inline "><input type="radio" name="hypertension">Unk</label></div>
                                            </div> 
                                            
                                             <div class="form-group col-xs-3">
                                                <label for="name">Chronic pulmonary disease</label>
                                                <div class="form-control">
                                                    <label class="radio-inline"><input type="radio" name="pulmonary_disease" checked>Yes</label>
                                                    <label class="radio-inline "><input type="radio" name="pulmonary_disease">No</label>
                                                    <label class="radio-inline "><input type="radio" name="pulmonary_disease">Unk</label></div>
                                            </div>
                                            
                                             <div class="form-group col-xs-3">
                                                <label for="name">Chronic kidney disease</label>
                                                <div class="form-control">
                                                    <label class="radio-inline"><input type="radio" name="kidney_disease" checked>Yes</label>
                                                    <label class="radio-inline "><input type="radio" name="kidney_disease">No</label>
                                                    <label class="radio-inline "><input type="radio" name="kidney_disease">Unk</label></div>
                                            </div>
                                            
                                        </div>
                                           <div class="col-xs-12">
 <div class="form-group col-xs-3">
                                                <label for="name">Chronic liver disease</label>
                                                <div class="form-control">
                                                    <label class="radio-inline"><input type="radio" name="liver_disease" checked>Yes</label>
                                                    <label class="radio-inline "><input type="radio" name="liver_disease">No</label>
                                                    <label class="radio-inline "><input type="radio" name="liver_disease">Unk</label></div>
                                            </div> 
                                            

                                            <div class="form-group col-xs-3">
                                                <label for="name">Obesity</label>
                                                <div class="form-control">
                                                    <label class="radio-inline"><input type="radio" name="obesity" checked>Yes</label>
                                                    <label class="radio-inline "><input type="radio" name="obesity">No</label>
                                                    <label class="radio-inline "><input type="radio" name="obesity">Unk</label></div>
                                            </div> 
                                            
                                             <div class="form-group col-xs-3">
                                                <label for="name">Chronic neurological disorder</label>
                                                <div class="form-control">
                                                    <label class="radio-inline"><input type="radio" name="neuro_disorder" checked>Yes</label>
                                                    <label class="radio-inline "><input type="radio" name="neuro_disorder">No</label>
                                                    <label class="radio-inline "><input type="radio" name="neuro_disorder">Unk</label></div>
                                            </div>
                                            
                                             <div class="form-group col-xs-3">
                                                <label for="name">Diabetes</label>
                                                <div class="form-control">
                                                    <label class="radio-inline"><input type="radio" name="diabetes" checked>Yes</label>
                                                    <label class="radio-inline "><input type="radio" name="diabetes">No</label>
                                                    <label class="radio-inline "><input type="radio" name="diabetes">Unk</label></div>
                                            </div>
                                            
                                        </div>

                                        <div class="col-xs-12">
 <div class="form-group col-xs-3">
                                                <label for="name">Current Smoking</label>
                                                <div class="form-control">
                                                    <label class="radio-inline"><input type="radio" name="smoking" checked>Yes</label>
                                                    <label class="radio-inline "><input type="radio" name="smoking">No</label>
                                                    <label class="radio-inline "><input type="radio" name="smoking">Unk</label></div>
                                            </div> 
                                            

                                            <div class="form-group col-xs-3">
                                                <label for="name">Asplenia</label>
                                                <div class="form-control">
                                                    <label class="radio-inline"><input type="radio" name="asplenia" checked>Yes</label>
                                                    <label class="radio-inline "><input type="radio" name="asplenia">No</label>
                                                    <label class="radio-inline "><input type="radio" name="asplenia">Unk</label></div>
                                            </div> 
                                            
                                             <div class="form-group col-xs-3">
                                                <label for="name">Malignancy</label>
                                                <div class="form-control">
                                                    <label class="radio-inline"><input type="radio" name="malignancy" checked>Yes</label>
                                                    <label class="radio-inline "><input type="radio" name="malignancy">No</label>
                                                    <label class="radio-inline "><input type="radio" name="malignancy">Unk</label></div>
                                            </div>
                                            
                                             <div class="form-group col-xs-3">
                                                <label for="name">TB</label>
                                                <div class="form-control">
                                                    <label class="radio-inline"><input type="radio" name="tb" checked>Yes</label>
                                                    <label class="radio-inline "><input type="radio" name="tb">No</label>
                                                    <label class="radio-inline "><input type="radio" name="tb">Unk</label></div>
                                            </div>
                                            
                                        </div>
                                          <div class="col-xs-12">
 <div class="form-group col-xs-6">
                                                <label for="name">Hiv</label>
                                                <div class="form-control">
                                                    <label class="radio-inline"><input type="radio" name="hiv" >Yes-on ART</label>
                                                    <label class="radio-inline"><input type="radio" name="hiv" >Yes-not on ART</label>
                                                    <label class="radio-inline "><input type="radio" name="hiv">No</label>
                                                    <label class="radio-inline "><input type="radio" name="hiv">Unk</label></div>
                                            </div> 
                                            

                                            <div class="form-group col-xs-3">
                                                <label for="name">Sickle cell disease</label>
                                                <div class="form-control">
                                                    <label class="radio-inline"><input type="radio" name="sickle" checked>Yes</label>
                                                    <label class="radio-inline "><input type="radio" name="sickle">No</label>
                                                    <label class="radio-inline "><input type="radio" name="sickle">Unk</label></div>
                                            </div> 
                                            
                                             <div class="form-group col-xs-3">
                                                <label for="name">Others specify</label>
                                                <input type="text" name="other_disease" class="form-control">
                                                      </div>
                                          </div>
                                         
                                       <div class="col-xs-12">
<div class="form-group col-xs-12">
                                                <label for="name">PRE ADMISSION &CHRONIC MEDICATION</label>
                                                <textarea name=pre_medication id=addr placeholder=Medication class=col-xs-12></textarea>
                                            </div>

                                            
                                       </div>
                                           <div class=row style="padding-top: 30px">
                                                <div class=col-xs-12>
                                                    <button type="submit" name="create_patient"  class="btn btn-success btn-block">Create Patient</button>
                                                </div>
                                            </div>



                                    </form>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>

        <br>


        <br><br>





    </div>

    <?php
    include '../../ajax/request.php';
    include '../change_password.php';
    include '../../res/includes/footer.php';
} else {
    header('Location: ../logout.php');
}