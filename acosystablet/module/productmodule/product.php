<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Pencarian Produk</h1>
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
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example1">
                                    <thead>
                                        <!--<tr>
                                            <th colspan="7">UTAMA</th>
                                            <th colspan="4">PEMBELIAN TERAKHIR</th>
                                            <th colspan="7">HARGA JUAL PER LEVEL PELANGGAN</th>
                                            <th colspan="6">HARGA JUAL BERDASARKAN JUMLAH PRODUK</th>
                                            <th colspan="3">ATURAN-ATURAN</th>
                                            <th colspan="4">MANAJEMEN PERSEDIAAN</th>
                                            <th colspan="13">UMUM</th>
                                        </tr>-->
                                        <tr>
                                            <th>KODE BARANG</th>
                                            <!--<th>KODE ALIAS</th>-->
                                            <th>NAMA BARANG</th>
                                            <!--<th>KATEGORI</th>
                                            <th>SATUAN</th>
                                            <th>DEF. SATUAN</th>
                                            <th>AKTIF</th>

                                            <th>HARGA BELI</th>
                                            <th>DISKON BELI</th>
                                            <th>PAJAK BELI</th>
                                            <th>PEMBELIAN BERSIH</th>-->

                                            <th>HARGA JUAL 1</th>
                                            <!--<th>HARGA JUAL 2</th>
                                            <th>HARGA JUAL 3</th>
                                            <th>HARGA JUAL 4</th>
                                            <th>HARGA JUAL 5</th>-->
                                            <th>HARGA JUAL 6</th>
                                            <!--<th>HARGA JUAL 7</th>

                                            <th>MIN. QTY. 1</th>
                                            <th>HARGA QTY 1</th>
                                            <th>MIN. QTY. 2</th>
                                            <th>HARGA QTY 2</th>
                                            <th>MIN. QTY. 3</th>
                                            <th>HARGA QTY 3</th>

                                            <th>DISKON PENJUALAN</th>
                                            <th>HADIAH</th>
                                            <th>POIN</th>

                                            <th>MINIMUM</th>
                                            <th>MAXIMUM</th>
                                            <th>MIN. REORDER</th>
                                            <th>DEF. REORDER</th>

                                            <th>SUPPLIER</th>
                                            <th>PABRIK</th>
                                            <th>MERK</th>
                                            <th>PENGARANG</th>
                                            <th>JENIS PAJAK</th>
                                            <th>GRUP PRODUK</th>
                                            <th>DESKRIPSI</th>
                                            <th>LEBAR</th>
                                            <th>TINGGI</th>
                                            <th>PANJANG</th>
                                            <th>BERAT</th>
                                            <th>SERIAL NUMBER</th>
                                            <th>STOK</th>-->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        //$queryproduct=mysqli_query($db,"SELECT * FROM product");
                                        $hal=$_GET['hal'];
                                          if ($hal==""){$hal=1;}
                                          $querytotal=mysqli_query($db, "SELECT * FROM product");
                                          $totalbaris=mysqli_num_rows($querytotal);
                                          $perhalaman=10;
                                          $totalhalaman=ceil ($totalbaris/$perhalaman);
                                          //ceil=pembulatan keatas agar jumlah halaman tidak berkoma dan tidak berkurang jika menggunakan pembulatan kebawah
                                          $limit=($hal-1)*$perhalaman;
                                          $prev=$hal-1;
                                          if ($prev<1) {$prev=1;}
                                          $next = $hal+1;
                                          if ($next>$totalhalaman) {$next=$totalhalaman;}
                                          $queryproduct= mysqli_query ($db, "SELECT * FROM product LIMIT $limit, $perhalaman");
                                          $i=0;
                                        while 
                                          ($dataproduct=mysqli_fetch_array($queryproduct)){
                                            $i++;
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $dataproduct['id'];?><br><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal<?php echo $i;?>">
                                              detail
                                            </button></td>
                                            <td><?php echo $dataproduct['name'];?></td>
                                            <td align="right"><?php $salesprice1=$dataproduct['salesprice1'];
                                            echo number_format("$salesprice1")?></td>
                                            <td align="right"><?php $salesprice6=$dataproduct['salesprice6'];
                                            echo number_format("$salesprice6")?></td>

                                            <!--<td><?php /* echo $dataproduct['id'];?><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal<?php echo $i;?>">
                                              detail
                                            </button></td>
                                            <td><?php echo $dataproduct['aliasid'];?></td>
                                            <td><?php echo $dataproduct['name'];?></td>
                                            <td><?php echo $dataproduct['category'];?></td>
                                            <td><?php echo $dataproduct['groupunit'];?></td>
                                            <td><?php echo $dataproduct['defunit'];?></td>
                                            <td><?php echo $dataproduct['isactive'];?></td>
                                            <td align="right"><?php $costprice=$dataproduct['costprice']*321;
                                            echo number_format("$costprice");?></td>
                                            <td><?php echo $dataproduct['purchasedisc'];?></td>
                                            <td><?php echo $dataproduct['purchasetax'];?></td>
                                            <td align="right"><?php $netpurchase=$dataproduct['netpurchase']*154;
                                            echo number_format("$netpurchase");?></td>
                                            <td align="right"><?php $salesprice1=$dataproduct['salesprice1'];
                                            echo number_format("$salesprice1")?></td>
                                            <td align="right"><?php $salesprice2=$dataproduct['salesprice2'];
                                            echo number_format("$salesprice2")?></td>
                                            <td align="right"><?php $salesprice3=$dataproduct['salesprice3'];
                                            echo number_format("$salesprice3")?></td>
                                            <td align="right"><?php $salesprice4=$dataproduct['salesprice4'];
                                            echo number_format("$salesprice4")?></td>
                                            <td align="right"><?php $salesprice5=$dataproduct['salesprice5'];
                                            echo number_format("$salesprice5")?></td>
                                            <td align="right"><?php $salesprice6=$dataproduct['salesprice6'];
                                            echo number_format("$salesprice6")?></td>
                                            <td align="right"><?php $salesprice7=$dataproduct['salesprice7'];
                                            echo number_format("$salesprice7")?></td>
                                            <td align="right"><?php $salesdiscqty1=$dataproduct['salesdiscqty1'];
                                            echo number_format("$salesdiscqty1")?></td>
                                            <td align="right"><?php $salesdiscprice1=$dataproduct['salesdiscprice1'];
                                            echo number_format("$salesdiscprice1")?></td>
                                            <td align="right"><?php $salesdiscqty2=$dataproduct['salesdiscqty2'];
                                            echo number_format("$salesdiscqty2")?></td>
                                            <td align="right"><?php $salesdiscprice2=$dataproduct['salesdiscprice2'];
                                            echo number_format("$salesdiscprice2")?></td>
                                            <td align="right"><?php $salesdiscqty3=$dataproduct['salesdiscqty3'];
                                            echo number_format("$salesdiscqty3")?></td>
                                            <td align="right"><?php $salesdiscprice3=$dataproduct['salesdiscprice3'];
                                            echo number_format("$salesdiscprice3")?></td>
                                            <td><?php echo $dataproduct['salesdiscrules'];?></td>
                                            <td><?php echo $dataproduct['salesproductrewardrules'];?></td>
                                            <td><?php echo $dataproduct['salespointrewardrules'];?></td>
                                            <td><?php echo $dataproduct['minimum'];?></td>
                                            <td><?php echo $dataproduct['maximum'];?></td>
                                            <td><?php echo $dataproduct['minimumreorder'];?></td>
                                            <td><?php echo $dataproduct['defaultreorder'];?></td>
                                            <td><?php echo $dataproduct['supplier'];?></td>
                                            <td><?php echo $dataproduct['factory'];?></td>
                                            <td><?php echo $dataproduct['brand'];?></td>
                                            <td><?php echo $dataproduct['author'];?></td>
                                            <td><?php echo $dataproduct['taxtype'];?></td>
                                            <td><?php echo $dataproduct['productgroup'];?></td>
                                            <td><?php echo $dataproduct['description'];?></td>
                                            <td><?php echo $dataproduct['dwidth'];?></td>
                                            <td><?php echo $dataproduct['dheight'];?></td>
                                            <td><?php echo $dataproduct['dlength'];?></td>
                                            <td><?php echo $dataproduct['weight'];?></td>
                                            <td><?php echo $dataproduct['usesn'];?></td>
                                            <td><?php echo $dataproduct['usesn']; */ ?></td>-->
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                                <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="index.php?page=product&hal=<?php echo $prev; ?>">Previous</a></li>
                                        <?php for ($i=1; $i<= $totalhalaman; $i++) {?>
                                        <li class="paginate_button" aria-controls="dataTables-example" tabindex="0"><a href="index.php?page=product&hal=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                        <?php } ?>
                                        <li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="index.php?page=product&hal=<?php echo $next; ?>">Next</a></li>
                                    </ul>
                                </div>
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
$queryproduct=mysqli_query($db,"SELECT * FROM product LIMIT $limit, $perhalaman");
$i=0;
while 
  ($dataproduct=mysqli_fetch_array($queryproduct)){
    $i++;
    echo "AAAAA";
?>
        <!-- Modal -->
<div class="modal fade" id="myModal<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $dataproduct['name'];?></h4>
      </div>
      <div class="modal-body">
        <?php echo $dataproduct['name'];?><br/>
        <?php echo $dataproduct['productgroup'];?>
      </div>
      <div class="modal-footer">
        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php
    }
?>