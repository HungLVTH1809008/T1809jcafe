<?php

namespace App\Http\Controllers;

use App\Category;
use App\Customer;
use App\Employees;
use App\Product;
use App\User;
use Illuminate\Http\Request;

use Exception;

class MyController extends Controller
{
    public function CategoryList()
    {
        $categorys = Category::all();
        return view("List.ListCategory", compact("categorys"));
    }

    public function danhsach()
    {
        $users = User::all();
        return view("danhsach", compact("users"));
    }

       public function ProductList()
       {
           $products = Product::all();//join("Category","Product.category_id","=","Category.category_id")
//               ->orderBy("product_id","ASC")->paginate(30 ,["Product.product_id","product_name as category_id","product_name","Product.detail","Product.price"
//                      ,"Product.status", "Product.active","Product.images","Product.date","Product.pricenew"
//

//            dd($products);
          return view("List.ListProduct",compact("products"));

        }

// public function CustomerList(){
//        $Customers= Customer::all();
//      return view("List.ListCustomer",compact("Customers"));
//    }

// public function EmployeesList(){
//        $Employeess= Employees::all();
//      return view("List.ListEmployees",compact("Employeess"));
//    }
//
//

    // Thêm dữ liệu
    public function them_category()
    {
        $categorys = Category::all();
        //$sanphams=Sanpham::all();
        return view("More.more_category", compact("categorys"));//,"sanphams"));
//        return $categorys;
    }

    public function luucategory(Request $request)
    {
        $messages = [
            "required" => "Bắt buộc phải nhập thông tin",
            "string" => "Phải nhập vào 1 chuỗi",
            "numeric" => "Giá trị tối thiểu 0 hoặc 6 kí tự",
            "max" => "Tối đa 255 ký tự",
            "unique" => "Đã tồn tại giá trị này"
        ];
        $rules = [
            "category_id" => "required|numeric",
            "category_name" => "required|string|unique:Category",
            "content" => "required|string",
            "images" => "required|string",
            "describe" => "required|string",
            "status" => "required|numeric"

        ];
        $this->validate($request, $messages, $rules);
        /*   "book_name"=>"required|string|max:255|unique:book","qty"=>"required|numeric|min:0","author_id"=>"required|numeric","nxb _id"=>"required|numeric"
       ]);*/
        try {
            //dd($request->all());
            Category::create([
                "category_name" => $request->get("category_name"),
                "content" => $request->get("content"),
                "images" => $request->get("images"),
                "describe" => $request->get("describe"),
                "status" => $request->get("status"),
            ])->save();
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return redirect("/quan_ly_category");
    }

    public function them_Product()
    {
        $products = Product::orderby("product_id","ASC")->get();
        $categorys = Category::orderby("category_id","ASC")->get();
        //dd($products);
        return view("More.more_product", compact("products", "categorys"));

    }

    public function luuproduct(Request $request)
    {
        //dd($request->all());
        $messages = [
            "required" => "Bắt buộc phải nhập thông tin",
            "string" => "Phải nhập vào 1 chuỗi",
            "numeric" => "nhập vào một số",
            "max" => "Tối đa 255 ký tự",
            "unique" => "Đã tồn tại giá trị này"
        ];
        $rules = [
            "product_id" => "required|numeric",
            "product_name" => "required|string|unique:Product",
            "detail" => "required|string",
            "price" => "required|numeric",
            "status" => "required|numeric",
            "images" => "required|string",
            "date" => "required",
            "pricenew" => "required|numeric"


        ];
     $this->validate($request,$messages);
        /*   "book_name"=>"required|string|max:255|unique:book","qty"=>"required|numeric|min:0","author_id"=>"required|numeric","nxb _id"=>"required|numeric"
       ]);*/
        try {
            Product::create([
                "product_id"=>$request->get("product_id"),
                "product_name" => $request->get("product_name"),
                "detail" => $request->get("detail"),
                "price" => $request->get("price"),
                "status" => $request->get("status"),
                "images" => $request->get("images"),
                "date" => $request->get("date"),
                "pricenew" => $request->get("pricenew"),
                "category_id" => $request->get("category_id"),

            ])->save();
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return redirect("/quan_ly_product");
    }

//    public function them_Customer()
//    {
//        $customers = Customer::all();
//        return view("More.more_customer", compact("customers"));//,"sanphams"));
//
//    }
//
//    public function luucustomer(Request $request)
//    {
//        $messages = [
//            "required" => "Bắt buộc phải nhập thông tin",
//            "string" => "Phải nhập vào 1 chuỗi",
//            "numeric" => "Giá trị tối thiểu 0 hoặc 6 kí tự",
//            "max" => "Tối đa 255 ký tự",
//            "unique" => "Đã tồn tại giá trị này"
//        ];
//        $rules = [
//            "customer_id" => "required|numeric",
//            "customer_name" => "required|string|unique:Customer",
//            "birthday" => "required|numeric",
//            "address" => "required|string",
//            "email" => "required|string",
//            "phoneNumber" => "required|numeric"
//
//        ];
//        $this->validate($request, $messages, $rules);
//        /*   "book_name"=>"required|string|max:255|unique:book","qty"=>"required|numeric|min:0","author_id"=>"required|numeric","nxb _id"=>"required|numeric"
//       ]);*/
//        try {
//            Customer::create([
//                "customer_name" => $request->get("customer_name"),
//                "birthday" => $request->get("birthday"),
//                "address" => $request->get("address"),
//                "email" => $request->get("email"),
//                "phoneNumber" => $request->get("phoneNumber"),
//            ])->save();
//        } catch (\Exception $e) {
//            die($e->getMessage());
//        }
//        return redirect("/quan_ly_customer");
//    }
//
//    public function them_Employees()
//    {
//        $employeess = Employees::all();
//        return view("More.more_employees", compact("employeess"));//,"sanphams"));
//
//    }
//
//    public function luuemployees(Request $request)
//    {
//        $messages = [
//            "required" => "Bắt buộc phải nhập thông tin",
//            "string" => "Phải nhập vào 1 chuỗi",
//            "numeric" => "Giá trị tối thiểu 0 hoặc 6 kí tự",
//            "max" => "Tối đa 255 ký tự",
//            "unique" => "Đã tồn tại giá trị này"
//        ];
//        $rules = [
//            "employees_id" => "required|numeric",
//            "employees_name" => "required|string|unique:Employees",
//            "sex" => "required|string",
//            "birthday" => "required|string",
//            "address" => "required|string",
//            "email" => "required|string",
//            "phoneNumber" => "required|numeric"
//
//        ];
//        $this->validate($request, $messages, $rules);
//        /*   "book_name"=>"required|string|max:255|unique:book","qty"=>"required|numeric|min:0","author_id"=>"required|numeric","nxb _id"=>"required|numeric"
//       ]);*/
//        try {
//            Employees::create([
//                "employees_name" => $request->get("employees_name"),
//                "sex" => $request->get("sex"),
//                "birthday" => $request->get("birthday"),
//                "address" => $request->get("address"),
//                "email" => $request->get("email"),
//                "phoneNumber" => $request->get("phoneNumber"),
//            ])->save();
//        } catch (\Exception $e) {
//            die($e->getMessage());
//        }
//        return redirect("/quan_ly_employees");
//    }

    //xoa du lieu
    function xoacategory($id)
    {
        $category= Category::find($id);
        try {
           // $category->delete();
            $category->active=0;
            $category->save();

        } catch (Exception $e) {

            //die($e->getMessage());
            return redirect("quan_ly_category")->withErrors(["fail"=>$e->getMessage()]);
        }
        return redirect("quan_ly_category")->with("success", "Xóa thành công !");
    }

    function xoaproduct($id){
        $product = Product::find($id);
        try{
            //$product -> delete();
            $product->active=0;
            $product->save();
        }
        catch(Exception $e){
            //die($e -> getMessage());
            return redirect("quan_ly_product")->withErrors(["fail"=>$e->getMessage()]);
        }
        return redirect("quan_ly_product")->with("success","Xóa thành công !");
    }
//
//    function xoa_Customer($id){
//        $customer = Customer::find($id);
//        try{
//            $customer -> delete();
//        }
//        catch(Exception $e){
//            die($e -> getMessage());
//        }
//        return redirect("customer")->with("success","Xóa thành công !");
//    }
//
//    function xoa_Employees($id){
//        $employees = Employees::find($id);
//        try{
//            $employees -> delete();
//        }
//        catch(Exception $e){
//            die($e -> getMessage());
//        }
//        return redirect("employees")->with("success","Xóa thành công !");
//    }
    function suacategory(Request $request)
    {
            $category_id = $request->get("id");
            $category =Category::find($category_id);
            return view("update.repair_category", compact("category"));
    }




    // luu lai thong tin da sua
    function updatecategory(Request $request)
    {
        $category = Category::find($request -> get("category_id"));
        $messages = [
            "required" => "vui lòng nhập vào thông tin",
            "string" => "Phải nhập vào 1 chuỗi",
            "numeric" => "Nhập vào một số",
            "min" => "giá trị tối thiểu 0",
            "max" => "tối đa 255 ký tự",
            "unique" => "Đã tồn tại",
        ];

        $rules = [
            "category_id" => "required|numeric",
            "category_name" => "required|string|unique:Category",
            "content" => "required|string",
            "images" => "required|string",
            "describe" => "required|string",
            "status" => "required|numeric"

        ];
        // dd($request->all());

        $this -> validate($request , $rules , $messages);

        try{
            $category -> update([
                "category_name" => $request->get("category_name"),
                "content" => $request->get("content"),
                "images" => $request->get("images"),
                "describe" => $request->get("describe"),
                "status" => $request->get("status"),
            ]);
        }
        catch(\Exception $e){
            die( $e -> getMessage());
        }

        return redirect("/quan_ly_category");
    }


    function suaproduct(Request $request){
        $product_id = $request -> get("id");
        $product = Product::find($product_id);
        //$categorys = Category::orderBy("category_id","ASC") -> get();

        return view("update.repair_product" ,compact("product"));
    }

    // luu lai thong tin da sua
    function updateproduct(Request $request)
    {
        $product = Product::find($request -> get("product_id"));
//        $messages = [
//            "required" => "vui lòng nhập vào thông tin",
//            "string" => "Phải nhập vào 1 chuỗi",
//            "numeric" => "Nhập vào một số",
//            "min" => "giá trị tối thiểu 0",
//            "max" => "tối đa 255 ký tự",
//            "unique" => "Đã tồn tại",
//        ];
//
//        $rules = [
//            "product_id" => "required|numeric",
//            "product_name" => "required|string|unique:Product",
//            "category_id"=>"required|numeric",
//            "detail" => "required|string",
//            "price" => "required|numeric",
//            "status" => "required|numeric",
//            "images" => "required|string",
//            "date" => "required",
//            "pricenew" => "required|numeric"
//
//
//        ];
//        // dd($request->all());
//
//        $this -> validate($request , $rules,$messages );

        try{
            $product -> update([
                "product_name" => $request->get("product_name"),
                "detail" => $request->get("detail"),
                "price" => $request->get("price"),
                "status" => $request->get("status"),
                "images" => $request->get("images"),
                "date" => $request->get("date"),
                "pricenew" => $request->get("pricenew"),

            ]);
        }
        catch(\Exception $e){
            die( $e -> getMessage());
        }

        return redirect("/quan_ly_product");
    }

}



