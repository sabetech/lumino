$('#calendar').datepicker({
		});

!function ($) {
    $(document).on("click","ul.nav li.parent > a ", function(){          
        $(this).find('em').toggleClass("fa-minus");      
    }); 
    $(".sidebar span.icon").find('em:first').addClass("fa-plus");
}

(window.jQuery);
	$(window).on('resize', function () {
  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
})
$(window).on('resize', function () {
  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
})

$(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
	if(!$this.hasClass('panel-collapsed')) {
		$this.parents('.panel').find('.panel-body').slideUp();
		$this.addClass('panel-collapsed');
		$this.find('em').removeClass('fa-toggle-up').addClass('fa-toggle-down');
	} else {
		$this.parents('.panel').find('.panel-body').slideDown();
		$this.removeClass('panel-collapsed');
		$this.find('em').removeClass('fa-toggle-down').addClass('fa-toggle-up');
	}
})

$root_url = "https://abs-att-back.000webhostapp.com/api/";


function getUsers() {
	$.ajax({
		url: $root_url+'count_users.php',
		type: 'get',
		dataType: 'JSON',
		beforeSend: function () {
			$("#reg_students").addClass('hidden');
			$(".r_loading-spin").addClass('spin-big');
		},
		success: function (response) {
			$("#reg_students").html(response);

			$(".r_loading-spin").addClass('hidden')
			$("#reg_students").removeClass('hidden');
		}
	});
}

function makeTables() {
	$('#vision-lecture-table').DataTable({
		"language": {
			"emptyTable": "Everyone's absent!"
		},
		"ajax" : $root_url+"read_all_today_vision_lecture.php",
		"columns": [
			{ "data": "student_id" },
			{ "data": "student_name" },
			{ "data": "student_class" },
			{ "data": "timestamp" }
		]
	});
	$('#pillar-lecture-table').DataTable({
		"language": {
			"emptyTable": "Everyone's absent!"
		},
		"ajax" : $root_url+"read_all_today_pillar_lecture.php",
		"columns": [
			{ "data": "student_id" },
			{ "data": "student_name" },
			{ "data": "student_class" },
			{ "data": "timestamp" }
		]
	});
	$('#reg-student-table').DataTable({
		"ajax" : $root_url+"read_students.php",
		"columns": [
			{ "data": "id" },
			{ "data": "student_id" },
			{ "data": "student_name" },
			{ "data": "student_class" },
			{ "data": "created_at" }
		]
	});
}

function getScans() {
	$.ajax({
		url: $root_url+'count_today.php',
		type: 'get',
		dataType: 'JSON',
		beforeSend: function () {
			$("#today-scan").addClass('hidden');
			$(".loading-spin").addClass('spin-big');
		},
		success: function (response) {
			$("#today-scan").html(response);

			$(".loading-spin").addClass('hidden')
			$("#today-scan").removeClass('hidden');
		}
	});
}
$(document).ready(function () {
	getScans();
	getUsers();
	makeTables();




});