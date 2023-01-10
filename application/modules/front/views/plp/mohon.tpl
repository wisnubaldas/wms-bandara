      <!-- Default box -->
      <div class="box box-mohon">
        <div class="box-header with-border bg-info">
          <h3 class="box-title">Permohonan PLP</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
            <form role="form" id="mohon" action='test_sending' methode='Post'>
              <div class="box-body">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="ref_number">Referensi Number</label>
                    <input type="text" class="form-control" id="ref_number" name="ref_number"  placeholder="" >
                  </div>         
                </div>
                <div class="col-md-4">
                  <div class="form-group">                                        
                    <label for="kd_kantor">Kode Kantor </label>
                    <select id="kd_kantor" name="kd_kantor" class="form-control" placeholder="Select Kode Kantor">
                    </select>                                                          
                  </div>
                  <div class="form-group">
                    <label for="type_data">Type Data</label>
                    <input name="type_data" class="form-control" id="type_data" placeholder="" type="text">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="kd_tps_asal">Kode TPS Asal</label>
                    <input name="kd_tps_asal" class="form-control" id="kd_tps_asal" placeholder="" type="text">
                  </div>
                  <div class="form-group">
                    <label for="no_surat">No Surat</label>
                    <input name="no_surat" class="form-control" id="no_surat" placeholder="" type="text">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="gudang_asal">Gudang Asal</label>
                    <input name="gudang_asal" class="form-control" id="gudang_asal" placeholder="" type="text">
                  </div>
                  <div class="form-group">
                    <label for="tgl_surat">Tanggal Surat</label>
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>                                        
                        <input name="tgl_surat" type="text" class="form-control pull-right" id="tgl_surat" data-date-format="yyyy-mm-dd">
                      </div>
                  </div>
                </div>
                <div class="col-md-12">                  
                  <div class="form-group">
                    <label for="kd_alasan_plp">Kode Alasan PLP</label>
                    <input name="kd_alasan_plp" class="form-control" id="kd_alasan_plp" placeholder="" type="text">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="kd_tps_tujuan">Kode TPS Tujuan</label>
                    <input name="kd_tps_tujuan" class="form-control" id="kd_tps_tujuan" placeholder="" type="text">
                  </div>
                  <div class="form-group">
                    <label for="nm_angkut">Nama Angkutan</label>
                    <input name="nm_angkut" class="form-control" id="nm_angkut" placeholder="" type="text">
                  </div>
                  <div class="form-group">
                    <label for="yor_asal">YOR Asal</label>
                    <input name="yor_asal" class="form-control" id="yor_asal" placeholder="" type="text">
                  </div>
                  <div class="form-group">
                    <label for="no_bc11">No. BC11</label>
                    <input name="no_bc11" class="form-control" id="no_bc11" placeholder="" type="text">
                  </div>
                  <div class="form-group">
                    <label for="jns_kms">Jenis Kemasan</label>
                    <input name="jns_kms" class="form-control" id="jns_kms" placeholder="" type="text">
                  </div>
                  <div class="form-group">
                    <label for="no_bl_awb">No BL-AWB</label>
                    <input name="no_bl_awb" class="form-control" id="no_bl_awb" placeholder="" type="text">
                  </div>
                </div>  
                <div class="col-md-4">                
                  <div class="form-group">
                    <label for="gudang_tujuan">Gudang Tujuan</label>
                    <input name="gudang_tujuan" class="form-control" id="gudang_tujuan" placeholder="" type="text">
                  </div>
                  <div class="form-group">
                    <label for="no_voy_flight">No Flight</label>
                    <input name="no_voy_flight" class="form-control" id="no_voy_flight" placeholder="" type="text">
                  </div>
                  <div class="form-group">
                    <label for="yor_tujuan">YOR Tujuan</label>
                    <input name="yor_tujuan" class="form-control" id="yor_tujuan" placeholder="" type="text">
                  </div>
                  <div class="form-group">
                    <label for="tgl_bc11">Tanggal BC.11</label>
                    <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>                                        
                      <input name="tgl_bc11" class="form-control" id="tgl_bc11" placeholder="" type="text" data-date-format="yyyy-mm-dd">
                    </div>  
                  </div>
                  <div class="form-group">
                    <label for="jml_kms">Jumlah Kemasan</label>
                    <input name="jml_kms" class="form-control" id="jml_kms" placeholder="" type="text">
                  </div>
                  <div class="form-group">
                    <label for="tgl_bl_Awb">Tanggal BL-AWB</label>
                    <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                    <input name="tgl_bl_Awb" class="form-control" id="tgl_bl_Awb" placeholder="" type="text" data-date-format="yyyy-mm-dd">
                    </div>
                  </div>
                </div>                                
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="tgl_tiba">Tanggal Tiba</label>
                    <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                      <input name="tgl_tiba" class="form-control" id="tgl_tiba" placeholder="" type="text" data-date-format="yyyy-mm-dd">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nm_pemohon">Nama Pemohon</label>
                    <input name="nm_pemohon" class="form-control" id="nm_pemohon" placeholder="" type="text">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" id="submit" class="btn btn-success pull-right">Submit</button>
              </div>
            </form>
      </div>
<!-- Data table  -->
<div class="box grid-export" style="display: none;">
  <div class="box-header with-border">
    <h3 class="box-title">Data Tracking </h3>
    <div class="box-tools pull-right">
      <div class="btn-group btn-group-sm">
        <button class="btn btn-danger btn-sm" id="back">Back</button>
      </div>
    </div>
  </div>
  <div class="box-body">
    <div class="col-md-12">
      <div class="col-md-4">
      <div class="info-box bg-aqua" style="min-height: 50px; margin-bottom: 0px;">
        <span class="info-box-icon" style="height: 50px;width: 50px;font-size: 33px;line-height: 50px;">
          <i class="far fa-plus-square"></i>
        </span>
            <div class="info-box-content" style="padding: 0px 0px;margin-left: 60px;">
                <span class="info-box-text">Total Weight</span>
                <span class="info-box-number" id="tot-weight"></span>
            </div>
      </div>
    </div>
     <div class="col-md-4">
      <div class="info-box bg-aqua" style="min-height: 50px; margin-bottom: 0px;">
        <span class="info-box-icon" style="height: 50px;width: 50px;font-size: 33px;line-height: 50px;">
          <i class="far fa-plus-square"></i>
        </span>
            <div class="info-box-content" style="padding: 0px 0px;margin-left: 60px;">
                <span class="info-box-text">Booking Data</span>
                <span class="info-box-number" id="tot-booking"></span>
            </div>
      </div>
    </div>
       <div class="col-md-4">
        <div class="info-box bg-aqua" style="min-height: 50px; margin-bottom: 0px;">
          <span class="info-box-icon" style="height: 50px;width: 50px;font-size: 33px;line-height: 50px;">
            <i class="far fa-plus-square"></i>
          </span>
              <div class="info-box-content" style="padding: 0px 0px;margin-left: 60px;">
                  <span class="info-box-text">Weighing Data</span>
                  <span class="info-box-number" id="tot-weighing"></span>
              </div>
        </div>
      </div>
  </div>
</div>
<script type="text/javascript">
  function formatNumber (num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
  }
  $(function(){
    var uriMohon = "{base_url('front/plpController/mohon')}"
    {literal}
    $('[data-toggle="tooltip"]').tooltip(); 
    // show hiden grid 
    $('#back').click(function(){
      $('.box-export').toggle("slow", function(){
               $('#grid-data').DataTable().destroy()
                // console.log('another toggle div')
                $('.grid-export').toggle('slow');
            });
    })
    
    $('#reservation').datepicker();
	

    $('#submit').click(function(e){
      e.preventDefault()
      
        $.ajax({
          url: uriMohon,
          type: 'POST',
          // dataType: 'json',
          // data: {start: startDate,end:endDate,mawb:mawb,booking:booking,weighing:weighing},
          data:$('#mohon').serialize(),
        })
        .done(function(a) {
          // console.log("success");        
        })
        .fail(function(e) {
          // console.log(e.responseJSON.message);
          
        .always(function() {
          console.log("complete");
          $('#mohon')[0].reset()
          // startDate = null;
          // endDate = null;
        });
    })
    
  }) // end function
  {/literal}
</script>