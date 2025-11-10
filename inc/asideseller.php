<div class="col-auto px-0" style="background: #11101D;">
    <div id="sidebar" class="collapse collapse-horizontal show border-end" >
        <div id="sidebar-nav" class="list-group border-0 rounded-0 text-sm-start min-vh-100">
            <a href="sellerDashboard.php?do=Home" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="fa-solid fa-gauge-simple-high"></i> <span>&nbsp;Dashboard</span> </a>
            <hr style="color: #72717f;">

            <a href="sellerDashboard.php?do=Manage" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="fa-solid fa-box"></i> <span>&nbsp;Packages</span></a>


            <?php  

            $tranId = $_SESSION['email'];
              $sql = "SELECT * FROM transactions WHERE user_email = '$tranId'";
              $query = mysqli_query($db, $sql);

              while($row = mysqli_fetch_assoc($query)) {
                $id               = $row['id'];
                $renewal_date     = $row['renewal_date'];
                $status           = $row['status'];

                if ( $status == 0 ) { ?>
                  
                <?php }
                else if ( $status == 1 ) { 

                  $valid_pkg_q = mysqli_query($db, "SELECT id FROM transactions WHERE user_email = '$tranId' AND status = 1 AND renewal_date >= CURDATE() LIMIT 1");
                  $has_valid_package = mysqli_num_rows($valid_pkg_q) > 0;

                  if ($has_valid_package) {
                      ?>
                      <div class="btn-group dropend">

                        <a class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-layer-group"></i> <span>&nbsp;My Services</span></a>
                          <ul class="dropdown-menu" style="background: #C8BFE7;">
                              <li><a class="dropdown-item" href="sellerDashboard.php?do=allRentProducts" style="text-decoration: none; color:#023021; font-size: 17px; font-weight:500;">Rent Products</a></li>
                              <hr style="margin: 5px 0;">
                              <li><a class="dropdown-item" href="sellerDashboard.php?do=allBuyProducts" style="text-decoration: none; color:#023021; font-size: 17px; font-weight:500;">Buy Product</a></li>
                          </ul>
                      </div>
                      <hr>
                      <?php
                  }

                }


              }
            ?>



            <a href="sellerDashboard.php?do=Invoice" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="fa-solid fa-file-invoice"></i> <span>&nbsp;My Invoices</span></a>
            <a href="sellerDashboard.php?do=Profile" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="fa-solid fa-user"></i> <span>&nbsp;Profile</span></a>
            <a href="sellerDashboard.php?do=Support" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="fa-regular fa-message"></i> <span>&nbsp;Support</span></a>
            <hr>
            <a href="logout.php" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="fa-solid fa-right-from-bracket"></i> <span>&nbsp;Logout</span></a>
        </div>
    </div>
</div>