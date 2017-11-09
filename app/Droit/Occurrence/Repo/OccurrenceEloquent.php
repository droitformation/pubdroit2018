<?php namespace App\Droit\Occurrence\Repo;

use App\Droit\Occurrence\Repo\OccurrenceInterface;
use App\Droit\Occurrence\Entities\Occurrence as M;

class OccurrenceEloquent implements OccurrenceInterface{

    protected $occurrence;

    public function __construct(M $occurrence)
    {
        $this->occurrence = $occurrence;
    }

    public function getAll(){

        return $this->occurrence->all();
    }

    public function find($id){

        return $this->occurrence->find($id);
    }

    public function create(array $data){

        $occurrence = $this->occurrence->create(array(
            'colloque_id'    => $data['colloque_id'],
            'title'          => $data['title'],
            'capacite_salle' => isset($data['capacite_salle']) ? $data['capacite_salle'] : null,
            'lieux_id'       => $data['lieux_id'],
            'starting_at'    => $data['starting_at']
        ));

        if( ! $occurrence )
        {
            return false;
        }

        // prices
        if(isset($data['prices']))
        {
            $occurrence->prices()->attach($data['prices']);
        }

        return $occurrence;

    }

    public function update(array $data){

        $occurrence = $this->occurrence->find($data['id']);

        if(!$occurrence)
        {
            return false;
        }

        $occurrence->fill($data);

        // prices
        if(isset($data['prices']))
        {
            $occurrence->prices()->sync($data['prices']);
        }
        
        if(isset($data['full']))
        {
            $occurrence->full = $data['full'] > 0 ? 1 : null;
        }

        if(isset($data['capacite_salle']))
        {
            $occurrence->capacite_salle = $data['capacite_salle'] > 0 ? $data['capacite_salle'] : null;
        }

        $occurrence->save();

        return $occurrence;
    }

    public function delete($id){

        $occurrence = $this->occurrence->find($id);

        return $occurrence->delete();

    }
}
