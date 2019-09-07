@extends("layout")
@section("main_content")
<div class="container my-5">
    <form action="{{url("/sua-product")}}" method="post">
        @csrf
        <h1>Thay đổi Product</h1>
        <input type="hidden" name="product_id"  value="{{ $product->product_id }}">
        <div class="form-group">
            <label for="">product_name</label>
            <input type="text" name="product_name" id="" class="form-control" value="{{ $product->product_name }}">
            @if($errors -> has("product_name"))
                <p class="error">{{ $errors -> first("product_name") }}</p>
            @endif
        </div>

        <div class="form-group">
            <label for="">detail</label>
            <input type="text" name="detail" id="" class="form-control" value="{{ $product->detail }}">
            @if($errors -> has("detail"))
                <p class="error">{{ $errors -> first("detail") }}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="">price</label>
            <input type="text" name="price" id="" class="form-control" value="{{ $product->price }}">
            @if($errors -> has("price"))
                <p class="error">{{ $errors -> first("price") }}</p>
            @endif
        </div>
         <div class="form-group">
            <label for="">status</label>
            <input type="text" name="status" id="" class="form-control" value="{{ $product->status }}">
            @if($errors -> has("status"))
                <p class="error">{{ $errors -> first("status") }}</p>
            @endif
        </div>

        <div class="form-group">
            <label for="">images</label>
            <input type="text" name="images" id="" class="form-control" value="{{ $product->images}}">
            @if($errors -> has("images"))
                <p class="error">{{ $errors -> first("images") }}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="">date</label>
            <input type="text" name="date" id="" class="form-control" value="{{ $product->date}}">
            @if($errors -> has("date"))
                <p class="error">{{ $errors -> first("date") }}</p>
            @endif
        </div>

        <div class="form-group">
            <label for="">pricenew</label>
            <input type="text" name="pricenew" id="" class="form-control" value="{{ $product->pricenew}}">
            @if($errors -> has("pricenew"))
                <p class="error">{{ $errors -> first("pricenew") }}</p>
            @endif
        </div>
{{--        <div class="form-group">--}}
{{--            <label for="">Category</label>--}}
{{--            <select class="form-control" name="category_id">--}}
{{--                @foreach ($categorys as $category)--}}
{{--                    <option value="{{ $category -> category_id }}" @if($category->category_id== $product->category_id ) selected @endif>--}}
{{--                        {{ $category -> category_id }} &nbsp.&nbsp{{ $category -> category_name }}--}}
{{--                    </option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--            <small id="helpId" class="text-muted">Help text</small>--}}
{{--        </div>--}}

        <button class="btn btn-outline-danger" type="submit">Sửa product</button>
    </form>
</div>
@endsection