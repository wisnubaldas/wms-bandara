      <!-- Default box -->
      <div class="box box-mohon">
        <div class="box-header with-border bg-info">
          <h3 class="box-title">Pembatalan PLP</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
            <form role="form" id="mohon">
              <div class="box-body">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="ref_number">Referensi Number</label>
                    <input type="text" class="form-control" id="ref_number" name="ref_number"  placeholder="" >
                  </div>
                  <div class="form-group">                                        
                    <label for="kd_kantor">Kode Kantor </label>                                 
                    <input name="kd_kantor" class="form-control" id="kd_kantor" placeholder="" type="text">                 
                  </div>
                  <div class="form-group">
                    <label for="gudang_asal">Gudang Asal</label>
                    <input name="gudang_asal" class="form-control" id="gudang_asal" placeholder="" type="text">
                  </div>        
                </div>

                <div class="col-md-4">
                  <div class="form-group">                                        
                    <label for="no_plp">Nomor PLP </label>                                 
                    <input name="no_plp" class="form-control" id="no_plpr" placeholder="" type="text">                 
                  </div>
                  <div class="form-group">
                    <label for="type_data">Type Data</label>
                    <input name="type_data" class="form-control" id="type_data" placeholder="" type="text">
                  </div>
                  <div class="form-group">
                    <label for="no_surat">No Surat</label>
                    <input name="no_surat" class="form-control" id="no_surat" placeholder="" type="text">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="tgl_plp">Tanggal PLP</label>
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>                                        
                        <input name="tgl_plp" type="text" class="form-control pull-right" id="reservation" data-date-format="yyyy-mm-dd">
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="kd_tps_asal">Kode TPS Asal</label>
                    <input name="kd_tps_asal" class="form-control" id="kd_tps_asal" placeholder="" type="text">
                  </div>
                  
                </div>
                <div class="col-md-4">                  
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
          url: uriExport,
          type: 'POST',
          // dataType: 'json',
          // data: {start: startDate,end:endDate,mawb:mawb,booking:booking,weighing:weighing},
          data:$('#export').serialize(),
        })
        .done(function(a) {
          // console.log("success");
          if(a === false)
          {
             if(!alertify.errorAlert){
              //define a new errorAlert base on alert
                alertify.dialog('errorAlert',function factory(){
                return{
                build:function(){
                    var errorHeader = '<span class="fas fa-exclamation-triangle fa-2x" '
                    +    'style="vertical-align:middle;color:#e10000;">'
                    + '</span> Data Error';
                    this.setHeader(errorHeader);
                            }
                        };
                    },true,'alert');
              }
               alertify.errorAlert('Data tidak di temukan');
          }else{
            // console.log(a)
            $('.box-export').toggle("slow", function(){
                // console.log('another toggle div')
                $('.grid-export').toggle('slow');
            });
           $('#grid-data').DataTable({
                    "dom": 'Bfrtip',
                    "buttons": [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ],
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": true,
                    "aaData":a,
                    "columns": [
                      { "data": "mawb" },
                      { "data": "hawb" },
                      { "data": "pieces" },
                      { "data": "weight" },
                      { "data": "dateflight"},
                      { "data": "SHIPPER" },
                      { "data": "CONSIGNEE" },
                      { "data": "AGENT"},
                      { "data": "STATUS"}
                  ],
                  "initComplete": function () {
                    $('.buttons-pdf').html('<i class="fas fa-file-pdf fa-2x" aria-hidden="true" data-toggle="tooltip" title="Export To PDF!"></i>');
                    $('.buttons-copy').html('<i class="far fa-copy fa-2x" aria-hidden="true" data-toggle="tooltip" title="Export To PDF!"></i>');
                    $('.buttons-csv').html('<i class="far fa-file-excel fa-2x" aria-hidden="true" data-toggle="tooltip" title="Export To PDF!"></i>');
                    $('.buttons-excel').html('<i class="far fa-file-excel fa-2x" aria-hidden="true" data-toggle="tooltip" title="Export To PDF!"></i>');
                    $('.buttons-print').html('<i class="fas fa-print fa-2x" aria-hidden="true" data-toggle="tooltip" title="Export To PDF!"></i>');
                    }

              });
          var tot = 0;
          var totWeigh = 0;
          var totBook = 0;
          a.forEach( function(e, i) {
            tot += parseInt(e.weight);
            // console.log(typeof(parseInt(e.weight)));
            // console.log(e.STATUS)
            if(e.STATUS === 'BOOKING'){++totBook;}
            if(e.STATUS === 'WEIGHING'){++totWeigh;}

          });
          // console.log(totWeigh);
          $('#tot-weight').text(formatNumber(tot));
          $('#tot-weighing').text(formatNumber(totWeigh)+' HAWB');
          $('#tot-booking').text(formatNumber(totBook)+' HAWB');

          } // end if else


        })
        .fail(function(e) {
          // console.log(e.responseJSON.message);
          if(!alertify.errorAlert){
              //define a new errorAlert base on alert
                alertify.dialog('errorAlert',function factory(){
                return{
                build:function(){
                    var errorHeader = '<span class="fas fa-exclamation-triangle fa-2x" '
                    +    'style="vertical-align:middle;color:#e10000;">'
                    + '</span> Data Error';
                    this.setHeader(errorHeader);
                            }
                        };
                    },true,'alert');
              }
               alertify.errorAlert(e.responseJSON.message);

        })
        .always(function() {
          console.log("complete");
          $('#export')[0].reset()
          // startDate = null;
          // endDate = null;
        });
    })
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    
  }) // end function
  {/literal}
</script>
