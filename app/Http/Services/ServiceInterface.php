<?php


namespace App\Http\Services;


interface ServiceInterface
{
    public function getAll();
    public function findById($id);
    public function create($object);
    public function update($object, $id);
    public function delete($id);
}