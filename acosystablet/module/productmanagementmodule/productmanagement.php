<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Manajemen Produk</h1>
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
                                            <th colspan="6">UMUM</th>
                                            <th colspan="4">PEMBELIAN</th>
                                            <th colspan="7">LEVEL HARGA JUAL</th>
                                            <th colspan="6">HARGA JUAL BERDASARKAN JUMLAH</th>
                                            <th colspan="5">LAIN-LAIN</th>
                                        </tr>
                                        <tr>
                                            <th>DIVISI</th>
                                            <th>NAMA</th>
                                            <th>DEPARTEMEN</th>
                                            <th>NAMA</th>
                                            <th>PRODUK</th>
                                            <th>NAMA</th>

                                            <th>HARGA BELI</th>
                                            <th>DISKON</th>
                                            <th>PAJAK</th>
                                            <th>PEMBELIAN BERSIH</th>

                                            <th>HARGA JUAL 1</th>
                                            <th>HARGA JUAL 2</th>
                                            <th>HARGA JUAL 3</th>
                                            <th>HARGA JUAL 4</th>
                                            <th>HARGA JUAL 5</th>
                                            <th>HARGA JUAL 6</th>
                                            <th>HARGA JUAL 7</th>

                                            <th>MIN. QTY 1</th>
                                            <th>HARGA JUAL 1</th>
                                            <th>MIN. QTY 2</th>
                                            <th>HARGA JUAL 2</th>
                                            <th>MIN. QTY 3</th>
                                            <th>HARGA JUAL 3</th>

                                            <th>DISKON %</th>
                                            <th>MINIMUM</th>
                                            <th>MAXIMUM</th>
                                            <th>MIN. REORDER</th>
                                            <th>DEF. REORDER</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $queryproduct=mysqli_query($db,"SELECT 
                                            divisionid,
                                            division.description AS divisionname,
                                            departementid,
                                            departement.description AS departementname,
                                            productid,
                                            product.name AS productname,
                                            productmanagement.costprice,
                                            productmanagement.purchasedisc,
                                            productmanagement.purchasetax,
                                            productmanagement.netpurchase,
                                            productmanagement.salesprice1,
                                            productmanagement.salesprice2,
                                            productmanagement.salesprice3,
                                            productmanagement.salesprice4,
                                            productmanagement.salesprice5,
                                            productmanagement.salesprice6,
                                            productmanagement.salesprice7,
                                            productmanagement.salesdiscqty1,
                                            productmanagement.salesdiscprice1,
                                            productmanagement.salesdiscqty2,
                                            productmanagement.salesdiscprice2,
                                            productmanagement.salesdiscqty3,
                                            productmanagement.salesdiscprice3,
                                            productmanagement.salesdisc,
                                            productmanagement.minimum,
                                            productmanagement.maximum,
                                            productmanagement.minimumreorder,
                                            productmanagement.defaultreorder
                                            FROM productmanagement 
                                            LEFT JOIN division ON productmanagement.divisionid=division.id 
                                            LEFT JOIN departement ON productmanagement.departementid=departement.id
                                            LEFT JOIN product ON productmanagement.productid=product.id
                                            LIMIT 0,3");
                                            
                                            /*SCRIPT LAMA
                                            LEFT JOIN division ON productmanagement.divisionid=division.id
                                            LEFT JOIN departement ON productmanagement.departementid=departement.id*/
                                            /*LEFT JOIN product ON productmanagement.productid=product.id*/
      /*=====================LEFT JOIN KURANG UNTUK NAMA PRODUK, GAGAL TERUS=====================*/
                                            /*LIMIT 0, 3");*/
                                        while 
                                          ($dataproduct=mysqli_fetch_array($queryproduct)){
                                        ?>

                                        <tr class="odd gradeX">
                                            <td><?php echo $dataproduct['divisionid'];?></td>
                                            <td><?php echo $dataproduct['divisionname'];?></td>
                                            <td><?php echo $dataproduct['departementid'];?></td>
                                            <td><?php echo $dataproduct['departementname'];?></td>
                                            <td><?php echo $dataproduct['productid'];?></td>
                                            <td><?php echo $dataproduct['productname'];?></td>
                                            <td><?php echo $dataproduct['costprice']*196;?></td>
                                            <td><?php echo $dataproduct['purchasedisc'];?></td>
                                            <td><?php echo $dataproduct['purchasetax'];?></td>
                                            <td><?php echo $dataproduct['netpurchase']*213;?></td>
                                            <td><?php echo $dataproduct['salesprice1'];?></td>
                                            <td><?php echo $dataproduct['salesprice2'];?></td>
                                            <td><?php echo $dataproduct['salesprice3'];?></td>
                                            <td><?php echo $dataproduct['salesprice4'];?></td>
                                            <td><?php echo $dataproduct['salesprice5'];?></td>
                                            <td><?php echo $dataproduct['salesprice6'];?></td>
                                            <td><?php echo $dataproduct['salesprice7'];?></td>
                                            <td><?php echo $dataproduct['salesdiscqty1'];?></td>
                                            <td><?php echo $dataproduct['salesdiscprice1'];?></td>
                                            <td><?php echo $dataproduct['salesdiscqty2'];?></td>
                                            <td><?php echo $dataproduct['salesdiscprice2'];?></td>
                                            <td><?php echo $dataproduct['salesdiscqty3'];?></td>
                                            <td><?php echo $dataproduct['salesdiscprice3'];?></td>
                                            <td><?php echo $dataproduct['salesdisc'];?></td>
                                            <td><?php echo $dataproduct['minimum'];?></td>
                                            <td><?php echo $dataproduct['maximum'];?></td>
                                            <td><?php echo $dataproduct['minimumreorder'];?></td>
                                            <td><?php echo $dataproduct['defaultreorder'];?></td>
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