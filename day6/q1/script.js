function clean(){
    document.getElementById("pn").value = "";
    document.getElementById("pb").value = "";
    document.getElementById("pc").value = "";
    document.getElementById("pm").value = "";
    document.getElementById("pq").value = "";
    document.getElementById("pd").value = "";
    document.getElementById("pp").value = "";
    var pi = document.getElementById("pi");
    pi.value = pi.defaultValue;

}
function addProduct() {
    var pn = document.getElementById("pn").value;
    var pb = document.getElementById("pb").value;
    var pc = document.getElementById("pc").value;
    var pm = document.getElementById("pm").value;
    var pq = document.getElementById("pq").value;
    var pe = document.getElementById("pd").value;
    var pp = document.getElementById("pp").value;
    var pi = document.getElementById("pi");
    var form = new FormData();
    form.append("pn", pn);
    form.append("pb", pb);
    form.append("pc", pc);
    form.append("pm", pm);
    form.append("pq", pq);
    form.append("pe", pe);
    form.append("pp", pp);
    form.append("pi",pi.files[0]);
    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var text = r.responseText;
            if(text == "1"){
                clean();
            }
        }
    }
    r.open("POST", "process.php", true);
    r.send(form);
}