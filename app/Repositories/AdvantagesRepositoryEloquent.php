<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\AdvantagesRepository;
use App\Models\Advantages;
use App\Validators\AdvantagesValidator;

/**
 * Class AdvantagesRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class AdvantagesRepositoryEloquent extends BaseRepository implements AdvantagesRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Advantages::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return AdvantagesValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
