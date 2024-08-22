<?php
	class Atividade{
		//por padrão, o nome das classes começam com letra maiuscula
		
		public $id;
		public $disciplina;
		public $tema;
		public $descricao;
		public $nota;
		public $data;
		
		public function __construct($id, $disciplina, $tema, $descricao, $nota, $data){
			
			$this->id = $id;
			$this->disciplina = $disciplina;
			$this->tema = $tema;
			$this->descricao = $descricao;
			$this->nota = $nota;
			$this->data = $data;
		}
	}
?>