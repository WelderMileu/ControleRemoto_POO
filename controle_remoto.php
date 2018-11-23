<?php
	
	require_once "controlador.php";
	
	class Controle implements Controlador{
		
		public $ligar;
		public $menu;
		public $volume;
		public $play;
		
		public function __construct(){
			$this->setLigar(false);
			$this->setVolume(50);
		}
		
		//METODOS ESPECIAS
		
		public function ligar(){
			$this->setLigar(true);
		}
		
		public function desligar(){
			$this->setLigar(false);
		}
		
		public function abrirMenu(){
			echo "<br><br>---------- Menu -----------<br>";
			echo "<br>Ligado: ".($this->getLigar()?"<span style='color:#00f'>SIM</span>":"<span style='color:#f00'>NAO</span>");
			echo "<br>Volume: ".$this->getVolume();
			echo "<br>Esta tocando: ".($this->getPlay()?"<span style='color:#00f'>SIM</span>":"<span style='color:#f00'>NAO</span>")."<br>";
		}
		
		public function fecharMenu(){
			echo "Fechando Menu ...";
		}
		
		public function aumentarVolume(){
			if($this->getLigar()){
				$this->setVolume($this->getVolume()+10);
				for($i=0;$i < $this->getVolume();$i+=10){
					echo "|";
				}
			}else{
				echo "<br>Erro! Nao e possivel almentar o volume!";
			}
		}
		
		public function diminuirVolume(){
			if($this->getLigar()){
				$this->setVolume($this->getVolume()-10);
				for($i=0;$i > $this->getVolume();$i-=10){
					echo "|";
				}
			}else{
					echo "<br>Erro! Nao foi possivel diminuir o volume";
			}
		}
		
		public function pausar(){
			if($this->getLigar()){
				$this->setPlay(false);
			}else{
				echo "<br>Não Foi possivel dar o pausa!";
			}
		}
		
		public function play(){
			if($this->getLigar()){
				$this->setPlay(true);
			}else{
				echo "<br>Nao foi possivel dar o play!";
			}
		}
		
		//GETERRS E SETERRS
		
		private function getLigar(){
			return $this->ligar;
		}
		
		private function setLigar($s){
			$this->ligar = $s;
		}
	
		private function getMenu(){
			return $this->menu;
		}
		
		private function setMenu($s){
			$this->menu = $s;
		}
		
		private function getVolume(){
			return $this->volume;
		}
		
		private function setVolume($s){
			$this->volume = $s;
		}
		
		private function getPlay(){
			return $this->play;
		}
		
		private function setPlay($s){
			$this->play = $s;
		}
	}

?>
