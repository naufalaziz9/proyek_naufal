var numeric = document.getElementById('numeric');
var kotak = document.getElementById('konten');
numeric.addEventListener("click", function () {


    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            kotak.innerHTML = xhr.responseText;
        }
    }
    console.log(numeric.value)
    xhr.open('GET', "uang.php?jumlah=" + numeric.value, true);

    xhr.send();



})