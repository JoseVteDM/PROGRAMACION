<?php


class Cartera{
	private $clientes = [];

	public function drawList(){
		for($i=0 ; $i<count($this->clientes); $i++){
				
                echo "<tr><td>". $this->clientes[$i]->getId(). 
				"</td>"."<td class='".$this->isVip($this->clientes[$i]->getInvestment())."'>".
				$this->clientes[$i]->getCompany().
				"</td><td>".number_format($this->clientes[$i]->getInvestment(),4,",","'").' €'."</td><td>"
				.$this->clientes[$i]->getDate()."</td>"; 
				if(($this->clientes[$i]->getActive()) == "True"){
					echo "<td><img src = 'img/img05.gif.'></td>";
				}else{
					echo "<td><img src = 'img/img06.gif'></td>";
				}" </tr>";
        }
	}

	public function isVip($x){
		if($x >= 1000000){
			return "vip";
		}
	}

	public function loadData($array)//ejercicio 3
	{
		foreach($array as $key){
			$objeto = new Empresa(
				$key["ID"],
				$key["Company"],
				$key["Investment"],
				$key["Date"],
				$key["active"]
				
				//EN CADA ITERACIÓN METE ESTA INFORMACIÓN
				/* 
					"ID" => "BBX28AIL5SZ",
					"Company" => "In Aliquet Corp.",
					"Investment" => "4472729",
					"Date" => "2020-07-09",
					"active" => "True"
				*/

			);
			array_push($this -> clientes,$objeto);
		}
		return $this -> getClientes();
	}
	
	/* GETTER */
	public function getClientes()
	{
		return $this -> clientes; //$clientes
	}

}



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

?>