$(window).load(function() {	
	var act='';
	$('#content > ul > li').css({position:'absolute', display:'none'});
	$('#content > ul > li').find('.box1').css({height:'0'})
	
	$('#menu > li > a span').css({opacity:'0'})
	
	$('#menu > li > a').hover(function(){
		$(this).find(' > span').stop().animate({opacity:'1'},600);						   
	}, function(){
		if (!$(this).hasClass('active')) {
			$(this).find(' > span').stop().animate({opacity:'0'},600);						   
		}
	})
	
	$('#menu > li').each(function(num){
		$(this).data({num:num})
	})
	$('#content > ul > li').each(function(num){
		$(this).data({num:num})
	})
	
	if (location.hash.slice(0,3)=='#!/') {

		page=location.hash.slice(3);
		
		open_page('#'+page);
		fl=false;
	}
	if ((location.hash=='#')||(location.hash=='')) {

		open_page('#'+'About_Us');
		fl=true;
		$('#content').stop().animate({height:'377'})
	}
	$('a').click(function(){
		if ($(this).attr('href').slice(0,3)=='#!/') {
			page=$(this).attr('href').slice(3);	
			open_page('#'+page);
			
			return false;
		}
		if ($(this).attr('data-type')=='close') {

			close_page()	
		}
	})
	function open_page(page){
	
		location.hash='#!/'+page.slice(1);
		$('#menu a').removeClass('active').find(' > span').stop().animate({opacity:'0'},600);
		Cufon.replace('#menu a', { fontFamily: 'Ubuntu', hover:true });
		num=$(page).data('num');
		$('#menu > li').each(function(){					  
			if ($(this).data('num')==num) {
				$(this).find('> a').addClass('active').find('> span').stop().animate({opacity:'1'},600);
				Cufon.replace('#menu a', { fontFamily: 'Ubuntu', hover:true });
			}
		})
		fl=false;
		
		$('#content').stop().animate({height:'377'})
		if (act!='') {
		//	alert("hi");
			//$(act).css({display:'none'});
			//$(page).css({display:'block'});
			//alert(act);
			//alert(page);
			$('.disable').show();
						  setTimeout(function(){
   $(act).css({display:'block'}).find('.inner-content').hide();// or fade, css display however you'd like.
}, 0);
			$(act).find('.f-left').animate({left:"70px"}, 1000);
			 $(act).find('.f-right').animate({right:"156px"}, 1000);
			$(act).find('.tag-move').animate({top:"0px"}, 1000, function (){
			
			$(act).find('.box1').animate({top:"0px"}, 1000, function (){
			$(act).css({display:'none'});	
				//$(page).find('.box1').delay(1200).animate({top:"0px"}, 1000, function(){
			
			$(page).css({display:'block'}).find('.box1').animate({top:"345px"}, 1000, function (){
           //  $(page).css({display:'block'}).find('.box1').delay(400).animate({bottom:"345px"}, 1000);
		   $(page).find('.f-left').animate({left:"-70px"}, 1000);
			 $(page).find('.f-right').animate({right:"56px"}, 1000);
			 $(page).css({display:'block'}).find('.tag-move').animate({top:"345px"}, 1000, function (){
				
							  setTimeout(function(){
   $(page).css({display:'block'}).find('.inner-content').show();// or fade, css display however you'd like.
}, 0);
				
				 
					act=page;
					$('.disable').hide();
			//		abc=act;
					//alert("a"+abc);	
				});	
				});	
				});	
				});	
			/*alert(act);	
				$(act).css({display:'block'}).find('.box1').animate({top:"345px"}, 1000, function(){
					
				$(page).find('.tag-move').animate({top:"345px"}, 1000);	*/
				//alert("three"+page);
				//alert("four"+act);
			///		page=act;	
			//	});
			//	
			//})
		//	$(act).find('.tag-move').animate({top:"0px"}, 1000);
          //   $(act).find('.tag-move').animate({bottom:"0px"}, 1000);
		//	 $(act).find('.box1').delay(1200).animate({top:"0px"}, 1000);
         //   $(act).find('.box1').delay(1500).animate({bottom:"0px"}, 1000);
			
		//	$(act).find('.box1').animate({top:"345px"}, 1000);
          //  $(act).find('.box1').animate({bottom:"345px"}, 1000);
		//	$(act).find('.tag-move').delay(2400).animate({top:"345px"}, 1000);
           //  $(act).find('.tag-move').delay(1200).animate({bottom:"345px"}, 1000);
			} else {
			//alert("welcome");
			 $(page).css({display:'block'}).find('.box1').animate({top:"345px"}, 1000);
           //  $(page).css({display:'block'}).find('.box1').delay(400).animate({bottom:"345px"}, 1000);
			 $(page).css({display:'block'}).find('.tag-move').delay(1200).animate({top:"345px"}, 1000);
             $(page).css({display:'block'}).find('.f-left').delay(1200).animate({left:"-70px"}, 1000);
			 $(page).css({display:'block'}).find('.f-right').delay(1200).animate({right:"56px"}, 1000);
			 
			//  $(page).css({display:'block'}).find('.inner-content').hide();
			  setTimeout(function(){
   $(page).css({display:'block'}).find('.inner-content').show();// or fade, css display however you'd like.
}, 2400);
			/*$(page).css({display:'block'}).find('.box1').stop().animate({height:'100%'},700, 'easeOutCirc', function(){
				act=page;	
			});*/	
			act=page;	
		}
	}

	function close_page(page){
		
		$('#menu a').removeClass('active').find(' > span').stop().animate({opacity:'0'},900);
		
		Cufon.replace('#menu a', { fontFamily: 'Ubuntu', hover:true });
		location.hash='#';
		$(act).find('.box1').stop().animate({height:'0'},700,'easeOutCirc', function(){
			$(act).css({display:'none'});
			alert(act);
			act='';
			fl=true;
			$('#content').stop().animate({height:'668'})
		});	
		return false;
		
	}
})