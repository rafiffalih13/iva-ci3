<?php
class C_dokter extends CI_Controller
{
    public function index($page = 'Input Jadwal')
    {
        $data['title'] = ucfirst($page);

        $this->load->view('templates/header', $data);
        $this->load->view('pages/inputjadwal', $data);
        $this->load->view('templates/footer');
    }

    public function loginview($page = 'login')
    {
        $data['title'] = ucfirst($page);

        $this->load->view('templates/header', $data);
        $this->load->view('pages/login');
        $this->load->view('templates/footer');
    }

    public function login()
    {
        $data['title'] = "Log In";

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            redirect('c_dokter/loginview');
        } else {
            // Get username
            $username = $this->input->post('username');

            // Get password
            $password = $this->input->post('password');

            // Klo mau get dan encrypt password pake code di bawah ini, dan yg di atas dimatiin.
            // $password = md5($this->input->post('password'));

            // Login User
            $user_id = $this->m_dokter->login($username, $password);

            if ($user_id) {
                // Create Session
                $user_data = array(
                    'user_id' => $user_id,
                    'username' => $username,
                    'logged_in' => true
                );

                $this->session->set_userdata($user_data);
                // Set message
                $this->session->set_flashdata('user_loggedin', 'You are now logged in');


                redirect('c_dokter');
            } else {
                // Set message
                $this->session->set_flashdata('login_failed', 'Login is invalid');

                redirect('c_dokter/loginview');
            }
        }
    }
    public function logout()
    {
        // Unset user data untuk mengakhiri session
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');

        redirect('c_home');
    }
}
