<aside></aside>
    <section id="main-content">
        <section class="wrapper">                            
            <div class="col-md-12 mt">
                <h3><i class="fa fa-angle-right"></i>แก้ไขตัวบ่งชี้</h3>
                    <div class="col-md-12">
                        <div class="content-panel">
	                    <h4><i class="fa fa-angle-right"></i> แก้ไขตัวบ่งชี้</h4>
	                  	<hr>                                           
                                    <div class="row">
                                        <div class="col-lg-12">
                <div class="panel panel-default">                  
                    <div class="panel-heading">  <?php echo $composition->maintitle . " " . $composition->title; ?> </div>
                    <div class="panel-body">
                        <form role="form" action="<?php echo base_url(); ?>AdminPanel/EditIndicator" method="post">
                            <div class="form-group">
                                <label>ใช้กับ</label>
                                <select class="form-control" name = "data_use">
                                    <option value="1" <?php if ($indicator->data_use=="1"){echo "selected";} ?> > ปีการศึกษา</option>
                                    <option value="2" <?php if ($indicator->data_use=="2"){echo "selected";} ?> > ปีงบประมาณ</option>
                                    <option value="3" <?php if ($indicator->data_use=="3"){echo "selected";} ?> > ปีปฏิทิน</option>                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label>ข้อที่ :</label>
                                <input class="form-control" name = "number" value="<?php echo $indicator->indicator_num; ?>">
                            </div>
                            <div class="form-group">
                                <label>ชื่อตัวบ่งชี้ :</label>
                                <input class="form-control" name = "title" value="<?php echo $indicator->indicator_title;?>">
                            </div>
                            <div class="form-group">
                                <label>ชนิดของตัวบ่งชี้ :</label>
                                <input class="form-control" name = "type" value="<?php  echo $indicator->indicator_type;?>">
                            </div>
                            <div class="form-group">
                                <label>เกณฑ์การประเมิน</label>
                                <textarea  class="ckeditor form-control" name = "detail" rows="3">
                                <?php echo $indicator->detail;?>
                                </textarea>
                                <div id="txtEditor"></div>

                            </div>
                            <div class="form-group">
                                <label>เกณฑ์มาตรฐาน :</label>
                                <select class="form-control" id="citeria" name="citeria">
                                    <option value="1" <?php if ($indicator->citeria=="1"){echo "selected";} ?> >  ข้อ</option>
                                    <option value="2" <?php if ($indicator->citeria=="2"){echo "selected";} ?> >  เชิงปริมาณ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="composition_id" value ="<?php echo $composition->id; ?>"> 
                                <input type="hidden" name="year" value ="2558"> 
                                <input type="hidden" name="indicator_id" value="<?php echo $indicator->indicator_id; ?>">
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

         
       
