<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocType extends Model
{
    use HasFactory;
    /**
     * Primary key and timestamps not used
     * @var string
     */
    protected $primaryKey = 'id_doc_type';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_document_type'
    ];

    public function clients()
    {
        return $this->hasMany(Client::class, 'id_doc_type');
    }
}
