<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <div class="site_footer_wrapping">

    </div><!--ends site_footer_wrapping-->

</div><!--ends wrapping-->
<script src="<?=base_url()?>resources/vendor/jquery-3.5.0.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>resources/vendor/slick/slick.min.js"></script>
<script src="<?=base_url()?>resources/js/main.js"></script>
<script>
    $(document).ready(()=>{
        //update time
        var dt = new Date();
        document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"-"+ 
        (("0"+(dt.getMonth()+1)).slice(-2)) +"-"+ (dt.getFullYear()) +" | "+ (("0"+dt.getHours()).slice(-2)) 
        +":"+ (("0"+dt.getMinutes()).slice(-2))+":"+ (("0"+dt.getSeconds()).slice(-2));
    });
</script>
</body>
</html>