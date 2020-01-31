$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).on('click', '#addToCart', function (event) {
    event.preventDefault();
    let product_id = $('.product_id').val();
    let product_num = $('.num-product').val();
    $.ajax({
        type: 'POST',
        url: '/gio-hang/them-san-pham',
        data: {
            'product_id': product_id,
            'product_num': product_num
        },
        success: function () {
            Swal.fire(
                'Hoàn Thành!',
                'Bạn Đã Thêm Sản Phẩm Vào Giỏ Hàng!',
                'success'
            )
        },
        error: function () {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href>Why do I have this issue?</a>'
            })
        }
    })
});
$(document).on('click', '.addCart', function (event) {
    event.preventDefault();
    let product_id = $(this).parents('.jtv-product').find('.product_id').val();
    let product_num = $('.num-product').val();
    $.ajax({
        type: 'POST',
        url: '/gio-hang/them-san-pham',
        data: {
            'product_id': product_id,
            'product_num': product_num
        },
        success: function () {
            Swal.fire(
                'Hoàn Thành!',
                'Bạn Đã Thêm Sản Phẩm Vào Giỏ Hàng!',
                'success'
            )
        },
        error: function () {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href>Why do I have this issue?</a>'
            })
        }
    })
});
$(document).on('click', '.addToCart', function (event) {
    event.preventDefault();
    let product_id = $(this).parents('.item-inner').find('.product_id').val();
    let product_num = $('.num-product').val();
    $.ajax({
        type: 'POST',
        url: '/gio-hang/them-san-pham',
        data: {
            'product_id': product_id,
            'product_num': product_num
        },
        success: function () {
            Swal.fire(
                'Hoàn Thành!',
                'Bạn Đã Thêm Sản Phẩm Vào Giỏ Hàng!',
                'success'
            )
        },
        error: function () {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href>Why do I have this issue?</a>'
            })
        }
    })
});
$('.input-quantity').change(function () {
    let data = {
        id: $(this).attr('data-id'),
        quantity: $(this).val()
    };
    let _this = $(this);
    $.ajax({
        url: '/gio-hang/update',
        data: data,
        method: "POST",
        success: function (scs) {
            _this.parents('.product-cart').find('.summed-price').text(`${scs.summedPrice} VND`);
            _this.parents('.orderDetail').find('#total_price').text(`${scs.total_price} VND`);
        },
        error: function () {}
    });
});
$(document).on('click', '.deleteCart', function (e) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })
    e.preventDefault();
    swalWithBootstrapButtons.fire({
        title: 'Bạn Chắc Chắn Muốn Xóa?',
        text: "Sau Khi Xóa Dữ Liệu Này Sẽ Mất! Bạn Chắc Chắn Muốn Thực Hiện!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Đồng Ý!',
        cancelButtonText: 'Hủy Bỏ!',
        reverseButtons: true
    }).then((result) => {
        if (result.value) {
            swalWithBootstrapButtons.fire(
                'Xóa Thành Công!',
                'Bạn Đã Xóa File Thành Công!',
                'success'
            )
            $(this).parents('.product-cart').find('.test_cart').click();
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
                'Hủy Bỏ!',
                'Bạn Đã Hủy Bỏ! Dữ Liệu Sẽ Được Dữ Lại!',
                'error'
            )
        }
    })
})
$(document).on('click', '.test_cart', function (event) {
    event.preventDefault();
    let product_id = $(this).parents('.product-cart').find('.product_id').val();
    let _this = $(this);
    $.ajax({
        type: 'POST',
        url: '/gio-hang/delete',
        data: {
            'product_id': product_id
        },
        success: function (scs) {
            _this.parents('.orderDetail').find('#total_price').text(`${scs.total_price} VND`);
            _this.parents('.product-cart').remove();
        },
        error: function () {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href>Why do I have this issue?</a>'
            })
        }
    })
});
$(document).on('click', '.fa-heart', function () {
    Swal.fire({
        title: 'Xin Lỗi Quý Khác!',
        text: 'Chức Năng Đang Trong Quá Trình Xây Dựng! Xin Lỗi Quí Khác Vì Sự Phiền Hà Này!',
        icon: 'error',
        confirmButtonText: 'Xác Nhận'
    })
});
$(document).on('click', '.fa-signal', function () {
    Swal.fire({
        title: 'Xin Lỗi Quý Khác!',
        text: 'Chức Năng Đang Trong Quá Trình Xây Dựng! Xin Lỗi Quí Khác Vì Sự Phiền Hà Này!',
        icon: 'error',
        confirmButtonText: 'Xác Nhận'
    })
});
$(document).ready(function () {
    $("#logout").click(function (e) {
        e.preventDefault();
        $("#logout-form").submit();
    });
});
