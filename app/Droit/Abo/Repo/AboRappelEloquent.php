<?php namespace App\Droit\Abo\Repo;

use App\Droit\Abo\Repo\AboRappelInterface;
use App\Droit\Abo\Entities\Abo_rappels as M;

class AboRappelEloquent implements AboRappelInterface{

    protected $rappel;

    public function __construct(M $rappel)
    {
        $this->rappel = $rappel;
    }

    public function getAll(){

        return $this->rappel->all();
    }

    public function find($id){

        return $this->rappel->with(['facture'])->find($id);
    }

    public function findByAllFacture($facture_id)
    {
        return $this->rappel->where('abo_facture_id','=',$facture_id)->get();
    }

    public function findByFacture($facture_id)
    {
        $rappel = $this->rappel->where('abo_facture_id','=',$facture_id)->groupBy('abo_facture_id')->orderBy('created_at', 'desc')->take(1)->get();

        if(!$rappel->isEmpty())
        {
            return $rappel->first();
        }

        return null;
    }

    public function rappelsForFactures($facture_id)
    {
        return  $this->rappel->where('abo_facture_id','=',$facture_id)->groupBy('abo_facture_id')->orderBy('created_at', 'desc')->get();
    }

    public function create(array $data){

        $rappel = $this->rappel->create([
            'abo_facture_id' => $data['abo_facture_id']
        ]);

        if( ! $rappel )
        {
            return false;
        }

        return $rappel;
    }

    public function update(array $data){

        $rappel = $this->rappel->findOrFail($data['id']);

        if( ! $rappel )
        {
            return false;
        }

        $rappel->fill($data);

        $rappel->save();

        return $rappel;
    }

    public function delete($id){

        $rappel = $this->rappel->find($id);

        return $rappel->delete();
    }
}
