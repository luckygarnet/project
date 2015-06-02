<aside></aside>
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
                                  <th width="20%" class="hidden-phone"><i class="fa fa-question-circle"></i> Username</th>
                                  <th width="20%"><i class="fa fa-bookmark"></i> PassWord</th>
                                  <th width="20%"><i class=" fa fa-edit"></i> Status</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                                  <?php 
                                        $i=0;
                                        //print_r($user);
                                        foreach ($user as $value) {
                                            //print_r($value);
                                            $i++;
                                        ?>
                              <tr>
                                  <td><?php echo $i;?></a></td>
                                  <td class="hidden-phone"><?php echo $value->username; ?></td>
                                  <td><?php echo $value->password; ?> </td>
                                  <td><?php if($value->status=="1"){ echo "ผู้ดูแลระบบ";}elseif ($value->status=="2") {echo "ผู้ประเมิน";} else{ echo "กรรมการผู้ตรวจการประเมิน";}?></td>
                                  <td><span class="label label-info label-mini"></span></td>
                                  <td width="5%">
                                      <center>
                                        <a href ="<?php echo base_url('AdminPanel/showFormEditUser/' . $value->user_id); ?>" > 
                                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                      </center>
                                  </td>
                                  <td width="5%">
                                      <center>
                                         <a  href ="<?php echo base_url('AdminPanel/DeleteUser/' . $value->user_id); ?>" >
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

<script type="text/javascript" src="<?php echo base_url("assets/ckeditor/ckeditor.js"); ?>"></script>