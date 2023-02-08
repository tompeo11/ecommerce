<?php

namespace App\Http\Controllers;

use App\Models\Categlory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CateController extends Controller
{
    public function addCate(){
        /*Do o day em chi return thang master, minh khong return no
        ma minh se return thang` con, thang master no se tu dong load nho` cai @extend*/
        return view('admin.addcate');
    }

    public function listCate(){

        //Thay vì dùng query như này có thể dùng model query nhanh hơn
        //Đây là cách dùng DB query
//        $query = DB::table('Categlory')
//            ->select("id","name")
//            ->orderBy("name","asc")
//            ->get();
//        return view('admin.listcate') -> with('ds',$query);

        //Đây là cách dùng model
        //Do dùng model nên phải có model
//        Thay vì ghi quá trời như ở trên thì chỉ cần ghi như này là lấy ra được rồi
//        Nó sẽ trả về mảng trong categories, cái bên trái là tên biến, muốn đặt gì đặt, cái bên phải là hàm lấy
        // tất cả trong database
//        à do không có thời gian tạo nên nó không sắp xếp được =)), lúc này có thể dùng orderby

        return view('admin.listcate',[
            'categories' => Categlory::orderBy('id','DESC')->get()
        ]);
    }

    public function listCatePost(Request $request){
        $t = $request -> post('ten');
        $mt = $request -> post('mota');
        DB::table("categlory")->insert(['name'=>$t,'description'=>$mt]);
        return redirect('/listcate');
    }

    public function index(){
        $cate = Categlory::all();
        return view('admin.listcate') -> with('ds',$cate);
    }
}


//khi  Mà code xong rồi, muốn đẩy git lên git thì lại dùng git add ., git commit -m "mess" và git push

//Chú ý là phải đứng ở đúng folder, những file đỏ là file chưa add
