$('a.add-cart').click(function(event){ //Bắt sự kiện thẻ a có class add-cart
    event.preventDefault(); //sự kiện đúng yên tại form
   // alert(32222);// kiểm tra
   var href = $(this).attr('href');// lấy thuộc tính thẻ a
   var dataname=$(this).data('name'); //lấy data-name thẻ a

   $.ajax({
    type: "GET",
    url: href, // đường link đến nơi xử lý
    data:{},
 //   dataType: "dataType",
    success: function (res) {// trả về dữ liệu bên link php
       if(res == 'ok')
       {
       // alert("Thêm giỏ hàng thành công");
        $('#alert-name').html('Sản phẩm <strong>'+ dataname +'</strong> đã thêm vào giỏ hàng !')
        $('#modal-add-cart').modal('show');
       }else
       {
       //alert("Thêm giỏ hàng thất bại");
       $('#alert-name').html('Sản phẩm <strong>'+ dataname +'</strong> đã hết hàng !')
       $('#modal-add-cart').modal('show');
       }
    }
   });
})
/*cách 2*/
// $(document).ready(function(e)
// {
//    $(document).on('click','a.add-cart', function(e)
//    {
//       e.preventDefault();
//       var href = $(this).attr('href');
//       //var dataname=$(this).data('code');
//    $.ajax(
//       {
//          //b2 gửi url
//          url: href,
//          data: {code: $(this).attr('data-name')},
//          type: 'post',
//          dataType: 'json',
//          beforeSend: function()
//          {
//             //b1 chạy đầu tiên
//             $('.thongbao').html('');
//          },
//          success: function(res)
//          {
//             //b5
//             alert(res.message);

//          },
//          complete: function(data)
//          {
//         //b4

//          },
//          error: function(r1, r2)
//          {
//             //b3
//             $('.thongbao').html(r1.responseText);
//          }
//       }
//    )
//    })
// })


/******************************** */
$('a.remove-cart').click(function(event){ 
    event.preventDefault(); 
   // alert(32222);
    var href = $(this).attr('href');
   $.ajax({
    type: "GET",
    url: href, 
    data:{},
    success: function (res) {
       if(res == 'ok')
       {
        alert("Sản phẩm xóa thành công");
       }else
       {
        alert("Xóa sản phẩm không thành công");
       }
    }
   });
})
// $('.order-button-payment').click(function(event){ 
//     event.preventDefault(); 
//    var href = $(this).attr('href');
//    $.ajax({
//     type: "GET",
//     url: href, 
//     data:{},
//     success: function (res) {
//        if(res == 'ok')
//        {
//         alert("Đặt hàng thành công");
//        }else
//        {
//         alert("Đặt hàng không thành công");
//        }
//     }
//    });
// })
$(document).on('change', 'input.cart-plus-minus-box',function()
{
   var $soluong = $(this).val();
   
   var $myTr = $(this).parent().parent();
   var $giaban = parseInt($myTr.find('td.td-gia-ban input').val(), 10);
   var $tongtien = $giaban * $soluong;
   $myTr.find('#td-thanh-tien').text($tongtien.toLocaleString('vi'));
   alert($myTr);

})
