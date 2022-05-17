<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> trending now</title>
        <link rel="stylesheet" href="{{ asset('css/trending.css') }}">
        <link rel="icon" href="vvv.ico"/>
    </head>
        <div class="heading">
        <h1>Trending Movies</h1>
         </div>
        
        <div class="vid">
            Spider Man No-Way Home Trailer
            <video src="{{asset('img/trendingImages/Spider Man No-Way Home.mp4')}}"  poster="spiderman.jpg" controls="controls" loop = "loop" autoplay = "autoplay" width="600" height="500"></video>
        </div>
        <div class="movie-background">
            <div class="movie-box">
                <div class="movie-img"><img src="{{asset('img/trendingImages/d2.webp')}}" height = 420 px/></div>
                <div class="movie-info"> 1..          <b>  Spider Man</b></div>
            </div>
            
            <div class="movie-box">
                  
                <div class="movie-img"><img src="{{asset('img/trendingImages/d1.jpg')}}" height = 420 px/></div>
                <div class="movie-info">2..         <b> Batman   </b>          </div>
            </div>
            
            <div class="movie-box">
                  
                <div class="movie-img"><img src="{{asset('img/trendingImages/d4.jfif')}}" height = 420 px/></div>
                <div class="movie-info">3..   <b>The Northman </b>     </div>
            </div>
            
            <div class="movie-box">
                  
                <div class="movie-img"><img src="{{asset('img/trendingImages/d12.jpg')}}" height = 420 px/></div>
                <div class="movie-info">4..         <b>The Adam Project</b> </div>
            </div>
           
            <div class="movie-box">
                  
                <div class="movie-img"><img src="{{asset('img/trendingImages/d7.jfif')}}" height = 420 px/></div>
                <div class="movie-info"> 5..  <b>Uncharted </b></div>
            </div>
          
            <div class="movie-box">
                
                <div class="movie-img"><img src="{{asset('img/trendingImages/d3.jpg')}}" height = 420 px/></div>
                <div class="movie-info">6..       <b>  Ambulance</b> </div>
            </div>
                    
        </div>

        
    

    </body>
</html>