<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Scopes\ScopePerson;

class Person extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'name' => 'required',
        'age' => 'integer|min:0|max:150',
    );
    public function getdata(){
        return $this->id . ':' . $this->name. '(' . $this->age . ')';
    }
}
