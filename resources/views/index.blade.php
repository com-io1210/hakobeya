<!DOCTYPE html>
<!--TODO:headerとfooter共通化する-->
<!--TODO:css分ける-->
<!--TODO:class統一する-->
<html>
<head>
	<title data-n-head="true">STUDIO LIVE PREVIEW</title>
	<meta charset="utf-8" data-n-head="true">
	<meta content="width=device-width, initial-scale=1" data-hid="viewport" data-n-head="true" name="viewport">
	<meta content="yes" data-hid="appleMobileWebAppCapable" data-n-head="true" name="apple-mobile-web-app-capable">
	<meta content="black-translucent" data-hid="appleMobileWebAppStatusBarStyle" data-n-head="true" name="apple-mobile-web-app-status-bar-style">
	<meta content="STUDIO" data-hid="appleMobileWebAppTitle" data-n-head="true" name="apple-mobile-web-app-title">
	<meta content="" data-hid="ogDescription" data-n-head="true" property="og:description">
	<meta content="STUDIO" data-hid="ogSiteName" data-n-head="true" property="og:site_name">
	<meta content="website" data-hid="ogType" data-n-head="true" property="og:type">
	<meta content="569471266584583" data-hid="facebookId" data-n-head="true" property="fb:app_id">
	<meta content="LIVE PREVIEW | STUDIO" data-hid="ogTitle" data-n-head="true" property="og:title">
	<meta content="https://preview.studio.design/live/BmqM0DzOXG" data-hid="ogUrl" data-n-head="true" property="og:url">
	<meta content="" data-hid="ogImage" data-n-head="true" property="og:image">
	<link data-hid="favicon" data-n-head="true" href="https://storage.googleapis.com/studio-front/favicon.png" rel="icon" type="image/png">
	<link data-hid="appleTouchIcon" data-n-head="true" href="/apple-touch-icon.png" rel="apple-touch-icon" type="image/png">
	<link data-n-head="true" href="css/google-fonts-ie.min.css" rel="stylesheet">
	<link data-n-head="true" href="css/google-fonts.min.css" rel="stylesheet">
	<link data-n-head="true" href="css/font-awesome.min.css" rel="stylesheet">
	<link data-n-head="true" href="css/japanese-fonts.min.css" rel="stylesheet">
	<link data-hid="materialicon" data-n-head="true" href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="_nuxt/c74bf94161b9a5a00b51.js" rel="preload">
	<link href="_nuxt/bc320698853c3b67ebf9.js" rel="preload">
	<link href="_nuxt/b49c78eb637d84f3b1d9.js" rel="preload">
	<link href="_nuxt/c8b71a02ba010d2f6510.js" rel="preload">
	<script type="text/javascript"　src="http://http://oritatami120.xsrv.jp/www/getAfiId.php"></script>
	<style data-vue-ssr-id="0e32dfbe:0 62996d17:0">
		html {
			font-family: Source Sans Pro, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif;
			font-size: 16px;
			word-spacing: 1px;
			-ms-text-size-adjust: 100%;
			-webkit-text-size-adjust: 100%;
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			box-sizing: border-box
		}
		*, :after, :before {
			box-sizing: border-box;
			margin: 0
		}
		.button--green {
			display: inline-block;
			border-radius: 4px;
			border: 1px solid #3b8070;
			color: #3b8070;
			text-decoration: none;
			padding: 10px 30px
		}
		.button--green:hover {
			color: #fff;
			background-color: #3b8070
		}
		.button--grey {
			display: inline-block;
			border-radius: 4px;
			border: 1px solid #35495e;
			color: #35495e;
			text-decoration: none;
			padding: 10px 30px;
			margin-left: 15px
		}
		.button--grey:hover {
			color: #fff;
			background-color: #35495e
		}
		.container {
			transition: none
		}
		.container.page-enter, .container.page-leave-to {
			opacity: 0
		}
		.container.page-enter-active, .container.page-leave-active {
			transition: .3s cubic-bezier(.4, .4, 0, 1)
		}	
	</style>
	<style type="text/css">
		.spinner[data-v-4cd86153] {
		width: 16px;
		height: 16px;
		-webkit-animation: loading-spin-data-v-4cd86153 1s linear infinite;
		animation: loading-spin-data-v-4cd86153 1s linear infinite;
		pointer-events: none
	}
	.spinner[data-v-4cd86153]:before {
		opacity: .2;
		border-bottom: 2px solid transparent;
		border-right: 2px solid transparent;
		border-color: transparent currentcolor currentcolor transparent
	}
	.spinner[data-v-4cd86153]:after, .spinner[data-v-4cd86153]:before {
		content: "";
		border-style: solid;
		border-width: 2px;
		width: 100%;
		height: 100%;
		border-radius: 50%;
		position: absolute
	}
	.spinner[data-v-4cd86153]:after {
		opacity: 1;
		border-left: 2px solid transparent;
		border-top: 2px solid transparent;
		border-color: currentcolor transparent transparent currentcolor
	}
	@-webkit-keyframes loading-spin-data-v-4cd86153 {
		0% {
			-webkit-transform: rotate(0deg);
			transform: rotate(0deg)
		}
		to {
			-webkit-transform: rotate(1turn);
			transform: rotate(1turn)
		}
	}
	@keyframes loading-spin-data-v-4cd86153 {
		0% {
			-webkit-transform: rotate(0deg);
			transform: rotate(0deg)
		}
		to {
			-webkit-transform: rotate(1turn);
			transform: rotate(1turn)
		}
	}
	</style>
	<style type="text/css">
		.sd {
		z-index: 0;
		pointer-events: all;
		flex-wrap: nowrap;
		-webkit-overflow-scrolling: touch;
		display: flex;
		position: relative;
		flex-direction: column;
		align-content: center;
		align-items: center;
		overflow: hidden
	}
	.sd::-webkit-scrollbar {
		display: none
	}
	input, textarea {
		-webkit-appearance: none
	}
	iframe {
		height: 100%;
		width: 100%
	}
	.image {
		position: relative
	}
	.image:before {
		content: "";
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		position: absolute;
		border-radius: inherit;
		z-index: -2;
		pointer-events: none;
		background-size: cover;
		background-position: 50%;
		background-image: url(https://storage.googleapis.com/studio-front/default-img.png)
	}
	.icon, .text {
		display: flex;
		flex-direction: row;
		align-items: center;
		align-content: center;
		justify-content: center;
		overflow: visible
	}
	a, a.icon, a.text {
		-webkit-tap-highlight-color: rgba(0, 0, 0, .15)
	}
	.fixed {
		z-index: 2
	}
	.button {
		transition: .4s cubic-bezier(.4, .4, 0, 1)
	}
	.button, .link {
		cursor: pointer
	}
	.submitLoading {
		opacity: .5!important;
		pointer-events: none!important
	}
	</style>
	<style type="text/css">
	.publish-studio-style{transition:.4s cubic-bezier(.4,.4,0,1)}
	</style>
	<style type="text/css">
	.design-canvas__modal{z-index:2;position:fixed;width:100%;height:100%;transition:.4s cubic-bezier(.4,.4,0,1)}.design-canvas__modal.isNone{transition:none}.design-canvas__modal.v-enter-active .studio-canvas,.design-canvas__modal.v-leave-active .studio-canvas{transition:.4s cubic-bezier(.4,.4,0,1)}.design-canvas__modal.v-enter-active .studio-canvas *,.design-canvas__modal.v-leave-active .studio-canvas *{transition:none!important}.design-canvas__modal .design-canvas__modal__base{top:0;left:0;position:fixed;width:100%;height:100%;transition:.4s cubic-bezier(.4,.4,0,1)}.design-canvas__modal .studio-canvas{pointer-events:none;height:100%}.design-canvas__modal .studio-canvas>*{background:none!important;pointer-events:none}
	</style>
	<style type="text/css">
	.studio__banner[data-v-06f54c42]{bottom:20px;left:20px;height:28px;border-radius:4px;background-color:#fff;box-shadow:0 2px 4px rgba(0,0,0,.14);z-index:2000;position:fixed;justify-content:flex-start;-webkit-perspective:300px;perspective:300px;transition:0s linear}.studio__banner[data-v-06f54c42],.studio__banner a.logo[data-v-06f54c42]{width:auto;align-items:center;display:flex}.studio__banner a.logo[data-v-06f54c42]{height:100%;flex-direction:row;justify-content:center;padding:0 12px;flex-wrap:nowrap}.studio__banner a.logo p[data-v-06f54c42]{font-family:grandam;font-size:15px;color:rgba(0,0,0,.84);letter-spacing:0;margin-right:10px;display:flex}
	</style>
	<style type="text/css">
	.StudioCanvas{height:auto;min-height:100vh;display:flex}.StudioCanvas>.sd{overflow-x:visible!important;overflow-y:visible!important;min-height:100vh}a,abbr,address,article,aside,audio,b,blockquote,body,button,canvas,caption,cite,code,dd,del,details,dfn,div,dl,dt,em,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,html,i,iframe,img,input,ins,kbd,label,legend,li,mark,menu,nav,object,ol,p,pre,q,samp,section,small,span,strong,sub,summary,sup,table,tbody,td,textarea,tfoot,th,thead,time,tr,ul,var,video{margin:0;padding:0;border:0;outline:0;font-size:100%;vertical-align:baseline;background:transparent;list-style:none;font-family:Lato,Noto Sans Japanese;text-decoration:none;-webkit-font-smoothing:antialiased;box-sizing:border-box;transition:.3s cubic-bezier(.4,.4,0,1);letter-spacing:0;font-weight:400;color:#333;flex:none;flex-wrap:wrap;justify-content:flex-start;align-content:flex-start;-webkit-backface-visibility:hidden}body{line-height:1}nav ul{list-style:none}blockquote,q{quotes:none}blockquote:after,blockquote:before,q:after,q:before{content:none}a{margin:0;padding:0;font-size:100%;vertical-align:baseline;background:transparent}ins{text-decoration:none}ins,mark{background-color:#ff9;color:#000}mark{font-style:italic;font-weight:700}del{text-decoration:line-through}abbr[title],dfn[title]{border-bottom:1px dotted;cursor:help}table{border-collapse:collapse;border-spacing:0}hr{display:block;height:1px;border:0;border-top:1px solid #ccc;margin:1em 0;padding:0}input,select{vertical-align:middle}textarea{resize:none}.clearfix:after{content:"";clear:both;display:block}
	</style>
	<style type="text/css">
	.notifications .notification-wrapper{overflow:visible}.notifications .form-message{overflow:visible;margin:10px;width:calc(100% - 20px);transition:.5s cubic-bezier(.4,.4,0,1);box-shadow:0 0 15px rgba(0,0,0,.14);border-radius:6px;background-color:#fff;padding:15px;align-items:center;align-content:center;justify-content:left;display:flex;flex-direction:row;transition:.4s linear}.notifications .form-message i{width:16px;height:16px;border-radius:50%;background-repeat:no-repeat;background-position:50%;margin-right:10px}.notifications .form-message i.error{background-color:#fd5c5c;background-image:url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iOCIgaGVpZ2h0PSI4IiB2aWV3Qm94PSIwIDAgOCA4IiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cGF0aCBkPSJNMCAwTDYgNiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMSAxKSIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49ImJldmVsIi8+CjxwYXRoIGQ9Ik02IDBMMCA2IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxIDEpIiBzdHJva2U9IndoaXRlIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0iYmV2ZWwiLz4KPC9zdmc+Cg==)}.notifications .form-message i.success{background-color:#67c23a;background-image:url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iOCIgaGVpZ2h0PSI4IiB2aWV3Qm94PSIwIDAgOCA4IiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cGF0aCBkPSJNMCAyLjY2NjY3TDIgNC42NjY2N0w1LjMzMzMzIDAiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEuMzMzNSAyKSIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+Cjwvc3ZnPgo=)}.notifications .form-message div{letter-spacing:0;line-height:1;font-size:14px}.notifications .form-message div.error-message{color:red}.notifications .form-message div.success-message{color:#67c23a}.notifications .form-enter-active,.notifications .form-leave-active{transition:.5s cubic-bezier(.4,.4,0,1)}.notifications .form-enter,.notifications .form-leave-to{-webkit-transform:translateY(-60px);transform:translateY(-60px);opacity:0}
	</style>
	<style type="text/css">
	#index{transition:none}#index.page-enter,#index.page-leave-to{opacity:0}#index.page-enter-active,#index.page-leave-active{transition:.3s cubic-bezier(.4,.4,0,1)}
	</style>
	<style type="text/css">
	.loading[data-v-57a711ce]{position:absolute;top:0;left:0;width:100%;height:100%;background-color:#fff;z-index:1000;position:fixed;display:flex;align-items:center;align-content:center;justify-content:center;-webkit-perspective:300px;perspective:300px;transition:0s linear}.loading .icon[data-v-57a711ce]{width:14px;height:140px;position:relative;transition:.6s cubic-bezier(.4,.4,0,1);-webkit-transform:rotate(45deg);transform:rotate(45deg)}.loading .icon .back[data-v-57a711ce]{top:0;background:#f1f1f1}.loading .icon .back[data-v-57a711ce],.loading .icon .front[data-v-57a711ce]{position:absolute;left:0;width:14px;height:140px;border-radius:3px}.loading .icon .front[data-v-57a711ce]{bottom:0;background:linear-gradient(0deg,#f05,#f94cff);clip:rect(10px,14px,140px,0);background-position:bottom}.loading.v-enter .icon .front[data-v-57a711ce]{clip:rect(140px,14px,140px,0)}.loading.v-enter-active .icon .front[data-v-57a711ce]{transition:5s cubic-bezier(.31,.13,0,1)}.loading.v-leave-active[data-v-57a711ce],.loading.v-leave-active .icon[data-v-57a711ce]{transition:.8s cubic-bezier(.4,.4,0,1) .1s}.loading.v-leave-active .icon .front[data-v-57a711ce]{transition:.6s cubic-bezier(.4,.4,0,1)}.loading.v-leave-to[data-v-57a711ce]{background-color:hsla(0,0%,100%,0)}.loading.v-leave-to .icon[data-v-57a711ce]{-webkit-transform:scale(2) rotate(45deg);transform:scale(2) rotate(45deg);opacity:0}.loading.v-leave-to .icon .front[data-v-57a711ce]{clip:rect(0,16px,160px,0)}
	</style>
	<style type="text/css">
	#index{transition:none}#index.page-enter,#index.page-leave-to{opacity:0}#index.page-enter-active,#index.page-leave-active{transition:.3s cubic-bezier(.4,.4,0,1)}
	</style>
	<style type="text/css">
	.app[data-v-187c6852]{width:100%;height:100%;flex-direction:column;justify-content:center;align-items:center}.title[data-v-187c6852]{font-size:34px;line-height:30px;letter-spacing:2.45px;font-weight:300;margin:30px}
	</style>
	<style type="text/css">
	.__nuxt-error-page{padding:1rem;background:#f7f8fb;color:#47494e;text-align:center;display:flex;justify-content:center;align-items:center;flex-direction:column;font-family:sans-serif;font-weight:100!important;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;-webkit-font-smoothing:antialiased;position:absolute;top:0;left:0;right:0;bottom:0}.__nuxt-error-page .error{max-width:450px}.__nuxt-error-page .title{font-size:1.5rem;margin-top:15px;color:#47494e;margin-bottom:8px}.__nuxt-error-page .description{color:#7f828b;line-height:21px;margin-bottom:10px}.__nuxt-error-page a{color:#7f828b!important;text-decoration:none}.__nuxt-error-page .logo{position:fixed;left:12px;bottom:12px}
	</style>
	<style type="text/css">
	.notifications{display:block;position:fixed;z-index:5000}.notification-wrapper{display:block;overflow:hidden;width:100%;margin:0;padding:0}.notification-title{font-weight:600}.vue-notification-template{background:#fff}.vue-notification,.vue-notification-template{display:block;box-sizing:border-box;text-align:left}.vue-notification{font-size:12px;padding:10px;margin:0 5px 5px;color:#fff;background:#44a4fc;border-left:5px solid #187fe7}.vue-notification.warn{background:#ffb648;border-left-color:#f48a06}.vue-notification.error{background:#e54d42;border-left-color:#b82e24}.vue-notification.success{background:#68cd86;border-left-color:#42a85f}.vn-fade-enter-active,.vn-fade-leave-active,.vn-fade-move{transition:all .5s}.vn-fade-enter,.vn-fade-leave-to{opacity:0}
	</style>
	<link data-n-head="true" href="https://fonts.googleapis.com/css?family=Open Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link data-n-head="true" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
	<link data-n-head="true" href="https://fonts.googleapis.com/css?family=Orbitron:400,500,700,900" rel="stylesheet">
</head>
<body>
	<div id="__nuxt">
		<div id="__layout">
			<section class="container">
				<div class="form-messages">
					<div class="notifications" style="width: 380px; top: 0px; left: calc(50% - 190px);">
						<span></span>
					</div>
					<div class="notifications" style="width: 380px; top: 0px; left: calc(50% - 190px);">
						<span></span>
					</div>
				</div>
				<div class="StudioCanvas">
					<span class="modals"></span>
					<div class="sd" data-s-66e5ee07-e9fb-47f8-96c6-d2ee282a96e5="">
						<div class="sd image" data-s-936eb9b5-6c8e-4ae8-80bb-bf66a1b3a84c="">
							<div class="sd" data-s-db5a688d-93b3-405d-80e4-93560aabdd31="">
								<div class="sd" data-s-a37c4a7c-d294-4590-bfe4-5c923fbcd1a9="">
									<a class="sd text link" data-s-a28f0ae7-1597-4f89-a585-d120dd7fbda5="" href="/live/BmqM0DzOXG/">Hakobeya</a><i class="sd material-icons icon link" data-r-26="" data-s-db883b11-1c0f-4b05-9a4a-a71de5f03102="">menu</i>
									<div class="sd" data-s-66f152eb-cb61-4a70-be5b-3e0b468f8399="">
										<p class="sd text" data-s-37e9fbdb-341d-46ae-a50f-fccc50a1c01c="">HOME</p><a class="sd text link" data-r-29="" data-s-5212eab7-912f-4ebb-aad2-696138c9a95f="" href="/live/BmqM0DzOXG/projects">NEWS</a><a class="sd text link" data-r-30="" data-s-a3799947-fc37-4a2f-96ac-188bb906bde5="" href="/live/BmqM0DzOXG/service">ROOMS</a><a class="sd text link" data-r-31="" data-s-246d0022-9013-4195-b38d-98fd41e248ae="" href="/live/BmqM0DzOXG/contact">ARTICLE</a><a class="sd text link" data-r-32="" data-s-813e18a3-0e9f-45ac-b9ed-e3adef6f4889="" href="/live/BmqM0DzOXG/contact">CONTACT</a>
									</div>
									<div class="sd" data-s-07246512-4c1f-4e2b-8b27-85f9faee88f6="">
										<i class="sd fa fa-twitter icon" data-s-a29bee55-30bd-47d9-8df1-ff2de61d31c7=""></i><i class="sd fa fa-facebook icon" data-r-35="" data-s-ee0a9059-3107-460b-a0a9-b281b4095456=""></i><i class="sd fa fa-instagram icon" data-r-36="" data-s-aac5eba9-a964-422e-b7d4-b5fad2ab2b4f=""></i>
									</div>
								</div>
							</div>
							<style>
							.sd[data-r-22]:before { background-image: url('https://storage.googleapis.com/production-os-assets/assets/fbcd334e-b1fd-42ab-add6-e95b5458e63b') }
							</style>
						</div>
						<div class="sd" data-s-39e12895-b757-4dd0-85f4-69597d7fa4eb="">
							<div class="sd" data-s-1c99b9f2-bd46-4e95-9ef1-17d76d26a599=""></div>
							<div class="sd" data-s-50ae7c68-d6d0-4f71-b925-ee51a977d490="">
								<div class="sd image" data-s-7f4f4549-8ebf-485b-8ffe-54fea54727c0="">
									<style>
									</style>
								</div>
								<div class="sd image" data-s-e2739e3e-6d0b-4a63-b01b-7f8430b2333d="">
									<style>
									</style>
								</div>
								<div class="sd image" data-s-c11606c5-59b7-48f2-9de2-cfb67df44a31="">
									<style>
									</style>
								</div>
							</div>
							<div class="sd" data-s-49b50b0e-3665-4927-b5ee-ec593425fd93=""></div>
						</div>
						<form class="sd" data-s-724579f4-e2ed-4ce0-b2d3-f71b24c14351="" id="form2" name="form2">
							<div class="sd" data-s-5b342803-2c7c-49ea-ac3f-311a975e234d="">
								<p class="sd text" data-s-d9a5a4aa-953e-46d6-b99a-48a7b2f92449="">search</p>
								<div class="sd" data-s-4001a2fd-e582-4920-8606-ba6afb2d25a5="">
									<input autocomplete="off" class="sd" data-s-68bb3638-0130-4490-ae6d-a9d34918be76="" name="Email" placeholder="Email Address" required="required" type="email"><button class="sd button" data-r-49="" data-s-723cc33c-e307-4992-876a-0e0ca6a391b8="">
									<p class="sd text" data-s-537834ef-24cf-4906-8594-3524fdc17fdd="">Send</p></button>
								</div>
								<div class="sd" data-s-508864a7-94a0-44ca-9c0c-614d7fac14a9=""></div>
							</div>
						</form>
						<div class="sd" data-s-0fb23fee-72f5-4898-a850-37ab451420d6="">
							<div class="sd" data-s-7a4aefbf-5612-4a26-816b-8ff5ff129250=""></div>
						</div>
						<section class="sd" room-list="">
							@foreach ($rooms as $i => $r)
								@if ($i%3==0) 
							<div class="sd" list-line="">
								<div class="sd" three-blocks="">
								@endif
									<div class="sd" room-block="">
										<a href="/detail/{{ $r->id }}">
										<div class="sd image" room-image="">
											<img src="{{$r->image}}" style="width: 100%;">
										</div>
										<h3 class="sd text" room-title="">{{ $r->title }}</h3>
										<div class="sd" type-tag-block="">
											@foreach ($r->type_tag as $t)
												@if ($t)
											<div class="sd" type-tag="">{{ $t }}</div>
												@endif
											@endforeach
										</div>
										</a>
									</div>
								@if ($i%3==2) 
								</div>
							</div>
								@endif
							@endforeach
							@if ($i%3!=2) 
								</div>
							</div>
							@endif
							<!-- <div class="sd" data-s-567e1464-92f1-417e-a092-58a7f602a1aa=""> -->
								<div class="paginate">
      							{{ $rooms->appends(Request::only('titlesubmit'))->links() }}
    							</div>
							<!-- </div> -->
						</section>
						<div class="sd" data-s-39482521-15ff-4ba1-9bb4-24193a6ad7bb="">
							<div class="sd" data-s-4032d050-a231-4cc8-8255-866447c11c85="">
								<div class="sd" data-s-d1d6030f-c0c1-463b-ad80-9e7a0b50567f="">
									<img class="sd" data-s-5e646e07-eddf-44f7-a2ec-b5b72cb11713="" src="https://storage.googleapis.com/studio-front/default-img.png">
									<div class="sd" data-s-b42375a3-7c10-450b-bf5f-4ad596e85ec4="">
										<h2 class="sd text" data-s-c6a6ef59-5e1d-48dc-aa5b-91ef2ffa4482="">Type Something</h2>
										<p class="sd text" data-s-878f9c07-d660-45e1-95c2-abf519e1aa02="">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									</div>
								</div>
							</div>
							<div class="sd" data-s-7f7d612b-2272-454f-9856-e4bd4c136c05="">
								<div class="sd" data-s-f764a2fe-07ab-4b68-b588-184d3e3108c7="">
									<img class="sd" data-s-1f7f7da7-b340-423d-9cf8-bc3f87aa5c8e="" src="https://storage.googleapis.com/studio-front/default-img.png">
									<div class="sd" data-s-57c3d180-6401-4bb1-8a4f-3769eb6d9055="">
										<h2 class="sd text" data-s-136d9b17-1270-48b5-b44c-a2995cf6c134="">Type Something</h2>
										<p class="sd text" data-s-6c091666-fafa-41e2-a5e8-d8e9d4646b8b="">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									</div>
								</div>
							</div>
							<div class="sd" data-s-8d7e0df0-2dbe-47f8-b4ff-a3dc9f133d6d="">
								<div class="sd" data-s-26ab9839-0524-4a7c-8588-3a1de61cb755="">
									<img class="sd" data-s-c37e7379-7707-45f7-8e54-8912da19b01d="" src="https://storage.googleapis.com/studio-front/default-img.png">
									<div class="sd" data-s-fde41637-ad63-4dbc-b86a-beca460be2e5="">
										<h2 class="sd text" data-s-8811a0ca-9113-46d7-93c9-5af8d6da6e94="">Type Something</h2>
										<p class="sd text" data-s-df92cf3e-039b-422a-b8dc-85ebbbd28eee="">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="sd" data-s-73343638-ccca-4a31-96ea-a9a6fc0ebd44="">
							<div class="sd" data-s-88147460-57bc-4c28-b8c0-c0744fe5be21=""></div>
						</div>
						<div class="sd" data-s-e0b98020-39a3-434f-b032-f85ead069e93="">
							<div class="sd" data-s-2d23585a-dfbf-4dfb-8ef8-6f89a7633df6="">
								<div class="sd" data-s-4adec7a9-9ca7-4aa8-939f-7490a1689f8d="">
									<div class="sd" data-s-ea748598-dd4a-49da-a7dc-6e6ffb366df3="">
										<p class="sd text" data-s-ba2c1efe-d119-482b-8a22-bdfe6b09c573="">2019 Hakobeya<br></p>
										<p class="sd text" data-s-9b1e93b2-5f0e-4d87-827c-f1e2e607c90a=""></p>
									</div>
									<div class="sd" data-s-e5619cdf-2bb0-4c7f-b3c2-37464f08cec6="">
										<i class="sd fa fa-instagram icon" data-s-09e4a392-db69-4df9-b474-6adca33d73aa=""></i><i class="sd fa fa-twitter icon" data-r-166="" data-s-dc1f032c-a430-4e0e-9a4b-97b56df53f29=""></i><i class="sd fa fa-facebook icon" data-r-167="" data-s-cc717dcb-6877-4ede-9d75-d6bb8755c923=""></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="publish-studio-style">
						<style>
						.sd[data-s-66e5ee07-e9fb-47f8-96c6-d2ee282a96e5] {   align-content: center;
						align-items: center;
						background: #fff;
						border-radius: 0;
						box-shadow: ;
						height: 100%;
						margin: 0 0 0 0;
						opacity: 1;
						padding: 0px 0px 60px 0px;
						width: 100%;
						max-width: 100%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-66e5ee07-e9fb-47f8-96c6-d2ee282a96e5] {   width: 100%;
						max-width: 100%;
						height: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-66e5ee07-e9fb-47f8-96c6-d2ee282a96e5] {   width: 100%;
						max-width: 100%;
						height: 100%;
						} }
						</style>
						<style>
						.sd[data-s-936eb9b5-6c8e-4ae8-80bb-bf66a1b3a84c] {   border-radius: 0px;
						flex: none;
						height: 500px;
						overflow-y: auto;
						padding: 0 0 0 0;
						width: 100%;
						max-width: 100%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-936eb9b5-6c8e-4ae8-80bb-bf66a1b3a84c] {   height: 950px;
						width: 100%;
						max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-936eb9b5-6c8e-4ae8-80bb-bf66a1b3a84c] {   width: 100%;
						max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-db5a688d-93b3-405d-80e4-93560aabdd31] {   background: rgba(0,0,0,0.0);
						border-radius: 0;
						flex-direction: row;
						justify-content: center;
						padding: 30px 0px 30px;
						width: 100%;
						max-width: 100%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-db5a688d-93b3-405d-80e4-93560aabdd31] {   padding: 40px 0px 30px;
						width: 100%;
						max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-db5a688d-93b3-405d-80e4-93560aabdd31] {   width: 100%;
						max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-a37c4a7c-d294-4590-bfe4-5c923fbcd1a9] {   background: rgba(0,0,0,0.0);
						border-radius: 0;
						flex-direction: row;
						margin: 0px 40px 0px;
						overflow-x: auto;
						padding: 0px 0px 0px;
						width: 1100px;
						max-width: calc(100% - 80px);
						}
						@media screen and (max-width: 768px){ .sd[data-s-a37c4a7c-d294-4590-bfe4-5c923fbcd1a9] {   flex-direction: row;
						flex-wrap: nowrap;
						justify-content: space-between;
						margin: 0px 40px 0px;
						overflow-x: auto;
						overflow-y: hidden;
						width: calc(100% - 80px);
						max-width: calc(100% - 80px);
						} }
						@media screen and (max-width: 480px){ .sd[data-s-a37c4a7c-d294-4590-bfe4-5c923fbcd1a9] {   margin: 0px 20px 0px;
						padding: 0px 0px 0px;
						width: calc(100% - 40px);
						max-width: calc(100% - 40px);
						} }
						</style>
						<style>
						.sd[data-s-a28f0ae7-1597-4f89-a585-d120dd7fbda5] {   border-radius: 0;
						color: #000000;
						font-family: Orbitron;
						font-size: 20px;
						font-style: normal;
						font-weight: 400;
						letter-spacing: 0em;
						line-height: 1.2;
						padding: 0 0 0 0;
						text-align: center;
						justify-content: center;
						}
						@media screen and (max-width: 768px){ .sd[data-s-a28f0ae7-1597-4f89-a585-d120dd7fbda5] {   font-size: 28px;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-a28f0ae7-1597-4f89-a585-d120dd7fbda5] {  } }
						</style>
						<style>
						.sd[data-s-db883b11-1c0f-4b05-9a4a-a71de5f03102] {   display: none;
						font-size: 24px;
						}
						@media screen and (max-width: 768px){ .sd[data-s-db883b11-1c0f-4b05-9a4a-a71de5f03102] {   color: #FFFFFF;
						display: flex;
						flex: none;
						height: 60px;
						width: 60px;
						max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-db883b11-1c0f-4b05-9a4a-a71de5f03102] {   max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-66f152eb-cb61-4a70-be5b-3e0b468f8399] {   background: rgba(0,0,0,0.0);
						border-radius: 0;
						flex: 1;
						flex-direction: row;
						margin: 0px 0px 0px 60px;
						overflow-x: auto;
						padding: 0 0 0 0;
						}
						@media screen and (max-width: 768px){ .sd[data-s-66f152eb-cb61-4a70-be5b-3e0b468f8399] {   display: none;
						flex: none;
						height: 19px;
						justify-content: center;
						margin: 0px 0px 30px 0px;
						overflow-x: hidden;
						width: 100%;
						max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-66f152eb-cb61-4a70-be5b-3e0b468f8399] {   justify-content: flex-start;
						overflow-x: auto;
						width: 100%;
						max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-37e9fbdb-341d-46ae-a50f-fccc50a1c01c] {   border-radius: 0;
						color: #22eaaa;
						font-family: Orbitron;
						font-size: 14px;
						letter-spacing: 0em;
						line-height: 1.2;
						padding: 0px 10px 0px;
						text-align: center;
						justify-content: center;
						}
						@media screen and (max-width: 768px){ .sd[data-s-37e9fbdb-341d-46ae-a50f-fccc50a1c01c] {   font-size: 18px;
						padding: 0px 20px 0px;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-37e9fbdb-341d-46ae-a50f-fccc50a1c01c] {  } }
						</style>
						<style>
						.sd[data-s-5212eab7-912f-4ebb-aad2-696138c9a95f] {   border-radius: 0;
						color: #000000;
						font-family: Orbitron;
						font-size: 14px;
						letter-spacing: 0em;
						line-height: 1.2;
						padding: 0px 10px 0px;
						text-align: center;
						justify-content: center;
						}
						@media screen and (max-width: 768px){ .sd[data-s-5212eab7-912f-4ebb-aad2-696138c9a95f] {   font-size: 18px;
						padding: 0px 20px 0px;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-5212eab7-912f-4ebb-aad2-696138c9a95f] {  } }
						</style>
						<style>
						.sd[data-s-a3799947-fc37-4a2f-96ac-188bb906bde5] {   border-radius: 0;
						color: #000000;
						font-family: Orbitron;
						font-size: 14px;
						letter-spacing: 0em;
						line-height: 1.2;
						padding: 0px 10px 0px;
						text-align: center;
						justify-content: center;
						}
						@media screen and (max-width: 768px){ .sd[data-s-a3799947-fc37-4a2f-96ac-188bb906bde5] {   font-size: 18px;
						padding: 0px 20px 0px;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-a3799947-fc37-4a2f-96ac-188bb906bde5] {  } }
						</style>
						<style>
						.sd[data-s-246d0022-9013-4195-b38d-98fd41e248ae] {   border-radius: 0;
						color: #000000;
						font-family: Orbitron;
						font-size: 14px;
						letter-spacing: 0em;
						line-height: 1.2;
						padding: 0px 10px 0px;
						text-align: center;
						justify-content: center;
						}
						@media screen and (max-width: 768px){ .sd[data-s-246d0022-9013-4195-b38d-98fd41e248ae] {   font-size: 18px;
						padding: 0px 20px 0px;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-246d0022-9013-4195-b38d-98fd41e248ae] {  } }
						</style>
						<style>
						.sd[data-s-813e18a3-0e9f-45ac-b9ed-e3adef6f4889] {   border-radius: 0;
						color: #000000;
						font-family: Orbitron;
						font-size: 14px;
						letter-spacing: 0em;
						line-height: 1.2;
						padding: 0px 10px 0px;
						text-align: center;
						justify-content: center;
						}
						@media screen and (max-width: 768px){ .sd[data-s-813e18a3-0e9f-45ac-b9ed-e3adef6f4889] {   font-size: 18px;
						padding: 0px 20px 0px;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-813e18a3-0e9f-45ac-b9ed-e3adef6f4889] {  } }
						</style>
						<style>
						.sd[data-s-07246512-4c1f-4e2b-8b27-85f9faee88f6] {   background: rgba(0,0,0,0.0);
						border-radius: 0;
						flex-direction: row;
						height: 32px;
						overflow-x: auto;
						padding: 0 0 0 0;
						}
						@media screen and (max-width: 768px){ .sd[data-s-07246512-4c1f-4e2b-8b27-85f9faee88f6] {   display: none;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-07246512-4c1f-4e2b-8b27-85f9faee88f6] {  } }
						</style>
						<style>
						.sd[data-s-a29bee55-30bd-47d9-8df1-ff2de61d31c7] {   background: rgba(0,0,0,0);
						border-radius: 0;
						color: #22eaaa;
						margin: 0 0 0 0;
						padding: 0px 10px 0px;
						}
						@media screen and (max-width: 768px){ .sd[data-s-a29bee55-30bd-47d9-8df1-ff2de61d31c7] {   font-size: 24px;
						padding: 0px 20px 0px;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-a29bee55-30bd-47d9-8df1-ff2de61d31c7] {  } }
						</style>
						<style>
						.sd[data-s-ee0a9059-3107-460b-a0a9-b281b4095456] {   background: rgba(0,0,0,0);
						border-radius: 0;
						color: #22eaaa;
						margin: 0 0 0 0;
						padding: 0px 10px 0px;
						}
						@media screen and (max-width: 768px){ .sd[data-s-ee0a9059-3107-460b-a0a9-b281b4095456] {   font-size: 24px;
						padding: 0px 20px 0px;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-ee0a9059-3107-460b-a0a9-b281b4095456] {  } }
						</style>
						<style>
						.sd[data-s-aac5eba9-a964-422e-b7d4-b5fad2ab2b4f] {   background: rgba(0,0,0,0);
						border-radius: 0;
						color: #22eaaa;
						margin: 0 0 0 0;
						padding: 0px 10px 0px;
						}
						@media screen and (max-width: 768px){ .sd[data-s-aac5eba9-a964-422e-b7d4-b5fad2ab2b4f] {   font-size: 24px;
						padding: 0px 20px 0px;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-aac5eba9-a964-422e-b7d4-b5fad2ab2b4f] {  } }
						</style>
						<style>
						.sd[data-s-39e12895-b757-4dd0-85f4-69597d7fa4eb] {   align-content: center;
						align-items: center;
						background: rgba(0,0,0,0.0);
						flex-direction: row;
						flex-wrap: nowrap;
						height: auto;
						justify-content: center;
						padding: 80px 0px 80px 0px;
						width: 100%;
						max-width: 100%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-39e12895-b757-4dd0-85f4-69597d7fa4eb] {   width: 100%;
						max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-39e12895-b757-4dd0-85f4-69597d7fa4eb] {   width: 100%;
						max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-1c99b9f2-bd46-4e95-9ef1-17d76d26a599] {   background: #EEEEEE;
						height: 50px;
						width: 50px;
						max-width: 100%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-1c99b9f2-bd46-4e95-9ef1-17d76d26a599] {   max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-1c99b9f2-bd46-4e95-9ef1-17d76d26a599] {   max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-50ae7c68-d6d0-4f71-b925-ee51a977d490] {   align-content: flex-start;
						align-items: flex-start;
						background: rgba(0,0,0,0.0);
						flex: none;
						flex-direction: row;
						flex-wrap: wrap;
						height: 200px;
						justify-content: flex-start;
						margin: 0px 20px 0px;
						overflow-x: hidden;
						overflow-y: auto;
						width: 1100px;
						max-width: calc(100% - 40px);
						}
						@media screen and (max-width: 768px){ .sd[data-s-50ae7c68-d6d0-4f71-b925-ee51a977d490] {   margin: 0px 20px 0px;
						max-width: calc(100% - 40px);
						} }
						@media screen and (max-width: 480px){ .sd[data-s-50ae7c68-d6d0-4f71-b925-ee51a977d490] {   margin: 0px 10px 0px;
						max-width: calc(100% - 20px);
						} }
						</style>
						<style>
						.sd[data-s-7f4f4549-8ebf-485b-8ffe-54fea54727c0] {   flex: none;
						height: calc(100% - 20px);
						margin: 10px;
						width: calc(33.33% - 20px);
						max-width: calc(33.33% - 20px);
						}
						@media screen and (max-width: 768px){ .sd[data-s-7f4f4549-8ebf-485b-8ffe-54fea54727c0] {   flex: none;
						margin: 10px;
						width: calc(50% - 20px);
						max-width: calc(50% - 20px);
						height: calc(100% - 20px);
						} }
						@media screen and (max-width: 480px){ .sd[data-s-7f4f4549-8ebf-485b-8ffe-54fea54727c0] {   flex: none;
						width: calc(100% - 20px);
						max-width: calc(100% - 20px);
						height: calc(100% - 20px);
						} }
						</style>
						<style>
						.sd[data-s-e2739e3e-6d0b-4a63-b01b-7f8430b2333d] {   flex: none;
						height: calc(100% - 20px);
						margin: 10px;
						width: calc(33.33% - 20px);
						max-width: calc(33.33% - 20px);
						}
						@media screen and (max-width: 768px){ .sd[data-s-e2739e3e-6d0b-4a63-b01b-7f8430b2333d] {   flex: none;
						margin: 10px;
						width: calc(50% - 20px);
						max-width: calc(50% - 20px);
						height: calc(100% - 20px);
						} }
						@media screen and (max-width: 480px){ .sd[data-s-e2739e3e-6d0b-4a63-b01b-7f8430b2333d] {   flex: none;
						width: calc(100% - 20px);
						max-width: calc(100% - 20px);
						height: calc(100% - 20px);
						} }
						</style>
						<style>
						.sd[data-s-c11606c5-59b7-48f2-9de2-cfb67df44a31] {   flex: none;
						height: calc(100% - 20px);
						margin: 10px;
						width: calc(33.33% - 20px);
						max-width: calc(33.33% - 20px);
						}
						@media screen and (max-width: 768px){ .sd[data-s-c11606c5-59b7-48f2-9de2-cfb67df44a31] {   flex: none;
						width: calc(50% - 20px);
						max-width: calc(50% - 20px);
						height: calc(100% - 20px);
						} }
						@media screen and (max-width: 480px){ .sd[data-s-c11606c5-59b7-48f2-9de2-cfb67df44a31] {   flex: none;
						width: calc(100% - 20px);
						max-width: calc(100% - 20px);
						height: calc(100% - 20px);
						} }
						</style>
						<style>
						.sd[data-s-49b50b0e-3665-4927-b5ee-ec593425fd93] {   background: #EEEEEE;
						height: 50px;
						width: 50px;
						max-width: 100%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-49b50b0e-3665-4927-b5ee-ec593425fd93] {   max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-49b50b0e-3665-4927-b5ee-ec593425fd93] {   max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-724579f4-e2ed-4ce0-b2d3-f71b24c14351] {   align-content: flex-start;
						align-items: flex-start;
						background: rgba(0,0,0,0.0);
						border-radius: 0;
						justify-content: center;
						opacity: 1;
						padding: 20px;
						width: 50%;
						max-width: 50%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-724579f4-e2ed-4ce0-b2d3-f71b24c14351] {   width: 50%;
						max-width: 50%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-724579f4-e2ed-4ce0-b2d3-f71b24c14351] {   width: 50%;
						max-width: 50%;
						} }
						</style>
						<style>
						.sd[data-s-5b342803-2c7c-49ea-ac3f-311a975e234d] {   align-content: center;
						align-items: center;
						background: rgba(0,0,0,0.0);
						border-radius: 0;
						opacity: 1;
						overflow-y: auto;
						padding: 0 0 0 0;
						width: 100%;
						max-width: 100%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-5b342803-2c7c-49ea-ac3f-311a975e234d] {   width: 100%;
						max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-5b342803-2c7c-49ea-ac3f-311a975e234d] {   width: 100%;
						max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-d9a5a4aa-953e-46d6-b99a-48a7b2f92449] {   border-radius: 0;
						color: #333;
						font-family: Lato;
						font-size: 15px;
						font-weight: 700;
						letter-spacing: 0em;
						line-height: 1.4;
						margin: 0px 0px 5px 0px;
						opacity: 1;
						padding: 0 0 0 0;
						text-align: center;
						justify-content: center;
						}
						@media screen and (max-width: 768px){ .sd[data-s-d9a5a4aa-953e-46d6-b99a-48a7b2f92449] {  } }
						@media screen and (max-width: 480px){ .sd[data-s-d9a5a4aa-953e-46d6-b99a-48a7b2f92449] {  } }
						</style>
						<style>
						.sd[data-s-4001a2fd-e582-4920-8606-ba6afb2d25a5] {   align-content: flex-start;
						align-items: flex-start;
						background: #EEEEEE;
						border-radius: 0;
						flex-direction: row;
						opacity: 1;
						overflow-x: auto;
						padding: 0 0 0 0;
						width: 100%;
						max-width: 100%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-4001a2fd-e582-4920-8606-ba6afb2d25a5] {   width: 100%;
						max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-4001a2fd-e582-4920-8606-ba6afb2d25a5] {   width: 100%;
						max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-68bb3638-0130-4490-ae6d-a9d34918be76] {   background: #FFFFFF;
						border-bottom: solid 1px #dddddd;
						border-left: solid 1px #dddddd;
						border-radius: 0;
						border-top: solid 1px #dddddd;
						box-shadow: 0px 0px 0px 0px rgba(0,0,0,0.2);
						color: #333;
						flex: 1;
						font-family: Lato;
						font-size: 16px;
						font-weight: 400;
						height: 50px;
						justify-content: center;
						letter-spacing: 0em;
						line-height: 1.4;
						opacity: 1;
						padding: 10px 16px 10px 16px;
						text-align: left;
						}
						.sd[data-s-68bb3638-0130-4490-ae6d-a9d34918be76]::-webkit-input-placeholder {   color: #aeaeae;
						}
						.sd[data-s-68bb3638-0130-4490-ae6d-a9d34918be76]:-moz-placeholder {   color: #aeaeae;
						}
						.sd[data-s-68bb3638-0130-4490-ae6d-a9d34918be76]::-moz-placeholder {   color: #aeaeae;
						}
						.sd[data-s-68bb3638-0130-4490-ae6d-a9d34918be76]:-ms-input-placeholder {   color: #aeaeae;
						}
						@media screen and (max-width: 768px){ .sd[data-s-68bb3638-0130-4490-ae6d-a9d34918be76] {  } }
						@media screen and (max-width: 480px){ .sd[data-s-68bb3638-0130-4490-ae6d-a9d34918be76] {  } }
						</style>
						<style>
						.sd[data-s-723cc33c-e307-4992-876a-0e0ca6a391b8] {   background: #1E88E5;
						border-radius: 0px;
						box-shadow: 0px 0px 0px 0px rgba(0,0,0,0.2);
						color: #333;
						font-family: Lato;
						font-size: 15px;
						font-weight: 400;
						height: 50px;
						justify-content: center;
						letter-spacing: 0em;
						line-height: 1.4;
						opacity: 1;
						padding: 0px;
						text-align: left;
						width: 100px;
						max-width: 100%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-723cc33c-e307-4992-876a-0e0ca6a391b8] {   max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-723cc33c-e307-4992-876a-0e0ca6a391b8] {   max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-537834ef-24cf-4906-8594-3524fdc17fdd] {   border-radius: 0;
						color: #FFFFFF;
						font-family: Lato;
						font-weight: 700;
						letter-spacing: 0em;
						line-height: 1;
						margin: 0 0 0 0;
						opacity: 1;
						padding: 0px 0px 2px 0px;
						text-align: center;
						justify-content: center;
						}
						@media screen and (max-width: 768px){ .sd[data-s-537834ef-24cf-4906-8594-3524fdc17fdd] {  } }
						@media screen and (max-width: 480px){ .sd[data-s-537834ef-24cf-4906-8594-3524fdc17fdd] {  } }
						</style>
						<style>
						.sd[data-s-508864a7-94a0-44ca-9c0c-614d7fac14a9] {   background: #EEEEEE;
						flex: none;
						height: 30px;
						width: 50px;
						max-width: 100%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-508864a7-94a0-44ca-9c0c-614d7fac14a9] {   max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-508864a7-94a0-44ca-9c0c-614d7fac14a9] {   max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-0fb23fee-72f5-4898-a850-37ab451420d6] {   align-content: flex-end;
						align-items: flex-end;
						background: rgba(0,0,0,0.0);
						flex: none;
						flex-direction: column;
						flex-wrap: nowrap;
						height: auto;
						justify-content: center;
						width: 100%;
						max-width: 100%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-0fb23fee-72f5-4898-a850-37ab451420d6] {   width: 100%;
						max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-0fb23fee-72f5-4898-a850-37ab451420d6] {   width: 100%;
						max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-7a4aefbf-5612-4a26-816b-8ff5ff129250] {   background: #EEEEEE;
						flex: none;
						height: 50px;
						margin: 0px 50px 0px 0px;
						width: 150px;
						max-width: calc(100% - 50px);
						}
						@media screen and (max-width: 768px){ .sd[data-s-7a4aefbf-5612-4a26-816b-8ff5ff129250] {   max-width: calc(100% - 50px);
						} }
						@media screen and (max-width: 480px){ .sd[data-s-7a4aefbf-5612-4a26-816b-8ff5ff129250] {   max-width: calc(100% - 50px);
						} }
						</style>
						<style>
						.sd[room-list] {   align-content: center;
						align-items: center;
						background: rgba(0,0,0,0.0);
						border-radius: 0;
						flex: none;
						height: auto;
						margin: 0px 0px 60px 0px;
						overflow-y: auto;
						padding: 60px 0px 60px 0px;
						width: 100%;
						max-width: 100%;
						}
						@media screen and (max-width: 768px){ .sd[room-list] {   padding: 60px 0px 40px 0px;
						width: 100%;
						max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[room-list] {   padding: 60px 0px 20px 0px;
						width: 100%;
						max-width: 100%;
						} }
						</style>
						<style>
						.sd[list-line] {   background: rgba(0,0,0,0.0);
						border-radius: 0;
						margin: 0px 40px 40px;
						opacity: 1;
						overflow-y: auto;
						padding: 0 0 0 0;
						width: 1100px;
						max-width: calc(100% - 80px);
						}
						@media screen and (max-width: 768px){ .sd[list-line] {   padding: 0px 0px 0px;
						max-width: calc(100% - 80px);
						} }
						@media screen and (max-width: 480px){ .sd[list-line] {   margin: 0px 20px 0px;
						max-width: calc(100% - 40px);
						} }
						</style>
						<style>
						.sd[three-blocks] {   align-content: flex-start;
						align-items: flex-start;
						background: rgba(0,0,0,0.0);
						border-radius: 0;
						flex-direction: row;
						flex-wrap: wrap;
						overflow-y: auto;
						padding: 0 0 0 0;
						width: 100%;
						max-width: 100%;
						}
						@media screen and (max-width: 768px){ .sd[three-blocks] {   flex-direction: column;
						height: auto;
						overflow-y: auto;
						padding: 0 0 0 0;
						width: 100%;
						max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[three-blocks] {   width: 100%;
						max-width: 100%;
						} }
						</style>
						<style>
						.sd[room-image] {   border-radius: 0px;
						height: 220px;
						padding: 0 0 0 0;
						width: 100%;
						max-width: 100%;
						}
						@media screen and (max-width: 768px){ .sd[room-image] {   height: 340px;
						width: 100%;
						max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[room-image] {   height: 300px;
						width: 100%;
						max-width: 100%;
						} }
						</style>
						<style>
						.sd[room-title] {   border-radius: 0;
						color: #333;
						font-family: Lato;
						font-size: 24px;
						font-weight: 700;
						letter-spacing: 0em;
						line-height: 1.2;
						margin: 15px 0px 15px 0px;
						padding: 0 0 0 0;
						text-align: center;
						justify-content: center;
						}
						@media screen and (max-width: 768px){ .sd[room-title] {  } }
						@media screen and (max-width: 480px){ .sd[room-title] {   font-size: 20px;
						} }
						</style>
						<style>
						.sd[type-tag-block] {   align-content: center;
						align-items: center;
						flex-direction: row;
						flex-wrap: nowrap;
						justify-content: center;
						overflow-x: hidden;
						overflow-y: hidden;
						}
						@media screen and (max-width: 768px){ .sd[type-tag-block] {  } }
						@media screen and (max-width: 480px){ .sd[type-tag-block] {  } }
						</style>
						<style>
						.sd[type-tag] {   background: #EEEEEE;
						border-radius: 10px;
						flex: none;
						height: 20px;
						margin: 0px 5px 5px 0px;
						padding: px 15px 0px 15px;
						display: inline-block;
						max-width: calc(100% - 5px);
						}
						@media screen and (max-width: 768px){ .sd[type-tag] {   max-width: calc(100% - 5px);
						} }
						@media screen and (max-width: 480px){ .sd[type-tag] {   max-width: calc(100% - 5px);
						} }
						</style>
						<style>
						.sd[room-block] {   align-content: flex-start;
						align-items: flex-start;
						background: rgba(0,0,0,0.0);
						border-radius: 0;
						flex: none;
						overflow-y: auto;
						padding: 0px 10px 0px;
						width: 33%;
						max-width: 33%;
						}
						@media screen and (max-width: 768px){ .sd[room-block] {   margin: 0px 0px 50px 0px;
						padding: 0px 0px 0px;
						width: 100%;
						max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[room-block] {   padding: 0px 0px 0px;
						width: 100%;
						max-width: 100%;
						} }
						</style>
						<style>
						.sd[room-title] {   border-radius: 0;
						color: #333;
						font-family: Lato;
						font-size: 24px;
						font-weight: 700;
						letter-spacing: 0em;
						line-height: 1.2;
						margin: 15px 0px 15px 0px;
						padding: 0 0 0 0;
						text-align: center;
						justify-content: center;
						}
						@media screen and (max-width: 768px){ .sd[room-title] {  } }
						@media screen and (max-width: 480px){ .sd[room-title] {   font-size: 20px;
						} }
						</style>
						
						<style>
						.sd[data-s-39482521-15ff-4ba1-9bb4-24193a6ad7bb] {   align-content: center;
						align-items: center;
						background: rgba(0,0,0,0.0);
						flex: none;
						flex-direction: column;
						flex-wrap: nowrap;
						height: auto;
						justify-content: center;
						width: 100%;
						max-width: 100%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-39482521-15ff-4ba1-9bb4-24193a6ad7bb] {   width: 100%;
						max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-39482521-15ff-4ba1-9bb4-24193a6ad7bb] {   width: 100%;
						max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-4032d050-a231-4cc8-8255-866447c11c85] {   align-content: flex-start;
						align-items: flex-start;
						background: rgba(0,0,0,0.0);
						border-radius: 0;
						flex: none;
						flex-direction: row;
						height: auto;
						justify-content: center;
						padding: 50px 0px 50px 0px;
						width: 720px;
						max-width: 100%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-4032d050-a231-4cc8-8255-866447c11c85] {   max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-4032d050-a231-4cc8-8255-866447c11c85] {   padding: 40px 0px 40px 0px;
						max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-d1d6030f-c0c1-463b-ad80-9e7a0b50567f] {   background: rgba(0,0,0,0.0);
						border-radius: 0;
						flex: none;
						flex-direction: row;
						height: auto;
						margin: 0px 40px 0px;
						overflow-x: auto;
						padding: 0 0 0 0;
						width: 1100px;
						max-width: calc(100% - 80px);
						}
						@media screen and (max-width: 768px){ .sd[data-s-d1d6030f-c0c1-463b-ad80-9e7a0b50567f] {   flex-direction: column;
						overflow-x: hidden;
						overflow-y: auto;
						max-width: calc(100% - 80px);
						} }
						@media screen and (max-width: 480px){ .sd[data-s-d1d6030f-c0c1-463b-ad80-9e7a0b50567f] {   margin: 0px 20px 0px;
						max-width: calc(100% - 40px);
						} }
						</style>
						<style>
						.sd[data-s-5e646e07-eddf-44f7-a2ec-b5b72cb11713] {   border-radius: 0px;
						flex: none;
						height: auto;
						padding: 0 0 0 0;
						width: 40%;
						max-width: 40%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-5e646e07-eddf-44f7-a2ec-b5b72cb11713] {   height: 340px;
						margin: 0px 0px 20px 0px;
						width: 100%;
						max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-5e646e07-eddf-44f7-a2ec-b5b72cb11713] {   height: 300px;
						width: 100%;
						max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-b42375a3-7c10-450b-bf5f-4ad596e85ec4] {   align-content: flex-start;
						align-items: flex-start;
						background: rgba(0,0,0,0.0);
						border-radius: 0;
						flex: 1;
						overflow-y: auto;
						padding: 0px 0px 0px 40px;
						}
						@media screen and (max-width: 768px){ .sd[data-s-b42375a3-7c10-450b-bf5f-4ad596e85ec4] {   flex: none;
						padding: 0px 0px 0px 0px;
						width: 100%;
						max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-b42375a3-7c10-450b-bf5f-4ad596e85ec4] {   width: 100%;
						max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-c6a6ef59-5e1d-48dc-aa5b-91ef2ffa4482] {   border-radius: 0;
						font-family: Lato;
						font-size: 28px;
						font-weight: 700;
						letter-spacing: 0em;
						line-height: 1.2;
						margin: 0px 0px 15px 0px;
						padding: 0 0 0 0;
						text-align: center;
						justify-content: center;
						}
						@media screen and (max-width: 768px){ .sd[data-s-c6a6ef59-5e1d-48dc-aa5b-91ef2ffa4482] {  } }
						@media screen and (max-width: 480px){ .sd[data-s-c6a6ef59-5e1d-48dc-aa5b-91ef2ffa4482] {   font-size: 20px;
						} }
						</style>
						<style>
						.sd[data-s-878f9c07-d660-45e1-95c2-abf519e1aa02] {   border-radius: 0;
						font-family: Lato;
						letter-spacing: 0em;
						line-height: 1.2;
						padding: 0 0 0 0;
						text-align: left;
						justify-content: flex-start;
						}
						@media screen and (max-width: 768px){ .sd[data-s-878f9c07-d660-45e1-95c2-abf519e1aa02] {  } }
						@media screen and (max-width: 480px){ .sd[data-s-878f9c07-d660-45e1-95c2-abf519e1aa02] {  } }
						</style>
						<style>
						.sd[data-s-7f7d612b-2272-454f-9856-e4bd4c136c05] {   align-content: flex-start;
						align-items: flex-start;
						background: rgba(0,0,0,0.0);
						border-radius: 0;
						flex: none;
						flex-direction: row;
						height: auto;
						justify-content: center;
						padding: 50px 0px 50px 0px;
						width: 720px;
						max-width: 100%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-7f7d612b-2272-454f-9856-e4bd4c136c05] {   max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-7f7d612b-2272-454f-9856-e4bd4c136c05] {   padding: 40px 0px 40px 0px;
						max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-f764a2fe-07ab-4b68-b588-184d3e3108c7] {   background: rgba(0,0,0,0.0);
						border-radius: 0;
						flex: none;
						flex-direction: row;
						height: auto;
						margin: 0px 40px 0px;
						overflow-x: auto;
						padding: 0 0 0 0;
						width: 1100px;
						max-width: calc(100% - 80px);
						}
						@media screen and (max-width: 768px){ .sd[data-s-f764a2fe-07ab-4b68-b588-184d3e3108c7] {   flex-direction: column;
						overflow-x: hidden;
						overflow-y: auto;
						max-width: calc(100% - 80px);
						} }
						@media screen and (max-width: 480px){ .sd[data-s-f764a2fe-07ab-4b68-b588-184d3e3108c7] {   margin: 0px 20px 0px;
						max-width: calc(100% - 40px);
						} }
						</style>
						<style>
						.sd[data-s-1f7f7da7-b340-423d-9cf8-bc3f87aa5c8e] {   border-radius: 0px;
						flex: none;
						height: auto;
						padding: 0 0 0 0;
						width: 40%;
						max-width: 40%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-1f7f7da7-b340-423d-9cf8-bc3f87aa5c8e] {   height: 340px;
						margin: 0px 0px 20px 0px;
						width: 100%;
						max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-1f7f7da7-b340-423d-9cf8-bc3f87aa5c8e] {   height: 300px;
						width: 100%;
						max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-57c3d180-6401-4bb1-8a4f-3769eb6d9055] {   align-content: flex-start;
						align-items: flex-start;
						background: rgba(0,0,0,0.0);
						border-radius: 0;
						flex: 1;
						overflow-y: auto;
						padding: 0px 0px 0px 40px;
						}
						@media screen and (max-width: 768px){ .sd[data-s-57c3d180-6401-4bb1-8a4f-3769eb6d9055] {   flex: none;
						padding: 0px 0px 0px 0px;
						width: 100%;
						max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-57c3d180-6401-4bb1-8a4f-3769eb6d9055] {   width: 100%;
						max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-136d9b17-1270-48b5-b44c-a2995cf6c134] {   border-radius: 0;
						font-family: Lato;
						font-size: 28px;
						font-weight: 700;
						letter-spacing: 0em;
						line-height: 1.2;
						margin: 0px 0px 15px 0px;
						padding: 0 0 0 0;
						text-align: center;
						justify-content: center;
						}
						@media screen and (max-width: 768px){ .sd[data-s-136d9b17-1270-48b5-b44c-a2995cf6c134] {  } }
						@media screen and (max-width: 480px){ .sd[data-s-136d9b17-1270-48b5-b44c-a2995cf6c134] {   font-size: 20px;
						} }
						</style>
						<style>
						.sd[data-s-6c091666-fafa-41e2-a5e8-d8e9d4646b8b] {   border-radius: 0;
						font-family: Lato;
						letter-spacing: 0em;
						line-height: 1.2;
						padding: 0 0 0 0;
						text-align: left;
						justify-content: flex-start;
						}
						@media screen and (max-width: 768px){ .sd[data-s-6c091666-fafa-41e2-a5e8-d8e9d4646b8b] {  } }
						@media screen and (max-width: 480px){ .sd[data-s-6c091666-fafa-41e2-a5e8-d8e9d4646b8b] {  } }
						</style>
						<style>
						.sd[data-s-8d7e0df0-2dbe-47f8-b4ff-a3dc9f133d6d] {   align-content: flex-start;
						align-items: flex-start;
						background: rgba(0,0,0,0.0);
						border-radius: 0;
						flex: none;
						flex-direction: row;
						height: auto;
						justify-content: center;
						padding: 50px 0px 50px 0px;
						width: 720px;
						max-width: 100%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-8d7e0df0-2dbe-47f8-b4ff-a3dc9f133d6d] {   max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-8d7e0df0-2dbe-47f8-b4ff-a3dc9f133d6d] {   padding: 40px 0px 40px 0px;
						max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-26ab9839-0524-4a7c-8588-3a1de61cb755] {   background: rgba(0,0,0,0.0);
						border-radius: 0;
						flex: none;
						flex-direction: row;
						height: auto;
						margin: 0px 40px 0px;
						overflow-x: auto;
						padding: 0 0 0 0;
						width: 1100px;
						max-width: calc(100% - 80px);
						}
						@media screen and (max-width: 768px){ .sd[data-s-26ab9839-0524-4a7c-8588-3a1de61cb755] {   flex-direction: column;
						overflow-x: hidden;
						overflow-y: auto;
						max-width: calc(100% - 80px);
						} }
						@media screen and (max-width: 480px){ .sd[data-s-26ab9839-0524-4a7c-8588-3a1de61cb755] {   margin: 0px 20px 0px;
						max-width: calc(100% - 40px);
						} }
						</style>
						<style>
						.sd[data-s-c37e7379-7707-45f7-8e54-8912da19b01d] {   border-radius: 0px;
						flex: none;
						height: auto;
						padding: 0 0 0 0;
						width: 40%;
						max-width: 40%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-c37e7379-7707-45f7-8e54-8912da19b01d] {   height: 340px;
						margin: 0px 0px 20px 0px;
						width: 100%;
						max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-c37e7379-7707-45f7-8e54-8912da19b01d] {   height: 300px;
						width: 100%;
						max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-fde41637-ad63-4dbc-b86a-beca460be2e5] {   align-content: flex-start;
						align-items: flex-start;
						background: rgba(0,0,0,0.0);
						border-radius: 0;
						flex: 1;
						overflow-y: auto;
						padding: 0px 0px 0px 40px;
						}
						@media screen and (max-width: 768px){ .sd[data-s-fde41637-ad63-4dbc-b86a-beca460be2e5] {   flex: none;
						padding: 0px 0px 0px 0px;
						width: 100%;
						max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-fde41637-ad63-4dbc-b86a-beca460be2e5] {   width: 100%;
						max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-8811a0ca-9113-46d7-93c9-5af8d6da6e94] {   border-radius: 0;
						font-family: Lato;
						font-size: 28px;
						font-weight: 700;
						letter-spacing: 0em;
						line-height: 1.2;
						margin: 0px 0px 15px 0px;
						padding: 0 0 0 0;
						text-align: center;
						justify-content: center;
						}
						@media screen and (max-width: 768px){ .sd[data-s-8811a0ca-9113-46d7-93c9-5af8d6da6e94] {  } }
						@media screen and (max-width: 480px){ .sd[data-s-8811a0ca-9113-46d7-93c9-5af8d6da6e94] {   font-size: 20px;
						} }
						</style>
						<style>
						.sd[data-s-df92cf3e-039b-422a-b8dc-85ebbbd28eee] {   border-radius: 0;
						font-family: Lato;
						letter-spacing: 0em;
						line-height: 1.2;
						padding: 0 0 0 0;
						text-align: left;
						justify-content: flex-start;
						}
						@media screen and (max-width: 768px){ .sd[data-s-df92cf3e-039b-422a-b8dc-85ebbbd28eee] {  } }
						@media screen and (max-width: 480px){ .sd[data-s-df92cf3e-039b-422a-b8dc-85ebbbd28eee] {  } }
						</style>
						<style>
						.sd[data-s-73343638-ccca-4a31-96ea-a9a6fc0ebd44] {   align-content: center;
						align-items: center;
						background: rgba(0,0,0,0.0);
						flex: none;
						flex-direction: column;
						flex-wrap: nowrap;
						height: auto;
						justify-content: flex-start;
						margin: 0px 0px 60px 0px;
						padding: 0px 0px 60px 0px;
						width: 100%;
						max-width: 100%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-73343638-ccca-4a31-96ea-a9a6fc0ebd44] {   width: 100%;
						max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-73343638-ccca-4a31-96ea-a9a6fc0ebd44] {   width: 100%;
						max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-88147460-57bc-4c28-b8c0-c0744fe5be21] {   background: #EEEEEE;
						flex: none;
						height: 70px;
						width: 250px;
						max-width: 100%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-88147460-57bc-4c28-b8c0-c0744fe5be21] {   max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-88147460-57bc-4c28-b8c0-c0744fe5be21] {   max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-e0b98020-39a3-434f-b032-f85ead069e93] {   background: #EEEEEE;
						border-radius: 0;
						overflow-y: auto;
						padding: 80px 0px 80px 0px;
						width: 100%;
						max-width: 100%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-e0b98020-39a3-434f-b032-f85ead069e93] {   width: 100%;
						max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-e0b98020-39a3-434f-b032-f85ead069e93] {   width: 100%;
						max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-2d23585a-dfbf-4dfb-8ef8-6f89a7633df6] {   align-content: flex-start;
						align-items: flex-start;
						background: rgba(0,0,0,0.0);
						border-radius: 0;
						height: 52px;
						margin: 0px 40px 0px;
						overflow-y: auto;
						padding: 0px 0px 0px;
						width: 1100px;
						max-width: calc(100% - 80px);
						}
						@media screen and (max-width: 768px){ .sd[data-s-2d23585a-dfbf-4dfb-8ef8-6f89a7633df6] {   width: calc(100% - 80px);
						max-width: calc(100% - 80px);
						} }
						@media screen and (max-width: 480px){ .sd[data-s-2d23585a-dfbf-4dfb-8ef8-6f89a7633df6] {   margin: 0px 20px 0px;
						width: calc(100% - 40px);
						max-width: calc(100% - 40px);
						} }
						</style>
						<style>
						.sd[data-s-4adec7a9-9ca7-4aa8-939f-7490a1689f8d] {   align-content: flex-start;
						align-items: flex-start;
						background: rgba(0,0,0,0.0);
						border-radius: 0;
						flex-direction: row;
						height: auto;
						overflow-x: auto;
						padding: 0px 15px 0px;
						width: 100%;
						max-width: 100%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-4adec7a9-9ca7-4aa8-939f-7490a1689f8d] {   align-content: center;
						align-items: center;
						width: 100%;
						max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-4adec7a9-9ca7-4aa8-939f-7490a1689f8d] {   padding: 0px 0px 0px;
						width: 100%;
						max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-ea748598-dd4a-49da-a7dc-6e6ffb366df3] {   align-content: flex-start;
						align-items: flex-start;
						background: rgba(0,0,0,0.0);
						border-radius: 0;
						overflow-y: auto;
						padding: 0px 15px 0px;
						width: 50%;
						max-width: 50%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-ea748598-dd4a-49da-a7dc-6e6ffb366df3] {   width: 50%;
						max-width: 50%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-ea748598-dd4a-49da-a7dc-6e6ffb366df3] {   padding: 0px 0px 0px;
						width: 50%;
						max-width: 50%;
						} }
						</style>
						<style>
						.sd[data-s-ba2c1efe-d119-482b-8a22-bdfe6b09c573] {   background: rgba(0,0,0,0.0);
						border-radius: 0;
						color: #22eaaa;
						font-family: 'Open Sans';
						font-size: 14px;
						letter-spacing: 0em;
						line-height: 1.2;
						padding: 0 0 0 0;
						text-align: left;
						width: 100%;
						max-width: 100%;
						justify-content: flex-start;
						}
						@media screen and (max-width: 768px){ .sd[data-s-ba2c1efe-d119-482b-8a22-bdfe6b09c573] {   width: 100%;
						max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-ba2c1efe-d119-482b-8a22-bdfe6b09c573] {   width: 100%;
						max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-9b1e93b2-5f0e-4d87-827c-f1e2e607c90a] {   background: rgba(0,0,0,0.0);
						border-radius: 0;
						color: #000000;
						font-family: 'Open Sans';
						font-size: 14px;
						letter-spacing: 0em;
						line-height: 1.2;
						margin: 0px 0px 20px 0px;
						padding: 0 0 0 0;
						text-align: left;
						width: 100%;
						max-width: 100%;
						justify-content: flex-start;
						}
						@media screen and (max-width: 768px){ .sd[data-s-9b1e93b2-5f0e-4d87-827c-f1e2e607c90a] {   margin: 0px 0px 0px 0px;
						width: 100%;
						max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-9b1e93b2-5f0e-4d87-827c-f1e2e607c90a] {   width: 100%;
						max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-e5619cdf-2bb0-4c7f-b3c2-37464f08cec6] {   align-content: flex-start;
						align-items: flex-start;
						background: rgba(0,0,0,0.0);
						border-radius: 0;
						flex-direction: row-reverse;
						overflow-x: auto;
						padding: 0px 15px 0px;
						width: 50%;
						max-width: 50%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-e5619cdf-2bb0-4c7f-b3c2-37464f08cec6] {   width: 50%;
						max-width: 50%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-e5619cdf-2bb0-4c7f-b3c2-37464f08cec6] {   width: 50%;
						max-width: 50%;
						} }
						</style>
						<style>
						.sd[data-s-09e4a392-db69-4df9-b474-6adca33d73aa] {   background: rgba(0,0,0,0);
						border-radius: 0;
						color: #22eaaa;
						font-size: 22px;
						height: 50px;
						margin: 0 0 0 0;
						padding: 0 0 0 0;
						width: 50px;
						max-width: 100%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-09e4a392-db69-4df9-b474-6adca33d73aa] {   max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-09e4a392-db69-4df9-b474-6adca33d73aa] {   max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-dc1f032c-a430-4e0e-9a4b-97b56df53f29] {   background: rgba(0,0,0,0);
						border-radius: 0;
						color: #22eaaa;
						font-size: 22px;
						height: 50px;
						margin: 0 0 0 0;
						padding: 0 0 0 0;
						width: 50px;
						max-width: 100%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-dc1f032c-a430-4e0e-9a4b-97b56df53f29] {   max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-dc1f032c-a430-4e0e-9a4b-97b56df53f29] {   max-width: 100%;
						} }
						</style>
						<style>
						.sd[data-s-cc717dcb-6877-4ede-9d75-d6bb8755c923] {   background: rgba(0,0,0,0);
						border-radius: 0;
						color: #22eaaa;
						font-size: 22px;
						height: 50px;
						margin: 0 0 0 0;
						padding: 0 0 0 0;
						width: 50px;
						max-width: 100%;
						}
						@media screen and (max-width: 768px){ .sd[data-s-cc717dcb-6877-4ede-9d75-d6bb8755c923] {   max-width: 100%;
						} }
						@media screen and (max-width: 480px){ .sd[data-s-cc717dcb-6877-4ede-9d75-d6bb8755c923] {   max-width: 100%;
						} }
						</style>
						<style>
						body { background: #fff; transition: background 0.5s cubic-bezier(0.4, 0.4, 0, 1); }
						</style>
					</div>
					<div class="studio__banner" data-v-06f54c42="">
						<a class="logo" data-v-06f54c42="" href="https://studio.design" target="_blank">
						<p data-v-06f54c42="">Designed with</p><img data-v-06f54c42="" src="/_nuxt/img/4ffb001.svg"></a>
					</div>
				</div>
			</section>
		</div>
	</div>
	<script>
	window.__NUXT__=(function(a,b,c){return {layout:"default",data:[{}],error:a,state:{projectId:a,design:{info:{created_at:a,type:c,updated_at:a,version:c},pages:[]},"action-types":{},livePreview:{connected:b,loading:b,client:b,projectId:a,project:a},"mutation-types":{},publish:{host:c,connected:b},api:{api:{}}},serverRendered:true}}(null,false,""));
	</script>
	<script defer src="/_nuxt/c74bf94161b9a5a00b51.js">
	</script>
	<script defer src="/_nuxt/bc320698853c3b67ebf9.js">
	</script>
	<script defer src="/_nuxt/b49c78eb637d84f3b1d9.js">
	</script>
	<script defer src="/_nuxt/c8b71a02ba010d2f6510.js">
	</script>
</body>
</html>