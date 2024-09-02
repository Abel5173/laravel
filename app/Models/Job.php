<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model{
    use HasFactory;
    protected $table = 'job_listings'; // This is the name of the table in the database, what it is doing here is telling Laravel that the model Job is associated with the table job_listings in the database. This is important because Laravel uses the name of the model to determine the name of the table in the database. If the table name is different from the model name, you need to specify the table name in the model. And to specify the table name, you need to use the $table property in the model.
    protected $fillable = ['title', 'salary']; // This is an array of the columns in the table that can be mass assigned. This is important because Laravel uses mass assignment to insert data into the database.

    public function employer() {
        return $this->belongsTo(Employer::class);
    }
}