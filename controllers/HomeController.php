<?php
/**
 * home - Controller de exemplo
 * @author Cândido Farias
 * @package mvc
 * @since 0.1
 */
class HomeController extends MainController
{

	/**
	 * Carrega a página "/views/home/index.php"
	 */
    public function index() {
		// Título da página
		$this->title = 'Home';
		
		// Essa página não precisa de modelo (model)
		
		/** Carrega os arquivos do view **/
		$this->view->load("home", "home");
		
    } // index
	
} // class HomeController