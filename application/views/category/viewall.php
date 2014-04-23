<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 
 */     

    
    function render($param){
        $CI=& get_instance();
        $CI->load->model('category_model');
        $result=$CI->category_model->selectall_category_m($param);
        foreach($result as $item){
            
            
            $result=$CI->category_model->selectall_category_m($item->id); 
            
                
               if(count($result)==0){
                    echo "<li class='tree-toggler nav-header'><a href=# data-rel=$item->id>$item->desc</a></li>";
                   
               }else{
                  echo "<li class='tree-toggler nav-header'><span class=icon-plus >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=# data-rel=$item->id>$item->desc</a></span></li>";
                   echo "<ul class='nav nav-list tree'>";
                   render($item->id);
                   echo "</ul>";
                   
               }
                
        }
    }
    echo "<ul class='nav nav-list'>";
    render(0);
     echo "</ul>";

   ?>



<script>

$(function(){
    $('.tree-toggler').click(function () {
		$(this).parent().children('ul.tree').toggle(300);
	});
});

</script>

