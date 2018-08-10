
<div class="groupcontent">
    <div class="content">
        <h2>Reviews</h2>
        <div class="groupreviews_bt">  
            <div class="reviewsus">Review us on:</div>                                             
            <a href="http://www.yelp.com/biz/imperial-salon-and-day-spa-stafford" target="_blank" class="review_bt yelp"></a>
            <a href="#" target="_blank" class="review_bt pages"></a>
            <a href="https://www.google.com/search?ludocid=13547143501949678584&q=Imperial%20Salon%20and%20Day%20Spa%20Stafford%201425%20Stafford%20Market%20Place%20%20%20%20%20%20Stafford%20VA%2022556&_ga=2.56046635.1856711181.1523894638-1757815232.1513018131/about" target="_blank" class="review_bt google"></a>
            <a href="https://www.facebook.com/imperialsalonnspastafford/reviews?ref=page_internal" target="_blank" class="review_bt fb"></a>
        </div>

        <div id="reviewsgroup"></div>

        <script type="text/javascript">
            $(document).ready(function () {
                fLoadReview();
                $("#moreBtn").click(function () {
                    fLoadReview();
                    $("#formwait").fadeIn(20);
                    $("#moreBtn").css("display", "none");
                });
                function fLoadReview() {
                    var sPage;
                    sPage = $("#divPage").html();
                    $.ajax(
                        {
                            type: "POST",
                            url: "process.aspx/sReview",
                            data: "{'sPage':'" + sPage + "'}",
                            contentType: "application/json; charset=utf-8",
                            dataType: "json",
                            async: "true",
                            cache: "false",
                            success: function (msg) {
                                $("#reviewsgroup").html($("#reviewsgroup").html() + msg.d);
                                sPage = parseInt(sPage) + 1;
                                $("#divPage").html(sPage);
                                $("#moreBtn").css("display", "block");
                                $("#formwait").fadeOut(20);
                            },
                            Error: function (x, e) {
                                alert("Some error");
                            }
                        });
                }
            });
        </script>    
    
    <div class="box-viewmore">
        <input type="button" id="moreBtn" class="viewmore" value="More">
        <div id="formwait">Please wait...</div>
    </div>
    </div>
</div>
