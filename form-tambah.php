 <div class="row">
      <div class="col-md-12">
           <div class="page-header">
                <h4>
                     <i class="glyphicon glyphicon-edit"></i>
                     Input data barang
                </h4>
           </div> <!-- /.page-header -->

           <div class="panel panel-default">
                <div class="panel-body">
                     <form class="form-horizontal" method="POST" action="proses-simpan.php">

                          <div class="form-group">
                               <label class="col-sm-2 control-label">Nis</label>
                               <div class="col-sm-2">
                                    <input type="text" class="form-control" name="nis" maxlength="20" autocomplete="off"
                                         required>
                               </div>
                          </div>
                          <div class="form-group">
                               <label class="col-sm-2 control-label">PartNo</label>
                               <div class="col-sm-2">
                                    <input type="text" class="form-control" name="partno" maxlength="5"
                                         autocomplete="off" required>
                               </div>
                          </div>

                          <div class="form-group">
                               <label class="col-sm-2 control-label">Part Name</label>
                               <div class="col-sm-3">
                                    <input type="text" class="form-control" name="partname" autocomplete="off" required>
                               </div>
                          </div>

                          <div class="form-group">
                               <label class="col-sm-2 control-label">Qty</label>
                               <div class="col-sm-3">
                                    <input type="text" class="form-control" name="qty" autocomplete="off" required>
                               </div>
                          </div>

                          <div class="form-group">
                               <label class="col-sm-2 control-label">Box</label>
                               <div class="col-sm-3">
                                    <input type="text" class="form-control" name="box" autocomplete="off" required>
                               </div>
                          </div>

                          <!-- For Supp -->
                          <div class="form-group">
                               <label class="col-sm-2 control-label">Supp</label>
                               <div class="col-sm-4">
                                    <label class="radio-inline">
                                         <input type="radio" name="supp" value="masuk"> Masuk
                                    </label>

                                    <label class="radio-inline">
                                         <input type="radio" name="supp" value="keluar"> Keluar
                                    </label>
                               </div>
                          </div>

                          <!-- For Lp -->
                          <div class="form-group">
                               <label class="col-sm-2 control-label">Lp</label>
                               <div class="col-sm-4">
                                    <label class="radio-inline">
                                         <input type="radio" name="lp" value="laki-laki"> Laki - Laki
                                    </label>

                                    <label class="radio-inline">
                                         <input type="radio" name="lp" value="perempuan"> Perempuan
                                    </label>
                               </div>
                          </div>

                          <!-- For Iami -->
                          <div class="form-group">
                               <label class="col-sm-2 control-label">IAMI</label>
                               <div class="col-sm-4">
                                    <label class="radio-inline">
                                         <input type="radio" name="iami" value="masuk"> Masuk
                                    </label>

                                    <label class="radio-inline">
                                         <input type="radio" name="iami" value="keluar"> Keluar
                                    </label>
                               </div>
                          </div>


                          <div class="form-group">
                               <label class="col-sm-2 control-label">Qty Diterima </label>
                               <div class="col-sm-3">
                                    <textarea class="form-control" name="qtyditerima" rows="5" required></textarea>
                               </div>
                          </div>

                          <div class="form-group">
                               <label class="col-sm-2 control-label">Remarks </label>
                               <div class="col-sm-3">
                                    <textarea class="form-control" name="remarks" rows="5" required></textarea>
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