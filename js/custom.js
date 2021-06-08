
//$root_url = "https://abs-att-back.000webhostapp.com/api/";
let myRoot_url = "https://anagkazo.firstlovegallery.com/api/";

let x = {
	myDateInternal: new Date().toISOString().substring(0, 10),
	myDateListener: function(val) {},
	set myDate(val) {
		this.myDateInternal = val;
		this.myDateListener(val);
	},
	get myDate() {
		return this.myDateInternal;
	},
	registerListener: function(listener) {
		this.myDateListener = listener;
	}
}

x.registerListener(function(val) {
	//date has changed
	console.log("Does anything happen here?")
	console.log(`${myRoot_url}anagkazo/visionlectures?date=${x.myDate}`);
	fetchValues();

});

//$(".input-group.date").datepicker("setDate", new Date());
$('.input-group.date').datepicker({
	todayHighlight: true,
	autoclose: true,
	format:'yyyy-mm-dd'
}).datepicker("setDate",'now');

$('.input-group.date').datepicker()
    .on('changeDate', function(e) {
		x.myDate = e.date.toISOString().split('T')[0];
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




function getUsers() {
	$.ajax({
		url: `${myRoot_url}anagkazo/students/count`,
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

let visionTable;
function makeTables() {
	 visionTable = $('#vision-lecture-table').DataTable({
		"language": {
			"emptyTable": "Nobody Present for the Date selected"
		},
		"ajax" : `${myRoot_url}anagkazo/visionlectures?date=${x.myDate}`,
		"columns": [
			{ "data": "id" },
			{ "data": "admission_no" },
			{ "data": "name" },
			{ "data": "time"},
			{ "data": "batch" },
			{ "data": "date" }
		],
		rowReorder: {
			selector: 'td:nth-child(2)'
		},
		responsive: true,
		retrieve: true
	});



	$('#pillar-lecture-table').DataTable({
		"language": {
			"emptyTable": "Nobody's Present for the Date Selected"
		},
		"ajax" : `${myRoot_url}anagkazo/pillarlectures?date=${x.myDate}`,
		"columns": [
			{ "data": "id" },
			{ "data": "admission_no" },
			{ "data": "name" },
			{ "data": "time"},
			{ "data": "batch" },
			{ "data": "date" }
		],
		rowReorder: {
			selector: 'td:nth-child(2)'
		},
		responsive: true,
		retrieve: true
	});

	$('#reg-student-table').DataTable({
		"ajax" : `${myRoot_url}anagkazo/students`,
		"columns": [
			{ "data" : "id" },
			{ "data": "admission_no" },
			{ "data": "name" },
			{ "data": "batch" },
			{ "data": "created_at" }
		],
		rowReorder: {
			selector: 'td:nth-child(2)'
		},
		responsive: true
	});
}

function getVisionLectureScans(date) {
	
	vision_count_table = $.ajax({
		url: `${myRoot_url}anagkazo/attendance/vision?date=${date}`,
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
		url: `${myRoot_url}anagkazo/attendance/pillar?date=${date}`,
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
	console.log(x.myDate);
	getValues();

});

function getValues() {
	getVisionLectureScans(x.myDate);
	getPillarLectureScans(x.myDate);
	getUsers();
	makeTables();
}

function fetchValues(){
	
	getVisionLectureScans(x.myDate);
	getPillarLectureScans(x.myDate);
	
	visionTable.ajax.url(`${myRoot_url}anagkazo/visionlectures?date=${x.myDate}`);
	visionTable.ajax.reload();
	console.log(visionTable);
	
}