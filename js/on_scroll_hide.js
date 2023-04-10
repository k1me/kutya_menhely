var elozoScrollPozicio = window.pageYOffset;
window.onscroll = function() {
    var jelenlegiScrollPozicio = window.pageYOffset;
    if (elozoScrollPozicio > jelenlegiScrollPozicio) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-100px";
    }
    if (window.innerWidth < 800) {
        if (elozoScrollPozicio > jelenlegiScrollPozicio) {
            document.getElementById("navbar").style.top = "0";
        } else {
            document.getElementById("navbar").style.top = "-350px";
        }
    }
    elozoScrollPozicio = jelenlegiScrollPozicio;
}