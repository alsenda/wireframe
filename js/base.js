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

	setFloating();
});

$(window).resize(function() {
	setFloating();
});

function initMap() {
    var mapOptions = {
            center: new google.maps.LatLng(50.713982, 4.677748),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            zoom: 8
          };	 
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
};

function setFloating() {
	if($(window).width >= 990 ){
		$('.floating-panel.panel-right').each(function() {
			$(this).css('right', $('#zclogo').offset().left+'px');
			$(this).css('top', $('#top-nav').outerHeight());
		});
	}
}