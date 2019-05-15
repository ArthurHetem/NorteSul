function toppilottabs(evt, toppilotshw) {
    var i, toppilotcon, toppilotdet;
    toppilotcon = document.getElementsByClassName("toppilotcon");
    for (i = 0; i < toppilotcon.length; i++) {
        toppilotcon[i].style.display = "none";
    }

    toppilotdet = document.getElementsByClassName("toppilotdet");
    for (i = 0; i < toppilotdet.length; i++) {
        toppilotdet[i].className = toppilotdet[i].className.replace(" act", "");
    }

    document.getElementById(toppilotshw).style.display = "block";
    evt.currentTarget.className += " act";
	
	
}

function toppilottabs1(evt, toppilotshw) {
    var i, toppilotcon1, toppilotdet1;

    toppilotcon1 = document.getElementsByClassName("toppilotcon1");
    for (i = 0; i < toppilotcon1.length; i++) {
        toppilotcon1[i].style.display = "none";
    }

    toppilotdet1 = document.getElementsByClassName("toppilotdet1");
    for (i = 0; i < toppilotdet1.length; i++) {
        toppilotdet1[i].className = toppilotdet1[i].className.replace(" act", "");
    }

    document.getElementById(toppilotshw).style.display = "inline-block";
    evt.currentTarget.className += " act";
	
}

function toppilottabs2(evt, toppilotshw) {
    var i, toppilotcon2, toppilotdet1;

    toppilotcon2 = document.getElementsByClassName("toppilotcon2");
    for (i = 0; i < toppilotcon2.length; i++) {
        toppilotcon2[i].style.display = "none";
    }

    toppilotdet2 = document.getElementsByClassName("toppilotdet2");
    for (i = 0; i < toppilotdet2.length; i++) {
        toppilotdet2[i].className = toppilotdet2[i].className.replace(" act", "");
    }

    document.getElementById(toppilotshw).style.display = "inline-block";
    evt.currentTarget.className += " act";
	
}

function toppilottabs3(evt, toppilotshw) {
    var i, toppilotcon3, toppilotdet1;

    toppilotcon3 = document.getElementsByClassName("toppilotcon3");
    for (i = 0; i < toppilotcon3.length; i++) {
        toppilotcon3[i].style.display = "none";
    }

    toppilotdet3 = document.getElementsByClassName("toppilotdet3");
    for (i = 0; i < toppilotdet3.length; i++) {
        toppilotdet3[i].className = toppilotdet3[i].className.replace(" act", "");
    }

    document.getElementById(toppilotshw).style.display = "inline-block";
    evt.currentTarget.className += " act";
	
}

function toppilottabs4(evt, toppilotshw) {
    var i, toppilotcon4, toppilotdet1;

    toppilotcon4 = document.getElementsByClassName("toppilotcon4");
    for (i = 0; i < toppilotcon4.length; i++) {
        toppilotcon4[i].style.display = "none";
    }

    toppilotdet4 = document.getElementsByClassName("toppilotdet4");
    for (i = 0; i < toppilotdet4.length; i++) {
        toppilotdet4[i].className = toppilotdet4[i].className.replace(" act", "");
    }

    document.getElementById(toppilotshw).style.display = "inline-block";
    evt.currentTarget.className += " act";
	
}
