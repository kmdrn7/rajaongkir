<?php

namespace kmdrn7\rajaongkir;

use kmdrn7\rajaongkir\app\Provinsi;
use kmdrn7\rajaongkir\app\Kota;
use kmdrn7\rajaongkir\app\Cost;

class RajaOngkir {

	public function Provinsi(){
		return new Provinsi;
	}

	public function Kota(){
		return new Kota;
	}

	public function Cost($params){
		return new Cost($params);
	}
}