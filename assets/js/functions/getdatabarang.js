    function createtable() {
        var table = document.getElementById("myTable");
        var rowCount = table.rows.length;
        var row = table.insertRow(-1);
        var cell0 = row.insertCell(0);
        var cell1 = row.insertCell(1);
        var cell2 = row.insertCell(2);
        var cell3 = row.insertCell(3);
        var cell4 = row.insertCell(4);
        var cell5 = row.insertCell(5);
        var no = 1;

    }

    function deletetable() {
        var table = document.getElementById("myTable");
        var rowCount = table.rows.length;
        document.getElementById("myTable").deleteRow(rowCount -1);
    }                        
