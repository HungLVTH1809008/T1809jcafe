@extends("layout")
@section("main_content")
    <form action="{{url("/them_Category")}}" method="post">
        @csrf
        <h1>More Category</h1>
        <div class="form-group">
            <label> Category_name</label>
            <input type="text" class="form-control" name="category_name" value="{{old("category_name")}}" placeholder=" more category">
            @if($errors->has("category_name"))
                <p class="error" style="color: red">{{$errors->first("category_name")}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>content</label>
            <input type="text" class="form-control" name="content" value="{{old("content")}}" placeholder="more content">
            @if($errors->has("content"))
                <p class="error" style="color: red">{{$errors->first("more")}}</p>
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
            <label>describe</label>
            <input type="text" class="form-control" name="describe" value="{{old("describe")}}" placeholder="more describe">
            @if($errors->has("describe"))
                <p class="error" style="color: red">{{$errors->first("describe")}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>status</label>
            <input type="text" class="form-control" name="status" value="{{old("status")}}" placeholder="more status">
            @if($errors->has("status"))
                <p class="error" style="color: red">{{$errors->first("status")}}</p>
            @endif
        </div>


        <div class="form-group text-right">
            <button type="submit" class="btn btn-outline-danger">Submit</button>
        </div>

    </form>
@endsection