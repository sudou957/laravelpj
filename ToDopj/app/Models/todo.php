<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    use HasFactory;
    protected $guard = array('id');
    public function getDate()
    {
        $txt = $this->content;
        return $txt;
    }
    public static $rules = array(
        'content' => 'required',
    );
}
