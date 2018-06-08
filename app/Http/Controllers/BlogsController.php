<?php

namespace App\Http\Controllers;
use App\Blog;
use App\Models\Categories;
use App\Models\Posts;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {

        $posts = Posts::where('view', 'public')->get();

        $menu = Blog::generateFirstMenu('categories');
        return view('blog.index', ['posts' => $posts, 'menu' => $menu]);
    }

    public function menu($id)
    {
        $posts = Posts::where('category','=', $id)->get();
        //$posts = Posts::where('category','=', $id)->join('categories as cF', [['posts.category', '=', 'cF.id']])->join('categories as cS', [[$id,'=','cS.category_id'],['cF.id' ,'=','cS.category_id']])->get();

        if($menu = Blog::generateSecondMenu('categories', $id)){
            if(count($menu)<=1){
                $menu= Categories::where('id','=',$id)->get();
            }
        }
        return view('blog.index', ['posts' => $posts, 'menu' => $menu]);

    }

}
