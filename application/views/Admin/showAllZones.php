<base href="<?php echo base_url()?>">
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="Assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="Assets/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="Assets/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="Assets/admin/css/sb-admin.css" rel="stylesheet">
  <style type="text/css">
  td,th {
    text-align: center;
  }
  /*#desc{
    text-align: left;
    }*/
  </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include('include/navbar.php');?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      
      <!-- Icon Cards-->
      
      <!-- Area Chart Example-->

      <div class="row">
        <div class="col-lg-12">
          <div class="card-body">
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <?php include("include/modalPartial.php");?>
            </div>
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Zone Name / Description </th>
                    <th>Zone ID </th>
                    <th>Thumbnail</th>
                    <th>Syndicate</th>
                    <th>Preview</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $cnt=1;?>
                  <?php foreach($zones as $zone):?>
                    <tr>
                      <td><?php echo $cnt++;?></td>
                      <td>
                        <strong><?php echo $zone->name;?></strong><br> 
                        <ul>
                          <small>- Description : <?php echo $zone->description;?></small>
                        </ul>
                      </td>
                      <td>
                        <?php echo $zone->id;?><br>
                        <small><a href="zonesController/createZone/?parent=<?php echo $zone->id;?>" >Create Subzone</a></small>
                      </td>
                      <td><img src="https://news2.onlinenigeria.com/thumbnail.php?file=images/5_Ways_Facebook_May_Be_Making_You_Unhappy_627824755.jpg&size=article_large" alt="Forest" style="width:50px;height: 50px"></td>
                      <td>NULL</td>
                      <td ><i onclick="test(<?php echo $zone->id; ?>)" data-toggle="modal" data-target="#exampleModal" class="fa fa-eye fa-2x" aria-hidden="true"></i>
                      </td>
                      <td><a href="#edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                      </td>
                      <td>
                        <a href="#delete"><i class="fa  fa fa-trash-o fa-2x" aria-hidden="true"></i></a>
                      </td>

                    </tr>
                  <?php endforeach?>
                </tbody>
              </table>
            </div>
          </div>

        </div>
        <!-- Example DataTables Card-->

        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <footer class="sticky-footer">
          <div class="container">
            <div class="text-center">
              <small>Copyright © Your Website 2017</small>
            </div>
          </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="Scroll-to-top rounded" href="#page-top">
          <i class="fa fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="Assets/admin/vendor/jquery/jquery.min.js"></script>
        <script src="Assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="Assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Page level plugin JavaScript-->
        <script src="Assets/admin/vendor/chart.js/Chart.min.js"></script>
        <script src="Assets/admin/vendor/datatables/jquery.dataTables.js"></script>
        <script src="Assets/admin/vendor/datatables/dataTables.bootstrap4.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="Assets/admin/js/sb-admin.min.js"></script>
        <!-- Custom scripts for this page-->
        <script src="Assets/admin/js/sb-admin-datatables.min.js"></script>
        <script src="Assets/admin/js/sb-admin-charts.min.js"></script>
        <script type="text/javascript">
          function test(zoneId){
            $.ajax({
              type:'POST',
              url:'zonesController/modalData/'+zoneId,
              data:'request='+ zoneId,
              success:function(data){
                console.log(data);
                $.each(JSON.parse(data), function(index, item){
                  $("#zName").text(item.name);
                  $("#zDesc").text(item.description);
                });
              },
            })
          }
        </script>
      </div>
    </body>

    </html>
