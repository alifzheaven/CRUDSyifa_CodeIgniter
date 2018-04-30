<?php
     class Tamu extends CI_Controller{
          function __construct(){
               parent:: __construct();
               $data = array();
          }

          function index(){
               $tamu = $this->db->get("bukutamu");

               $data["query"] = $tamu;
               $data["content"] = "pages/tamu_index";
               $this->load->view("template", $data);
          }

          function tambah(){
               $data["query"]= NULL;
               $data["content"]= "pages/tamu_form";
               $this->load->view("template", $data);
          }

           function hapus($id){
               $this->db->where(array('no_id' => $id))->delete('bukutamu');
               redirect ('tamu', 'refresh');


          function edit($id){
               $tamu = $this->db->get_where("bukutamu",array('no_id' => $id));

               $data["query"] = $tamu;
               $data["content"] = "pages/tamu_edit";
               $this->load->view("template", $data);
          }

          function update($id){
               $data = array              
                    (
                         'no' => $this->input->post('no_id'),
                         'nama' => $this->input->post('nama_tamu'),
                         'alamat' => $this->input->post('alamat_tamu'),
                         'kantor' => $this->input->post('kantor_tamu'),
                         'jabatan' => $this->input->post('jabatan_tamu')


                    );

               
               $this->db->where(array('bukutamu'=>$id))->update('no_id',$data);
               redirect ('tamu', 'refresh');

          }

          function simpan(){
               $data = array              
                    (
                         'no' => $this->input->post('no_id'),
                         'Nama' => $this->input->post('nama_tamu'),
                         'Alamat' => $this->input->post('alamat_tamu'),
                         'Kantor' => $this->input->post('kantor_tamu'),
                         'Jabatan' => $this->input->post('jabatan_tamu')
                    );
               $this->db->insert('bukutamu' , $data);
               redirect ('tamu', 'refresh');



          }
     }
}
?>
