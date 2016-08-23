new Vue({
	el: '#app',

	data:{
		newCall:{
			vessel_name:'',branch_id:'',port_id:'',jetty_id:'',voyage_no:'',principal_id:'',employee_id:''
		},
		newBranch:{ branch_name:''},
		newJetty:{ jetty_name:''},
		newPort:{port_name:''},
		newPrincipal:{principal_name:''}
	},
	methods:{

	}
	
});

$(function () {
	$('[data-toggle="tooltip"]').tooltip()
});

$('#etadatetime').datetimepicker({
	format: 'YYYY-MM-DD HH:mm:ss'
});
$('#etbdatetime').datetimepicker({
	format: 'YYYY-MM-DD HH:mm:ss'
});
$('#etcdatetime').datetimepicker({
	format: 'YYYY-MM-DD HH:mm:ss'
});
$('#etddatetime').datetimepicker({
	format: 'YYYY-MM-DD HH:mm:ss'
});

$('#atadatetime').datetimepicker({
	format: 'YYYY-MM-DD HH:mm:ss'
});
$('#atbdatetime').datetimepicker({
	format: 'YYYY-MM-DD HH:mm:ss'
});
$('#atcdatetime').datetimepicker({
	format: 'YYYY-MM-DD HH:mm:ss'
});
$('#atddatetime').datetimepicker({
	format: 'YYYY-MM-DD HH:mm:ss'
});

//############# Alert ###############
$(document).ready( function() {
	$('#alert').delay(2000).fadeOut();
});



//###################################


//############# Delete POP UP ###############
$(function() {
	$('body').confirmation({
		selector: '[data-toggle="confirmation"]'
	});

	$('.confirmation-callback').confirmation({
		onConfirm: function() {  },
		onCancel: function() {  }
	});
});
//###################################
