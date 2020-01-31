<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Applicator - Admin Dashboard Template</title>
    <link rel="apple-touch-icon" href="{{ asset('/bower_components/assets-admin-ecom/images/logo/apple-touch-icon.html') }}">
    <link rel="shortcut icon" href="{{ asset('/bower_components/assets-admin-ecom/images/logo/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('/bower_components/assets-admin-ecom/vendor/bootstrap/dist/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('/bower_components/assets-admin-ecom/vendor/PACE/themes/blue/pace-theme-minimal.css') }}" />
    <link rel="stylesheet" href="{{ asset('/bower_components/assets-admin-ecom/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/bower_components/assets-admin-ecom/vendor/jvectormap-master/jquery-jvectormap-2.0.3.css') }}" />
    <link rel="stylesheet" href="{{ asset('/bower_components/assets-admin-ecom/vendor/datatables/media/css/dataTables.bootstrap4.min.css') }}" />
    <link href="{{ asset('/bower_components/assets-admin-ecom/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower_components/assets-admin-ecom/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower_components/assets-admin-ecom/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower_components/assets-admin-ecom/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower_components/assets-admin-ecom/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower_components/assets-admin-ecom/vendor/summernote/dist/summernote-bs4.css') }}"  rel="stylesheet">
    <script src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/bower_components/sweetalert2/') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body>
    <div class="app header-info-gradient side-nav-dark">
        <div class="layout">
            @include('admin.layouts.header')
            @include('admin.layouts.sidebar')
            <div class="page-container">
                @include('admin.layouts.quickview')
                @yield('content')
                @include('admin.layouts.footer')
            </div>
        </div>
    </div>
    <script src="{{ asset('/bower_components/assets-admin-ecom/js/vendor.js') }}"></script>
    <script src="{{ asset('/bower_components/assets-admin-ecom/js/app.min.js') }}"></script>
    <script src="{{ asset('/bower_components/assets-admin-ecom/vendor/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('/bower_components/assets-admin-ecom/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('/bower_components/assets-admin-ecom/vendor/jvectormap-master/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('/bower_components/assets-admin-ecom/js/maps/vector-map-lib/jquery-jvectormap-world-mill.js') }}"></script>
    <script src="{{ asset('/bower_components/assets-admin-ecom/js/dashboard/saas.js') }}"></script>
    <script src="{{ asset('/bower_components/assets-admin-ecom/vendor/datatables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('/bower_components/assets-admin-ecom/vendor/datatables/media/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/bower_components/assets-admin-ecom/js/tables/data-table.js') }}"></script>

    <script>
        function changeImg(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#prd_img').attr('src',e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        function changeImg1(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#prd_img1').attr('src',e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        function changeImg2(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#prd_img2').attr('src',e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        function changeImg3(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#prd_img3').attr('src',e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        function changeImg4(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#prd_img4').attr('src',e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function() {
            $('#prd_img').click(function(){
                $('#img').click();
            });
            $('#prd_img1').click(function(){
                $('#img1').click();
            });
            $('#prd_img2').click(function(){
                $('#img2').click();
            });
            $('#prd_img3').click(function(){
                $('#img3').click();
            });
            $('#prd_img4').click(function(){
                $('#img4').click();
            });
        });
        $(document).ready(function () {
            $('.checkconfirm').on('click', function(e){
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
                        $(this).parents('.test_tr').find('.test').click();
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
            });
        })
    </script>
    content
    <script type="text/javascript">
        config= {};
        config.entities_latin = false;
        CKEDITOR.replace('description', config);
    </script>
    <script type="text/javascript">
        config= {};
        config.entities_latin = false;
        CKEDITOR.replace('content', config);
    </script>
    <script>
        $(document).ready(function () {
            $("#logout").click(function(e) {
                e.preventDefault();
                $("#logout-form").submit();
            });
        });
    </script>
</body>
</html>
