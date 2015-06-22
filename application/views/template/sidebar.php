 <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu active" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="<?php echo base_url('assets/img/ui-sam.jpg');?>" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Marcel Newman</h5>
              	  	
                  <li class="mt ">
                      <a  href="<?php echo base_url('index.php/AdminPanel/showCompositAll');?>">
                          <i class="fa fa-dashboard"></i>
                          <span>การจัดการข้อมูลการประเมิน</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="" >
                          <i class="fa fa-desktop"></i>
                          <span>การจัดการข้อมูลผู้ใช้งาน</span>
                      </a>
                      <ul class="sub">
                          <li ><a href="<?php echo base_url('index.php/AdminPanel/showUser');?>">แสดงผู้ใช้งานทั้งหมด</a></li>
                          <li><a href="<?php echo base_url('index.php/AdminPanel/showFormAddUser');?>">เพิ่มผู้ใช้งาน</a></li>
                                             
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="" >
                          <i class="fa fa-cogs"></i>
                          <span>การจัดการข้อมูลหน่วยงาน</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url('index.php/AdminPanel/showAgency');?>">แสดงหน่วยงานทั้งหมด</a></li>
                          <li><a  href="<?php echo base_url('index.php/AdminPanel/showFormAddAgency');?>">เพิ่มหน่วยงาน</a></li>                         
                          
                      </ul>
                  </li>    
                  <li class="sub-menu">
                      <a href="" >
                          <i class="fa fa-cogs"></i>
                          <span>การจัดการข้อมูลกรรมการ</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url('index.php/AdminPanel/showCommittee');?>">แสดงรายชื่อคณะกรรมการ</a></li>
                          <li><a  href="<?php echo base_url('index.php/AdminPanel/showFormAddCommittee');?>">เพิ่มคณะกรรมการ</a></li>                         
                          
                      </ul>
                  </li>  

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      
      <!--sidebar end-->

