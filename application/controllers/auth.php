<?php
defined('BASEPATH') or exit('No direct script access allowed');
class auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', 'userrole');
    }
    function index()
    {
        if($this->session->userdata('email')){
            redirect('Mahasiswa');
        }
        $this->form_validation->set_rules('email','Email','trim|required|valid_email',[
            'valid_email' => 'Email harus Valid',
            'required' => 'Email Wajib di isi']);
        $this->form_validation->set_rules('pass','Password','trim|required',
            ['required' => 'Password Wajib di isi']);
        if($this->form_validation->run() == false){
            $this->load->view("layout/auth_header");
            $this->load->view("auth/login");
            $this->load->view("layout/auth_footer");
        } else {
            $this -> cek_login();
        }
    }
    function register()
    {
        if($this->session->userdata('email')){
            redirect('Mahasiswa');
        }
        $this->form_validation->set_rules('name','Nama','required|trim');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[user.email]',[
            'is_unique' => 'Email ini sudah terdaftar!',
            'valid_email' => 'Email harus Valid',
            'required' => 'Email Wajib di isi']);
        $this->form_validation->set_rules('pass','Password','required|trim|min_length[5]|matches[pass2]',[
            'matches' => 'Password tidak sama',
            'min_length' => 'Password Terlalu Pendek',
            'required' => 'Password Wajib di isi']);
        $this->form_validation->set_rules('pass2','Password','required|trim|min_length[5]|matches[pass]');
        if($this->form_validation->run() == false){
            $data['title'] = "Registration";
            $this->load->view("layout/auth_header",$data);
            $this->load->view("auth/register");
            $this->load->view("layout/auth_footer");
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT),
                'gambar' => 'default.jpg',
                'role' => "User",
                'date_created' => time()
            ];
            $this->userrole->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun terdaftar, Silahkan Login!</div>');
            redirect('auth');        
        }
    }
    public function cek_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('pass');
        $user = $this->db->get_where('user', ['email'=>$email])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'id' => $user['id'],
                ];
                $this->session->set_userdata($data);
                if ($user['role'] == 'Admin') {
                    redirect("Mahasiswa");
                } else {
                    redirect('profil');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Belum Tedaftar! </div>');
            redirect("auth");
        }
    }
    public function logout(){
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Log out Success</div>');
        redirect('auth');
    }
}
