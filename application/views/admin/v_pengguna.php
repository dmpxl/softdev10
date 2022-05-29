     <div class="main-content">

     <style>
.header{
  background: #29CCFF;
}
.btn{
  background: #29CCFF;
  border-radius: 20px;
  border: #FFFFFF;
}
</style>

     <!-- Header -->
     <div class="header pt-5 pb-7">
       <div class="container">
         <div class="header-body text-center">
               <div class="pr-5">
                 <h1 class="display-2 font-weight-bold text-white"><?=$judul ?></h1>
                 <p class="mt-4 text-white display-5">
                  <span class="badge badge-pill badge-info badge-lg">Kerja Santai sampai Pagi, <?php echo ucfirst($title) ?> </span>
                </p>
           </div>
         </div>
       </div>
     </div>
        <div class="container-fluid mt--7">
          <?php echo $this->session->flashdata('msg');?>
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <div class="row">
                <div class="col-3">
                  <button data-toggle="modal" data-target="#modal_add_pengguna" class="btn btn-primary btn-block">Tambah Pengguna</button>
                </div>
              </div>
            </div>
            <div class="table-responsive py-4">
              <table id="basic-datatable" class="table nowrap table-striped">
                <thead class="thead-light">
                  <tr>
                  <th>No</th>
                  <th>Photo</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Kontak</th>
                  <th>Email</th>
                  <th>Tanggal Daftar</th>
                  <th>Password</th>
                  <th>Sebagai</th>
                  <th>Status</th>
                  <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>

                  <?php 
                  $no = 1;
              foreach ($tbl_pe->result_array() as $a) { ?>
                <tr>
                  <td><?=$no++ ?></td>
                  <td><img src="<?php echo base_url().'assets/gambar/'.$a['plg_photo'];?>" alt="Product Thumbnail" class="avatar"></td>
                  <td><?=$a['plg_nama'] ?></td>
                  <td><?=$a['plg_jenkel'] ?></td>
                  <td><?=$a['plg_notelp'] ?></td>
                  <td><?=$a['plg_email'] ?></td>
                  <td><?=$a['plg_register'] ?></td>
                  <td><?=$a['plg_password'] ?></td>
                  <td><?=$a['plg_level'] ?></td>
                  <td>
                    <?php if ($a['plg_status'] === '1'){ ?>
                      <button class="btn btn-primary btn-sm btn-block">Online</button>
                    <?php }else{ ?>
                      <button class="btn btn-danger btn-sm btn-block">Offline</button>
                    <?php } ?>
                  </td>
                  <td>
                     <div class="dropdown">
                        <a class="btn btn-primary btn-block btn-sm" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal_hapus_plg_<?php echo $a['plg_id'];?>"><i class="fas fa-trash"></i>Delete Pengguna</a>
                          <a href="#"  class="dropdown-item" data-toggle="modal" data-target="#modal_edit_plg_<?php echo $a['plg_id'];?>"><i class="fas fa-edit"></i>Update Pengguna</a>
                        </div>
                      </div>
                  </td>
                </tr>
              <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
<div class="modal fade" id="modal_add_pengguna" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-header bg-primary">
                              <div class="text-muted text-center text-white">Tambahkan Pengguna</div>
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                                <form action="<?php echo base_url().'saving'?>" method="post" role="form" enctype="multipart/form-data" >
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                          <div class="input-group input-group-merge input-group-alternative">
                                            <input class="form-control" placeholder="Nama lengkap" type="text" name="nama" autocomplete="off">
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                          <div class="input-group input-group-merge input-group-alternative">
                                            <input class="form-control" placeholder="Email" type="email" name="email" autocomplete="off">
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                          <div class="input-group input-group-merge input-group-alternative">
                                            <input class="form-control" placeholder="Password" type="password" name="pass" autocomplete="off">
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                         <div class="form-group mb-3">
                                          <div class="input-group input-group-merge input-group-alternative">
                                            <input class="form-control" placeholder="Re-password" type="password" name="pass2" autocomplete="off">
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                          <div class="input-group input-group-merge input-group-alternative">
                                            <select class="form-control" placeholder="Jenis Kelamin" type="password" name="jenkel" autocomplete="off">
                                                <option>Laki Laki</option>
                                                <option>Perempuan</option>
                                            </select> 
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                         <div class="form-group mb-3">
                                          <div class="input-group input-group-merge input-group-alternative">
                                            <input class="form-control" placeholder="Phone Number" type="text" name="kontak" autocomplete="off">
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                         <div class="form-group mb-3">
                                          <div class="input-group input-group-merge input-group-alternative ">
                                            <input class="form-control" placeholder="Photo Profile" type="file" name="filefoto" autocomplete="off">
                                          </div>
                                      </div>
                                    </div>
                                    </div>

                                    <div class="form-group mb-0 float-right">
                                        <button class="btn btn-primary" type="submit">Daftar </button>
                                    </div>
                                  </form>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

    <?php 
                foreach ($tbl_pe->result_array() as $a) {
                $id=$a['plg_id'];
                $nama=$a['plg_nama'];

              ?>
        <div class="modal fade" id="modal_hapus_plg_<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
          <form action="<?php echo base_url().'dell-plg'?>" method="post">
                    <div class="modal-dialog modal-danger modal-dialog-centered modal-sm" role="document">
                      <div class="modal-content bg-danger">
                        <div class="modal-header">
                          <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="py-3 text-center">
                            <i class="ni ni-bell-55 ni-3x"></i>
                            <h4 class="heading mt-4">Kamu Yakin Ingin Menghapus!</h4>
                <input type="hidden" name="kode" value="<?php echo $id;?>">
                <input type="hidden" name="nama" value="<?php echo $nama;?>">
                            <p>Data <?php echo $nama ?>.</p>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-white">Ok, Hapus</button>
                          <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                    </form>
                  </div>
                  <?php } ?>

       <?php foreach ($tbl_pe->result_array() as $a) {?>             
              <div class="modal fade" id="modal_edit_plg_<?php echo $a['plg_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-header bg-primary">
                              <div class="text-muted text-center text-white">Update</div>
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                                <form action="<?php echo base_url().'upd-plg'?>" method="post" role="form" enctype="multipart/form-data" >
                                <div class="row">
                                <input type="hidden" name="kode" value="<?php echo $a['plg_id']; ?>">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                          <div class="input-group input-group-merge input-group-alternative">
                                            <input class="form-control" placeholder="Nama lengkap" type="text" name="nama" autocomplete="off" value="<?php echo $a['plg_nama']; ?>">
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                          <div class="input-group input-group-merge input-group-alternative">
                                            <input class="form-control" placeholder="Email" type="email" name="email" autocomplete="off"  value="<?php echo $a['plg_email']; ?>">
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                          <div class="input-group input-group-merge input-group-alternative">
                                            <input class="form-control" placeholder="Password" type="password" name="pass" autocomplete="off">
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                         <div class="form-group mb-3">
                                          <div class="input-group input-group-merge input-group-alternative">
                                            <input class="form-control" placeholder="Re-password" type="password" name="pass2" autocomplete="off">
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                          <div class="input-group input-group-merge input-group-alternative">
                                            <select class="form-control" placeholder="Jenis Kelamin" name="jenkel" autocomplete="off">
                                              <?php if ($a['plg_jenkel'] == "Perempuan"){ ?>
                                                <option>Perempuan</option>
                                                <option>Laki Laki</option>
                                              <?php }else{ ?>
                                                <option>Laki Laki</option>
                                                <option>Perempuan</option>
                                              <?php } ?>
                                            </select> 
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                         <div class="form-group mb-3">
                                          <div class="input-group input-group-merge input-group-alternative">
                                            <input class="form-control" placeholder="Phone Number" type="text" name="kontak" autocomplete="off"  value="<?php echo $a['plg_notelp']; ?>">
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                         <div class="form-group mb-3">
                                          <div class="input-group input-group-merge input-group-alternative">
                                            <select class="form-control " name="level" autocomplete="off">
                                              <option>Admin</option>
                                              <option>Kasir</option>
                                            </select>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                         <div class="form-group mb-3">
                                          <div class="input-group input-group-merge input-group-alternative ">
                                            <input class="form-control" placeholder="Photo Profile" type="file" name="filefoto" autocomplete="off">
                                          </div>
                                      </div>
                                    </div>
                                    </div>

                                    <div class="form-group mb-0 float-right">
                                        <button class="btn btn-primary" type="submit">Update </button>
                                    </div>
                                  </form>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>