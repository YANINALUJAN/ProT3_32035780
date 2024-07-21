<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-5">
            <?php if(session()->getFlashdata("msg")):?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata("msg")?>
                </div>
            <?php endif;?>
            <br><br>
            <a href="<?= base_url('logout'); ?>"> Logout</a>
            <?php if(session()->perfil_id == 1): ?>
                <div>
                    <img class="center" height="50px" width="50px" src="<?php echo base_url('assets/img/imagenPrueba.jpg');?>">
                </div>
            <?php elseif(session()->perfil_id == 2): ?>
                <div>
                    <img class="center" height="50px" width="50px" src="<?php echo base_url('assets/img/imagenPrueba.jpg');?>">
                </div>
            <?php endif;?>
        </div>
    </div>
</div>