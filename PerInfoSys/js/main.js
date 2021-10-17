function sug_status(){

  alert("I am an alert box!");
  var stat_check = document.getElementById('status_check').value;
  var status_text = document.getElementById('status').innerHTML;

    if (stat_check = 1){
      status_text = 'Treated';
      stat_check.display = 'none';
    }

    // if (user_category = "Student"){
    //   reg_mat_num.style.display = '';
    //   reg_email.style.display = 'none';
    // }
}