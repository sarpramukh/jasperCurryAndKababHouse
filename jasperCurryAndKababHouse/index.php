
<!DOCTYPE html>
	
<head>
		<title></title>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta http-equiv="X-UA-Compatible" content="IE=8">
        <meta http-equiv="X-UA-Compatible" content="IE=9">
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
		<!-- <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="all"> -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
			<link rel="stylesheet" href="css/lightbox.css" >
		<script type="text/javascript" src="js/jquery-1.6.js" ></script>
        <script type="text/javascript">
            $(document).ready(function(){
                    $.get('passgenerator.php', function(data) {
                        $('[name=generate]').val(data);
                    });
            });
        </script>
        <script language="javascript">


       function SendEmail()
       {
		   var code=document.getElementById('code').value;
		   var generate=document.getElementById('generate').value;
		    var name=document.getElementById('name').value;
			    var mail=document.getElementById('email').value;
				    var message=document.getElementById('msg').value;
					if(mail==''){
						alert('Please Enter The Email');
						return false;
						document.getElementById('email').focus();
					}
					if(code==''){
						alert('Please Enter The Code');
						return false;
						document.getElementById('code').focus();
					}
					if(code!=generate){
						alert('Please Enter The Corrrect Code');
						return false;
						document.getElementById('code').focus();
					}
					else{
					var data1 = "name=" + name + "&mail=" + mail + "&message=" + message;
		// window.location.assign("index.php?name="+name+ "&mail=" + mail+ "&message=" + message);
		$.ajax({
     type: "POST",
     url: "mail.php",
     data: {name:name,mail:mail,message:message},
     success: function(data){
          //alert('Success: ' + data);
          //$(".email-us").html(data);     
		  $('.email-us').html("Your form is successfully Submitted. We will contact you shortly.<br/> Thanks to contact us. ").fadeIn('slow').delay(3000).fadeOut('slow');
		  $('#name').val('');
		  $('#email').val('');
		  $('#msg').val('');
		  $('#code').val('');
		 // $("email-us").hide(5000);
     },
     error: function(data) {
           //you would not show the real error to the user - this is just to see if everything is working
          alert('Sendmail failed possibly php script: ' + data);
     }
});
					}
               }
</script>
        
        <script>
		
    $(function(){
       jQuery("#form").click(function(e) {    

    var code = jQuery("#code").val(); 
    var name = jQuery("#name").val(); 
    var mail = jQuery("#email").val();  
    var message = jQuery("#msg").val(); 
	
	var data1 = "name=" + name + "&mail=" + mail + "&message=" + message+ "&code=" + code;
//or however u want to format your data

$.ajax({
     type: "POST",
     url: "mail.php",
     data: data1,
	 dataType  : 'json',	
     success: function(data){
          alert('Success: ' + data);
          $(".email-us").html("<div id='email-sent'><p>Thank you for the message.</p><p>We will reply as soon as possible. PHP Script's return result: " + data + "</p></div>");     
     },
     error: function(errormessage) {
           //you would not show the real error to the user - this is just to see if everything is working
          alert('Sendmail failed possibly php script: ' + errormessage);
     }
});
return false;         
    });
    });
   
		</script> 
<script type="text/javascript">
/******************************************
* Scrollable content script II- © Dynamic Drive (www.dynamicdrive.com)
* Visit http://www.dynamicdrive.com/ for full source code
* This notice must stay intact for use
******************************************/

// modified 17-October-2011


function move(id,spd){
var obj=document.getElementById(id),max=-obj.offsetHeight+obj.parentNode.offsetHeight,top=parseInt(obj.style.top);
if ((spd>0&&top<=0)||(spd<0&&top>=max)){
obj.style.top=top+spd+"px";
move.to=setTimeout(function(){ move(id,spd); },5);
}
else {
obj.style.top=(spd>0?0:max)+"px";
}
}

</script>
 <script type="text/javascript">
$(document).ready(function() {
		var url = "index-2.html#!/reservations"; 
	$("#rcom").click(function() {
    // show the mask
    $("#mask").fadeTo(500, 0.50);

    // show the popup
    $("#main_content").delay(1000).animate({top:"65px"}, 1000);
	
				  setTimeout(function(){
   $('.menu_content').show();// or fade, css display however you'd like.
}, 2400);
	
	
	})
		$("#close").click(function() {
    // show the mask
	$('.menu_content').hide();
	 $("#main_content").delay(100).animate({top:"-465px"}, 1000);
    $("#mask").hide();

	})
	
			$("#reservations_close").click(function() {
    // show the mask
	$('.menu_content').hide();
	 $("#main_content").delay(100).animate({top:"-465px"}, 1000);
    $("#mask").hide();
	})
	
	
});

$(document).ready(function() {
$("#restaurant").click(function() {
    // show the mask
    $("#mask").fadeTo(500, 0.50);

    // show the popup
    $("#main_content").delay(1000).animate({top:"65px"}, 1000);
	
				  setTimeout(function(){
   $('.restaurant_body').show();// or fade, css display however you'd like.
}, 2400);
	
	
	})
		$("#restaurant_close").click(function() {
    // show the mask
	$('.restaurant_body').hide();
	 $("#main_content").delay(100).animate({top:"-465px"}, 1000);
    $("#mask").hide();

    // show the popup
   
	})
});


$(document).ready(function() {
$("#ss").click(function() {
    // show the mask
    $("#mask").fadeTo(500, 0.50);

    // show the popup
    $("#main_content").delay(1000).animate({top:"65px"}, 1000);
	
				  setTimeout(function(){
   $('.ss_body').show();// or fade, css display however you'd like.
}, 2400);
	
	
	})
		$("#ss_close").click(function() {
    // show the mask
	$('.ss_body').hide();
	 $("#main_content").delay(100).animate({top:"-465px"}, 1000);
    $("#mask").hide();

    // show the popup
   
	})
});

$(document).ready(function() {
var $appendElem;	
$(".click").click(function(){
	//	alert(this.id);
    // show the mask
	//alert(i);
   $("#mask1").fadeTo(500, 0.50);
   var src = $('img[alt="example'+this.id+'"]').attr('src');
  // $(".zoom_img").show().append('<img src="'+src+'">');
   $(".zoom_img").show();
    $appendElem = $('<img src="'+src+'" class="img-border" width="745" height="530">');
   
   $appendElem.appendTo('.zoom_img');
 // alert("source of image with alternate text = example - " + src);
})

$(".click1").click(function(){
	//	alert(this.id);
    // show the mask
	//alert(i);
   $("#mask1").fadeTo(500, 0.50);
   var src = $('img[alt="example'+this.id+'"]').attr('src');
  // $(".zoom_img").show().append('<img src="'+src+'">');
   $(".zoom_img").show();
  $appendElem = $('<img src="images/gallery/'+this.id+'.jpg" class="img-border" width="745" height="530">');
   $appendElem.appendTo('.zoom_img');
 // alert("source of image with alternate text = example - " + src);
})

$("#zoom_close").click(function() {
	$('.zoom_img').hide();
	$("#mask1").hide();
    $appendElem.remove();
	// show the popup
	})
});




$(function(){
   // $(".ui-tabs-panel").hide();
    
    $(".ul-buttom.ul-buttom-hide").children().click(function () {
        var divname = $(this).attr('href');
        $(divname).show("slow").siblings().hide("slow");
    });
});

   </script>       


<style type="text/css">




.ball_holder{
	width:125px;
	height:129px;
	position:relative;
}

.tag-move {
  position:absolute;
}


.click {
	cursor: pointer;
}

#mask{
    position: absolute;
    top: 0;
    left: 0;
	bottom:0;
    width: 100%;
    height: 627px;
    background-color: #572e11;
    display: none;
    z-index: 100;
}

#mask1{
    position: absolute;
    top: 0;
    left: 0;
	bottom:0;
    width: 100%;
    height: 650px;
    background-color: #3c1c05;
    display: none;
    z-index: 103;
}

.ui-tabs-hide {
    display : none;
}


</style>       
        
        
		<script type="text/javascript" src="js/cufon-yui.js"></script>
		<script type="text/javascript" src="js/cufon-replace.js"></script>
  		<script type="text/javascript" src="js/Ubuntu_400.font.js"></script>
  		<script type="text/javascript" src="js/Ubuntu_700.font.js"></script>
		<script type="text/javascript" src="js/script.js" ></script>
		<script type="text/javascript" src="js/pages.js"></script>
        
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/tabs.js"></script>
		<!-- <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> -->
         
		<!--[if lt IE 9]>
			<script type="text/javascript" src="js/html5.js"></script>
		<![endif]-->
		<!--[if lt IE 7]>
			<div style='clear:both;text-align:center;position:relative'>
				<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"  alt="" /></a>
			</div>
		<![endif]-->
     
<script src="../html5shiv.googlecode.com/svn/trunk/html5.js"></script>





	</head>
	<body id="page1">
    <script>	
		if (screen.width <= 700) {
			window.location = "http://jaspercurry.worldwatch.webatu.com/m/";
		}
	</script>
      <div id='mask'></div>
      <div id='mask1'></div>
      
       <div class="zoom_img" style="display:none;">
 <a href="#" id="zoom_close"><img src="images/close.png"  style="margin-top: -21px; margin-right: -12px;"/></a>
 </div>
      
      
		<div class="spinner"></div>
        
	<!--	<div id="bgSlider"></div>-->
		<div class="extra">
        <!-- <div id="open_hour" style="position: relative;margin: 0 auto;width: 470px;"><img src="images/hours.png" style="position: absolute;top: -25px;right:-100%"/></div>
		 -->	<div class="main">
				<div class="box">
<!-- header -->
					<header>
						<h1><a href="index.html" id="logo"><img src="images/jcakhlogo.png" width="280px" height="100px" alt="Logo Image"/></a></h1>
						<nav>
							<ul id="menu">
							<li><a href="#!/About_Us">About Us</a></li>
								<li id="rcom"><a href="#">Our Menu</a></li>
								<li><a href="#!/Gallery">Gallery</a></li>
								<li><a href="#!/Contact">Contact Us</a></li>
                                <li><a href="#!/Locate_Us">Locate Us</a></li>
							</ul>
                            <div class="disable" style="width: 280px;height: 344px;position: absolute;top: 100px; display:none;"></div>
						</nav>
                       <div id="open_hour" style="position: relative;margin: 0 auto;width: 470px;"><img src="images/hours.png" style="position: absolute;top:-30px"/></div>
		
					</header>

                                      
					<article id="content">
						<img src="images/letter-top.png" style="margin-top: -35px; margin-left:62px;position: absolute;z-index: 1;" />
                        
						<ul>
							<li id="About_Us">
                            
								<div class="box1" style="position:absolute; margin-top:-347px;">
                                <img src="images/flower-left.png" class="f-left" style="left:45px;position:absolute;z-index:0;">
                                 <img src="images/flower-right.png" class="f-right" style="right:160px;position:absolute;z-index:0;">
									<div class="inner" style="height:348px;">
                                        <div class="inner-content" style="display:none;">
                                        	<h3>About Us</h3>
                                           
                                            <div style="width:390px; height:261px;">
                                               <div style="position:relative;height:261px; width:360px; float:left;overflow:hidden">
                                               <div id="para1" style="position:absolute;left:0;top:0">
                                               <p id="para">Jasper curry and kabab house is first Indian restaurant opened in Jasper. This restaurant placed at one of the best view of jasper. This restaurant has best patio view of rocky mountain. Restaurant opened by owner and main shef Gopal shelke in May, 2015. <br/><br/>
At Jasper curry and kabab house, we offer you an environment which we hope will create a distinctive dining experience while you explore the finest traditional indian cuisine. The patio seating is make good environment of nature. We also offer a variety of authentic indian dishes, so that your experience is authentic.<br/><br/>
With specially selected traditional indian favorites cooked in the right blend of species and minimal oil we hope to recreate the magic of age old delicacies for you. The kitchen has an interactive open kitchen where the guests can observe the chefs work their still on the tandoor to create the dishes being ordered.<br/><br/>
Owner and main shef has an seven year experience of making authentic indian cuisines at Jasper's one of the best lodges -Fair mount lodges. Now, he opened his own specially authentic indian restaurant in Jasper's main area. so, tourists can enjoy indian cusines at one place and experience various dishes of indian foods. <br/><br/>
</p>
</div>
</div>
<div style="width:13px; height:261px; float:right;">

<a href="#" onMouseover="move('para1',1)" onMouseout="clearTimeout(move.to)"><img src="images/up.png" border=0></a>
<div style=" background:url(images/dots.png) repeat; height:223px;"></div>
 <a href="#" onMouseover="move('para1',-1)" onMouseout="clearTimeout(move.to)"><img src="images/down.png" border=0></a>



</div>
<div style="clear:both;"></div>
</div>

                                         </div>
                                    	
									</div>
                                   
                                    <img src="images/letter-bottom.png">
                                    </div>
                                    <div class="tag" style="position:absolute; margin-top:-347px;"><img src="images/tagline.png" class="tag-move" style="margin-left:62px;"></div>
 							</li>
							<li id="Our_Menu">
                            
								<div class="box1" style="position:absolute; margin-top:-347px;">
                                <img src="images/flower-left.png" class="f-left" style="left:45px;position:absolute;z-index:0;">
                                 <img src="images/flower-right.png" class="f-right" style="right:160px;position:absolute;z-index:0;">
									<div class="inner" style=" height:348px;">
                                    	<div class="inner-content" style="display:none;">
                                        	<h3>Our Menu</h3>
                                    
                                         </div>
									</div>
                                    <img src="images/letter-bottom.png">
                                </div>
                                <div class="tag" style="position:absolute; margin-top:-347px;"><img src="images/tagline.png" class="tag-move" style="margin-left:62px;"></div>
							</li>
							<li id="Gallery">
								<div class="box1" style="position:absolute; margin-top:-347px;">
                                <img src="images/flower-left.png" class="f-left" style="left:45px;position:absolute;z-index:0;">
                                 <img src="images/flower-right.png" class="f-right" style="right:160px;position:absolute;z-index:0;">
									<div class="inner" style=" height:348px;">
                                    	<div class="inner-content" style="display:none;">
                                        	<h3>Gallery</h3>
                                           
                                             <ul id="menu1">
								                <li id="restaurant"><a href="#">Restaurant</a></li>
												<li id="ss"><a href="#">Staff Service</a></li>
											</ul>
                            
                                         </div>
									</div>
                                    <img src="images/letter-bottom.png">
                                    </div>
                                    <div class="tag" style="position:absolute; margin-top:-347px;"><img src="images/tagline.png" class="tag-move" style="margin-left:62px;"></div>
							</li>
						
                        
							<li id="Contact">
								<div class="box1" style="position:absolute; margin-top:-347px;">
                                <img src="images/flower-left.png" class="f-left" style="left:45px;position:absolute;z-index:0;">
                                 <img src="images/flower-right.png" class="f-right" style="right:160px;position:absolute;z-index:0;">
									<div class="inner" style=" height:348px;">
                                    	<div class="inner-content" style="display:none;">
                                        	<h3>Contact Us</h3>
											<div> <h4  class="email-us"></h4> </div>
                                             <form action="#" method="post" >
                                           <table style="color:#572e11; margin-top:40px; margin-left:40px;">
										    
                                           <tr>
                                           	<td align="right"><b>Name</b></td>
                                            <td><input type="text" name="name" id="name" class="textbox"/></td>
                                           </tr>
                                            <tr>
                                           	<td align="right"><b>Email</b></td>
                                            <td><input type="text" name="email" id="email" class="textbox"/></td>
                                           </tr>
                                           <tr>
                                           	<td align="right"><b>Message</b></td>
                                            <td><textarea name="msg" class="textarea" id="msg"></textarea></td>
                                           </tr>
                                            <tr>
                                           	<td align="right"><b>Code</b></td>
                                            <td><input type="text" name="code"  id ="code" class="textbox" style="width:60px;"/> <!--<img src="images/code.jpg"/>-->
                                             <input type="text" id="generate" name="generate"  class="textbox1"  >
                                           
                                            </td>
                                           </tr>
                                           <tr>
                                           	<td></td>
                                            <td align="right"><img src="images/send.png" onclick="SendEmail();"/> </td>
                                           </tr>
                                           </table>
                                           </form>
                                         </div>
									</div>
                                    <img src="images/letter-bottom.png">
                                    </div>
                                    <div class="tag" style="position:absolute; margin-top:-347px;"><img src="images/tagline.png" class="tag-move" style="margin-left:62px;"></div>
							</li>
							<li id="Locate_Us">
								<div class="box1" style="position:absolute; margin-top:-347px;">
                                <img src="images/flower-left.png" class="f-left" style="left:45px;position:absolute;z-index:0;">
                                 <img src="images/flower-right.png" class="f-right" style="right:160px;position:absolute;z-index:0;">
									<div class="inner" style=" height:348px;">
                                    	<div class="inner-content" style="display:none;">
                                        	<h3>Locate Us</h3>
                                    			
                                                 <div class="contact-info">
                                                <b>Jasper Curry and Kabab House</b><br/>
												<div style="margin-bottom:5px;">PO Box 667,<br/>632 Connought Drive <br/> jasper,AB<br/>
												T0E 1E0 <br/> Tel : +1 780 852 2227
												</div>
												
												<div style="margin-bottom:5px;">For further information please email us at
												<strong>jaspercurry@outlook.com</strong></div>
												
												<div class="social" style="margin-top:6px;">
													Connect with us on : <a href="https://www.facebook.com/jaspercurryandkabab" target="_blank">
																			<img src="images/fb.png" width="80px" height="20px" alt="Fb logo" />Facebook</a>
												</div>
												<div style="float:right;">
                                             <iframe width="390" height="102" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=632%20Connaught%20Drive%2C%20Jasper%2C%20AB%2C%20Canada&key=AIzaSyBK7EOLZ30EVrmxWN53hk20dV6ApOZmvko" allowfullscreen></iframe>
                                             
                                             </div>
                                             </div>
                                            
                                         </div>
									</div>
                                    <img src="images/letter-bottom.png">
                                    </div>
                                    <div class="tag" style="position:absolute; margin-top:-347px;"><img src="images/tagline.png" class="tag-move" style="margin-left:62px;"></div>
							</li>
						</ul>
					</article>
<!-- / content -->
				</div>
			</div>
			<div class="block"></div>
		</div>
	

        
  <div id="main_content">
  
  <div class="menu_content" style="display:none;">
      <h3>Our Menu</h3>
  
  <div id="prodsmiddle">
 <li class="ul-buttom ul-buttom-hide"><a href="#Appetizers">Appetizers</a></li>
    <li class="ul-buttom ul-buttom-hide"><a href="#Biryani">Our Biryani</a></li>
    <li class="ul-buttom ul-buttom-hide"><a href="#Additions">Additions</a></li>
    <li class="ul-buttom ul-buttom-hide"><a href="#veg-curry">Our Vegetarion Curries</a></li>
	<li class="ul-buttom ul-buttom-hide"><a href="#non-veg-curry">Our Non-Veg Curries</a></li>
    <li class="ul-buttom ul-buttom-hide"><a href="#Kababs">Our Kababs</a></li>
    <li class="ul-buttom ul-buttom-hide"><a href="#Desserts">Desserts</a></li>
    <li class="ul-buttom ul-buttom-hide"><a href="#wine">Wine</a></li>
    <li class="ul-buttom ul-buttom-hide"><a href="#beer">Beer</a></li>
    <li class="ul-buttom ul-buttom-hide"><a href="#NA-drinks">Non Alcoholic Drinks</a></li>


    </div>
  
      <div id="bigpanel">
    <div id="tabs">
    <div id="Appetizers" class="ui-tabs-panel"><!-------------------------------menu start-------------------------->
    
    
    <div style="position:relative;height:261px; width:425px; float:left;overflow:hidden">
    <div id="para2" style="position:absolute;left:0;top:0">
     <p id="para">     
<div class="menu">
<ul>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Soups and Salads</strong><br><br>   
<li>
<div class="menu-in-d1">Mix vegetable pakora<div class="menu-in-d1-1"> $6</div></div>
<!-- <div class="menu-in-d2">Fresh organic tomato soup served with croutons…</div> -->
</li>
<li>
<div class="menu-in-d1">Onion Pakora<div class="menu-in-d1-1"> $5</div></div>
<div class="menu-in-d2">Fresh vegetables and sweet corn…</div>
</li>
<li>
<div class="menu-in-d1">Chicken Pakora<div class="menu-in-d1-1"> $7.5</div></div>
<div class="menu-in-d2">Rich home-made butter mushroom soup…</div>
</li>
<li>
<div class="menu-in-d1">Veg Samosa ( 2 Pieces )<div class="menu-in-d1-1"> $6</div></div>
<div class="menu-in-d2">Shreds of chicken breast in a rich sweet corn soup…</div>
</li>
<li>
<div class="menu-in-d1">Chicken Samosa ( 2 Pieces ) <div class="menu-in-d1-1"> $8</div></div>
<div class="menu-in-d2">Rich home-made chicken soup…</div>
</li>
<li>
<div class="menu-in-d1">Green Salad <div class="menu-in-d1-1"> $4</div></div>
<div class="menu-in-d2">Assorted lamb trotters – Chef’s specialty…</div>
</li>
<li>
<div class="menu-in-d1">Medu Wada ( 3 Pieces )<div class="menu-in-d1-1"> $6</div></div>
<div class="menu-in-d2">Deep fried white lentil, tempered with curry leaves, musterd seeds and ginger</div>
</li>
</ul>
</div>




</p>
</div>
</div>
    <div style="width:13px; height:260px; float:right;">
     <a href="#" onMouseover="move('para2',1)" onMouseout="clearTimeout(move.to)"><img src="images/up.png" border=0></a>
     <div style=" background:url(images/dots.png) repeat; height:222px;"></div>
     <a href="#" onMouseover="move('para2',-1)" onMouseout="clearTimeout(move.to)"><img src="images/down.png" border=0></a>
    </div>
    
    
    </div>  
    <div id="Biryani" class="ui-tabs-panel ui-tabs-hide">
    
<div style="position:relative;height:261px; width:425px; float:left;overflow:hidden">
<div id="para3" style="position:absolute;left:0;top:0">
<p id="para">
<div class="menu">
<ul> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Our Biryani</strong><br><br>                                           
<li>
<div class="menu-in-d1">Chicken Biryani<div class="menu-in-d1-1"> $18</div></div>
<div class="menu-in-d2">Chicken marinated for 24 hours and layered with flavoured basmati rice finished in the oven</div>
</li>
<li>
<div class="menu-in-d1">Lamb Biryani<div class="menu-in-d1-1"> $20</div></div>
<div class="menu-in-d2">Lamb marinated with mint and cilantro sauce then tossed in flavoured basmati rice</div>
</li>
</ul>
</div>
</p>
</div>
</div>
    <div style="width:13px; height:260px; float:right;">
     <a href="#" onMouseover="move('para3',1)" onMouseout="clearTimeout(move.to)"><img src="images/up.png" border=0></a>
     <div style=" background:url(images/dots.png) repeat; height:222px;"></div>
     <a href="#" onMouseover="move('para3',-1)" onMouseout="clearTimeout(move.to)"><img src="images/down.png" border=0></a>
    </div>
    
    
    
    </div>
    <div id="Additions" class="ui-tabs-panel ui-tabs-hide">
    
    <div style="position:relative;height:261px; width:425px; float:left;overflow:hidden">
    <div id="para4" style="position:absolute;left:0;top:0">
<p id="para">
<div class="menu">
<ul>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Additions</strong><br><br>
<li>
<div class="menu-in-d1">Steamed rice<div class="menu-in-d1-1"> $3</div></div>

</li>
<li>
<div class="menu-in-d1">Butter Naan<div class="menu-in-d1-1">$3.50</div></div>
</li>
<li>
<div class="menu-in-d1">Garlic Naan<div class="menu-in-d1-1"> $3.95</div></div>
</li>
<li>
<div class="menu-in-d1">Tomato Chutney<div class="menu-in-d1-1"> $3</div></div>
</li>
<li>
<div class="menu-in-d1">Tamaring and Date Chutney<div class="menu-in-d1-1"> $3</div></div>
</li>
<li>
<div class="menu-in-d1">Cilantro and Mint Chutney<div class="menu-in-d1-1"> $3</div></div>
</li>
<li>
<div class="menu-in-d1">Raita<div class="menu-in-d1-1"> $3</div></div>
</li>
<li>
<div class="menu-in-d1">Spicy Pickle<div class="menu-in-d1-1"> $3</div></div>
</li>
<li>
<div class="menu-in-d1">Yogurt<div class="menu-in-d1-1"> $3</div></div>
</li>
<li>
<div class="menu-in-d1">Green Salad<div class="menu-in-d1-1"> $3</div></div>
</li>
</ul>
</div>
</p>
</div>
</div>
    <div style="width:13px; height:260px; float:right;">
     <a href="#" onMouseover="move('para4',1)" onMouseout="clearTimeout(move.to)"><img src="images/up.png" border=0></a>
     <div style=" background:url(images/dots.png) repeat; height:222px;"></div>
     <a href="#" onMouseover="move('para4',-1)" onMouseout="clearTimeout(move.to)"><img src="images/down.png" border=0></a>
    </div>
    
    
    
    </div>
    <div id="veg-curry" class="ui-tabs-panel ui-tabs-hide">    
    <div style="position:relative;height:261px; width:425px; float:left;overflow:hidden">
    <div id="para5" style="position:absolute;left:0;top:0">
     <p id="para">
<div class="menu">
<ul>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Our Vegetarian Curries</strong><br><br>

<li>All our curries will come with rice, naan( bread ), pickle and papad</li>

<li>
<div class="menu-in-d1">Paneer Makhani [GF] <div class="menu-in-d1-1"> $14.50</div></div>
<div class="menu-in-d2">Indian cottage cheese cooked in tomato cream sauce</div>
</li>
<li>
<div class="menu-in-d1">Chana Masala [Vegan] [GF] <div class="menu-in-d1-1"> $14.50</div></div>
<div class="menu-in-d2">Chickpeas cooked with a combination of tomatoes , herbs and spices</div>
</li>
<li>
<div class="menu-in-d1">Mixed Vegetable( Dry ) [Vegan] [GF] <div class="menu-in-d1-1">  $14.50</div></div>
<div class="menu-in-d2">Fresh vegetable cooked with onion,tometoes and authentic indian spices</div>
</li>
<li>
<div class="menu-in-d1">Dal<div class="menu-in-d1-1">$12</div></div>
<div class="menu-in-d2">Lentil tempered with cumin, musterd seeds and curry leaves</div>
</li>
<li>
<div class="menu-in-d1">Baigan Bhartha<div class="menu-in-d1-1">  $14</div></div>
<div class="menu-in-d2">Eggplant roasted in clay oven then finished with onion,tomato and cilantro</div>
</li>
</ul>
</div>
</p>
</div>
</div>
    <div style="width:13px; height:260px; float:right;">
     <a href="#" onMouseover="move('para5',1)" onMouseout="clearTimeout(move.to)"><img src="images/up.png" border=0></a>
     <div style=" background:url(images/dots.png) repeat; height:222px;"></div>
     <a href="#" onMouseover="move('para5',-1)" onMouseout="clearTimeout(move.to)"><img src="images/down.png" border=0></a>
    </div> 
    </div>
   <div id="non-veg-curry" class="ui-tabs-panel ui-tabs-hide">     
    <div style="position:relative;height:261px; width:425px; float:left;overflow:hidden">
    <div id="para6" style="position:absolute;left:0;top:0">
     <p id="para">
     <div class="menu"><ul>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Non-Veg Curries</strong><br><br>
<li>
<div class="menu-in-d1">Butter Chicken [GF]<div class="menu-in-d1-1">$16.50</div></div>
<div class="menu-in-d2">Herb marinated chicken simmered in tomato cream sauce</div>
</li>
<li>
<div class="menu-in-d1">Kadai Chicken  [GF]<div class="menu-in-d1-1">$16.50</div></div>
<div class="menu-in-d2">Chicken coocked with tomatoes and bell peppers	</div>
</li>
<li>
<div class="menu-in-d1">Goat Curry [GF]<div class="menu-in-d1-1">$16.95</div></div>
<div class="menu-in-d2">Herb marinated goat cooked in onion tomato sauce</div>
</li>
<li>
<div class="menu-in-d1">Lamb Korma [GF]<div class="menu-in-d1-1">$17.50</div></div>
<div class="menu-in-d2">Boneless lamb cooked in rich cream sauce</div>
</li>
<li>
<div class="menu-in-d1">Lamb Vinadaloo ( Spicy )<div class="menu-in-d1-1">$19.50</div></div>
<div class="menu-in-d2">Traditionally is a spicy dish made with coconut,vinegar and lots of hot red chilli peppers</div>
</li>
<li>
<div class="menu-in-d1">Chicken Curry ( Spicy )<div class="menu-in-d1-1">$16.50</div></div>
<div class="menu-in-d2">Chicken stewed in onion tomato sauce, simmered with aromatic indian spices</div>
</li>
</ul>
</div>
</p>
</div>
</div>
    <div style="width:13px; height:260px; float:right;">
     <a href="#" onMouseover="move('para6',1)" onMouseout="clearTimeout(move.to)"><img src="images/up.png" border=0></a>
     <div style=" background:url(images/dots.png) repeat; height:222px;"></div>
     <a href="#" onMouseover="move('para6',-1)" onMouseout="clearTimeout(move.to)"><img src="images/down.png" border=0></a>
    </div>
    
    
    </div>
    <div id="Kababs" class="ui-tabs-panel ui-tabs-hide">     
    <div style="position:relative;height:261px; width:425px; float:left;overflow:hidden">
    <div id="para7" style="position:absolute;left:0;top:0">
     <p id="para">
<div class="menu">
<ul>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Our Kababs</strong><br><br>
<li>
<div class="menu-in-d1">Paneer (cottage cheese) Tikka<div class="menu-in-d1-1">$17.95</div></div>
<div class="menu-in-d2">Fresh cottage cheese infused with herbs and spices, wrapped in gram flour marinade and glazed golden in the clay oven</div>
</li>
<li>
<div class="menu-in-d1">Tandoori Tiger Prawns<div class="menu-in-d1-1">$18.50</div></div>
<div class="menu-in-d2">Tiger prawn marinated in ginger and lemon overnight and cooked in the clay oven. Served with house made garlic bread</div>
</li>
<li>
<div class="menu-in-d1">Tandoori Pomfret<div class="menu-in-d1-1">$17.95</div></div>
<div class="menu-in-d2">Whole pomfret fish slit,filled with goan spices and cooked in the clay oven</div>
</li>
<li>
<div class="menu-in-d1">Murg Malai Tikka<div class="menu-in-d1-1">$17.50</div></div>
<div class="menu-in-d2">Morsels of chicken marinated in yogurt,cashew nut paste and cheese and cooked in the clay oven</div>
</li>
<li>
<div class="menu-in-d1">Tandoori Chicken<div class="menu-in-d1-1">$17.00</div></div>
<div class="menu-in-d2">Chicken marinated overnight in ginger,garlic,fenugreek,yogurt and indian spices</div>
</li>
<li>
<div class="menu-in-d1">Lamb Chapli Kabab<div class="menu-in-d1-1">$18.50</div></div>
<div class="menu-in-d2">The traditional mince of lamb grab with the singing flavour of coriander,mint and spring onions</div>
</li>
<li>
<div class="menu-in-d1">Chicken Tikka<div class="menu-in-d1-1">$17.50</div></div>
<div class="menu-in-d2">Boneless chicken thighs marinated overnight in indian spices then cooked in the clay oven</div>
</li>
<li>
<div class="menu-in-d1">Jain Thali<div class="menu-in-d1-1">$22</div></div>
<div class="menu-in-d2">Dal Tadka<br/>Mix Vegetable(Dry)<br/>Paneer Makhani<br/>Rice<br/>Naan,Papad,Pickle</div>
</li>
</ul>
</div>
</p>
</div>
</div>
    <div style="width:13px; height:260px; float:right;">
     <a href="#" onMouseover="move('para7',1)" onMouseout="clearTimeout(move.to)"><img src="images/up.png" border=0></a>
     <div style=" background:url(images/dots.png) repeat; height:222px;"></div>
     <a href="#" onMouseover="move('para7',-1)" onMouseout="clearTimeout(move.to)"><img src="images/down.png" border=0></a>
    </div>
    
    
    </div>
    <div id="Desserts" class="ui-tabs-panel ui-tabs-hide">    
    <div style="position:relative;height:261px; width:425px; float:left;overflow:hidden">
    <div id="para8" style="position:absolute;left:0;top:0">
     <p id="para">
<div class="menu">
<ul>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Desserts</strong><br><br>
<li>
<div class="menu-in-d1">Gulab Jamun<div class="menu-in-d1-1">$5</div></div>
<div class="menu-in-d2">Cheese dumpling soaked in sugar syrup</div>
</li>
<li>
<div class="menu-in-d1">Rasmalai<div class="menu-in-d1-1">$4.5</div></div>
</li>
<li>
<div class="menu-in-d1">Mango Payasum<div class="menu-in-d1-1">$4.5</div></div>
<div class="menu-in-d2">Fresh mango cooked in coconut milk and milk</div>
</li>
</ul>
</div>
</p>
</div>
</div>
    <div style="width:13px; height:260px; float:right;">
     <a href="#" onMouseover="move('para8',1)" onMouseout="clearTimeout(move.to)"><img src="images/up.png" border=0></a>
     <div style=" background:url(images/dots.png) repeat; height:222px;"></div>
     <a href="#" onMouseover="move('para8',-1)" onMouseout="clearTimeout(move.to)"><img src="images/down.png" border=0></a>
    </div>
    
    
    </div>
    <div id="wine" class="ui-tabs-panel ui-tabs-hide">      
    <div style="position:relative;height:261px; width:425px; float:left;overflow:hidden">
    <div id="para9" style="position:absolute;left:0;top:0">
     <p id="para"><div class="menu">
<ul>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Wine</strong><br><br>
<li style="text-decoration: underline;"> <div class="menu-in-d1-0"><strong> White Wine </strong><div class="menu-in-d1-1">By Glass(6 oz)</div><div class="menu-in-d1-2">By Bottle</div></div></li>
<li>
<div class="menu-in-d1-0">Dr. Loosen Riesling.<div class="menu-in-d1-1">$6.5</div><div class="menu-in-d1-2">$30</div></div>
</li>
<li>
<div class="menu-in-d1-0">Wolf Blass Sauvignon Blanc.<div class="menu-in-d1-1">$6.5</div><div class="menu-in-d1-2">$32</div></div>
</li><li>
<div class="menu-in-d1-0">Rams Leap Semillon<div class="menu-in-d1-1">$6.5</div><div class="menu-in-d1-2">$21</div></div>
</li>
<li> <br/> <br/></li>
<li style="text-decoration: underline;"> <div class="menu-in-d1-0"><strong> Red Wine </strong><div class="menu-in-d1-1">By Glass(6 oz)</div><div class="menu-in-d1-2">By Bottle</div></div></li>
<li>
<div class="menu-in-d1-0">Hammer Sledge Zinfandel<div class="menu-in-d1-1">$7.5</div><div class="menu-in-d1-2">$34</div></div>
</li>
<li>
<div class="menu-in-d1-0">J.Lohr Cabernet Sauvignon<div class="menu-in-d1-1">$7.5</div><div class="menu-in-d1-2">$42</div></div>
</li>
<li>
<div class="menu-in-d1-0">sandhill Merlot<div class="menu-in-d1-1">$7.5</div><div class="menu-in-d1-2">$33</div></div>
</li>
<li>
<div class="menu-in-d1-0">Almos Malbec<div class="menu-in-d1-1">$7.5</div><div class="menu-in-d1-2">$32</div></div>
</li>
</ul>
</div>
</p>
</div>
</div>
    <div style="width:13px; height:260px; float:right;">
     <a href="#" onMouseover="move('para9',1)" onMouseout="clearTimeout(move.to)"><img src="images/up.png" border=0></a>
     <div style=" background:url(images/dots.png) repeat; height:222px;"></div>
     <a href="#" onMouseover="move('para9',-1)" onMouseout="clearTimeout(move.to)"><img src="images/down.png" border=0></a>
    </div>
    
    
    </div>
    <div id="beer" class="ui-tabs-panel ui-tabs-hide">    
    <div style="position:relative;height:261px; width:425px; float:left;overflow:hidden">
    <div id="para10" style="position:absolute;left:0;top:0">
     <p id="para">
<div class="menu">
<ul>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Beer</strong><br><br>
<li style="text-decoration: underline;"> <strong> Domestic </strong> </li>
<li> <div class="menu-in-d1">Kokanee<div class="menu-in-d1-1"> $5.5</div></div></li>                       
<li> <div class="menu-in-d1">Molson Canadian<div class="menu-in-d1-1"> $5.5</div></div></li>                       
<li> <div class="menu-in-d1">Alexander Keiths<div class="menu-in-d1-1"> $5.5</div></div></li>                       
<li> <div class="menu-in-d1">Moosehead Lager<div class="menu-in-d1-1"> $5.5</div></div></li>   
<li> <br/> <br/> </li>
<li style="text-decoration: underline;"> <strong> Imported </strong> </li>
<li> <div class="menu-in-d1">Kingfisher Premium<div class="menu-in-d1-1"> $6.5</div></div></li>                       
<li> <div class="menu-in-d1">Corona<div class="menu-in-d1-1"> $6.5</div></div></li>                       
<li> <div class="menu-in-d1">Heineken<div class="menu-in-d1-1"> $6.5</div></div></li>                       
<li> <div class="menu-in-d1">Stella Artois<div class="menu-in-d1-1"> $6.5</div></div></li>      
</ul>
</div>
</p>
</div>
</div>
    <div style="width:13px; height:260px; float:right;">
     <a href="#" onMouseover="move('para10',1)" onMouseout="clearTimeout(move.to)"><img src="images/up.png" border=0></a>
     <div style=" background:url(images/dots.png) repeat; height:222px;"></div>
     <a href="#" onMouseover="move('para10',-1)" onMouseout="clearTimeout(move.to)"><img src="images/down.png" border=0></a>
    </div>
    
    
    </div>
    <div id="NA-drinks" class="ui-tabs-panel ui-tabs-hide">
    
    
    <div style="position:relative;height:261px; width:425px; float:left;overflow:hidden">
    <div id="para11" style="position:absolute;left:0;top:0">
     <p id="para">
<div class="menu">
<ul>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Non Alcoholic Drinks</strong><br><br>
<li>
<div class="menu-in-d1">Masala chai<div class="menu-in-d1-1">$2.5</div></div>
</li>
<li>
<div class="menu-in-d1">Cardamom Sweet Lassi<div class="menu-in-d1-1">$3.95</div></div>
</li>
<li>
<div class="menu-in-d1">Mango Lassi<div class="menu-in-d1-1">$4.95</div></div>
</li>
<li>
<div class="menu-in-d1">Salty Lassi<div class="menu-in-d1-1">$3.95</div></div>
</li>
<li>
<div class="menu-in-d1">Black Tea<div class="menu-in-d1-1">$2</div></div>
</li>
<li>
<div class="menu-in-d1">Soft Drinks<div class="menu-in-d1-1">$2.5</div></div>
</li>
<li>
<div class="menu-in-d1">Lemongrass Chai<div class="menu-in-d1-1">$3</div></div>
</li>
<li>
<div class="menu-in-d1">Spicy Chai<div class="menu-in-d1-1">$2.5</div></div>
</li>
</ul>
</div>
</p>
</div>
</div>
    <div style="width:13px; height:260px; float:right;">
     <a href="#" onMouseover="move('para11',1)" onMouseout="clearTimeout(move.to)"><img src="images/up.png" border=0></a>
     <div style=" background:url(images/dots.png) repeat; height:222px;"></div>
     <a href="#" onMouseover="move('para11',-1)" onMouseout="clearTimeout(move.to)"><img src="images/down.png" border=0></a>
    </div>
    
    
    </div>
   
   </div>
    <a id="close" href="#" >Back</a>
  </div>      
   </div> 
   
   <!---Andheir_body start------------>
   
   <div class="restaurant_body" style="display:none;">
      <h3>Gallery >> Restaurant</h3>
     
    <div style="position:relative;height:275px; width:140px; float:left;overflow:hidden">
    <div id="para21" style="position:absolute;left:0;top:0">
    <ul>
    		<li class="ul-buttom ul-buttom-hide"><a href="#img-1"><img src="images/thumb/1.jpg"></a></li>
    		<li class="ul-buttom ul-buttom-hide"><a href="#img-2"><img src="images/thumb/2.jpg"></a></li>
    		<li class="ul-buttom ul-buttom-hide"><a href="#img-3"><img src="images/thumb/3.jpg"></a></li>
    		<li class="ul-buttom ul-buttom-hide"><a href="#img-4"><img src="images/thumb/4.jpg"></a></li>
    		</ul>
</div>
</div>
    <div style="width:13px; height:260px; float:left;">
     <a href="#" onMouseover="move('para21',1)" onMouseout="clearTimeout(move.to)"><img src="images/up.png" border=0></a>
     <div style=" background:url(images/dots.png) repeat; height:247px;"></div>
     <a href="#" onMouseover="move('para21',-1)" onMouseout="clearTimeout(move.to)"><img src="images/down.png" border=0></a>
    </div>



         <div id="bigframe">
       	 	<div id="tabs">  
      			<div id="img-1" class="ui-tabs-panel">
					<div ><a href="images/gallery/Main/1.jpg" data-lightbox="image-1" ><img alt="example1"  src="images/gallery/1.jpg" style="margin-top: 28px; margin-left: 22px;" /></a></div>
				</div>
                <div id="img-2" class="ui-tabs-panel ui-tabs-hide">
					<div ><a href="images/gallery/Main/2.jpg" data-lightbox="image-1" ><img alt="example2" src="images/gallery/2.jpg" style="margin-top: 28px; margin-left: 22px;" /></a></div>
				</div>
                <div id="img-3" class="ui-tabs-panel ui-tabs-hide">
					<div ><a href="images/gallery/Main/3.jpg" data-lightbox="image-1" ><img alt="example3" src="images/gallery/3.jpg" style="margin-top: 28px; margin-left: 22px;" /></a></div>
				</div>
                <div id="img-4" class="ui-tabs-panel ui-tabs-hide">
					<div ><a href="images/gallery/Main/4.jpg" data-lightbox="image-1" ><img alt="example4" src="images/gallery/4.jpg" style="margin-top: 28px; margin-left: 22px;" /></a></div>
				</div>
               
                
    		</div>
    	</div>
        <div style="clear:both;"></div>
        <a id="restaurant_close" href="#">Back</a>
    </div>
   <!---Restaurant_body stop------------>
   
   
     <!---Staff_Service_body start------------>
   
   <div class="ss_body" style="display:none;">
      <h3>Gallery >> Staff Service</h3>
     
 
  
    
    <div style="position:relative;height:275px; width:140px; float:left;overflow:hidden">
    <div id="para22" style="position:absolute;left:0;top:0">
    <ul>
    		<li class="ul-buttom ul-buttom-hide"><a href="#staff-1"><img src="images/thumb/staff/1.jpg"></a></li>
    		<li class="ul-buttom ul-buttom-hide"><a href="#staff-2"><img src="images/thumb/staff/2.jpg"></a></li>
    		<li class="ul-buttom ul-buttom-hide"><a href="#staff-3"><img src="images/thumb/staff/3.jpg"></a></li>
    		<li class="ul-buttom ul-buttom-hide"><a href="#staff-4"><img src="images/thumb/staff/4.jpg"></a></li>
</ul>
</div>
</div>
    <div style="width:13px; height:260px; float:left;">
     <a href="#" onMouseover="move('para22',1)" onMouseout="clearTimeout(move.to)"><img src="images/up.png" border=0></a>
     <div style=" background:url(images/dots.png) repeat; height:247px;"></div>
     <a href="#" onMouseover="move('para22',-1)" onMouseout="clearTimeout(move.to)"><img src="images/down.png" border=0></a>
    </div>



         <div id="bigframe">
       	 	<div id="tabs">  
      			<div id="staff-1" class="ui-tabs-panel">
					<div ><a href="images/gallery/Main/staff/1.jpg" data-lightbox="image-2" ><img alt="example1"  src="images/gallery/staff/1.jpg" style="margin-top: 28px; margin-left: 22px;" /></a></div>
				</div>
                <div id="staff-2" class="ui-tabs-panel ui-tabs-hide">
					<div ><a href="images/gallery/Main/staff/2.jpg" data-lightbox="image-2" ><img alt="example2" src="images/gallery/staff/2.jpg" style="margin-top: 28px; margin-left: 22px;" /></a></div>
				</div>
                <div id="staff-3" class="ui-tabs-panel ui-tabs-hide">
					<div><a href="images/gallery/Main/staff/3.jpg" data-lightbox="image-2" ><img alt="example3" src="images/gallery/staff/3.jpg" style="margin-top: 28px; margin-left: 22px;" /></a></div>
				</div>
                <div id="staff-4" class="ui-tabs-panel ui-tabs-hide">
					<div ><a href="images/gallery/Main/staff/4.jpg" data-lightbox="image-2" ><img alt="example4" src="images/gallery/staff/4.jpg" style="margin-top: 28px; margin-left: 22px;" /></a></div>
				</div>
               
    		</div>
    	</div>
        <div style="clear:both;"></div>
        <a id="ss_close" href="#">Back</a>
    </div>
   <!---ss_body stop------------>
   
   
    
  
  
  
  </div>      
 
 
 
 
  		<script type="text/javascript"> Cufon.now(); </script>
		<script>
		$(window).load(function() {
			$('.spinner').fadeOut();
			$('body').css({overflow:'inherit'})
				  $(".ball_holder").everyTime(10, function(){						 
             $(".ball_holder").animate({top:"5px"}, 400).animate({top:"0px"}, 200);	
		  });
		  
 
		  
		})
		</script>      
       <script  src="js/lightbox-plus-jquery.js" ></script>   
	</body>

</html>