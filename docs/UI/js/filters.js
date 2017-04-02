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

	 $('.nstSlider').nstSlider({

    "left_grip_selector": ".leftGrip",
    "right_grip_selector": ".rightGrip",
    "value_bar_selector": ".bar",
    "value_changed_callback": function(cause, leftValue, rightValue,minValue,maxValue) {
    	table.fnDraw();
        var $container = $(this).parent();
        $container.find('.leftLabel').text(leftValue);
        $container.find('.rightLabel').text(rightValue);
        max =  $('.nstSlider').nstSlider('get_current_max_value');
        min =  $('.nstSlider').nstSlider('get_current_min_value');
        $('.leftLabel').html(min);
        $('.rightLabel').html(max);
          /*alert($val +"+"+$val2+"="+ $val + $val2);*/
          // table.fnFilter($val, 4, true, false, true, true);;
         table.fnDraw();
    }
        });
$.fn.dataTableExt.afnFiltering.push(
    function( oSettings, aData, iDataIndex ) {
        var iVersion = aData[4] == "-" ? 0 : aData[4]*1;
        if ( min == "" && max == "" )
        {
            return true;
        }
        else if ( min == "" && iVersion < max )
        {
            return true;
        }
        else if ( min < iVersion && "" == max )
        {
            return true;
        }
        else if ( min < iVersion && iVersion < max )
        {
            return true;
        }
        return false;
    }
);
});