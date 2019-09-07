@extends("layout")

@section("main_content")
    <table class="table table-hover">
        @if(Session::has("success"))
            <h1 class="text-center" style="color:green">{{ Session::get("success") }}</h1>
        @endif
        <h1 style="text-align: center;color: red">Product</h1>
            <a href="{{url("/them_Product")}}" class="btn btn-primary">Thêm Product</a>
        <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Category_id</th>
        <th>Detail</th>
        <th>Price</th>
        <th>Status</th>
        <th>Images</th>
        <th>Date</th>
        <th>PriceNew</th>
        <th>active</th>
        <th>Action </th>
        </thead>
        <tbody>

        @foreach($products as $Product)

            <tr>
                <td>{{$Product->product_id}}</td>
                <td>{{$Product->product_name}}</td>
                <td>{{$Product->category_id}}</td>
                <td>{{$Product->detail}}</td>
                <td>{{$Product->price}}</td>
                <td>{{$Product->status}}</td>
                <td>{{$Product->images}}</td>
                <td>{{$Product->date}}</td>
                <td>{{$Product->pricenew}}</td>
                <td>{{$Product->active}}</td>
                <td>
                    <a class="btn btn-outline-danger" href="sua-product?id=<?php echo $Product->product_id; ?>">edit</a>
                </td>
                <td> <a class="btn btn-outline-danger" onclick="return confirm('Bạn chắc chắn muốn xóa??')"
                        href="xoa-product/<?php echo $Product->product_id; ?>">delete</a></td>
            </tr>

        @endforeach

        </tbody>

    </table>


@endsection