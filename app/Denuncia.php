<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model {
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['tipo', 'posto', 'municipio', 'titulo', 'descricao', 'provedor', 'unidade', 'data'];

	protected $dates = ['data'];
	
	public function setDataAttribute($date)
	{
		$this->attributes['data'] = Carbon::parse($date);
	}
}
