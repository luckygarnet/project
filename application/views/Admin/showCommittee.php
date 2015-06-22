<section id="main-content">
    <section class="wrapper">
        <div class="col-md-12 mt">
            <h3><i class="fa fa-angle-right"></i>แสดงรายชื่อคณะกรรมการ</h3>
            <div class="col-md-12">
                <div class="content-panel">       
                    <h4><i class="fa fa-angle-right"></i> แสดงรายชื่อคณะกรรมการ</h4><hr><table class="table table-striped table-advance table-hover">
                        <thead>
                            <tr>
                                <th width="5%" > # </th> 
                                <th width="10%" class="hidden-phone"><i class="fa fa-question-circle"></i> Name</th>
                                <th width="20%"><i class="fa fa-bookmark"></i> PassWord</th>
                                <th width="10%"><i class=" fa fa-edit"></i> Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <?php
                            $i = 0;
                            //print_r($user);
                            foreach ($committee as $value) {
                                //print_r($value);
                                $i++;
                                ?>
                          
                                <tr>
                                    <td style="width:"><?php echo $i; ?></a></td>
                                    <td class="hidden-phone"><?php echo $value->name; ?></td>
                                    <td><?php echo $value->password; ?> </td>
                                    <td><?php ?>                                         
                                            <input type="checkbox" <?php if($value->status==1)echo("checked");else echo""?> data-toggle="switch" id="<?php echo $value->committee_id; ?>" name="status"  onchange="update(this);" value="<?php if($value->status==1)echo("2");else echo"1"?>"  >                  
                                    </td>
                                    <td width="5%">
                            <center>
                                <a href ="<?php echo base_url('AdminPanel/showFormEditCommittee/' . $value->committee_id); ?>" > 
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                            </center>
                            </td>
                            <td width="5%">
                            <center>
                                <a  href ="#" onclick="expire(<?php echo $value->committee_id; ?>)" >
                                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a> 
                            </center> 
                            </td>
                            </tr>
<?php } ?>
                        </tbody>
                    </table>
                     
                </div><!-- /content-panel -->
            </div><!-- /col-md-12 -->


            <div class="row">
            </div>
        </div>
    </section>
    <script>
        function update(this_a) {            
            $.post('<?php echo base_url("AdminPanel/updateStatusCommittee/")?>'+"/"+this_a.id+"/"+this_a.value);
                //   alert('<?php echo base_url("AdminPanel/updateStatusCommittee/")?>'+"/"+this_a.id+"/"+this_a.value);
                if(this_a.value=="1"){$('#'+this_a.id).val("2");
                     alert("สถานะของคุณ คือ ใช้งานปกติ");
                   
                }
                else{$('#'+this_a.id).val("1");
                    alert("สถานะของคุณ คือ ถูกระงับใช้งาน");
                }
               
            }
        
        function expire(committeeid){
            var re = confirm("คุณต้องการยกเลิกการใช่งานใช่ไหม ?");
            if(re == true){
                $.get('<?php echo base_url("AdminPanel/updateStatusCommittee/")?>'+"/"+committeeid+"/0" ,
                        function(data){
                            window.location="<?php echo base_url('AdminPanel/showCommittee/'); ?>";
                        });
                //alert('<?php echo base_url("AdminPanel/updateStatusCommittee/")?>'+"/"+userid+"/0");
                       
            }
        }
    </script>