<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đọc file Excel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="application/assets/js/jquery.js"></script>
   <link href="application/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   <link href="application/assets/css/style.css" rel="stylesheet" type="text/css" />
   <link href="application/assets/css/sidebar.css" rel="stylesheet" type="text/css" />
   <link href="application/assets/css/datatables.min.css" rel="stylesheet" type="text/css" />
   <link href="application/assets/css/responsiveDTTB.css" rel="stylesheet" type="text/css" />
   <link href="application/assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
    
    <script src="application/assets/js/popper.js" crossorigin="anonymous"></script>
    <script src="application/assets/js/bootstrap.min.js"></script>
    <script src="application/assets/js/datatables.min.js"></script>
    <script src="application/assets/js/jquery.tabledit.js"></script>
    <style type="text/css">
        div.container { max-width: 1200px }
    </style>
</head>
<body>
    <!-- Navbar -->
    <?php $this->load->view($header); ?>
    <!-- Navbar -->
    <div class="wrapper">
            <!-- Sidebar -->
            <?php $this->load->view($sidebar); ?>
            <!-- Sidebar -->
            <!-- Page Content -->
            <div id="content">
            <?php $this->load->view($noidung); ?>
            </div>
            <!-- Page Content -->
    </div>
</body>
            <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
             
         </script>
</html>