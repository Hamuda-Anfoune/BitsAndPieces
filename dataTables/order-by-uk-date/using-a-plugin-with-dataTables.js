// CDN
// cdn.datatables.net/plug-ins/1.11.3/sorting/date-uk.js

// Code from plug-in to sort by columns containing UK dates
jQuery.extend(jQuery.fn.dataTableExt.oSort, {
    "date-uk-pre": function (a) {
        if (a == null || a == "") {
            return 0;
        }
        var ukDatea = a.split('/');
        return (ukDatea[2] + ukDatea[1] + ukDatea[0]) * 1;
    },

    "date-uk-asc": function (a, b) {
        return ((a < b) ? -1 : ((a > b) ? 1 : 0));
    },

    "date-uk-desc": function (a, b) {
        return ((a < b) ? 1 : ((a > b) ? -1 : 0));
    }
});


// dataTable
$('#table-id').DataTable({
    
    "columnDefs": [
    {
        type: 'date-uk', // Defining column contents as UK dates, this will enable sorting by the column contents
        'targets': [4]
    },
    ],
});


