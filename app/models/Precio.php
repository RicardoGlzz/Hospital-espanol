<?php

class Precio extends Eloquent {
	protected $table = 'precios';
	public $timestamps = false;

	public function scopeBypass($query){

		$query->select('precio','precio_mzt','precio_dls','precio_mzt_dls')
			->where('seccion','=','bypass');

		return $query;
	}

	public function scopeGastro($query){

		$query->select('precio','precio_mzt','precio_dls','precio_mzt_dls')
			->where('seccion','=','gastro');

		return $query;
	}

	public function scopeSleeve($query){

		$query->select('precio','precio_mzt','precio_dls','precio_mzt_dls')
			->where('seccion','=','sleeve');

		return $query;
	}

	public function scopeBallon($query){

		$query->select('precio','precio_mzt','precio_dls','precio_mzt_dls')
			->where('seccion','=','ballon');

		return $query;
	}

	public function scopeMetabolic($query){

		$query->select('precio','precio_mzt','precio_dls','precio_mzt_dls')
			->where('seccion','=','metabolic');

		return $query;
	}
}