<?php
function autoloading($clase){
	require_once "clases/".$clase.".php";
}

spl_autoload_register("autoloading");

7
// class Cartera{
// 	private $clientes = [];

// 	public function drawList(){
// 		for($i=0 ; $i<count($this->clientes); $i++){
				
//                 echo "<tr><td>". $this->clientes[$i]->getId(). 
// 				"</td>"."<td class='".$this->isVip($this->clientes[$i]->getInvestment())."'>".
// 				$this->clientes[$i]->getCompany().
// 				"</td><td>".number_format($this->clientes[$i]->getInvestment(),4,",","'").' €'."</td><td>"
// 				.$this->clientes[$i]->getDate()."</td>"; 
// 				if(($this->clientes[$i]->getActive()) == "True"){
// 					echo "<td><img src = 'img/img05.gif.'></td>";
// 				}else{
// 					echo "<td><img src = 'img/img06.gif'></td>";
// 				}" </tr>";
//         }
// 	}

// 	public function isVip($x){
// 		if($x >= 1000000){
// 			return "vip";
// 		}
// 	}

// 	public function loadData($array)//ejercicio 3
// 	{
// 		foreach($array as $key){
// 			$objeto = new Empresa(
// 				$key["ID"],
// 				$key["Company"],
// 				$key["Investment"],
// 				$key["Date"],
// 				$key["active"]
				
// 				//EN CADA ITERACIÓN METE ESTA INFORMACIÓN
// 				/* 
// 					"ID" => "BBX28AIL5SZ",
// 					"Company" => "In Aliquet Corp.",
// 					"Investment" => "4472729",
// 					"Date" => "2020-07-09",
// 					"active" => "True"
// 				*/

// 			);
// 			array_push($this -> clientes,$objeto);
// 		}
// 		return $this -> getClientes();
// 	}
	
// 	/* GETTER */
// 	public function getClientes()
// 	{
// 		return $this -> clientes; //$clientes
// 	}

//}
// class Empresa extends Cartera{
// 	private $id; //id de la empresa.
// 	private $company; //nom Empresa.
// 	private $investment; //inversión en publi
// 	private $date; // fecha en la que inició como cliente.
// 	private $active; //Proyecto en activo o no ==> bool?

// 	public function __construct($id, $company, $investment, $date, $active)
// 	{
// 		$this -> id = $id;
// 		$this -> company = $company;
// 		$this -> investment = $investment;
// 		$this -> toDatex($date);
// 		$this -> active = $active;
// 	}

// 	/**
// 	 * Get the value of id
// 	 */ 
// 	public function getId()
// 	{
// 		return $this->id;
// 	}

// 	/**
// 	 * Set the value of id
// 	 *
// 	 * @return  self
// 	 */ 
// 	public function setId($id)
// 	{
// 		$this->id = $id;

// 		return $this;
// 	}

// 	/**
// 	 * Get the value of company
// 	 */ 
// 	public function getCompany()
// 	{
// 		return $this->company;
// 	}

// 	/**
// 	 * Set the value of company
// 	 *
// 	 * @return  self
// 	 */ 
// 	public function setCompany($company)
// 	{
// 		$this->company = $company;

// 		return $this;
// 	}

// 	/**
// 	 * Get the value of investment
// 	 */ 
// 	public function getInvestment()
// 	{
// 		return $this->investment;
// 	}

// 	/**
// 	 * Set the value of investment
// 	 *
// 	 * @return  self
// 	 */ 
// 	public function setInvestment($investment)
// 	{
// 		$this->investment = $investment;

// 		return $this;
// 	}

// 	/**
// 	 * Get the value of date
// 	 */ 
// 	public function getDate()
// 	{
// 		 return $this->date;
// 	}

// 	/**
// 	 * Set the value of date
// 	 *
// 	 * @return  self
// 	 */ 
// 	public function setDate($date)
// 	{
// 		$this->date = $date;

// 		return $this;
// 	}

// 	/**
// 	 * Get the value of active
// 	 */ 
// 	public function getActive()
// 	{
		
// 		return $this->active;
// 	}

// 	/**
// 	 * Set the value of active
// 	 *
// 	 * @return  self
// 	 */ 
// 	public function setActive($active)
// 	{
// 		$this->active = $active;

// 		return $this;   
// 	}

//     function toDatex($date){
// 		$this->date = date("F d, Y",strtotime($date));
//         return $this->date;
// 	}
         
//     }




$data = [
	[
		"ID" => "BBX28AIL5SZ",
		"Company" => "In Aliquet Corp.",
		"Investment" => "4472729",
		"Date" => "2020-07-09",
		"active" => "True"
	],
	[
		"ID" => "SBV55WFC5MV",
		"Company" => "Integer Vulputate Risus Institute",
		"Investment" => "4471554",
		"Date" => "2019-12-27",
		"active" => "False"
	],
	[
		"ID" => "TEF51NBI7QF",
		"Company" => "Vivamus Nibh LLC",
		"Investment" => "8919033",
		"Date" => "2018-05-28",
		"active" => "False"
	],
	[
		"ID" => "CBM81YFY6XR",
		"Company" => "Eu LLP",
		"Investment" => "8811172",
		"Date" => "2020-06-06",
		"active" => "False"
	],
	[
		"ID" => "PTH79SXU5CW",
		"Company" => "Urna Vivamus Associates",
		"Investment" => "8397876",
		"Date" => "2020-01-12",
		"active" => "False"
	],
	[
		"ID" => "JDW43DAH5CD",
		"Company" => "Varius Orci In LLP",
		"Investment" => "8835239",
		"Date" => "2017-12-14",
		"active" => "False"
	],
	[
		"ID" => "HJL62XCJ5KX",
		"Company" => "Dolor Limited",
		"Investment" => "797550",
		"Date" => "2019-07-06",
		"active" => "False"
	],
	[
		"ID" => "BEG74SPW6JD",
		"Company" => "Suspendisse Eleifend Cras Corporation",
		"Investment" => "261822",
		"Date" => "2018-07-06",
		"active" => "False"
	],
	[
		"ID" => "KIC32QXK5PF",
		"Company" => "Suscipit Nonummy Ltd",
		"Investment" => "1668744",
		"Date" => "2019-12-05",
		"active" => "True"
	],
	[
		"ID" => "RBX62ZFB3GH",
		"Company" => "Ligula Incorporated",
		"Investment" => "9669887",
		"Date" => "2019-07-28",
		"active" => "True"
	],
	[
		"ID" => "SSQ55BYQ3SU",
		"Company" => "In Scelerisque Associates",
		"Investment" => "4982932",
		"Date" => "2020-04-21",
		"active" => "True"
	],
	[
		"ID" => "UXF17XKT9WD",
		"Company" => "Turpis Nec Ltd",
		"Investment" => "2281779",
		"Date" => "2018-09-23",
		"active" => "False"
	],
	[
		"ID" => "UDP44RHT1EP",
		"Company" => "Mollis Nec Cursus LLP",
		"Investment" => "988034",
		"Date" => "2018-09-09",
		"active" => "True"
	],
	[
		"ID" => "BDB43DDW3RX",
		"Company" => "Diam At Associates",
		"Investment" => "5884557",
		"Date" => "2019-06-26",
		"active" => "True"
	],
	[
		"ID" => "HUR75PZN3YB",
		"Company" => "Lacus Cras Industries",
		"Investment" => "4838613",
		"Date" => "2017-12-20",
		"active" => "True"
	],
	[
		"ID" => "HRA25DQF5QT",
		"Company" => "Mollis Lectus Company",
		"Investment" => "4639909",
		"Date" => "2018-08-15",
		"active" => "True"
	],
	[
		"ID" => "ZXT62QWY5NC",
		"Company" => "Quam Dignissim Incorporated",
		"Investment" => "7037731",
		"Date" => "2018-06-18",
		"active" => "True"
	],
	[
		"ID" => "XGO44WXW3EC",
		"Company" => "Interdum Libero Dui LLC",
		"Investment" => "2886694",
		"Date" => "2019-03-10",
		"active" => "False"
	],
	[
		"ID" => "ITE69NTR1AX",
		"Company" => "Ipsum Ac Foundation",
		"Investment" => "9156702",
		"Date" => "2018-09-17",
		"active" => "True"
	],
	[
		"ID" => "GCQ53TEH8BN",
		"Company" => "Vitae Aliquam PC",
		"Investment" => "6904158",
		"Date" => "2019-07-04",
		"active" => "False"
	]
];

//$cartera = new Cartera(); //CREAMOS EL OBJETO CARTERA
// var_dump($cartera -> loadData($data)); // PONEMOS EN FUNCIONAMIENTO EL MÉTODO DEL BUCLE.

?>




<!DOCTYPE html>

<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table.redTable {
            border: 2px solid #A40808;
            background-color: #EEE7DB;
            width: 100%;
            text-align: center;
            border-collapse: collapse;
        }

        table.redTable td,
        table.redTable th {
            border: 1px solid #AAAAAA;
            padding: 3px 2px;
        }

        table.redTable tbody td {
            font-size: 13px;
        }

        table.redTable tr:nth-child(even) {
            background: #F5C8BF;
        }

        table.redTable thead {
            background: #A40808;
        }

        table.redTable thead th {
            font-size: 19px;
            font-weight: bold;
            color: #FFFFFF;
            text-align: center;
            border-left: 2px solid #A40808;
        }

        table.redTable thead th:first-child {
            border-left: none;
        }

        table.redTable tfoot {
            font-size: 13px;
            font-weight: bold;
            color: #FFFFFF;
            background: #A40808;
        }

        table.redTable tfoot td {
            font-size: 13px;
        }

        table.redTable tfoot .links {
            text-align: right;
        }

        table.redTable tfoot .links a {
            display: inline-block;
            background: #FFFFFF;
            color: #A40808;
            padding: 2px 8px;
            border-radius: 5px;
        }

        .vip {
            font-weight: bolder;
            color: blue;
        }
    </style>
</head>

<body>
    <table class="redTable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Company</th>
                <th>Investment</th>
                <th>Date</th>
                <th>Active</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="5">

                </td>
            </tr>
        </tfoot>
        <tbody>
            <?php
            
            $cliente1 = new Cartera();//Esto te crea el objeto y como ahi en cartera esta el bucle me los mete todos
            $cliente1->loadData($data);//Esto te mete los elementos en el array del cliente
            $cliente1->drawList();//Esto te mete los elementos en el array del cliente







            ?>
        </tbody>
    </table>
    <?php
        
        //var_dump($cliente1);
    ?>

</body>

</html>