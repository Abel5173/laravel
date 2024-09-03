<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function jobs() {
        return $this->belongsToMany(Job::class, relatedPivotKey: 'job_listing_id'); // This is the correct way to define a many-to-many relationship between the Tag and Job models. The relatedPivotKey parameter is used to specify the name of the foreign key column on the pivot table that references the related model.
        //  LogicException  App\Models\Tag::jobs must return a relationship instance, but "null" was returned. Was the "return" keyword used?
        // To solve this error, you need to return the relationship instance from the jobs method. The jobs method should return the result of the belongsToMany method call, like this: return $this->belongsToMany(Job::class, relatedPivotKey: 'job_listing_id');
    }
}
