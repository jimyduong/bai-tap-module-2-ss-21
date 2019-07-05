<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function checkLogin(Request $request)
    {
        if ($request->session()->has('login') && $request->session()->get('login')) {
            return true;
        }
        $message = 'Bạn chưa đăng nhập.';
        $request->session()->flash('not-login', $message);
        return false;
    }

    public function showBlog(Request $request)
    {
        if ($this->checkLogin($request)) {
            $blogs = Blog::paginate(5);
//            return view('blog/list', compact('blogs'));
            return response()->json($blogs,200);
        }
        else{
            return response()->json();
        }
    }

    public function view($id)
    {

        $blogKey = 'product_' . $id;
        if (!Session::has($blogKey)) {
            Blog::where('id', $id)->increment('view');
            Session::put($blogKey, 1);
            Session::forget($blogKey);
        }
        $blog = Blog::findOrFail($id);
//        return view('blog/view', compact('blog'));
        return response()->json($blog);

    }
}
