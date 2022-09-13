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
                    <h4>Update Data Mahasiswa</h4>
                  </div>

                 
   
                  <?= form_open('mahasiswa/edit_save'); ?>
                  <input type="hidden" id="id_mhs" name="id_mhs" value="<?= $mahasiswa->id_mhs; ?>">
                  <div class="card-body">

                    <div class="form-group">
                      <label>Nama Mahasiswa</label>
                      <input type="text" class="form-control" id="nama" name="nama" value="<?=$mahasiswa->nama ?>">
                    </div>

                    <div class="form-group">
                      <label>NIM</label>
                      <input type="text" class="form-control" id="nim" name="nim" value="<?=$mahasiswa->nim ?>">
                    </div>

                    <div class="form-group">
                      <label>No.HP</label>
                      <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?=$mahasiswa->no_hp ?>">
                    </div>

                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" id="email" name="email" value="<?=$mahasiswa->email ?>">
                    </div>

                    <div class="form-group">
                      <label>Jurusan</label>
                      <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?=$mahasiswa->jurusan ?>">
                    </div>

                    <div class="form-group">
                      <label>Foto Profil</label>
                      <input type="file" class="form-control" id="foto_profil" name="foto_profil" size="20" value="<?=$mahasiswa->foto_profil ?>">
                    </div>

                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$mahasiswa->alamat ?>">
                    </div>

                    

                    </div>
                    <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            <?= form_close(); ?>

                  </div>
                </div>

           
              </div>
            </div>
          </div>
        </section>
      </div>
