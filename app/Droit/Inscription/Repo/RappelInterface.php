<?php namespace App\Droit\Inscription\Repo;

interface RappelInterface {

    public function getAll();
    public function find($id);
    public function create(array $data);
    public function update(array $data);
    public function delete($id);

}