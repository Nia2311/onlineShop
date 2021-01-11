<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php 
                    $grand_total = 0;
                    if($keranjang = $this->cart->contents()){
                        foreach($keranjang as $item){
                            $grand_total = $grand_total + $item['subtotal'];
                        }
                        
                        echo "<h4>Total Belanja Kamu : Rp. ".number_format($grand_total,0,',','.');
                ?>
            </div><br><br>
        </div>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>
                <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
                <br><br><br>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" placeholder="Nama Lengkap Kamu" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Alamat Lengkap</label>
                        <input type="text" name="alamat" placeholder="Alamat Lengkap Kamu" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="text" name="no_telp" placeholder="Nomor Telepon Kamu" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Jasa Pengiriman</label>
                        <select class="form-control">
                            <option>JNE</option>
                            <option>TIKI</option>
                            <option>Wahana</option>
                            <option>Si Cepat</option>
                            <option>Lion Parcel</option>
                            <option>Gojek</option>
                            <option>Grab</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Metode Pembayaran</label>
                        <select class="form-control">
                            <option>BNI</option>
                            <option>Mandiri</option>
                            <option>BCA</option>
                            <option>Go-Pay</option>
                            <option>Grab Pay</option>
                            <option>Indomaret</option>
                            <option>Alfamart</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
                </form>
                    <?php 
                    } else{
                        echo "<h4> Isi Keranjang Belanja Kamu, yuk!";
                    }
                    ?>
    </div>
        <div class="col-md-2"></div>
        </div>
</div>