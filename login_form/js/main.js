$(function() {

    $('.btn-link[aria-expanded="true"]').closest('.accordion-item').addClass('active');
  $('.collapse').on('show.bs.collapse', function () {
	  $(this).closest('.accordion-item').addClass('active');
	});

  $('.collapse').on('hidden.bs.collapse', function () {
	  $(this).closest('.accordion-item').removeClass('active');
	});

	$("#emp_login").click(function(){
		$(this).addClass('active');
		$("#user_login").removeClass('active');
		$(".emp_login").css('display','block');
		$(".user_login").css('display','none');
	});
	$("#user_login").click(function(){
		$(this).addClass('active');
		$("#emp_login").removeClass('active');
		$(".user_login").css('display','block');
		$(".emp_login").css('display','none');
	});
    

});