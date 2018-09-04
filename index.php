<?php /* ?>
  <script type="text/javascript" >
  $(function () {
  $('#tabs').tabs({
  activate: function (event, ui) {
  var $activeTab = $('#tabs').tabs('option', 'active');
  if ($activeTab == 1) {
  // HERE YOU CAN ADD CODE TO RUN WHEN THE SECOND TAB HAS BEEN CLICKED
  }
  }
  });
  });
  </script>
  <script type="text/javascript" >
  $(function () {
  $('#tabs').tabs({
  show: function (event, ui) {
  var $activeTab = $('#tabs').tabs('option', 'active');
  if ($activeTab == 1) {
  // HERE YOU CAN ADD CODE TO RUN WHEN THE SECOND TAB HAS BEEN CLICKED
  }
  }
  });
  });
  </script>




  <!doctype html>
  <html lang="en">
  <head>
  <title></title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  </head>
  <body>
  <div id="tabs">
  <ul>
  <li><a href="#tabs-1">Tab #1</a></li>
  <li><a href="#tabs-2">Iframe Tab</a></li>
  <li><a href="#tabs-3">Tab #3</a></li>
  <li><a href="#tabs-4">Tab #4</a></li>
  </ul>
  <div id="tabs-1">
  here is content for tab #1
  </div>
  <div id="tabs-2">

  </div>
  <div id="tabs-3">
  here is content for tab #3
  </div>
  <div id="tabs-4">
  here is content for tab #4
  </div>
  </div>
  <script type="text/javascript" >
  $(function () {
  $('#tabs').tabs({
  activate: function (event, ui) {
  var $activeTab = $('#tabs').tabs('option', 'active');
  if ($activeTab == 1) {
  $('#ifrTest').attr('src', 'NewPage.aspx');
  }
  }
  });
  });
  </script>
  </body>
  </html>
  <?php */ ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
    jQuery(function () {
        jQuery('.showSingle').click(function () {
            jQuery('.targetDiv').hide();
            jQuery('#div' + $(this).attr('target')).show();
        });
        
    });
    jQuery(document).ready(function(){
        //setTimeout(function(){
            jQuery("#singlecalled").click();
        //}, 1000);
        
    });
</script>
<div class="buttons">
    <a class="showSingle" id="singlecalled" target="1">Div 1</a>
    <a class="showSingle" target="2">Div 2</a>
    <a class="showSingle" target="3">Div 3</a>
</div>

<div id="div1" class="targetDiv">Lorum Ipsum1</div>
<div id="div2" class="targetDiv">Lorum Ipsum2</div>
<div id="div3" class="targetDiv">Lorum Ipsum3</div>