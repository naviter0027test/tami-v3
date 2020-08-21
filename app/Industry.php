<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    protected $table = 'Industry';
    protected $primaryKey = 'id';
    protected $dateFormat = 'U';

    public function getDateFormat() {
        return 'Y-m-d H:i:s';
    }
}
