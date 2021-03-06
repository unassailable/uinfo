/* MOBILE */
	@media (max-width:740px) {		
			#nav {
				display:flex !important;
				flex-flow:row nowrap !important;
			}

			#nav .nav-item  {
				flex:1 1 100% !important;
				width:19vw !important;
			}
			
			#nav .nav-item img {
				max-width:20vw !important;
				max-height:20vw !important;
				height:auto !important;
			}
			
			#side a .sub-text {
				display:inline !important;
			}
/*		#nav {
			height:4em !important;
			top:0 !important;
		}
		
		#nav .nav-item {
			margin:0 auto !important;
		}
		
		#nav .nav-item {
			font-size:2em !important;
		}
		
		#nav .nav-item a + ul {
			left:-50% !important;
			position:absolute !important;
			width:200% !important;
		}*/
		
		#main {
			margin:4em auto 4em auto !important;
		}
		
		.alert {
			padding:12.5em .5em .5em .5em !important;
		}

		.mobile-only {
			display:block !important;
		}
		
		.desktop-only {
			display:none !important;
		}
	}

/* END MOBILE */

/* MIDDLE */
	@media (max-width:820px) and (min-width:740px) {
			#nav {
				display:flex !important;
				flex-flow:row nowrap !important;
				justify-content:flex-start !important;
				align-content:flex-start !important;
			}
			
			#nav .nav-item  {
				flex:1 1 100% !important;
			}
		
		.middle-hide {
			display:none !important;
		}
	}
/* END MIDDLE */
