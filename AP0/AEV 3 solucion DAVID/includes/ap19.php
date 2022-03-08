<?php

require_once


class Cartera
{
    private $clients = [];
    public function __construct($data)
    {
        $this->loadData($data);
    }
    private function loadData($data)//llama desde eel interior de la clase xk esta en privado, se llama al constructor y lo mete en  loadData

    {
        foreach ($data as $element) {//con el foreah recorre el array y le va pasasndo un objeto empresa por cada elemento del array, y eso al final lo añade a this clientes
            array_push(
                $this->clients,
                new Empresa(
                    $element["id"],
                    $element["company"],
                    $element["investment"],
                    $element["date"],
                    $element["active"]
                )
            );
        }
    }

    public function drawList()//mejor usar output que echo porque mejor que los metodos devulvan algo 
    {
        $output = "";
        foreach ($this->clients as $client) {//$this->clients ez el atribuoto de la clase cartera que contiene el array con todas las instancias de tipo empresa
                                             // cada $client es un objeto del array tipo empresa, y como esta dentro de la clase empresa podemos acceder a sus métodos           
            $output .= "<tr>";
            $output .= "    <td>" . $client->getId() . "</td>";
            $output .= "    <td" . (($client->isVIP()) ? " class='vip'" : "") . ">" . $client->getCompany() . "</td>";//True  false asi se puede reutilizar el codigo
            $output .= "    <td>" . number_format(intval($client->getInvestment()), 2,"'",".") . " €</td>";
            $output .= "    <td>" . date("F d, Y", strtotime($client->getDate())) . "</td>";
            $output .= "    <td>";
            $output .= ($client->getActive()) ?//Esto es true o false también
                "<img src='img/img05.gif'>" :
                "<img src='img/img06.gif'>";
            $output .= "    </td>";
            $output .= "</tr>";
        }
        return $output;
    }
}

class Empresa
{
    protected $id;
    protected $company;
    protected $investment;
    protected $date;
    protected $active;

    public function __construct($id, $company, $investment, $date, $active)
    {
        $this->id = $id;
        $this->company = $company;
        $this->investment = $investment;
        $this->date = $date;
        $this->active = $active;
    }
    public function isVIP()
    {
        return $this->investment >= 1000000;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function getInvestment()
    {
        return $this->investment;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getActive()
    {
        return $this->active;
    }
}



$cartera = new Cartera($data);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
                    </div>
                </td>
            </tr>
        </tfoot>
        <tbody>
            <?= $cartera->drawList() ?>
        </tbody>
    </table>
</body>

</html>