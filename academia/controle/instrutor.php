<?php
	class Instrutor{
		//por padrão, o nome das classes começam com letra maiuscula
		
		public $id_instrutor;
		public $nome_instrutor;
		public $rg_instrutor;
		public $data_nasc_instrutor;
		public $titulacao_instrutor;
		public $telefone_instrutor;
		
		public function __construct($id_instrutor, $nome_instrutor, $rg_instrutor, $data_nasc_instrutor, $titulacao_instrutor, $telefone_instrutor){
			
			$this->id_instrutor = $id_instrutor;
			$this->nome_instrutor = $nome_instrutor;
			$this->rg_instrutor = $rg_instrutor;
			$this->data_nasc_instrutor = $data_nasc_instrutor;
			$this->titulacao_instrutor = $titulacao_instrutor;
			$this->telefone_instrutor = $telefone_instrutor;
		}
	}
?>