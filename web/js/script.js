/*$(document).ready(function() { 
    $(".list-services .tooltips").easyTooltip();
}); */

$(window).load(function() {
});

$(document).ready(function () {
    $('#example').DataTable({
		
    });
	
	 $('#amap').DataTable({
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

