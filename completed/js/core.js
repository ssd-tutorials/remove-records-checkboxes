var formObject = {
	selectDeselectCheckbox : function(obj) {
		var class_name = obj.attr('id');
		if ($('input.' + class_name + ':checked').length > 0) {
			obj.attr('checked', false);
			$('.' + class_name).attr('checked', false);
		} else {
			obj.attr('checked', true);
			$('.' + class_name).attr('checked', true);
		}
	}
};
$(function() {
	$('.select-all').click(function() {
		formObject.selectDeselectCheckbox($(this));
	});
});