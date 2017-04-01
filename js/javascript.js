    function check_pass(){
    if (document.getElementById('password').value==document.getElementById('confirm_password').value){
 document.getElementById('sub').disabled = false;
  document.getElementById('message').innerHTML = "";

}
else {
 document.getElementById('sub').disabled = true;
       document.getElementById('message').innerHTML = "*passwords do not match";

}
    }