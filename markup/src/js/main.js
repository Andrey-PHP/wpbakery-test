
$( function() {
	$( "#tabs" ).tabs();
} );

$(function() {
	$("#nav .search-opener").on("click", function(event) {
		$(event.target).parents('#nav').toggleClass("search_active")
	});
});