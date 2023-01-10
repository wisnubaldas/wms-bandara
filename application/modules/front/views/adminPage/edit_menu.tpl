<!-- /.row -->
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Responsive Hover Table</h3>

                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <div class="col-md-12">
                    <table id="grid-data" class="table table-bordered table-hover table-striped" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Icon</th>
                            <th>ParentId</th>
                            <th>Number Step</th>
                            <th>Link</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>

                    </table>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>

<script>
var menu = {$menuGrid}
//    console.log(menu)
    {literal}
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
        "aaData":menu,
        "columns": [
            { "data": "id" },
            {"data":"name"},
            {"data":"icon"},
            {"data":"parent",
                "render":function(data, type, row, meta){
                if(data === null)
                    {
                        return '<div class="bg-navy color-palette">'+data+'</div>';
                    }else{
                    return data
                }
            }
            },
            {"data":"number"},
            {"data":"slug"}
        ],
        "initComplete": function () {
            $('.buttons-pdf').html('<i class="fas fa-file-pdf fa-2x" aria-hidden="true" data-toggle="tooltip" title="Export To PDF!"></i>');
            $('.buttons-copy').html('<i class="far fa-copy fa-2x" aria-hidden="true" data-toggle="tooltip" title="Export To PDF!"></i>');
            $('.buttons-csv').html('<i class="far fa-file-excel fa-2x" aria-hidden="true" data-toggle="tooltip" title="Export To PDF!"></i>');
            $('.buttons-excel').html('<i class="far fa-file-excel fa-2x" aria-hidden="true" data-toggle="tooltip" title="Export To PDF!"></i>');
            $('.buttons-print').html('<i class="fas fa-print fa-2x" aria-hidden="true" data-toggle="tooltip" title="Export To PDF!"></i>');
        }

    });
    {/literal}
</script>