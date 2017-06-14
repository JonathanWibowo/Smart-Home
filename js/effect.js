$("input[type=button]#lamp").click(function()
{
	var check_status = $(this).attr("value");

	if(check_status == "Off")
	{
		$(this).css({"backgroundColor": "#49ff64", "color": "#ffffff"});
		$(this).attr("value","On");
	}
	if(check_status == "On")
	{
		$(this).css({"backgroundColor": "#ff4949", "color": "#333333"});
		$(this).attr("value","Off");
	}
});