<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mùng tự bung Bảo Lộc giá rẻ chất lượng bất ngờ!</title>
    <meta name="description"
        content="Explore the live preview of the professional Modern - Multi Purpose eCommerce Website Template get yourself knowledgeable about this theme prior to buying it. Browse through the pages, check out the images, click the buttons, explore the features.">
    <meta name="keywords"
        content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive theme, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700italic,700,400italic' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dosis:400,300,200,500,600,700,800' rel='stylesheet'
        type='text/css'>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('bower_components/assets-client-ecom/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('bower_components/assets-client-ecom/css/font-awesome.css') }}" media="all">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('bower_components/assets-client-ecom/css/simple-line-icons.css') }}" media="all">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('bower_components/assets-client-ecom/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets-client-ecom/css/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('bower_components/assets-client-ecom/css/owl.transitions.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets-client-ecom/css/animate.css') }}"
        media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets-client-ecom/css/flexslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets-client-ecom/css/jquery-ui.css') }}">
    <link href="{{ asset('bower_components/assets-client-ecom/css/revolution-slider.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets-client-ecom/css/style.css') }}"
        media="all">
</head>

<body class="cms-index-index cms-home-page preloading">
    <div class="load">
        <img src="{{ asset('bower_components/assets-client-ecom/images/loading/1.gif') }}">
    </div>
    @include('client.layouts.mobile_menu')
    <div id="page">
        @include('client.layouts.header')
        @include('client.layouts.sidebar')
        @yield('content')
        @include('client.layouts.footer')
        <a href="#" class="totop"> </a>
    </div>

    <script type="text/javascript" src="{{ asset('bower_components/assets-client-ecom/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/assets-client-ecom/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/assets-client-ecom/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/assets-client-ecom/js/jquery.bxslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/assets-client-ecom/js/revolution-slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/assets-client-ecom/js/megamenu.js') }}"></script>
    <script type="text/javascript">
        var mega_menu = '0';
    </script>
    <script type="text/javascript" src="{{ asset('bower_components/assets-client-ecom/js/mobile-menu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/assets-client-ecom/js/jquery-ui.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/assets-client-ecom/js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/assets-client-ecom/js/countdown.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/assets-client-ecom/js/cloud-zoom.js') }}"></script>
    <script type="text/javascript">
        var dthen1 = new Date("12/25/16 11:59:00 PM");
        start = "08/04/15 03:02:11 AM";
        start_date = Date.parse(start);
        var dnow1 = new Date(start_date);
        if (CountStepper > 0)
            ddiff = new Date((dnow1) - (dthen1));
        else
            ddiff = new Date((dthen1) - (dnow1));
        gsecs1 = Math.floor(ddiff.valueOf() / 1000);

        var iid1 = "countbox_1";
        CountBack_slider(gsecs1, "countbox_1", 1);
    </script>
    <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).on('click', '#addToCart', function(event){
                event.preventDefault();
                let product_id = $('.product_id').val();
                let product_num = $('.num-product').val();
                $.ajax({
                    type: 'POST',
                    url: '/gio-hang/them-san-pham',
                    data: {'product_id' : product_id, 'product_num' : product_num},
                    success: function() {
                        location.reload();
                    },
                    error: function(){
                        alert('fail');
                    }
                })
            });
            $(document).on('click', '.addCart', function(event){
                event.preventDefault();
                let product_id = $(this).parents('.jtv-product').find('.product_id').val();
                let product_num = $('.num-product').val();
                $.ajax({
                    type: 'POST',
                    url: '/gio-hang/them-san-pham',
                    data: {'product_id' : product_id, 'product_num' : product_num},
                    success: function() {
                        location.reload();
                    },
                    error: function(){
                        alert('fail');
                    }
                })
            });
            $(document).on('click', '.addToCart', function(event){
                event.preventDefault();
                let product_id = $(this).parents('.item-inner').find('.product_id').val();
                let product_num = $('.num-product').val();
                $.ajax({
                    type: 'POST',
                    url: '/gio-hang/them-san-pham',
                    data: {'product_id' : product_id, 'product_num' : product_num},
                    success: function() {
                        location.reload();
                    },
                    error: function(){
                        alert('fail');
                    }
                })
            });
            $('.input-quantity').change(function() {
				let data = {
					id: $(this).attr('data-id'),
					quantity: $(this).val()
				};
                let _this = $(this);
				$.ajax({
					url: '/gio-hang/update',
					data: data,
					method: "POST",
					success: function(scs) {
						_this.parents('.product-cart').find('.summed-price').text(`${scs.summedPrice} VND`);
						_this.parents('.orderDetail').find('#total_price').text(`${scs.total_price} VND`);
					},
					error: function() {
					}
                });
			});

            $(document).on('click', '.deleteCart', function(event){
                event.preventDefault();
                let product_id = $(this).parents('.product-cart').find('.product_id').val();
                let _this = $(this);
                $.ajax({
                    type: 'POST',
                    url: '/gio-hang/delete',
                    data: {'product_id' : product_id},
                    success: function(scs) {
                        _this.parents('.orderDetail').find('#total_price').text(`${scs.total_price} VND`);
                        _this.parents('.product-cart').remove();
                    },
                    error: function(){
                        alert('fail');
                    }
                })
            });
            $(document).on('click', '.fa-heart', function(){
                alert('Chức Năng Đang Trong Quá Trình Xây Dựng! Xin Lỗi Quí Khác Vì Sự Phiền Hà Này!')
            });
            $(document).on('click', '.fa-signal', function(){
                alert('Chức Năng Đang Trong Quá Trình Xây Dựng! Xin Lỗi Quí Khác Vì Sự Phiền Hà Này!')
            });
            
    </script>
</body>

</html>
