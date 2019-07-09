<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paginas extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['_title'] = '';
		$data['_view'] = 'paginas/index';
        $this->load->view('template',$data);
	}

	public function about()
	{
		$data['_title'] = 'Nosotros';
		$data['_view'] = 'paginas/about';
        $this->load->view('template',$data);
	}

	public function estudio()
	{
		$data['_title'] = 'Estudio';
		$data['_view'] = 'paginas/estudio';
        $this->load->view('template',$data);
	}

	public function barrisolabout()
	{
		$data['_title'] = 'QUE ES BARRISOL?';
		$data['_view'] = 'paginas/barrisolabout';
        $this->load->view('template',$data);
	}

	public function caracteristicasgenerales()
	{
		$data['_title'] = 'Caracteristicas Generales';
		$data['_view'] = 'paginas/caracteristicasgenerales';
        $this->load->view('template',$data);
	}

	public function caracteristicastecnicas()
	{
		$data['_title'] = 'Caracteristicas Técnicas';
		$data['_view'] = 'paginas/caracteristicastecnicas';
        $this->load->view('template',$data);
	}

	public function acustico()
	{
		$data['_title'] = 'Acustico';
		$data['_view'] = 'paginas/acustico';
        $this->load->view('template',$data);
	}

	public function impreso()
	{
		$data['_title'] = 'Impreso';
		$data['_view'] = 'paginas/impreso';
        $this->load->view('template',$data);
	}

	public function traslucido()
	{
		$data['_title'] = 'Traslucido';
		$data['_view'] = 'paginas/traslucido';
        $this->load->view('template',$data);
	}

	public function arcolis()
	{
		$data['_title'] = 'Arcolis';
		$data['_view'] = 'paginas/arcolis';
        $this->load->view('template',$data);
	}

	public function artolis()
	{
		$data['_title'] = 'Artolis';
		$data['_view'] = 'paginas/artolis';
        $this->load->view('template',$data);
	}

	public function clim()
	{
		$data['_title'] = 'Clim';
		$data['_view'] = 'paginas/clim';
        $this->load->view('template',$data);
	}

	public function elt3d()
	{
		$data['_title'] = 'Elt 3d';
		$data['_view'] = 'paginas/elt3d';
        $this->load->view('template',$data);
	}

	public function formas3d()
	{
		$data['_title'] = 'Formas 3d';
		$data['_view'] = 'paginas/formas3d';
        $this->load->view('template',$data);
	}

	public function mirror()
	{
		$data['_title'] = 'Mirror';
		$data['_view'] = 'paginas/mirror';
        $this->load->view('template',$data);
	}

	public function reciclados()
	{
		$data['_title'] = 'Reciclados';
		$data['_view'] = 'paginas/reciclados';
        $this->load->view('template',$data);
	}

	public function creadesign()
	{
		$data['_title'] = 'Creadesign';
		$data['_view'] = 'paginas/creadesign';
        $this->load->view('template',$data);
	}

	public function materiales()
	{
		$data['_title'] = 'Materiales';
		$data['_view'] = 'paginas/materiales';
        $this->load->view('template',$data);
	}

	public function mantenimiento()
	{
		$data['_title'] = 'Mantenimiento';
		$data['_view'] = 'paginas/mantenimiento';
        $this->load->view('template',$data);
	}

	public function preguntas_frecuentes()
	{
		$data['_title'] = 'Preguntas Frecuentes';
		$data['_view'] = 'paginas/preguntas_frecuentes';
        $this->load->view('template',$data);
	}

	public function catalogos()
	{
		$data['_title'] = 'Catalogos';
		$data['_view'] = 'paginas/catalogos';
        $this->load->view('template',$data);
	}

	public function videos()
	{
		$data['_title'] = 'Videos';
		$data['_view'] = 'paginas/videos';
        $this->load->view('template',$data);
	}

	public function mymosaic()
	{
		$data['_title'] = 'My Mosaic';
		$data['_view'] = 'paginas/mymosaic';
        $this->load->view('template',$data);
	}

	public function stoneflex()
	{
		$data['_title'] = 'Stone Flex';
		$data['_view'] = 'paginas/stoneflex';
        $this->load->view('template',$data);
	}

	public function iluminacion()
	{
		$data['_title'] = 'Iluminación';
		$data['_view'] = 'paginas/iluminacion';
        $this->load->view('template',$data);
	}

	public function arquitectura()
	{
		$data['_title'] = 'Arquitectura';
		$data['_view'] = 'paginas/arquitectura';
        $this->load->view('template',$data);
	}

	public function blog()
	{
		$data['_title'] = 'Blog';
		$data['_view'] = 'paginas/blog';
        $this->load->view('template',$data);
	}

	public function contacto()
	{
		$data['_title'] = 'Contacto';
		$data['_view'] = 'paginas/contacto';
        $this->load->view('template',$data);
	}

	public function prueba()
	{
		$data['_title'] = 'Prueba';
		$data['_view'] = 'paginas/prueba';
        $this->load->view('template',$data);
	}


}
