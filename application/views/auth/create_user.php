<!-- <h1><?php echo lang('create_user_heading'); ?></h1>
<p><?php echo lang('create_user_subheading'); ?></p> -->

<!DOCTYPE html>
<html lang="en">

<head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Registrasi Akun</title>

      <!-- Custom fonts for this template-->
      <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

      <!-- Custom styles for this template-->
      <link href="<?= base_url('assets/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

      <div class="container">

            <div class="card o-hidden border-0 shadow-lg my-5">
                  <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                              <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                              <div class="col-lg-7">
                                    <div class="p-5">

                                          <div class="text-center">
                                                <?php if (!$this->input->get('group') == '3') { ?>
                                                      <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                                <?php } else { ?>
                                                      <h1 class="h4 text-gray-900 mb-4">Buat Pemilik</h1>
                                                <?php } ?>
                                          </div>

                                          <!-- Tampilkan Pesan Validasi -->
                                          <?php if (!empty($message)) : ?>
                                                <div class="alert alert-danger" role="alert">
                                                      <?= $message ?>
                                                </div>
                                          <?php endif; ?>

                                          <form class="user" method="POST" action="<?= base_url('auth/create_user') ?>" enctype="multipart/form-data">
                                                <div class="form-group row">
                                                      <div class="col-sm-6 mb-3 mb-sm-0">
                                                            <?php echo lang('create_user_fname_label', 'first_name'); ?> <br />
                                                            <?php echo form_input($first_name); ?>
                                                      </div>
                                                      <div class="col-sm-6 mb-3 mb-sm-0">
                                                            <?php echo lang('create_user_lname_label', 'last_name'); ?> <br />
                                                            <?php echo form_input($last_name); ?>
                                                      </div>
                                                </div>
                                                <?php
                                                if ($identity_column !== 'email') {
                                                      echo '<p>';
                                                      echo lang('create_user_identity_label', 'identity');
                                                      echo '<br />';
                                                      echo form_error('identity');
                                                      echo form_input($identity);
                                                      echo '</p>';
                                                }
                                                ?>

                                                <div class="form-group">
                                                      <?php echo lang('create_user_alamat_label', 'alamat'); ?> <br />
                                                      <?php echo form_input($alamat); ?>
                                                </div>

                                                <div class="form-group">
                                                      <?php echo lang('create_user_email_label', 'email'); ?> <br />
                                                      <?php echo form_input($email); ?>
                                                </div>

                                                <div class="form-group">
                                                      <?php echo lang('create_user_nowa_label', 'no_wa'); ?> <br />
                                                      <?php echo form_input($no_wa); ?>
                                                </div>

                                                <div class="form-group">
                                                      <label for="role">Daftar Sebagai</label>
                                                      <?php echo form_dropdown($role['name'], $role['options'], $role['selected'], 'class="form-control" id="role"'); ?>
                                                </div>

                                                <?php
                                                if ($this->ion_auth->is_admin()) :
                                                ?>
                                                      <?php if (!$this->input->get('group') == '3') { ?>
                                                            <div class="form-group">
                                                                  <label>Group:</label>
                                                                  <select name="group" class="form-control">
                                                                        <option disabled selected>Pilih Group</option>
                                                                        <?php foreach ($group_list as $group) : ?>
                                                                              <option value="<?= $group->id ?>"><?= $group->name ?></option>
                                                                        <?php endforeach ?>
                                                                  </select>
                                                            </div>
                                                      <?php } else { ?>
                                                            <?php  ?>
                                                            <div class="form-group">
                                                                  <label>Group:</label>
                                                                  <select name="group" class="form-control">
                                                                        <option value="3" selected>Pemilik</option>
                                                                  </select>
                                                      <?php } ?>
                                                <?php
                                                endif;
                                                ?>

                                                <div class="form-group">
                                                      <?php
                                                      $avatar['class'] = 'form-control';
                                                      echo lang('create_user_avatar_label', 'avatar');
                                                      ?>
                                                      <input type="file" class="form-control" name="userfile" id="avatar" size="20" required>
                                                </div>

                                                <div class="form-group row">
                                                      <div class="col-sm-6 mb-3 mb-sm-0">
                                                            <?php echo lang('create_user_password_label', 'password'); ?> <br />
                                                            <?php echo form_input($password); ?>
                                                      </div>

                                                      <div class="col-sm-6">
                                                            <?php echo lang('create_user_password_confirm_label', 'password_confirm'); ?> <br />
                                                            <?php echo form_input($password_confirm); ?>
                                                      </div>
                                                </div>
                                                <input type="submit" class="btn btn-primary btn-user btn-block" value="Register">

                                                <?php echo form_close(); ?>

                                                <?php if (!$this->ion_auth->logged_in()) { ?>
                                                      <hr>
                                                      <div class="text-center">
                                                            <a class="small" href="<?= base_url('auth/login') ?>">Already have an account? Login!</a>
                                                      </div>
                                                <?php } ?>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>

      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
      <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

      <!-- Core plugin JavaScript-->
      <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

      <!-- Custom scripts for all pages-->
      <script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>

</body>

</html>