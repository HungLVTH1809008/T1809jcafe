@extends("layout")
@section("main_content")
    <div class="container-fluid">
             <table class="table table-hover">
                 @if(Session::has("success"))
                     <h1 class="text-center" style="color:green">{{ Session::get("success") }}</h1>
                 @endif
                 <h1 style="text-align: center;color: red">Category</h1>
                     <a href="{{url("/them_Category")}}" class="btn btn-primary">Thêm Category</a>
                <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Content</th>
                <th>Images</th>
                <th>Describe</th>
                <th>Status</th>
                <th>active</th>
                <th>Action </th>
                </thead>

                <tbody>

                @foreach($categorys as $Category)
                    <tr>
                        <td >{{$Category->category_id}}</td>
                        <td>{{$Category->category_name}}</td>
                        <td>{{$Category->content}}</td>
                        <td>{{$Category->images}}</td>
                        <td>{{$Category->describe}}</td>
                        <td>{{$Category->status}}</td>
                        <td>{{$Category->active}}</td>
                        <td>
                            <a class="btn btn-outline-danger" href="sua-category?id=<?php echo $Category->category_id; ?>">Sửa</a>
                        </td>
                        <td> <a class="btn btn-outline-danger" onclick="return confirm('Bạn chắc chắn muốn xóa??')"
                                href="xoa-category/<?php echo $Category->category_id; ?>">xóa</a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
{{--        <div class="d-flex justify-content-between">--}}

{{--            <a href="{{ url('/them_Category') }}" class="btn btn-outline-danger mb-4">Thêm Category</a>--}}
{{--            {!! $categorys -> Links() !!}--}}
{{--        </div>--}}

    </div>

@endsection