<?php

namespace Modules\Upgrade\Abstracts;

use App\Models\User;

abstract class PlanContract
{
    private $id;
    private $price;
    private $period;

    public abstract  function handler(User $user);
}
