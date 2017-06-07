<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengaturan extends Model
{
    protected $table = 'pengaturan';
    protected $fillable = ['nama_status','alamat_status','email'];
    protected $visible = ['nama_status','alamat_status','email'];
    public $timestamp = true;
}
