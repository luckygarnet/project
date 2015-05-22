<aside></aside>
    <section id="main-content">
        <section class="wrapper">                            
            <div class="col-md-12 mt">
                <h3><i class="fa fa-angle-right"></i> เกณฑ์การประเมิน</h3>
                    <div class="col-md-12">
                        <div class="content-panel">
	                    <h4><i class="fa fa-angle-right"></i> เกณฑ์การประเมิน</h4>
	                  	<hr>                                           
                                    <div class="row">
                                        <div class="col-md-12 mt">
                                            <div class="panel panel-default">                  
                                                <div class="panel-heading">

                                                    <form role="form" action="<?php echo base_url(); ?>AdminPanel/AddSubindicator" method="post">
                                                        <div class="form-group">
                                                            <label>เกณฑ์การประเมิน</label>
                                                            <textarea  class="ckeditor form-control" name = "detail" rows="3">

                                                            </textarea>
                                                            <div id="txtEditor"></div>

                                                        </div>
                                                        <div class="form-group">
                                                            <input type="hidden" name="indicator_id" value ="<?php echo $indicator->indicator_id; ?>"> 

                                                        </div>
                                                        <button type="submit" class="btn btn-default right">Submit Button</button>
                                                        <button type="reset" class="btn btn-default right">Reset Button</button>
                                                    </form>
                                                </div>                  
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

         
       
