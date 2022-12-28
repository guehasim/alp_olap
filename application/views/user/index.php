

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left:0px;">
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">            
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">DATA USER</h5>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              
              <div class="card-body">
                <div class="col-md-2">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default"><li class="fa fa-plus"></li> Tambah</button>
                </div>
                <div class="col-md-2">
                </div>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama</th>
                      <th>Username</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($user->result() as $ad): ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $ad->NamaUser;?></td>
                      <td><?php echo $ad->Username;?></td>
                      <td>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#akses-info-<?php echo $ad->ID_User;?>"><li class="fa fa-list"></li> Akses Menu</button>
                        <button type="button" class="btn btn-warning btn-sm" style="color:white;" data-toggle="modal" data-target="#ganti-info-<?php echo $ad->ID_User;?>"><li class="fas fa-lock"></li> Ganti Password</button>
                        <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#ubah-info-<?php echo $ad->ID_User;?>"><li class="fas fa-pencil-alt"></li> Edit</button>
                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus-info-<?php echo $ad->ID_User;?>"><li class="fas fa-trash"></li> Hapus</button>
                      </td>
                    </tr>

                    <!-- modal akses menu -->
                    <div class="modal fade" id="akses-info-<?php echo $ad->ID_User;?>">
                      <div class="modal-dialog">
                        <form action="<?php echo base_url() ?>User/simpan_akses" method="post">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color:#007bff;color:white;">
                            <h4 class="modal-title">Akses Menu</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">

                            <?php
                            $query = $this->db->query("SELECT AksesMenu FROM m_akses WHERE id_user = '$ad->ID_User' ");
                             ?>

                             <input type="hidden" name="id" value="<?php echo $ad->ID_User;?>">

                            <div class="form-group row">
                              <label for="inputEmail3" class="col-sm-3 col-form-label"></label>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pilih_menu[]" value="dashboard" 
                                <?php foreach ($query->result() as $as): ?>
                                  <?php if ($as->AksesMenu == 'dashboard'): ?>
                                    <?php echo "Checked";?>
                                  <?php else: ?>
                                    
                                  <?php endif ?>
                                <?php endforeach ?>>
                                <label class="form-check-label">Dashboard</label>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="inputEmail3" class="col-sm-3 col-form-label"> </label>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pilih_menu[]" value="user"
                                <?php foreach ($query->result() as $as): ?>
                                  <?php if ($as->AksesMenu == 'user'): ?>
                                    <?php echo "Checked";?>
                                  <?php else: ?>
                                    
                                  <?php endif ?>
                                <?php endforeach ?>>
                                <label class="form-check-label">User</label>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="inputEmail3" class="col-sm-3 col-form-label"> </label>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pilih_menu[]" value="order entry"
                                <?php foreach ($query->result() as $as): ?>
                                  <?php if ($as->AksesMenu == 'order entry'): ?>
                                    <?php echo "Checked";?>
                                  <?php else: ?>
                                    
                                  <?php endif ?>
                                <?php endforeach ?>>
                                <label class="form-check-label">Order Entry</label>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="inputEmail3" class="col-sm-3 col-form-label"> </label>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pilih_menu[]" value="purchase order"
                                <?php foreach ($query->result() as $as): ?>
                                  <?php if ($as->AksesMenu == 'purchase order'): ?>
                                    <?php echo "Checked";?>
                                  <?php else: ?>
                                    
                                  <?php endif ?>
                                <?php endforeach ?>>
                                <label class="form-check-label">Purchase Order</label>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="inputEmail3" class="col-sm-3 col-form-label"> </label>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pilih_menu[]" value="inventory control"
                                <?php foreach ($query->result() as $as): ?>
                                  <?php if ($as->AksesMenu == 'inventory control'): ?>
                                    <?php echo "Checked";?>
                                  <?php else: ?>
                                    
                                  <?php endif ?>
                                <?php endforeach ?>>
                                <label class="form-check-label">Inventory Control</label>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="inputEmail3" class="col-sm-3 col-form-label"> </label>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pilih_menu[]" value="manufacturing"
                                <?php foreach ($query->result() as $as): ?>
                                  <?php if ($as->AksesMenu == 'manufacturing'): ?>
                                    <?php echo "Checked";?>
                                  <?php else: ?>
                                    
                                  <?php endif ?>
                                <?php endforeach ?>>
                                <label class="form-check-label">Manufacturing</label>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="inputEmail3" class="col-sm-3 col-form-label"> </label>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pilih_menu[]" value="blending"
                                <?php foreach ($query->result() as $as): ?>
                                  <?php if ($as->AksesMenu == 'blending'): ?>
                                    <?php echo "Checked";?>
                                  <?php else: ?>
                                    
                                  <?php endif ?>
                                <?php endforeach ?>>
                                <label class="form-check-label">Blending</label>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="inputEmail3" class="col-sm-3 col-form-label"> </label>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pilih_menu[]" value="refinery"
                                <?php foreach ($query->result() as $as): ?>
                                  <?php if ($as->AksesMenu == 'refinery'): ?>
                                    <?php echo "Checked";?>
                                  <?php else: ?>
                                    
                                  <?php endif ?>
                                <?php endforeach ?>>
                                <label class="form-check-label">Refinery</label>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="inputEmail3" class="col-sm-3 col-form-label"> </label>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pilih_menu[]" value="maintenance"
                                <?php foreach ($query->result() as $as): ?>
                                  <?php if ($as->AksesMenu == 'maintenance'): ?>
                                    <?php echo "Checked";?>
                                  <?php else: ?>
                                    
                                  <?php endif ?>
                                <?php endforeach ?>>
                                <label class="form-check-label">Maintenance</label>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="inputEmail3" class="col-sm-3 col-form-label"> </label>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pilih_menu[]" value="accounting"
                                <?php foreach ($query->result() as $as): ?>
                                  <?php if ($as->AksesMenu == 'accounting'): ?>
                                    <?php echo "Checked";?>
                                  <?php else: ?>
                                    
                                  <?php endif ?>
                                <?php endforeach ?>>
                                <label class="form-check-label">Accounting</label>
                              </div>
                            </div>

                          </div>
                          <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </div>
                        </form>
                      </div>
                    </div>

                    <!-- modal ganti password -->
                    <div class="modal fade" id="ganti-info-<?php echo $ad->ID_User;?>">
                      <div class="modal-dialog">
                        <form action="<?php echo base_url() ?>User/update_password" method="post">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color:#ffc107;color:#000000;">
                            <h4 class="modal-title">Ganti Password</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">

                            <input type="text" name="id" value="<?php echo $ad->ID_User;?>" hidden>

                            <div class="form-group row">
                              <label for="inputEmail3" class="col-sm-3 col-form-label">Password <span>*</span></label>
                              <div class="col-sm-9">
                                <input type="password" name="pass" class="form-control" autocomplete="off" required>
                              </div>
                            </div>

                          </div>
                          <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-warning">Simpan</button>
                          </div>
                        </div>
                        </form>
                      </div>
                    </div>

                    <!-- modal ubah -->
                    <div class="modal fade" id="ubah-info-<?php echo $ad->ID_User;?>">
                      <div class="modal-dialog">
                        <form action="<?php echo base_url() ?>User/update" method="post">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color:#17a2b8;color:#FFFFFF;">
                            <h4 class="modal-title">Edit User</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">

                            <div class="form-group row">
                              <label for="inputEmail3" class="col-sm-3 col-form-label">Nama <span>*</span></label>
                              <div class="col-sm-9">
                                <input type="text" name="nama" value="<?php echo $ad->NamaUser;?>" class="form-control" autocomplete="off" required>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="inputEmail3" class="col-sm-3 col-form-label">Username <span>*</span></label>
                              <div class="col-sm-9">
                                <input type="text" name="user" value="<?php echo $ad->Username;?>" class="form-control" autocomplete="off" required>
                              </div>
                            </div>

                            <input type="text" name="id" value="<?php echo $ad->ID_User;?>" hidden>

                          </div>
                          <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info">Simpan</button>
                          </div>
                        </div>
                        </form>
                      </div>
                    </div>

                    <!-- modal hapus -->
                    <div class="modal fade" id="hapus-info-<?php echo $ad->ID_User;?>">
                      <div class="modal-dialog">
                        <form action="<?php echo base_url() ?>User/hapus" method="post">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color:#dc3545;color:#FFFFFF;">
                            <h4 class="modal-title">Hapus</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">

                            <input type="text" name="id" value="<?php echo $ad->ID_User;?>" hidden>

                            <p>Apakah mau menghapus data user dengan nama <b><?php echo $ad->NamaUser;?></b> ini ?</p>

                          </div>
                          <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                          </div>
                        </div>
                        </form>
                      </div>
                    </div>
                    <?php endforeach ?>
                    </tbody>
                  </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- modal tambah -->

  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <form action="<?php echo base_url() ?>User/simpan" method="post">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#28a745;color:#FFFFFF;">
          <h4 class="modal-title">Tambah User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Nama <span>*</span></label>
            <div class="col-sm-9">
              <input type="text" name="nama" class="form-control" autocomplete="off" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Username <span>*</span></label>
            <div class="col-sm-9">
              <input type="text" name="user" class="form-control" autocomplete="off" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Password <span>*</span></label>
            <div class="col-sm-9">
              <input type="password" name="pass" class="form-control" autocomplete="off" required>
            </div>
          </div>

        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </div>
      </form>
    </div>
  </div>
  <!-- /.modal -->
    
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?php echo base_url() ?>assets/content2/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?php echo base_url() ?>assets/content2/plugins/raphael/raphael.min.js"></script>
<script src="<?php echo base_url() ?>assets/content2/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo base_url() ?>assets/content2/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url() ?>assets/content2/plugins/chart.js/Chart.min.js"></script>

<!-- Toastr -->
<script src="<?php echo base_url() ?>assets/content2/plugins/toastr/toastr.min.js"></script>

<!-- Select2 -->
<script src="<?php echo base_url() ?>assets/content2/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo base_url() ?>assets/content2/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url() ?>assets/content2/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/content2/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url() ?>assets/content2/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url() ?>assets/content2/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/content2/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- BS-Stepper -->
<script src="<?php echo base_url() ?>assets/content2/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="<?php echo base_url() ?>assets/content2/plugins/dropzone/min/dropzone.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="<?php echo base_url() ?>assets/content2/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/content2/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/content2/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/content2/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/content2/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets/content2/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/content2/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url() ?>assets/content2/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>assets/content2/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url() ?>assets/content2/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets/content2/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>assets/content2/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>

<script>
  function setDatePicker(input){
  $(input).datetimepicker({
    format: "DD-MM-YYYY",
    useCurrent: false
  })
}

function setDateRangePicker(input1, input2){
  $(input1).datetimepicker({
    format: "DD-MM-YYYY",
    useCurrent: false
  })

  $(input1).on("change.datetimepicker", function (e) {
    $(input2).val("")
        $(input2).datetimepicker('minDate', e.date);
    })

  $(input2).datetimepicker({
    format: "DD-MM-YYYY",
    useCurrent: false
  })
}

function setMonthPicker(input){
  $(input).datetimepicker({
    format: "MM",
    useCurrent: false,
    viewMode: "months"
  })
}

function setYearPicker(input){
  $(input).datetimepicker({
    format: "YYYY",
    useCurrent: false,
    viewMode: "years"
  })
}

function setYearRangePicker(input1, input2){
  $(input1).datetimepicker({
    format: "YYYY",
    useCurrent: false,
    viewMode: "years"
  })

  $(input1).on("change.datetimepicker", function (e) {
    $(input2).val("")
        $(input2).datetimepicker('minDate', e.date);
    })

  $(input2).datetimepicker({
    format: "YYYY",
    useCurrent: false,
    viewMode: "years"
  })
}
</script>

<script>
    $(document).ready(function(){
        setDatePicker("#datepicker")
        setDateRangePicker("#startdate", "#enddate")
        setDateRangePicker("#startdate2", "#enddate2")
        setMonthPicker("#monthpicker")
        setYearPicker("#yearpicker")
        setYearPicker("#yearpicker2")
        setYearRangePicker("#startyear", "#endyear")
    })
</script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, 
      "lengthChange": false, 
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

<script type="text/javascript">
  <?php if($this->session->flashdata('success')){ ?>
      toastr.success("<?php echo $this->session->flashdata('success'); ?>");
  <?php }else if($this->session->flashdata('error')){  ?>
      toastr.error("<?php echo $this->session->flashdata('error'); ?>");
  <?php }else if($this->session->flashdata('warning')){  ?>
      toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
  <?php }else if($this->session->flashdata('info')){  ?>
      toastr.info("<?php echo $this->session->flashdata('info'); ?>");
  <?php } ?>
</script>

 </body>
 </html>