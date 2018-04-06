$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

$('[data-type="include"]').each(function(ev, el) {
	console.log($(this).data("src"));
	$(this).load($(this).data("src"))
});