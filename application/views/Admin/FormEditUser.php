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
                                       <label>หน่วยงานภายในมหาวิทยาลัย</label>
                                           <select class="form-control" name = "agency" >
                                               <option value=" "> เลือกหน่วยงาน</option>
                                               <option value="1" <?php if ($user->agency=="1"){echo "selected";} ?>> สำนักงานอธิการบดี</option>
                                               <option value="2" <?php if ($user->agency=="2"){echo "selected";} ?>> กองกลาง</option>
                                               <option value="3" <?php if ($user->agency=="3"){echo "selected";} ?>> กองนโยบาลและแผน</option>
                                               <option value="4" <?php if ($user->agency=="4"){echo "selected";} ?>> กองบริการการศึกษา</option>
                                               <option value="5" <?php if ($user->agency=="5"){echo "selected";} ?>> กองบริหารงานบุคคล</option>
                                               <option value="6" <?php if ($user->agency=="6"){echo "selected";} ?>> กองพัฒนานักศึกษา</option>
                                               <option value="7" <?php if ($user->agency=="7"){echo "selected";} ?>> กองศิลปวัฒนธรรม</option>
                                               <option value="8" <?php if ($user->agency=="8"){echo "selected";} ?>> สำนักงานคณะกรรมการมาตรฐานคุณภาพการศึกษา</option>
                                               <option value="9" <?php if ($user->agency=="9"){echo "selected";} ?>> สำนักวิทยบริการและเทคโนโลยีสารสนเทศ</option>
                                               <option value="10" <?php if ($user->agency=="10"){echo "selected";} ?>> สถาบันวิจัยและพัฒนา</option>
                                               <option value="11" <?php if ($user->agency=="11"){echo "selected";} ?>> สถาบันอาเซียนศึกษา</option>
                                               <option value="12" <?php if ($user->agency=="12"){echo "selected";} ?>> ศูนย์คอมพิวเตอร์</option>
                                               <option value="13" <?php if ($user->agency=="13"){echo "selected";} ?>> ศูนย์วิทยาศาสตร์และเทคโนโลยี</option>
                                               <option value="14" <?php if ($user->agency=="14"){echo "selected";} ?>> ศูนย์สหกิจศึกษา</option>
                                               <option value="15" <?php if ($user->agency=="15"){echo "selected";} ?>> ศูนย์บรูณาการงานวิจัยและวิชาการเพื่อรับใช้สังคม</option>
                                               <option value="16" <?php if ($user->agency=="16"){echo "selected";} ?>> หน่วยบ่มเพาะวิสาหกิจ URUBI</option>
                                               <option value="17" <?php if ($user->agency=="17"){echo "selected";} ?>> สวนพฤษศาสตร์โรงเรียน</option>
                                               <option value="18" <?php if ($user->agency=="18"){echo "selected";} ?>> สำนักงานกิจการพิเศษ</option>
                                               <option value="19" <?php if ($user->agency=="19"){echo "selected";} ?>> โรงแรมเรือนต้นสัก</option>
                                               <option value="20" <?php if ($user->agency=="20"){echo "selected";} ?>> สระว่ายน้ำเฉลิมราชภัฏ</option>
                                               <option value="21" <?php if ($user->agency=="21"){echo "selected";} ?>> อุทยานวิทยาศาสตร์ภาคเหนือ มหาวิทยาลัยราชภัฏอุตรดิตถ์</option>
                                               <option value="22" <?php if ($user->agency=="22"){echo "selected";} ?>> ลำรางทุ่งกะโล่</option>
                                           </select>
                                    </div>
                                <div class="form-group">
                                       <label>สถานะ</label>
                                           <select class="form-control" name = "status" >
                                               <option value=" "> เลือกสถานะ</option>
                                               <option value="1" <?php if ($user->status=="1"){echo "selected";} ?>> ใช้งานปกติ</option>
                                               <option value="2" <?php if ($user->status=="2"){echo "selected";} ?>> ถูกระงับการใช้งาน</option>
                                           </select>
                                    </div>
                                
                                    <div class="form-group">
                                        <input type="hidden" name="user_id" value ="<?php echo $user->user_id; ?>"> 
                                
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