<?php
namespace W2W\CRC;

class CRC1 extends AbstractCRC {
	protected $lookup = array();
	
	public function update($data) {
		$len = strlen($data);
		
		for($i = 0; $i < $len; $i++) {
			$this->checksum = ($this->checksum + ord($data[$i])) % 256;
		}
	}
	
	public function pack($checksum) {
		return pack("C", $checksum);
	}
}