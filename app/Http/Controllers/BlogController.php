<?php

namespace App\Http\Controllers;

use App\Http\Services\Implement\BlogService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    protected $blogService;
    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }

    public function index()
    {
        $blogs = $this->blogService->getAll();
        return view('blog.list', compact('blogs'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $this->blogService->create($request);
        Session::flash('success', __('language.add'));

        return redirect()->route('blogs.list');

    }

    public function edit($id)
    {
        $blogs = $this->blogService->findById($id);
        return view('blog.update' , compact('blogs'));
    }

    public function update(Request $request,$id)
    {
        $this->blogService->update($request->all(),$id);

        Session::flash('success', __('language.add'));
        return redirect()->route('blogs.list');
    }

    public function delete($id)
    {
        $blog = $this->blogService->findById($id);
        $this->blogService->delete($blog);

        Session::flash('delete', __('language.delete'));
        return redirect()->route('blogs.list');
    }

}
