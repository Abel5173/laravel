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

    public function tags() {
        return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id"); // Here we are defining a many-to-many relationship between the Job model and the Tag model. This is because a job can have many tags and a tag can belong to many jobs. To define a many-to-many relationship in Laravel, we need to use the belongsToMany method on the model that has the many-to-many relationship. In this case, the Job model has the many-to-many relationship, so we are using the belongsToMany method on the Job model. The belongsToMany method takes two arguments: the first argument is the model that the current model is related to, and the second argument is the name of the pivot table that connects the two models. In this case, the Job model is related to the Tag model, so we are passing the Tag model as the first argument. The second argument is the name of the pivot table that connects the Job model and the Tag model. In this case, the pivot table is called job_tag, so we are passing job_tag as the second argument. The pivot table is a table that connects two models in a many-to-many relationship. It contains the foreign keys of the two models and any other columns that are needed to connect the two models. In this case, the job_tag table contains the foreign keys of the Job model and the Tag model, and it also contains the timestamps of when the relationship was created and updated. The foreign keys in the job_tag table are job_listing_id and tag_id. The job_listing_id column is the foreign key of the Job model, and the tag_id column is the foreign key of the Tag model. The timestamps are created_at and updated_at. The foreignPivotKey option is used to specify the foreign key of the current model in the pivot table. In this case, the foreign key of the Job model in the job_tag table is job_listing_id, so we are using the foreignPivotKey option to specify that the foreign key of the Job model in the job_tag table is job_listing_id. If the foreign key of the current model in the pivot table is different from the default foreign key, you need to use the foreignPivotKey option to specify the foreign key of the current model in the pivot table.
    }
}