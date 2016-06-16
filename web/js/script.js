/*$(document).ready(function() { 
    $(".list-services .tooltips").easyTooltip();
}); */

$(window).load(function() {
});

$(document).ready(function () {
    $('#example').DataTable({
           "language": {
               "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/French.json"
           }
    });
    $('#amap').DataTable({
		"language": {
               "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/French.json"
           },
		fnDrawCallback: function () {
		  $('#amap tbody tr').click(function () {
			window.location.href = $(this).attr('href');
		  });

		}	
	});
});

//on fait 1000 pour 1s *20pour changer toutes les 20s
$('.carousel').carousel({
    interval: 1000*20
});

$('#ModalConnect').on('shown.bs.modal', function () {
    $('#username').focus();
})

$('#ModalLogout').on('shown.bs.modal', function () {
    $('#commit').focus();
})