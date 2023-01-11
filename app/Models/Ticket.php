<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'users_id',
        'terminal_asal',
        'terminal_tujuan',
        'tanggal_keberangkatan',
        'dewasa',
        'anak',
        'kelas',
        'tarif',
    ];

    public function user(){
        return $this->belongsTo(User::class,'users_id');
    }
}
