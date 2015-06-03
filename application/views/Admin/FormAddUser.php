<aside></aside>
    <section id="main-content">
        <section class="wrapper">                            
            <div class="col-md-12 mt">
                <h3><i class="fa fa-angle-right"></i>เพิ่มผู้ใช้งาน</h3>
                    <div class="col-md-12">
                        <div class="content-panel">
	                    <h4><i class="fa fa-angle-right"></i> เพิ่มผู้ใช้งาน</h4>
	                  	<hr>                                           
                                    <div class="row">
                                       <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">                  
                    <div class="panel-heading">  เพิ่มผู้ใช้งาน </div>
                    <div class="panel-body">
                         <form role="form" action="<?php echo base_url(); ?>AdminPanel/AddUser" method="post">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                
                                <div class="form-group">
                                    <label>Username :</label>
                                    <input class="form-control" name = "username">
                                </div>
                                <div class="form-group">
                                    <label>Password :</label>
                                    <input class="form-control" name = "password" type="password">
                                </div>
                                <div class="form-group">
                                       <label>หน่วยงานภายในมหาวิทยาลัย</label>
                                           <select class="form-control" name = "agency" >
                                               <option value=" "> เลือกหน่วยงาน</option>
                                               <option value="1"> สำนักงานอธิการบดี</option>
                                               <option value="2"> กองกลาง</option>
                                               <option value="3"> กองนโยบาลและแผน</option>
                                               <option value="4"> กองบริการการศึกษา</option>
                                               <option value="5"> กองบริหารงานบุคคล</option>
                                               <option value="6"> กองพัฒนานักศึกษา</option>
                                               <option value="7"> กองศิลปวัฒนธรรม</option>
                                           </select>
                                    </div>
                                <div class="form-group">
                                       <label>สถานะ</label>
                                           <select class="form-control" name = "status" >
                                               <option value=" "> เลือกสถานะ</option>
                                               <option value="1"> ใช้งานปกติ</option>
                                               <option value="2"> ถูกระงับการใช้งาน</option>
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

         
       
