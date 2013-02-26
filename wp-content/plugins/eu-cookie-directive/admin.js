jQuery(function($)
{	
	$("#ecd-add-cookie-row").live("click", function()
	{
		var row_id = $("#ecd-cookie-table tr:last").attr("id");
		row_id++;
		//alert(row_id);
		
		
		var pattern = /(\[\d\])/g;
		var row = "<tr id='"+row_id+"'>"+$("#ecd-cookie-table tr:last").html()+"</tr>";
		row = row.replace(pattern, "["+row_id+"]");
		
		 $("#ecd-cookie-table").append(row);
		
		return false;
	});
	
	$(".ecd-remove-cookie-row").live("click", function()
	{
		$(this).parent().parent().remove();
		return false;
	})
	
});