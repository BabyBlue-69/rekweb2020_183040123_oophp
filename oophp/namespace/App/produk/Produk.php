<?php 


abstract class Produk{
	protected $judul = "judul";
	protected $penulis = "penulis";
	protected $penerbit = "penerbit";
	protected $diskon = 0;
	private $harga = 0;
	



	

	public function __construct( $judul, $penulis, $penerbit, $harga){ 
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		
	
	}

	public function setJudul($judul){
		// if( !is_string($judul)){
		// 	throw new Exception("Judul harus huruf");
			// pake ini biar lebih spesifik
		// }
		$this->judul = $judul;
	}

	public function getJudul(){//buat ambil judul
		return $this->judul;
	}

	public function setPenulis(){
		$this->penulis = $penulis;
	}

	public function getPenulis(){
		return $this->penulis;
	}

	public function setPenerbit(){
		$this->penerbit = $penerbit;
	}

	public function getPenerbit(){
		return $this->penerbit;
	}

	public function setDiskon($diskon){
		$this->diskon = $diskon;
	}


	public function setHarga(){
		$this->harga = $harga;
	}//ini adalah harga setelah diskon


	
	public function getHarga() {
	 	return $this->harga - ( $this->harga * $this->diskon / 100);
	 }

	

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	abstract public function getInfo();

}