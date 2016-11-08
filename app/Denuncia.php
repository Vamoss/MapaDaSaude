<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model {
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['tipo', 'usuario', 'co_municipio', 'co_cnes', 'provedor', 'propriedade', 'lat', 'lng', 'plano', 'data', 'descricao'];

	protected $dates = ['data'];
	
	public function setDataAttribute($date)
	{
		$this->attributes['data'] = Carbon::parse($date);
	}
}
