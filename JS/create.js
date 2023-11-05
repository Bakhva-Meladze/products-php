function myFunction($this) {
    var select_value = document.getElementById('select').value;
    var size = document.getElementById('size');
    var weight = document.getElementById('weight');
    var height = document.getElementById('height');
    if (select_value === 'dvd') {
        size.style.display = "block";
        weight.style.display = "none";
        height.style.display = "none";
    }
    else if (select_value === "book") {
        weight.style.display = "block";
        height.style.display = "none";
        size.style.display = "none";
    }
    else if (select_value === 'furniture') {
        weight.style.display = "none";
        height.style.display = "block";
        size.style.display = "none";
    }
}


