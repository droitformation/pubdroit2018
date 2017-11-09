<?php namespace App\Droit\Sondage\Repo;

interface ReponseInterface {

    public function getAll();
    public function find($data);
    public function hasAnswer($email, $sondage_id);
    public function create(array $data);
    public function update(array $data);
    public function delete($id);

}