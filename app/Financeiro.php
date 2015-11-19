<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Financeiro extends Model
{
  use SoftDeletes;
   protected $dates = ['deleted_at'];
   protected $fillable = ['id', 'codigo','descricao', 'dataEmissao','atribuicao', 'emolumentos','fdj', 'frmp','fcrcpn','valor','tipo'];
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
       $this->attributes['fdj'] = str_ireplace([".",""], [",","."], $fdj);
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
   #---------------------FCRCPN
   public function getFcrcpnAttribute()
   {
       return number_format($this->attributes['fcrcpn'], 2, ',' ,'.');
   }
   public function setFcrcpnAttribute($fcrcpn)
   {
       $this->attributes['fcrcpn'] = str_ireplace([".",","], ["","."], $fcrcpn);
   }
   #---------------------FIM
   #---------------------FCRCPN
   public function getValorAttribute()
   {
       return number_format($this->attributes['valor'], 2, ',' ,'.');
   }
   public function setValorAttribute($valor)
   {
       $this->attributes['valor'] = str_ireplace([".",","], ["","."], $valor);
   }
   #---------------------FIM
}
