$(function(){
		// var current_page = sessionStorage.getItem("current_page");
		var current_page;
		if(current_page){
			$(".tab-container .tab-item").each(function(index,item){
				if($(item).text()==current_page){
					$(item).addClass("active");
				}else{
					$(item).removeClass("active")
				}
			})
		}else{
			$(".tab-container .tab-item").eq(0).addClass("")
        }
        $(".tab-container .tab-item").hover(function(){
            $(this).addClass('has-sub');
        },function(){
            $(this).removeClass('has-sub');
        })
		//头部tab点击
		// switchTab($(".tab-container"),function(type,text){
		// 	// console.log(type,text);
		// 	// global.current_page = text;
		// 	sessionStorage.setItem('current_page',text)
		// })
		//左右浮动部分
		$(document).scroll(function(){
			var top = $(document).scrollTop();
			if(top>320){
				$('.section-fixed').addClass('fixed')
			}else{
				$('.section-fixed').removeClass('fixed')
			}
		});
		// 滚动插件
		var mySwiper = new Swiper ('.swiper-container', {
			direction: 'horizontal',
			loop: true,
			autoplay:4000,
			speed:500,
				    // 如果需要前进后退按钮
				    nextButton: '.swiper-button-next',
				    prevButton: '.swiper-button-prev',

				})
		// console.log($('.section-fixed').offset().top-$('body').scrollTop())
	})

	/**
	 * 标签切换公共方法
	 * @param dom jQuery对象
	 * @param callback 选择tab后调用的函数  type:点击tab的标志  text: 点击tab的文本内容
	 * @author ricky
	 */
	 function switchTab(dom,callback){
	 	dom.unbind('click').on('click','.tab-item',function(){
	 		var activeBool = $(this).hasClass("active");
	 		var type = $(this).attr("data-type");
	 		var text = $(this).text();
	 		if (!activeBool) {
	 			$(this).addClass("active");
	 			$(this).siblings(".tab-item").removeClass("active")
	 		}
	 		if(callback){
	 			callback(type,text);
	 		}
			//渲染模板
		})
	 }
