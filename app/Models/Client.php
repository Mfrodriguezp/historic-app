<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    use HasFactory;
    /**
     * Primary key and timestamps not used
     * @var string
     */
    protected $primaryKey = 'id_client';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'doc_types_id_doc_type',
        'full_name',
        'address',
        'mobile_phone'
    ];

    public function docType()
    {
        return $this->belongsTo(DocType::class, 'id_doc_type');
    }

    public function histRepairs()
    {
        return $this->hasMany(HistRepair::class, 'id_client');
    }   
}
