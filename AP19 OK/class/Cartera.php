<?php




// class Cartera
// {
//     private $clients = [];
//     public function __construct($data)
//     {
//         $this->loadData($data);
//     }
//     private function loadData($data)
//     {
//         foreach ($data as $element) {
//             array_push(
//                 $this->clients,
//                 new Empresa(
//                     $element["id"],
//                     $element["company"],
//                     $element["investment"],
//                     $element["date"],
//                     $element["active"]
//                 )
//             );
//         }
//     }


//LA CLASE TIENE QUE HACER LA FUNCIUON IMPORTAR
class Cartera{
	private $clientes = [];
    
	

    public function loadData($array)//ejercicio 3
	{
		function importar($fichero)
{
    $data = [];
    $gestor = fopen($fichero, "r");
    while (($datos = fgetcsv($gestor)) !== false) {
        $fila = [
            "id" => $datos[0],
            "title" => $datos[1],
            "description" => $datos[2],
            "creationDate" => strtotime($datos[3]),
            "dueDate" => strtotime($datos[4])
        ];
        array_push($tareas, $fila);
    }
    fclose($gestor);
    return $tareas;
}
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



	public function create($datos){
		$nuevaEmpresa = new Empresa(
			$datos["id"],
            $datos["company"],
            $datos["investment"],
            $datos["date"],
            $datos["active"]
		);
		array_push($this->clientes, $nuevaEmpresa);
		$this->guardar("data.csv",$this->clientes);

	}
	
	/**/public function guardar($fichero,$datos){
		$gestor = fopen($fichero, "w");
		foreach($datos as $key){
			$nuevosDatos=[
				$key->getID(),
				$key->getCompany(),
				$key->getInvestment(),
				$key->getDate(),
				$key->getActive()
			];
		fputcsv($gestor,$nuevosDatos);
		}
		fclose($gestor);
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
				<td> <img = class="size" src ="img/del_icon.png"> </td>";
				<td> <img = class="size" src ="img/edit_icon.png"> </td>";
				<td> 
			</tr>'
			);
		}
	}
	
	//CREAR DISTINTOS METODOS 2 UNO PARA CREAR EN INSERTAR LOS NUEVOS  OBJETOS  EN $CLIENTE Y OTRO PARA GUARDAR LOS OBJETOS EN CSV
	

	/* GETTER */
	public function getClientes()
	{
		return $this -> clientes; //$clientes
	}
}
