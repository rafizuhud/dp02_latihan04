<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
    
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>List Mahasiswa</h4>
                  </div>
                  <div class="card-body">
                    <a href="mahasiswa/add" class='btn btn-primary'>Tambah Data</a>  
                  </div>

                 
   
                  
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1"> 
                        <thead>                                 
                          <tr>
                        
                              
                            </th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>No.HP</th>
                            <th>Email</th>
                            <th>Jurusan</th>
                            <th>Foto Profil</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                            
  
                          </tr>
                        </thead>
                        <tbody>  
                            <?php foreach ($mahasiswa as $row):?>
                                <tr>
                                    <td><?= $row->nama; ?></td>
                                    <td><?= $row->nim; ?></td>
                                    <td><?= $row->no_hp; ?></td>
                                    <td><?= $row->email; ?></td>
                                    <td><?= $row->jurusan; ?></td>
                                    <td><?= "<img src='./assets/upload/".$row->foto_profil."'style='width:100px; height: 100px; width: 100px;'>" ?></td>
                                    <td><?= $row->alamat; ?></td>
                                    <td>
                                        <a href="mahasiswa/edit/<?= $row->id_mhs; ?>" class="btn btn-warning">edit</a>
                                        <a href="mahasiswa/hapus/<?= $row->id_mhs;?>" class="btn btn-danger">hapus</a>
                                    </td>
                                    
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                            </table>                                   

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </section>
        <?php $this->load->view('dist/_partials/footer'); ?>
      </div>
