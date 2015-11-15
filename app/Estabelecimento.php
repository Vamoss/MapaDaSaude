<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model {
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nome', 'municipio', 'lat', 'lng'];
}
