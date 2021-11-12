class Sepatu extends CI_Controller
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('Model_sepatu');
	}

	public function index()
	{
		$this->form_validation->set_rules('nama', 'Nama Pembeli', 'required', [
			'required' => 'Nama Pembeli harus di isi']);
		$this->form_validation->set_rules('nhp', 'Nomer HP', 'required', [
			'required' => 'Nomer HP harus di isi']);
		if ($this->form_validation->run()  != true) {
			$jenis['merk'] = ['Nike', 'Adidas', 'Kickers', 'Eiger', 'Bucherri'];
		{$this->load->view('v_input', $jenis);}

		} else{
			$data = [
			'nama' => $this-> input->post('nama'),
			'nhp' => $this-> input->post('nhp'),
			'merk' => $this-> input->post('merk'),
			'ukuran' => $this-> input->post('ukuran'),
			'harga' => $this->Model_sepatu->proses($this-> input->post('merk')),
			];


		$this->load->view('v_output', $data);

		}
	}
}		
?>