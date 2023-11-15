<div class="row">
     <div class="col-md-12">
          <div class="page-header">
               <h4>
                    <i class="glyphicon glyphicon-edit"></i>
                    Ubah data barang
               </h4>
          </div> <!-- /.page-header -->
          <?php
    if (isset($_GET['id'])) {
      $nis   = $_GET['id'];
      $query = mysqli_query($db, "SELECT * FROM is_siswa WHERE nis='$nis'") or die('Query Error : ' . mysqli_error($db));
      while ($data  = mysqli_fetch_assoc($query)) {
        $nis           = $data['nis'];
        $partno          = $data['partno'];
        $partname  = $data['partname'];
        $qty  = $data['qty'];
        $box = $data['box'];
        $supp = $data['supp'];
        $lp         = $data['lp'];
        $iami         = $data['iami'];
        $qtyditerima        = $data['qtyditerima'];
        $remarks    = $data['remarks'];
      }
    }
    ?>
          <div class="panel panel-default">
               <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="proses-ubah.php">
                         <div class="form-group">
                              <label class="col-sm-2 control-label">Nis</label>
                              <div class="col-sm-2">
                                   <input type="text" class="form-control" name="nis" value="<?php echo $nis; ?>"
                                        readonly>
                              </div>
                         </div>

                         <div class="form-group">
                              <label class="col-sm-2 control-label">PartNo</label>
                              <div class="col-sm-3">
                                   <input type="text" class="form-control" name="partno" autocomplete="off"
                                        value="<?php echo $partno; ?>" required>
                              </div>
                         </div>
                         <div class="form-group">
                              <label class="col-sm-2 control-label">PartName</label>
                              <div class="col-sm-3">
                                   <input type="text" class="form-control" name="partname" autocomplete="off"
                                        value="<?php echo $partname; ?>" required>
                              </div>
                         </div>

                         <div class="form-group">
                              <label class="col-sm-2 control-label">Qty</label>
                              <div class="col-sm-3">
                                   <input type="text" class="form-control" name="qty" autocomplete="off"
                                        value="<?php echo $qty; ?>" required>
                              </div>
                         </div>

                         <div class="form-group">
                              <label class="col-sm-2 control-label">Box</label>
                              <div class="col-sm-3">
                                   <input type="text" class="form-control" name="box" autocomplete="off"
                                        value="<?php echo $box; ?>" required>
                              </div>
                         </div>


                         <!-- For the 'supp' field -->
                         <div class="form-group">
                              <label class="col-sm-2 control-label">supp</label>
                              <div class="col-sm-4">
                                   <label class="radio-inline">
                                        <input type="radio" name="supp" value="masuk"
                                             <?php echo ($supp == 'masuk') ? 'checked' : ''; ?>> Masuk
                                   </label>
                                   <label class="radio-inline">
                                        <input type="radio" name="supp" value="keluar"
                                             <?php echo ($supp == 'keluar') ? 'checked' : ''; ?>> Keluar
                                   </label>
                              </div>
                         </div>


                         <div class="form-group">
                              <label class="col-sm-2 control-label">lp</label>
                              <div class="col-sm-4">
                                   <label class="radio-inline">
                                        <input type="radio" name="lp" value="Laki-laki"
                                             <?php echo ($lp == 'Laki-laki') ? 'checked' : ''; ?>> Laki-laki
                                   </label>

                                   <label class="radio-inline">
                                        <input type="radio" name="lp" value="Perempuan"
                                             <?php echo ($lp == 'Perempuan') ? 'checked' : ''; ?>> Perempuan
                                   </label>
                              </div>
                         </div>

                         <!-- For the 'iami' field -->
                         <div class="form-group">
                              <label class="col-sm-2 control-label">IAMI</label>
                              <div class="col-sm-4">
                                   <label class="radio-inline">
                                        <input type="radio" name="iami" value="masuk"
                                             <?php echo ($iami == 'masuk') ? 'checked' : ''; ?>> Masuk
                                   </label>
                                   <label class="radio-inline">
                                        <input type="radio" name="iami" value="keluar"
                                             <?php echo ($iami == 'keluar') ? 'checked' : ''; ?>> Keluar
                                   </label>
                              </div>
                         </div>

                         <div class="form-group">
                              <label class="col-sm-2 control-label">QtyDiterima</label>
                              <div class="col-sm-3">
                                   <textarea class="form-control" name="qtyditerima" rows="3"
                                        required><?php echo $qtyditerima; ?></textarea>
                              </div>
                         </div>

                         <div class="form-group">
                              <label class="col-sm-2 control-label">Remarks</label>
                              <div class="col-sm-3">
                                   <textarea class="form-control" name="remarks" rows="3"
                                        required><?php echo $remarks; ?></textarea>
                              </div>
                         </div>



                         <hr />
                         <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                   <input type="submit" class="btn btn-info btn-submit" name="simpan" value="Simpan">
                                   <a href="index.php" class="btn btn-default btn-reset">Batal</a>
                              </div>
                         </div>
                    </form>
               </div> <!-- /.panel-body -->
          </div> <!-- /.panel -->
     </div> <!-- /.col -->
</div> <!-- /.row -->