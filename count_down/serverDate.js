var xmlHttp;

function srvTime() {
    try {
        xmlHttp = new XMLHttpRequest();
    } catch (err1) {
        try {
            xmlHttp = new ActiveXObject('Msxml2.XMLHTTP');
        } catch (err2) {
            try {
                xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
            } catch (eerr3) {
                alert("AJAX not supported");
            }
        }
    }
    xmlHttp.open('HEAD', window.location.href.toString(), false);
    xmlHttp.setRequestHeader("Content-Type", "text/html");
    xmlHttp.send('');
    return xmlHttp.getResponseHeader("Date");
}
$.ajax({
    type: "POST",
    data: "",
    url: "ajax-get-server-time.php",
    success: function(result) {
        $("#time_div").html(result);
    }
});
var st = srvTime();
var date = new Date(st);