<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostsRequest;
use App\Http\Requests\UpdatePostsRequest;
use App\Models\Comentary;
use App\Models\Posts;
use App\Repositories\PostsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Laracasts\Flash\Flash;
use App\Models\Categories;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Swagger\Annotations\Post;


class PostsController extends AppBaseController
{
    /** @var  PostsRepository */
    private $postsRepository;

    public function __construct(PostsRepository $postsRepo)
    {
        $this->postsRepository = $postsRepo;
    }

    /**
     * Display a listing of the Posts.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        if (auth()->user()->hasRole('Admin')){
            $this->postsRepository->pushCriteria(new RequestCriteria($request));
            $posts = $this->postsRepository->all();
            $categories = Categories::all('id', 'route');

        }else{
            $this->postsRepository->pushCriteria(new RequestCriteria($request));
            $posts = auth()->user()->posts;
            $categories = Categories::all('id', 'route');
        }

        return view('posts.index',['posts'=> $posts, 'categories'=> $categories]);
    }

    /**
     * Show the form for creating a new Posts.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Categories::pluck('route', 'id');
        return view('posts.create', ['categories'=> $categories]);
    }

    /**
     * Store a newly created Posts in storage.
     *
     * @param CreatePostsRequest $request
     *
     * @return Response
     */
    public function store(CreatePostsRequest $request)
    {
        $input = $request->all();

        $posts = $this->postsRepository->create($input);

        Flash::success('Posts saved successfully.');

        return redirect(route('posts.index'));
    }

    /**
     * Display the specified Posts.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $posts = $this->postsRepository->findWithoutFail($id);

        if (empty($posts)) {
            Flash::error('Posts not found');

            return redirect(route('posts.index'));
        }

        return view('posts.show',['posts'=> $posts]);
    }

    /**
     * Show the form for editing the specified Posts.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $posts = $this->postsRepository->findWithoutFail($id);
        $categories = Categories::pluck('route', 'id');
        if (empty($posts)) {
            Flash::error('Posts not found');

            return redirect(route('posts.index'));
        }

        return view('posts.edit', ['categories'=> $categories,'posts'=>$posts]);
    }

    /**
     * Update the specified Posts in storage.
     *
     * @param  int              $id
     * @param UpdatePostsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePostsRequest $request)
    {
        $posts = $this->postsRepository->findWithoutFail($id);

        if (empty($posts)) {
            Flash::error('Posts not found');

            return redirect(route('posts.index'));
        }

        $posts = $this->postsRepository->update($request->all(), $id);

        Flash::success('Posts updated successfully.');

        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified Posts from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $posts = $this->postsRepository->findWithoutFail($id);

        if (empty($posts)) {
            Flash::error('Posts not found');

            return redirect(route('posts.index'));
        }

        $this->postsRepository->delete($id);

        Flash::success('Posts deleted successfully.');

        return redirect(route('posts.index'));
    }

    public function detail($id)
    {
        $post=Posts::where('id', '=', $id)->first();
        $comentaries=Comentary::where('post_id','=',$id)->join('users','users.id','=','user_id')->select('comentaries.*', 'users.name')->get();
        //dd($comentaries);
        return view('normal.posts.detail', ['post'=>$post, 'comentaries'=>$comentaries]);
    }

    public function createNormal($category_id)
    {
        $categories = Categories::pluck('route', 'id');
        return view('normal.posts.create', ['categories'=> $categories, 'category_id'=>$category_id]);
    }

    public function storeNormal(CreatePostsRequest $request)
    {
        $input = $request->all();

        $posts = $this->postsRepository->create($input);

        Flash::success('Posts saved successfully.');

//        $post=new Posts;
//        $data= input::all();
//        $post->fill($data);
//        $post->save();

//        Posts::create($request->all());
        return redirect(route('blog.menu', $request['category']));
    }


}
