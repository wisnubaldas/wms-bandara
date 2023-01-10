// $(document).ready(function () {
//             var base_url = window.location.origin+'/tps4.0';
//             var url = "http://localhost/tps4.0/front/grid/user_list";
//             // prepare the data
//             var source =
//             {
//                 datatype: "json",
//                 updaterow:function(rowid, rowdata, commit)
//                 {
//                     // console.log(rowdata);
//                 $.ajax({
//                   url: base_url+'/front/grid/update_users',
//                   type: 'POST',
//                   dataType: 'json',
//                   data: rowdata,
//                           })
//                           .done(function(data, status, xhr) {
//                             // console.log("success");
//                             console.log(status);
//                             commit(true);
//                           })
//                           .fail(function(data, status, xhr) {
//                             // console.log("error");
//                             commit(false);
//                           })
//                           .always(function() {
//                             // console.log("complete");
//                           });
//                 },
//                 datafields: [
//                     { name: 'username'},
//                     { name: 'email'},
//                     { name: 'first_name'},
//                     { name: 'last_name'},
//                     { name: 'company'},
//                     { name: 'phone'},
//                     { name: 'active'}
//                 ],
//                 id: 'id',
//                 url: url,
//                 root: 'data'
//             };
//             var dataAdapter = new $.jqx.dataAdapter(source);
//             $("#jqxgrid").jqxGrid(
//             {
//                 source: dataAdapter,
//                 editable: true,
//                 theme: 'bootstrap',
//                 autowidth:true,
//                 autoheight:true,
//                 columnsresize: true,
//                 columns: [
//                   { text: 'User', dataField: 'username',width: 200},
//                   { text: 'Email', dataField: 'email',width: 200 },
//                   { text: 'First Name', dataField: 'first_name'},
//                   { text: 'Last Name', dataField: 'last_name'},
//                   { text: 'Company', dataField: 'company'},
//                   { text: 'Phone', dataField: 'phone',width:200},
//                   { text: 'Activated', dataField: 'active'}
//                 ]
//             });

//         });
function ddx() {
    if (window.jQuery) {  
        // jQuery is loaded  
        alert("Yeah!");
    } else {
        // jQuery is not loaded
        alert("Doesn't Work");
    }
}
ddx();