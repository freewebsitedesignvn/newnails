<style type="text/css">
    body {
        margin-top:40px;
    }
    .stepwizard-step p {
        margin-top: 10px;
    }
    .stepwizard-row {
        display: table-row;
    }
    .stepwizard {
        display: table;
        /*width: 50%;*/
        position: relative;
    }
    .stepwizard-step button[disabled] {
        opacity: 1 !important;
        filter: alpha(opacity=100) !important;
    }
    .stepwizard-row:before {
        top: 14px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 100%;
        height: 1px;
        background-color: #ccc;
        z-order: 0;
    }
    .stepwizard-step {
        display: table-cell;
        text-align: center;
        position: relative;
    }
    .btn-circle {
        width: 30px;
        height: 30px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 15px;
    }
</style>
<!-- ---------------------- -->
<div class="container">
  
    <!-- <div class="stepwizard col-md-offset-2"> -->
    <div class="stepwizard col-xs-11">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                <p>Date</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p>Photo</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p>Position</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                <p>Customers</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                <p>Save</p>
            </div>
        </div>
    </div>

    <form role="form" action="" method="post" id="promotionform">
        <div class="row setup-content" id="step-1">
            <div class="col-xs-11">
                <div class="col-md-12">
                    <h3> Step 1</h3>
                    <?php include_once 'addpromotion_date.php'; ?><br>
                    <button class="btn btn-primary nextBtn btn-lg pull-left" type="button" >Next</button>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-2">
            <div class="col-xs-11">
                <div class="col-md-12">
                    <h3> Step 2</h3>
                    <?php include_once 'addpromotion_photo.php'; ?>
                    <button class="btn btn-primary nextBtn btn-lg pull-left" type="button" >Next</button>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-3">
            <div class="col-xs-11">
                <div class="col-md-12">
                    <h3> Step 3</h3>
                    
                    <button class="btn btn-primary nextBtn btn-lg pull-left" type="button" >Next</button>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-4">
            <div class="col-xs-11">
                <div class="col-md-12">
                    <h3> Step 4</h3>
                    
                    <button class="btn btn-primary nextBtn btn-lg pull-left" type="button" >Next</button>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-5">
            <div class="col-xs-11">
                <div class="col-md-12">
                    <h3> Step 5</h3>
                    <button class="btn btn-success btn-lg pull-left" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </form>

</div>
<!-- ----------------------- -->
<script type="text/javascript">
    $(document).ready(function () {
      var navListItems = $('div.setup-panel div a'),
              allWells = $('.setup-content'),
              allNextBtn = $('.nextBtn');

      allWells.hide();

      navListItems.click(function (e) {
          e.preventDefault();
          var $target = $($(this).attr('href')),
                  $item = $(this);

          if (!$item.hasClass('disabled')) {
              navListItems.removeClass('btn-primary').addClass('btn-default');
              $item.addClass('btn-primary');
              allWells.hide();
              $target.show();
              $target.find('input:eq(0)').focus();
          }
      });

      allNextBtn.click(function(){
          var curStep = $(this).closest(".setup-content"),
              curStepBtn = curStep.attr("id"),
              nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
              curInputs = curStep.find("input[type='text'],input[type='url']"),
              isValid = true;

          $(".form-group").removeClass("has-error");
          for(var i=0; i<curInputs.length; i++){
              if (!curInputs[i].validity.valid){
                  isValid = false;
                  $(curInputs[i]).closest(".form-group").addClass("has-error");
              }
          }

          if (isValid)
              nextStepWizard.removeAttr('disabled').trigger('click');
      });

      $('div.setup-panel div a.btn-primary').trigger('click');
    });
</script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
// just for the demos, avoids form submit
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$("#promotionform").validate({
  rules: {
    from: {
      required: true,
      date: true
    }
  }
});
</script>
<!-- <style type="text/css">
    .process-step .btn:focus{outline:none}
    .process{display:table;width:100%;position:relative}
    .process-row{display:table-row}
    .process-step button[disabled]{opacity:1 !important;filter: alpha(opacity=100) !important}
    .process-row:before{top:40px;bottom:0;position:absolute;content:" ";width:100%;height:1px;background-color:#ccc;z-order:0}
    .process-step{display:table-cell;text-align:center;position:relative}
    .process-step p{margin-top:4px}
    .btn-circle{width:80px;height:80px;text-align:center;font-size:12px;border-radius:50%}
</style>
<div class="container">
    <div class="row">
        <div class="process">
            <div class="process-row nav nav-tabs">
                <div class="process-step">
                    <button type="button" class="btn btn-info btn-circle" data-toggle="tab" href="#menu1"><i class="fa fa-info fa-3x"></i></button>
                    <p><small>Fill<br />information</small></p>
                </div>
                <div class="process-step">
                    <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu2"><i class="fa fa-file-text-o fa-3x"></i></button>
                    <p><small>Fill<br />description</small></p>
                </div>
                <div class="process-step">
                    <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu3"><i class="fa fa-image fa-3x"></i></button>
                    <p><small>Upload<br />images</small></p>
                </div>
                <div class="process-step">
                    <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu4"><i class="fa fa-cogs fa-3x"></i></button>
                    <p><small>Configure<br />display</small></p>
                </div>
                <div class="process-step">
                    <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu5"><i class="fa fa-check fa-3x"></i></button>
                    <p><small>Save<br />result</small></p>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div id="menu1" class="tab-pane fade active in">
                <h3>Menu 1</h3>
                <p>Some content in menu 1.</p>
                <ul class="list-unstyled list-inline pull-left">
                    <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
                </ul>
            </div>
            <div id="menu2" class="tab-pane fade">
                <h3>Menu 2</h3>
                <p>Some content in menu 2.</p>
                <ul class="list-unstyled list-inline pull-left">
                    <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
                    <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
                </ul>
            </div>
            <div id="menu3" class="tab-pane fade">
                <h3>Menu 3</h3>
                <p>Some content in menu 3.</p>
                <ul class="list-unstyled list-inline pull-left">
                    <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
                    <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
                </ul>
            </div>
            <div id="menu4" class="tab-pane fade">
                <h3>Menu 4</h3>
                <p>Some content in menu 4.</p>
                <ul class="list-unstyled list-inline pull-left">
                    <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
                    <li><button type="button" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></button></li>
                </ul>
            </div>
            <div id="menu5" class="tab-pane fade">
                <h3>Menu 5</h3>
                <p>Some content in menu 5.</p>
                <ul class="list-unstyled list-inline pull-left">
                    <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</button></li>
                    <li><button type="button" class="btn btn-success"><i class="fa fa-check"></i> Done!</button></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function(){
        $('.btn-circle').on('click',function(){
            $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');
            $(this).addClass('btn-info').removeClass('btn-default').blur();
        });

        $('.next-step, .prev-step').on('click', function (e){
            var $activeTab = $('.tab-pane.active');

            $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');

            if ( $(e.target).hasClass('next-step') )
            {
                var nextTab = $activeTab.next('.tab-pane').attr('id');
                $('[href="#'+ nextTab +'"]').addClass('btn-info').removeClass('btn-default');
                $('[href="#'+ nextTab +'"]').tab('show');
            }
            else
            {
                var prevTab = $activeTab.prev('.tab-pane').attr('id');
                $('[href="#'+ prevTab +'"]').addClass('btn-info').removeClass('btn-default');
                $('[href="#'+ prevTab +'"]').tab('show');
            }
        });
    });
</script> -->
