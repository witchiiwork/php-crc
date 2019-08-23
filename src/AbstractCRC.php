<?php
namespace W2W\CRC;

abstract class AbstractCRC implements CRCInterface {
	protected $checksum;
	
	protected $initChecksum = 0x0;
	
	protected $xorMask = 0x0;
	
	public function __construct() {
		$this->reset();
	}
	
	public function finish() {
		return $this->pack($this->getChecksum());
	}
	
	public function reset() {
		$this->checksum = $this->initChecksum;
	}
	
	protected function getChecksum() {
		return $this->checksum ^ $this->xorMask;
	}
	
	abstract protected function pack($checksum);
}