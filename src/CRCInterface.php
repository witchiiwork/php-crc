<?php
namespace W2W\CRC;

interface CRCInterface {
	public function reset();
	
	public function update($data);
	
	public function finish();
}