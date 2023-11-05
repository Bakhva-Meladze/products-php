function reload() {
    setTimeout(function () {
        location.reload()
    }, 100);
}

function delete_check_box() {
    var select_value = document.getElementById('all').value;
    var checkboxes = document.getElementsByClassName('box');
    var length = checkboxes.length;
    for (var i = 0; i < length; i++) {
        if (select_value === "mass") {
            checkboxes[i].checked = true;
        } else {
            checkboxes[i].checked = false;
        }
    }
}
