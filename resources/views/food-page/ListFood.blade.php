@include('home-page.header')<br/><br/><br/><br/><br/><br/>
<body background="{{asset('background/blur-background04.jpg')}}">
<div class="container">
<div class="col-12 col-md-12">
        <h1 class="justify-center">Danh sách món ăn</h1>
        <table class="table table-striped">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên món ăn</th>
                <th scope="col">Loại món</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Giá</th>
                <th scope="col">Đánh giá</th>
            </tr>
            <?php $soThuTu = 1; ?>
            @forelse($foods as $food)
                <tr>
                    <td>{{ $soThuTu++ }}</td>
                    <td>{{ $food->food_name }}</td>
                    <td>
                        @if($food->food_type == \App\Http\Controllers\FoodType::RAU)
                            {{'Rau'}}
                            @elseif($food->food_type == \App\Http\Controllers\FoodType::THIT)
                            {{'Thịt'}}
                            @else
                            {{'Đồ uống'}}
                        @endif
                    </td>
                    <td>{{ $food->food_description }}</td>
                    <td>
                        @if($food->food_image)
                            <img src="{{asset('storage/'. $food->food_image)}}" alt="" width="90">
                        @else
                            {{'Chưa có ảnh'}}
                        @endif
                    </td>
                    <td>{{ $food->food_price }}</td>
                    <td>{{ $food->food_rating }}&nbsp;<i class="far fa-star"></i></td>
                </tr>

            @empty
                <tr>
                    <td>{{'No data!'}}</td>
                </tr>
            @endforelse
        </table>
    </div>
</div>
</body>
@include('home-page.footer')
