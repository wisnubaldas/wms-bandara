       <!-- START CUSTOM TABS -->
       <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom"> 
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#tab_1-1" data-toggle="tab">Data Sending</a></li>
              <li><a href="#tab_2-2" data-toggle="tab">Upload Gate In</a></li>
              <li class="pull-left header"><i class="fa fa-th"></i> Gate In</li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1">
              <table id="tbl-gatein" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Date Send</th>
                  <th>Ref Number</th>
                  <th>HAWB</th>
                  <th>MAWB</th>
                  <th>Respon</th>
                </tr>
                </thead>
                <tbody>
                
                </tbody>
              </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2">
              <form action="" method="post" id="frm-data" enctype="multipart/form-data">
              <div class="input-group col-md-12" >
              <label class="btn bg-olive btn-flat col-md-6 btn-file">
                  <span>Browse File</span> <input id="input-b2" name="input-b2" type="file" class="" data-show-preview="false">
              </label>
              <button type="submit" class="btn bg-navy btn-flat" id="upload-file">Submit</button>
              </div>
              </form>
              <div class="col-12">
                <br />
                  <div id="respon">
                  </div>
              </div>
              <div>
              
              </div>
              </div>
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
<?= file_get_contents(APPPATH.'modules/front/views/tps/template.html') ?>
      <!-- END CUSTOM TABS -->
<script type="text/javascript">
$(document).ajaxStart(function() { Pace.restart(); });
 $('#tbl-gatein').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "processing": true,
        // "serverSide": true,
      "ajax": "<?= base_url('front/tpsController/gateinGrid') ?>",
      "columns": [
            { data: 'date_update' },
            { data: 'ref_num' },
            { data: 'no_bl_awb' },
            { data: 'no_master_bl_awb' },
            { data: 'respon' }
        ]
    });
    
  $('#input-b2').on('change',function(){
      $(this).parent('label').find('span').text($(this).val())
  })
  $('#frm-data').submit(function(e){
    e.preventDefault()
      $.ajax({
        url: "<?= base_url('front/tpsController/uploadGateIn') ?>",
        type:"post",
        data:new FormData(this),
        processData:false,
        contentType:false,
        cache:false,
        async:false,
        success: function(r){
          let data = MyApp.excelData(r)
          let template = Handlebars.compile($('#tpl-data-excel').html());
              $('#respon').html(template(data));
   
              $(".select2").select2();

              let tblDetail = $('#tbl-excel').DataTable({
																deferRender: 	true,
																responsive:   true,
																processing:   true,
																searching: 		true,
																ordering:  		true,
																lengthMenu:	  false,
                                lengthChange: false,
                                dom :"Bfrtip",
                                buttons: {
                                            buttons: [
                                                { 
                                                    text: '<i class="font-icon font-icon-list-square"></i> Submit', 
                                                    className: 'btn btn-success',
                                                    action:function(e,dt,node,config){
                                                              let frmData = tblDetail.$('input, select').serializeArray();
                                                              let Values = []
                                                              _.each(frmData,function (v,i) { 
                                                                  Values.push(_.object([v.name],[v.value]))
                                                               })
                                                               let Obj = _.chunk(Values,3)
                                                               let i;
                                                                for (i = 0; i < data.length; i++) {
                                                                    // console.log(data[i])
                                                                    data[i].kd_gudang = Obj[i][1].kd_gudang
                                                                    data[i].kd_dok_inout = Obj[i][2].kd_dok_inout
                                                                }
                                                                // console.log(data)

                                                        $.ajax({
                                                          type: "post",
                                                          url: "<?= base_url('front/tpsController/postGateIn') ?>",
                                                          data: {data:data},
                                                          dataType: "json",
                                                          success: function (r) {
                                                            tblDetail.destroy()
                                                            let template = Handlebars.compile($('#tpl-loading').html());
                                                                $('#respon').html(template({'status':'Sukses sending XML Gate In'}));
                                                          }
                                                        });
                                                      //  })
                                                    }
                                                }
                                            ]
                                }
              }); // end table
             
      },
      beforeSend:function () { 
        let template = Handlebars.compile($('#tpl-loading').html());
              $('#respon').html(template({'status':'Proses parsing data excel....'}));
       }
      }).fail(function (a) { 
        let template = Handlebars.compile($('#error-template').html());
              $('#respon').html(template({'respon':a.responseJSON.error}));
       });
  })
</script>