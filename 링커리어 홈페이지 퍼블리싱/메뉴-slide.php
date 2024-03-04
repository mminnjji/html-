<html>
<head>
	<title>jQuery Basic</title>

	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script>	//이벤트를 연결합니다.
			
		$(document).ready(function(){
			$('.startimg').css({
				width:'100%',
				height:'80%',
			})
			$('.logo').css({
				width:'300px',
				height:'300px',
				borderRadius:'150px',
				position:'absolute',
				top:'50%',
				left:'50%',
				marginTop:'-150px',
				marginLeft:'-150px'
			})
			$('.startimg').click(function(){
				$(this).fadeOut('slow');
				$('header').fadeIn('slow')
				$('.event-banner').fadeIn('slow')
			});
			$('header').css({
				width:'1600px',
				height:'130px',
				backgroundColor:'beige',
				position:'fixed',
				padding:'0',
				display:'none'
			});
			$('header>img').css({
				width:'90px',
				height:'90px',
				marginTop:'20px',
				marginLeft:'200px',
				display:'inline-block',
				borderRadius:'45px'
			});
			$('a').css('text-decoration','none');
			$('.menu>div').css('display','inline-block');
			$('.uppermenu').css({
				position:'absolute',
				top:'0px',
				right:'300px',
				color:'gray',
				fontSize:'13px'
			})
			$('.uppermenu>p>a').css({
				color:'gray'
			})
			$('.img-search').css({
				width:'30px',
				height:'30px',
				borderRadius:'15px',
				position:'absolute',
				top:'8px',
				right:'-50px'
			})
			$('.menu').css({
				position:'absolute',
				top:'70px',
				left:'600px',
				padding:'0'
			})

			$('.menu-info').css({
				width:'1600px',
                height:'300px'
				display:'none',
				backgroundColor:'black'
			})
			$('.menu>div').css({
				width:'100px',
				height:'50px',
				margin:'0',
				textAlign:'center',
				position:'relative',
				top:'10px'
			}).hover(function(){
			$('.drawer-menu').slideToggle('slow')
		},function(){
			$('.drawer-menu').slideToggle('slow')
		})
		
				$('.event-banner').css({
					width:'100px',
					height:'70px',
					position:'absolute',
					top:'100px',
					right:'100px',
					backgroundColor:'pink',
					display:'none'
				})
				$('.event-info').css({
					width:'900px',
					height:'600px',
					position:'absolute',
					top:'100px',
					right:'350px',
					backgroundColor:'pink',
					display:'none'
				})
				$('.event-banner').hover(function(){
					$(this).fadeOut('slow');
					$('header').fadeOut('slow');
					$('.event-info').fadeIn('slow');
			},function(){
					});
				$('.event-info').click(function(){
					$(this).fadeOut('slow');
					$('header').fadeIn('slow');
					$('.event-banner').fadeIn('slow');
			})
				var count = 0;
				var image = document.getElementById('mainlogo');
				var frames = ['스벅1.png','스벅2.png','스벅3.png'
				];

                setInterval(function(){
                        image.src = frames[count % frames.length];
                        count=count+1;
                },1000/2);
			});	
	</script>
</head>
	<body>
		<div class="startimg"><img class="logo" src="https://search.pstatic.net/common/?src=http%3A%2F%2Fblogfiles.naver.net%2FMjAxODA3MDJfNDEg%2FMDAxNTMwNTM0MzA5MTg3.3RPbNqAIA1RGcllmMgAsZisjy_xR2sa5Ti0x4C3Ly_Ig.Zy5I9jn6NhOvUan7UZzDyQ9nQy7p5u8xwJ_CqPjjEZQg.PNG.gridesign%2Fimage.png&type=sc960_832"></div>
	<header>
		<img id="mainlogo" src="https://search.pstatic.net/common/?src=http%3A%2F%2Fblogfiles.naver.net%2FMjAxODA3MDJfNDEg%2FMDAxNTMwNTM0MzA5MTg3.3RPbNqAIA1RGcllmMgAsZisjy_xR2sa5Ti0x4C3Ly_Ig.Zy5I9jn6NhOvUan7UZzDyQ9nQy7p5u8xwJ_CqPjjEZQg.PNG.gridesign%2Fimage.png&type=sc960_832">
		<div class="uppermenu"> <p><a href="#">Sign in </a>|<a href="#"> Sign in </a>|<a href="#"> Sign in </a>|<a href="#"> Sign in </a></p> <a href="#"><img class="img-search" src="https://search.pstatic.net/sunny/?src=https%3A%2F%2Fmedia.istockphoto.com%2Fvectors%2Fmagnifying-glass-icon-vector-magnifier-or-loupe-sign-vector-icon-vector-id1171358339%3Fk%3D6%26m%3D1171358339%26s%3D170667a%26w%3D0%26h%3DGuYjoQG37l04bHkyA8m_n1x6Mjlq0MjmsBjiqih1u8c%3D&type=sc960_832"></a> </div>
		<div class="menu">	<div>COFFEE</div> <div>COFFEE</div> <div>COFFEE</div> <div>COFFEE</div> <div>COFFEE</div> <div>COFFEE</div> <div>COFFEE</div></div>
		</header>
		<div class="menu-info"></div>
		<div class="event-banner"></div>
		<div class="event-info"></div>
	</body>
</html>