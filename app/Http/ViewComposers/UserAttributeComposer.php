<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

use App\Droit\Civilite\Repo\CiviliteInterface;
use App\Droit\Profession\Repo\ProfessionInterface;
use App\Droit\Canton\Repo\CantonInterface;
use App\Droit\Pays\Repo\PaysInterface;
use App\Droit\Specialisation\Repo\SpecialisationInterface;
use App\Droit\Member\Repo\MemberInterface;
use App\Droit\User\Repo\RoleInterface;

class UserAttributeComposer
{
    protected $civilite;
    protected $profession;
    protected $canton;
    protected $pays;
    protected $specialisation;
    protected $member;
    protected $role;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(
        CiviliteInterface $civilite,
        ProfessionInterface $profession,
        PaysInterface $pays,
        CantonInterface $canton,
        MemberInterface $member,
        SpecialisationInterface $specialisation,
        RoleInterface $role
    )
    {
        $this->civilite       = $civilite;
        $this->profession     = $profession;
        $this->canton         = $canton;
        $this->pays           = $pays;
        $this->member         = $member;
        $this->specialisation = $specialisation;
        $this->role           = $role;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $professions     = $this->profession->getAll();
        $cantons         = $this->canton->getAll();
        $pays            = $this->pays->getAll();
        $members         = $this->member->getAll();
        $specialisations = $this->specialisation->getAll();
        $roles           = $this->role->getAll();

        $view->with('civilites',  $this->civilite->getAll());
        $view->with('pays',$pays);
        $view->with('roles',$roles);
        $view->with('cantons',$cantons);
        $view->with('professions',$professions);
        $view->with('members',$members);
        $view->with('specialisations',$specialisations);
    }
}