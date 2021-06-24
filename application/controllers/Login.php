<?php

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelUsers');
    }
    public function index()
    {

        if ($this->session->userdata('username') != null) {
            redirect(base_url('home'));
        }

        $data = array(
            "active_login" => "active",
            "title" => "Login"
        );
        $this->load->view('home/layout/header', $data);
        $this->load->view('login/login');
        $this->load->view('home/layout/footer');
    }
    public function login_process()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($username != null && $password != null) {
            $data = $this->ModelUsers->getDataByUsername($username);
            if ($data != null) {
                $db_password = $data['password'];
                if (password_verify($password, $db_password)) {
                    $db_role = $data['role'];
                    if ($db_role > 0) {

                        $this->session->set_userdata("username", $data['username']);
                        $this->session->set_userdata("email", $data['email']);
                        $this->session->set_userdata("id_user", $data['id_user']);
                        $this->session->set_userdata("admin", true);
                        redirect(base_url('dashboard'));
                    } else {
                        $this->session->set_userdata("username", $data['username']);
                        $this->session->set_userdata("email", $data['email']);
                        $this->session->set_userdata("id_user", $data['id_user']);
                        $this->session->set_userdata("admin", false);
                        redirect(base_url('home'));
                    }
                } else {
                    $this->session->set_flashdata("pesan", "Password Salah");
                    $this->session->set_flashdata("title", "Login Gagal!!");
                    $this->session->set_flashdata("type", "warning");
                    redirect(base_url());
                }
            } else {
                $this->session->set_flashdata("pesan", "Username atau Email tidak ditemukan");
                $this->session->set_flashdata("title", "Login Gagal !!");
                $this->session->set_flashdata("type", "warning");
                redirect(base_url());
            }
        } else {
            $this->session->set_flashdata("pesan", "Username dan Password Tidak Boleh Kosong");
            $this->session->set_flashdata("title", "Login Gagal !!");
            $this->session->set_flashdata("type", "warning");
            redirect(base_url());
        }
    }
    public function procces_register()
    {
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $password_confirmation = $this->input->post('password_confirmation');

        if ($username != null && $password != null && $password_confirmation != null && $email != null) {
            if ($password == $password_confirmation) {
                $cek_username = $this->ModelUsers->getRowData($username);
                if ($cek_username != null) {
                    $this->session->set_flashdata('type', 'error');
                    $this->session->set_flashdata('pesan', 'Mohon Maaf, Username sudah digunakan');
                    $this->session->set_flashdata('title', 'Daftar Akun Gagal!');
                    redirect(base_url('home'));
                }
                $cek_email = $this->ModelUsers->getRowDataByEmail($email);
                if ($cek_email != null) {
                    $this->session->set_flashdata('type', 'error');
                    $this->session->set_flashdata('pesan', 'Mohon Maaf, Email sudah digunakan');
                    $this->session->set_flashdata('title', 'Daftar Akun Gagal!');
                    redirect(base_url('home'));
                }
                $insertusers = [
                    'username' => $username,
                    'email'    => $email,
                    'password' => password_hash($password, PASSWORD_DEFAULT)
                ];
                $this->ModelUsers->insertUser($insertusers);
                $this->session->set_flashdata('type', 'success');
                $this->session->set_flashdata('pesan', 'Pendaftaran akun berhasil, Silahakan login');
                $this->session->set_flashdata('title', 'Daftar Akun Sukses!');
                redirect(base_url('home'));
            } else {
                $this->session->set_flashdata('type', 'warning');
                $this->session->set_flashdata('pesan', 'Password dengan Konfirmasi password tidak sama');
                $this->session->set_flashdata('title', 'Daftar Akun Gagal!');
                redirect(base_url('home'));
            }
        } else {
            $this->session->set_flashdata('type', 'warning');
            $this->session->set_flashdata('pesan', 'Mohon lengkapi data terlebih dahulu');
            $this->session->set_flashdata('title', 'Daftar Akun  Gagal!');
            redirect(base_url('home'));
        }
    }
    public function logout(){
        session_destroy();
        redirect(base_url('home'));
    }
}
