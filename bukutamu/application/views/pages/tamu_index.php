<div class="card card-default" style="border-radius: 0px;margin: 20px 0;">
     <div class="card-header">Kelola Data Tamu</div>
     <div class="card-body">
          <?php
               
               echo anchor('tamu/tambah','Tambah Nama Tamu','class="btn btn-primary"
               style="margin:0 5px; margin-bottom: 15px;" ');
               echo anchor ('bukutamu/laporan','Cetak Laporan','class="btn btn-secondary" style="margin: 0 5px; margin-bottom: 15px;"');
               ?>
          <table class="table table-striped">
               <thead>
                    <tr>
                         <th scope="col">NO</th>
                         <th scope="col">NAMA</th>
                         <th scope="col">ALAMAT</th>
                         <th scope="col">KANTOR</th>
                         <th scope="col">JABATAN</th>
                    </tr>
               </thead>
               <tbody>
                    <?php
                         if ($query->num_rows() > 0) {
                              foreach ($query->result() as $row) {
                                   echo '
                                        <tr>
                                             <td>'.$row->no_id.'</td>
                                             <td>'.$row->nama_tamu.'</td>
                                             <td>'.$row->alamat_tamu.'</td>
                                             <td>'.$row->kantor_tamu.'</td>
                                             <td>'.$row->jabatan_tamu.'</td>
                                             <td>
                                             '.anchor('tamu/edit/'.$row->no_id, 'Edit', 'class="btn btn-xs btn-success"').'
                                             '.anchor('tamu/hapus/'.$row->no_id, 'Hapus', 'class="btn btn-xs btn-danger"').'
                                             </td>
                                        </tr>
                                   ';
                              }
                         }else{
                              echo '
                                   <tr>
                                        <td colspan="6" class="text-center">Data masih kosong !</td>
                                   </tr>
                              ';
                         }
                    ?>
               </tbody>
          </table>
     </div>
</div>