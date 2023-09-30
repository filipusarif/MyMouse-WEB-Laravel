// notifikasi Mulai
function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        document.getElementById("notif").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "../php/notifikasi.php", true);
    xhttp.send();
    }
    loadDoc();
    //notifikasi Selesai
function loadDocIndex() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        document.getElementById("notif").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "php/notifikasi.php", true);
    xhttp.send();
    }
    loadDocIndex();
    //notifikasi Selesai