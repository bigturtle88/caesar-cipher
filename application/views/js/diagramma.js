jQuery(document).ready(function () {

	var i = 0;
	var diagrammaOptions = {
		labels: ['Aa', 'Bb', 'Cc', 'Dd', 'Ee', 'Ff', 'Gg', 'Hh', 'Ii', 'Jj', 'Ll', 'Mm', 'Nn', 'Oo', 'Pp', 'Qq', 'Rr', 'Ss', 'Tt', 'Uu', 'Vv', 'Ww', 'Xx', 'Yy', 'Zz'],
		series: []

	};

	printDiagremma();

	$('#leftText').change(function () {

		for (i = 0; i < 25; i++) {

			diagrammaOptions.series[i] = $('#leftText').val().split(diagrammaOptions.labels[i][0]).length - 1 + $('#leftText').val().split(diagrammaOptions.labels[i][1]).length - 1;


		}

		printDiagremma();

	});


	function printDiagremma() {
		new Chartist.Bar('#diagramma', diagrammaOptions, {
			distributeSeries: true
		});

	}


});
