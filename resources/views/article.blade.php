<!DOCTYPE html>
<html>
<head>
	<title>Article</title>
	<!-- Tailwaind -->
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<!-- Jquery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>
	<!-- Oel Carousel2 -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
</head>
<body>
	<div class="w-auto h-auto flex justify-start bg-green-500">
		<div class="my-3 mx-3 px-2 py-2 border zborder-white hover:border-green-500 rounded hover:bg-white text-white hover:text-green-500">HOME</div>
		<div class="my-3 mx-3 px-2 py-2 border border-white hover:border-green-500 rounded hover:bg-white text-white hover:text-green-500">JOIN US</div>
	</div>
	@foreach($article as $art)	@endforeach
		<div class="w-auto h-auto">
			<div class="owl-carousel">
				<div style="height:800px;width:100%;background-size:cover;background-repeat:no-repeat;background-image:url('https://images.unsplash.com/photo-1433838552652-f9a46b332c40?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80');padding-top:600px;padding-left:75px;color:#fff">
					<h3 class="text-5xl blod"><a href="/article">{{ Str::words($art->title, 2, '') }}</a></h3>
					<h5 class="text-xl semibold"><a href="/article">{{ Str::words($art->article,5,'....') }}</a></h5>
				</div>
				<div style="height:800px;width:100%;background-size:cover;background-repeat:no-repeat;background-image:url('https://images.unsplash.com/photo-1413752362258-7af2a667b590?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=755&q=80');padding-top:600px;padding-left:75px;color:#fff">
					<h3 class="text-5xl blod"><a href="/article" style="margin-bottom:50px;text-decoratoin:none;">{{ Str::words($art->title, 2, '') }}</a></h3>
					<h5 class="text-xl semibold"><a href="/article">{{ Str::words($art->article,5,'....') }}</a></h5>
				</div>
				<div style="height:800px;width:100%;background-size:cover;background-repeat:no-repeat;background-image:url('https://images.unsplash.com/photo-1474880878515-59dcb39da0b6?ixlib=rb-1.2.1&auto=format&fit=crop&w=751&q=80');padding-top:600px;padding-left:75px;color:#fff">
					<h3 class="text-5xl blod"><a href="/article" style="margin-bottom:50px;text-decoratoin:none;">{{ Str::words($art->title, 2, '') }}</a></h3>
					<h5 class="text-xl semibold"><a href="/article">{{ Str::words($art->article,5,'....') }}</a></h5>
				</div>
			</div>
		</div>

	<!-- Script -->
	<script type="text/javascript">
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
					loop:true,
					autoplay:true,
					items:1,
				});
		});
	</script>
</body>
</html>