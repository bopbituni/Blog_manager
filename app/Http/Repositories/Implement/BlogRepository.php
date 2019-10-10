<?php


namespace App\Http\Repositories\Implement;


use App\Http\Repositories\BlogRepoInterface;
use App\Blog;

class BlogRepository implements BlogRepoInterface
{
    protected $blog;

    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function getAll()
    {
        return $this->blog->all();
    }

    public function findById($id)
    {
        return $this->blog->findOrFail($id) ;
    }

    public function store($object)
    {
        return $object->save();
    }

    public function update($data, $object)
    {
        $object->update($data);
        return $object;
    }

    public function delete($object)
    {
        return $object->delete();
    }
}