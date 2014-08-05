jQuery(document).ready(function($) {
	$('input[name=search_api_views_fulltext]').val('SEARCH');
	
	/**
	* Written by Rob Schmitt, The Web Developer's Blog
	* http://webdeveloper.beforeseven.com/
	*/

	/**
	* The following variables may be adjusted
	*/
	var active_color = '#542010'; // Colour of user provided text
	var inactive_color = '#542010'; // Colour of default text

	/**
	* No need to modify anything below this line
	*/
	$("input.form-text").css("color", inactive_color);
	var default_values = new Array();
	$("input.form-text").focus(function() {
		if (!default_values[this.id]) {
		default_values[this.id] = this.value;
	}
	if (this.value == default_values[this.id]) {
		this.value = '';
		this.style.color = active_color;
	}
	$(this).blur(function() {
		if (this.value == '') {
			this.style.color = inactive_color;
			this.value = default_values[this.id];
		}
		});
	});
});