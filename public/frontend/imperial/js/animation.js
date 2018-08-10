$(document).ready(function () {
    var $window = $(window);
    var windowsize = $window.width();
    var Interval;
    Bannerauto();
    function Bannerauto() {
//        Interval = setInterval(function () {
//            if ($(".groupbanner").is(":hover") == false) {
//                BannerNext(4);
//            }
//        }, 8000);
    }

    $(".next").click(function () {
        var id = $(this).attr("id").replace("next", "");
        BannerClick(id);
        clearTimeout(Interval);
        Bannerauto();
    });

    //go top
    $("#gotop").click(function () {
        window.scrollTo(0, 0);
    });
    //go top

    //top an va hien
    $(window).scroll(showDiv);
    function showDiv() {
        if ($(window).scrollTop() > 300) {
            $('#gotop').fadeIn('slow');
        }
        else {
            $('#gotop').fadeOut('slow');
        }
    }
    //top an va hien

    //Notification
    $("#closenoti").click(function () {
        $("#groupnoti").css("display", "none");
    });
    //End Notification

    // ham chay banner
    function BannerClick(number) {
        for (i = 1; i <= 4; i++) {
            //close old banner
            if (i != number) {
                $("#banner" + i.toString()).fadeOut(800);
                $("#next" + i.toString()).css('background', 'url(images/next.png)0px 0px no-repeat');
            }
            //open new banner
            else {
                $("#banner" + i.toString()).fadeIn(600);
                $("#next" + i.toString()).css('background', 'url(images/next.png)0px -16px no-repeat'); //giu nut hover
                $("#flag").html(i.toString());
            }
        }

    }


    function BannerNext(count) {
        var iNext;
        iNext = $("#flag").html();
        $("#banner" + iNext.toString()).fadeOut(800);
        $("#next" + iNext.toString()).css('background', 'url(images/next.png)0px 0px no-repeat');
        if (iNext == count) {
            iNext = "1";
        }
        else {
            iNext = (parseInt(iNext) + 1).toString();
        }
        $("#banner" + iNext.toString()).fadeIn(600);
        $("#next" + iNext.toString()).css('background', 'url(images/next.png)0px -16px no-repeat'); //giu nut hover
        $("#flag").html(iNext.toString());
    }

    //End ham chay banner


    //chay menutrong mobile    

    var playmenu = "1";
    $(".menuimg").click(function () {
        if (playmenu == "1") {
            Menu_mlick1();
        }
        else {
            Menu_mlick2();
        }
    });
    function Menu_mlick1() {
        $(".menu_m").stop(true, true).animate({ height: "465px" }, 400);
        playmenu = "0";
    }
    function Menu_mlick2() {
        $(".menu_m").stop(true, true).animate({ height: "0px" }, 400);
        playmenu = "1";
    }





    //opt bar
    $("#otpsubmit").click(function () {
        $("#otpsubmit").fadeOut(50);
        var sNotify = "";
        if ($("#firstname").val() == "") {
            sNotify += "* Please input the first name<br/>";
        }
        if ($("#lastname").val() == "") {
            sNotify += "* Please input the last name<br/>";
        }
        if ($("#email").val() == "") {
            sNotify += "* Please input the Email<br/>";
        }
        else {
            if (!checkEmail($("#email").val())) {
                sNotify += "*Invalid Email<br/>";
            }
        }

        if (sNotify != "") {
            $("#optnotifycontent").html(sNotify);
            $("#optnotify").fadeIn(50);
            $("#otpsubmit").fadeIn(50);
        }
        else {
            var sFirstName = $("#firstname").val();
            var sLastName = $("#lastname").val();
            var sEmail = $("#email").val();
            $.ajax(
            {
                type: "POST",
                url: "process.aspx/optemail",
                data: "{'sFirstName':'" + sFirstName + "','sLastName':'" + sLastName + "','sEmail':'" + sEmail + "'}",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                async: "true",
                cache: "false",

                success: function (msg) {
                    if (msg.d == "0") {
                        $("#optnotifycontent").html("Your infomation has been submitted. Thank you!");
                        $("#optnotify").fadeIn(50);
                        $("#firstname").val("");
                        $("#lastname").val("");
                        $("#email").val("");
                    }
                    else {
                        $("#optnotifycontent").html("This email has been added. Please enter another email!");
                        $("#optnotify").fadeIn(50);
                        $("#email").val("");
                    }
                    $("#otpsubmit").fadeIn(50);
                },

                Error: function (x, e) {
                    $("#optnotifycontent").html("Some Error! Please try again later");
                    $("#optnotify").fadeIn(50);
                }
            });

        }

    });

    $("#notifyok").click(function () {
        $("#optnotifycontent").html("");
        $("#optnotify").fadeOut(50);
    });

    function checkEmail(email) {
        var filter = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(email)) {
            return false;
        }
        else {
            return true;
        }
    }

    //opt bar
    //Contact Form
    $("#bSend").click(function () {
        $("#bSend").fadeOut(50);
        $("#formwait").fadeIn(20);

        //Check form
        var sNotify = "";

        //Name
        if ($("#txtName").val() == "") {
            sNotify += "* Please input the first name<br/>";
        }

        //Email
        if ($("#txtEmail").val() == "") {
            sNotify += "* Please input the Email<br/>";
        }
        else {
            if (!checkEmail($("#txtEmail").val())) {
                sNotify += "*Invalid Email<br/>";
            }
        }

        //Phone
        if ($("#txtPhone").val() == "") {
            sNotify += "* Please input your phone number<br/>";
        }
        else {
            if (!checkPhone($("#txtPhone").val())) {
                sNotify += "*Invalid Phone Number<br/>";
            }
        }

        //Content
        //Name
        if ($("#txtContent").val() == "") {
            sNotify += "* Please input the message<br/>";
        }

        if (sNotify != "") {
            $("#formnotifycontent").html(sNotify);
            $("#formnotify").fadeIn(50);
            $("#bSend").fadeIn(50);
            $("#formwait").fadeOut(20);
        }
        else {
            var sName = $("#txtName").val();
            var sEmail = $("#txtEmail").val();
            var sPhone = $("#txtPhone").val();
            var sContent = $("#txtContent").val();

            $.ajax(
            {
                type: "POST",
                url: "process.aspx/contactus",
                data: "{'sName':'" + sName + "','sEmail':'" + sEmail + "','sPhone':'" + sPhone + "','sContent':'" + sContent + "'}",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                async: "true",
                cache: "false",

                success: function (msg) {
                    if (msg.d == "0") {
                        $("#formnotifycontent").html("Your message has been sent. Thank you!");
                        $("#formnotify").fadeIn(50);
                        $("#txtName").val("");
                        $("#txtEmail").val("");
                        $("#txtPhone").val("");
                        $("#txtContent").val("");
                    }
                    $("#formwait").fadeOut(20);
                    $("#formsubmit").fadeIn(50);
                },

                Error: function (x, e) {
                    $("#formnotifycontent").html("Some Error! Please try again later");
                    $("#formnotify").fadeIn(50);
                }
            });
        }
    });

    $("#formnotifyok").click(function () {
        $("#formnotifycontent").html("");
        $("#formnotify").fadeOut(50);
    });

    function checkEmail(email) {
        var filter = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(email)) {
            return false;
        }
        else {
            return true;
        }
    }

    function checkPhone(email) {
        var filter = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
        if (!filter.test(email)) {
            return false;
        }
        else {
            return true;
        }
    }
    //Contact Form


});
function myNavFunc() {
    // If it's an iPhone..
    var p = navigator.platform;
    if (p === 'iPad' || p === 'iPhone' || p === 'iPod') {
        window.open("http://maps.apple.com/?address=5406236017");
    }
    else {
        window.open("http://maps.google.com/?q=Imperial+Salon+and+Day+Spa+Stafford+1425+Stafford+Market+Pl+Stafford+VA+22556");
    }
}