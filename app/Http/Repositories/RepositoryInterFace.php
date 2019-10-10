<?php


namespace App\Http\Repositories;


interface RepositoryInterFace
{
    public function getAll();
    public function findById($id);
    public function store($object);
    public function update($data,$object);
    public function delete($object);

}