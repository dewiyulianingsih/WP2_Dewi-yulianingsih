<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- row ux-->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2 bg-primary">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah Anggota</div>
                            <div class="h1 mb-0 font-weight-bold text-white"><?= $this->ModelUser->getUserWhere(['role_id' => 1])->num_rows(); ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('user/anggota'); ?>"><i class="fas fa-users fa-3x text-warning"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add the remaining cards similarly -->
    </div>
    <!-- end row ux-->

    <!-- Divider -->
    <hr class="sidebar-divider">
    
    <!-- row table-->
    <div class="row">
        <!-- First table -->
        <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
            <div class="page-header">
                <span class="fas fa-users text-primary mt-2"> Data User</span>
                <a class="text-danger" href="<?php echo base_url('user/data_user'); ?>"><i class="fas fa-search mt-2 float-right"> Tampilkan</i></a>
            </div>
            <!-- Table content here -->
        </div>

        <!-- Second table -->
        <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
            <div class="page-header">
                <span class="fas fa-book text-warning mt-2"> Data Buku</span>
                <a href="<?= base_url('buku'); ?>"><i class="fas fa-search text-primary mt-2 float-right"> Tampilkan</i></a>
            </div>
            <!-- Table content here -->
        </div>
    </div>
    <!-- end of row table-->
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
