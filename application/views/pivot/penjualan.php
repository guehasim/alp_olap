

  <script type="text/javascript">
                  $(function(){

                      var derivers = $.pivotUtilities.derivers;
                      var renderers = $.extend($.pivotUtilities.renderers,
                          $.pivotUtilities.c3_renderers);
                      <?php $id = $this->session->userdata('ses_IdUser');?>
                      $.getJSON("<?php echo base_url("assets/upload/data_penjualan_".$id.".json") ?>", function(mps) {
                          $("#output").pivotUI(mps, {
                              renderers: renderers,
                              cols: ["Party"], rows: ["Province"],
                              rendererName: "Table",
                              rowOrder: "value_z_to_a", colOrder: "value_z_to_a",
                              rendererOptions: {
                                  c3: { data: {colors: {
                                      Liberal: '#dc3912', Conservative: '#3366cc', NDP: '#ff9900',
                                      Green:'#109618', 'Bloc Quebecois': '#990099'
                                  }}}
                              }
                          });
                      });
                   });
                </script>
  <style type="text/css">
    pre{
      display: none;
    }
  </style>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left:0px;">
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">            
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">PENJUALAN</h5>
                <div class="card-tools" >
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              
              <div class="card-body">
                <form action="<?php echo base_url() ?>Convert" method="post">
                <div class="row">
                  <div class="col-2">
                    <input type="date" id="birthday" value="<?php echo $this->session->userdata('ses_tgl_awal');?>" class="form-control" name="tgl_awal" placeholder="Tanggal Awal">
                  </div>
                  <p style="padding-top: 5px;" class="sd">S.D.</p>
                  <div class="col-2">
                    <input type="date" id="birthday" value="<?php echo $this->session->userdata('ses_tgl_akhir');?>" class="form-control" name="tgl_akhir" placeholder="Tanggal Akhir">
                  </div>
                  <div class="col-3">
                    <select class="form-control" name="database">
                      <option value="">PT. ALP PETRO INDUSTRY</option>
                      <option value="">PT. BAHANA NUSA LUBRINDO</option>
                      <option value="">PT. GANI DISTRIBUSI LUBRINDO</option>
                      <option value="">PT. LUBRINDO SWARDHANA</option>
                      <option value="">PT. CITRAKARYA NIAGA NUSANTARA</option>
                    </select>
                  </div>
                  <div class="col-3">
                    <input type="submit" name="btnsubmit" class="btn btn-success" value="Refresh">
                    <input type="submit" name="btnsubmit" class="btn btn-warning" value="Reset">
                  </div>
                  <div class="col-1"></div>
                </div>
                </form>               

                <div class="container-fluid" style="padding-top:-100px;">
                    
                  <div id="output"></div>

                </div>
                <style type="text/css">
                  .act-btn{
                      background:#28a745;
                      display: block;
                      width: 60px;
                      height: 60px;
                      line-height: 60px;
                      text-align: center;
                      color: white;
                      font-size: 30px;
                      border-radius: 50%;
                      -webkit-border-radius: 50%;
                      text-decoration: none;
                      transition: ease all 0.3s;
                      position: fixed;
                      right: 30px;
                      bottom:30px;
                    }
                .act-btn:hover{background: #156b2c;color: white;}
                </style>
                <a href="#" onclick="window.print()" class="act-btn">
                  <li class="fa fa-print"></li>
                </a>
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
