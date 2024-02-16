window.onload = function () {
    var page = 1;

    let siguiente_button = document.getElementById("siguiente_button")
    let atras_button = document.getElementById("atras_button")
    
    
    siguiente_button.addEventListener("click", function () {
        let xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            console.log(xhttp.responseText)
        }

        xhttp.open("GET", `controller/Controller.php?next=${true}`, true)
        xhttp.send();

        window.location.reload(true)
    });

    atras_button.addEventListener("click", function () {
        let xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            console.log(xhttp.responseText)
        }
        xhttp.open("GET", `controller/Controller.php?prev=${true}`, true);
        xhttp.send();
        window.location.reload(true)
    });
}