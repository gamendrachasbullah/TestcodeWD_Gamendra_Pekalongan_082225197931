<div class="col-md-20">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row" style="margin: 20px;">
                <?php
                    $is_login = $this->session->userdata('is_login');
                    $username = $this->session->userdata('username');
                ?>
                <?php if ($is_login): ?>
                <div class="row">
                    <div class="col-10">
                        <p>Halo, <strong><?= $username ?></strong>!</p>
                        <p>Selamat Bekerja</p>
                    </div>
                </div>
                <?php else: ?>
                <div class="row">
                    <div class="col-10-">
                        <p>Selamat Datang di toko</p>
                    </div>
                </div>

                <?php endif ?>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-databse fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?$numbarang ?></div>
                                    <div>Jumlah Barang</div>
                                </div>
                            </div>
                        </div>
                        <a href="\resto\barang">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-cricle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart 5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?= $maxid ?></div>
                                    <div>Total Penjualan</div>
                                </div>
                            </div>
                        </div>
                        <a href="\resto\penjualan">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-cricle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-hedaing">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-dollar fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?=$pemasukkan ?></div>
                                    <div>Total Penghasilan</div>
                                </div>
                            </div>
                        </div>
                        <a href="\resto\penjualan">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-cricle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-suitcase fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?=$jumlah ?></div>
                                    <div>Total Barang Terjual</div>
                                </div>
                            </div>
                        </div>
                        <a href="\resto\penjualan">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-cricle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>