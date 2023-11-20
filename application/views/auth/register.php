<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Register
                </div>
                <div class="card-body">
                    <form action="<?= base_url('auth/register')?>" method="POST">
                        <div class="form-group">
                        <label for="name">Name</label>
                            <input type="text" name="name" value = "<?= set_value('nama');?>" class="form-control" id="nama" placeholder="Name">
                            <?= form_error('nama','<small class = "text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                        <label for="email">Email</label>
                            <input type="text" name="email" value = "<?= set_value('email');?>" class="form-control" id="email" placeholder="Email Address">
                            <?= form_error('email','<small class = "text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="Pass">Password</label>
                            <input type="password" name="pass" value = "<?= set_value('pass');?>" class="form-control from-control-user" id="pass" placeholder="Password">
                            <?= form_error('pass','<small class = "text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="Pass">Retype Password</label>
                            <input type="password" name="pass2" value = "<?= set_value('pass2');?>" class="form-control from-control-user" id="pass" placeholder="Retype password">
                            <?= form_error('pass2','<small class = "text-danger pl-3">','</small>');?>
                        </div>
                        <br>
                        <div class="text-center">
                        <button type="submit" name="tambah" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                    <div class="text-center">
                        <a class="small" href="<?= base_url('auth/')?>">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
