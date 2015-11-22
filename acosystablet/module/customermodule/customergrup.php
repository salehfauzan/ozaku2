<div id="page-wrapper"> fff
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
                                <tr>
                                    <th colspan="3">UMUM</th>
                                    <th colspan="5">ATURAN</th>
                                    <th colspan="5">AKUN POSTING</th>
                                </tr>
                                <tr>
                                    <th>KODE</th>
                                    <th>DESKRIPSI</th>
                                    <th>SUB DARI</th>

                                    <th>GRUP</th>
                                    <th>DISKON PENJUALAN</th>
                                    <th>HADIAH</th>
                                    <th>POIN</th>
                                    <th>DISKON PEMBAYARAN</th>

                                    <th>PIUTANG</th>
                                    <th>BEBAN HADIAH</th>
                                    <th>UANG MUKA</th>
                                    <th>DISKON PENJUALAN</th>
                                    <th>L/R PENGHAPUSAN PIUTANG</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $queryproduct=mysqli_query($db,"SELECT * FROM customergroup LIMIT 0, 20");
                                while 
                                  ($dataproduct=mysqli_fetch_array($queryproduct)){
                                ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $dataproduct['id'];?></td>
                                    <td><?php echo $dataproduct['description'];?></td>
                                    <td><?php echo $dataproduct['parent'];?></td>
                                    <td><?php echo $dataproduct['isgroup'];?></td>
                                    <td><?php echo $dataproduct['salesdiscrules'];?></td>
                                    <td><?php echo $dataproduct['salesproductrewardrules'];?></td>
                                    <td><?php echo $dataproduct['salespointrewardrules'];?></td>
                                    <td><?php echo $dataproduct['paymentdiscrules'];?></td>
                                    <td><?php echo $dataproduct['receivableacc'];?></td>
                                    <td><?php echo $dataproduct['rewardacc'];?></td>
                                    <td><?php echo $dataproduct['downpaymentacc'];?></td>
                                    <td><?php echo $dataproduct['salesdiscacc'];?></td>
                                    <td><?php echo $dataproduct['gainlossreceivableacc']; ?></td>
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