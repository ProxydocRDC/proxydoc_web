<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageVisit extends Model
{
    protected $fillable = ['path', 'session_id', 'ip_hash', 'ip', 'country'];

    protected $table = 'page_visits';
}
