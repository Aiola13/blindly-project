<?php

class stackzone
{
	private array $categories = [];

	public function __construct(array $defaultCategories = ['soins', 'pokeballs', 'objets_clés', 'CT'])
	{
		foreach ($defaultCategories as $cat) {
			$this->categories[$cat] = [];
		}
	}

	public function addObj(string $category, Item $item): void
	{
		if (!isset($this->categories[$category])) {
			$this->categories[$category] = [];
		}
	}
}

/**
 * 
 */
class StacjObj
{
	protected string $_id;
	protected string $_name;
	protected string $_desc;
	protected string $_;
	protected string $_name;
	protected string $_name;
	protected string $_name;
	protected string $_name;
	function __construct($arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg11, $arg12, $arg13, $arg14, $arg15, $arg16, $arg17)
	{
		// code...
		parent::__construct($arg1, $arg2, $arg3, $arg4, $arg5, $arg6);
		$this->chambre = $arg11;
		$this->identifiant = $arg12;
		$this->entree = $arg13;
		$this->sortie = $arg14;
		$this->raison = $arg15;
		$this->prescription = $arg16;
		$this->secteur = $arg17;
	}
	function showpatientinfo()
	{
		parent::checkpersonnalinfo();
		echo $this->chambre;
		echo $this->entree;
		echo $this->sortie;
		echo $this->raison;
		echo $this->prescription;
	}
	function patienttechnicalinfo()
	{
		return;
	}
}
