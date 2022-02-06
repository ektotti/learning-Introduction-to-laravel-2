<?php

namespace App\Models;
use App\Scopes\ScopePerson;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Person extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'updated_at', 'created_at'];
    public static $rules = [
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150',
    ];

    public function boards()
    {
        return $this->hasMany('App\Models\Board');
    }

    public function getData(){
        return $this->name.'の年齢は'.$this->age.'です。';
    }

}