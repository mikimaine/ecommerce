/**/
/* on load event */
/**/
$(function()
{
	$('body').append('<style>');
	
	$('#tuner-switcher').on('click', function()
	{
		$('#tuner').toggleClass('tuner-visible');
	});
	
	$('#color-picker').ColorPicker(
	{
		color: '#037cff',
		onShow: function(colpkr)
		{
			$(colpkr).fadeIn(300);
			return false;
		},
		onHide: function(colpkr)
		{
			$(colpkr).fadeOut(300);
			return false;
		},
		onChange: function (hsb, hex, rgb) {
			$('#color-picker div').css('backgroundColor', '#' + hex);
			$('#tuner-style span').text(hex);
			$('style').text($('#tuner-style').text());
		}
	});
	
	$('#tuner').on('click', '.layouts li', function()
	{
		$(this).addClass('active').siblings().removeClass('active');
		if( $(this).data('layout') == 'boxed' )
			$('.page').addClass('page-boxed');
		else
			$('.page').removeClass('page-boxed');
	});
});