<script>

function get_emr(str){
     var xhttp;
        if (str == "") {
            document.getElementById("emr").value = "";
            return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("emr").value = this.responseText;
            }
        };
        xhttp.open("GET", "../../ajax/response.php?emr=" + str, true);
        xhttp.send();
}
    function get_prescription_form(str) {
        var xhttp;
        if (str == "") {
            document.getElementById("p_form").innerHTML = "";
            return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("p_form").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "../../ajax/response.php?q=" + str, true);
        xhttp.send();
    }
	function get_prescription_form_in_modal(str) {
        var xhttp;
        if (str == "") {
            document.getElementById("p_mform").innerHTML = "";
            return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("p_mform").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "../../ajax/response.php?m=" + str, true);
        xhttp.send();
    }
    function renderVitalSignForm(str){
        var xhttp;
        if (str == "") {
            document.getElementById("vitals").innerHTML = "";
            return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("vitals").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "../../ajax/response.php?vital_sign=" + str, true);
        xhttp.send();
    }
</script>