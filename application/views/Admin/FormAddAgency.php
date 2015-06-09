<section id="main-content">
    <section class="wrapper">
         <h3><i class="fa fa-angle-right"></i> การจัดการหน่วยงาน</h3>
        <div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> เพิ่มหน่วยงาน</h4> 
                          <form method="post" class="form-horizontal style-form" action="<?php echo base_url('AdminPanel/AddAgency'); ?>">
                          
                         
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textinput">หน่วยงานภายใน</label>            
                                <input type="text" class="form-control round-form" style=" width: 50%" >
                                </div>                             
                                                    
                          <button type="submit" class="btn btn-default right">Submit Button</button>
                            <button type="reset" class="btn btn-default right">Reset Button</button>                     
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div>