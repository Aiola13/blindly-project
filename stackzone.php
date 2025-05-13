<?php


/**
 * 
 */
class StacjObj
{
	protected int $_id;
	protected string $_name;
	protected string $_type;
	protected string $_desc;
	protected string $_effect;
	protected string $_sprites;
	protected bool $_stackable;
	protected bool $_consumable;
	protected bool $_usable;
	protected bool $_heldable;
	protected bool $_held_usable;


	function __construct(int $arg1, string $arg2, string $arg3, string $arg4, string $arg5, string $arg6, bool $arg7, bool $arg8, bool $arg9, bool $arg10, bool $arg11)
	{
		$this->_id = $arg1;
		$this->_name = $arg2;
		$this->_type = $arg3;
		$this->_desc = $arg4;
		$this->_effect = $arg5;
		$this->_sprites = $arg6;
		$this->_stackable = $arg7;
		$this->_consumable = $arg8;
		$this->_usable = $arg9;
		$this->_heldable = $arg10;
		$this->_held_usable = $arg11;
	}

	public function Getobj_name($id)
	{
		return $this->_name;
	}
	public function Getobj_type($id)
	{
		return $this->_type;
	}
	public function Getobj_desc($id)
	{
		return $this->_desc;
	}
	public function Getobj_effect($id)
	{
		return $this->_effect;
	}
	public function Getobj_sprites($id)
	{
		return $this->_sprites;
	}
	public function Useobj($id) {}
}
