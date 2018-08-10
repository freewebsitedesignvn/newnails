<?php 
  // $this->myclass->indulieu($data);
 ?>
<div class="groupcontent">
  <div class="content">
      <h2>Jobs</h2>
      <?php if ($data): ?>
        <div class="jobsnote">
            <p>We are hiring have licensed as information below:</p>
            <?php foreach ($data as $key => $set): ?>
              <ul>
                <li>
                    <h3><?= $set['a_title'] ?></h3>
                    <p><?= $set['a_description'] ?></p>
                    <p><?= $set['a_content'] ?></p>
                </li>
              </ul>
            <?php endforeach ?>
            <p>Please fill out the form and click submit. One of our managers will contact you shortly.</p>
            
        </div>
        <div>
            <iframe id="JotFormIFrame" onload="window.parent.scrollTo(0,0)" allowtransparency="true" src="http://form.jotform.me/form/43639194147462" frameborder="0" style="width:100%; height:487px; border:none;" scrolling="no"></iframe>
            <script type="text/javascript">    window.handleIFrameMessage = function (e) { var args = e.data.split(":"); var iframe = document.getElementById("JotFormIFrame"); if (!iframe) return; switch (args[0]) { case "scrollIntoView": iframe.scrollIntoView(); break; case "setHeight": iframe.style.height = args[1] + "px"; break; case "collapseErrorPage": if (iframe.clientHeight > window.innerHeight) { iframe.style.height = window.innerHeight + "px"; } break; case "reloadPage": window.location.reload(); break; } }; if (window.addEventListener) { window.addEventListener("message", handleIFrameMessage, false); } else if (window.attachEvent) { window.attachEvent("onmessage", handleIFrameMessage); }</script>
        </div>
      <?php else: ?>
        
      <?php endif ?>
      
  </div>
</div>