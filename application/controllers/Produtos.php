<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produtos extends CI_Controller
{
	public function index()
	{
		$texto = "Você está usando o controller Produtos";

		$dados = array('mensagem' => $texto); //o argumento que deve ser passado para a view tem que ser um array

		$this->load->view('produtos/lista', $dados);
	}

	public function listar_array()
	{
		$this->load->model("ProdutosModel", "produtos"); //primeiro carrega o nome da classe model e segundo o nome no qual ira referenciar a model.

		$resultado = $this->produtos->listar_todos();

		echo '<pre>';

		var_dump($resultado);
	}

	public function listar_tabela()
	{
		$this->load->model("ProdutosModel", "produtos");

		$resultado = $this->produtos->listar_todos();

		$dados = array("produtos" => $resultado);

		$this->load->view("produtos/lista_tabela", $dados);
	}
}

?>
