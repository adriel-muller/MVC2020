<?php
/**
 * Classe para carregamentos de Views
 *
 * 
 * @author Matheus Dias e Adriel Muller
 * @package mvc.classes
 * @since 0.1
 */

class View extends MainController
{

    
    /**
	 * Construtor da classe
	 *
	 * @since 0.1
	 * @access public
	 */
	public function __construct() {
		
	}
	
	
	/**
	 * Load
	 * Faz o load de todos os includes necessarios
	 * 
	 *
	 * @since 0.1
	 * @access public
	 * @param string $pasta a pasta de origem do arquivo, $arquivo o arquivo é o arquivo a ser incluido
	 */
	public function load($pasta = null, $arquivo = null, $parametros = null) {
	
        require PATH . "/views/includes/header.php";
		require PATH . '/views/includes/menu.php';

		//var_dump($parametros);
		
		if($parametros){
			foreach($parametros as $arg => $value) {
				$$arg = $value;
			
			}
		}

		if($arquivo){
			require PATH . "/views/{$pasta}/{$arquivo}.php";
		}
		require PATH . "/views/includes/footer.php";
		
        
	} 


} // View
