<!-- Update Patient Details Modal content-->
<div id="updatePatient<?php  echo $patient['emr_id']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Patient Details</h4>
      </div>
	  <form  method="post"  action="../../controller/patient_controller.php">
      <div class="modal-body">
                                  
									<div class="col-xs-4">
									
                                        <div class="form-group">
                                            <label for="emr">EMR ID</label>
                                            <input type="text" name="emr_id" class="form-control" id="emr" value="<?php echo $patient['emr_id'] ?>" >
                                            </div>
											<div class="form-group">
                                                <label for="no">Phone Number</label>
                                                <input type="text" name="phone_number" class="form-control" id="no" value="<?php echo $patient['phone_number'] ?>" >
                                                </div>
												
												        
												<div class="form-group">
                                                <label for="occ">Occupation</label>
                                                <input type="text" name="occupation" class="form-control" id="occ" value="<?php echo $patient['occupation']; ?>">
                                                </div>
												
											
											</div>
											
											<div class="col-xs-4">
											
                                            <div class="form-group">
                                                <label for="name">Full Name</label>
                                                <input type="text" name="full_name" class="form-control" id="name" value="<?php echo $patient['full_name'];;?>" >
                                                </div>
												<div class="form-group">
                                                <label for="reg">Date Registered</label>
                                                <input type="date" name="date_registered" class="form-control" id="reg" value="<?php echo $patient['date_registered']; ?>" readonly="">
                                                </div>
												<div class="form-group">
                                                <label for="bld">Blood Group</label>
                                                <input type="text"  name="blood_group" value="<?php echo $patient['blood_group']; ?>" class="form-control" id="bld" >
												
                                                </div>
												
                                                </div>
												
												<div class="col-xs-4">
												
                                            <div class="form-group">
                                                <label for="age">Date of Birth</label>
                                                <input type="date" name="age" class="form-control" id="age" value="<?php echo $patient['age'];?>">
                                                </div>
												<div class="form-group">
                                                <label for="gen">Gender</label>
                                                <input type="text"  name="gender" value="<?php echo $patient['gender']; ?>" class="form-control" id="gen"  >
									
                                                </div>
												<div class="form-group">
                                                <label for="geno">Genotype</label>
                                                <input type="text" value="<?php echo $patient['genotype']; ?>" name="genotype" class="form-control" id="geno" >
												
                                                </div>
												                                                </div>
												
                                        
                                    
                                                        
                                                    
      </div>
      <div class="modal-footer">
	  <input type="submit" name="update_patient" value="Update"  class="btn btn-primary ">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
	  </form>
    </div>

  </div>
</div>