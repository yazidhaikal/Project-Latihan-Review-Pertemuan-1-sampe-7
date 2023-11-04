<?php
class datasiswa extends CI_Controller
{

    public function index()
    {
        $this->load->view('view-form-siswa'); 
    }
    public function cetak()
    {
            $data = [
                'nis' => $this->input->post('nis'),
                'nama' => $this->input->post('nama'),
                'kelas' => $this->input->post('kelas'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'alamat' => $this->input->post('alamat'),
                'jk' => $this->input->post('jk'),
                'Agama' => $this->input->post('Agama'),
            ];

            $this->load->view('view-data-siswa', $data);
        }
     }

    