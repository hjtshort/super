<div class="row control">
    <div class="chonmon col-md-6">
        <form action="http://localhost/superdiemdanh/" method="post">
            <div class="form-group">
                <label>Chọn ngành</label>
                <select id="lop" class="form-control">
                <?php foreach ($class as $value){ ?>
                    <option value="<?php echo $value['malop']; ?>"><?php echo $value['tenlop']; ?></option>
                <?php } ?>
                </select>
            </div>
        </form>
    </div>
    <div class="chonmon col-md-6">
        <form action="http://localhost/superdiemdanh/" method="post">
            <div class="form-group">
                <label>Chọn môn</label>
                <select id="chon" class="form-control tt">
                    <option value="bb">Bắt buộc</option>
                    <option value="tc">Tự chọn</option>
                </select>
            </div>
        </form>
    </div>
    <div class="col-md-12">
            <div class="nut float-right mb-3" >
                <button class="btn btn-primary btn-nhapdiem" onclick="get()"><span class="glyphicon glyphicon-edit"></span> Liệt kê</button>
            </div>
    </div>
</div>
<div class="bangdiem">
    <div class="table-responsive">
        <table class="table" id="edittable">
            <thead class="thead-light">
                <tr>
                    <th>Tên học phần</th>
                    <th>Số tính chỉ</th>
                    <th>Tổng số tiết</th>
                    <th>Số tiết lý thuyết</th>
                    <th>Số tiết bài tập</th>
                    <th>Kiểm tra</th>
                    <th>Học kì</th>
                </tr>
            </thead>
            <tbody id="print">
              
            </tbody>
        </table>
    </div>
    <script src="application/assets/js/jquery.tabledit.js"></script>
    <script>
    // function sub(){
    //     var idclass= $('#lop').val()
    //    $.ajax({
    //        type: "post",
    //        url: "get_sub",
    //        data: {"id":idclass},
    //        success: function (response) {
    //            $('.tt').html(response)
    //        }
    //    });
    // }
    $( document ).ready(function() {
      sub()
    });
    $('#lop').on('change', function() {
         sub()
    })
   function get(){
       var chon=$('#chon').val()
       $.ajax({
           type: "post",
           url: "welcome/get_table",
           data: {
               "chon":chon
           },
           success: function (response) {
               $('#print').html(response)
               edit()
              $(".btn-toolbar").css("display","block");
           }
       });
   }

    function edit(){
       
        $('#edittable').Tabledit({
    url: 'example.php',
    columns: {
        identifier: [0, 'id'],
        editable: [[1, 'username'], [2, 'email'], [3, 'avatar', '{"1": "Black Widow", "2": "Captain America", "3": "Iron Man"}']]
    },
    onDraw: function() {
        console.log('onDraw()');
    },
    onSuccess: function(data, textStatus, jqXHR) {
        console.log('onSuccess(data, textStatus, jqXHR)');
        console.log(data);
        console.log(textStatus);
        console.log(jqXHR);
    },
    onFail: function(jqXHR, textStatus, errorThrown) {
        console.log('onFail(jqXHR, textStatus, errorThrown)');
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
    },
    onAlways: function() {
        console.log('onAlways()');
    },
    onAjax: function(action, serialize) {
        console.log('onAjax(action, serialize)');
        console.log(action);
        console.log(serialize);
    }
});
    }
    
    </script>
</div>