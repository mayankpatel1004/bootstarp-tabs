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