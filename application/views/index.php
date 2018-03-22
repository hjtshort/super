<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đọc file Excel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
   <link href="application/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   <link href="application/assets/css/style.css" rel="stylesheet" type="text/css" />
   <link href="application/assets/css/sidebar.css" rel="stylesheet" type="text/css" />
   <link href="application/assets/css/datatables.min.css" rel="stylesheet" type="text/css" />
   <link href="application/assets/css/responsiveDTTB.css" rel="stylesheet" type="text/css" />
   <link href="application/assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <script src="application/assets/js/jquery.js"></script>
    <script src="application/assets/js/popper.js" crossorigin="anonymous"></script>
    <script src="application/assets/js/bootstrap.min.js"></script>
    <script src="application/assets/js/datatables.min.js"></script>
    <script src="application/assets/js/responsiveDTTB.js"></script>
    <style type="text/css">
        div.container { max-width: 1200px }
    </style>
</head>
<body>
    <div class="wrapper">
            <!-- Page Content -->
    <div id="content">
        <DIV class="diemdanh">
            <table id="example" class="display responsive nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Tên học phần</th>
                        <th>Số tính chỉ</th>
                        <th>Bắt buộc</th>
                        <th>Tự chọn</th>
                        <th>Tổng số tiết</th>
                        <th>Số tiết lý thuyết</th>
                        <th>Số tiết bài tập</th>
                        <th>Kiểm tra</th>
                        <th>Học kỳ</th>
                    </tr>
                </thead>
            </table>
        </DIV>
    </div>
            <!-- Page Content -->
    </div>
</body>
        <script type="text/javascript">
$(document).ready(function() {
    
    $('#example').DataTable( {
        "language": {
            "url": "application/assets/css/vietnam.json"
        },
        "ajax": 'welcome/getvalue',
        "columns": [
            { "data": "tenhocphan" },
            { "data": "sotc" },
            { "data": "batbuot" },
            {"data": "tuchon"},
            { "data": "tongsotiet" },
            { "data": "sotietlt" },
           { "data": "sotietbt" },
           { "data": "kiemtra" },
           { "data": "hocki" }
        ]
     } );
} )
             
</script>
</html>