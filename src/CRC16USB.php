<?php
namespace W2W\CRC;

class CRC16USB extends \W2W\CRC\CRC16 {
	protected $initChecksum = 0xffff;
	
	protected $xorMask = 0xffff;
}