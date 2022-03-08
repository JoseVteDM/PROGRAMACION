function bmi() {

    var sheight = parseFloat(document.getElementById('hgt').value);
    var sweight = parseFloat(document.getElementById('wgt').value);
    var bmi = sweight / Math.pow(sheight, 2);
    var student_bmi = document.getElementById('bmi_index');
    student_bmi.textContent = bmi.toFixed(2);
}