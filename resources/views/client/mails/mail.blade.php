Khách hàng đặt hàng: <br>
Tên Khác Hàng: {{ $name }} <br>
Email Khách Hàng: {{ $email }} <br>
Địa Chỉ: {{ $address }} <br>
Số điện thoại: {{ $phone }} <br>
Đã Đặt : <br>
    @foreach ($cart as $detail)
        {{ $detail['product_name'] }} - {{ $detail['product_num'] }} Sản Phẩm - {{ number_format($detail['num_price']) }} VND <br>
    @endforeach
Tổng Tiền: {{ number_format($total_price) }} VND <br>
Ghi Chú: {{ $requiment }} 