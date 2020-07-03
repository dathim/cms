<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Моё поморье</title>
	<!-- Scripts  -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="http://scss.test/js/bootstrap.min.js" defer></script>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=3063a09e-66fa-4e1a-b6e5-c291f139a5aa" type="text/javascript"></script>
	<script src="http://scss.test/js/lightbox.js" defer></script>
	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@200;300;400;500&display=swap" rel="stylesheet">
	<!-- Styles -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/app.css" rel="stylesheet">
	<link href="css/lightbox.css" rel="stylesheet">
</head>
<body>

	
<div class="wrap">
  
	<div class="heder ">  <!-- header-mini-->
		<div class="heder__leftimg">
			<div class="heder__logo-block">
			  
					<div class="heder__logo"><img src="{{ asset('gfx/icons/gerb_arhangelskoy_oblasti_2.png') }}"></div>
					<div class="heder__logo-text">
						<h1>МОЙ СЕВЕР</h1>
						<p>ПРОЕКТ ДЛЯ ТЕХ КТО УЧАВСТВУЕТ В РАЗВИТИИ АРХАНГЕЛЬСКОЕ ОБЛАСТИ МЕНЯЕТ ЖИЗНЬ ОБЛАСТИ К ЛУЧШЕМУ</p>
					</div>
				<a href="#">          </a>
			</div>

		</div>
		<div class="heder__content">
			<nav class="navbar navbar-expand-md navbar-light bg-white heder__mainmenu">
				<div class="container">
					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="navbar-collapse collapse justify-content-center" id="navbarSupportedContent" style="">
						<ul class="navbar-nav  heder__ul_items">
							<li class="nav-item   active  ">
								<a class="nav-link" href="/">Главная</a>
							</li>
							
							<li class="nav-item ">
								<a class="nav-link " href="/statistics/">Статистика</a>
							</li>

							<li class="nav-item ">
								<a class="nav-link " href="/budget/">Инициативное бюджетирование</a>
							</li>

							<li class="nav-item ">
								<a class="nav-link " href="/polls/">Опросы</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link " href="https://maps29.ru/map/zhkh/" target="_blank">Аварийные дома</a>
							</li>
							

							<li class="nav-item ">
								<a class="nav-link " href="/auth/">Личный кабинет</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			
		   <div class="header__body">
				<div class="header__page-subject">
					<p>Народный контроль – это информационная система региона,<br> созданная для взаимодействия исполнительных органов государственной власти, органов местного самоуправления муниципальных образований, окружных организаций и управляющих компаний с населением Архангельской области</p>
					<hr>
					<p>Как это работает?</p>
				</div>
				<div class="header__icons">
					<div class="header__icons-reg"><a href="/auth/"><span>Зарегистрируйтесь</span></a></div>
					<div class="header__icons-write"><a href="/personal/"><span>Напишите сообщение</span></a></div>
					<div class="header__icons-voite"><a href="#"><span>Оцените изменения</span></a></div>
				</div>
			</div>
		</div>
	</div>

.heder{
	display: flex;
	flex-direction: row;
	justify-content:space-between;
	height:469px;
	background: url('/gfx/pic/IDbIu-1.jpg')  center no-repeat; 

	.heder__leftimg {
		flex-grow:1;
		
		.heder__logo-block {
			display: flex;
			flex-direction: row;
			margin: 53px 0 0 9%; 
	        position: relative;
		    a{
		    	width: 100%;
			    height: 100%;
			    position: absolute;
			    z-index: 60;
		    }
			.heder__logo {
				margin-top: 7px;
				z-index: 55;
				img {
			    	width: 111px;
				}
			} 

			.heder__logo-text{
				padding:20px 0  0  17px;
				color:#fff;
				z-index: 55;
				h1{
					font-size: 3.7em;
					font-weight: 400;
					line-height: 1em;
					color:#FFF;
					z-index: 55;
				}

				p{
					font-size: 0.83em;
					line-height: 15pt; 
					color:#FFF;
				}
			}
		} 
	}

	.heder__content{
		width:872px;

		.heder__mainmenu{
		    padding:10px;
			background-color: $accent-color !important;
			overflow: hidden;
			z-index:50; 

		    .heder__ul_items li a{
		    	text-transform:uppercase;
		    	font-size: 0.9em;	
		    	color:#fff;		
		    }
		}

			
		.header__body{
			display:flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			height: 415px;
			padding-top: 20px;
			.header__page-subject{
				p{
				    padding: 20px 40px 11px 40px;
				    font-size: 1.1em;
					line-height: 20pt;
					text-align: center;
					color:#FFF;
				}
				h2{
				 	padding: 35px 40px 16px 40px;	
					text-align:center;
					font-size:2em;
					text-transform:uppercase;
					color:#FFF;
				}
				h4{
				 	padding: 10px 10px 10px 10px;	
					text-align:center;
					font-size:1.3em;
					text-transform:uppercase;
					color:#FFF;
				}
			}

			.header__icons{
				display: flex;
				flex-direction: row;
				justify-content: space-evenly;
				padding: 0 10px;

				div {
					height:180px;
				    padding: 0 20px;
				}	

				a{
				
					font-size:1.2em;
				    font-weight: 200;
					display: block; 
					height: 100%;
					padding-top: 10px; 
					color:#FFF;
					text-shadow: 1px 1px 1px black, 0 0 1em #080000;
				}

				.header__icons-reg{
					background: url('/gfx/icons/1(1).png')  center no-repeat;  
					background-size: 48px;
				}

				.header__icons-write{
					background: url('/gfx/icons/2(2).png')   center no-repeat;  
					background-size: 62px;
				}

				.header__icons-voite{
					background: url('/gfx/icons/3(3).png') center no-repeat;  
					background-size: 55px;
				} 
			}	
		}
	}
}


  


// Extra small devices (portrait phones, less than 576px)
@media (max-width: 991.98px) { 
	.heder {
	    height: 58px;
		.heder__leftimg{
			.heder__logo-block{ 				
				justify-content: start;
				margin:10px;
				.heder__logo{
				
					width: 50px;	
					img{
						width: 50px;	
					}
				}
				.heder__logo-text{
			    	padding: 10px!important;
					
					padding: 0 !important; 
					h1{
						font-size: 1.4em !important; 
					    margin: 22px 0 0 10px;
					}
					p{
						display:none;

						font-size: 0.5em !important; 
						line-height: 12pt;
					}
				} 
				a{
				    right: 100px;
				    position: absolute;
				   
				    width: 100%;
				  
				}
			}
		}
		.heder__content{
			width: 1px;
			
			background: none;
			.heder__mainmenu{
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				min-height: 84px;
				
				.container{
					justify-content: end !important;
				  	button{
						position: absolute;
						top: 20px;
						right: 30px;
				  	}
				}
			} 
			.header__body{  
				.header__page-subject{
			    	display:none; 
				}
				.header__icons{
			    	display:none; 
				}
				.heder__mainmenu{
				
					
					ul{
					    margin: 30px 0 0px 0;
					    li{
					    	padding-bottom: 10px;
					    }
					}
				}
			}
		}
	}
}


// Small devices (landscape phones, 576px and up)

@media (max-width: 767.98px) {
	.heder {
		.heder__content{
			.heder__mainmenu{
				ul{
				    margin-top: 60px !important;  
				    li{
				    	padding-bottom: 10px;
				    }
				}
			}
		}
	}
}


// Medium devices (tablets, 768px and up)

@media (min-width: 768px) and (max-width: 991.98px) {
	.heder {
		.heder__leftimg{
			.heder__logo-block{
				justify-content: center;
				.heder__logo-text{
					a{
				    right: 0!important;  
					}
				}
			}
		}

		.heder__content {
			.heder__mainmenu{
			    padding: 70px 0 0 0!important;  
			    justify-content: center;
			    .container {	
					margin:0;
					padding: 0;
					width:100%;
			    }
			}
		}
	}
}

// Large devices (desktops, 992px and up)
@media (min-width: 992px) and (max-width: 1199.98px) {
	.heder {
		.heder__leftimg{
			.heder__logo-block{ 
				margin: 93px 0 0 20px !important; 
				flex-direction: column !important;  
				.heder__logo-text{
					h1{
						font-size: 1.4em !important; 
					}
					p{
						font-size: 0.6em !important; 
					}
				}
			}
		}
	}
} 




// Extra large devices 
@media (min-width: 992px) and (max-width: 1500px) { 
	.heder {
		.heder__leftimg{
			.heder__logo-block{ 
				margin: 73px 0 0 30px !important; 
				flex-direction: column !important;
				.heder__logo-text{
					h1{
						font-size: 2em !important; 
					}
					p{
						font-size: 0.6em !important; 
						max-width: 300px !important;  
					}
				} 
			}
		}
	}
} 

@media (min-width: 1500px) { 
	.heder {
		.heder__leftimg{
			.heder__logo-block{ 
				max-width: 573px; 
			}
		}
		.heder__content{
			
			
			.heder__mainmenu{
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				
				
				.container{
					justify-content: end !important;
				  	button{
						position: absolute;
						top: 20px;
						right: 30px;
				  	}
				}
			} 
			.header__body{  
				
				.heder__mainmenu{
				
					
					ul{
					    margin: 30px 0 0px 0;
					    li{
					    	padding-bottom: 10px;
					    }
					}
				}
			}
		}
	}
}




.header-mini{
    height: 54px !important;
	overflow: hidden;
	.heder__leftimg{
		.heder__logo-block{ 				
			justify-content: start;
			margin: 0 0 0 20px !important;
			.heder__logo{
			
				width: 35px;	
				img{
					width: 35px;
				}
			}
			.heder__logo-text{
		    	padding: 10px!important;
				
				padding: 0 !important; 
				h1{
					font-size: 1.4em !important; 
				    margin: 18px 0 0 10px !important;
				}
				p{
					display:none;

					font-size: 0.5em !important; 
					line-height: 12pt;
				}
			} 
			a{
			    right: 100px;
			    position: absolute;
			   
			    width: 100%;
			  
			}
		}
	}

	hr, .heder__content{
		.header__body{
			display:none;
		}
	}



}