<aside></aside>
    <section id="main-content">
        <section class="wrapper">                            
            <div class="col-md-12 mt">
                <h3><i class="fa fa-angle-right"></i>จัดการหน่วยงาน</h3>
                    <div class="col-md-12">
                        <div class="content-panel">
	                    <h4><i class="fa fa-angle-right"></i> เพิ่มหน่วยงาน</h4>
	                  	<hr>                                           
                                    <div class="row">
                                       <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">                  
                    <div class="panel-heading">  หน่วยงานภายใน</div>
                    <div class="panel-body">
                         <form role="form" action="<?php echo base_url('AdminPanel/EditAgency'); ?>" method="post">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <label>หน่วยงานภายใน :</label>
                                    <input class="form-control" name = "description" value="<?php echo $agency->description; ?>">
                                </div>
                                 <div class="form-group">
                                     <input type="hidden" name="agency_id" value ="<?php echo $agency->agency_id; ?>"> 
                                
                                    </div>
                                    
                            <button type="submit" class="btn btn-default right">Submit Button</button>
                            <button type="reset" class="btn btn-default right">Reset Button</button>
                            </div>
                           
                        </div>
                        
                        </form>
                    </div>
                </div>                   
                                    </div>
                                            <!-- /.row -->                                         
            <div class="row">
            </div>
        </div>
        <!-- /#page-wrapper -->                            
                </div>                                        
            </div>                                                                                   
        </section>
   
<script type="text/javascript" src="<?php echo base_url("assets/ckeditor/ckeditor.js"); ?>"></script>

         
       
