<?php


namespace App\Http\Services\Implement;


use App\Blog;
use App\Http\Repositories\Implement\BlogRepository;
use App\Http\Services\BlogServiceInterface;
use Illuminate\Http\Request;

class BlogService implements BlogServiceInterface
{
    protected $repo;
    public function __construct(BlogRepository $repo)
    {
        $this->repo = $repo;
    }

    public function getAll()
    {
        return $this->repo->getAll();
    }

    public function findById($id)
    {
        return $this->repo->findById($id);
    }

    public function create($request)
    {
        $blog = new Blog();
        $blog->content = $request->content;
        $blog->title = $request->title;
        $this->repo->store($blog);
    }

    public function update($request, $id)
    {
        $blog = $this->repo->findById($id);
        $this->repo->update($request, $blog);
    }

    public function delete($object)
    {
        $this->repo->delete($object);
    }
}