<?php
/*Una empresa de publicidad DAW Advertising quiere mostrar en una tabla las inversiones que han realizado sus clientes.+
 A partir del fichero ap18.html proporcionado como muestra del código HTML que se debe generar,
  y usando el array de datos proporcionado en data.php:

Ejercicio 1.- Genera una clase Cartera, cuyas características será un atributo "clientes", que inicialmente contendrá un array vacío.

Ejercicio 2.- Genera una clase Empresa, cuyos atributos serán:

id -> identificador de la empresa
company -> nombre de la empresa
investment -> inversión en publicidad

date -> fecha en la que inició como cliente

active -> si tiene en la actualidad algún proyecto activo

Ejercicio 3.- Modifica la clase Cartera, de forma que tenga un método loadData() 
al que le podamos pasar el array de datos. Con este array, se debe generar un objeto Empresa por cada elemento del array,
 y almacenarlo en el atributo "clientes"

Ejercicio 4.- Modifica la clase Cartera, de forma que tenga el método drawList(), que generará el código HTML necesario 
para presentar los datos. Debes tener en cuenta el formato de fecha y el formato de moneda.

Ejercicio 5.- Modifica el método drawList(), de forma que muestre en negrita y azul, las empresas VIP, es decir,
 las que superen o igualen el millón de euros en inversión publicitaria. Para ello, crea un método isVIP() que devuelva si una empresa 
 está en esta situación o no. Tienes una clase de CSS definida para aplicar el estilo. /
*/

//class Cartera{
//	private $clientes = [];
//
//	public function drawList(){
//		for($i=0 ; $i<count($this->clientes); $i++){
//			( 
//				echo "<tr>";
//				echo "<td>";
//				echo "<td>"  .$this->$clientes[$i]->getId()."</td>";
//				echo "<td>". $this->$clientes[$i]->getCompany()."</td>";
//				echo "<td>". $this->$clientes[$i]->getInvestment() . ' €'."</td>";
//				echo"<td>". $this->$clientes[$i]->getDate()."</td>";
//				echo"<td>". $this->$clientes[$i]->getActive()."</td>";
//			);
//	}
//
//	public function loadData($array)//ejercicio 3
//	{
//		foreach($array as $key){
//			$objeto = new Empresa(
//				$key["ID"],
//				$key["Company"],
//				$key["Investment"],
//				$key["Date"],
//				$key["active"]
//				
//				//EN CADA ITERACIÓN METE ESTA INFORMACIÓN
//				/* 
//					"ID" => "BBX28AIL5SZ",
//					"Company" => "In Aliquet Corp.",
//					"Investment" => "4472729",
//					"Date" => "2020-07-09",
//					"active" => "True"
//				*/
//
//			);
//			array_push($this -> clientes,$objeto);
//		}
//		return $this -> getClientes();
//	}
//
//	/* GETTER */
//	public function getClientes()
//	{
//		return $this -> clientes; //$clientes
//	}
//
//	public function isVip()
//	{
//		if($this->clientes($investment)>=1000000){
//			return $this -> $clientes; //$clientes
//		}else{
//			
//		}
//			}
//
//	
//}
//
//
//
//}
//
//
//
//class Empresa extends Cartera{
//	private $id; //id de la empresa.
//	private $company; //nom Empresa.
//	private $investment; //inversión en publi
//	private $date; // fecha en la que inició como cliente.
//	private $active; //Proyecto en activo o no ==> bool?
//
//	public function __construct($id, $company, $investment, $date, $active)
//	{
//		$this -> id = $id;
//		$this -> company = $company;
//		$this -> investment = $investment;
//		$this -> date = $date;
//		$this -> active = $active;
//	}
//
//	/**
//	 * Get the value of id
//	 */ 
//	public function getId()
//	{
//		return $this->id;
//	}
//
//	/**
//	 * Set the value of id
//	 *
//	 * @return  self
//	 */ 
//	public function setId($id)
//	{
//		$this->id = $id;
//
//		return $this;
//	}
//
//	/**
//	 * Get the value of company
//	 */ 
//	public function getCompany()
//	{
//		return $this->company;
//	}
//
//	/**
//	 * Set the value of company
//	 *
//	 * @return  self
//	 */ 
//	public function setCompany($company)
//	{
//		$this->company = $company;
//
//		return $this;
//	}
//
//	/**
//	 * Get the value of investment
//	 */ 
//	public function getInvestment()
//	{
//		return $this->investment;
//	}
//
//	/**
//	 * Set the value of investment
//	 *
//	 * @return  self
//	 */ 
//	public function setInvestment($investment)
//	{
//		$this->investment = $investment;
//
//		return $this;
//	}
//
//	/**
//	 * Get the value of date
//	 */ 
//	public function getDate()
//	{
//		return $this->date;
//	}
//
//	/**
//	 * Set the value of date
//	 *
//	 * @return  self
//	 */ 
//	public function setDate($date)
//	{
//		$this->date = $date;
//
//		return $this;
//	}
//
//	/**
//	 * Get the value of active
//	 */ 
//	public function getActive()
//	{
//		return $this->active;
//	}
//
//	/**
//	 * Set the value of active
//	 *
//	 * @return  self
//	 */ 
//	public function setActive($active)
//	{
//		$this->active = $active;
//
//		return $this;
//	}
//}
//$data = [
//	[
//		"ID" => "BBX28AIL5SZ",
//		"Company" => "In Aliquet Corp.",
//		"Investment" => "4472729",
//		"Date" => "2020-07-09",
//		"active" => "True"
//	],
//	[
//		"ID" => "SBV55WFC5MV",
//		"Company" => "Integer Vulputate Risus Institute",
//		"Investment" => "4471554",
//		"Date" => "2019-12-27",
//		"active" => "False"
//	],
//	[
//		"ID" => "TEF51NBI7QF",
//		"Company" => "Vivamus Nibh LLC",
//		"Investment" => "8919033",
//		"Date" => "2018-05-28",
//		"active" => "False"
//	],
//	[
//		"ID" => "CBM81YFY6XR",
//		"Company" => "Eu LLP",
//		"Investment" => "8811172",
//		"Date" => "2020-06-06",
//		"active" => "False"
//	],
//	[
//		"ID" => "PTH79SXU5CW",
//		"Company" => "Urna Vivamus Associates",
//		"Investment" => "8397876",
//		"Date" => "2020-01-12",
//		"active" => "False"
//	],
//	[
//		"ID" => "JDW43DAH5CD",
//		"Company" => "Varius Orci In LLP",
//		"Investment" => "8835239",
//		"Date" => "2017-12-14",
//		"active" => "False"
//	],
//	[
//		"ID" => "HJL62XCJ5KX",
//		"Company" => "Dolor Limited",
//		"Investment" => "797550",
//		"Date" => "2019-07-06",
//		"active" => "False"
//	],
//	[
//		"ID" => "BEG74SPW6JD",
//		"Company" => "Suspendisse Eleifend Cras Corporation",
//		"Investment" => "261822",
//		"Date" => "2018-07-06",
//		"active" => "False"
//	],
//	[
//		"ID" => "KIC32QXK5PF",
//		"Company" => "Suscipit Nonummy Ltd",
//		"Investment" => "1668744",
//		"Date" => "2019-12-05",
//		"active" => "True"
//	],
//	[
//		"ID" => "RBX62ZFB3GH",
//		"Company" => "Ligula Incorporated",
//		"Investment" => "9669887",
//		"Date" => "2019-07-28",
//		"active" => "True"
//	],
//	[
//		"ID" => "SSQ55BYQ3SU",
//		"Company" => "In Scelerisque Associates",
//		"Investment" => "4982932",
//		"Date" => "2020-04-21",
//		"active" => "True"
//	],
//	[
//		"ID" => "UXF17XKT9WD",
//		"Company" => "Turpis Nec Ltd",
//		"Investment" => "2281779",
//		"Date" => "2018-09-23",
//		"active" => "False"
//	],
//	[
//		"ID" => "UDP44RHT1EP",
//		"Company" => "Mollis Nec Cursus LLP",
//		"Investment" => "988034",
//		"Date" => "2018-09-09",
//		"active" => "True"
//	],
//	[
//		"ID" => "BDB43DDW3RX",
//		"Company" => "Diam At Associates",
//		"Investment" => "5884557",
//		"Date" => "2019-06-26",
//		"active" => "True"
//	],
//	[
//		"ID" => "HUR75PZN3YB",
//		"Company" => "Lacus Cras Industries",
//		"Investment" => "4838613",
//		"Date" => "2017-12-20",
//		"active" => "True"
//	],
//	[
//		"ID" => "HRA25DQF5QT",
//		"Company" => "Mollis Lectus Company",
//		"Investment" => "4639909",
//		"Date" => "2018-08-15",
//		"active" => "True"
//	],
//	[
//		"ID" => "ZXT62QWY5NC",
//		"Company" => "Quam Dignissim Incorporated",
//		"Investment" => "7037731",
//		"Date" => "2018-06-18",
//		"active" => "True"
//	],
//	[
//		"ID" => "XGO44WXW3EC",
//		"Company" => "Interdum Libero Dui LLC",
//		"Investment" => "2886694",
//		"Date" => "2019-03-10",
//		"active" => "False"
//	],
//	[
//		"ID" => "ITE69NTR1AX",
//		"Company" => "Ipsum Ac Foundation",
//		"Investment" => "9156702",
//		"Date" => "2018-09-17",
//		"active" => "True"
//	],
//	[
//		"ID" => "GCQ53TEH8BN",
//		"Company" => "Vitae Aliquam PC",
//		"Investment" => "6904158",
//		"Date" => "2019-07-04",
//		"active" => "False"
//	]
//];
//
//$cartera = new Cartera(); //CREAMOS EL OBJETO CARTERA
//var_dump($cartera -> loadData($data)); // PONEMOS EN FUNCIONAMIENTO EL MÉTODO DEL BUCLE.
//
//
// <tr>
//                <td>BBX28AIL5SZ</td>
//                <td class="vip">In Aliquet Corp.</td>
//                <td>4.472.729'00 €</td>
//                <td>July 09, 2020</td>
//                <td><img src="img/img05.gif"> </td>
//            </tr>
//            <tr>
//                <td>SBV55WFC5MV</td>
//                <td class="vip">Integer Vulputate Risus Institute</td>
//                <td>4.471.554'00 €</td>
//                <td>December 27, 2019</td>
//                <td><img src="img/img06.gif"> </td>
//            </tr>
//            <tr>
//                <td>TEF51NBI7QF</td>
//                <td class="vip">Vivamus Nibh LLC</td>
//                <td>8.919.033'00 €</td>
//                <td>May 28, 2018</td>
//                <td><img src="img/img06.gif"> </td>
//            </tr>
//            <tr>
//                <td>CBM81YFY6XR</td>
//                <td class="vip">Eu LLP</td>
//                <td>8.811.172'00 €</td>
//                <td>June 06, 2020</td>
//                <td><img src="img/img06.gif"> </td>
//            </tr>
//            <tr>
//                <td>PTH79SXU5CW</td>
//                <td class="vip">Urna Vivamus Associates</td>
//                <td>8.397.876'00 €</td>
//                <td>January 12, 2020</td>
//                <td><img src="img/img06.gif"> </td>
//            </tr>
//            <tr>
//                <td>JDW43DAH5CD</td>
//                <td class="vip">Varius Orci In LLP</td>
//                <td>8.835.239'00 €</td>
//                <td>December 14, 2017</td>
//                <td><img src="img/img06.gif"> </td>
//            </tr>
//            <tr>
//                <td>HJL62XCJ5KX</td>
//                <td>Dolor Limited</td>
//                <td>797.550'00 €</td>
//                <td>July 06, 2019</td>
//                <td><img src="img/img06.gif"> </td>
//            </tr>
//            <tr>
//                <td>BEG74SPW6JD</td>
//                <td>Suspendisse Eleifend Cras Corporation</td>
//                <td>261.822'00 €</td>
//                <td>July 06, 2018</td>
//                <td><img src="img/img06.gif"> </td>
//            </tr>
//            <tr>
//                <td>KIC32QXK5PF</td>
//                <td class="vip">Suscipit Nonummy Ltd</td>
//                <td>1.668.744'00 €</td>
//                <td>December 05, 2019</td>
//                <td><img src="img/img05.gif"> </td>
//            </tr>
//            <tr>
//                <td>RBX62ZFB3GH</td>
//                <td class="vip">Ligula Incorporated</td>
//                <td>9.669.887'00 €</td>
//                <td>July 28, 2019</td>
//                <td><img src="img/img05.gif"> </td>
//            </tr>
//            <tr>
//                <td>SSQ55BYQ3SU</td>
//                <td class="vip">In Scelerisque Associates</td>
//                <td>4.982.932'00 €</td>
//                <td>April 21, 2020</td>
//                <td><img src="img/img05.gif"> </td>
//            </tr>
//            <tr>
//                <td>UXF17XKT9WD</td>
//                <td class="vip">Turpis Nec Ltd</td>
//                <td>2.281.779'00 €</td>
//                <td>September 23, 2018</td>
//                <td><img src="img/img06.gif"> </td>
//            </tr>
//            <tr>
//                <td>UDP44RHT1EP</td>
//                <td>Mollis Nec Cursus LLP</td>
//                <td>988.034'00 €</td>
//                <td>September 09, 2018</td>
//                <td><img src="img/img05.gif"> </td>
//            </tr>
//            <tr>
//                <td>BDB43DDW3RX</td>
//                <td class="vip">Diam At Associates</td>
//                <td>5.884.557'00 €</td>
//                <td>June 26, 2019</td>
//                <td><img src="img/img05.gif"> </td>
//            </tr>
//            <tr>
//                <td>HUR75PZN3YB</td>
//                <td class="vip">Lacus Cras Industries</td>
//                <td>4.838.613'00 €</td>
//                <td>December 20, 2017</td>
//                <td><img src="img/img05.gif"> </td>
//            </tr>
//            <tr>
//                <td>HRA25DQF5QT</td>
//                <td class="vip">Mollis Lectus company</td>
//                <td>4.639.909'00 €</td>
//                <td>August 15, 2018</td>
//                <td><img src="img/img05.gif"> </td>
//            </tr>
//            <tr>
//                <td>ZXT62QWY5NC</td>
//                <td class="vip">Quam Dignissim Incorporated</td>
//                <td>7.037.731'00 €</td>
//                <td>June 18, 2018</td>
//                <td><img src="img/img05.gif"> </td>
//            </tr>
//            <tr>
//                <td>XGO44WXW3EC</td>
//                <td class="vip">Interdum Libero Dui LLC</td>
//                <td>2.886.694'00 €</td>
//                <td>March 10, 2019</td>
//                <td><img src="img/img06.gif"> </td>
//            </tr>
//            <tr>
//                <td>ITE69NTR1AX</td>
//                <td class="vip">Ipsum Ac Foundation</td>
//                <td>9.156.702'00 €</td>
//                <td>September 17, 2018</td>
//                <td><img src="img/img05.gif"> </td>
//            </tr>
//            <tr>
//                <td>GCQ53TEH8BN</td>
//                <td class="vip">Vitae Aliquam PC</td>
//                <td>6.904.158'00 €</td>
//                <td>July 04, 2019</td>
//                <td><img src="img/img06.gif"> </td>
//            </tr>