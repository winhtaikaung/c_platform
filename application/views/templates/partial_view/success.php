<script>
    
$(function(){
        <?if(isset($notify_msg) && isset($notify_type)){?>

                event.preventDefault();
		var options = $.parseJSON('{"text":"<?=$notify_msg?>","layout":"top","type":"<?=$notify_type?>"}');
                console.log(options);
               noty(options);
                    
                <?}else{echo '';}?>
});
</script>
    


