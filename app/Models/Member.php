<?php namespace App\Models;
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03/11/2016
 * Time: 11:58
 */
use Illuminate\Database\Eloquent\Model;

class Member extends Model {

    protected $table ="members";

    protected $fillable = ['name','age','phone_number'];

}