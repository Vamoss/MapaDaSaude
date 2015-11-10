<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model {
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['uf', 'nome', 'lat', 'lng'];
}
