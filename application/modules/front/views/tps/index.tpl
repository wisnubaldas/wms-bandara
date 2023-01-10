<section class="content-header">
      <h1>
        {$title[0]}
        <small>{$title[1]}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:void"><i class="fa fa-dashboard"></i> {$title[2]}</a></li>
        <li><a href="javascript:void">{$title[3]}</a></li>
        <li class="active">{$title[4]}</li>
      </ol>
</section>
     <!-- Main content -->
<section class="content">
      <div class="box" id="box-grid">
      	<div class="box-header with-border">
          <div class="box-title">
          	<div class="btn-group">
          		<button type="button" class="btn-purple btn btn-sm" id="parent-menu">Add Parent Menu</button>
          		<button type="button" class="btn-primary btn btn-sm" id="child-menu">Add Child Menu</button>
          	</div>
          </div>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
    	<div class="box-body">
        <div id="tes"></div>
        <table id="gatein-grid" class="table table-bordered table-hover table-striped" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>#</th>
                <th>KodeDok</th>
                <th>KodeTPS</th>
                <th>Nama Angkut</th>
                <th>FlighNo</th>
                <th>Sign</th>
                <th>TglTiba</th>
                <th>KdGudang</th>
                <th>#</th>
                <th>#</th>
              </tr>
            </thead>
              <tbody>
              </tbody>
        </table>
  	  </div>
      <div class="box-footer">
        
      </div> <!-- boox footer -->
  		</div>
	  <!-- /.end box -->
</section>
    <!-- /.content -->
  <script type="text/javascript">
    var gateinURI = "{base_url('front/tpsController/gateinGrid')}"
    var getKdDok = "{base_url('front/tpsController/gateKodeDok?id=')}"
    {literal}
     $("select").select2();

     // $('#gatein-grid').DataTable({
     //      "processing": true,
     //      "serverSide": true,
     //      "paging": true,
     //      "lengthChange": false,
     //      "searching": false,
     //      "ordering": true,
     //      "info": true,
     //      "autoWidth": false,
     //      "ajax":{
     //              url:gateinURI,
     //              type: 'POST'
     //            },
     //      "columns": [
     //        { "data": "id_kms"},
     //        { "data": "kdDok.keterangan"},
     //        { "data": "kd_tps"},
     //        { "data": "nm_angkut"},
     //        { "data": "no_voy_flight"},
     //        { "data": "call_sign"},
     //        { "data": "tg_tiba"},
     //        { "data": "kd_gudang"},
     //        { "data": "id_kms",
     //          "render": function ( data, type, row, meta ) {
     //                return '<button value="'+data+'" class="btn btn-danger btn-sm del-menu">Delete</button>';
     //            }
     //        }
     //      ]
     //    });

    //  $('#example2 tbody').on('click', '.del-menu', function () {
    //      idnya = $(this).val()
    //      bootbox.confirm({ 
    //           size: "small",
    //           message: "Yakin mau delete ??? "+$(this).val(), 
    //           callback: function(result){
    //                         if (result === true)
    //                             {
    //                               $.post(delURI, {id:idnya}, function(data, textStatus, xhr) {
    //                                 if (data == 1){
    //                     $.get(indexURI,function(data){
    //                       $(".content-wrapper").html(data);
    //                     })
    //                   }
    //                               });
    //                             }
    //                     }
    //           })
    // });
    {/literal}
  </script>