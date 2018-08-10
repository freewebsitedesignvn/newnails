function setCookie(c_name, value, exdays) {
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
    document.cookie = c_name + "=" + c_value;
}

function getCookie(c_name) {
    var i, x, y, ARRcookies = document.cookie.split(";");
    for (i = 0; i < ARRcookies.length; i++) {
        x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
        y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
        x = x.replace(/^\s+|\s+$/g, "");
        if (x == c_name) {
            return unescape(y);
        }
    }
}


function soundupdate() {
    var playing = getCookie('playing');
    if (!played) {
        if (playing != "0") {
            if (tillPlayed) {
                song.currentTime = tillPlayed;
                song.play();
                played = true;
            }
            else {
                song.play();
                played = true;
            }
        }
    }

    else {
        if (document.getElementById('wmusic').style.display != "none") {
            setCookie('timePlayed', song.currentTime);
        }
    }
}

function continueSound() {
    if (song.paused) {
        //Play sound
        setCookie('playing', '1');
        song.play();
    }
    else {
        //Pause Sound
        setCookie('playing', '0');
        song.pause();
    }
}

function checkSound() {
    var playing = getCookie('playing');
    if (!playing) {
        playing = "1";
        setCookie('playing', '1');
    }
    if (playing != "1") {
        document.getElementById('wmusic').style.display = "none";
        document.getElementById('soundbutton').style.background = "url(images/soundon.png) 0px 0px no-repeat";
    }
}


$(document).ready(function () {

    $("#soundbutton").click(function () {
        if ($("#wmusic").css("display") != "none") {
            $("#soundbutton").css("background", "url(images/soundon.png) 0px 0px no-repeat");
            $("#wmusic").css("display", "none");
        }
        else {
            $("#soundbutton").css("background", "url(images/soundoff.png) 0px 0px no-repeat");
            $("#wmusic").css("display", "block");
        }

    });

});