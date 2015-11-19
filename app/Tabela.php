<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tabela extends Model
{
   use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $guarded = [];
    #---------------------Emolumentos
		public function getEmolumentosAttribute()
    {
        return number_format($this->attributes['emolumentos'], 2, ',' ,'.');
    }
    public function setEmolumentosAttribute($emolumentos)
    {
        $this->attributes['emolumentos'] = str_ireplace([".",","], ["","."], $emolumentos);
    }
    #---------------------FIM
    #---------------------FDJ
		public function getFdjAttribute()
    {
        return number_format($this->attributes['fdj'], 2, ',' ,'.');
    }
    public function setFdjAttribute($fdj)
    {
        $this->attributes['fdj'] = str_ireplace([".",","], ["","."], $fdj);
    }
    #---------------------FIM
    #---------------------frmp
		public function getFrmpAttribute()
    {
        return number_format($this->attributes['frmp'], 2, ',' ,'.');
    }
    public function setFrmpAttribute($frmp)
    {
        $this->attributes['frmp'] = str_ireplace([".",","], ["","."], $frmp);
    }
    #---------------------FIM
    #---------------------Emolumentos
		public function getFcrcpnAttribute()
    {
        return number_format($this->attributes['fcrcpn'], 2, ',' ,'.');
    }
    public function setFcrcpnAttribute($fcrcpn)
    {
        $this->attributes['fcrcpn'] = str_ireplace([".",","], ["","."], $fcrcpn);
    }
    #---------------------FIM
}
