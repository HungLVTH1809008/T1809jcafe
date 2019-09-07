@extends("layout")
@section("main_content")
    <div class="container my-5">
        <form action="{{url("/them_Product")}}" method="post">
            @csrf
            <h1>More Product</h1>
            <div class="form-group">
                <label> Product_name</label>
                <input type="text" class="form-control" name="product_name" value="{{old("product_name")}}" placeholder=" more product">
                @if($errors->has("product_name"))
                    <p class="error" style="color: red">{{$errors->first("product_name")}}</p>
                @endif
            </div>
            <div class="form-group">
                <label>detail</label>
                <input type="text" class="form-control" name="detail" value="{{old("detail")}}" placeholder="more detail">
                @if($errors->has("detail"))
                    <p class="error" style="color: red">{{$errors->first("detail")}}</p>
                @endif
            </div>
            <div class="form-group">
                <label>price</label>
                <input type="text" class="form-control" name="price" value="{{old("price")}}" placeholder="more price">
                @if($errors->has("price"))
                    <p class="error" style="color: red">{{$errors->first("price")}}</p>
                @endif
            </div>
            <div class="form-group">
                <label>status</label>
                <input type="text" class="form-control" name="status" value="{{old("status")}}" placeholder="more status">
                @if($errors->has("status"))
                    <p class="error" style="color: red">{{$errors->first("status")}}</p>
                @endif
            </div>
            <div class="form-group">
                <label>images</label>
                <input type="text" class="form-control" name="images" value="{{old("images")}}" placeholder="more images">
                @if($errors->has("images"))
                    <p class="error" style="color: red">{{$errors->first("images")}}</p>
                @endif
            </div>
            <div class="form-group">
                <label>date</label>
                <input type="text" class="form-control" name="date" value="{{old("date")}}" placeholder="more date">
                @if($errors->has("date"))
                    <p class="error" style="color: red">{{$errors->first("date")}}</p>
                @endif
            </div>
            <div class="form-group">
                <label>pricenew</label>
                <input type="text" class="form-control" name="pricenew" value="{{old("pricenew")}}" placeholder="more pricenew">
                @if($errors->has("pricenew"))
                    <p class="error" style="color: red">{{$errors->first("pricenew")}}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="">category_id</label>
                <select class="form-control" name="category_id" id="">
                    @foreach ($categorys as $category)
                        <option value="{{ $category -> category_id }}">
                            {{ $category-> category_id }} . {{ $category -> name }}
                        </option>
                    @endforeach
                </select>
            </div>


            <div class="form-group text-right">
                <button type="submit" class="btn btn-outline-danger">Submit</button>
            </div>

        </form>
    </div>
@endsection