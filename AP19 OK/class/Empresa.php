<?php

require_once "autoload.php";
class Empresa {
	private $id; //id de la empresa.
	private $company; //nom Empresa.
	private $investment; //inversión en publi
	private $date; // fecha en la que inició como cliente.
	private $active; //Proyecto en activo o no ==> bool?

	public function __construct($id, $company, $investment, $date, $active)
	{
		$this -> id = $id;
		$this -> company = $company;
		$this -> investment = $investment;
		$this -> date = $date;
		$this -> active = $active;
	}

	public function isVIP()
	{
		return $this->investment >= 1000000;
	}

	function toDate($date)
	{
		return date("l m,Y",strtotime($date));
	}

	function toFormat($number)
	{
		return number_format($number,2,"'",".");
	}

	/* GETTERS */
	public function getId()
	{
		return $this -> id;
	}
	public function getCompany()
	{
		return $this -> company;
	}
	public function getInvestment()
	{
		return $this -> investment;
	}
	public function getDate()
	{
		return $this -> date;
	}
	public function getActive()
	{
		return $this -> active;
	}

}