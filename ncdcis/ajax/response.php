<?php
include '../model/db_conn.php';

//$drugs = fetch_stock_items();

if (isset($_REQUEST['emr'])) {
    $count=get_patient_count_by_year($_REQUEST['emr'])+1 ?>
<?php echo process_emr($count) ?>  
<?php }
elseif (isset($_REQUEST['q'])) {
    $count = $_REQUEST['q'];

    for ($i = 0; $i < $count; $i++) {
        ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="col-xs-4">
                    <div class="form-group">
                        <label for="name">Drug Name</label>
                        <select name="drug_name[]" class="form-control" id="name"  required>
                            <option value="">Select a drug</option>
                            <?php foreach ($drugs as $drug) { ?>
                                <option value="<?php echo $drug['drug_name']; ?>"><?php echo $drug['drug_name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="col-xs-5">
                    <div class="form-group">
                        <label for="name">Dosage</label>
                        <input type="text" name="dose[]" class="form-control" id="name" placeholder="DOSAGE" required>
                    </div>
                </div>

                <div class="col-xs-3">
                    <div class="form-group">
                        <label for="name">Duration</label>
                        <input type="text" name="duration[]" class="form-control" id="name" placeholder="DURATION IN DAYS" required>
                    </div>
                </div>
            </div>
        </div>

        <?php
    }
} elseif (isset($_REQUEST['m'])) {

    $count = $_REQUEST['m'];

    for ($i = 0; $i < $count; $i++) {
        ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="col-xs-6">
                    <div class="form-group">
                        <label for="name">Drug Name</label>
                        <select name="drug_name[]" class="form-control" id="name" required >
                            <option value="">Select a drug</option>
                            <?php foreach ($drugs as $drug) { ?>
                                <option value="<?php echo $drug['drug_name']; ?>"><?php echo $drug['drug_name']; ?></option>
                            <?php } ?>
                        </select>                                   </div>
                </div>



                <div class="col-xs-6">
                    <div class="form-group">
                        <label for="name">Dose</label>
                        <input type="text" name="dose[]" class="form-control" id="name" placeholder="DOSE" required>
                    </div>
                </div>

                <div class="col-xs-6">
                    <div class="form-group">
                        <label for="name">Duration</label>
                        <input type="text" name="duration[]" class="form-control" id="name" placeholder="DURATION IN DAYS" required>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
} elseif (isset($_REQUEST['vital_sign'])) {

    $count = $_REQUEST['vital_sign'];
    for ($i = 0; $i < $count; $i++) {
        ?>
        <div class="form-group">  <label for="bld">Vital Sign</label>
            <select  name="type[]" class="form-control" id="bld"  required>
                <option value="">Select an option</option>
                <option value="Blood Pressure (mmHg)">Blood Pressure (mmHg)</option>
                <option value="Glucose (mg/dl)">Glucose (mg/dl)</option>
                <option value="Pulse (beats/min)">Pulse (beats/min)</option>
                <option value="Respiration (beats/min)">Respiration (beats/min)</option>
                <option value="Tempreture (oC)">Temperature (<sup>o</sup>C)</option>
            </select>
        </div>


        <div class="form-group">

            <input type="text" name="reading[]" class="form-control"  required>
        </div>
        <?php
    }
}
function process_emr($id){
           
$length= strlen($id);
$emr_id="";

switch ($length) {
    case 1:
        $emr_id="000000".$id;
        break;
    case 2:
        $emr_id="00000".$id;
        break;
    case 3:
        $emr_id="0000".$id;
        break;
   case 4:
        $emr_id="000".$id;
        break;
  case 5:
        $emr_id="00".$id;
        break;
		case 6:
        $emr_id="0".$id;
        break;
    default:
        $emr_id= $id;
}
return $emr_id;
        }