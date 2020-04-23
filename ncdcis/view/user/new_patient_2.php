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
                                    <h3>NEW PATIENT (DATE OF ONSET AND ADMISSION VITAL SIGNS)  <span style="margin-left: 20px;">2 of 20</span></h3> <hr>

                                    <form  method="post"   action="../../controller/patient_controller.php?location=record&service_name=<?php echo 'Account_Creation' ?>">
                                        <div class="col-xs-12">

                                            <div class="form-group col-xs-3">
                                                <label for="emr">Date of earliest symptom</label>
                                                <input type="date" name="sympton_onset" class="form-control " id="emr"  >
                                            </div> 
                                            <div class="form-group col-xs-6">
                                                <label for="name">SARS-COV-2: DIAGNOSISe</label>
                                                <div class="form-control">
                                                    <input type="date" name="diagnosis_date" id="name"required>
                                                    <label class="radio-inline"><input type="radio" name="diagnosis_stat" checked>Positive</label>
                                                    <label class="radio-inline "><input type="radio" name="diagnosis_stat">Negative</label>
                                                    <label class="radio-inline "><input type="radio" name="diagnosis_stat">Indeterminate</label></div>
                                            </div>

                                            <div class="form-group col-xs-3">
                                                <label for="no">Temperature</label>
                                                <div >
                                                    <input type="number"  class="form-control" name="temperature" id="no" placeholder="Temperature oC" required>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group col-xs-3">
                                                <label for="occ">Pulse/Heart rate</label>
                                                <input type="number" name="pulse" class="form-control" id="occ" placeholder="Pulse beats/min">
                                            </div>

                                            <div class="form-group col-xs-3">
                                                <label for="occ">Respiratory</label>
                                                <input type="number" name="respiratory" class="form-control" id="occ" placeholder="Respiratory beats/min">
                                            </div>

                                            <div class="form-group col-xs-3">
                                                <label for="occ">Blood Pressure</label>
                                                <input type="text" name="blood_pressure" class="form-control" id="occ" placeholder="Blood pressure eg. 120/80">
                                            </div>
                                            <div class="form-group col-xs-3">
                                                <label for="occ">Dehydration</label>
                                                <div class="form-control">
                                                    <label class="radio-inline "><input type="radio" name="dehydration">Yes</label>
                                                    <label class="radio-inline "><input type="radio" name="dehydration">No</label> </div>   
                                            </div>
                                        </div>

                                        <div class="col-xs-12  ">
                                            <div class="form-group col-xs-3">
                                                <label for="account_type">Capillary refill time > 2seconds</label>
                                                <div class="form-control">
                                                    <label class="radio-inline "><input type="radio" name="capillary_refill">Yes</label>
                                                    <label class="radio-inline "><input type="radio" name="capillary_refill">No</label> </div>   
                                            </div>

                                            <div class="form-group col-xs-6">
                                                <label for="dob">Oxygen Saturation (Unk=Unknown)</label>
                                                <div class="form-control">
                                                    <input type="text" name="oxygen_sat" id="dob" placeholder="Oxygen Saturation" required>
                                                    <label class="radio-inline "><input type="radio" name="oxygen_on">Room Air</label>
                                                    <label class="radio-inline "><input type="radio" name="oxygen_on">Oxygen Therapy</label>
                                                    <label class="radio-inline "><input type="radio" name="oxygen_on">Unk</label>
                                                </div>
                                            </div>


                                            <div class="form-group col-xs-3">
                                                <label for="age">A V P U (circle one)(GCS/15)</label>
                                                <input type="text" name="avpu" class="form-control" id="age"  placeholder="Glasgow Coma Score" required>
                                            </div>
                                        </div>
                                        <div class="col-xs-12  ">
                                            <div class="form-group col-xs-2">
                                                <label for="provider">Height (cm)</label>
                                                <input type="text" class="form-control" name="height" id="dob" placeholder="Height" required>
                                            </div>
                                            <div class="form-group col-xs-2">
                                                <label for="provider">Weight (kg)</label>
                                                <input type="text" class="form-control" name="weight" id="dob" placeholder="Weight" required>
                                            </div>
<div class="form-group col-xs-5">
                                                <label for="provider">Mid-upper arm circumference (children 5yrs & below (cm) )</label>
                                                <input type="text" class="form-control" name="circumference" id="dob" placeholder="" required>
                                            </div>

                                        </div>
                                       <div class="col-xs-12">


                                            <div class="form-group col-xs-12">
                                                <label for="gen">Malnutrition</label>
                                               <div class="form-control">
                                                    
                                                    <label class="radio-inline "><input type="radio" name="malnutrition">Yes</label>
                                                    <label class="radio-inline "><input type="radio" name="malnutrition">No</label>
                                                    <label class="radio-inline "><input type="radio" name="malnutrition_t">Undernutrition</label>
                                                    <label class="radio-inline "><input type="radio" name="malnutrition_t">Obesity</label>
                                                </div>
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