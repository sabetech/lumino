
$root_url = "https://abs-att-back.000webhostapp.com/api/";
$myRoot_url = "https://anagkazo.firstlovegallery.com/api/";

//$(".input-group.date").datepicker("setDate", new Date());
$('.input-group.date').datepicker({
	todayHighlight: true,
	format:'yyyy-mm-dd'
}).datepicker("setDate",'now');

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




function getUsers() {
	$.ajax({
		url: $myRoot_url+'anagkazo/students/count',
		type: 'get',
		dataType: 'JSON',
		beforeSend: function () {
			$("#reg_students").addClass('hidden');
			$(".r_loading-spin").addClass('spin-big');
		},
		success: function (response) {
			$("#reg_students").html(response.count);

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
		],
		rowReorder: {
			selector: 'td:nth-child(2)'
		},
		responsive: true
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
		],
		rowReorder: {
			selector: 'td:nth-child(2)'
		},
		responsive: true
	});
	$('#reg-student-table').DataTable({
		"ajax" : $root_url+"read_students.php",
		"columns": [
			{ "data": "id" },
			{ "data": "student_id" },
			{ "data": "student_name" },
			{ "data": "student_class" },
			{ "data": "created_at" }
		],
		rowReorder: {
			selector: 'td:nth-child(2)'
		},
		responsive: true
	});
}

function getVisionLectureScans(date) {
	$.ajax({
		url: $myRoot_url+`anagkazo/attendance/vision?date=${date}`,
		type: 'get',
		dataType: 'JSON',
		beforeSend: function () {
			$("#vision-lecture-scan").addClass('hidden');
			$(".loading-spin").addClass('spin-big');
		},
		success: function (response) {
			$("#vision-lecture-scan").html(response.count);

			$(".loading-spin").addClass('hidden')
			$("#vision-lecture-scan").removeClass('hidden');
		}
	});
}

function getPillarLectureScans(date){
	$.ajax({
		url: $myRoot_url+`anagkazo/attendance/pillar?date=${date}`,
		type: 'get',
		dataType: 'JSON',
		beforeSend: function () {
			$("#pillar-lecture-scan").addClass('hidden');
			$(".loading-spin").addClass('spin-big');
		},
		success: function (response) {
			$("#pillar-lecture-scan").html(response.count);

			$(".loading-spin").addClass('hidden')
			$("#pillar-lecture-scan").removeClass('hidden');
		}
	});
}

$(document).ready(function () {
	let curdate = $('#date-val').val()

	getVisionLectureScans(curdate);
	getPillarLectureScans(curdate);
	getUsers();
	makeTables();

});