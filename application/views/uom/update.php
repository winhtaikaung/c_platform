
<?echo form_open($formname);?>
    <label for="uomname" >UOM name</label>
    
        <input type="text" name="uomname" placeholder="uomname" value='' ><?echo form_error('uomname');?>
    <label for="remark">Remark</label>
        <input type="text" name="remark" placeholder="remark" value='' ><?echo form_error('remark');?>
        <div></div>
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="reset" class="btn">Reset</button>
    
</form>