@extends("layout")
@section("main_content")
    <div class="container my-5">
        <form action="{{url("/sua-category")}}" method="post">
            @csrf
            <h1>repair Category</h1>
            <input type="hidden" name="category_id"  value="{{ $category->category_id }}">
            <div class="form-group">
                <label for="">category_name</label>
                <input type="text" name="category_name" id="" class="form-control" value="{{ $category->category_name }}">
                @if($errors -> has("category_name"))
                    <p class="error">{{ $errors -> first("category_name") }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="">content</label>
                <input type="text" name="content" id="" class="form-control" value="{{ $category->content }}">
                @if($errors -> has("content"))
                    <p class="error">{{ $errors -> first("content") }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="">images</label>
                <input type="text" name="images" id="" class="form-control" value="{{ $category->images}}">
                @if($errors -> has("images"))
                    <p class="error">{{ $errors -> first("images") }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="">describe</label>
                <input type="text" name="describe" id="" class="form-control" value="{{ $category->describe}}">
                @if($errors -> has("describe"))
                    <p class="error">{{ $errors -> first("describe") }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="">status</label>
                <input type="text" name="status" id="" class="form-control" value="{{ $category->status}}">
                @if($errors -> has("status"))
                    <p class="error">{{ $errors -> first("status") }}</p>
                @endif
            </div>

            <button class="btn btn-outline-danger" type="submit">Sửa category</button>
        </form>
    </div>
@endsection