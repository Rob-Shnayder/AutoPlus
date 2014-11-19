function getSearchResults()
{
          var manufacture=  $("#searchManufacture").val();
          var model= $("#searchModel").val();
          var year= $("#searchYear").val();
          var color= $("#searchColor").val();

          $("#table1 td").parent().remove();

              $.ajax({
                    type:"post",
                    url:"UserManagement/Search.php",
                    data:"make="+manufacture+"&model="+model+"&year="+year+"&color="+color,
                    dataType: "json",
                        success:function(data){             
                             //$('#table1').append('<tr><td>my data</td><td>more data</td></tr>');
                                drawTable(data);                          
                    }
                 });
}

 function drawTable(data) {   
    for (var i = 0; i < data.length; i++) {
        drawRow(data[i]);
    }
}

function drawRow(rowData) {
    var row = $("<tr />")
    $("#table1").append(row); //this will append tr element to table... keep its reference for a while since we will add cels into it
    row.append($("<td>" + rowData.Make + "</td>"));
    row.append($("<td>" + rowData.Model + "</td>"));
    row.append($("<td>" + rowData.VIN + "</td>"));
    row.append($("<td>" + rowData.Year + "</td>"));
    row.append($("<td>" + rowData.Color + "</td>"));
    row.append($("<td><button id=" + rowData.VIN + " onclick=\"UpdateRecord(this.id)\" class=\"btn btn-primary btn-xs\"><span class=\"glyphicon glyphicon-pencil\"></span></button></td>"));
  }        

function UpdateRecord(clicked_id)
{
    window.location.replace("UpdateInventory_Form.php?VIN=" + clicked_id);
}