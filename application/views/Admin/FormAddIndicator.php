
<section id="main-content">
    <section class="wrapper">                            
        <div class="col-md-12 mt">
            <h3><i class="fa fa-angle-right"></i>เพิ่มตัวบ่งชี้</h3>
            <div class="col-md-12">
                <div class="content-panel">
                    <h4><i class="fa fa-angle-right"></i> เพิ่มตัวบ่งชี้</h4>
                    <hr>                                           
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading"> องค์ประกอบที่ <?php echo $result->maintitle . " " . $result->title; ?> </div>
                                <div class="panel-body">
                                    <form role="form" action="<?php echo base_url(); ?>AdminController/AddIndicator" method="post">
                                        <div class="form-group">
                                            <label>ใช้กับ</label>
                                            <select class="form-control" name = "used">
                                                <option value="1"> ปีการศึกษา</option>
                                                <option value="2"> ปีงบประมาณ</option>
                                                <option value="3"> ปีปฏิทิน</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>ข้อที่ :</label>
                                            <input class="form-control" name = "number">
                                        </div>
                                        <div class="form-group">
                                            <label>ชื่อตัวบ่งชี้ :</label>
                                            <input class="form-control" name = "title">
                                        </div>
                                        <div class="form-group">
                                            <label>ชนิดของตัวบ่งชี้ :</label>
                                            <input class="form-control" name = "type">
                                        </div>

                                        <div class="form-group">
                                            <table style="height: 300px;">
                                                <tr>
                                                    <td><label>เกณฑ์การประเมิน</label>
                                                        <textarea  class="ckeditor form-control" name = "detail" rows="1">
                                                        </textarea>
                                                        <div id="txtEditor"></div></td>
                                                </tr>
                                            </table>


                                        </div>
                                        <div class="form-group">
                                            <label>เกณฑ์มาตรฐาน :</label>
                                            <select class="form-control">
                                                <option value="1">ข้อ</option>
                                                <option value="2">เชิงปริมาณ</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" name="composition_id" value ="<?php echo $result->id; ?>"> 
                                            <input type="hidden" name="year" value ="2558"> 
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



