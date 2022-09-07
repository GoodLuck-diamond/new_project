<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model

{
    use HasFactory, SoftDeletes;

    /**
     * @var string[]
     */
    protected $fillable = ['name', 'phone', 'adress'];


    protected $table = 'companies';

    //custom primary key

    protected $primary_key = 'company_id';

    //incrementing

    public $incrementig = false;

    //timestamps

    public $timestamps = true;

}

