<?php 
	require_once'AcoesVideo.php';
	class Video implements AcoesVideo
	{
		private $titulo;
		private $avaliacao;
		private $views;
		private $curtidas;
		private $reproduzindo;



		public function __construct($titulo, $avaliacao, $views, $curtidas, $reproduzindo)
		{
			$this->titulo = $titulo;
			$this->setAvaliacao(1);
			$this->setViews(0);
			$this->setCurtidas(0); 
			$this->setReproduzindo(false);
		}


		
		function play(){
			echo "Vovê deu play...";
		}

		function pause(){
			echo "Vovê deu pause...";
		}

		function like(){
			echo "Você deu like...";
		}



	    public function getTitulo()
	    {
	        return $this->titulo;
	    }

	    public function setTitulo($titulo)
	    {
	        $this->titulo = $titulo;

	        return $this;
	    }

	    public function getAvaliacao()
	    {
	        return $this->avaliacao;
	    }

	    public function setAvaliacao($avaliacao)
	    {	
	    	$media = ($this->avaliacao + $avaliacao)/$this->views;
	        $this->avaliacao = $avaliacao;

	        return $this;
	    }

	    public function getViews()
	    {
	        return $this->views;
	    }

	    public function setViews($views)
	    {
	        $this->views = $views;

	        return $this;
	    }

	    public function getCurtidas()
	    {
	        return $this->curtidas;
	    }

	    public function setCurtidas($curtidas)
	    {
	        $this->curtidas = $curtidas;

	        return $this;
	    }

	    public function getReproduzindo()
	    {
	        return $this->reproduzindo;
	    }

	    public function setReproduzindo($reproduzindo)
	    {
	        $this->reproduzindo = $reproduzindo;

	        return $this;
	    }
	}
 ?>