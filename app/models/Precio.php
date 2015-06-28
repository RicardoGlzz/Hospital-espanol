<?php

class Precio extends Eloquent {
	protected $table = 'precios';
	public $timestamps = false;

	public function scopeBypass($query){

		$query->select('precio')->where('seccion','=','bypass');

		return $query;
	}

	public function scopeGastro($query){

		$query->select('precio')->where('seccion','=','gastro');

		return $query;
	}

	public function scopeSleeve($query){

		$query->select('precio')->where('seccion','=','sleeve');

		return $query;
	}

	public function scopeBallon($query){

		$query->select('precio')->where('seccion','=','ballon');

		return $query;
	}

	public function scopeMetabolic($query){

		$query->select('precio')->where('seccion','=','metabolic');

		return $query;
	}

	public function scopePrecios($query){

		$query->select('id','precio');

		return $query;
	}
}