@hasSection('user-table')
<script>
    $(document).ready(function () {
        const table1 = document.querySelector('#userTable');
        if (table1) {
            new simpleDatatables.DataTable(table1);
        }
    });
</script>
@endif