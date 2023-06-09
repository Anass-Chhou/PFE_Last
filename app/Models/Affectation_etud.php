<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affectation_etud extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "affectation_etud";
    protected $primaryKey = 'id_affect';
    protected $fillable = [ "id_etud","id_module"];
    
    public function module()
    {
        return $this->belongsTo(module::class, 'id_module');
    }

    public function etudiant()
    {
        return $this->belongsTo(etudiant::class, 'id_etud');
    }
}
