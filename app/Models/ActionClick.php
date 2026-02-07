<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActionClick extends Model
{
    protected $fillable = ['action_name', 'context', 'session_id'];

    protected $table = 'action_clicks';
}
