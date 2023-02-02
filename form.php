<div class="col-md-4 col-sm-12 form-group">
    <label for="register-form-name">Select Premises:</label>
    <select name="premises_id"  class="form-control" / required>
        <option value="<?php if(isset($row)) { echo $row['premises_id']; }?>"><?php if(isset($row)) { echo $row['premises_name']; } ?></option>
        <option value="1">Office</option>
        <option value="2">House</option>
    </select>
</div>
<div class="col-md-4 col-sm-12 form-group">
    <label for="register-form-name">Electricity:</label>
    <input type="text" name="electricity" value="<?php if(isset($row)) { echo $row['electricity']; } ?>" class="form-control" / required>
</div>
<div class="col-md-4 col-sm-12 form-group">
    <label for="register-form-name">Water:</label>
    <input type="text" name="water" value="<?php if(isset($row)) { echo $row['water']; } ?>" class="form-control" / required>
</div>
<div class="col-md-12 col-sm-12 form-group">
    <label for="register-form-name">Remarks:</label>
    <textarea class="form-control" name="remarks" placeholder="type any comments..."><?php if(isset($row)) { echo $row['remarks']; } ?></textarea>
</div>