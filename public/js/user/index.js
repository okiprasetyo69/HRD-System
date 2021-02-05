var tableUser;

$(document).ready(function () {
    //alert('ada')
    //datatable()
    listTable()
    //$("#tableUser").DataTable();
})

function datatable(){
    $.ajax({
        url: "/api/user/datatable",
        type: "GET",
        success: function (result, status) {
            console.log(result)
            var data = result;
            var rowData = ''
            $('.rowData').html('')
            $.each(data, function (i, val) {
                rowData += '<tr><td>'+val.id+'</td> <td>'+val.name+'</td><td>'+val.email+'</td>></tr>';
            });
            $('.rowData').append(rowData)
        },
        complete: function(){

        },
        errors: function (e, status) {
            console.log(e);
        },
    });
}

function listTable(){
    var form = $("form")[0];
    var formdata = new FormData(form);
    $("#tableUser").DataTable().clear().destroy();
    tableUser = $("#tableUser").DataTable({
        processing: true,
        serverSide: true,
        bLengthChange: false,
        searching: false,
        orderable: [
            [0, "desc"],
            [1, "asc"]
        ],
        language: {
            emptyTable: "Data tidak tersedia",
            zeroRecords: "Tidak ada data yang ditemukan",
            infoFiltered: "",
            infoEmpty: "",
            paginate: {
                previous: "‹",
                next: "›"
            },
            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ Pengguna",
            aria: {
                paginate: {
                    previous: "Previous",
                    next: "Next"
                }
            }
        },
        ajax: {
                url: "/api/user/listuser",
                contentType: "application/json",
                type: "POST",
                data: function (d) {
                    //console.log(d);
                    var dataparam = {
                        draw: d.draw,
                        page: d.start / d.length + 1,
                        length: d.length,
                        search_text: $("#search").val()
                    };
                    return JSON.stringify(dataparam);
                },
                dataSrc: function (response) {
                    console.log(response)
                    return response.data;
                }
        },
        columns: [
            {
                data: null,
                "width": "5%"
            },
            {
                data: "name"
            },
            {
                data: "email",
            },
            {
                data: null,
                "width": "15%"
            }
        ],
        columnDefs: [
            {
                targets: 0,
                searchable: false,
                orderable: false,
                createdCell: function (td, cellData, rowData, row, col) {
                    $(td).addClass("text-center");
                    $(td).html(tableUser.page.info().start + row + 1);
                }
            },
            {
                targets: 1,
                searchable: false,
                orderable: false,
                createdCell: function (td, cellData, rowData, row, col) {
                    $(td).addClass("text-center");
                }
            },
            {
                targets: 2,
                searchable: false,
                orderable: false,
                createdCell: function (td, cellData, rowData, row, col) {
                    $(td).addClass("text-center");
                }
            },
            {
                targets: 3,
                searchable: false,
                orderable: false,
                createdCell: function (td, cellData, rowData, row, col) {
                    $(td).addClass("text-center");
                    var html =
                            "<a href='/masjid/detail/" + rowData.id + "' class='btn btn-primary btn-sm' style='margin-left: 10px;' id='btn-detail-masjid'><i class='fas fa-eye'></i></a>";
                    html +=
                            "<a href='/masjid/edit/" + rowData.id + "' class='btn btn-success btn-sm' style='margin-left: 10px;' id='btn-edit-masjid'><i class='fas fa-pencil-alt'></i></a>";
                    html +=
                            "<button class='btn btn-danger btn-sm' onClick='konfirmasiHapus(" +
                            rowData.id +
                            ",\""+rowData.nama+"\");' style='margin-left: 10px;' data-toggle='modal' data-target='' id='btn-hapus-masjid'><i class='fa fa-trash'></i></button>";
                    $(td).html(html);
                }
            }
        ]
    });
}
