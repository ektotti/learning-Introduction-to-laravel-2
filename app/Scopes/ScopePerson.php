<?php 
namespace App\Scopes\ScopePerson;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ScopePerson implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->Where('age', '>=', 80);
    }
}
?>