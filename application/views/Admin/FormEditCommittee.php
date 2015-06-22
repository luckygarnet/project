    <section id="main-content">
        <section class="wrapper">                            
            <div class="col-md-12 mt">
                <h3><i class="fa fa-angle-right"></i>แก้ไขคณะกรรมการ</h3>
                    <div class="col-md-12">
                        <div class="content-panel">
	                    <h4><i class="fa fa-angle-right"></i> แก้ไขคณะกรรมการ</h4>
	                  	<hr>                                           
                                    <div class="row">
                                       <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">                  
                    <div class="panel-heading">  แก้ไขคณะกรรมการ</div>
                    <div class="panel-body">
                         <form role="form" action="<?php echo base_url('AdminPanel/EditCommittee'); ?>" method="post">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <label>ชื่อ-นามสกุล :</label>
                                    <input class="form-control" name = "name" value="<?php echo $committee->name; ?>">
                                </div>
                                
                                <div class="form-group">
                                       <label>สถานะ</label>
                                           <select class="form-control" name = "status" >
                                               <option value=" "> เลือกสถานะ</option>
                                               <option value="1" <?php if ($committee->status=="1"){echo "selected";} ?>> ใช้งานปกติ</option>
                                               <option value="2" <?php if ($committee->status=="2"){echo "selected";} ?>> ถูกระงับการใช้งาน</option>
                                           </select>
                                    </div>
                                <div class="form-group">
                                        <input type="hidden" name="committee_id" value ="<?php echo $committee->committee_id; ?>"> 
                                
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

         
       
