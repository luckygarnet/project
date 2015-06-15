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
                          <span>ฐานข้อมูลการประเมิน</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="" >
                          <i class="fa fa-desktop"></i>
                          <span>จัดการผู้ใช้งาน</span>
                      </a>
                      <ul class="sub">
                          <li ><a href="<?php echo base_url('index.php/AdminPanel/showUser');?>">แสดงผู้ใช้งานทั้งหมด</a></li>
                          <li><a href="<?php echo base_url('index.php/AdminPanel/showFormAddUser');?>">เพิ่มผู้ใช้งาน</a></li>
                                             
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="" >
                          <i class="fa fa-cogs"></i>
                          <span>การจัดการหน่วยงาน</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url('index.php/AdminPanel/showAgency');?>">แสดงหน่วยงานทั้งหมด</a></li>
                          <li><a  href="<?php echo base_url('index.php/AdminPanel/showFormAddAgency');?>">เพิ่มหน่วยงาน</a></li>                         
                          
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      
      <!--sidebar end-->

