<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'ip_address', 'date_vistior'
    ];
    protected $primaryKey = 'id_visitor';
 	protected $table = 'tbl_visitor';
}
