<?php namespace App\Droit\User\Repo;

interface UserInterface {

    public function getAll();
    public function getPaginate();
    public function find($data);
    public function findByEmail($email);
    public function findByName($name);
    public function search($term);
    public function searchSimple($terms);
    public function create(array $data);
    public function update(array $data);
    public function delete($id);
    public function restore($id);

    // Deleted adresses filters
    public function getDeleted($terms = [], $operator = null);
    public function findWithTrashed($id);
    public function getMultiple($ids);

    public function get_ajax($draw, $start, $length, $sortCol, $sortDir, $search);
    public function findByUserNameOrCreate($userData);
    public function checkIfUserNeedsUpdating($userData, $user);

}
