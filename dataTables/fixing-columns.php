<!-- Handling the fixed Columns in the table -->
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/fixedcolumns/4.0.0/js/dataTables.fixedColumns.min.js"></script>

<style>
    .fixed {
        background-color: #f9f9f9;
    }
</style>
<table id="table-id" style="width:50%">
    <thead>
        <tr>
            <td class="fixed">#</td>
            <td>Name</td>
            <td>Surname</td>
            <td>some</td>
            <td>Other</td>
            <td>Info</td>
            <td>To</td>
            <td>Show</td>
            <td>On</td>
            <td>The</td>
            <td>Table</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Name</td>
            <td>Surname</td>
            <td>some</td>
            <td>Other</td>
            <td>Info</td>
            <td>To</td>
            <td>Show</td>
            <td>On</td>
            <td>The</td>
            <td>Table</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Name</td>
            <td>Surname</td>
            <td>some</td>
            <td>Other</td>
            <td>Info</td>
            <td>To</td>
            <td>Show</td>
            <td>On</td>
            <td>The</td>
            <td>Table</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Name</td>
            <td>Surname</td>
            <td>some</td>
            <td>Other</td>
            <td>Info</td>
            <td>To</td>
            <td>Show</td>
            <td>On</td>
            <td>The</td>
            <td>Table</td>
        </tr>
    </tbody>
</table>

<script>
    $('#table-id').DataTable({
        // "scrollX": '100%',
        // "scrollCollapse": true,
        // "scroller": true,
        // fixedColumns: {
        // leftColumns: 1
        // },

        // scrollY: "300px",
        "scrollX": true,
        "scrollCollapse": true,
        "fixedColumns": {
            left: 1,
            right: 0,
        },
    });
</script>