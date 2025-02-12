<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>RS Rewards - Australia's Best Rewards Club</title>
        <!-- Bootstrap CSS -->
			<!-- Google Tag Manager -->
			<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-5VSB8HM7');</script>
			<!-- End Google Tag Manager -->
		
<script type="text/javascript">
  +function(a,p,P,b,y){a.braze={};a.brazeQueue=[];for(var s="BrazeSdkMetadata DeviceProperties Card Card.prototype.dismissCard Card.prototype.removeAllSubscriptions Card.prototype.removeSubscription Card.prototype.subscribeToClickedEvent Card.prototype.subscribeToDismissedEvent Card.fromContentCardsJson ImageOnly CaptionedImage ClassicCard ControlCard ContentCards ContentCards.prototype.getUnviewedCardCount Feed Feed.prototype.getUnreadCardCount ControlMessage InAppMessage InAppMessage.SlideFrom InAppMessage.ClickAction InAppMessage.DismissType InAppMessage.OpenTarget InAppMessage.ImageStyle InAppMessage.Orientation InAppMessage.TextAlignment InAppMessage.CropType InAppMessage.prototype.closeMessage InAppMessage.prototype.removeAllSubscriptions InAppMessage.prototype.removeSubscription InAppMessage.prototype.subscribeToClickedEvent InAppMessage.prototype.subscribeToDismissedEvent InAppMessage.fromJson FullScreenMessage ModalMessage HtmlMessage SlideUpMessage User User.Genders User.NotificationSubscriptionTypes User.prototype.addAlias User.prototype.addToCustomAttributeArray User.prototype.addToSubscriptionGroup User.prototype.getUserId User.prototype.getUserId User.prototype.incrementCustomUserAttribute User.prototype.removeFromCustomAttributeArray User.prototype.removeFromSubscriptionGroup User.prototype.setCountry User.prototype.setCustomLocationAttribute User.prototype.setCustomUserAttribute User.prototype.setDateOfBirth User.prototype.setEmail User.prototype.setEmailNotificationSubscriptionType User.prototype.setFirstName User.prototype.setGender User.prototype.setHomeCity User.prototype.setLanguage User.prototype.setLastKnownLocation User.prototype.setLastName User.prototype.setPhoneNumber User.prototype.setPushNotificationSubscriptionType InAppMessageButton InAppMessageButton.prototype.removeAllSubscriptions InAppMessageButton.prototype.removeSubscription InAppMessageButton.prototype.subscribeToClickedEvent FeatureFlag FeatureFlag.prototype.getStringProperty FeatureFlag.prototype.getNumberProperty FeatureFlag.prototype.getBooleanProperty FeatureFlag.prototype.getImageProperty FeatureFlag.prototype.getJsonProperty FeatureFlag.prototype.getTimestampProperty Banner automaticallyShowInAppMessages destroyFeed hideContentCards showContentCards showFeed showInAppMessage deferInAppMessage toggleContentCards toggleFeed changeUser destroy getDeviceId getDeviceId initialize isPushBlocked isPushPermissionGranted isPushSupported logCardClick logCardDismissal logCardImpressions logContentCardImpressions logContentCardClick logCustomEvent logFeedDisplayed logInAppMessageButtonClick logInAppMessageClick logInAppMessageHtmlClick logInAppMessageImpression logPurchase openSession requestPushPermission removeAllSubscriptions removeSubscription requestContentCardsRefresh requestFeedRefresh refreshFeatureFlags requestImmediateDataFlush enableSDK isDisabled setLogger setSdkAuthenticationSignature addSdkMetadata disableSDK subscribeToContentCardsUpdates subscribeToFeedUpdates subscribeToInAppMessage subscribeToSdkAuthenticationFailures toggleLogging unregisterPush wipeData handleBrazeAction subscribeToFeatureFlagsUpdates getAllFeatureFlags logFeatureFlagImpression requestBannersRefresh insertBanner logBannerClick logBannerImpressions getAllBanners subscribeToBannersUpdates isInitialized".split(" "),i=0;i<s.length;i++){for(var m=s[i],k=a.braze,l=m.split("."),j=0;j<l.length-1;j++)k=k[l[j]];k[l[j]]=(new Function("return function "+m.replace(/\./g,"_")+"(){window.brazeQueue.push(arguments); return true}"))()}window.braze.getDeferredInAppMessage=function(){return new window.braze.InAppMessage};window.braze.getCachedContentCards=function(){return new window.braze.ContentCards};window.braze.getCachedFeed=function(){return new window.braze.Feed};window.braze.getUser=function(){return new window.braze.User};window.braze.getFeatureFlag=function(){return new window.braze.FeatureFlag};window.braze.getBanner=function(){return new window.braze.Banner};window.braze.newBannerFromJson=function(){return new window.braze.Banner};(y=p.createElement(P)).type='text/javascript';
    y.src='https://js.appboycdn.com/web-sdk/5.6/braze.min.js';
    y.async=1;(b=p.getElementsByTagName(P)[0]).parentNode.insertBefore(y,b)
  }(window,document,'script');
</script>
		
		
		<script>
		
// initialize the SDK

braze.initialize('6bb14b2f-52fd-40f8-b6b4-c77047b25002', {
    baseUrl: "https://sdk.iad-07.braze.com"
});

// optionally show all in-app messages without custom handling
braze.automaticallyShowInAppMessages();

// if you use Content Cards
braze.subscribeToContentCardsUpdates(function(cards){
    // cards have been updated
	console.log("......",cards);
});

// optionally set the current user's external ID before starting a new session
// you can also call `changeUser` later in the session after the user logs in
/*
if (isLoggedIn){
    braze.changeUser(userIdentifier);
}
*/
let isLoggedIn = '{{Session::get("isLogin")}}'
console.log("Is logged in: ", isLoggedIn);

if (isLoggedIn){
	let email = "{{md5(Session::get('userEmail'))}}";
    console.log("User email: ", email); // Check if email is being passed correctly
	
	braze.changeUser(email);
}
else {
    // Generate a unique identifier for anonymous user
    let anonymousUserId = localStorage.getItem('anonymousUserId');
    if (!anonymousUserId) {
        // Generate and save it if it doesn't exist
        anonymousUserId = 'anon-' + Date.now() + Math.random().toString(36).substring(2);
        localStorage.setItem('anonymousUserId', anonymousUserId);
    }
    console.log("Anonymous user ID: ", anonymousUserId);
    braze.changeUser(anonymousUserId); // Use the unique identifier for anonymous users
}// `openSession` should be called last - after `changeUser` and `automaticallyShowInAppMessages`
braze.openSession();		
		</script>		
		
<!-- Google Tag Manager2 -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-NXCJJ668');</script>

<!-- End Google Tag Manager2 -->		
		
        <link href="{{ asset('landing/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('landing/css/style.css?777') }}" rel="stylesheet">
		 <link href="{{ asset('landing/css/sales.css?000') }}" rel="stylesheet">
		

      
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    </head>
    <body>
	<style>
	span.inner,.accText p{filter:inherit !important;}
	.specificbtn span{top:2px !important;}
				.owl-nav {
    position: absolute;
    top: 37%;
    width: 100%;
}
button.owl-prev {
    left: 0;
    position: absolute;
    font-size: 69px !important;
    color: #fff !important;
}
button.owl-next {
    right: 0;
    position: absolute;
    font-size: 69px !important;
    color: #fff !important;
}
.owl-theme .owl-nav [class*=owl-]:hover {
    background: transparent !important;
    color: #FFF;
    text-decoration: none;
}

	.neg-margin {
   
    position: relative;
    top: -21px;
}
	.mb1rem{margin-bottom: 1rem;}
	.m-20{    margin-top: 20px;}

	img.familyImg.my-3.img-fluid.px-md-0.px-3.pxfamily-0 {
    filter: drop-shadow(0 0 14.5px rgba(0, 0, 0, 0.45));    position: relative;
    left: 6%;
    top: 32px;
}
	.graybox img {
    max-width: 100%;
}
	.CountDownArea .bonus {
  
    font-family: "Tusker Grotesk 6600" !important;
	
	
	
	}
	.proudSection {min-height:auto;}
				    .proudSection p {
       font-family: 'Myriad Pro Regular';
    font-size: 20px;
        line-height: 1.3;
    }
	.card-box.shadow-lg {
    border-radius: 11px;
    filter: drop-shadow(0 0 14.5px rgba(0, 0, 0, 0.45));
    background-color: #f8f8f8;
    padding: 25px;

	}
	.customContainer h3{font-family: 'Tusker Grotesk 6600' !important;
    font-size: 2.8rem !important;}

	.proudSection h3 {
      font-family: 'Tusker Grotesk 6600';
    color: #fff;
    text-transform: uppercase;
    margin-bottom: -4px;
    font-size: 2.8rem;
    margin-top: 40px;
}
.familyImg {
    position: relative;
    left: 4%;
    top: 17px;
}
	.tapBtn.animated-button {
    background: linear-gradient(90deg, rgb(199, 1, 1) 0%, rgb(55 212 255) 100%);
    background-size: 200% 200%;
    animation: gradientMove 3s ease infinite;
    color: white;
    padding: 12px 24px;
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    display: inline-block;
    transition: all 0.3s ease-in-out;
	    line-height: 1.3 !important;
    height: 95px ;
}

/* Gradient animation */
@keyframes gradientMove {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
	
	
	
	
	.mainCard{border-top:1px solid #000 !important;}
	.packagepadding{    padding-left: 0.3rem !important;
    padding-right: 0.3rem !important;}
	.packagetoEnter,.headingeach,.winnerReviews,.winnerName {
    
    font-family: "Tusker Grotesk 6600" !important;
}
.winnerStyle,.time-unit span{font-family: 'Myriad Pro Regular' !important;}
					.mainDiv {
    margin-top: 0px !important;
}
.price-text {

    font-size: 2rem !important;
}
.paragraph {
font-size: 12px !important;}

.left-alert, .right-alert {
    width: 40px;
    position: relative;
    top: 3px;right:5px;
}
button.tapBtn {
  
    padding: 0 !important;
}
button.tapBtn span{position:relative;top:5px;}
@supports (-webkit-touch-callout: none) and (not (-webkit-overflow-scrolling: touch)) and (not (-webkit-marquee-repetition: infinite)) {


    button.tapBtn span {
        position: relative;
        top: 5px;
    }
}
	</style>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5VSB8HM7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->	
<!-- Google Tag Manager (noscript)2-->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXCJJ668"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript)2 -->

       
		<?php if($countDown->is_active == 1){ ?>
		
        <div  style="" class="CountDownArea py-3 d-nones">
            <h3 class="bonus" data-aos="zoom-in" id="countdownText">
                <img src="https://rsrewards.com.au/images/newtheme/red_alert_left.png" class="img-fluid me-3 left-alert" alt="">
                {{$countDown->countdown_heading}}
                <img src="https://rsrewards.com.au/images/newtheme/red_alert_right.png" class="img-fluid ms-3 right-alert"  alt="">
            </h3>
            <div class="count-down mt-3" data-aos="zoom-in">
                <div id="timer">
                    <div class="time-unit">
                        <div id="days" class="digits">0</div>
                        <span>DAYS</span>
                    </div>
                    <div class="time-unit">
                        <div id="hours" class="digits">0</div>
                        <span>HOURS</span>
                    </div>
                    <div class="time-unit">
                        <div id="minutes" class="digits">0</div>
                        <span>MINS</span>
                    </div>
                    <div class="time-unit">
                        <div id="seconds" class="digits">0</div>
                        <span>SECS</span>
                    </div>
                </div>
                <div   id="expired">EXPIRED</div>
            </div>
        </div>
       <?php }?>

		<section class="promotionBannerSection pb-md-5 pb-0" id="backgroundDiv">
		   <img id="mainHeroBannerImages" src="./../images/heroBanner/{{$banner->desktop_image_path}}?12345" class="img-fluid mx-0 px-0 w-100" alt="" >
       


	<!--	<img src="./../images/heroBanner/679f19b5c8ace.png?12345" class="img-fluid mx-0 px-0 w-100 d-sm-block d-none" alt="">
            <img src="https://rsrewards.com.au/images/heroBanner/679f27f278e65.png?12345" class="img-fluid mx-0 px-0 w-100 d-sm-none d-block" alt="">
      -->      
			<div class="promotionBannerBtn">
                <div class="tab-here-btn select-packageButton  text-center p-0 w90 mxauto py-3">
                  	 <button class="tapBtn animated-button w-100 scroll-button desktopShow specificbtn" data-aos="fade-right" data-target="packagesp" id="tabhereBtn12">
                        <span class="text"></span>
                    </button>
                </div>
			
				
            </div>
        </section>

       <section class="packages py-5 pt-0 pb-3 m20res" id="packagesp">
            <div class="container-fluid px-md-5">
                <div class="row">
                    <div class="text-center">
                        <h3 class="packagetoEnter pt-0 mt-0 pb-4 pt-md-4">{{$contentData->field_short_1}}</h3>
                    </div>
					<?php
					  if($packages){ 
					  ?>
					
                    <div class="container-fluid">
                        <div class="highlightedtxt text-center py-3 row">
					
                               
							   <div class="col-lg-2 col-6 mb-5 w19 testing psres packagepadding rightpadding" >
                                <div class="bg-box-blue bronzebg" style=" position:relative;background: url(./../images/aboutus/rectangle_1_copy_8.png) no-repeat;    background-size: 100% 100%;">
                                <div class="tenX" >
    <img class="tenXimg" src="https://rsrewards.com.au/images/newtheme/tenX.png" alt="Zoom Animation">
</div>
									
									<div style="height: 25px;" class="divider"></div>
                                    <h5 style="text-align: center;">
                                        <strong>
                                            <span class="mainText">{{$packages[3]->name}}</span>
                                        </strong>
                                    </h5>
                                    <h3 class="text-center white mb-3">
                                        <span>
                                            <span class="inner f50">{{$packages[3]->tickets}}</span>
                                        </span>
                                    </h3>
                                    <div class="accText white text-center">
                                        <p>
                                            <strong>FREE ENTRIES</strong>
                                        </p>
                                    </div>
                                    <div class="relative">
                                        <div class="">
                                            <div class="card-price text-center mx-md-2">
                                                <div class="main bg-white p-2">
                                                    <div class="option">
                                                        <ul class="d-none">
                                                            <li> <span class="red">{{$contentData->field_short_3}}</span> <br>3 Days access to RS Portal <br>10% off RS Merch </li>
                                                        </ul>
                                                        
                                                        <div class="text-center">
                                                            <div class="mainDiv">
                                                                <span class="price-text">${{$packages[3]->price}}</span>
                                                            </div>
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <h6 class="para pt-1">One-off Payment</h6>
                                                                </div>
                                                            </div>
                                                            
                                                            <a href="javascript:;" data-type="{{$packages[3]->name}}" data-extra-int="{{$packages[3]->max_venders}}"  data-extra-amt="{{$packages[3]->max_users}}"  class="single_add_to_cart_button brownBtn fontonepoint5 button alt animated-button" id="enternow1" name="add-to-cart">
                                                                <span class="text"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
									 <?php } 
									 if($packages[4]->status == 1){
									 
									 ?>
                              
							  <div class="col-lg-2  col-6 mb-5 w19 testing  peres packagepadding leftpadding">
                                <div class="bg-box-blue silverbg" style="position:relative;background: url(./../images/aboutus/rectangle_1_copy_6.png) no-repeat;    background-size: 100% 100%;">
                                        <div class="ribbon-container">
     <img class="triangle-1-copy-2" src="https://rsrewards.com.au/images/popular/triangle_1_copy_2.png" alt="">
                  <img class="triangle-1-copy-2-2" src="https://rsrewards.com.au/images/popular/triangle_1_copy_2_2.png" alt="">
                  <img class="rectangle-1-copy" src="https://rsrewards.com.au/images/popular/rectangle_1_copy.png" alt="">
                  <img class="text-3" src="https://rsrewards.com.au/images/popular/most_popular_copy.png" alt="Most Popular" title="Most Popular">
    <!--<div class="ribbon">Most Popular</div>-->
  </div>           
												  <div class="tenX" >
    <img class="tenXimg" src="https://rsrewards.com.au/images/newtheme/tenX.png" alt="Zoom Animation">
</div>

									<div style="height: 25px;" class="divider"></div>

                                    <h5 style="text-align: center;">
                                        <strong>
                                            <span class="mainText">{{$packages[4]->name}}</span>
                                        </strong>
                                    </h5>
                                    <h3 class="text-center white mb-3">
                                        <span>
                                            <span class="inner f50">{{$packages[4]->tickets}}</span>
                                        </span>
                                    </h3>
                                    <div class="accText white text-center">
                                        <p>
                                            <strong>FREE ENTRIES</strong>
                                        </p>
                                    </div>
                                    <div class="relative">
                                        <div class="">
                                            <div class="card-price text-center mx-md-2">
                                                <div class="main bg-white p-2">
                                                    <div class="option">
                                                        <ul class="d-none">
                                                            <li><span class="red">{{$contentData->field_short_3}}</span> <br>
                                                                 1 Week access to RS Portal <br>20% off RS Merch </li>
                                                        </ul>
                                                        
                                                        <div class="text-center">
                                                            <div class="mainDiv">
                                                                <span class="price-text">${{$packages[4]->price}}</span>
                                                            </div>
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <h6 class="para pt-1">One-off Payment</h6>
                                                                </div>
                                                            </div>
                                                           
                                                            <a href="javascript:;" data-type="{{$packages[4]->name}}" data-extra-int="{{$packages[4]->max_venders}}"  data-extra-amt="{{$packages[4]->max_users}}" class="single_add_to_cart_button silverBtn fontonepoint5 button alt animated-button" id="enternow2" name="add-to-cart">
                                                                <span class="text"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
									 <?php } 
									 if($packages[5]->status == 1){
									 
									 ?>
                              
							  <div class="col-lg-2  col-6 mb-5 w19 testing  psres packagepadding rightpadding">
                                <div class="bg-box-blue goldbg" style="position:relative;background: url(./../images/aboutus/rectangle_1_copy_4_3.png) no-repeat;    background-size: 100% 100%;">
                                  		                   <div class="tenX" >
    <img class="tenXimg" src="https://rsrewards.com.au/images/newtheme/tenX.png" alt="Zoom Animation">
</div> 


         		                   <div class="mostPopularImg d-none">
								       <img class="mostPopularImgimg" src="https://rsrewards.com.au/images/newtheme/triangle_1_copy_2.png" alt="Zoom Animation">
									      <img class="mostPopularribbon" src="https://rsrewards.com.au/images/newtheme/rectangle_1_copy.png" alt="Zoom Animation">
									       <img class="mostPopularImgXimg" src="https://rsrewards.com.au/images/newtheme/most_popular_copy.png" alt="Zoom Animation">
    <img class="tenXimg" src="https://rsrewards.com.au/images/newtheme/triangle_1_copy_2_2.png" alt="Zoom Animation">
</div> 
								   <div class="GoldSticker"  style="visibility:hidden;">
                                        <h2 class="Most_Popular">Most Popular</h2>
                                    </div>
							
                                    <h5 style="text-align: center;margin-bottom:0px;">
                                        <strong>
                                            <span class="mainText" style="top:2px !important;">{{$packages[5]->name}}</span>
                                        </strong>
                                    </h5>
                                    <h3 class="text-center white mb-3">
                                        <span>
                                            <span class="inner f50">{{$packages[5]->tickets}}</span>
                                        </span>
                                    </h3>
                                    <div class="accText white text-center">
                                        <p>
                                            <strong>FREE ENTRIES</strong>
                                        </p>
                                    </div>
                                    <div class="relative">
                                        <div class="">
                                            <div class="card-price text-center mx-md-2">
                                                <div class="main bg-white p-2">
                                                    <div class="option">
                                                      <ul class="d-none">
                                                            <li><span class="red">{{$contentData->field_short_3}}</span> <br> 1 Month access to RS Portal <br>30% off RS Merch </li>
                                                        </ul>
                                                        
                                                        <div class="text-center">
                                                            <div class="mainDiv">
                                                                <span class="price-text">${{$packages[5]->price}}</span>
                                                            </div>
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <h6 class="para pt-1">One-off Payment</h6>
                                                                </div>
                                                            </div>
                                                           
                                                            <a href="javascript:;"  data-type="{{$packages[5]->name}}" data-extra-int="{{$packages[5]->max_venders}}"  data-extra-amt="{{$packages[5]->max_users}}" class="single_add_to_cart_button yellowBtn fontonepoint5 button alt animated-button" id="enternow3" name="add-to-cart">
                                                                <span class="text"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
									 <?php } 
									 if($packages[6]->status == 1){
									 
									 ?>
                              
							  <div class="col-lg-2  col-6 mb-5 w19 testing peres packagepadding leftpadding">
                                <div class="bg-box-blue platinumbg" style="position:relative;background: url(./../images/aboutus/rectangle_1_copy_5.png) no-repeat;    background-size: 100% 100%;">
                                                           <div class="tenX" >
    <img class="tenXimg" src="https://rsrewards.com.au/images/newtheme/tenX.png" alt="Zoom Animation">
</div>
									<div style="height: 25px;" class="divider"></div>

                                    <h5 style="text-align: center;">
                                        <strong>
                                            <span class="mainText">{{$packages[6]->name}}</span>
                                        </strong>
                                    </h5>
                                    <h3 class="text-center white mb-3">
                                        <span>
                                            <span class="inner f50">{{$packages[6]->tickets}}</span>
                                        </span>
                                    </h3>
                                    <div class="accText white text-center">
                                        <p>
                                            <strong>FREE ENTRIES</strong>
                                        </p>
                                    </div>
                                    <div class="relative">
                                        <div class="">
                                            <div class="card-price text-center mx-md-2">
                                                <div class="main bg-white p-2">
                                                    <div class="option">
                                                        <ul class="d-none">
                                                            <li><span class="red">{{$contentData->field_short_3}}</span> <br> 6 Months access to RS Portal <br>40% off RS Merch </li>
                                                        </ul>
                                                        
                                                        <div class="text-center">
                                                            <div class="mainDiv">
                                                                <span class="price-text">${{$packages[6]->price}}</span>
                                                            </div>
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <h6 class="para pt-1">One-off Payment</h6>
                                                                </div>
                                                            </div>
                                                           
                                                            <a href="javascript:;"   data-type="{{$packages[6]->name}}" data-extra-int="{{$packages[6]->max_venders}}"  data-extra-amt="{{$packages[6]->max_users}}" class="single_add_to_cart_button darkBlue fontonepoint5 button alt animated-button" id="enternow4" name="add-to-cart">
                                                                <span class="text"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
									 <?php } 
									 if($packages[7]->status == 1){
									 
									 ?>
                              
							  <div class="col-lg-2  col-6 mb-5 w19 testing psres packagepadding rightpadding">
                                <div class="bg-box-blue diamondbg" style="position:relative;">
								
								                               <div class="ribbon-container">
     <img class="triangle-1-copy-2" src="https://rsrewards.com.au/images/popular/triangle_1_copy_2.png" alt="">
                  <img class="triangle-1-copy-2-2" src="https://rsrewards.com.au/images/popular/triangle_1_copy_2_2.png" alt="">
                  <img class="rectangle-1-copy" src="https://rsrewards.com.au/images/popular/rectangle_1_copy_2.png" alt="">
                  <img class="text-3" style="      width: 48px;
    top: 30px;
    right: 16px;" src="https://rsrewards.com.au/images/popular/best_value_copy.png" alt="Most Popular" title="Most Popular">
    <!--<div class="ribbon">Most Popular</div>-->
  </div>      
								                       <div class="tenX" >
    <img class="tenXimg" src="https://rsrewards.com.au/images/newtheme/tenX.png" alt="Zoom Animation">
</div>
                                    <div class="purpleSticker" style="visibility:hidden;">
                                        <h2 class="Most_Popular">BEST VALUE</h2>
                                    </div>
                                    <h5 style="text-align: center;margin-bottom:0px;">
                                        <strong>
                                            <span class="mainText" style="top:4px !important;">{{$packages[7]->name}}</span>
                                        </strong>
                                    </h5>
                                    <h3 class="text-center white mb-3">
                                        <span>
                                            <span class="inner f50">{{$packages[7]->tickets}}</span>
                                        </span>
                                    </h3>
                                    <div class="accText white text-center">
                                        <p>
                                            <strong>FREE ENTRIES</strong>
                                        </p>
                                    </div>
                                    <div class="relative">
                                        <div class="">
                                            <div class="card-price text-center mx-md-2">
                                                <div class="main bg-white p-2">
                                                    <div class="option">
                                                        <ul class="d-none">
                                                            <li><span class="red">{{$contentData->field_short_3}}</span> <br> 1 Year access to RS Portal <br>50% off RS Merch </li>
                                                        </ul>
                                                        
                                                        <div class="text-center">
                                                            <div class="mainDiv">
                                                                <span class="price-text">${{$packages[7]->price}}</span>
                                                            </div>
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <h6 class="para pt-1">One-off Payment</h6>
                                                                </div>
                                                            </div>
                                                       
                                                            <a href="javascript:;" data-type="{{$packages[7]->name}}" data-extra-int="{{$packages[7]->max_venders}}"  data-extra-amt="{{$packages[7]->max_users}}" class="single_add_to_cart_button purple fontonepoint5 button alt animated-button" id="enternow5" name="add-to-cart">
                                                                <span class="text"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           									 <?php } 
									 ?>
                           	<?php 
									if($packages[8]->status == 1){ ?>
                               
							   <div class="col-lg-2 col-6 mb-5 w19 testing peres packagepadding leftpadding">
                                <div class="bg-box-blue bronzebg" style="position:relative;background: url(./../images/popular/rectangle_1_copy_21.png) no-repeat;    background-size: 100% 100%;">
                                                      <div class="tenX d-none"  >
    <img class="tenXimg" src="https://rsrewards.com.au/images/newtheme/tenX.png" alt="Zoom Animation">
</div>    
								   
								   <div class="graySticker" style="visibility:hidden;">
                                        <h2 class="Most_Popular">Special Offer</h2>
                                    </div>
                                    <h5 style="text-align: center;margin-bottom:0px;">
                                        <strong>
                                            <span class="mainText" style="top:2px !important;">{{$packages[8]->name}}</span>
                                        </strong>
                                    </h5>
                                    <h3 class="text-center white mb-3">
                                        <span>
                                            <span class="inner f50">{{$packages[8]->tickets}}</span>
                                        </span>
                                    </h3>
                                    <div class="accText white text-center">
                                        <p>
                                            <strong>FREE ENTRIES</strong>
                                        </p>
                                    </div>
                                    <div class="relative">
                                        <div class="">
                                            <div class="card-price text-center mx-md-2">
                                                <div class="main bg-white p-2">
                                                    <div class="option">
                                                        <ul class="d-none">
                                                            <li>{{$contentData->field_short_2}}<br>
3 HOUR access to RS Portal<br>
1% off RS Merch</li>
                                                        </ul>
                                                       
                                                        <div class="text-center">
                                                            <div class="mainDiv">
                                                                <span class="price-text">${{$packages[8]->price}}</span>
                                                            </div>
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <h6 class="para pt-1">One-off Payment</h6>
                                                                </div>
                                                            </div>
                                                           
                                                            <a href="javascript:;" data-type="{{$packages[8]->name}}" data-extra-int="{{$packages[8]->max_venders}}"  data-extra-amt="{{$packages[8]->max_users}}"  class="single_add_to_cart_button grayBtn fontonepoint5 button alt animated-button" id="enternow0" name="add-to-cart">
                                                                <span class="text"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
									<?php } 
									
									 if($packages[3]->status == 1){
									?>
                        </div>
                    </div>
					  <?php } ?>
      <p class="paragraph">10X entries are already applied to the selected packages<br>
*For full inclusions of each one-off package, refer to our terms & conditions*</p>
				</div>
            </div>
         
        </section>
        <div class="container customContainer pb-0">
            <div class="row">
                <div class="mainImgSmall py-5 pt-0" data-aos="flip-left">
                    <div class="graybox text-center ">
                        <img src="./../images/newtheme/instantimg.png?000">
                    </div>
                </div>
            </div>
        </div>
        <section class="proudSection">
		
		<div class="py-5 mt-0 pb-0 md:pb-5 pt-0">
            <div class="container">
                <div class="row align-items-center px-2 px-lg-5">
                    <div class="col-md-6 text-center text-md-start">
                        <h3>Making a difference</h3>
                        <img src="https://rsrewards.com.au/images/newtheme/proud_raising.png" class="familyImg my-3 img-fluid px-md-0 px-3 pxfamily-0" alt="">
                    </div>
                    <div class="col-md-5">
                        <div class="card-box shadow-lg">
                            <p>
                                We are proud to be supporting The Smith Family, a charity dedicated to helping disadvantaged children access education and opportunities across the country.
                            </p>
                            <p>
                                We share our profits with them to help the next generation get the support they need.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
       
</div>

	   </section>
        <div class="container customContainer py-5 paddingbtmres" >
            <div class="row mx-0 mx-md-auto">
                <div class="membershipCards"></div>
                {{-- <div class="asseen text-center pb-5">
                    <img src="./../images/aboutus/asseen.png" data-aos="fade-in" data-aos-delay="200" class="width60">
                </div> --}}
                <div class="asseen text-center px-0">
				
				
                    <img src="./../images/aboutus/{{$contentData->image1}}?1234"  data-aos="fade-in" data-aos-delay="400" style="width:100%;">
          
<!--<img src="./../images/aboutus/679f1ce3ccec3.png?1234"  data-aos="fade-in" data-aos-delay="400" style="width:100%;">
			    -->
				</div>
                <div class="firstPrizeSection mt-4 px-0">
                    <div class="position-relative">
                        <div class="owl-carousel owl-theme" id="solutions-carousel">
						<?php 
						foreach($promotionSlider as $ps){ ?>
                           <div class="item"  data-aos="zoom-in" >
                                <img src="./../images/aboutus/<?php  echo $ps->image_path; ?>?333" alt="Image 1">
                            </div>
							<?php } ?>
					

                            <!--
							<div class="item">
                                <img src="./../images/aboutus/2.png?1234" alt="Image 1">
                            </div>
                            <div class="item">
                                <img src="./../images/aboutus/1.png?1234" alt="Image 2">
                            </div>
                            <div class="item">
                                <img src="./../images/aboutus/3.png?1234" alt="Image 3">
                            </div>
                            <div class="item">
                                <img src="./../images/aboutus/4.png?1234" alt="Image 4">
                            </div>
                            <div class="item">
                                <img src="./../images/aboutus/5.png?1234" alt="Image 5">
                            </div>
                             <div class="item">
                                <img src="./../images/aboutus/6.png?1234" alt="Image 6">
                            </div>
                             <div class="item">
                                <img src="./../images/aboutus/7.png?1234" alt="Image 7">
                            </div>
                             <div class="item">
                                <img src="./../images/aboutus/8.png?1234" alt="Image 8">
                            </div>
                             <div class="item">
                                <img src="./../images/aboutus/9.png?1234" alt="Image 9">
                            </div>
                             <div class="item">
                                <img src="./../images/aboutus/10.png?1234" alt="Image 10">
                            </div>
                           -->
                       
                        </div>
                        {{-- <div id="carousel-custom-navs" class="owl-nav d-flex justify-content-between">
                            <button class="owl-prev bg-transparent border-0">
                                <img id="previousButton" src="./../images/homeimages/previous_button.png?12345" alt="">
                            </button>
                            <button class="owl-next bg-transparent border-0">
                                <img id="nextButton"src="./../images/homeimages/next_button.png?12345" alt="">
                            </button>
                        </div> --}}
                    </div>
                    <div id="carousel-custom-dots" class="carousel-custom-x-hide d-flex mt-3 justify-content-between">
						<?php 
							foreach($promotionSlider as $ps){ ?>
                          
						  <div class="owl-dot 1">
                            <img src="./../images/aboutus/<?php echo $ps->image_path; ?>?333"  alt="dfa">
                        </div>
							<?php } ?>
                          
						  <!--
						  <div class="owl-dot 1">
                            <img src="./../images/aboutus/2.png?1234"  alt="dfa">
                        </div>
                        <div class="owl-dot 2">
                            <img src="./../images/aboutus/1.png?1234" alt="dfa">
                        </div>
                        <div class="owl-dot 3">
                            <img src="./../images/aboutus/3.png?1234" alt="dfa">
                        </div>
                        <div class="owl-dot 4">
                            <img src="./../images/aboutus/4.png?1234" alt="dfa">
                        </div>
                        <div class="owl-dot 5">
                            <img src="./../images/aboutus/5.png?1234" alt="dfa">
                        </div>
                         <div class="owl-dot 6">
                            <img src="./../images/aboutus/6.png?1234" alt="dfa">
                        </div>
                          <div class="owl-dot 7">
                            <img src="./../images/aboutus/7.png?1234" alt="dfa">
                        </div>
                          <div class="owl-dot 8">
                            <img src="./../images/aboutus/8.png?1234" alt="dfa">
                        </div>
                          <div class="owl-dot 9">
                            <img src="./../images/aboutus/9.png?1234" alt="dfa">
                        </div>
                          <div class="owl-dot 10">
                            <img src="./../images/aboutus/10.png?1234" alt="dfa">
                        </div>
							-->
                    </div>
                </div>
            </div>
        </div>
        <div class="container customContainer">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="https://rsrewards.com.au/images/aboutus/679f2aff2c9ef.png?312345" alt="" class="img-fluid d-md-block d-none mb-5">
                    <img src="https://rsrewards.com.au/images/aboutus/679f2bab41bb2.png?2ss44123456" alt="" class="img-fluid d-md-none d-block mb-5">
                    <h3 class="text-uppercase h3 font-47">5 DAYS ONLY!</h3>
                </div>
                <div class="col-12" data-aos="fade-in" data-aos-delay="200">  
                    {!! html_entity_decode($contentData->field_long_1) !!}
                </div>
                <div class="checkout text-center pb-3 pb-0">
                    {{-- <div class="desktopShow">  <h3 class="headingeach my-4 fontsize" data-aos="fade-down">{{$contentData->field_short_6}}</h3>


                    <img src="./../images/aboutus/{{$contentData->image2}}?312345" data-aos="flip-left" class="w-100">
                            <h3 class="headingeach my-4 fontsize d-none">NISSAN PATROL DETAILS</h3>


                    <img src="./../images/blueTheme/mode21.png?1234" class="w-100 d-none">
                    </div>
                    <div class="responsiveShow">
                    <h3 class="headingeach my-4 fontsize">{{$contentData->field_short_6}}</h3>


                    <img src="./../images/aboutus/{{$contentData->image3}}?2ss44123456"  class="w-100">


                            <h3 class="headingeach my-4 fontsize d-none">PATROL DETAILS</h3>


                    <img src="./../images/blueTheme/mode4.png?1234"  class="w-100 d-none">
                    </div> --}}
            
                    <div class="main-collapsable mt-2 px-md-0 collapsibleHeight" data-aos="fade-in">
                        <div class="rectangle-1-copy-2-holder entireBtn text-start " id="entire123">
                            <i class="fa fa-plus me-2"></i> {{$contentData->field_short_7}}
                        </div>
                        <div class="slide" id="slide123">
                            <div class="card card-body mt-2 mainCard">
                                <div class="mainContentArea text-start">
                                {!! $contentData->field_long_2 !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-collapsable pt-1 collapsibleHeight d-none ">
                        <div class="rectangle-1-copy-2-holder entireBtn text-start" id="entireBtn">
                            <i class="fa fa-plus me-2"></i> Click here for Patrol Details & Specs
                        </div>
                        <div class="slide" id="slideDiv">
                            <div class="card card-body mt-3 mainCard">
                                <div class="mainContentArea">
                                   <div class="iconTick d-flex"><p class="textTick">To see all specs and details, see this official list from <a href="https://www-asia.nissan-cdn.net/content/dam/Nissan/AU/Files/Brochures/Models/Specsheet/May_MY24-Patrol_Update_sSpec_FA_WEB.pdf">Nissan</a> </p> </div>


 
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
                <div class="tab-here-btn select-packageButton  text-center mxauto py-3">
                    <button class="tapBtn animated-button w-100 scroll-button desktopShow specificbtn" data-aos="fade-right" data-target="packagesp" id="tabhereBtn1">
                        <span class="text"></span>
                    </button>
                    <button class="tapBtn animated-button button w-100 responsiveShow scroll-button" data-target="packagesp">{{$contentData->field_short_8}}</button>
                </div>
                {{--<style>.fontsize{font-size:3rem}</style>
                 <div class="text-center ">
                    <img id="family" class="img-fluid" src="https://rsrewards.com.au/images/homeimages/familyD.png?098" data-aos="fade-in" data-aos-delay="200" alt="Smith Family" title="Smith Family">
                </div> --}}
            </div>
        </div>
        <section class="pt-md-5 pb-0">
            <div class="container customContainer mb-0">
                <div class="text-center pb-3" data-aos="flip-left">
                    <img src="https://rsrewards.com.au/images/newtheme/personImg123.png?123" class="img-fluid w-100">
                </div>
               
            </div>
			 <div class="container customContainer mb-0">
                <div class="text-center pb-3" data-aos="flip-left">
                    <img src="https://rsrewards.com.au/images/newtheme/2nd-&-3rd-Prize.png" class="img-fluid w-100">
                </div>
               
            </div>
			<div class="container d-none">
			 <div class="row px-4">
                    <div class="col-md-6 pb-4 pb-md-0 text-md-end text-center">
                        <img src="https://rsrewards.com.au/images/newtheme/prizeone.png?124" data-aos="fade-right" class="img-fluid d-md-block d-none">
                        <img src="https://rsrewards.com.au/images/newtheme/prizeoneres.png?124" data-aos="fade-right" class="img-fluid d-md-none d-block m-auto">
                    </div>
                    <div class="col-md-6 pb-4 pb-md-0 text-md-start text-center">
                        <img src="https://rsrewards.com.au/images/newtheme/secondprize.png?124" data-aos="fade-left" class="img-fluid d-md-block d-none">
                        <img src="https://rsrewards.com.au/images/newtheme/secondprizeres.png?124" data-aos="fade-left" class="img-fluid d-md-none d-block m-auto">
                    </div>
                </div>
			</div>
			
            <div class="container-fluid px-0 m-20">
                <div class="row">
                    <div class="col-12">
                        <div class="owl-carousel owl-theme pt-md-5 pt-0" data-aos="fade-in" id="viewmasterDetail">
                            <div class="item">
                                <article class="carousel-content row giveawayContents d-flex align-items-center justify-content-center">
                                    <div class="col-5">
                                        <img src="./../images/winners/Justin.png" class="img-fluid">
                                    </div>
                                    <div class="col ps-md-5 py-md-0 p-2">
									<h2 class="winnerReviews pb-4">WINNER REVIEWS</h2>
                                        <h3 class="winnerStyle"> “I missed a call from RS Rewards, and when I called back Brendan Fevola answered the phone telling me I won a Ford Mustang! I drove it from Victoria all the way back to Perth and loved every second of it!” </h3>
                                        <h3 class="winnerName"> Justin, WA</h3>
                                    </div>
                                </article>
                            </div>
                            <div class="item">
                                <article class="carousel-content row giveawayContents d-flex align-items-center justify-content-center">
                                    <div class="col-5">
                                        <img src="./../images/winners/Sharlotte.png" class="img-fluid">
                                    </div>
                                    <div class="col ps-md-5 py-md-0 p-2">
									<h2 class="winnerReviews pb-4">WINNER REVIEWS</h2>
                                        <h3 class="winnerStyle">“I won a brand new Jimny and camper from RS Rewards, and I couldn’t believe it when Billy gave me a call! I’ve been taking the kids away nearly every weekend! You guys are the BEST!” </h3>
                                        <h3 class="winnerName"> Sharlotte, QLD</h3>
                                    </div>
                                </article>
                            </div>
                            <div class="item">
                                <article class="carousel-content row giveawayContents d-flex align-items-center justify-content-center">
                                    <div class="col-5">
                                        <img src="./../images/winners/Martin.png" class="img-fluid">
                                    </div>
                                    <div class="col ps-md-5 py-md-0 p-2">
									<h2 class="winnerReviews pb-4">WINNER REVIEWS</h2>
                                        <h3 class="winnerStyle"> “I won $100,000 with RS Rewards, and it couldn’t have come at a better time! I was just about to go in for an urgent hip surgery, and this money allowed me to pay for it in full! Thank you RS Rewards!” </h3>
                                        <h3 class="winnerName"> Martin, WA</h3>
                                    </div>
                                </article>
                            </div>
                            <div class="item">
                                <article class="carousel-content row giveawayContents d-flex align-items-center justify-content-center">
                                    <div class="col-5">
                                        <img src="./../images/aboutus/winnerImage.png" class="img-fluid">
                                    </div>
                                    <div class="col ps-md-5 py-md-0 p-2">
									<h2 class="winnerReviews pb-4">WINNER REVIEWS</h2>
                                        <h3 class="winnerStyle"> “I won a brand new Land Cruiser from RS Rewards, and I that allowed me to sell my old car and pay for that Europe trip I’ve always wanted!If you’re not a member yet, you’re crazy!” </h3>
                                        <h3 class="winnerName"> SHARNI, NSW</h3>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <!-- <div class="viewmasterDetail ">
                            <div class="carousel-cells">
                                <article class="carousel-content giveawayContents d-flex align-items-center justify-content-center">
                                    <div class="col-5">
                                        <img src="./../images/winners/Justin.png" class="img-fluid p20">
                                    </div>
                                    <div class="col ps-md-5">
                                        <h3 class="winnerStyle"> “I had a missed call from RS Rewards, and when I called back Brendan Fevola answered the phone telling me I had won a Ford Mustang! I always wanted this car, and had a photo of it hanging in my garage. I drove it from Victoria all the way back to Perth and loved every second of it. Thanks RS Rewards for giving me my dream car!” </h3>
                                        <h3 class="winnerName"> Justin, WA</h3>
                                    </div>
                                </article>
                            </div>
                            <div class="carousel-cells">
                                <article class="carousel-content giveawayContents d-flex align-items-center justify-content-center">
                                    <div class="col-5">
                                        <img src="./../images/winners/Sharlotte.png" class="img-fluid p20">
                                    </div>
                                    <div class="col ps-md-5">
                                        <h3 class="winnerStyle"> “I won a brand new Jimny and camper from RS Rewards, and I truly couldn’t believe it when Billy gave me a call! They delivered it right to my driveway, and I’ve been taking the kids away nearly every weekend! You guys are the BEST!” </h3>
                                        <h3 class="winnerName"> Sharlotte, QLD</h3>
                                    </div>
                                </article>
                            </div>
                            <div class="carousel-cells">
                                <article class="carousel-content giveawayContents d-flex align-items-center justify-content-center">
                                    <div class="col-5">
                                        <img src="./../images/winners/Martin.png" class="img-fluid p20">
                                    </div>
                                    <div class="col ps-md-5">
                                        <h3 class="winnerStyle"> “I won $100,000 with RS Rewards, and it couldn’t have come at a better time! I was just about to go in for an urgent hip surgery, and this money allowed me to pay for it in full, and I never have to worry anymore! Thank you RS Rewards for helping me out in this time of need.” </h3>
                                        <h3 class="winnerName"> Martin, WA</h3>
                                    </div>
                                </article>
                            </div>
                            <div class="carousel-cells">
                                <article class="carousel-content giveawayContents d-flex align-items-center justify-content-center">
                                    <div class="col-5">
                                        <img src="./../images/aboutus/winnerImage.png" class="img-fluid p20">
                                    </div>
                                    <div class="col ps-md-5">
                                        <h3 class="winnerStyle"> “I won a brand new Land Cruiser from RS Rewards, and I that allowed me to sell my old car and pay for that Europe trip I’ve always wanted! If you’re not a member yet, you’re crazy!” </h3>
                                        <h3 class="winnerName"> SHARNI, NSW</h3>
                                    </div>
                                </article>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        {{-- <div class="tab-here-btn select-packageButton  text-center p-0 w90 mxauto py-md-5 pt-0">
            <button class="tapBtn animated-button w-100 scroll-button desktopShow" data-aos="fade-right" data-target="packagesp" id="tabhereBtn3">
                <span class="text"></span>
            </button>
         <button class="tapBtn button w-100 responsiveShow scroll-button" data-target="packagesp">{{$contentData->field_short_8}}</button>
   
        </div> --}}
        <div class="container pt-md-5 pt-0 pb-5 mb1rem">
            <div class="row">
                <div class="col-lg-6 text-center order-md-1 order-2 mt-md-0 mt-4">
                    <img src="https://rsrewards.com.au/images/newtheme/justin_ford.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 col-md-6 mt-md-5 pe-3 order-md-2 order-1 text-center" data-aos="fade-right">
                    <h3 class="headingeach mb-4" style="color: #000 !important;">GIVEAWAY DETAILS</h3>
                    {{-- <div class="d-flex d-none">
                        <div class="col-lg-6 pe-2">
                            <div class="competition">
                                <div class="rectangle-1-copy-15-holder">
                                    <img class="layer-21-copy-2" src="https://rsrewards.com.au/images/aboutus/winnerDrawn.png">
                                    <p class="coupons widthinitial">WINNER DRAWN</p>
                                    <p class="date">6/12/24, 6:30pm AEST </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ps-2">
                            <div class="competition">
                                <div class="rectangle-1-copy-15-holder">
                                    <img class="layer-21-copy-2" src="https://rsrewards.com.au/images/aboutus/prizeValue.png">
                                    <p class="coupons">PRIZE VALUE</p>
                                    <p class="date">CAR & BIKE: $115,000 </p>
                                    <p class="date" style="margin-bottom:10px;">CASH: $100,000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex d-none">
                        <div class="col-lg-6 pe-2 mt-4">
                            <div class="competition">
                                <div class="rectangle-1-copy-15-holder">
                                    <img class="layer-21-copy-2" src="https://rsrewards.com.au/images/aboutus/ausWide.png">
                                    <p class="coupons widthinitial">OPEN TO AUSTRALIA</p>
                                    <p class="date">EXCEPT SA & ACT </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ps-2 mt-4">
                            <div class="competition">
                                <div class="rectangle-1-copy-15-holder">
                                    <img class="layer-21-copy-2" src="https://rsrewards.com.au/images/aboutus/liveStream.png">
                                    <p class="coupons">LIVE STREAM</p>
                                    <p class="date">WATCH ON OUR </p>
                                    <p class="date" style="margin-bottom:10px;">INSTAGRAM PAGE </p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="heightwidthimg">
                      <img src="./../images/aboutus/{{$contentData->image6}}?21234"> 
					  <!-- <img src="./../images/newtheme/giveawaydetails.png"> --->
                    </div>
                </div>
                
            </div>
        </div>
        {{-- <section class="mainFaqsSection w90 mxauto">
        </section> --}}
        <section class="faqSection pt-0 py-4">
            <div class="container customContainer">
                <div class="tab-here-btn select-packageButton neg-margin text-center p-0 mxauto py-3 d-none">
                    <button class="tapBtn animated-button w-100 scroll-button" data-aos="fade-right">
                        <span class="text">WIN A RAM OR $100K</span>
                    </button>
					
                </div>
				
				 <div class="tab-here-btn select-packageButton neg-margin text-center p-0 mxauto py-3">
                    <button class="tapBtn animated-button w-100 scroll-button desktopShow specificbtn" data-aos="fade-right" data-target="packagesp" id="tabhereBtn10">
                        <span class="text"></span>
                    </button>
                    <button class="tapBtn animated-button button w-100 responsiveShow scroll-button" data-target="packagesp">{{$contentData->field_short_8}}</button>
                </div>
				
				
                <div class="row">
                    <div class="col-md-12" data-aos="fade-left" >
                        <h3 class="headingeach mb-4">FAQ's</h3>
                        <div class="card-box px-md-5">
                            <?php 
                            $is = 0;
                            foreach($faqs as $faq){ $is++; ?>
                            <div class="main-collapsable mt-2 px-md-0">
                                <div class="rectangle-1-copy-2-holder entireBtn text-start " id="entire<?php echo $is; ?>">
                                    <i class="fa fa-plus me-2"></i> <?php echo $faq->question; ?>
                                </div>
                                <div class="slide" id="slide<?php echo $is; ?>">
                                    <div class="card card-body mt-2 mainCard">
                                        <div class="mainContentArea">
                                            <div class="iconTick d-flex">
                                                <p class="textTick"><?php echo $faq->answer; ?></p>
                                            </div>
                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="main-collapsable d-none" style="width:48%;">
            <div class="rectangle-1-copy-2-holder entireBtn text-start" id="entireBtnSecond">
                <i class="fa fa-plus me-2"></i> Tap here for more detals
            </div>
            <div class="slide" id="">
                <div class="card card-body mt-3 mainCard">
                    <div class="mainContentArea">
                        <div class="iconTick d-flex">
                            <p class="textTick">MOD 1</p>
                        </div>
                        <div class="iconTick d-flex">
                            <p class="textTick">MOD 2 ITS SUPER SICK 1</p>
                        </div>
                        <div class="iconTick d-flex">
                            <p class="textTick">MOD 2 ITS SUPER SICKMO`2 ITS SUPER SICK 1</p>
                        </div>
                        <div class="iconTick d-flex">
                            <p class="textTick">MOD 2 ITS SUPER SICK 1</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
		.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
    background: #000;
}
		.owl-theme .owl-dots .owl-dot span {
    width: 12px;
    height: 12px;
    margin: 5px 7px;
    background: transparent;
    display: block;
    -webkit-backface-visibility: visible;
    transition: opacity .2s ease;
    border-radius: 30px;
    border: 2px solid #000;
}
            .mainfooterLogo img {
    max-width: 90%;
    margin-bottom: 0;
}
            .mainWinner {
                .heading {
                    font-size: 57px;
                    font-family: "Tusker Grotesk 6600";
                    color: #010000;
                    line-height: 1.2;
                    text-align: center;
                    margin-bottom: 30px;
                    font-weight: 900;
                }

                #winner-carousel {
                    max-width: 100%;
                    margin: 0 auto;
                    

                    /* .owl-item .item {
                        transform: scale(0.6);
                        opacity: 0.7;
                        transition: all 0.3s ease-in;
                    }

                    .owl-item.active .item {
                        transform: scale(0.8);
                        opacity: 0.7;
                    }

                    owl-item .cloned .active {
                        transform: scale(0.6);
                        opacity: 0.7;
                        transition: all 0.3s ease-in;
                    }

                    .owl-item.active.center .item {
                        transform: scale(1);
                        opacity: 1;
                    } */

                    .winner-name {
                        font-size: 1.7rem !important;
                        line-height: 14px;
                        margin-top: 24px;
                        
                        font-family:'Myriad Pro Bold';
                        color: #010101;
                        text-align: center;
                        margin-bottom: 0;
                    }

                    .vehicle-name {
                         font-size: 17px !important;
            line-height: 44px;
            font-weight: 400;
            font-family: 'Myriad Pro Regular';
            color: #010101;
            text-align: center;
            margin-bottom: 0;
            margin-top: 10px;
                    }
                }
            }

            #winner-carousel.owl-carousel .owl-stage-outer{padding-bottom: 35px;overflow: visible !important;}
            #viewmasterDetail.owl-carousel .owl-stage-outer{padding-bottom: 50px;overflow: visible !important;}
.mainWinner {
    background-image: url(../../images/newtheme/previouswinner.png) !important;
}
                #winner-carousel.owl-carousel .item {
                   padding: 20px 3.165735% 1.4rem;
    position: relative;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    background: #f7f7f7 !important;
    background-position: center center;
    -webkit-box-shadow: 0 1px 9px 0 rgba(0, 0, 0, 0.44);
    -moz-box-shadow: 0 1px 9px 0 rgba(0, 0, 0, 0.44);
    box-shadow: 0 1px 9px 0 rgba(0, 0, 0, 0.44);
                    transition: transform 0.3s ease;
                    transform-origin: center center;
                }

                #winner-carousel.owl-carousel .item img {
                    width: 100%;
                    height: auto;
                    transition: transform 0.3s ease;
                }

                #viewmasterDetail .item-center {
                    transform: scale(1.1) !important;
                    transition: all 0.3s ease-in;
                }

                #viewmasterDetail .item-left,#viewmasterDetail .item-right {
                    transform: scale(0.9) !important;
                    opacity: 0.7;
                    transition: all 0.3s ease-in;
                }

                #winner-carousel .item-center {
                    transform: scale(1.1) !important;
                    transition: all 0.3s ease-in;
                }

                #winner-carousel .item-left,#winner-carousel .item-right {
                    transform: scale(0.9) !important;
                    opacity: 0.7;
                    transition: all 0.3s ease-in;
                }

                #winner-carousel .item-far-left,#winner-carousel .item-far-right {
                    transform: scale(0.75) !important;
                    opacity: 0.7;
                    transition: all 0.3s ease-in;
                }
                #winner-carousel .item-far-right{
                    margin-right: 0px !important;
                    margin-left: 50px !important;
                }
                #winner-carousel .item-far-left{
                    margin-left: -50px !important;
                }
				.viewmasterDetail,.owl-carousel,.carousel-custom-x-hide {
					overflow: hidden;
                }
				.d-none-desktop{display:none !important;}
                  .d-none-responsive{display:flex !important;}
                        button.tapBtn {
        font-size: 47px !important;}
        section.promotionBanner{height: 112vh;
    background-position: top center;background-size:100% auto !important;}

.desktopShow{display:block !important;}
.responsiveShow {display:none !important;}
					.time-unit {
    
    width: 65px;
}
.time-unit span {
font-size: 20px !important;}
	.right-alert{        right: -4px;
}
                @media only screen and (max-width: 767px){  
				.right-alert{    right: -12px;}
				.tapBtn.animated-button{height:auto !important;}
				button.tapBtn {
  
    padding: 15px !important;height:auto ;
}
button.tapBtn span{position:relative;top:0px;}
				
				.proudSection h3{margin-top: 0px;}
				
				.owl-nav {
    position: absolute;
    top: 37%;
    width: 100%;
}
button.owl-prev {
    left: 0;
    position: absolute;
    font-size: 34px !important;
    color: #fff !important;
}
button.owl-next {
    right: 0;
    position: absolute;
    font-size: 34px !important;
    color: #fff !important;
}
				.paddingbtmres{    padding-bottom: 20px !important;}
				.mainWinner {
    
    margin-top: -28px !important;
}
			.textTick{margin-left:0px;    margin-top: 0 !important;}
				.m-20{margin-top:20px;}
.col-12.aos-init.aos-animate p:last-child {
    display: none;
}	
.m-30{    margin-top: -30px;}			
.m20res{margin-top:10px;}

				.proudSection h3,.mainWinner .heading {
				font-size: 34px !important;}
					.packagetoEnter, .headingeach, .winnerReviews, .winnerName {
            font-family: "Tusker Grotesk 6600" !important;
        font-size: 12px;
        margin-top: 2px;
        margin-bottom: 0px;
        margin-left: 7px;padding-bottom:10px !important;
}
.winnerStyle, .time-unit span {
    font-family: 'Myriad Pro Regular' !important;
    font-size: 9px !important;
    margin-top: 0px !important;
}
					.customContainer h3 {
    font-family: 'Tusker Grotesk 6600' !important;
    font-size: 1.8rem !important;
}
					    .proudSection {
      
        margin-top: -75px !important;
    }
					.responsiveShow {display:block !important;}
					.desktopShow{display:none !important;}
					.familyImg{left:0;}
					.time-unit {
    
    width: 50px;
}
.digits {
    font-size: 28px;        font-family: 'Tusker Grotesk 6600';
}
.time-unit span {
font-size: 18px !important;
margin-top:10px;
}
					    .proudSection p {
       
        line-height: 1.5;        width: 80%;
        margin: 0px auto;
    }
					
					.pxfamily-0{padding-left:0px !important;padding-right:0px !important; width:70%;top: 8px !important;
        left: 0 !important;}
					.packagetoEnter {
    
    font-size: 2rem !important;
    margin-top: 2rem;
}
					.promotionBannerBtn {
    position: absolute;
    bottom: -66px;
  
    width: 91%;
   
}
					.mainDiv {
    margin-top: 0px !important;
}
button.tapBtn {
	    line-height: 2 !important;
   
    padding: 15px !important;
}
					.leftpadding{padding-right: 1.3rem !important;}
					.rightpadding{    padding-left: 1.3rem !important;}
                    .peres{padding-right:3px;}
                    .psres{padding-left:3px; }
                       .option ul li{font-size:9px !important}
                        section.promotionBanner {
             
background-size: 100% auto !important;height:700px !important;

    }
                        button.tapBtn {
        font-size: 1.2rem !important;}
                    .d-none-responsive{display:none !important;}
                    .d-none-desktop{display:block !important;}
                    #viewmasterDetail .giveawayContents img {

    
    padding-left: 0 !important;padding-top: 10px !important;
        padding-bottom: 10px !important;
}
                    .graybox img {
    max-width: 100%;
}
                  .viewmasterDetail   .caroutab-here-btn text-center p-0 w90 mxauto py-5 pt-0sel-cells {width:90% !important;}

                    .iconTick.d-flex {line-height: 1.1;text-align:left;}
                    #winner-carousel .item-center {
                        transform: scale(1) !important;
                    }   
                    #winner-carousel .item-left,#winner-carousel .item-right {
                        transform: scale(1) !important;
                    }
                    #winner-carousel .item-far-right{
                        margin-left: 30px !important;
                    }
                    #winner-carousel .item-far-left{
                        margin-left: -30px !important;
                    }
                }
        </style>
        <section class="mainWinner py-md-5 py-4">
            <div class="container-fluid px-0">
                <div>
                    <p class="heading mb-5 m-20" data-aos="fade-down">PREVIOUS WINNERS</p>
                    <div class="owl-carousel owl-theme pt-3" data-aos="fade-in" data-aos-delay="400" id="winner-carousel">
						<!-- 1 -->
                        <div class="item">
                            <img src="/images/winners/Matthew-M.png" alt="Matthew">
                            <p class="winner-name">Matthew M, VIC</p>
                            <p class="vehicle-name">Land Cruiser & Caravan</p>
                        </div>
						<!-- 2 -->
                        <div class="item">
                            <img src="/images/winners/Zachary-A.png" alt="Zachary-A">
                            <p class="winner-name">Zachary A, VIC</p>
                            <p class="vehicle-name">$100,000</p>
                        </div>
						<!-- 3 -->
                        <div class="item">
                            <img src="/images/winners/Vivien-M.png" alt="Andrew">
                            <p class="winner-name">Vivien M, VIC</p>
                            <p class="vehicle-name">$50,000</p>
                        </div>

					
                        <div class="item">
                            <img src="/images/winners/Andrew.png" alt="Andrew">
                            <p class="winner-name">Andrew, VIC</p>
                            <p class="vehicle-name">$70,000</p>
                        </div>
                        <div class="item">
                            <img src="/images/winners/Daniel.png" alt="Daniel">
                            <p class="winner-name">Daniel, NSW</p>
                            <p class="vehicle-name">$100,000</p>
                        </div>
                        <div class="item">
                            <img src="/images/winners/Davids.png" alt="Davids">
                            <p class="winner-name">David, NSW</p>
                            <p class="vehicle-name">$100,000</p>
                        </div>
                        <div class="item">
                            <img src="/images/winners/ichael.png" alt="ichael">
                            <p class="winner-name">Michael, NSW</p>
                            <p class="vehicle-name">$100,000</p>
                        </div>
                        <div class="item">
                            <img src="/images/winners/Martin.png" alt="Martin">
                            <p class="winner-name">Martin, WA</p>
                            <p class="vehicle-name">$100,000</p>
                        </div>

                         <div class="item">
                            <img src="/images/winners/Saliya.png" alt="Saliya">
                            <p class="winner-name">Saliya, NSW</p>
                            <p class="vehicle-name">$100,000</p>
                        </div>

                         <div class="item">
                            <img src="/images/winners/Sarah.png" alt="Sarah">
                            <p class="winner-name">Sarah, NSW</p>
                            <p class="vehicle-name">$100,000</p>
                        </div>
                         <div class="item">
                            <img src="/images/winners/Vance.png" alt="Vance">
                            <p class="winner-name">Vance, NSW</p>
                            <p class="vehicle-name">$100,000</p>
                        </div>
                           <div class="item">
                            <img src="/images/winners/Jean.png" alt="Jean">
                            <p class="winner-name">Jean,  QLD</p>
                            <p class="vehicle-name">76 Series Land Cruiser</p>
                        </div>
                          <div class="item">
                            <img src="/images/winners/Sharni.png" alt="Sharni">
                            <p class="winner-name">Sharni,  NSW</p>
                            <p class="vehicle-name">300 Series Land Cruiser</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid d-none">
                <div class="row">
                    <div class="tab-here-btn select-packageButton  text-center p-0 w90 mxauto pt-5">
                        <button class="tapBtn animated-button w-100 scroll-button desktopShow" data-aos="fade-right" data-target="packagesp" id="tabhereBtn4">
                            <span class="text"></span>
                        </button>
                        <button class="tapBtn animated-button animated-button button w-100 responsiveShow scroll-button" data-target="packagesp">{{$contentData->field_short_8}}</button>

                    </div>
                </div>
            </div>
			
			<div class="container customContainer">
			  <div class="tab-here-btn select-packageButton  text-center p-0 w100 m-0 pt-5">
                    <button class="tapBtn animated-button w-100 scroll-button desktopShow specificbtn" data-aos="fade-right" data-target="packagesp" id="tabhereBtn11">
                        <span class="text"></span>
                    </button>
                    <button class="tapBtn animated-button button w-100 responsiveShow scroll-button" data-target="packagesp">{{$contentData->field_short_8}}</button>
                </div>
			
			
			
			
              
				
                
            </div>
        </section>
        @include('pages.footer_new')

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <header>
                        <div class=" bgBlack text-center py-2" style="background-color:#000;">
                            <div class="container" style="position:relative;">
                                <h3 class="enterNowHeading">ENTER NOW & WIN! </h3>
								  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="background: transparent;
    border: none;
    color: #fff;
    position: absolute;
    right: 0;
    top: 20%;
    font-size: 35px;">
                            &times;
                        </button>
                            </div>
                        </div>
                    </header>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="formlayout">
                                    <div class="anchor mt-3">
                                        <p class="text-2">
                                            <span class="text-style">Have a coupon code? </span>
                                            <a  onclick="showCoupon()" href="javascript:;" class="text-style-2">Click here to enter it</a>
                                        </p>
                                    </div>
                                    <div  class="couponDiv  row hide">
                                            <div class="col-lg-6">
                                                <div class="form-group pb-3">
                                                    <input type="text" class="form-control" id="redeem"  placeholder="Enter coupon code" aria-label="First name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                    <div class="text-center tapBtn" data-aos="fade-right" style="line-height: 1;">
                                                <a class="animated-button w-100 scroll-button"  id="redeemBtn" onclick="verifyCoupon()">Apply Coupon</a>
                                            </div>
                                            </div>
                                      
                                            </div>
            </div>
                                    <form>
                                        <h3 class="headingForm mt-2 mb-2">CONTACT INFORMATION*</h3>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group pb-3">
                                                    <input type="text" class="form-control" id="firstName" required placeholder="First name" aria-label="First name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group pb-3">
                                                    <input type="text" class="form-control" id="lastName" required placeholder="Last name" aria-label="Last name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group pb-3">
                                                    <input type="text" class="form-control" id="email" required placeholder="Email Address" aria-label="Email Address">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group pb-3">
                                                    <input type="text" class="form-control" id="phone" required placeholder="Phone Number" aria-label="Phone Number">
                                                </div>
                                            </div>
                                        </div>
										<div class="form-check mt-2 mb-4 formflex">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="width: 32.14px;
margin-left:-2px;
    margin-top: 0;">
                                            <label class="form-check-label textcheckbox" for="flexCheckDefault" style=""> ADD <span id="extInt"  ></span> EXTRA ENTRIES FOR $<span id="extInAmt" ></span> </label>
                                        </div>
										<!-- <h2 class="headingForm mt-2 mb-2"> PAY THROUGH*</h2> -->
									<div class="payment-options">
  <label class="custom-label">
    <input type="radio" class="form-control" name="payment_mode" value="card" />
    <span class="custom-radio"></span>
    Credit Card
  </label>

  <label class="custom-label">
    <input type="radio" class="form-control" name="payment_mode" value="apple" />
    <span class="custom-radio"></span>
    Apple Pay
  </label>
</div>
										
										<div class="hide ccPayment" >
                                        <h3 class="headingForm mt-2 mb-2">PAYMENT DETAILS*</h3>
                                        <input type="hidden" name="transaction_token" id="transaction_token" />
                                        <div class="row" style="display:none">
                                            <div class="col-lg-12">
                                                <div class="form-group pb-3">
                                                    <label class="form-label" for="card_holder">Card Holder</label>
                                                    <input type="text" class="form-control" id="card_holder" placeholder="Card Holder Name" aria-label="Card Holder">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group pb-3">
                                                    <label class="form-label" for="number_div">Card number</label>
                                                    <div id="number_div" class="form-control" style="height: 53px; "></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group pb-3">
                                                    <label class="form-label" for="exp_date">Expiration Date</label>
                                                    <input type="text" class="form-control" id="exp_date" placeholder="MM/YY" aria-label="Expiration Date">
                                                    <small id="exp_date_help" class="form-text text-muted">Enter expiration date as MM/YY.</small>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group pb-3">
                                                    <label class="form-label" for="cvv_div">CVV</label>
                                                    <div id="cvv_div" class="form-control" style="height: 53px; "></div>
                                                </div>
                                            </div>
											
                                        </div>
                                        </div>
										
                                        <h3 class="headingForm mt-5"> ORDER SUMMARY</h3>
                                        <div id="order-summary"></div>
                                        <div class="form-check mt-4 formflex" style="background: transparent;
    color: #000;
    padding-left: 0;
">
                                            <input class="form-check-input" type="checkbox" checked value="" id="flexCheckDefault2" style="width: 32.14px;
margin-left:-2px;
    margin-top: 0;">
                                            <label class="form-check-label textcheckbox" for="flexCheckDefault2" style="
    font-style: italic;
    line-height: 1;
    font-weight: 700;
"> Keep me updated with winners &amp; special offers via Email + SMS</label>
                                        </div>
                                        <div class="mt-2">
                                            <div class="errorDiv text-danger pb-1"></div>
                                         <style>.tapBtn a {
    color: #fff;
    font-size: 1.3rem;
}</style>
                                            <div class="ccBtn text-center tapBtn">
                                                <a class="animated-button w-100 scroll-button" data-target="packagesp" id="tabhereBtn4555" onclick="disableAnchor(this)">{{$contentData->field_short_5}}</a>
                                            </div>
                                            <div class="appleBtn hide ">
<apple-pay-button  onclick="applePay()" buttonstyle="black" type="plain" locale="en-US"></apple-pay-button>											

                                            </div>
											
                                        </div>
                                        <div class="disclaimer py-4">
                                            <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#">Privacy Policy</a>
                                            </p>
                                        </div>
                                        <div class="footer">
                                            <img src="./../images/aboutus/instant.png?1234123" class="w-100">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
        <script src=" https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

        <!--

        <script data-main="payment-js" src="https://test-gateway.tillpayments.com/js/integrated/payment.1.3.min.js"></script>

		-->
		<script data-main="payment-js" src="https://gateway.tillpayments.com/js/integrated/payment.1.3.min.js"></script>
		
		
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js" integrity="sha512-eYSzo+20ajZMRsjxB6L7eyqo5kuXuS2+wEbbOkpaur+sA2shQameiJiWEzCIDwJqaB0a4a6tCuEvCOBHUg3Skg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script crossorigin
        src="https://applepay.cdn-apple.com/jsapi/1.latest/apple-pay-sdk.js"
        ></script>
		
        <script>
		 // Initialize AOS
    AOS.init({
      duration: 1000, // Animation duration in milliseconds
      easing: 'ease-in-out', // Animation easing
      once: false, // Whether animation happens only once
    });
		
		 
  const image = document.querySelector(".tenXimg");
    let scale = 1;

    // Function to handle mouse wheel zoom
    image.addEventListener('wheel', (event) => {
      event.preventDefault();
      
      // Check if scrolling up or down
      if (event.deltaY < 0) {
        // Zoom In
        scale += 0.1;
      } else {
        // Zoom Out
        if (scale > 0.1) {
          scale -= 0.1;
        }
      }

      // Apply scale transform
      image.style.transform = `scale(${scale})`;
    });
            
            let referer = '{{$referrer}}';
			let date = '{{$countDown->countdown_date}} {{$countDown->countdown_time}}';
             const initialTargetDate = new Date(date).getTime();
        let targetDate = initialTargetDate;
        let countdownText = "5X ENTRY FLASH SALE ENDS IN";

        function updateTimer() {
            const now = new Date().getTime();
            const timeRemaining = targetDate - now;

            if (timeRemaining <= 0) {
                // Show "EXPIRED" and hide the timer
              //  document.getElementById('expired').style.display = 'block';
                document.getElementById('timer').style.display = 'none';
                clearInterval(timerInterval);
                return;
            }

            // Change target date and text if 1 minute is left
            if (timeRemaining <= 60000 && targetDate === initialTargetDate) {
                targetDate = new Date("September 27, 2024 23:59:59").getTime();
                countdownText = "WINNER DRAWN IN";
                document.getElementById('countdownText').textContent = countdownText;
            }

            // Calculate days, hours, minutes, and seconds
            const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

            // Update the display
            document.getElementById('days').textContent = days;
            document.getElementById('hours').textContent = hours;
            document.getElementById('minutes').textContent = minutes;
            document.getElementById('seconds').textContent = seconds;
        }

        const timerInterval = setInterval(updateTimer, 1000);

        updateTimer();
            // const targetDate = new Date("September 20, 2024 23:59:59").getTime();

            // function updateTimer() {
            //     const now = new Date().getTime();
            //     const timeRemaining = targetDate - now;
            //     if (timeRemaining <= 0) {
            //         // Show "EXPIRED" and hide the timer
            //         document.getElementById('expired').style.display = 'block';
            //         document.getElementById('timer').style.display = 'none';
            //         clearInterval(timerInterval);
            //         return;
            //     }
            //     // Calculate days, hours, minutes, and seconds
            //     const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
            //     const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            //     const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
            //     const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);
            //     // Update the display
            //     document.getElementById('days').textContent = days;
            //     document.getElementById('hours').textContent = hours;
            //     document.getElementById('minutes').textContent = minutes;
            //     document.getElementById('seconds').textContent = seconds;
            // }
            // // Update the timer every second
            // const timerInterval = setInterval(updateTimer, 1000);
            // // Initial call to display the timer immediately
            // updateTimer();
            document.getElementById('exp_date').addEventListener('input', function(event) {
                const input = event.target;
                let value = input.value.replace(/\D/g, ''); // Remove non-digit characters
                if (value.length > 2) {
                    value = `${value.slice(0, 2)}/${value.slice(2, 4)}`; // Format as MM/YY
                }
                input.value = value;
                // Basic validation
                const regex = /^(0[1-9]|1[0-2])\/\d{2}$/;
                if (regex.test(value) || value === '') {
                    input.classList.remove('is-invalid');
                    document.getElementById('exp_date_help').textContent = 'Enter expiration date as MM/YY.';
                } else {
                    input.classList.add('is-invalid');
                    document.getElementById('exp_date_help').textContent = 'Invalid date format. Please use MM/YY.';
                }
            });
            document.getElementById('exp_date').addEventListener('blur', function() {
                const value = this.value;
                const regex = /^(0[1-9]|1[0-2])\/\d{2}$/;
                if (!regex.test(value)) {
                  //  alert('Please enter a valid expiration date in MM/YY format.');
                   // this.focus();
                }
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                function animateLettersOnHover(buttonId, text) {
                    const button = document.getElementById(buttonId);
                    if (!button) {
                        return;
                    }
                    const span = button.querySelector('.text');
                    if (!span) {
                        console.error('Text span not found within the button.');
                        return;
                    }
                    // Split text into characters
                    const characters = text.split('').map(char => char === ' ' ? '&nbsp;' : char); // Handle spaces
                    // Clear existing content
                    span.innerHTML = '';
                    characters.forEach((char, index) => {
                        // Create a span for each character
                        const charSpan = document.createElement('span');
                        charSpan.className = 'char';
                        charSpan.innerHTML = char; // Use innerHTML for handling non-breaking spaces
                        charSpan.style.animationDelay = `${index * 0.02}s`; // Staggered animation
                        span.appendChild(charSpan);
                    });
                }
                // Initialize animation on button with specific text
                  animateLettersOnHover('enternow0', 'Enter Now');
                animateLettersOnHover('enternow1', 'Enter Now');
                animateLettersOnHover('enternow2', 'Enter Now');
                animateLettersOnHover('enternow3', 'Enter Now');
                animateLettersOnHover('enternow4', 'Enter Now');
                animateLettersOnHover('enternow5', 'Enter Now');
                animateLettersOnHover('tabhereBtn1', '{{$contentData->field_short_4}}');
				animateLettersOnHover('tabhereBtn12', '{{$contentData->field_short_4}}');
				animateLettersOnHover('tabhereBtn10', '{{$contentData->field_short_4}}');
				animateLettersOnHover('tabhereBtn11', '{{$contentData->field_short_4}}');
                animateLettersOnHover('tabhereBtn2', '{{$contentData->field_short_4}}');
                animateLettersOnHover('tabhereBtn3', '{{$contentData->field_short_4}}');
                animateLettersOnHover('tabhereBtn4', '{{$contentData->field_short_4}}');
                //   animateLettersOnHover('tabhereBtn5', 'TAP HERE TO WIN A LAND CRUISER');
            });

            document.getElementById('entireBtn').addEventListener('click', function() {
                var slideDiv = document.getElementById('slideDiv');
                if (slideDiv.classList.contains('show')) {
                    // If the div is already shown, hide it
                    slideDiv.classList.remove('show');
                    slideDiv.classList.add('collapsing');
                    // Set max-height to 0 for collapsing
                    setTimeout(function() {
                        slideDiv.classList.remove('collapsing');
                    }, 500); // Match the duration of the transition
                } else {
                    // If the div is hidden, show it
                    slideDiv.classList.add('collapsing');
                    slideDiv.classList.add('show');
                    // Force a reflow to enable transition
                    void slideDiv.offsetWidth;
                    slideDiv.classList.remove('collapsing');
                }
            });
             document.getElementById('entire123').addEventListener('click', function() {
                var slideDiv = document.getElementById('slide123');
                if (slideDiv.classList.contains('show')) {
                    // If the div is already shown, hide it
                    slideDiv.classList.remove('show');
                    slideDiv.classList.add('collapsing');
                    // Set max-height to 0 for collapsing
                    setTimeout(function() {
                        slideDiv.classList.remove('collapsing');
                    }, 500); // Match the duration of the transition
                } else {
                    // If the div is hidden, show it
                    slideDiv.classList.add('collapsing');
                    slideDiv.classList.add('show');
                    // Force a reflow to enable transition
                    void slideDiv.offsetWidth;
                    slideDiv.classList.remove('collapsing');
                }
            });
            
            document.getElementById('entire1').addEventListener('click', function() {
                var slideDiv = document.getElementById('slide1');
                if (slideDiv.classList.contains('show')) {
                    // If the div is already shown, hide it
                    slideDiv.classList.remove('show');
                    slideDiv.classList.add('collapsing');
                    // Set max-height to 0 for collapsing
                    setTimeout(function() {
                        slideDiv.classList.remove('collapsing');
                    }, 500); // Match the duration of the transition
                } else {
                    // If the div is hidden, show it
                    slideDiv.classList.add('collapsing');
                    slideDiv.classList.add('show');
                    // Force a reflow to enable transition
                    void slideDiv.offsetWidth;
                    slideDiv.classList.remove('collapsing');
                }
            });
            document.getElementById('entire2').addEventListener('click', function() {
                var slideDiv = document.getElementById('slide2');
                if (slideDiv.classList.contains('show')) {
                    // If the div is already shown, hide it
                    slideDiv.classList.remove('show');
                    slideDiv.classList.add('collapsing');
                    // Set max-height to 0 for collapsing
                    setTimeout(function() {
                        slideDiv.classList.remove('collapsing');
                    }, 500); // Match the duration of the transition
                } else {
                    // If the div is hidden, show it
                    slideDiv.classList.add('collapsing');
                    slideDiv.classList.add('show');
                    // Force a reflow to enable transition
                    void slideDiv.offsetWidth;
                    slideDiv.classList.remove('collapsing');
                }
            });
            document.getElementById('entire3').addEventListener('click', function() {
                var slideDiv = document.getElementById('slide3');
                if (slideDiv.classList.contains('show')) {
                    // If the div is already shown, hide it
                    slideDiv.classList.remove('show');
                    slideDiv.classList.add('collapsing');
                    // Set max-height to 0 for collapsing
                    setTimeout(function() {
                        slideDiv.classList.remove('collapsing');
                    }, 500); // Match the duration of the transition
                } else {
                    // If the div is hidden, show it
                    slideDiv.classList.add('collapsing');
                    slideDiv.classList.add('show');
                    // Force a reflow to enable transition
                    void slideDiv.offsetWidth;
                    slideDiv.classList.remove('collapsing');
                }
            });
            document.getElementById('entire4').addEventListener('click', function() {
                var slideDiv = document.getElementById('slide4');
                if (slideDiv.classList.contains('show')) {
                    // If the div is already shown, hide it
                    slideDiv.classList.remove('show');
                    slideDiv.classList.add('collapsing');
                    // Set max-height to 0 for collapsing
                    setTimeout(function() {
                        slideDiv.classList.remove('collapsing');
                    }, 500); // Match the duration of the transition
                } else {
                    // If the div is hidden, show it
                    slideDiv.classList.add('collapsing');
                    slideDiv.classList.add('show');
                    // Force a reflow to enable transition
                    void slideDiv.offsetWidth;
                    slideDiv.classList.remove('collapsing');
                }
            });
            document.getElementById('entire5').addEventListener('click', function() {
                var slideDiv = document.getElementById('slide5');
                if (slideDiv.classList.contains('show')) {
                    // If the div is already shown, hide it
                    slideDiv.classList.remove('show');
                    slideDiv.classList.add('collapsing');
                    // Set max-height to 0 for collapsing
                    setTimeout(function() {
                        slideDiv.classList.remove('collapsing');
                    }, 500); // Match the duration of the transition
                } else {
                    // If the div is hidden, show it
                    slideDiv.classList.add('collapsing');
                    slideDiv.classList.add('show');
                    // Force a reflow to enable transition
                    void slideDiv.offsetWidth;
                    slideDiv.classList.remove('collapsing');
                }
            });
            document.getElementById('entire6').addEventListener('click', function() {
                var slideDiv = document.getElementById('slide6');
                if (slideDiv.classList.contains('show')) {
                    // If the div is already shown, hide it
                    slideDiv.classList.remove('show');
                    slideDiv.classList.add('collapsing');
                    // Set max-height to 0 for collapsing
                    setTimeout(function() {
                        slideDiv.classList.remove('collapsing');
                    }, 500); // Match the duration of the transition
                } else {
                    // If the div is hidden, show it
                    slideDiv.classList.add('collapsing');
                    slideDiv.classList.add('show');
                    // Force a reflow to enable transition
                    void slideDiv.offsetWidth;
                    slideDiv.classList.remove('collapsing');
                }
            });
            document.getElementById('entire7').addEventListener('click', function() {
                var slideDiv = document.getElementById('slide7');
                if (slideDiv.classList.contains('show')) {
                    // If the div is already shown, hide it
                    slideDiv.classList.remove('show');
                    slideDiv.classList.add('collapsing');
                    // Set max-height to 0 for collapsing
                    setTimeout(function() {
                        slideDiv.classList.remove('collapsing');
                    }, 500); // Match the duration of the transition
                } else {
                    // If the div is hidden, show it
                    slideDiv.classList.add('collapsing');
                    slideDiv.classList.add('show');
                    // Force a reflow to enable transition
                    void slideDiv.offsetWidth;
                    slideDiv.classList.remove('collapsing');
                }
            });
            // script.js
            document.addEventListener('DOMContentLoaded', () => {
                const bigImage = document.getElementById('bigImage');
                const smallImages = document.querySelectorAll('.small');
                smallImages.forEach(smallImg => {
                    smallImg.addEventListener('click', () => {
                        // Fade out the current big image
                        bigImage.style.opacity = '0';
                        // Update the big image source with the new one
                        setTimeout(() => {
                            bigImage.src = smallImg.getAttribute('data-large');
                            // Fade in the new big imagesection.promotionBanner
                            bigImage.style.opacity = '1';
                        }, 500); // Match the transition duration in CSS
                    });
                });
            });

            function updateBackgroundImage() {
                const backgroundDiv = document.getElementById('backgroundDiv');
				const mainHeroBannerImages = document.getElementById('mainHeroBannerImages');
                const bigCarDiv = document.getElementById('bigImage');
                const modes = document.getElementById('Modesofthree');
                const prize = document.getElementById('prize');
                const prizeone = document.getElementById('prizeone');
                const secondprize = document.getElementById('secondprize');
				const family = document.getElementById('family');
                if (window.innerWidth < 768) {
					 if(family){
					 family.src = 'https://rsrewards.com.au/images/homeimages/Smith-Family-Mobile.png?1233225dasd';
						 
					 }
				//backgroundDiv.style.backgroundImage = "url('./../images/heroBanner/{{$banner->mobile_image_path}}?12345')";
				mainHeroBannerImages.src = "./../images/heroBanner/{{$banner->mobile_image_path}}?12345";
                    modes.src = "./../images/aboutus/checkModesMobile.png?1234";
                    //  prize.src = "./../images/aboutus/mobilePrize.png";
                    prizeone.src = "./../images/aboutus/prizeoneMobile.png";
                    secondprize.src = "./../images/aboutus/secondprizeMobile.png";
							

                } else {
				family.src = 'https://rsrewards.com.au/images/homeimages/Smith-Family-Desktop.png?125saa';
     					
                 //   backgroundDiv.style.backgroundImage = "url('./../images/heroBanner/{{$banner->desktop_image_path}}?12345')";
                    mainHeroBannerImages.src = "./../images/heroBanner/{{$banner->desktop_image_path}}?12345";
					modes.src = "./../images/aboutus/checkModes.png?1234";
                    // prize.src = "./../images/aboutus/prize.png";
                    prizeone.src = "./../images/aboutus/{{$contentData->image4}}";
                    secondprize.src = "./../images/aboutus/{{$contentData->image5}}";
							 family.src = 'https://rsrewards.com.au/images/homeimages/familyD.png?1234';

                }
            }
            // Run on page load
            updateBackgroundImage();

            function updateClassesOnResize() {
                // Define the media query
                const mediaQuery = window.matchMedia("(max-width: 767px)");
                // Get all elements with the class 'col-lg-1'
                const elements = document.querySelectorAll('.col-lg-1');
                const secondelement = document.querySelectorAll('.testing');
                // Loop through each element and remove the 'w0' class if the media query matches
                elements.forEach(element => {
                    if (mediaQuery.matches) {
                        element.classList.remove('w0');
                    }
                });
                secondelement.forEach(secondelement => {
                    if (mediaQuery.matches) {
                        secondelement.classList.remove('w19');
                    }
                });
            }
            // Call the function on page load
            updateClassesOnResize();
            // Add an event listener for when the screen is resized
            window.addEventListener('resize', updateClassesOnResize);
        </script>
        <script>
            var owl = $('#solutions-carousel');
            owl.owlCarousel({
                items: 1,
                loop: true,
                margin: 5,
                autoplayHoverPause: true,
                dotsContainer: '#carousel-custom-dots',
                nav: true,
				
            });
            $('.owl-dot').click(function() {
                owl.trigger('to.owl.carousel', [$(this).index(), 300]);
            });
            $('.owl-prev').click(function() {
                owl.trigger('prev.owl.carousel');
            });
            $('.owl-next').click(function() {
                owl.trigger('next.owl.carousel');
            });
        </script>
        <script>

            var masterSlider = $('#viewmasterDetail');
    
            masterSlider.owlCarousel({
                items: 1,
                center: true,
                loop: true,
                dots: false,
                stagePadding: 50,
                autoplay:true,
                margin: 30,
                onInitialized: scaleItemsMaster,
                onTranslated: scaleItemsMaster,
                responsive: {
                    0: {
                        items: 1
                    },
                    786: {
                        items: 1.5
                    }
                }
            });

            function scaleItemsMaster() {
                var itemsMaster = masterSlider.find('.owl-item');
                itemsMaster.removeClass('item-center item-left item-right item-far-left item-far-right');

                itemsMaster.each(function(i, item) {
                    var $item = $(item);

                    if ($item.hasClass('center')) {
                        $item.addClass('item-center');
                    } else if ($item.prev().hasClass('center')) {
                        $item.addClass('item-left');
                    } else if ($item.next().hasClass('center')) {
                        $item.addClass('item-right');
                    } else if ($item.prev().prev().hasClass('center')) {
                        $item.addClass('item-far-left');
                    } else if ($item.next().next().hasClass('center')) {
                        $item.addClass('item-far-right');
                    }
                });
            }

            var winnerOwl = $('#winner-carousel');
    
            winnerOwl.owlCarousel({
                items: 3,  
                center: true,
                loop: true,
                dots: true,
                stagePadding: 50,
                responsive: {
                    0: {
                        margin: 30,
                        items: 1
                    },
                    786: {
                        margin: 50,
                        items: 3
                    }
                },
                onInitialized: scaleItems,
                onTranslated: scaleItems 
            });

            function scaleItems() {
                var items = winnerOwl.find('.owl-item');
                items.removeClass('item-center item-left item-right item-far-left item-far-right');

                items.each(function(i, item) {
                    var $item = $(item);

                    if ($item.hasClass('center')) {
                        $item.addClass('item-center');
                    } else if ($item.prev().hasClass('center')) {
                        $item.addClass('item-left');
                    } else if ($item.next().hasClass('center')) {
                        $item.addClass('item-right');
                    } else if ($item.prev().prev().hasClass('center')) {
                        $item.addClass('item-far-left');
                    } else if ($item.next().next().hasClass('center')) {
                        $item.addClass('item-far-right');
                    }
                });
            }
function disableAnchor(anchor) {
    // Prevent further clicks
    anchor.onclick = null; // Remove the onclick event
    anchor.style.pointerEvents = 'none'; // Disable clicking
    anchor.style.opacity = '0.5'; // Optional: change the appearance
    anchor.textContent = 'Processing...'; // Optional: change the text
    formsubmit(anchor); // Call your form submission function
}

function enableAnchor(anchor) {
    anchor.onclick = () => disableAnchor(anchor); // Re-assign the click event
    anchor.style.pointerEvents = 'auto'; // Re-enable clicking
    anchor.style.opacity = '1'; // Reset appearance
    anchor.textContent = 'CLICK TO WIN A BRAND NEW SAHARA ZX'; // Reset text
}
</script>			
			
        </script>
        <script>
			var packageName = "";
            var myPackages = ' <?php echo json_encode($packages); ?> ';
       localStorage.removeItem('email');
       localStorage.removeItem('subscriptionId');
       localStorage.removeItem('customerId');
       localStorage.removeItem('extraTicket');
       localStorage.removeItem('basic');

            function interceptSubmit() {
                return new Promise((resolve, reject) => {
                    const expDate = document.getElementById('exp_date').value; // Get the value from the input
                    const [month, year] = expDate.split('/'); //				
                    var data = {
                        card_holder: $('#firstName').val() + ' ' + $('#lastName').val(),
                        month: month,
                        year: year
                    };
                    payment.tokenize(data, //additional data, MUST include card_holder (or first_name & last_name), month and year
                        function(token, cardData) { //success callback function
                            $('#transaction_token').val(token); //store the transaction token
                            resolve(true);
                            //$('#payment_form').get(0).submit(); //submit the form
                        },
                        function(errors) { //error callback function
                            reject(errors);
                            //render error information here
                        });
                })
            }
            var payment = new PaymentJs();
            document.addEventListener('DOMContentLoaded', () => {
                //PAYMENT
				//test H1nQW1NdmOG1pX16Olgh
				//Pr GucO7pIlXFl8HbJLEYFZ
                payment.init('GucO7pIlXFl8HbJLEYFZ', 'number_div', 'cvv_div', function(payment) {
                    const styleObj = {
                        'background': 'white',
                        'color': 'black',
                        'font-size': '16 px',
                        'border-radius': '4 px',
                        'width': '100 % ',
                        'padding': '0.75 rem',
                        'outline': '0 px',
                        'box-shadow': 'none',
                        'height': '50 px',
                        'border': '1 px solid rgb(204, 204, 204)',
                    };
                    payment.setNumberStyle({
                        'background': 'white',
                        'color': 'black',
                        'font-size': '16px',
                        'border-radius': '4px',
                        'width': '100%',
                        'padding': '0',
                        'outline': '0px',
                        'box-shadow': 'none',
                        'height': 'auto',
                        'border': 'none'
                    });
                    //					'border': 'none',
                    //					'width': '100%',
                    payment.setCvvStyle({
                        'background': 'white',
                        'color': 'black',
                        'font-size': '16px',
                        'border-radius': '4px',
                        'width': '100%',
                        'padding': '0',
                        'outline': '0px',
                        'box-shadow': 'none',
                        'height': 'auto',
                        'border': 'none'
                    });
                    payment.cvvOn('input', function(data) {
                        console.log("aa");
                        // alert('A number was entered');
                    });
                });
            });
            /*  script start **/
            function validateEmail(email) {
                const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return regex.test(email);
            }
    function getUrlParameter(name) {
        var url = window.location.href;
        var paramValue = new URL(url).searchParams.get(name);
        return paramValue;
    }			
			
            async function saveUser(anchor) {
                $.blockUI({
                    message: ' < h3 > Just a moment... < /h3>'
                });
                let package = $("#package").val();
                let firstName = $("#firstName").val();
                let lastName = $("#lastName").val();
                let email = $("#email").val();
                let phone = $("#phone").val();
                let password = $("#password").val();
				let redeem = $("#redeem").val();  
				let utmSource = getUrlParameter('utm_source');
				let campaignName = getUrlParameter('campaign_name');				
                $("#order-declined-message").css("display", "none");
                $("#submit").attr("disable", true);
                $("#submit").html("Please wait ...");
                try {
                    const PaymentResponse = await interceptSubmit();
                    let tp = $('#transaction_token').val();
                    const extraTicket = $('#flexCheckDefault').is(':checked');
					const subs = $('#flexCheckDefault2').is(":checked");
					
                    $.ajax({
                        type: 'POST',
                        url: ' <?php echo url("/register"); ?> ',
                        headers : {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        data: "name=test&first_name=" + firstName + "&last_name=" + lastName + "&email=" + email + "&phone=" + phone + "&password=" + password + "&plan_id=" + foundItem.id + "&tp=" + tp + "&extraTicket=" + extraTicket + "&purchase_type=onetime&redeem="+redeem+"&utm_source="+utmSource+"&campaign_name="+campaignName+"&referer="+referer+"&subs="+subs,
                        success: function(response) {
                            $.unblockUI();
                            if (response.success) {
								
                    if ($('#flexCheckDefault').is(':checked')) {
						   let pprice = (parseInt(foundItem.price) + foundItem.max_users).toFixed(2);

							  window.dataLayer = window.dataLayer || [];
							  window.dataLayer.push({
								'event': 'purchase',
								'transactionId': '{{ csrf_token() }}',        
								'transactionTotal': pprice,       
								'transactionCurrency': 'AUD',     
								'transactionProducts': [{
								  'id': '1',                  
								  'name': foundItem.name,       
								  'category': 'Onetime',       
								  'price': pprice,                 
								  'quantity': 1
								}]
							  });
						
					}
					else{
						let pprice = (parseInt(foundItem.price).toFixed(2));

													
							  window.dataLayer = window.dataLayer || [];
							  window.dataLayer.push({
								'event': 'purchase',
								'transactionId': '{{ csrf_token() }}',        
								'transactionTotal': pprice,       
								'transactionCurrency': 'AUD',     
								'transactionProducts': [{
								  'id': '1',                  
								  'name': foundItem.name,       
								  'category': 'Onetime',       
								  'price': pprice,                 
								  'quantity': 1
								}]
							  });
													
												
					}
								
						   

								enableAnchor(anchor);
                                localStorage.setItem('email', response.data.email);
                                localStorage.setItem('subscriptionId', response.data.subscriptionId);
                                localStorage.setItem('customerId', response.data.customerId);
                                localStorage.setItem('extraTicket', extraTicket);
                                // Optionally, log them to verify
                                console.log('Email:', localStorage.getItem('email'));
                                console.log('Subscription ID:', localStorage.getItem('subscriptionId'));
                                console.log('Customer ID:', localStorage.getItem('customerId'));
                                console.log('Extra Tickets:', localStorage.getItem('extraTicket'));
                                let dashboardUrl = @json(route('pages.up-sell'));
                                console.log("dashboardUrl", dashboardUrl);
                                window.location.href = dashboardUrl;
                            } else {
								enableAnchor(anchor);
                                $("#order-declined-message").html(response.message);
                                $("#order-declined-message").css("display", "block");
                                $(".errorDiv").html(response.error);
                                return;
                            }
                        },
                        error: function(xhr, status, error) {
                            $.unblockUI();
							enableAnchor(anchor);
                            // Handle error
                            var errorResponse = JSON.parse(xhr.responseText);
                            console.log('Error message:', errorResponse.message);
                            $("#order-declined-message").css("display", "block");
                            $("#order-declined-message").html(errorResponse.message);
                            $(".errorDiv").html(errorResponse.message);
                            return;
                        }
                    });
                } catch (error) {
                    $.unblockUI();
					enableAnchor(anchor);
                    $(".errorDiv").html(error[0].message);
                    return;
                }
            }
            var selectPackage = "";
            var price = 0;
            var foundItem = null;
            $(document).ready(function() {
                $('#flexCheckDefault').on('change', function() {
                    if ($('#flexCheckDefault').is(':checked')) {
                        price = (parseInt(foundItem.price) + foundItem.max_users).toFixed(2);
                        $('.total-amount').html(`
																																																													<strong>AUD $${price}</strong>`)
					$(".my-extra").removeClass("hide");
					} else {
					$(".my-extra").addClass("hide");

						
                        price = foundItem.price;
                        $('.total-amount').html(`
																																																													<strong>AUD $${price}</strong>`)
                    }
                })
                $('.single_add_to_cart_button').on('click', function() {
                    var fragment = $(this).attr('data-type');
                    packageName = $(this).attr('data-type');
					
                    var extInt = $(this).attr('data-extra-int');
                    var extInAmt = $(this).attr('data-extra-amt');
					$("#extInt").html(extInt);
					$("#extInAmt").html(extInAmt);
					
					
                    console.log("fragment", fragment);
                    if (fragment != "") {
                        selectPackage = fragment
                        //$("#package").val(selectPackage);
                        //console.log(Array.isArray(JSON.parse(myPackages))); // Should log `true` if `myPackages` is an array
                        myPackages1 = JSON.parse(myPackages);
                        foundItem = myPackages1.find(item => item.name.toLowerCase() === selectPackage.toLowerCase());
                        if (foundItem) {
                            price = foundItem.price;
                            var html = `<div class="form-group d-flex py-3" style="align-content: space-between;">
		<label class="orderText orderText1 col-6">${foundItem.name} (${foundItem.tickets} Entries)</label>																																																														<label class="orderText col-6 text-end">AUD $${foundItem.price}</label>
</div>		<div class="form-group d-flex py-3 my-extra hide" style="align-content: space-between;">
<label id="" class="orderText col-6 ">${extInt} Extra Entries</label>
<label class="orderText col-6   text-end">AUD $ ${extInAmt}</label>
</div>
<div class="form-group d-flex py-3" style="align-content: space-between;"><label class="orderText col-6 ">
		<strong>TOTAL:</strong>
		</label>
		<label class="orderText col-6 text-end total-amount">
		<strong>AUD $${foundItem.price}</strong>
		</label>
		</div>`;
                            $('#order-summary').html(html);
                            $('#myModal').modal('show');
                        }
                        // if (foundItem.type == "one-time") {
                        // 	setTimeout(() => {
                        // 		$('#exampleModal').modal('show')
                        // 	}, 3000);
                        // }
                    }
                });
            });

            function formsubmit(anchor) {
                $(".errorDiv").html("");
                let firstName = $("#firstName").val();
                let lastName = $("#lastName").val();
                let email = $("#email").val();
                let phone = $("#phone").val();
                let password = $("#password").val();
                let package = $("#package").val();
                let tp = $('#transaction_token').val()
                if (firstName == "") {
                    $(".errorDiv").html("Please fill first Name.");
					enableAnchor(anchor);
                } else if (lastName == "") {
                    $(".errorDiv").html("Please fill last Name.");
					enableAnchor(anchor);
                } else if (email == "") {
                    $(".errorDiv").html("Please fill email address.");
					enableAnchor(anchor);
                } else if (!validateEmail(email)) {
                    $(".errorDiv").html("Invalid email address.");
					enableAnchor(anchor);
                } else if (phone == "") {
                    $(".errorDiv").html("Please fill phone number.");
					enableAnchor(anchor);
                } else if (password == "") {
                    $(".errorDiv").html("Please provide password.");
					enableAnchor(anchor);
                } else if (package == "") {
                    $(".errorDiv").html("Please select package.");
					enableAnchor(anchor);
                } else {
                    $(".errorDiv").html("");
                    saveUser(anchor);
                }
            }
            document.querySelectorAll('.scroll-button').forEach(button => {
                button.addEventListener('click', function() {
                    const targetId = this.getAttribute('data-target');
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - document.querySelector('header').offsetHeight,
                            behavior: 'smooth'
                        });
                    }
                });
            });
			
  function showCoupon(){
	  
	  if($(".couponDiv").hasClass("hide")){
		$(".couponDiv").removeClass("hide")		  
	  }
	  else{
		$(".couponDiv").addClass("hide")		  
	  }
  }			
  var couponAlreadyApplied = 0;  
  function verifyCoupon(){
	  if(couponAlreadyApplied == 1){
		 alert("Coupon Already applied");
		 return false;
	  }
	let redeem = $("#redeem").val();  
    let package = packageName;
    let extraTicket = $('#flexCheckDefault').is(':checked');
	
	if(redeem.length === 0){
		alert("Coupon code required");
	}
	else{
        $.ajax({
         type: 'POST',
         url: ' <?php echo url("/apply-coupon"); ?> ',
         headers : {
          'X-CSRF-TOKEN': '{{ csrf_token() }}'
          },
         data: "coupon="+redeem+"&package="+package+"&extraTicket="+extraTicket,
         success: function(response) {
			$.unblockUI();
             console.log("response",response);
			 if(response.message){
				 
				 alert(response.message);
				 
				if(response.success){
						let txt =  $(".orderText1").text();
						$(".orderText1").html(`${txt} + (${response.data.entries} Entries Coupon Applied)`);
						couponAlreadyApplied = 1;
					
					
				} 
			 }else{
				 alert("Something went wrong.");
				 
			 }
        },
         error: function(xhr, status, error) {
				 alert("Something went wrong.");
         
		  }
         });
		
		
	}
  }
  
  $("input[name='payment_mode']").change(function(){
	  
			$(".ccPayment").addClass("hide");
	  
	  if(this.value === "card"){
			$(".ccPayment").removeClass("hide");
		  $(".ccBtn").removeClass("hide");
		  $(".appleBtn").addClass("hide");
			
	  }
	  else{
		  $(".ccBtn").addClass("hide");
		  $(".appleBtn").removeClass("hide");
		  
	  }
  });
  
  
 function applePay(){
	 
	// alert("apple pay");
                $(".errorDiv").html("");
                let firstName = $("#firstName").val();
                let lastName = $("#lastName").val();
                let email = $("#email").val();
                let phone = $("#phone").val();
                let package = $("#package").val();
                if (firstName == "") {
                    $(".errorDiv").html("Please fill first Name.");
					//enableAnchor(anchor);
                } else if (lastName == "") {
                    $(".errorDiv").html("Please fill last Name.");
					//enableAnchor(anchor);
                } else if (email == "") {
                    $(".errorDiv").html("Please fill email address.");
					//enableAnchor(anchor);
                } else if (!validateEmail(email)) {
                    $(".errorDiv").html("Invalid email address.");
					//enableAnchor(anchor);
                } else if (phone == "") {
                    $(".errorDiv").html("Please fill phone number.");
					//enableAnchor(anchor);
                } else if (package == "") {
                    $(".errorDiv").html("Please select package.");
					//enableAnchor(anchor);
                } else {
                    $(".errorDiv").html("");
					//alert("all good");
						let price = ($('#flexCheckDefault').is(':checked') ? parseInt(foundItem.price) + foundItem.max_users : parseInt(foundItem.price)).toFixed(2);
						initiateApplePay(price);
					
					
                }
            	 
	 
 } 
 
 
 if (window.ApplePaySession && ApplePaySession.canMakePayments()) {
	  console.log("apple 11")
	} else{
		console.log("apple 00")
	}

	function initiateApplePay(price) {
	  console.log("clicked");
	  const paymentRequest = {
		countryCode: 'AU',  // Your country code
		currencyCode: 'AUD', // Your currency code
		total: {
		  label: 'RS REWARDS',
		  amount: price  
		},
		supportedNetworks: ['visa', 'masterCard', 'amex'],
		merchantCapabilities: ['supports3DS']
	  };
	console.log("paymentRequest",paymentRequest);
	const session = new ApplePaySession(3, paymentRequest); // Apple Pay version 3
	console.log("session",session);
	session.onvalidatemerchant = function(event) {
    // Call your backend to validate the merchant
    fetch('/apple_pay/validate-merchant.php', {
      method: 'POST',
      body: JSON.stringify({ validationUrl: event.validationURL }),
      headers: { 'Content-Type': 'application/json' }
    })
    .then(response => response.json())
    .then(data => {
	  console.log("data",data);
	 // getPayment();
      session.completeMerchantValidation(data);
    })
    .catch(error => {
      console.error('Merchant validation failed:', error);
    });
  };

function getPayment() {
  let package = $("#package").val();
  let firstName = $("#firstName").val();
  let lastName = $("#lastName").val();
  let email = $("#email").val();
  let phone = $("#phone").val();
  let password = $("#password").val();
  let redeem = $("#redeem").val();  
  let utmSource = getUrlParameter('utm_source');
  let campaignName = getUrlParameter('campaign_name');		    
  
  const extraTicket = $('#flexCheckDefault').is(':checked');
  const subs = $('#flexCheckDefault2').is(":checked");

  // Create the form data object
  const formData = new FormData();
  formData.append("name", "test");
  formData.append("first_name", firstName);
  formData.append("last_name", lastName);
  formData.append("email", email);
  formData.append("phone", phone);
  formData.append("password", password);
  formData.append("plan_id", foundItem.id);
  formData.append("extraTicket", extraTicket);
  formData.append("purchase_type", "onetime");
  formData.append("redeem", redeem);
  formData.append("utm_source", utmSource);
  formData.append("campaign_name", campaignName);
  formData.append("referer", referer);
  formData.append("subs", subs);
 formData.append("paymentData", JSON.stringify({ paymentData: {"paymentData":{"token":{"paymentData":{"data":"aXbe+IFVTSicXiL5Iqtt2YW0MHVb9KPeqFsOq/MA/eG+9nkvHHPsqiv9prnxEONcaU9MOBm91/XpchvyH2DxI5BU4nD+RsSH0kdT+Ow8qvVCBVjv7jcXKk12WK2yXIpXs27k3BAuaH2ao/RjkIlPgZ0Xwp0A7j09Ch2yKuq/lj7iVa9b3DhNd2kooNu2rNJMTGergzC4KnZBQAmQeDqjUurJGyjCaggA1lStkg2gHnbG1lTazk2qDxRlbyejAEnVtVf3vFMYJEdeVHAaMHK+EiUOV/ezWaJrS5dncQ+HOrxL6gEH1GylyultwHdUtUDK0SYJT+5DtzjtV/2ZAR2D7lAfJWIa3GHfcg8A/MbzSE6eBujJEW3FkWj5iZLJSaWJPJ8jmFhKXEQ00Ts=","signature":"MIAGCSqGSIb3DQEHAqCAMIACAQExDTALBglghkgBZQMEAgEwgAYJKoZIhvcNAQcBAACggDCCA+MwggOIoAMCAQICCBZjTIsOMFcXMAoGCCqGSM49BAMCMHoxLjAsBgNVBAMMJUFwcGxlIEFwcGxpY2F0aW9uIEludGVncmF0aW9uIENBIC0gRzMxJjAkBgNVBAsMHUFwcGxlIENlcnRpZmljYXRpb24gQXV0aG9yaXR5MRMwEQYDVQQKDApBcHBsZSBJbmMuMQswCQYDVQQGEwJVUzAeFw0yNDA0MjkxNzQ3MjdaFw0yOTA0MjgxNzQ3MjZaMF8xJTAjBgNVBAMMHGVjYy1zbXAtYnJva2VyLXNpZ25fVUM0LVBST0QxFDASBgNVBAsMC2lPUyBTeXN0ZW1zMRMwEQYDVQQKDApBcHBsZSBJbmMuMQswCQYDVQQGEwJVUzBZMBMGByqGSM49AgEGCCqGSM49AwEHA0IABMIVd+3r1seyIY9o3XCQoSGNx7C9bywoPYRgldlK9KVBG4NCDtgR80B+gzMfHFTD9+syINa61dTv9JKJiT58DxOjggIRMIICDTAMBgNVHRMBAf8EAjAAMB8GA1UdIwQYMBaAFCPyScRPk+TvJ+bE9ihsP6K7/S5LMEUGCCsGAQUFBwEBBDkwNzA1BggrBgEFBQcwAYYpaHR0cDovL29jc3AuYXBwbGUuY29tL29jc3AwNC1hcHBsZWFpY2EzMDIwggEdBgNVHSAEggEUMIIBEDCCAQwGCSqGSIb3Y2QFATCB/jCBwwYIKwYBBQUHAgIwgbYMgbNSZWxpYW5jZSBvbiB0aGlzIGNlcnRpZmljYXRlIGJ5IGFueSBwYXJ0eSBhc3N1bWVzIGFjY2VwdGFuY2Ugb2YgdGhlIHRoZW4gYXBwbGljYWJsZSBzdGFuZGFyZCB0ZXJtcyBhbmQgY29uZGl0aW9ucyBvZiB1c2UsIGNlcnRpZmljYXRlIHBvbGljeSBhbmQgY2VydGlmaWNhdGlvbiBwcmFjdGljZSBzdGF0ZW1lbnRzLjA2BggrBgEFBQcCARYqaHR0cDovL3d3dy5hcHBsZS5jb20vY2VydGlmaWNhdGVhdXRob3JpdHkvMDQGA1UdHwQtMCswKaAnoCWGI2h0dHA6Ly9jcmwuYXBwbGUuY29tL2FwcGxlYWljYTMuY3JsMB0GA1UdDgQWBBSUV9tv1XSBhomJdi9+V4UH55tYJDAOBgNVHQ8BAf8EBAMCB4AwDwYJKoZIhvdjZAYdBAIFADAKBggqhkjOPQQDAgNJADBGAiEAxvAjyyYUuzA4iKFimD4ak/EFb1D6eM25ukyiQcwU4l4CIQC+PNDf0WJH9klEdTgOnUTCKKEIkKOh3HJLi0y4iJgYvDCCAu4wggJ1oAMCAQICCEltL786mNqXMAoGCCqGSM49BAMCMGcxGzAZBgNVBAMMEkFwcGxlIFJvb3QgQ0EgLSBHMzEmMCQGA1UECwwdQXBwbGUgQ2VydGlmaWNhdGlvbiBBdXRob3JpdHkxEzARBgNVBAoMCkFwcGxlIEluYy4xCzAJBgNVBAYTAlVTMB4XDTE0MDUwNjIzNDYzMFoXDTI5MDUwNjIzNDYzMFowejEuMCwGA1UEAwwlQXBwbGUgQXBwbGljYXRpb24gSW50ZWdyYXRpb24gQ0EgLSBHMzEmMCQGA1UECwwdQXBwbGUgQ2VydGlmaWNhdGlvbiBBdXRob3JpdHkxEzARBgNVBAoMCkFwcGxlIEluYy4xCzAJBgNVBAYTAlVTMFkwEwYHKoZIzj0CAQYIKoZIzj0DAQcDQgAE8BcRhBnXZIXVGl4lgQd26ICi7957rk3gjfxLk+EzVtVmWzWuItCXdg0iTnu6CP12F86Iy3a7ZnC+yOgphP9URaOB9zCB9DBGBggrBgEFBQcBAQQ6MDgwNgYIKwYBBQUHMAGGKmh0dHA6Ly9vY3NwLmFwcGxlLmNvbS9vY3NwMDQtYXBwbGVyb290Y2FnMzAdBgNVHQ4EFgQUI/JJxE+T5O8n5sT2KGw/orv9LkswDwYDVR0TAQH/BAUwAwEB/zAfBgNVHSMEGDAWgBS7sN6hWDOImqSKmd6+veuv2sskqzA3BgNVHR8EMDAuMCygKqAohiZodHRwOi8vY3JsLmFwcGxlLmNvbS9hcHBsZXJvb3RjYWczLmNybDAOBgNVHQ8BAf8EBAMCAQYwEAYKKoZIhvdjZAYCDgQCBQAwCgYIKoZIzj0EAwIDZwAwZAIwOs9yg1EWmbGG+zXDVspiv/QX7dkPdU2ijr7xnIFeQreJ+Jj3m1mfmNVBDY+d6cL+AjAyLdVEIbCjBXdsXfM4O5Bn/Rd8LCFtlk/GcmmCEm9U+Hp9G5nLmwmJIWEGmQ8Jkh0AADGCAYgwggGEAgEBMIGGMHoxLjAsBgNVBAMMJUFwcGxlIEFwcGxpY2F0aW9uIEludGVncmF0aW9uIENBIC0gRzMxJjAkBgNVBAsMHUFwcGxlIENlcnRpZmljYXRpb24gQXV0aG9yaXR5MRMwEQYDVQQKDApBcHBsZSBJbmMuMQswCQYDVQQGEwJVUwIIFmNMiw4wVxcwCwYJYIZIAWUDBAIBoIGTMBgGCSqGSIb3DQEJAzELBgkqhkiG9w0BBwEwHAYJKoZIhvcNAQkFMQ8XDTI0MTIzMTA5MjU0OVowKAYJKoZIhvcNAQk0MRswGTALBglghkgBZQMEAgGhCgYIKoZIzj0EAwIwLwYJKoZIhvcNAQkEMSIEII/nkrfYmZ05U7NAOhZtkK0N0OtWqmYcsXRQ3cBtRKsyMAoGCCqGSM49BAMCBEcwRQIgDlOy2k0Jj+55FP9GhEtdlVon7FM1gpHPiSaANqwXkUkCIQD0DNribbqlou93hISc74Q9OlBV3NfI8mjknER6TPWFLAAAAAAAAA==","header":{"publicKeyHash":"0Af0HmIJ5WL/p/orgaWYdjERjUXvfAXHxvTttVZYBOU=","ephemeralPublicKey":"MFkwEwYHKoZIzj0CAQYIKoZIzj0DAQcDQgAEa9IlSm0i6LNOEgw6KUDkg8XLhtRwJsuizMmIbwnfpOte/bdccEOLKCv8GQk1V1Zzkp12Q3fJ8UmPoR0vlEOvlA==","transactionId":"da4dbefbceaf83dee2d3335ed272d80f9918c3682b690a657097464cccb26ef2"},"version":"EC_v1"},"paymentMethod":{"displayName":"MasterCard 7774","network":"MasterCard","type":"credit"},"transactionIdentifier":"da4dbefbceaf83dee2d3335ed272d80f9918c3682b690a657097464cccb26ef2"}}} }));

  $.ajax({
    url: "<?php echo url('/register/applepay'); ?>",
    type: "POST",
    data: formData,
    processData: false, // Prevent jQuery from automatically transforming the data
    contentType: false, // Prevent jQuery from setting the Content-Type header
    headers: {
      'X-CSRF-TOKEN': '{{ csrf_token() }}'
    },
    success: function(response) {
		
                            if (response.success) {
		
      session.completePayment(ApplePaySession.STATUS_SUCCESS);
      let price = ($('#flexCheckDefault').is(':checked') ? parseInt(foundItem.price) + foundItem.max_users : parseInt(foundItem.price)).toFixed(2);
	  
      // Push data to Google Tag Manager
      window.dataLayer = window.dataLayer || [];
      window.dataLayer.push({
        'event': 'purchase',
        'transactionId': '{{ csrf_token() }}',        
        'transactionTotal': price,       
        'transactionCurrency': 'AUD',     
        'transactionProducts': [{
          'id': '1',                  
          'name': foundItem.name,       
          'category': 'Onetime',       
          'price': price,                 
          'quantity': 1
        }]
      });
	  
      // Save data to localStorage
      localStorage.setItem('email', response.data.email);
      localStorage.setItem('subscriptionId', response.data.subscriptionId);
      localStorage.setItem('customerId', response.data.customerId);
      localStorage.setItem('extraTicket', extraTicket);

      // Redirect to dashboard
      let dashboardUrl = @json(route('pages.up-sell'));
      window.location.href = dashboardUrl;
							}
							else{
                                $("#order-declined-message").html(response.message);
                                $("#order-declined-message").css("display", "block");
                                $(".errorDiv").html(response.error);
								session.completePayment(ApplePaySession.STATUS_FAILURE); // Mark payment as failed
								
                                return;
								
								
							}
    },
    error: function(xhr, status, error) {
      console.error('Payment processing failed:', error);
	  
      $("#order-declined-message").html(error);
      $("#order-declined-message").css("display", "block");
      $(".errorDiv").html(error);
      session.completePayment(ApplePaySession.STATUS_FAILURE); // Mark payment as failed
    }
  });
}

  session.onpaymentauthorized = function(event) {
  let package = $("#package").val();
  let firstName = $("#firstName").val();
  let lastName = $("#lastName").val();
  let email = $("#email").val();
  let phone = $("#phone").val();
  let password = $("#password").val();
  let redeem = $("#redeem").val();  
  let utmSource = getUrlParameter('utm_source');
  let campaignName = getUrlParameter('campaign_name');		    
  
  const extraTicket = $('#flexCheckDefault').is(':checked');
  const subs = $('#flexCheckDefault2').is(":checked");

  // Create the form data object
  const formData = new FormData();
  formData.append("name", "test");
  formData.append("first_name", firstName);
  formData.append("last_name", lastName);
  formData.append("email", email);
  formData.append("phone", phone);
  formData.append("password", password);
  formData.append("plan_id", foundItem.id);
  formData.append("extraTicket", extraTicket);
  formData.append("purchase_type", "onetime");
  formData.append("redeem", redeem);
  formData.append("utm_source", utmSource);
  formData.append("campaign_name", campaignName);
  formData.append("referer", referer);
  formData.append("subs", subs);
 formData.append("paymentData", JSON.stringify({ paymentData: {"paymentData":event.payment}} ));

  $.ajax({
    url: "<?php echo url('/register/applepay'); ?>",
    type: "POST",
    data: formData,
    processData: false, // Prevent jQuery from automatically transforming the data
    contentType: false, // Prevent jQuery from setting the Content-Type header
    headers: {
      'X-CSRF-TOKEN': '{{ csrf_token() }}'
    },
    success: function(response) {
		
                            if (response.success) {
		
      session.completePayment(ApplePaySession.STATUS_SUCCESS);
      let price = ($('#flexCheckDefault').is(':checked') ? parseInt(foundItem.price) + foundItem.max_users : parseInt(foundItem.price)).toFixed(2);
	  
      // Push data to Google Tag Manager
      window.dataLayer = window.dataLayer || [];
      window.dataLayer.push({
        'event': 'purchase',
        'transactionId': '{{ csrf_token() }}',        
        'transactionTotal': price,       
        'transactionCurrency': 'AUD',     
        'transactionProducts': [{
          'id': '1',                  
          'name': foundItem.name,       
          'category': 'Onetime',       
          'price': price,                 
          'quantity': 1
        }]
      });
	  
      // Save data to localStorage
      localStorage.setItem('email', response.data.email);
      localStorage.setItem('subscriptionId', response.data.subscriptionId);
      localStorage.setItem('customerId', response.data.customerId);
      localStorage.setItem('extraTicket', extraTicket);

      // Redirect to dashboard
      let dashboardUrl = @json(route('pages.up-sell'));
      window.location.href = dashboardUrl;
							}
							else{
                                $("#order-declined-message").html(response.message);
                                $("#order-declined-message").css("display", "block");
                                $(".errorDiv").html(response.error);
								session.completePayment(ApplePaySession.STATUS_FAILURE); // Mark payment as failed
								
                                return;
								
								
							}
    },
    error: function(xhr, status, error) {
      console.error('Payment processing failed:', error);
	  
      $("#order-declined-message").html(error);
      $("#order-declined-message").css("display", "block");
      $(".errorDiv").html(error);
      session.completePayment(ApplePaySession.STATUS_FAILURE); // Mark payment as failed
    }
  });
  };

  session.begin();
}
 

</script>
    </body>
</html>