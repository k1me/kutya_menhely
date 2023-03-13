var elozoScrollPozicio = window.pageYOffset;
window.onscroll = function() {
    var jelenlegiScrollPozicio = window.pageYOffset;
    if (elozoScrollPozicio > jelenlegiScrollPozicio) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-50px";
    }
    if (window.innerWidth < 720) {
        if (elozoScrollPozicio > jelenlegiScrollPozicio) {
            document.getElementById("navbar").style.top = "0";
        } else {
            document.getElementById("navbar").style.top = "-250px";
        }
    }
    elozoScrollPozicio = jelenlegiScrollPozicio;
}