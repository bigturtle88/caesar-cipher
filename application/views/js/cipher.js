jQuery(document).ready(function () {
	var leftText;
	var rightText;
	var data = {};
	$('#rot').change(
		function () {
			data.rot = $('#rot').val();
		}
	);
	$('#rightButton').click(function () {
		code("/cipher/decode");
	})
	$('#leftButton').click(function () {
		code("/cipher/encode");
	});
	function code(way) {
		leftText = $('#leftText').val();
		data.text = leftText;
		data.JSON = {dataJSON: JSON.stringify(data)};
		$.post(way, data.JSON, function (data) {
			rightText = jQuery.parseJSON(data);
			$('#rightText').val(rightText);
		});
	}
});
