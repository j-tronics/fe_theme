var element = document.getElementById('birs_client_password');
if (typeof(element) != 'undefined' && element != null) {
    var password = Math.random().toString(36).slice(2) + Math.random().toString(36).slice(2);
    document.getElementById('birs_client_password').value = password;
    document.getElementById('birs_client_password_retype').value = password;
}


window.onload = function () {
    var chosenValue = Math.random() < 0.5 ? "Erin R" : "Javier";


    var sel = document.getElementById('birs_appointment_staff');
    var opts = sel.options;


    for (var opt, j = 0; opt = opts[j]; j++) {
        console.log(opt);
        if (opt.text == chosenValue) {
            sel.selectedIndex = j;
        }
    }

};