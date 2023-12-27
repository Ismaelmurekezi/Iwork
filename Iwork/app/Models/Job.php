<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable=['title','company','status','email','location','tags','website','description'];

    public function scopeFilter($query,array $filters){

        //if this is not false then 
     if($filters['tag'] ?? false){

  $query->where('tags','like','%'. request('tag').'%');

     };

     if($filters['search'] ?? false){
        $query->where('title','like','%'. request('search').'%')
        ->orWhere('description','like','%'. request('search').'%')
        ->orWhere('location','like','%'. request('search').'%')
        ->orWhere('tags','like','%'. request('search').'%')
        ->orWhere('tags','like','%'. request('search').'%')
        ->orWhere('status','like','%'. request('search').'%')

        ;
      
           };

    

    }
}
