<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
   
    
    function makelist($param){
        $CI=& get_instance();
        $CI->load->helper('form');
        $CI->load->library('form_validation');
        $CI->load->model('category_model');
         
            
            
            
        $result=$CI->category_model->selectall_category_m($param);
        foreach($result as $item){
            
            
            $result=$CI->category_model->selectall_category_m($item->id); 
            
                
               if(count($result)==0){
                    echo "<li class='nav-header'><a href=# data-id=$item->id data-rel=$item->desc data-head=$item->head_id>$item->desc</a></li>";
                   
               }else{
                  echo "<li class='tree-toggler nav-header'><span class=icon-plus-sign >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=# data-id=$item->id data-rel=$item->desc data-head=$item->head_id>$item->desc</a></span>";
                        echo "<ul class='nav nav-list tree'>";
                            makelist($item->id);
                        echo "</ul>";
                    echo "</li>";
                   
               }                
        }
    }
        
        
       
       

   ?>
<div class="row-fluid">
<div class="span4">
<?
    echo "<ul class='nav nav-list' >";
            makelist(0);
    
            ?>
    </div>
<div class="span3 rightside">
        <?echo form_open($formname);?>
        <label for="categoryname" >Category Name</label>

            <input type="text" name="categoryname" placeholder="Categoryname"  ><?echo form_error('categoryname');?>
            <input type="hidden" name="parent_id">
            
        <label for="family">Main category</label>
            <input type="text" name="family" placeholder="family of Main Category" ><?echo form_error('family');?>
            <div></div>
            
           
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="reset" class="btn">Reset</button>
    
</form>
    </div>
</div>



<script>



$(function(){
        $(".rightside").hide();
        
        $('.icon-plus-sign').siblings().slideToggle(100);
        $(".icon-plus-sign").hover(function(){
            $(this).css('cursor','pointer');
        });
            
            $('.nav-list a').dblclick(function(){
               
                    var headid=$(this).attr('data-id');
                    var family=$(this).text();
                     $("input[name='parent_id']").val(headid);
                     $("input[name='family']").val(family);
                     
                     $(".rightside").show("slow");
             });
            
            
            $('.icon-plus-sign').click(function () {
                                 
                    $(this).toggleClass("icon-minus-sign");
                    $(this).siblings().slideToggle(100);

            });  
       
});


</script>


