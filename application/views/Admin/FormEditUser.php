<aside></aside>
<section id="main-content">
<section class="wrapper">
<div class="col-md-12 mt">
<h3><i class="fa fa-angle-right"></i>การจัดการผู้ใช้</h3>

     
                  <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">                  
                    <div class="panel-heading">  เพิ่มผู้ใช้งาน </div>
                    <div class="panel-body">
                         <form role="form" action="<?php echo base_url(); ?>AdminPanel/EditUser" method="post">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                
                                <div class="form-group">
                                    <label>Username :</label>
                                    <input class="form-control" name = "username" value="<?php echo $user->username; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Password :</label>
                                    <input class="form-control" name = "password" type="password" value="<?php echo $user->password; ?>">
                                </div>
                                <div class="form-group">
                                       <label>สถานะ</label>
                                           <select class="form-control" name = "status" >
                                               <option value="1" <?php if ($user->status=="1"){echo "selected";} ?> > ผู้ดูแลระบบ</option>
                                               <option value="2" <?php if ($user->status=="2"){echo "selected";} ?>> ผู้ประเมิน</option>
                                               <option value="3" <?php if ($user->status=="3"){echo "selected";} ?>> กรรมการผู้ตรวจการประเมิน</option>
                                              
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
                  

<div class="row">
</div>
</div>
</section>

<script type="text/javascript" src="<?php echo base_url("assets/ckeditor/ckeditor.js"); ?>"></script>