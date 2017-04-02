$(function() {
	 $('#example1').dataTable( {});
	var table = $('#example1').DataTable();
	var key = [];
	var query = '';
	var min = 100;
	var max = 1000;
	$('.amenity,.iCheck-helper,.location').on('click', function() {
		if ($(this).hasClass('amenity') || $(this).parent().parent().hasClass('amenity')) {
			$('.icheckbox_minimal').each(function() {
			if($(this).hasClass('checked')) {
				key.push($(this).children(':first').val());
			}
		});
		for (i = 0; i < key.length; i++) {
			if (i > 0) { query += '|';}
			query += key[i]
		}
		var table = $('#example1').DataTable();
		table.fnFilter(query, 3, true, false, true, true);
		key = [];
		query = '';
		}
		else if($(this).hasClass('select') || $(this).parent().parent().hasClass('select')){

		}
		else{
			$('.icheckbox_minimal').each(function() {
			if($(this).hasClass('checked')) {
				key.push($(this).children(':first').val());
			}
		});
		for (i = 0; i < key.length; i++) {
			if (i > 0) { query += '|';}
			query += key[i]
		}
		var table = $('#example1').DataTable();
		table.fnFilter(query, 2, true, false, true, true);
		key = [];
		query = '';
		}
		
	});


});