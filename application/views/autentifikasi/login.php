<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">

                                    <!-- Menambahkan Logo -->
                                    <img src="assets/img/profile/logo.png" alt="Logo" class="mb-4" style="max-width: 150px; max-height: 150px;">
                                    

                                    <h1 class="h4 text-gray-900 mb-4 font-weight-bold">Welcome to Pustaka Booking!</h1>
                                </div>
                                <?= $this->session->flashdata('pesan'); ?>
                                <form class="user" method="post" action="<?= base_url('autentifikasi'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" value="<?= set_value('email'); ?>" id="email" placeholder="Masukkan Alamat Email" name="email">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Masuk
                                    </button>
                                </form>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <a class="small" href="<?= base_url('autentifikasi/registrasi'); ?>">Daftar Member!</a>
                                    </div>
                                    <div>
                                        <a class="small" href="<?= base_url('autentifikasi/lupaPassword'); ?>">Lupa Password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center mt-1">
    <p class="text-white font-weight-bold" style="font-size: 16px;">Copyright @MohamadFaqih 2024.</p>
    </footer>


