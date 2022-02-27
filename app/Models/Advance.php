<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advance extends Model
{
    use HasFactory;
    protected $fillable = ['fullname', 'gender', 'email','postcode','address','building_name','opinion'];
    public static $rules = array(
        'fullname' => 'required',
        'gender' => 'integer|min:1|max:2',
        'email' => 'required',
        'postcode' => 'required',
        'address' => 'required',
        'building_name' => 'required',
        'opinion' => 'required',
    );
    public function getDetail()
    {
        $txt = 'ID:'.$this->fullname . ' ' . $this->gender . ' ' . $this->emeil . ' ' . $this->postcode . ' ' . $this->address . ' ' . $this->building_name . ' ' . $this->opinion;
        return $txt;
    }
}
