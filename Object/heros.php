<?php
class Heros
{
    
    private $Name;
	private $Key; // keywords of the card
	private $Clas; //class of the hero
	private $GoldV; // gold value, could be null
	private $Strength;
	private $Light;//could be null or equals to 0
	private $XP; // xp cost to lvl up
	private $lvl; // lvl of the hero
	private $GoldC; // Gold cost
	private $AtkType;// Attaque type
	private $AtkV;// Damage deal by the heros
	private $Effect1;// first addionnal effect of the hero
	private $Effect2;// second effect of the hero
	private $VP;// Victory Points, could be null
	
	
    
    public function Heros($Name,$Key,$Class,$GoldV,$Strength,$Light,$XP,$lvl,$goldC,$AtkType$$AtkV,$Effect1,$Effect2,$VP){
	$this->Name=$Name;
	$this->Key=$Key;
	$this->Clas=$Clas;
	$this->GoldV=$GoldV;
	$this->Strenght=$Strength;
	$this->Light=$Light;
	$this->XP=$XP;
	$this->lvl$lvl;
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
	public function getClas(){
		return $this->Clas;
	}
	public function getGoldV(){
		return $this->GoldV;
	}
	public function getStrenght(){
		return $this->Strenght;
	}
	public function getLight(){
		return $this->Light;
	}
	public function getXP(){
		return $this->XP;
	}
	public function getlvl(){
		return $this->lvl;
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
	public function getAtkEffect1(){
		return $this->AtkEffect1;
	}
	public function getAtkEffect2(){
		return $this->AtkEffect2;
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
	public function setGoldV($Clas){
	$this->Clas=$Clas;
	}
	public function setStrenght($Strength){
	$this->Strenght=$Strength;
	}
	public function setLight($Light){
	$this->Light=$Light;
	}
	public function setXP($XP){
	$this->XP=$XP;
	}
	public function setlvl($lvl){
	$this->lvl=$lvl;
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