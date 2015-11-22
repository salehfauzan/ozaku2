<div id="page-wrapper"> a
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Daftar Konsumen</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <!--<tr>
                                            <th colspan="3">IDENTITAS</th>
                                            <th colspan="17">UMUM</th>
                                            <th colspan="4">ATURAN</th>
                                            <th colspan="5">AKUN POSTING</th>
                                            <th colspan="7">LAIN-LAIN</th>
                                        </tr>-->
                                        <tr>
                                            <th>KODE</th>
                                            <th>NAMA</th>
                                            <th>ALAMAT</th>

                                            <th>LEVEL HARGA</th>
                                            <th>DIKIRIM KE</th>
                                            <th>TIPE</th>
                                            <th>PERSONAL KONTAK</th>
                                            <th>TELEPON</th>
                                            <th>FAKSIMILI</th>
                                            <th>TELEPON SELULAR</th>
                                            <th>EMAIL</th>
                                            <th>WEBSITE</th>
                                            <th>NEGARA</th>
                                            <th>NPWP</th>
                                            <th>TANGGAL PENGUKUHAN PK</th>
                                            <th>KENA PAJAK</th>
                                            <th>TOP STRING</th>
                                            <th>LIMIT KREDIT</th>
                                            <th>DEFAULT SALESMAN</th>
                                            <th>AKTIF</th>

                                            <th>DISKON PENJUALAN</th>
                                            <th>HADIAH</th>
                                            <th>POIN</th>
                                            <th>DISKON PEMBAYARAN</th>

                                            <th>PIUTANG</th>
                                            <th>BEBAN HADIAH</th>
                                            <th>UANG MUKA</th>
                                            <th>DISKON PENJUALAN</th>
                                            <th>L/R PENGHAPUSAN PIUTANG</th>

                                            <th>TANGGAL LAHIR</th>
                                            <th>JENIS KELAMIN</th>
                                            <th>AGAMA</th>
                                            <th>GRUP</th>
                                            <th>TANGGAL DAFTAR</th>
                                            <th>AKTIF SAMPAI</th>
                                            <th>GAMBAR</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $queryproduct=mysqli_query($db,"SELECT * FROM customer LIMIT 0, 3");
                                        $i=0;
                                        while 
                                          ($dataproduct=mysqli_fetch_array($queryproduct)){
                                            $i++;
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $dataproduct['id'];?><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal<?php echo $i;?>">
  ?
</button></td>
                                            <td><?php echo $dataproduct['name'];?></td>
                                            <td><?php echo $dataproduct['address'];?></td>
                                            <td><?php echo $dataproduct['pricelevel'];?></td>
                                            <td><?php echo $dataproduct['shipto'];?></td>
                                            <td><?php echo $dataproduct['category'];?></td>
                                            <td><?php echo $dataproduct['contactperson'];?></td>
                                            <td><?php echo $dataproduct['telephone'];?></td>
                                            <td><?php echo $dataproduct['faximile'];?></td>
                                            <td><?php echo $dataproduct['mobilephone'];?></td>
                                            <td><?php echo $dataproduct['email'];?></td>
                                            <td><?php echo $dataproduct['website'];?></td>
                                            <td><?php echo $dataproduct['country'];?></td>
                                            <td><?php echo $dataproduct['taxid'];?></td>
                                            <td><?php echo $dataproduct['taxiddate'];?></td>
                                            <td><?php echo $dataproduct['taxable'];?></td>
                                            <td><?php echo $dataproduct['termofpayment'];?></td>
                                            <td><?php echo $dataproduct['creditlimit'];?></td>
                                            <td><?php echo $dataproduct['defsalesmanid'];?></td>
                                            <td><?php echo $dataproduct['isactive'];?></td>
                                            <td><?php echo $dataproduct['salesdiscrules'];?></td>
                                            <td><?php echo $dataproduct['salesproductrewardrules'];?></td>
                                            <td><?php echo $dataproduct['salespointrewardrules'];?></td>
                                            <td><?php echo $dataproduct['paymentdiscrules'];?></td>
                                            <td><?php echo $dataproduct['receivableacc'];?></td>
                                            <td><?php echo $dataproduct['rewardacc'];?></td>
                                            <td><?php echo $dataproduct['downpaymentacc'];?></td>
                                            <td><?php echo $dataproduct['salesdiscacc'];?></td>
                                            <td><?php echo $dataproduct['gainlossreceivableacc'];?></td>
                                            <td><?php echo $dataproduct['birthdate'];?></td>
                                            <td><?php echo $dataproduct['sex'];?></td>
                                            <td><?php echo $dataproduct['religion'];?></td>
                                            <td><?php echo $dataproduct['customergroup'];?></td>
                                            <td><?php echo $dataproduct['registerdate'];?></td>
                                            <td><?php echo $dataproduct['activeuntil'];?></td>
                                            <td><?php echo $dataproduct['image'];?></td>
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>DataTables Usage Information</h4>
                                <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
<?php
$queryproduct=mysqli_query($db,"SELECT * FROM customer LIMIT 0, 3");
$i=0;
while 
  ($dataproduct=mysqli_fetch_array($queryproduct)){
    $i++;
?>
        <!-- Modal -->
<div class="modal fade" id="myModal<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $dataproduct['nama'];?></h4>
      </div>
      <div class="modal-body">
        <?php echo $dataproduct['shipto'];?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php
    }
?>
