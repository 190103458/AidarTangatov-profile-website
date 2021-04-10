<!DOCTYPE html>
<html>
<head>
	<title></title>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body >
<div style="position: absolute;display: flex;justify-content: space-between; font-family: Bahnschrift;width: 170px; top:22px; left: 50px">
            <button id = "langs" >
                
                <a style=" color: #2D1DA1;text-decoration: none;" href="{{route(Route::currentRouteName(),'en')}}"><b>EN</b></a>
            </button>
            <button id = "langs" >
                
                <a style=" color: #8B051E;text-decoration: none;" href="{{route(Route::currentRouteName(),'ru')}}"><b>RU</b></a>
            </button>
            <button id = "langs" >
                
                <a style=" color: #2DA9C8;text-decoration: none;" href="{{route(Route::currentRouteName(),'kz')}}"><b>KZ</b></a>
            </button>
        </div>
	<div class="head">
		<div style="width: 20%">
			<img width="100%" src="aidar.png">
		</div>
	</div>
    
	<div style="background-color: #D8D8D8">
		<div class="in-head">
			<div style="width: 20%">
				<img width="100%" src="я.jpg">
			</div>

			<div>
				<div class="About">
					<h1 style="margin-left: 20px; font-family: Bahnschrift"> {{ __('About me') }}</h1>
					<p>&#8226; {{ __('Name') }}: {{ __('Aidar Tangatov') }}</p>
					<p>&#8226; {{ __('Birthdate') }}: 22.09.2002</p>
					<p>&#8226; {{ __('Languages') }}: {{ __('kazakh, russian, english(entermediate)') }}</p>
					<p>&#8226; {{ __('Education') }}: {{ __('higher') }}</p>
					<p>&#8226; {{ __('Year of ending') }}: 2023</p>
				</div>
			</div>


		</div>
			


	
</div>
<h1 class="h">{{ __('My works') }}</h1>
<div class="flex2">
	<div class="card cardmax" style="background-color: #25CED4">
		<img src="w1.png" class="card-img-top imgmax">
		<h4 class="card-title textmax">{{ __('Fonts webpage') }}</h4>
		<p class="card-text textmax">{{ __('Page where you can choose a fonts') }}</p>
		<button type="button" class="btn btn-outline-dark buttonmax" onclick="window.location.href='{{route('work1', app()->getLocale())}}'">{{ __('Learn more') }}</button>
	</div>
	<div class="card cardmax" style="background-color: #013F01">
		<img src="w2.png" class="card-img-top imgmax">
		<h4 class="card-title textmax" style="color: white">{{ __('Social webpage') }}</h4>
		<p class="card-text textmax"  style="color: white">{{ __('Page for saving our lands') }}</p>
		<button type="button" class="btn btn-outline-dark buttonmax" onclick="window.location.href='{{route('work2', app()->getLocale())}}'" style="color: white;border-color: white">{{ __('Learn more') }}</button>
	</div>
</div>
	
	<footer style="margin-top: 100px;background-color: #333;padding: 20px;color: white;letter-spacing: 1.2px;font-size: 18px ">
		<div>
			<div style="display: flex;justify-content: center; width: 100%">
				<p style="letter-spacing: 1.2px">{{ __('I am on socnetwork') }}</p>
			</div>
			<div>
				<div style="display: flex;justify-content: center;">
					<a class="ic tele" href="">
						<i></i>
					</a>
					<a class="ic face" href="">
						<i></i>
					</a>
					<a class="ic ins" href="">
						<i></i>
					</a>
					<a class="ic vk" href="">
						<i></i>
					</a>
				</div>
			</div>

			<div style="display: flex;justify-content: center;padding: 5px">
				 <p style="letter-spacing: 1.2px">&copy 2002-2020 &nbsp</p><span style="color: #D685F0">{{ __('Aidar Tangatov') }}</span>
			</div>
			<div style="display: flex;justify-content: center;">
				<div><p style="color: #5EA9F6">190103458@stu.sdu.edu.kz,</p></div>
				&nbsp
				<div><p  style="color: #5EA9F6; width: 160px">8 708 147 46 73</p></div>
				
			</div>
		</div>
	</footer>

</body>
</html>
