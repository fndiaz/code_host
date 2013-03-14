<?php

	class usuario_model extends CI_Model{

		function get_all(){
		//$query = $this->db->query("select * from usuarios");
		//$this->db->where('usr','fernando');
		$query = $this->db->get('cdr');
		return $query->result();
		
		}
		
		function search_record($options = array()){
		$this->db->insert('usuarios',$options);
		return $this->db->affected_rows();
			
		}

		function delete_record(){
		$this->db->where('id',$this->uri->segment(3));
		$this->db->delete('usuarios');
		return $this->db->affected_rows();
				
		}

		function add_record($options = array()){
		$this->db->insert('cliente',$options);
		return $this->db->affected_rows();
			
		}

		function add_serv_record($options = array()){
		$this->db->insert('servidor',$options);
		return $this->db->affected_rows();
			
		}

		function add_so_record($options = array()){
		$this->db->insert('so',$options);
		return $this->db->affected_rows();
			
		}

		function add_host_record($options = array()){
		$this->db->insert('host',$options);
		return $this->db->affected_rows();
			
		}

		function update_record($options = array()){
			
			if(isset($options['cliente']))
				$this->db->set('cliente',$options['cliente']);

			$this->db->where('id_cliente',$options['id_cliente']);
			$this->db->update('cliente');
			return $this->db->affected_rows();
				
		}

		function get_by_id($id_cliente){
			$this->db->where('id_cliente',$id_cliente);
			$query = $this->db->get('cliente');
			return $query->row(0);		

		}

		function get_usuario($usr,$senha){
			$this->db->where('usr',$usr);
			$this->db->where('senha',$senha);
			$query = $this->db->get('usuarios');
			return $query->row(0);
		}

		function login($options = array()){
			$usuario = $this->get_usuario($options['usr'],$options['senha']);
			if(!$usuario) return false;

			return true;
		}	

		function get_by_id_servidor($id_servidor){
			//$this->db->where('id_host',$id_host);
			//$query = $this->db->get('host');
			//$query = $this->db->query("SELECT * FROM host Where id_host = $id_host");
			$query = $this->db->query("SELECT * from servidor Where id_servidor = $id_servidor");
			return $query->row(0);		

		}

		function get_by_id_so($id_so){
			//$this->db->where('id_host',$id_host);
			//$query = $this->db->get('host');
			//$query = $this->db->query("SELECT * FROM host Where id_host = $id_host");
			$query = $this->db->query("SELECT * from so Where id_so = $id_so");
			return $query->row(0);		

		}

		function update_servidor_record($options = array()){
			
			if(isset($options['servidor']))
				$this->db->set('servidor',$options['servidor']);

			$this->db->where('id_servidor',$options['id_servidor']);
			$this->db->update('servidor');
			return $this->db->affected_rows();
				
		}

		function update_so_record($options = array()){
		//$var = $options['peq_img'];
		$img = $options['img'];
		$peq_img = "peq_$img";
			
			if(isset($options['so']))
				$this->db->set('so',$options['so']);

			if(isset($options['img']))
				$this->db->set('img',$options['img']);

				$this->db->set('peq_img',$peq_img            );

			$this->db->where('id_so',$options['id_so']);
			$this->db->update('so');
			return $this->db->affected_rows();
				
		}
		
		function get_by_id_host($id_host){
			//$this->db->where('id_host',$id_host);
			//$query = $this->db->get('host');
			//$query = $this->db->query("SELECT * FROM host Where id_host = $id_host");
			$query = $this->db->query("SELECT * from host Where id_host = $id_host");
			return $query->row(0);		

		}


		function get_by_id_detalhes_host($id_host){
			$query = $this->db->query("SELECT o.img, o.so, c.cliente, s.servidor, h.nome_host, h.interface_chegada, h.porta_ssh, h.gateway, h.sobrenome, h.servicos, h.if1, h.ip1, h.masc1, h.obs1, h.if2, h.ip2, h.masc2, h.obs2, h.if3, h.ip3, h.masc3, h.obs3, h.if4, h.ip4, h.masc4, h.obs4, h.rotas, h.obs_gerais FROM host h 
INNER JOIN cliente c ON h.id_cliente = c.id_cliente
INNER JOIN servidor s ON h.id_servidor = s.id_servidor
INNER JOIN so o ON o.id_so = h.id_so Where id_host = $id_host");
			return $query->row(0);		

		}


		function update_host_record($options = array()){
			
			if(isset($options['nome_host']))
				$this->db->set('nome_host',$options['nome_host']);

			if(isset($options['id_cliente']))
				$this->db->set('id_cliente',$options['id_cliente']);

			if(isset($options['id_servidor']))
				$this->db->set('id_servidor',$options['id_servidor']);

			if(isset($options['id_so']))
				$this->db->set('id_so',$options['id_so']);

			if(isset($options['servicos']))
				$this->db->set('servicos',$options['servicos']);

			if(isset($options['rotas']))
				$this->db->set('rotas',$options['rotas']);

			if(isset($options['vpn']))
				$this->db->set('vpn',$options['vpn']);

			if(isset($options['obs_gerais']))
				$this->db->set('obs_gerais',$options['obs_gerais']);

			if(isset($options['if1']))
				$this->db->set('if1',$options['if1']);

			if(isset($options['ip1']))
				$this->db->set('ip1',$options['ip1']);

			if(isset($options['masc1']))
				$this->db->set('masc1',$options['masc1']);

			if(isset($options['obs1']))
				$this->db->set('obs1',$options['obs1']);

			if(isset($options['if2']))
				$this->db->set('if2',$options['if2']);

			if(isset($options['ip2']))
				$this->db->set('ip2',$options['ip2']);

			if(isset($options['masc2']))
				$this->db->set('masc2',$options['masc2']);

			if(isset($options['obs2']))
				$this->db->set('obs2',$options['obs2']);

			if(isset($options['if3']))
				$this->db->set('if3',$options['if3']);

			if(isset($options['ip3']))
				$this->db->set('ip3',$options['ip3']);

			if(isset($options['masc3']))
				$this->db->set('masc3',$options['masc3']);

			if(isset($options['obs3']))
				$this->db->set('obs3',$options['obs3']);

			if(isset($options['if4']))
				$this->db->set('if4',$options['if4']);

			if(isset($options['ip4']))
				$this->db->set('ip4',$options['ip4']);

			if(isset($options['masc4']))
				$this->db->set('masc4',$options['masc4']);

			if(isset($options['obs4']))
				$this->db->set('obs4',$options['obs4']);

			if(isset($options['sobrenome']))
				$this->db->set('sobrenome',$options['sobrenome']);

			if(isset($options['interface_chegada']))
				$this->db->set('interface_chegada',$options['interface_chegada']);

			if(isset($options['porta_ssh']))
				$this->db->set('porta_ssh',$options['porta_ssh']);

			if(isset($options['gateway']))
				$this->db->set('gateway',$options['gateway']);

			$this->db->where('id_host',$options['id_host']);
			$this->db->update('host');
			return $this->db->affected_rows();
				
		}

		function get_dropdown_cliente(){
			$id_cliente = $this->db->query("select h.id_cliente, c.cliente from host h inner join cliente c where h.id_cliente = c.id_cliente"); 
			//$id_cliente = $this->db->query("select id_cliente from host Where id_host = $id_host");
			$dropdowns = $id_cliente->result();
						
			foreach ($dropdowns as $dropdown){
				$dropdownlist[$dropdown->id_cliente] = $dropdown->cliente;
			}					
			$finaldropdown = $dropdownlist;
			return $finaldropdown;
		}

		function get_dropdown_servidor(){
			$id_servidor = $this->db->query("select h.id_servidor, s.servidor from host h inner join servidor s where h.id_servidor = s.id_servidor"); 
			//$id_cliente = $this->db->query("select id_cliente from host Where id_host = $id_host");
			$dropdowns = $id_servidor->result();
						
			foreach ($dropdowns as $dropdown){
				$dropdownlist[$dropdown->id_servidor] = $dropdown->servidor;
			}					
			$finaldropdown = $dropdownlist;
			return $finaldropdown;
		}

		function get_dropdown_so(){
			$id_so = $this->db->query("select h.id_so, s.so from host h inner join so s where h.id_so = s.id_so"); 
			//$id_cliente = $this->db->query("select id_cliente from host Where id_host = $id_host");
			$dropdowns = $id_so->result();
						
			foreach ($dropdowns as $dropdown){
				$dropdownlist[$dropdown->id_so] = $dropdown->so;
			}					
			$finaldropdown = $dropdownlist;
			return $finaldropdown;
		}

	}
?>
