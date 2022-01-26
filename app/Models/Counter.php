<?php

namespace App\Models;

use App\Models\Base\Counter as BaseCounter;

class Counter extends BaseCounter
{
	protected $fillable = [
		'name',
		'id_branch',
		'id_user'
	];

    public function getFullNameAttribute() {
        return $this->name . ' / ' . $this->branch->name;
    }
}
