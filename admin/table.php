<?php
session_start();
if(!isset($_SESSION["name"])){
    header('location:dashboard.php');
}
$conn = mysqli_connect('localhost','root','','school_db');
$sql = "SELECT * FROM admission_tbl";
$res = mysqli_query($conn,$sql);//execute the query

$data = [];
if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_assoc($res)){
        array_unshift($data, $row);
    }
}
?>


<?php 
include('includes/header.php'); 
include('includes/navbar.php');
include('includes/topnavbar.php');
?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Students Performance</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Teacher Performance</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

   
<div class="text-center" id="editTable">
        <table border="1px" cellspacing="0px" align="center" width="100%" align="center">
        <thead>
            <tr>
                <th>id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Phone</th>
                <th>Gurdian</th>
                <th>Gender</th>
                <th>Grade</th>
                <th>action</th>
            </tr>
        </thead>
        <?php
        $i=1;
        foreach ($data as $d) {
        ?>
        <tbody>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $d['firstname']; ?></td>
                <td><?php echo $d['lname'];?></td>
                <td><?php echo $d['phone']; ?></td>
                <td><?php echo $d['gname'];?></td>
                <td><?php echo $d['gender']; ?></td>
                <td><?php echo $d['grade'];?></td>
                <td><a href="deleteform.php ?id=<?php echo $d['id'] ?>" onclick = "return confirm('Are you sure to delete ??')">delete</a>  
                </td>
            </tr>
        </tbody>
        <?php  } ?>
    </table>

</div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
  </body>
</html>

<?php  
include('includes/scripts.php') ;
include('includes/footer.php') ;
?>