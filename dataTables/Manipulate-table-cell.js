$('#table-id').DataTable({

    "columnDefs": [
        {
            'targets': [4],
            "createdCell": function (cell, cellData, rowData, rowIndex, colIndex) { // Manipulate the whole cell.. and have access through it to the whole row
                if (thereIsDanger) {
                    $(cell).addClass('uk-text-danger');
                }
            },
            render: function (cellData, type, row) { // Manipulate the content of the cell.. and have access through it to the whole row
                return cellData == 'example-data' ? 'not-real' : cellData;
            },
        },
    ],
});