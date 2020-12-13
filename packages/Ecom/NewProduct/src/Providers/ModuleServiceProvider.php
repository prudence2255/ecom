<?php

namespace Ecom\NewProduct\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        Ecom\NewProduct\Models\NewProduct::class,
    ];
}