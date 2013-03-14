<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Maincontroller extends CI_Controller {

	
	public function index()
	{
				
		$this->show_usuario();


	}

	function show_usuario(){
		
		$this->load->library('pagination');		
		$config['base_url'] = 'http://' .$_SERVER['SERVER_NAME']. '/code3/index.php/maincontroller/show_usuario';
		$config['total_rows'] = $this->db->query("select cliente from cliente")->num_rows();
		$config['per_page'] = 17;
		$config['num_links'] = 10;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';		
		$this->pagination->initialize($config);
				
		$teste = $this->uri->segment(3);
		if ($teste == ''){
		$teste = 0;
		}
		$data['teste'] = $teste;
		
		$per_page = $config['per_page'];
		$query = $this->db->query("select id_cliente, cliente FROM cliente ORDER BY cliente asc LIMIT $teste, $per_page");
		$data['query'] = $query->result();
		
		$this->load->view('mainview',$data);	
		
	}

	function show_servidor(){
		$query = $this->db->query("SELECT id_servidor, servidor FROM servidor ORDER BY servidor ASC");
		$data['query'] = $query->result();
		
		$this->load->view('servidor_view',$data);
	}

	function show_servidor2($id_teste){
		$this->load->library('pagination');		
		$config['base_url'] = "http://$_SERVER[SERVER_NAME]/code3/index.php/maincontroller/show_servidor2/$id_teste";
		$config['total_rows'] = $this->db->query("SELECT s.servidor, o.so, o.peq_img, h.nome_host, h.interface_chegada, h.porta_ssh, h.gateway, h.id_host FROM host h INNER JOIN servidor s ON s.id_servidor  = h.id_servidor INNER JOIN so o ON o.id_so = h.id_so INNER JOIN cliente c ON c.id_cliente = h.id_cliente WHERE h.id_servidor = $id_teste")->num_rows();
		$config['per_page'] = 17;
		$config['num_links'] = 10;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';	
		$config['uri_segment'] = 4; //habilita uri segment
	
		$this->pagination->initialize($config);
				
		$teste = $this->uri->segment(4);
		if ($teste == ''){
		$teste = 0;
		}
		$data['teste'] = $teste;
		
		$per_page = $config['per_page'];


		$titulo_servidor = $this->db->query("SELECT s.servidor FROM host h INNER JOIN servidor s ON h.id_servidor = s.id_servidor WHERE h.id_servidor = $id_teste");
		$data['titulo_servidor'] = $titulo_servidor->row(0);

		$query = $this->db->query("SELECT s.servidor, o.so, o.peq_img, h.nome_host, h.interface_chegada, h.porta_ssh, h.gateway, h.id_host, c.cliente, c.id_cliente FROM host h INNER JOIN servidor s ON s.id_servidor  = h.id_servidor INNER JOIN so o ON o.id_so = h.id_so INNER JOIN cliente c ON c.id_cliente = h.id_cliente WHERE h.id_servidor = $id_teste ORDER BY c.cliente ASC LIMIT $teste, $per_page");
		$data['query'] = $query->result();

		
		$this->load->view('host_view_servidor',$data);
	}

	function show_so2($id_teste){
		$this->load->library('pagination');		
		$config['base_url'] = "http://$_SERVER[SERVER_NAME]/code3/index.php/maincontroller/show_so2/$id_teste";
		$config['total_rows'] = $this->db->query("SELECT s.servidor, o.so, o.peq_img, h.nome_host, h.interface_chegada, h.porta_ssh, h.gateway, h.id_host FROM host h INNER JOIN servidor s ON s.id_servidor  = h.id_servidor INNER JOIN so o ON o.id_so = h.id_so INNER JOIN cliente c ON c.id_cliente = h.id_cliente WHERE h.id_so = $id_teste")->num_rows();
		$config['per_page'] = 17;
		$config['num_links'] = 10;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';	
		$config['uri_segment'] = 4; //habilita uri segment
	
		$this->pagination->initialize($config);
				
		$teste = $this->uri->segment(4);
		if ($teste == ''){
		$teste = 0;
		}
		$data['teste'] = $teste;
		
		$per_page = $config['per_page'];


		$titulo_cliente = $this->db->query("SELECT s.so FROM host h INNER JOIN so s ON h.id_so = s.id_so WHERE h.id_so = $id_teste");
		$data['titulo_so'] = $titulo_cliente->row(0);

		$query = $this->db->query("SELECT s.servidor, o.so, o.peq_img, h.nome_host, h.interface_chegada, h.porta_ssh, h.gateway, h.id_host, c.cliente, c.id_cliente FROM host h INNER JOIN servidor s ON s.id_servidor  = h.id_servidor INNER JOIN so o ON o.id_so = h.id_so INNER JOIN cliente c ON c.id_cliente = h.id_cliente WHERE h.id_so = $id_teste ORDER BY c.cliente ASC LIMIT $teste, $per_page");
		$data['query'] = $query->result();

		
		$this->load->view('host_view_so',$data);
	}

	function edit_usuario($id_cliente){
		$this->load->model('usuario_model');
		$data['cliente'] = $this->usuario_model->get_by_id($id_cliente);

		$this->form_validation->set_rules('cliente','cliente','trim|required');

		
		if($this->form_validation->run()){
			$_POST['id_cliente'] = $id_cliente;
			if($this->usuario_model->update_record($_POST)){
				redirect('maincontroller/show_usuario');
			}
		}
		
		$this->load->view('update_view',$data);
	}

	function edit_servidor($id_servidor){
		$this->load->model('usuario_model');
		$data['servidor'] = $this->usuario_model->get_by_id_servidor($id_servidor);

		$this->form_validation->set_rules('servidor','servidor','trim|required');

		
		if($this->form_validation->run()){
			$_POST['id_servidor'] = $id_servidor;
			if($this->usuario_model->update_servidor_record($_POST)){
				redirect('maincontroller/show_servidor');
			}
		}
		
		$this->load->view('update_servidor_view',$data);
	}

	function create_so(){
		$this->load->view('create_so_view');	

	}


	function add_so()
	{
		$this->load->model('usuario_model');

		$this->form_validation->set_rules('so','so','trim|required');
		
		$img = $this->input->post('img');
		$peq_img = "peq_$img";	

		$data = array(
		'so' => $this->input->post('so'),
		'peq_img' => $peq_img,
		'img' => $this->input->post('img')
		);
		
		if($this->form_validation->run()){
			if($this->usuario_model->add_so_record($data))
			{
				//$this->show_usuario($var);
				redirect('maincontroller/show_usuario');
	
			}	
		}
		$this->create_so();
	}

	function create_host(){
		$this->load->model('usuario_model');

		//dropdown
		$data['cliente'] = $this->usuario_model->get_dropdown_cliente();
		$data['servidor'] = $this->usuario_model->get_dropdown_servidor();
		$data['so'] = $this->usuario_model->get_dropdown_so();

		$this->load->view('create_host_view',$data);	

	}


	function add_host()
	{
		$this->load->model('usuario_model');

		$this->form_validation->set_rules('nome_host','nome_host','trim|required');
		$this->form_validation->set_rules('servicos','servicos','trim|required');
		$this->form_validation->set_rules('sobrenome','sobrenome','trim|required');
		$this->form_validation->set_rules('interface_chegada','interface_chegada','trim|required');
		$this->form_validation->set_rules('porta_ssh','porta_ssh','trim|required');
		$this->form_validation->set_rules('gateway','gateway','trim|required');
		

		$data = array(
		'nome_host' => $this->input->post('nome_host'),
		'id_cliente' => $this->input->post('id_cliente'),
		'id_servidor' => $this->input->post('id_servidor'),
		'id_so' => $this->input->post('id_so'),
		'nome_host' => $this->input->post('nome_host'),
		'id_cliente' => $this->input->post('id_cliente'),
		'id_servidor' => $this->input->post('id_servidor'),
		'id_so' => $this->input->post('id_so'),
		'servicos' => $this->input->post('servicos'),
		'rotas' => $this->input->post('rotas'),
		'vpn' => $this->input->post('vpn'),
		'obs_gerais' => $this->input->post('obs_gerais'),
		'if1' => $this->input->post('if1'),
		'ip1' => $this->input->post('ip1'),
		'masc1' => $this->input->post('masc1'),
		'obs1' => $this->input->post('obs1'),
		'if2' => $this->input->post('if2'),
		'ip2' => $this->input->post('ip2'),
		'masc2' => $this->input->post('masc2'),
		'obs2' => $this->input->post('obs2'),
		'if3' => $this->input->post('if3'),
		'ip3' => $this->input->post('ip3'),
		'masc3' => $this->input->post('masc3'),
		'obs3' => $this->input->post('obs3'),
		'if4' => $this->input->post('if4'),
		'ip4' => $this->input->post('ip4'),
		'masc4' => $this->input->post('masc4'),
		'obs4' => $this->input->post('obs4'),
		'sobrenome' => $this->input->post('sobrenome'),
		'interface_chegada' => $this->input->post('interface_chegada'),
		'porta_ssh' => $this->input->post('porta_ssh'),
		'gateway' => $this->input->post('gateway')
		
		
		);
		
		if($this->form_validation->run()){
			if($this->usuario_model->add_host_record($data))
			{
				//$this->show_usuario($var);
				redirect('maincontroller/show_usuario');
	
			}	
		}
		$this->create_host();
	}

	

	function edit_so($id_so){
		$this->load->model('usuario_model');
		$data['so'] = $this->usuario_model->get_by_id_so($id_so);

		$this->form_validation->set_rules('so','so','trim|required');	
		

		if($this->form_validation->run()){
			$_POST['id_so'] = $id_so;
			if($this->usuario_model->update_so_record($_POST)){
				redirect('maincontroller/show_so');
			}
		}
		
		$this->load->view('update_so_view',$data);
	}




	function detalhes_host($id_host){
		$this->load->model('usuario_model');
		$data['host'] = $this->usuario_model->get_by_id_detalhes_host($id_host);
				
		$this->load->view('detalhes_view',$data);
	}




	function edit_host($id_host){
		$this->load->model('usuario_model');
		$data['host'] = $this->usuario_model->get_by_id_host($id_host);

		$this->form_validation->set_rules('nome_host','nome_host','trim|required');
		$this->form_validation->set_rules('servicos','servicos','trim|required');

		$this->form_validation->set_rules('sobrenome','sobrenome','trim|required');
		$this->form_validation->set_rules('interface_chegada','interface_chegada','trim|required');
		$this->form_validation->set_rules('porta_ssh','porta_ssh','trim|required');
		$this->form_validation->set_rules('gateway','gateway','trim|required');
	
		//dropdown
		$data['cliente'] = $this->usuario_model->get_dropdown_cliente();
		$data['servidor'] = $this->usuario_model->get_dropdown_servidor();
		$data['so'] = $this->usuario_model->get_dropdown_so();
		
		if($this->form_validation->run()){
			$_POST['id_host'] = $id_host;
			if($this->usuario_model->update_host_record($_POST)){
				redirect('maincontroller/show_usuario');
			}
		}

				
		$this->load->view('update_host_view',$data);
	}


	function busca()
	{		
		$origem = $this->input->post('origem');
		//$data['origem'] = $origem;
		//$origem = '9963';
		if($origem == ''){
			$this->show_usuario();
		}
		else{
			$this->pag_busca($origem);
		}
	}

	function pag_busca($origem){
				
		//if ($origem != ''){
		$this->load->library('pagination');
		$config['base_url'] = "http://$_SERVER[SERVER_NAME]/code2/index.php/maincontroller/pag_busca/$origem";
		$config['total_rows'] = $this->db->query("select origem, dst from cdr WHERE origem = $origem")->num_rows();
		$config['per_page'] = 17;
		$config['num_links'] = 10;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';	
		$config['uri_segment'] = 4;
		
		$this->pagination->initialize($config);
		
		//$query = $this->db->get('cdr', $config['per_page'], $this->uri->segment(3));
		$teste = $this->uri->segment(4);
		if ($teste == ''){
		$teste = 0;
		}
		$data['teste'] = $teste;
				
		$per_page = $config['per_page'];

		
		$query = $this->db->query("select origem, dst from cdr WHERE origem = $origem LIMIT $teste, $per_page");
		$data['query'] = $query->result();
		
		$data['origem'] = $origem;

		//$data['records'] = $this->db->get('usuarios', $config['per_page'], $this->uri->segment(3));		
		
		$this->load->view('mainview',$data);
		//}
		//else {
		//$this->show_usuario();
		//}

		
	}

	function show_host(){
		
		$this->load->library('pagination');		
		$config['base_url'] = "http://$_SERVER[SERVER_NAME]/code3/index.php/maincontroller/show_host";
		$config['total_rows'] = $this->db->query("SELECT s.servidor, o.so, h.nome_host, h.interface_chegada, h.porta_ssh, h.gateway, h.id_host FROM host h INNER JOIN servidor s ON s.id_servidor = h.id_servidor INNER JOIN so o ON o.id_so = h.id_so")->num_rows();
		$config['per_page'] = 17;
		$config['num_links'] = 10;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';		
		$this->pagination->initialize($config);
				
		$teste = $this->uri->segment(3);
		if ($teste == ''){
		$teste = 0;
		}
		$data['teste'] = $teste;

				
		$per_page = $config['per_page'];
		$query = $this->db->query("SELECT s.servidor, o.so, o.peq_img, h.nome_host, h.interface_chegada, h.porta_ssh, h.gateway, h.id_host FROM host h INNER JOIN servidor s ON s.id_servidor  = h.id_servidor INNER JOIN so o ON o.id_so = h.id_so LIMIT $teste, $per_page");
		$data['query'] = $query->result();
		
		$this->load->view('host_view_cliente',$data);
	}

	function show_host2($id_teste){

		$titulo_cliente = $this->db->query("SELECT c.cliente FROM host h INNER JOIN cliente c ON h.id_cliente = c.id_cliente WHERE h.id_cliente = $id_teste");
		$data['titulo_cliente'] = $titulo_cliente->row(0);
				
		$query = $this->db->query("SELECT s.servidor, o.so, o.peq_img, h.nome_host, h.interface_chegada, h.porta_ssh, h.gateway, h.id_host FROM host h INNER JOIN servidor s ON s.id_servidor  = h.id_servidor INNER JOIN so o ON o.id_so = h.id_so WHERE h.id_cliente = $id_teste");
		$data['query'] = $query->result();
		
		$this->load->view('host_view_cliente',$data);
	}

	function show_so(){
		$query = $this->db->query("SELECT id_so, so, peq_img FROM so ORDER BY so ASC");
		$data['query'] = $query->result();
		
		$this->load->view('so_view',$data);
	}


	function create_cliente(){

		$this->load->view('create_cl_view');	

	}


	function add_cliente()
	{
		$this->load->model('usuario_model');

		$this->form_validation->set_rules('cliente','cliente','trim|required');
	
		$data = array(
		'cliente' => $this->input->post('cliente'),
		);

		if($this->form_validation->run()){
			if($this->usuario_model->add_record($data))
			{
				redirect('maincontroller/show_usuario');	
			}
		}
		$this->create_cliente();
	}

	function create_servidor(){
		$this->load->view('create_serv_view');	

	}


	function add_servidor()
	{
		$this->load->model('usuario_model');

		$this->form_validation->set_rules('servidor','servidor','trim|required');
	
		$data = array(
		'servidor' => $this->input->post('servidor'),
		);
		
		if($this->form_validation->run()){
			if($this->usuario_model->add_serv_record($data))
			{
				redirect('maincontroller/show_usuario');	
			}	
		}
		$this->create_servidor();
	}

	
	

	function teste(){
	$var1 = '12';
	$this->teste2($var1);
	}

	function teste2($var1){
	$data['teste'] = $var1;
	$this->load->view('mainview',$data);
	}

	function teste3($teste){
	$data['teste'] = $var;
	$this->load->view('mainview',$data);
	}

	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
