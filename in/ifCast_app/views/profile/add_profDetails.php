<h3>Employment</h3> <br>
<div id="rowNum_<?php echo $row_num; ?>" style="display:none;">
   <div class="row">
      <div class="form-group col-md-6 col-sm-6 col-xs-12">
         <div class="col-sm-12">
            <div class="input-group">
               <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
               <select id="qualification_<?php echo $row_num; ?>" name="qualification[]" autofocus="autofocus" class="form-control" required>
                  <option value=""> Designation </option>
                  <option value="post_graduate"> Post Graduate </option>
                  <option value="graduate"> Graduate </option>
                  <option value="hsc"> HSC </option>
                  <option value="ssc"> SSC </option>
               </select>
            </div>
            <span class="err" id="err_qualification_<?php echo $row_num; ?>"> </span>
         </div>
      </div>
      <div class="form-group col-md-6 col-sm-6 col-xs-12">
         <div class="col-sm-12">
            <div class="input-group">
               <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
               <select id="course_<?php echo $row_num; ?>" name="course[]" autofocus="autofocus" class="form-control" required>
                  <option value="">Company</option>
                  <option value="course1">course1</option>
                  <option value="course2">course2</option>
                  <option value="course3">course3</option>
               </select>
            </div>
            <span class="err" id="err_course_<?php echo $row_num; ?>"> </span>
         </div>
      </div>
   </div>
   


   <div class="row">
      <div class="form-group col-md-6 col-sm-6 col-xs-12">
         <div class="col-sm-12">
            <div class="input-group">
               <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
               <select id="specialization_<?php echo $row_num; ?>" name="specialization[]" autofocus="autofocus" class="form-control" required>
                  <option value=""> Location </option>
                  <option value="computer"> Computer </option>
                  <option value="bcom"> B-com </option>
                  <option value="math"> Maths </option>
               </select>
            </div>
            <span class="err" id="err_specialization_<?php echo $row_num; ?>"> </span>
         </div>
      </div>
     
   </div>
   <div class="row">
      <div class="form-group col-md-6 col-sm-6 col-xs-12">
         <div class="col-sm-12">
            <div class="input-group">
               <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
               <select id="type_<?php echo $row_num; ?>" name="type[]" autofocus="autofocus" class="form-control">
                  <option value=""> Type-Full/Part </option>
                  <option value="full"> Full </option>
                  <option value="part"> Part </option>
               </select>
            </div>
            <span class="err" id="err_type_<?php echo $row_num; ?>"> </span>
         </div>
      </div>
      <div class="form-group col-md-6 col-sm-6 col-xs-12">
         <div class="col-sm-12">
            <div class="input-group">
               <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
               <select id="passing_year_<?php echo $row_num; ?>" name="passing_year[]" autofocus="autofocus" class="form-control" required>
                  <option value=""> Passing Year</option>
				  <?php
				    for($i=date('Y'); $i >= 2000; $i--)
					{ ?>
						<option value="<?php echo $i; ?>"> <?php echo $i; ?> </option>
				<?php	}
				  ?>
               </select>
            </div>
            <span class="err" id="err_passing_year_<?php echo $row_num; ?>"> </span>
         </div>
      </div>
      <div class="col-md-12 col-sm-12">
         <div class="btn-group" style="float:right; padding-right:15px;">
			<a onClick="removeRow(<?php echo $row_num; ?>);" class="btn btn-sm btn-default">
				<i class="fa fa-plus"></i>Remove
			</a>
		 </div>
      </div>
   </div>
   <hr size="3">
</div>

