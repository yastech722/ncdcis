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
                    
            <!--         <li><a href="admission_list.php">Admission <span class="badge"><?php //echo get_admossion_count() ?></span> </a>
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
            <?php
            $id = get_patient_count();
            $length = strlen($id);
            $emr_id = "";

            switch ($length) {
                case 1:
                    $emr_id = "0000000000" . $id;
                    break;
                case 2:
                    $emr_id = "000000000" . $id;
                    break;
                case 3:
                    $emr_id = "00000000" . $id;
                    break;
                case 4:
                    $emr_id = "0000000" . $id;
                    break;
                case 5:
                    $emr_id = "000000" . $id;
                    break;
                case 6:
                    $emr_id = "00000" . $id;
                    break;
                case 7:
                    $emr_id = "0000" . $id;
                    break;
                case 8:
                    $emr_id = "000" . $id;
                    break;
                case 9:
                    $emr_id = "00" . $id;
                    break;
                case 10:
                    $emr_id = "0" . $id;
                    break;
                default:
                    $emr_id = $id;
            }
            ?>
            <div class="panel-group" >
                <div class="panel panel-default">

                    <div  class="panel">
                        <div class="panel-body">

                            <div class="row" style="padding: 0px 0px 10px 0px; ">

                                <div class="col-xs-12">
                                    <h3>NEW PATIENT (DEMOGRAPHICS)  <span style="margin-left: 20px;">1 of 20</span></h3> <hr>

                                    <form  method="post" onsubmit="return validateForm()"  action="../../controller/patient_controller.php?location=record&service_name=<?php echo 'Account_Creation' ?>">
                                        <div class="col-xs-12">

                                            <div class="form-group col-xs-3">
                                                <label for="emr">ENROLL ID</label>
                                                    <input type="text" name="enroll_id" class="form-control " id="emr" value="<?php echo $emr_id ?>" >
                                                    </div> 
                                            <div class="form-group col-xs-3">
                                                <label for="name">Treatment Centre</label>
                                                <input type="text" name="treatment_centre" class="form-control" id="name" placeholder="Treatment Centre" required>
                                            </div>

                                            <div class="form-group col-xs-3">
                                                <label for="no">State</label>
                                                <input type="text" name="state" class="form-control" id="no" placeholder="State" required>
                                            </div>
                                            <div class="form-group col-xs-3">
                                                <label for="occ">Bed No</label>
                                                <input type="text" name="bed_no" class="form-control" id="occ" placeholder="Bed No">
                                            </div>
                                        </div>

                                        <div class="col-xs-12  ">
                                            <div class="form-group col-xs-3">
                                                <label for="account_type">Gender</label>
                                                <select  name="gender" class="form-control" id="account_type"  >
                                                    <option value="">Select an option</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                  
                                                </select>
                                            </div>
                                            <div class="form-group col-xs-3">
                                                <label for="dob">Date of Birth</label>
                                                <input type="text" name="dob" class="form-control" id="dob" placeholder="05/11/2018" required>
                                            </div>
                                            
<div class="form-group col-xs-3">
                                                <label for="age">Age</label>
                                                <input type="number" oninput="getDOB()" name="age" class="form-control" id="age"  placeholder="AGE" required>
                                            </div>
                                            <div class="form-group col-xs-3">
                                                <label for="provider">Healthcare Worker?</label>
                                                <select  name="health_worker" class="form-control" id="provider" >
                                                    <option value="">Select an option</option>
                                                     <option value="Yes">No</option>
                                                        <option value="Yes">Yes</option>
                                                   
                                                </select>
                                            </div>
                                            

                                        </div>

                                        <div class="col-xs-12">
                                            

                                            <div class="form-group col-xs-3">
                                                <label for="gen">Occupation</label>
                                               <input type="text" name="occupation" class="form-control" id="occ" placeholder="Occupation">
                                            </div>
                                            <div class="form-group col-xs-3">
                                                <label for="geno">Marital Status</label>
                                                <select  name="marital_status" class="form-control" id="geno" >
                                                    <option value="">Select an option</option>
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                    </select>
                                            </div>
                                          
                                            <div class="form-group col-xs-2">
                                                <label for="name">Pregnant?</label>
                                                <div class="form-control">
                                                <label class="radio-inline"><input type="radio" name="pregnant" checked>Yes</label>
                                                <label class="radio-inline "><input type="radio" name="pregnant">No</label></div>
                                            </div>
                                            <div class="form-group col-xs-2">
                                                <label for="gen">Last Menstrual Period</label>
                                                <input type="date" name="menstrual_date" class="form-control" id="occ" >
                                            </div>
                                            <div class="form-group col-xs-2">
                                                <label for="gen">Gestational Age</label>
                                                <input type="text" name="menstrual_date" class="form-control" placeholder="eg. 5 weeks, 2 days" id="occ" >
                                            </div>
                                        </div>
                                         <div class="col-sm-12 ">
                                         <div class="form-group col-xs-6">
                                                <label for="addr">Address of Residence</label>
                                                <textarea name=address id=addr placeholder=Address class=col-xs-12></textarea>
                                            </div>
                                             <div class="form-group col-xs-6">
                                                <label for="addr">LGA</label>
                                                <textarea name=address id=addr placeholder=Address class=col-xs-12></textarea>
                                            </div>
                                        

                                           
                                                <div class=row style="padding-top: 30px">
                                                    <div class=col-xs-12>
                                                        <button type="submit" name="create_patient"  class="btn btn-success btn-block">Create Patient</button>
                                                    </div>
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

    <script>
        function getDOB() {
            var age = document.getElementById('age').value;
            var d = new Date();
            var dob = ((d.getFullYear() - age) + "-" + d.getMonth() + "-" + (d.getDate() + 1));
            //    alert(dob);
            document.getElementById("dob").value = dob;

        }

    </script>
    <?php
                                                include '../../ajax/request.php';
    include '../change_password.php';
    include '../../res/includes/footer.php';
} else {
    header('Location: ../logout.php');
}