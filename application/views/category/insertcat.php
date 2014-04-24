<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
   
    
    function render($param){
        $CI=& get_instance();
        $CI->load->model('category_model');
        $result=$CI->category_model->selectall_category_m($param);
        foreach($result as $item){
            
            
            $result=$CI->category_model->selectall_category_m($item->id); 
            
                
               if(count($result)==0){
                    echo "<li class='nav-header'><a href=# data-rel=$item->id data-head=$item->head_id>$item->desc</a></li>";
                   
               }else{
                  echo "<li class='tree-toggler nav-header'><span class=icon-plus-sign >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=# data-rel=$item->id data-head=$item->head_id>$item->desc</a></span>";
                        echo "<ul class='nav nav-list tree'>";
                            render($item->id);
                        echo "</ul>";
                    echo "</li>";
                   
               }
                
        }
    }
        
        echo "<ul class='nav nav-list' >";
            render(0);
        echo "</ul>";
       
       

   ?>




<script>



$(function(){
    
        $('.icon-plus-sign').siblings().slideToggle(100);
        $(".icon-plus-sign").hover(function(){
            $(this).css('cursor','pointer');
        });
        
            
            $('.icon-plus-sign').click(function () {
                                 
                    $(this).toggleClass("icon-minus-sign");
                    $(this).siblings().slideToggle(100);

            });  
       
});


</script>


