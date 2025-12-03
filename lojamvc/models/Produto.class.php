<?php
	class Produto
	{
		public function __construct(private int $id_produto = 0, private string $nome = "", private string $descricao = "", private float $preco = 0.00, private int $desconto = 0, private string $imagem = "", private int $estoque = 0, private string $situacao = "", private $categoria = null){}
		
	
		public function getId_produto()
		{
			return $this->id_produto;
		}
		
		public function getNome()
		{
			return $this->nome;
		}
		
		public function getDescricao()
		{
			return $this->descricao;
		}
		
		public function getPreco()
		{
			return $this->preco;
		}
		public function getDesconto()
		{
			return $this->desconto;
		}
		public function getImagem()
		{
			return $this->imagem;
		}
		
		public function getEstoque()
		{
			return $this->estoque;
		}
		public function getSituacao()
		{
			return $this->situacao;
		}
		
		public function getCategoria()
		{
			return $this->categoria;
		}
	}
?>