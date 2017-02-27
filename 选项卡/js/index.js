window.onload = function(){
	var lIndex = 0;
	function timing(){
		setInterval(function(){
			(lIndex<4)?(lIndex++):(lIndex=0);
			$(".dot ul li").eq(lIndex).addClass("click").siblings().removeClass("click");
			$(".carousel img").eq(lIndex).fadeIn().siblings().fadeOut();
		},2000);
	};
	timing();
	
	// $("#nav ul li").click(function(){
	// 	$(this).addClass("nav1").siblings().removeClass("nav1");
	// 	var nav = $(this).index();
	// 	$("#content>ul>li").eq(nav).addClass("content1").siblings().removeClass("content1");
	// });

	$(function(){
		$("#nav ul li").each(function(index){
			$(this).click(function(){
				$(this).addClass("nav1").siblings().removeClass("nav1");
				$("#content>ul>li").eq(index).addClass("content1").siblings().removeClass("content1");
			})
		});
	})
	// 纯jquery
	
}