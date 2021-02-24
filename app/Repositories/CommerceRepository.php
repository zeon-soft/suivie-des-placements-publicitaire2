<?php

namespace App\Repositories;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;

//use Your Model

/**
 * Class CommerceRepository.
 */
class CommerceRepository extends BaseRepository
{

    public function model()
    {
        //return YourModel::class;
    }


    public function store(array $inputs)
    {


        $product = parent::store($inputs);
        return $product;

    }

}
