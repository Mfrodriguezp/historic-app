<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HistRepair extends Model
{
    use HasFactory;

    /**
     * Primary key and timestamps not used
     * @var string
     */
    protected $primaryKey = 'id_hist_repair';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'clients_id client',
        'repair_date',
        'equip_referece',
        'observation',
        'cost',
        'imei1',
        'imei2',
        'warranty',
        'warranty_date',
        'observ_warranty'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'id_client');
    }
}
