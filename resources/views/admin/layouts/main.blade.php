<!DOCTYPE html>
<html>


<!-- Mirrored from themenate.com/applicator/dist/index-saas.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jul 2018 12:00:22 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Applicator - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon"
        href="{{ asset('/bower_components/assets-admin-ecom/images/logo/apple-touch-icon.html') }}">
    <link rel="shortcut icon" href="{{ asset('/bower_components/assets-admin-ecom/images/logo/favicon.png') }}">

    <!-- core dependcies css -->
    <link rel="stylesheet"
        href="{{ asset('/bower_components/assets-admin-ecom/vendor/bootstrap/dist/css/bootstrap.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('/bower_components/assets-admin-ecom/vendor/PACE/themes/blue/pace-theme-minimal.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('/bower_components/assets-admin-ecom/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" />

    <!-- page css -->
    <link rel="stylesheet"
        href="{{ asset('/bower_components/assets-admin-ecom/vendor/jvectormap-master/jquery-jvectormap-2.0.3.css') }}" />
    <link rel="stylesheet" href="{{ asset('/bower_components/assets-admin-ecom/vendor/datatables/media/css/dataTables.bootstrap4.min.css') }}" />

    <!-- core css -->
    <link href="{{ asset('/bower_components/assets-admin-ecom/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower_components/assets-admin-ecom/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower_components/assets-admin-ecom/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower_components/assets-admin-ecom/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower_components/assets-admin-ecom/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower_components/assets-admin-ecom/vendor/summernote/dist/summernote-bs4.css') }}"  rel="stylesheet">
</head>

<body>
    <div class="app header-info-gradient side-nav-dark">
        <div class="layout">
            <!-- Header START -->
            @include('admin.layouts.header')
            <!-- Header END -->

            <!-- Side Nav START -->
            @include('admin.layouts.sidebar')
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                <!-- Quick View START -->
                    @include('admin.layouts.quickview')
                <!-- Side Panel END -->

                <!-- Content Wrapper START -->
                    @yield('content')
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                @include('admin.layouts.footer')
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->

        </div>
    </div>

    <script src="{{ asset('/bower_components/assets-admin-ecom/js/vendor.js') }}"></script>

    <script src="{{ asset('/bower_components/assets-admin-ecom/js/app.min.js') }}"></script>
    <script src="{{ asset('/bower_components/assets-admin-ecom/vendor/summernote/dist/summernote-bs4.min.js') }}"></script>
    <!-- page js -->
    <script src="{{ asset('/bower_components/assets-admin-ecom/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script
        src="{{ asset('/bower_components/assets-admin-ecom/vendor/jvectormap-master/jquery-jvectormap-2.0.3.min.js') }}">
    </script>
    <script
        src="{{ asset('/bower_components/assets-admin-ecom/js/maps/vector-map-lib/jquery-jvectormap-world-mill.js') }}">
    </script>
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
    </script>
</body>


<!-- Mirrored from themenate.com/applicator/dist/index-saas.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jul 2018 12:00:49 GMT -->

</html>
