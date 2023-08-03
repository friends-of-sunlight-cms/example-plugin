$(window).load(function () {
    $("div.example img").click(function () {
        alert(
            "Clicking on this image is provided by the Example plugin.\n"+
            "Kliknutí na tento obrázek zajištuje plugin Example."
        );
    });
});