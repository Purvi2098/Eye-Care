<html>
<head>
<script type="text/javascript" >
  function edit_row(no)
{
 document.getElementById("edit_button"+no).style.display="none";
 document.getElementById("save_button"+no).style.display="block";
  
 var name=document.getElementById("name_row"+no);
 var country=document.getElementById("country_row"+no);
 var age=document.getElementById("age_row"+no);
  
 var name_data=name.innerHTML;
 var country_data=country.innerHTML;
 var age_data=age.innerHTML;
  
 name.innerHTML="<input type='text' id='name_text"+no+"' value='"+name_data+"'>";
 country.innerHTML="<input type='text' id='country_text"+no+"' value='"+country_data+"'>";
 age.innerHTML="<input type='text' id='age_text"+no+"' value='"+age_data+"'>";
}

function save_row(no)
{
 var name_val=document.getElementById("name_text"+no).value;
 var country_val=document.getElementById("country_text"+no).value;
 var age_val=document.getElementById("age_text"+no).value;

 document.getElementById("name_row"+no).innerHTML=name_val;
 document.getElementById("country_row"+no).innerHTML=country_val;
 document.getElementById("age_row"+no).innerHTML=age_val;

 document.getElementById("edit_button"+no).style.display="block";
 document.getElementById("save_button"+no).style.display="none";
}

function delete_row(no)
{
 document.getElementById("row"+no+"").outerHTML="";
}

function add_row()
{
 var new_name=document.getElementById("medname[]").value;
 var new_country=document.getElementById("mg[]").value;
 var new_age=document.getElementById("dosage[]").value;
 var new_proe=document.getElementById("nod[]").value;
  
 var table=document.getElementById("data_table");
 var table_len=(table.rows.length)-1;

 var row = table.insertRow(table_len).outerHTML="<tr id='row"+table_len+"'><td id='name_row"+table_len+"'>"+new_name+"</td><td id='country_row"+table_len+"'>"+new_country+"</td><td id='age_row"+table_len+"'>"+new_age+"</td><td><input type='button' id='edit_button"+table_len+"' value='Edit' class='edit' onclick='edit_row("+table_len+")'> <input type='button' id='save_button"+table_len+"' value='Save' class='save' onclick='save_row("+table_len+")'> <input type='button' value='Delete' class='delete' onclick='delete_row("+table_len+")'></td></tr>";

 document.getElementById("medname[]").value="";
 document.getElementById("mg[]").value="";
 document.getElementById("dosage[]").value="";

}
</script>
</head>
<body>
<div id="wrapper">
<table align='center' cellspacing=2 cellpadding=5 id="data_table" border=1>
<tr>
<th>Medicine Name  </th>
<th>Morning Dosage  </th>
<th>Evening Dosaage </th>
<th>NOP</th>
</tr>


<tr>
<td><input name="medname[]" type="text" id="medname[]" size="35" /></td>
<td><input name="mg[]" type="text" id="mg[]" size="10" /></td>
<td><input name="dosage[]" type="text" id="dosage[]" size="15" /></td>
<td><input name="nod[]" type="text" id="nod[]" size="10" /></td>
<td><input type="button" class="add" onclick="add_row();" value="+"></td>
</tr>

</table>
</div>

</body>
</html>
