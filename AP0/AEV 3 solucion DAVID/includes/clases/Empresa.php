<?php
class Empresa extends Cartera{
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
		$this -> toDatex($date);
		$this -> active = $active;
	}

	/**
	 * Get the value of id
	 */ 
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set the value of id
	 *
	 * @return  self
	 */ 
	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}

	/**
	 * Get the value of company
	 */ 
	public function getCompany()
	{
		return $this->company;
	}

	/**
	 * Set the value of company
	 *
	 * @return  self
	 */ 
	public function setCompany($company)
	{
		$this->company = $company;

		return $this;
	}

	/**
	 * Get the value of investment
	 */ 
	public function getInvestment()
	{
		return $this->investment;
	}

	/**
	 * Set the value of investment
	 *
	 * @return  self
	 */ 
	public function setInvestment($investment)
	{
		$this->investment = $investment;

		return $this;
	}

	/**
	 * Get the value of date
	 */ 
	public function getDate()
	{
		 return $this->date;
	}

	/**
	 * Set the value of date
	 *
	 * @return  self
	 */ 
	public function setDate($date)
	{
		$this->date = $date;

		return $this;
	}

	/**
	 * Get the value of active
	 */ 
	public function getActive()
	{
		
		return $this->active;
	}

	/**
	 * Set the value of active
	 *
	 * @return  self
	 */ 
	public function setActive($active)
	{
		$this->active = $active;

		return $this;   
	}

    function toDatex($date){
		$this->date = date("F d, Y",strtotime($date));
        return $this->date;
	}
         
    }