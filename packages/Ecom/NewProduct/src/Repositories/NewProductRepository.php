<?php

namespace Ecom\NewProduct\Repositories;

use Webkul\Core\Eloquent\Repository;

class NewProductRepository extends Repository
{
    /**
    * Specify Model class name
    *
    * @return mixed
    */
    function model()
    {
        return 'Ecom/NewProduct/Contracts/NewProduct';
    }
}