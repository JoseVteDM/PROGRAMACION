<?php

require_once "autoload.php";
class Cartera{
	private $clientes = [];
    
    public function loadData($array)//ejercicio 3
	{
		foreach($array as $key){
			$objeto = new Empresa(
				$key["ID"],
				$key["Company"],
				$key["Investment"],
				$key["Date"],
				$key["active"]
			);
				//EN CADA ITERACIÓN METE ESTA INFORMACIÓN
				/* 
					"ID" => "BBX28AIL5SZ",
					"Company" => "In Aliquet Corp.",
					"Investment" => "4472729",
					"Date" => "2020-07-09",
					"active" => "True"
				*/
			array_push($this -> clientes ,$objeto);
		}
		return $this -> getClientes();
	}

	public function drawList()
	{
		foreach($this -> clientes as $key){
			
			echo ('
			<tr>
				<td>'.$key -> getId().'</td>
				<td '.(($key->isVIP()) ? (" class='vip'") : ("")) . ">" . $key->getCompany().'</td>
				<td>'.$key -> toFormat($key -> getInvestment()).'</td>
				<td>'.$key -> toDate($key -> getDate()).'</td>
				<td><img src="
				'.(($key -> getActive() == "True") ? "img/img05.gif" : "img/img06.gif").'"> </td>
			</tr>'
			);
		}
	}
	

	/* GETTER */
	public function getClientes()
	{
		return $this -> clientes; //$clientes
	}
}
