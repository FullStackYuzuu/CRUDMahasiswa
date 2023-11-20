<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Login
                </div>
                <?= $this->session->flashdata('message');?>
                <div class="card-body">
                    <form action="<?= base_url('auth') ?>" method="POST">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control form-control-user" value="<?= set_value('email');?>" id="email" placeholder="Email Address">
                            <?= form_error('email','<small class = "text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="Pass">Password</label>
                            <input type="password" name="pass" class="form-control form-control-user" value="<?= set_value('pass');?>" id="pass" placeholder="Password">
                            <?= form_error('pass','<small class = "text-danger pl-3">','</small>');?>
                        </div>
                        <br>
                        <div class="text-center">
                            <button type="submit" name="tambah" class="btn btn-primary float-center">Login</button>
                        </div>
                    </form>
                    <div class="text-center">
                        <a class="small" href="">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="<?= base_url('auth/register')?>">Buat Akun!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>