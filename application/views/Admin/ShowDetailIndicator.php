<aside></aside>
<section id="main-content">
<section class="wrapper">
<div class="col-md-12 mt">
<h3><i class="fa fa-angle-right"></i> ฐานข้อมูลหัวข้องานประเมิน</h3>
<div class="col-md-12">
<div class="content-panel">
<h4><i class="fa fa-angle-right"></i> <?php echo $composition->maintitle . " " . $composition->title; ?> </h4>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel panel-warning">                  
                    <div class="panel-heading">  <?php echo $composition->maintitle . " " . $composition->title; ?> </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-2"><p>ตัวบ่งชี้<?php echo " ".$indicator->indicator_num; ?></p></div>
                            <div class="col-lg-10"><p><?php echo $indicator->indicator_title; ?></p></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2"><p>ชนิดตัวบ่งชี้ </p></div>
                            <div class="col-lg-10"><p><?php echo $indicator->indicator_type;?></p></div>
                        </div>
                         <div class="row">
                            <div class="col-lg-2"><p>ใช้กับ</p></div>
                            <div class="col-lg-10"><p><?php if($indicator->data_use=="1"){ echo "ปีการศึกษา";}elseif ($indicator->data_use=="2") {echo "ปีงบประมาณ";} else{ echo "ปีปฏิทิน";}?></p></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2"><p>เกณฑ์การประเมิน</p></div>
                            <div class="col-lg-10"><p><?php echo $indicator->detail;?></p></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2"><p>เกณฑ์มาตรฐาน</p></div>
                            <div class="col-lg-10"><p><?php if($indicator->citeria=="1"){ echo "ข้อ";} else{ echo "เชิงปริมาณ";}?></p></div>
                        </div>
 
                    </div>
                </div>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">                  
                    <div class="panel-heading">เกณฑ์การประเมิน 
                     <span class="pull-right">
                        <a  href ="<?php echo base_url('AdminPanel/showFormAddSubindicator/' . $indicator->indicator_id); ?>" ><i class="fa fa-plus-square fa-lg"></i></a>
                     </span>

                    </div>
                   
                    <div class="panel-body">
                       <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                           <th width="5%">#</th>
                                            <th>รายละเอียด</th>
                                            <th width="5%">แก้ไข</th>
                                            <th width="5%">ลบ</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $i=0;
                                        foreach ($subindicator as $value) {
                                            $i++;
                                        ?>
                                        <tr>
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $value->detail;?></td>
                                            <td><center><a href ="<?php echo base_url('AdminPanel/showFormEditSubindicator/' . $value->subindicator_id); ?>" ><i class="fa fa-pencil fa-lg"></i></a></center></td>
                                <td><center><a  href ="<?php echo base_url('AdminPanel/DeleteSubindicator/' . $value->subindicator_id); ?>" ><i class="fa fa-times fa-lg"></i></a></center></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
</div>
</div>

</section>
   