@extends("layout")
@section("main_content")
    <form action="{{url("/them_Customer")}}" method="post">
        @csrf
        <h1>More Customer</h1>
        <div class="form-group">
            <label> customer_name</label>
            <input type="text" class="form-control" name="customer_name" value="{{old("customer_name")}}" placeholder=" more customer">
            @if($errors->has("customer_name"))
                <p class="error" style="color: red">{{$errors->first("customer_name")}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>birthday</label>
            <input type="text" class="form-control" name="birthday" value="{{old("birthday")}}" placeholder="more birthday">
            @if($errors->has("birthday"))
                <p class="error" style="color: red">{{$errors->first("birthday")}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>address</label>
            <input type="text" class="form-control" name="address" value="{{old("address")}}" placeholder="more address">
            @if($errors->has("address"))
                <p class="error" style="color: red">{{$errors->first("address")}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>email</label>
            <input type="text" class="form-control" name="email" value="{{old("email")}}" placeholder="more email">
            @if($errors->has("email"))
                <p class="error" style="color: red">{{$errors->first("email")}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>phoneNumber</label>
            <input type="text" class="form-control" name="phoneNumber" value="{{old("phoneNumber")}}" placeholder="more phoneNumber">
            @if($errors->has("phoneNumber"))
                <p class="error" style="color: red">{{$errors->first("phoneNumber")}}</p>
            @endif
        </div>

        <div class="form-group text-right">
            <button type="submit" class="btn btn-outline-danger">Submit</button>
        </div>

    </form>
@endsection