<section id="main-content">
    <section class="wrapper">
        <div class="col-md-12 mt">
            <h3><i class="fa fa-angle-right"></i>การจัดการผู้ใช้</h3>
            <div class="col-md-12">
                <div class="content-panel">       
                    <h4><i class="fa fa-angle-right"></i> การจัดการผู้ใช้</h4><hr><table class="table table-striped table-advance table-hover">
                        <thead>
                            <tr>
                                <th width="5%" > # </th>
                                <th width="10%" class="hidden-phone"><i class="fa fa-question-circle"></i> Username</th>
                                <th width="30%"><i class="fa fa-bookmark"></i> PassWord</th>
                                <th width="20%"><i class="fa fa-bookmark"></i> Agency</th>
                                <th width="20%"><i class=" fa fa-edit"></i> Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <?php
                            $i = 0;
                            //print_r($user);
                            foreach ($user as $value) {
                                //print_r($value);
                                $i++;
                                ?>
                          
                                <tr>
                                    <td><?php echo $i; ?></a></td>
                                    <td class="hidden-phone"><?php echo $value->username; ?></td>
                                    <td><?php echo $value->password; ?> </td>
                                    <td><?php echo $value->agency_id; ?></td>
                                    <td><?php ?>                                         
                                            <input type="checkbox" <?php if($value->status==1)echo("checked");else echo""?> data-toggle="switch" id="<?php echo $value->user_id; ?>" name="status"  onchange="update(this);" value="<?php if($value->status==1)echo("2");else echo"1"?>"  >                  
                                    </td>
                                    <td width="5%">
                            <center>
                                <a href ="<?php echo base_url('AdminPanel/showFormEditUser/' . $value->user_id); ?>" > 
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                            </center>
                            </td>
                            <td width="5%">
                            <center>
                                <a  href ="#" onclick="expire(<?php echo $value->user_id; ?>)" >
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
            $.post('<?php echo base_url("AdminPanel/updateStatus/")?>'+"/"+this_a.id+"/"+this_a.value);
                //   alert('<?php echo base_url("AdminPanel/updateStatus/")?>'+"/"+this_a.id+"/"+this_a.value);
                if(this_a.value=="1"){$('#'+this_a.id).val("2");
                     alert("สถานะของคุณ คือ ใช้งานปกติ");
                   
                }
                else{$('#'+this_a.id).val("1");
                    alert("สถานะของคุณ คือ ถูกระงับใช้งาน");
                }
               
            }
        
        function expire(userid){
            var re = confirm("คุณต้องการยกเลิกการใช่งานใช่ไหม ?");
            if(re == true){
                $.get('<?php echo base_url("AdminPanel/updateStatus/")?>'+"/"+userid+"/0" ,
                        function(data){
                            window.location="<?php echo base_url('AdminPanel/showUser/'); ?>";
                        });
                //alert('<?php echo base_url("AdminPanel/updateStatus/")?>'+"/"+userid+"/0");
                       
            }
        }
    </script>