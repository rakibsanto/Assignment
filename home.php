<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body { padding: 0; margin: 0; }
		.lightblue { 
			background-color: #cde2df; 
			}
		.left { 
			background-color: #acfff6;
			height: 400px;
			margin: 5px; 
			text-align: center;
			font-family: Snell Roundhand, cursive;
			
			}
		.right { 
			background-image: url(abc.jpg);
			height: 400px;
			margin: 5px;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover
			}
		.rakib { 
			background-color: #8c0404;
			height: 30px;  
			}
		.row { 
			width: 100%;
			}
		
		.col-md-1 { width: 8.333333333%; }
		.col-md-2 { width: 16.66666667%; }
		.col-md-3 { width: 25%; }
		.col-md-4 { width: 32%; }
		.col-md-5 { width: 41.66666667%; }
		.col-md-6 { width: 49%; }
		.col-md-7 { width: 58.33333333%; }
		.col-md-8 { width: 65.9%; }
		.col-md-9 { width: 75%; }
		.col-md-10 { width: 83.33333333%; }
		.col-md-11 { width: 98.5%; }
		.col-md-12 { width: 100%; }
		
		.col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
			float: left;
		}
		
		@media screen and (max-width: 640px)
		{
			.col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
				width: 100%;
			}
		}
		
		.menu ul{
			list-style: none;
			padding: 0px;
			margin: 0px;
		}
		.menu ul li {
			display: block;
			position: relative;
			float: right;
			border: 1px solid #000ff;
		}
		.menu li ul {
			display: none;
		}
		.menu ul li a {
			display: block;
			background: #8c0404;
			padding: 5px 10px 5px 10px;
			text-decoration: none;
			white-space: nowrap;
			color: white;
		}
		.menu ul li a:hover {
			background: #460606;
		}
		.menu li:hover ul {
			display: block;
			position: absolute;
		}
		.menu li:hover a {
			background: #c53535;
		}
		.menu li:hover li a:hover {
			background: #8c0404;
		}
		.menu li ul li {
			border-top: 0px;
			width:100%;
		}
		#logo {
			float: left;
			font-family: Verdana;
			}
		.button {
			background-color: #4CAF50;
			border: none;
			color: white;
			padding: 15px 32px;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
		}
		.button1 {
			background-color: #4CAF50;
			border: none;
			color: white;
			text-decoration: none;
			padding: 15px 15px;
			font-size: 16px;
			margin: 1px 1px;
			cursor: pointer;
		}
		.about {
			height: 300px;
			text-align: center;
			background-image: url(about.jpg);
			background-repeat: repeat-x;
			margin: 5px;
			font-family: Arial;
			
			}
		.boot{
			height: 150px;
			text-align: center;
			background-color: #b3fff3;
			margin: 5px;
		}
		.edu, .ex {
			height: 200px;
			text-align: center;
			background-color: #7dbfb5;
			margin: 5px;
			font-family: sans-serif;
		}
		
		
		.price {
			height: 200px;
			text-align: center;
			background-color: #b3fff3;
			margin: 5px;
		}
		.allright {
			height: 70px;
			text-align: center;
			background-color: #b3fff3;
			margin: 5px;
			
		}
		.about p {
			color: #144a5f;
		}
	</style>
</head>
<body>

	<div class="rakib">
		<div class="menu">
		<ul>
			<li><a href="#">BACK TO HOME</a></li>
			<li><a href="#">ABOUT</a>
				<ul>
					<li><a href="facebook.com">ABOUT US</a></li>
					<li><a href="facebook.com">MISSION & VISION</a></li>
					<li><a href="facebook.com">CAREER</a></li>
				</ul>
			</li>
			<li><a href="#">HOME</a></li>
		</ul>
		<div id="logo">
			<ul><li><a href="#">RAKIB SANTO</a></li></ul>
		</div>
	</div><br/>
	</div>
	
	<div class="col-md-12 lightblue">
		<div class="row">
			
				<div class="col-md-4 left">
					<h2>MD. RAKIBUL ISLAM</h2>
					<button class="button">DOWNLOAD CV</button>
					<button class="button">CONTACT ME</button>
				</div>
				
				<div class="col-md-8 right">
				</div>
		</div>
		<!-- ABOUT Table-->
		<div class="about col-md-11">
			<h2><u>ABOUT ME</u></h2>
			<p>
			My name is Md. Rakibil Islam. <br/>
			I studies in Bangladesh University at Computer Science & Engineering.</br>
			I want to be a Web Developer, So that i came here to learn. <br/></p>
			<p>
			Age:23<br/>
			Residence:Bangladesh<br/>
			Address:Dhaka<br/>
			</p>
		</div>
		
		<!--BootStrap Table-->
		<div class="boot col-md-11">
			<h2>BootStrap HTML Template</h2>
		</div>
		
		<!--EduEX Table-->
		<div class="eduex">
			
				<div class="col-md-6 edu">
					<h2>EDUCATION</h2>
					<p>2014 Secondary School Certificate (S.S.C)</p>
					<p>2016 Higher Secondary Certificate (H.S.C)</p>
					<p>2017-2021 Bachelor of Science (BS.c</p>
				</div>
				
				<div class="col-md-6 ex">
					<h2>EXPERIANCE</h2>
					<p>Not Yeat.</p>
				</div>
		</div>
		
		<!-- Pricing-->
		<div class="price col-md-11">
			<h2>PRICING</h2>
			<div class="col-md-4"><p>PHONE</p>
				<button class="button1">$100</button>
			</div>
			<div class="col-md-4"><p>LAPTOP</p>
				<button class="button1" href="#">$100</button>
			</div>
			<div class="col-md-4"><p>NOTE BOOK</p>
				<button class="button1">$100</button>
			</div>
		</div>
		<!-- All Right Resourved-->
		<div class="allright col-md-11">
			<h3>All Right Resourved</h3>
		
		</div>
	</div>
	
</body>
</html>