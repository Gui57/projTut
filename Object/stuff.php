<?php
class Stuff
{
    
    private $Name;
	private $Key; // keywords of the card
	private $GoldV; // gold value, could be null
	private $Weight;
	private $Light;//could be null or equals to 0
	private $GoldC; // Gold cost
	private $AtkType;// Attaque type
	private $AtkV;// Damage deal by the equipment
	private $Effect1;// first addionnal effect of the equipment
	private $Effect2;// second effect of the equipment
	private $VP;// Victory Points, could be null
	
	
    
    public function Stuff($Name,$Key,$GoldV,$Weight,$Light,$GoldC,$AtkType$,$AtkV,$Effect1,$Effect2,$VP){
	$this->Name=$Name;
	$this->Key=$Key;
	$this->GoldV=$GoldV;
	$this->Weight=$Weigth;
	$this->Light=$Light;
	$this->GoldC=$GoldC;
	$this->AtkType=$AtkType;
	$this->AtkV=$AtkV;
	$this->Effect1=$Effect1;
	$this->Effect2=$Effect2;
	$this->VP=$VP;
    }
	
	public function getName(){
		return $this->Name;
	}
	public function getKey(){
		return $this->Key;
	}
	public function getGoldV(){
		return $this->GoldV;
	}
	public function getWeight(){
		return $this->Weight;
	}
	public function getLight(){
		return $this->Light;
	}
	public function getGoldC){
		return $this->GoldC;
	}
	public function getAtkType(){
		return $this->AtkType;
	}
	public function getAtkV(){
		return $this->AtkV;
	}
	public function getEffect1(){
		return $this->Effect1;
	}
	public function getEffect2(){
		return $this->Effect2;
	}	
	public function getVP(){
		return $this->VP;
	}
	
	public function setName($Name){
	$this->Name=$Name;
	}
	public function setClas($Key){
	$this->Key=$Key;
	}
	public function setGoldV($GoldV){
	$this->GoldV=$GoldV;
	}
	public function setWeight($Weight){
	$this->Weight=$Weight;
	}
	public function setLight($Light){
	$this->Light=$Light;
	}
	public function setGoldC($GoldC;){
	$this->GoldC=$GoldC;
	}
	public function setAtkType($AtkType){
	$this->AtkType=$AtkType;
	}
	public function setAtkV($AtkV){
	$this->AtkV=$AtkV;
	}
	public function setEffect1($AtkEffect1){
	$this->Effect1=$Effect1;
	}
	public function setAtkType($Effect2){
	$this->Effect2=$Effect2;
	}	
	public function setVP($VP){
	$this->VP=$VP;
	}
}
?>