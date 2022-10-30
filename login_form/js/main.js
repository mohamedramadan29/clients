$(function() {

    $('.btn-link[aria-expanded="true"]').closest('.accordion-item').addClass('active');
  $('.collapse').on('show.bs.collapse', function () {
	  $(this).closest('.accordion-item').addClass('active');
	});

  $('.collapse').on('hidden.bs.collapse', function () {
	  $(this).closest('.accordion-item').removeClass('active');
	});

	$("#emp_login").click(function(){
		$(".emp_login").css('display','block');
		$(".user_login").css('display','none');
	});
	$("#user_login").click(function(){
		$(".user_login").css('display','block');
		$(".emp_login").css('display','none');
	});
    

});