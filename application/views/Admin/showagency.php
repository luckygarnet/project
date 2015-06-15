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
                                <th width="30%"><i class="fa fa-bookmark"></i> Agency</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <?php
                            $i = 0;
                            //print_r($user);
                            foreach ($agency as $value) {
                                //print_r($value);
                                $i++;
                                ?>
                          
                                <tr>
                                    <td><?php echo $i; ?></a></td>
                                    <td><?php echo $value->description; ?></a></td>
                                    <td width="5%">
                            <center>
                                <a href ="<?php echo base_url('AdminPanel/showFormEditAgency/' . $value->agency_id); ?>" > 
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                            </center>
                            </td>
                            <td width="5%">
                            <center>
                                <a  href ="<?php echo base_url('AdminPanel/DeleteAgency/' . $value->agency_id); ?>"  >
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
   