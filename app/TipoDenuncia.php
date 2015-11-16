<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDenuncia extends Model {
    protected $table = 'tipos_denuncias';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nome', 'imagem'];
}
