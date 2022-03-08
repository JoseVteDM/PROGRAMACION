<?php






require_once "autoload.php";

class Camera {
	
	/*
	private $id;
	private $latitude;
	private $longitude;
	private $match;
	private $time;*/
/*
	public function __construct($id, $latitude, $longitude, $match, $checked,$active,$time)
	{
		$this -> id = $id;
		$this -> latitude = $latitude;
		$this -> longitude = $longitude;
		$this -> faces_checked = $checked;
		$this -> faces_match = $match;
		$this -> active = $active;
		$this -> time = $time;
	}*/
	public function insert($data)
    {

        $id = $data["id"];
        $latitude = $data["lat"];
        $longitude = $data["lon"];
		$checked = $data["faces_checked"];
        $match = $data["faces_match"];
		$active = $data["active"];
        $time = isset($data["Date"]);

        $newCamera = new Camera($id, $company, $investment, $date, $active);

        array_push($this->clients, $newClient);
        $this->persist();
        return true;
    }

	/*
	function toDate($time)
	{
		return date("l m,Y",strtotime($time));
	
	
    }
    

*/




	/**
	 * Get the value of id
	 */ 
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the value of latitude
	 */ 
	public function getLatitude()
	{
		return $this->latitude;
	}

	/**
	 * Get the value of longitude
	 */ 
	public function getLongitude()
	{
		return $this->longitude;
	}

	/**
	 * Get the value of match
	 */ 
	public function getMatch()
	{
		return $this->match;
	}

	/**
	 * Get the value of time
	 */ 
	public function getTime()
	{
		return $this->time;
	}
}
echo new Camera;