      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="brand">
          <a href="index.html"><img src="<?php echo $web_url.'template'?>/img/headlsi.png" alt="Klorofil Logo" class="img-responsive logo" style="height: 21px;" /></a>
        </div>
        <div class="container-fluid">
          <div class="navbar-btn">
            <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
          </div>
          
          <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $web_url.'template'?>/img/Logo-unud-baru.png" class="img-circle" alt="Avatar"> <span>
                    <?php
                      if (isset($_SESSION['nama_mhs'])) {
                        echo $_SESSION['nama_mhs'];
                      } else {
                        echo $_SESSION['nama_dosen'];
                      }
                      
                    ?>
                      
                    </span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                <ul class="dropdown-menu">
                  <!-- <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                  <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
                  <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li> -->
                  <li><a href="<?php echo $web_url.'logout.php';?>"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                </ul>
              </li>
              <!-- <li>
                <a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>