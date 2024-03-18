<?php
function my_login_logo() { ?>
		<script src="/wp-content/themes/searchstack/js/p5.min.js"></script>
	<script src="/wp-content/themes/searchstack/js/vanta.topology.min.js"></script>
    <style type="text/css">
        #login h1 a, .login h1 a {
			background-image: url(https://searchstack.co.uk/wp-content/uploads/2019/11/searchstack-icon.svg);
			padding-bottom: 0px;
			width: 200px;
			height: 100px;
			background-size: contain;
			animation: logslide 1.2s ease ;
		}
		body {
			background: black !important;
		}
		.login form .input, .login form input[type=checkbox], .login input[type=text] {
			background: #fbfbfb;
			color: #777777;
			border: none !important;
			border-bottom: solid 1px rgb(137, 0, 252, 0.7) !important;
			border-radius: 0px !important;
			background: transparent !important;
			margin-top: 7px;
		}
		.wp-core-ui .button-primary {
			background: #8900fc !important;
			border: none !important;
			margin-top: 20px !important;
			width: 100% !important;
			box-shadow: none !important;
			color: white !important;
			padding: 0 12px 2px !important;
			text-shadow: none !important;
			border-radius: 0px !important;
		}
		.login label {
			font-size: 14px !important;
			font-family: Muli, sans-serif !important;
			color: #eae8e1 !important;
		}
		.login form{
			box-shadow: 0 9px 32px 0 rgba(0,0,0,.15)  !important;
			padding: 0px !important;
			border-radius: 0  !important;
			margin-bottom: 20px  !important;
			background: transparent !important;
		}
		#login {
			width: 320px;
			padding: 8% 0 0;
			margin: auto;
			background: rgb(0, 13, 45, 0.7);
			padding: 2rem 3rem !important;
			position: relative !important;
    		bottom: -3rem !important;
		}
		.forgetmenot input {
			margin: 0 !important;
		}
	    	.login form {
			border: 0 !important;
		}
		.login #login_error, .login .message, .login .success {
			border-bottom: 1px solid #8900fc !important;
			padding: 12px !important;
			margin-left: 0 !important;
			margin-bottom: 20px !important;
			background-color: transparent !important;
			color: white !important;
			box-shadow: none !important;
			border-left: none  !important;
		}
		input#rememberme {
			border: solid 1px #8900fc !important;
			color: #8900fc !important;
		}
		input[type=checkbox]:checked:before {
			content: "\f147";
			margin: -3px 0 0 -4px;
			color: #8900fc !important;
		}
		a:hover, .login #nav a:hover, .login h1 a:hover {
			color: #8900fc !important;
		}
		a {
			color: #ffffff !important;
		}
		@keyframes logslide {
		  0% {
			  transform: translatey(50px);
			  opacity: 0;
			  display: block;
		  }
		  50% {
			  opacity: 0;
		  }
		  100% {
			  transform: translate(0);
			  opacity: 1;
		  }
		}
		#login {
			margin: auto  !important;
			animation: logslide 0.9s ease ;
		}
		.login-footer-block {
			position: relative;
			z-index: 99;
			background: transparent;
			color: white;
			text-align: center;
			width: 300px;
			margin: auto !important;
			font-size: 1rem;
			animation: logslide 1.5s ease ;
			padding-top: 4rem !important;
		}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_bg() { ?>
	<script>
        VANTA.TOPOLOGY({
        el: ".login",
        color: 0x6549e8,
        backgroundColor: 0x40622
        })
    </script>
<?php }
add_action( 'login_form', 'my_login_bg' );

function my_login_info() { ?>
	<html>
	<div class="login-footer-block">
	<p>Site created and maintained by <a href="https://searchstack.co.uk/" target="_blank">Search Stack Web Agency</a></p>
	</div>
	</html>
	<?php }
add_action( 'login_footer', 'my_login_info' );

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
  	.wp-core-ui .button-primary {
    background: #7400FC;
	border-color: #5f00f9;
	transition: all .3s ease-in-out;
	}
	a {
		color: #7400FC;
	}
	a:active, a:hover {
		color: #aa66ff;
	}
	#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu .wp-menu-arrow, #adminmenu .wp-menu-arrow div, #adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, .folded #adminmenu li.current.menu-top, .folded #adminmenu li.wp-has-current-submenu {
		background: #7400FC;
		color: #fff;
	}
	#adminmenu li.menu-top:hover, #adminmenu li.opensub>a.menu-top, #adminmenu li>a.menu-top:focus {
		color: #aa66ff;
		background-color: #071842;
	}
	#adminmenu .wp-submenu a:focus, #adminmenu .wp-submenu a:hover, #adminmenu a:hover, #adminmenu li.menu-top>a:focus {
		color: #aa66ff;
	}
	#adminmenu li a:focus div.wp-menu-image:before, #adminmenu li.opensub div.wp-menu-image:before, #adminmenu li:hover div.wp-menu-image:before {
		color: #aa66ff;
	}
	#wpadminbar {
		background: rgb(5, 1, 30);
	}
	#adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap {
		background: rgb(5, 1, 30);
	}
	#adminmenu .wp-has-current-submenu .wp-submenu, #adminmenu .wp-has-current-submenu .wp-submenu.sub-open, #adminmenu .wp-has-current-submenu.opensub .wp-submenu, #adminmenu a.wp-has-current-submenu:focus+.wp-submenu, .no-js li.wp-has-current-submenu:hover .wp-submenu {
		background-color: #071842;
	}
	.wp-core-ui .button-primary.focus, .wp-core-ui .button-primary.hover, .wp-core-ui .button-primary:focus, .wp-core-ui .button-primary:hover {
		background: rgb(5, 1, 30);
		border-color: #5f00f9;
		color: #aa66ff;
	}
	.wrap .add-new-h2, .wrap .add-new-h2:active, .wrap .page-title-action, .wrap .page-title-action:active {
		margin-left: 4px;
		padding: 4px 8px;
		position: relative;
		top: -3px;
		text-decoration: none;
		border: 1px solid #0071a1;
		border-radius: 2px;
		text-shadow: none;
		font-weight: 600;
		font-size: 13px;
		line-height: normal;
		color: #0071a1;
		background: #f3f5f6;
		cursor: pointer;
	}
	.wrap .add-new-h2, .wrap .add-new-h2:active, .wrap .page-title-action, .wrap .page-title-action:active {
		padding: 4px 13px;
		border: 1px solid #5f00f9;
		font-size: 13px;
		color: #fff;
		background: #7400FC;	
	}
	.wrap .add-new-h2:hover, .wrap .page-title-action:hover {
		background: rgb(5, 1, 30);
		border-color: #5f00f9;
		color: #aa66ff;
	}
	.block-editor-writing-flow__click-redirect {
		display: none;
	}
  </style>';
}
function wpb_custom_logo() {
	echo '
	<style type="text/css">
	#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
	background-image: url(https://searchstack.co.uk/wp-content/uploads/2019/11/searchstack-icon.svg) !important;
	background-position: 0 0;
	background-repeat: no-repeat;
	color:rgba(0, 0, 0, 0);
	}
	#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
	background-position: 0 0;
	}
	</style>
	';
	}
	 
	//hook into the administrative header output
	add_action('wp_before_admin_bar_render', 'wpb_custom_logo');
?>