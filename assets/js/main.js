
// PENGATURAN WEBSITE
var $tampil_countdown = true;


// ----- JANGAN UBAH BARIS DI BAWAH INI -----
$.get("templates/navbar.html", function (data) {
    $("#navbar").replaceWith(data);
});
$.get("templates/footer.html", function (data) {
    $("#footer").replaceWith(data);
});

// tampilkan countdown
if ($tampil_countdown ==  true && $("body") != null) {
    try {
        $("head").append('<link href="assets/css/countdown.css" rel="stylesheet">');
        $("body").append('<script src="assets/js/countdown.js"></script>');
        $("#countdown").load("templates/countdown.html");    
    } catch (error) {
            console.log(error);
    }
}