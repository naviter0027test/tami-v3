<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobTitle extends Model
{
    protected $table = 'JobTitle';
    protected $primaryKey = 'id';
    protected $dateFormat = 'U';

    public function getDateFormat() {
        return 'Y-m-d H:i:s';
    }
}
