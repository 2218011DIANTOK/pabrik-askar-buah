<?php
namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petisi extends Model {
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];
    protected $dates1 = ['updated_at'];
    protected $primaryKey = 'id_petisi';
    public function Gagasan(){
    return $this->belongsTo(Gagasan::class, 'id_gagasan','id_gagasan');
    }
}