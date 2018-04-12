$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

$('[data-type="include"]').each(function(ev, el) {
	console.log($(this).data("src"));
	$(this).load($(this).data("src"))
});

$(document).ready(function() {
	// Change the selector if needed
	var $table = $('table'),
	    $bodyCells = $table.find('tbody tr:first').children(),
	    colWidth;

	// Get the tbody columns width array
	colWidth = $bodyCells.map(function() {
	    return $(this).width();
	}).get();

	// Set the width of thead columns
	$table.find('thead tr').children().each(function(i, v) {
	    $(v).width(colWidth[i]);
	});
});