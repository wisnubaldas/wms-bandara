      <!-- Default box -->
      <div class="box box-export">
        <div class="box-header with-border bg-info">
          <h3 class="box-title">Export Tracking</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
            <form role="form" id="export">
              <div class="box-body">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Flight Date</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input name="flight" type="text" class="form-control pull-right" id="reservation" data-date-format="yyyy-mm-dd">
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                   <div class="form-group">
                    <label for="mawb">Master House</label>
                    <input name="mawb" class="form-control" id="mawb" placeholder="" type="text">
                  </div>
                </div>
              <div class="col-md-12">
                   <div class="form-group">
                      <label>
                        <input type="checkbox" name="booking" class="minimal" id="booking">
                        Status Booking
                      </label>
                      <!-- <label> 
                        <input type="checkbox" name="weighing" class="minimal" id="weighing"> 
                        Status Weighing 
                      </label> 
                      <label> 
                           <input type="checkbox" name="builtup" class="minimal" id="builtup"> 
                           Status BuildUp 
					  </label> -->
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
                <span class="info-box-text">Weight Status</span>
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
                <span class="info-box-text">Booking Status</span>
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
                  <span class="info-box-text">Weighing Status</span>
                  <span class="info-box-number" id="tot-weighing"></span>
              </div>
        </div>
      </div>
      <br>
      <br>
      <br>
    <div class="col-md-12">
        <table id="grid-data" class="table table-bordered table-hover table-striped" width="100%" cellspacing="0">
            <thead>
            <tr>
              <th>MAWB</th>
              <th>HAWB</th>
              <th>Pieces</th>
              <th>Weight</th>
              <th>Date of flight</th>
			  <th>Time</th>
              <th>Nature Of Good</th>
			  <th>Shipper</th>           
              <th>Status</th>
            </tr>
            </thead>
            <tbody>
              
            </tbody>
            
          </table>
    </div>
      
  </div>
  <div class="box-footer">
    
    
  </div>
</div>
<script type="text/javascript">
  function formatNumber (num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
  }
  $(function(){
    var uriExport = "{base_url('front/trackController/export')}"
    {literal}
    $('[data-toggle="tooltip"]').tooltip(); 
    // show hiden grid 
    $('#back').click(function(){
      $('.box-export').toggle("slow", function(){
               $('#grid-data').DataTable().destroy()
                // console.log('another toggle div')
                $('.grid-export').toggle('slow');
                // $('input').iCheck('uncheck');
                $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                    checkboxClass: 'icheckbox_polaris',
                    radioClass: 'iradio_minimal-blue'
                  });
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
           console.log(a);
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
                      { "data": "entrytime" },
                      { "data": "NatureGood" },
                      { "data": "SHIPPER"},
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
          $('#export')[0].reset();
                $('input').iCheck('destroy');
          
        });
    })
      $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_polaris',
          radioClass: 'iradio_minimal-blue'
      });
    
  }) // end function
  {/literal}
</script>