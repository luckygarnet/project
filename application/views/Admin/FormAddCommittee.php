    <section id="main-content">
        <section class="wrapper">                            
            <div class="col-md-12 mt">
                <h3><i class="fa fa-angle-right"></i>เพิ่มคณะกรรมการ</h3>
                    <div class="col-md-12">
                        <div class="content-panel">
	                    <h4><i class="fa fa-angle-right"></i> เพิ่มคณะกรรมการ</h4>
	                  	<hr>                                           
                                    <div class="row">
                                       <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">                  
                    <div class="panel-heading">  เพิ่มคณะกรรมการ</div>
                    <div class="panel-body">
                         <form role="form" action="<?php echo base_url('AdminPanel/AddCommittee'); ?>" method="post">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <label>ชื่อ-นามสกุล :</label>
                                    <input class="form-control" name = "name">
                                </div>
                                <div class="form-group">
                                    <label>Password :</label>
                                    <input class="form-control" name = "password" type="password">
                                </div>
                                <div class="form-group">
                                       <label>สถานะ</label>
                                           <select class="form-control" name = "status" >
                                               <option value=" "> เลือกสถานะ</option>
                                               <option value="1" > ใช้งานปกติ</option>
                                               <option value="2" > ถูกระงับการใช้งาน</option>
                                           </select>
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

         
       
