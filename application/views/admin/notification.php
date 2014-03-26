<?php


?>

<script type="text/javascript">
        var count=null;
        function pollingmvc(){
            
            
            $.ajax({
            
                type: "GET",
                url: "<?=  base_url();?>admin/getcount?count"+count,
                async: true,
                cache: false,
                success:function(data){

                    var json=eval('('+data+ ')');
                    console.log(json[0].count);
                    $("#newscount").empty();
                    $("#newscount").append(json[0].count);
                    $("#msgcount").empty();
                    $("#msgcount").append(json[0].count);
                    
                    $("a[data-rel='tooltip']").attr("data-original-title","");
                    
                    $("a[data-rel='tooltip']").attr("data-original-title",""+json[0].count+"new messages.");
                    count =json[0].count;
                    console.log(count);
                    setTimeout("pollingmvc()",10000);
                },
		error: function(XMLHttpRequest,textStatus,errorThrown) {
	//	 alert("error: "+textStatus + "  "+ errorThrown  );
		setTimeout("pollingmvc()",150000);
		}
            
            });
        }
        
        
        
    $(function(){
        pollingmvc();
        
    });

</script>

<a href="#" class="well span3 top-block" data-rel="tooltip" data-original-title="12 new messages.">
					<span class="icon32 icon-color icon-envelope-closed"></span>
					<div>Messages</div>
					<div id="msgcount" >&nbsp;</div>
					<span class="notification red" id="newscount">&nbsp;</span>
				</a>