(function($)
{
	$(document).ready(function()
	{
		var $target = $('.form');
		function win_width()
		{
			if($(document).width()>479)
			{
				$target.show();
			}else 
			{
				$target.hide();
				$('.btn-less').hide();
			}
		}
		win_width()
		$(window).on('resize', function()
		{
			win_width();
		});
		$('.btn-less').bind("click", function(event)
		{
			event.preventDefault();
			$target.hide('slow');
			$('.btn-less').hide();
			$('.btn-show').show();
		});
		$('.btn-show').bind("click", function(event)
		{
			event.preventDefault();
			$target.show('slow');
			$('.btn-show').hide();
			$('.btn-less').show();
		});
		$target.bind("click", function(event)
		{
			event.preventDefault();
			$(this).toggle(400);
		});
	});
})(jQuery);

