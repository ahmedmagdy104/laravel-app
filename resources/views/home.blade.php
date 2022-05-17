@extends('layouts.app')
@section('content')

     <div class="slider">
        <div class="container">
        <div class="heading">
            <h3><b>what's new</b> in this season </h3>
        </div>
        <div class="slide-container">
                <div class="new-movies mySlide">
                    <img src="{{asset('img/anne-with-an-e-poster.jpg')}}" width="580px" height="310px">
                    <div class="New-content">
                        <h2>Anne with an E</h2>
                        <p>a Canadian episodic television series adapted from Lucy Maud Montgomery's 1908 classic work of children's literature, Anne of Green Gables.The adventures of a young orphan girl living in the late 19th century. Follow Anne as she learns to navigate her new life on Prince Edward Island, in this new take on L.M. Montgomery's classic novels.</p>
                    </div>
                </div>
            
            <div class="new-movies mySlide">
                    <img src="{{asset('img/joker2.jpg')}}" width="580px" height="310px">
                    <div class="New-content">
                        <h2>joker</h2>
                        <p>In Gotham City, mentally troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime. This path brings him face-to-face with his alter-ego: the Joker.</p>
                    </div>
                </div>
            <div class="new-movies mySlide">
                    <img src="{{asset('img/harrypotter.jpg')}}" width="580px" height="310px">
                    <div class="New-content">
                        <h2>Harry Potter</h2>
                        <p>Harry Potter finds himself competing in a hazardous tournament between rival schools of magic, but he is distracted by recurring nightmares.Hogwarts, Beauxbatons, and Durmstrang.</p>
                    </div>
                </div>
            <div class="new-movies mySlide">
                    <img src="{{asset('img/lacasa.jpg')}}" width="580px" height="310px">
                    <div class="New-content">
                        <h2>La casa de papel</h2>
                        <p>An unusual group of robbers attempt to carry out the most perfect robbery in Spanish history - stealing 2.4 billion euros from the Royal Mint of Spain.</p>
                    </div>
                </div>
            <div class="new-movies mySlide">
                    <img src="{{asset('img/the-good-doctor.jpg')}}" width="580px" height="310px">
                    <div class="New-content">
                        <h2>The good doctor</h2>
                        <p>Shaun Murphy, a young surgeon with autism and savant syndrome, relocates from a quiet country life to join a prestigious hospital surgical unit. Alone in the world and unable to personally connect with those around him,</p>
                    </div>
                </div>
        </div>
        </div>
        </div>
    
    <div class="trendy">
    <div class="container">
        <h2><a href="../trending/Trending%20Now.html">Trending now</a></h2>
        <video height="320" width="600" autoplay muted controls loop>
            <source src="{{asset('img/Spider%20Man%20No-Way%20Home.mp4')}}" type="video/mp4">
        </video>
        <div class="content">
        <a href="#" class="name">Spider Man :NoWayHome</a>
        <p>The grave course of events set in motion by Thanos that<br> wiped out half the universe and fractured the Avengers<br> Peter Parker seeks Doctor Strange's help to make people <br> forget about Spiderman's identity</p>
        <div class="info">
        <a class="movie-category" href="#">Fiction</a><a class="movie-category" href="#">Drama</a><br>   
            <span class="rate" style="color: white"><i class="fa fa-star" aria-hidden="true" style="padding-top: 6"></i> 8.5/10</span>
        </div>
    </div>
    </div>
    </div>
    
    
     <!--start section 1-->
    <div class="section">
    <div class="container">
            <div class="heading-movies">
                <h2><i class="fas fa-film" aria-hidden="true"> Mov<span style="color:darkred; font-family:cursive; font-size: 60">i</span>es</i></h2>
                <button id="action" class="first-btn">Action</button>
                <button id="fiction">Fiction</button>
                <button id="drama">Drama</button>
                <button id="comedy">Comedy</button>
            </div>
        <!--start action movie-->
                <div class="action">
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/action/unnamed.jpg')}}" alt="see" width="200" height="300">
                     <a href="#" class="play"><i class="fa fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>Disturbing the peace</h3>
                   <a class="movie-category" href="#">Faction</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fa fa-star" aria-hidden="true"></i> 7.5/10</span>
               </div>
           </div>
                
            <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/bad_boys_for_life_ver2.jpg')}}" width="200" height="300">
                     <a href="#" class="play"><i class="fa fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>Bad Boys for life</h3>
                   <a class="movie-category" href="#">Faction</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fa fa-star" aria-hidden="true"></i> 5.9/10</span>
               </div>
           </div>
                
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/action/MV5BNzM0OGZiZWItYmZiNC00NDgzLTg1MjMtYjM4MWZhOGZhMDUwXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg')}}" alt="underwater" width="200" height="300">
                     <a href="#" class="play"><i class="fa fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>Guns akimbo</h3>
                   <a class="movie-category" href="#">action</a><a class="movie-category" href="#">drama</a><br>
                   <span class="rate"><i class="fa fa-star" aria-hidden="true"></i> 5.9/10</span>
               </div>
           </div>
                
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/bloodshot_ver2.jpg')}}" width="200" height="300">
                     <a href="#" class="play"><i class="fa fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>Bloodshot</h3>
                   <a class="movie-category" href="#">Faction</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fa fa-star" aria-hidden="true"></i> 7.5/10</span>
               </div>
           </div>
                
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/action/MV5BZDY0NDk5Y2YtN2FkNi00OTQ5LTg0YmMtY2QyOTQ3YWJkNWVhXkEyXkFqcGdeQXVyMzQwMTY2Nzk@._V1_.jpg')}}" alt="see" width="200" height="300">
                     <a href="#" class="play"><i class="fa fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>Final Kill</h3>
                   <a class="movie-category" href="#">Faction</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fa fa-star" aria-hidden="true"></i> 7.5/10</span>
               </div>
           </div>
                
            <!--end avtion movie-->
            </div>
        <!--end action movie-->
        
        
        
        <!--start fiction movie-->
            <div class="none-f">
                <div class="fiction">
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/quiet_place_part_ii_ver3.jpg')}}" alt="see" width="200" height="300">
                     <a href="#" class="play"><i class="fa fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>quite place 2</h3>
                   <a class="movie-category" href="#">Faction</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fa fa-star" aria-hidden="true"></i> 7.5/10</span>
               </div>
           </div>
                
            <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/bloodshot_ver2.jpg')}}" width="200" height="300">
                     <a href="#" class="play"><i class="fa fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>Bloodshot</h3>
                   <a class="movie-category" href="#">Faction</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fa fa-star" aria-hidden="true"></i> 5.9/10</span>
               </div>
           </div>
                
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/fiction/unnamed.jpg')}}" alt="underwater" width="200" height="300">
                     <a href="#" class="play"><i class="fa fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>The call of wild</h3>
                   <a class="movie-category" href="#">Ficton</a><a class="movie-category" href="#">drama</a><br>
                   <span class="rate"><i class="fa fa-star" aria-hidden="true"></i> 5.9/10</span>
               </div>
           </div>
                
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/emma_ver2.jpg')}}" width="200" height="300">
                     <a href="#" class="play"><i class="fa fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>Emma</h3>
                   <a class="movie-category" href="#">Faction</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fa fa-star" aria-hidden="true"></i> 7.5/10</span>
               </div>
           </div>
                
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/fiction/n465tg0zcwe41.jpg')}}" src="" alt="see" width="200" height="300">
                     <a href="#" class="play"><i class="fa fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>Dune</h3>
                   <a class="movie-category" href="#">Faction</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fa fa-star" aria-hidden="true"></i> 7.5/10</span>
               </div>
           </div>
                
            </div>
        </div>
        <!--end fiction movie-->
        
        
        
        <!--start drama movie-->
        <div class="none-d">
                <div class="drama">
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/high_note.jpg')}}" alt="see" width="200" height="300">
                     <a href="#" class="play"><i class="fa fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>The high note</h3>
                   <a class="movie-category" href="#">Faction</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fa fa-star" aria-hidden="true"></i> 7.5/10</span>
               </div>
           </div>
                
            <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/drama/unnamed.jpg')}}" width="200" height="300">
                     <a href="#" class="play"><i class="fa fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>Greyhound</h3>
                   <a class="movie-category" href="#">Faction</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fa fa-star" aria-hidden="true"></i> 5.9/10</span>
               </div>
           </div>
                
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/drama/The_Secret_Dare_to_Dream_poster.png')}}" src="" alt="underwater" width="200" height="300">
                     <a href="#" class="play"><i class="fa fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>The secret dare:to dream</h3>
                   <a class="movie-category" href="#">Ficton</a><a class="movie-category" href="#">drama</a><br>
                   <span class="rate"><i class="fa fa-star" aria-hidden="true"></i> 5.9/10</span>
               </div>
           </div>
                
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/drama/MV5BZTczOTM1ZGEtNzkyNS00NGRmLWI3YjEtZmRlOGZmMzgzNzU2XkEyXkFqcGdeQXVyMjMxOTE0ODA@._V1_.jpg')}}" width="200" height="300">
                     <a href="#" class="play"><i class="fa fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>I still believe</h3>
                   <a class="movie-category" href="#">Faction</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fa fa-star" aria-hidden="true"></i> 7.5/10</span>
               </div>
           </div>
                
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/drama/MV5BYjJmOWE3ZTAtOTEzMC00OTEzLWJlMWUtYjA3ZDQwYTE5YmUyXkEyXkFqcGdeQXVyNDg4NjY5OTQ@._V1_.jpg')}}" alt="see" width="200" height="300">
                     <a href="#" class="play"><i class="fa fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>The way back</h3>
                   <a class="movie-category" href="#">Faction</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fa fa-star" aria-hidden="true"></i> 7.5/10</span>
               </div>
           </div>
                
            </div>
        </div>
        <!--end drama movie-->
        
        
        
            <!-- start comedy movies-->
            <div class="none-c">
            <div class="comedy">
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/comedy/unnamed.jpg')}}" alt="see" width="200" height="300">
                     <a href="#" class="play"><i class="fa fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>Palm springs</h3>
                   <a class="movie-category" href="#">Faction</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fa fa-star" aria-hidden="true"></i> 7.5/10</span>
               </div>
           </div>
                
            <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/comedy/71wE5IH5S3L._AC_SY679_.jpg')}}" width="200" height="300">
                     <a href="#" class="play"><i class="fa fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>Dolittle</h3>
                   <a class="movie-category" href="#">Faction</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fa fa-star" aria-hidden="true"></i> 5.9/10</span>
               </div>
           </div>
                
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/comedy/art-2835684813-x1200.jpg')}}" alt="underwater" width="200" height="300">
                     <a href="#" class="play"><i class="fa fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>Ps:i still love you</h3>
                   <a class="movie-category" href="#">Ficton</a><a class="movie-category" href="#">drama</a><br>
                   <span class="rate"><i class="fa fa-star" aria-hidden="true"></i> 5.9/10</span>
               </div>
           </div>
                
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/comedy/MV5BNjAyZDRjMjQtODE3MC00ODI2LTgxODktZThjYTgzZDE5NTc4XkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_UY1200_CR90,0,630,1200_AL_.jpg')}}" width="200" height="300">
                     <a href="#" class="play"><i class="fa fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>Like a boss</h3>
                   <a class="movie-category" href="#">Faction</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fa fa-star" aria-hidden="true"></i> 7.5/10</span>
               </div>
           </div>
                
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/comedy/unnamed%20(1).jpg')}}" alt="see" width="200" height="300">
                     <a href="#" class="play"><i class="fa fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>Sonic</h3>
                   <a class="movie-category" href="#">Faction</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fa fa-star" aria-hidden="true"></i> 7.5/10</span>
               </div>
           </div>
            </div>
        </div>
            <!--end comedy movie-->
        
        
    </div>
    </div>
    
    <!--start shows-->
    
    <div class="section-2">
    <div class="container">
            <div class="heading-shows">
                <h2><i class="fas fa-tv" aria-hidden="true"> Sho<span style="color:#B37D00; font-family:cursive; font-size: 60">w</span>s</i></h2>
                <button id="action-show" class="first-btn">Action</button>
                <button id="fiction-show">Fiction</button>
                <button id="drama-show">Drama</button>
                <button id="comedy-show">Comedy</button>
            </div>
        <!--start action show-->
                <div class="action-show">
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/unnamed.jpg')}}" alt="see" width="200" height="300">
                     <a href="#" class="play"><i class="fas fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>La casa de papel</h3>
                   <a class="movie-category" href="#">Action</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fas fa-star" aria-hidden="true"></i> 8.5/10</span>
               </div>
           </div>
                
            <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/action/91ltDJ-yE9L._AC_SL1500_.jpg')}}" width="200" height="300">
                     <a href="#" class="play"><i class="fas fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>The witcher</h3>
                   <a class="movie-category" href="#">Action</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fas fa-star" aria-hidden="true"></i> 8.7/10</span>
               </div>
           </div>
                
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/action/d043675e4e9895de3613733f046e3234.jpg')}}" alt="underwater" width="200" height="300">
                     <a href="#" class="play"><i class="fas fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>Vikings</h3>
                   <a class="movie-category" href="#">action</a><a class="movie-category" href="#">drama</a><br>
                   <span class="rate"><i class="fas fa-star" aria-hidden="true"></i> 7.9/10</span>
               </div>
           </div>
                
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/action/s-l300.jpg')}}" width="200" height="300">
                     <a href="#" class="play"><i class="fas fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>Arrow</h3>
                   <a class="movie-category" href="#">Action</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fas fa-star" aria-hidden="true"></i> 7.6/10</span>
               </div>
           </div>
                
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/MV5BYWI2ZmM5ZTgtOTgxYS00MTQ4LThkMjQtZjBlNGM3NjQ5YTI5XkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg')}}" alt="see" width="200" height="300">
                     <a href="#" class="play"><i class="fas fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>See</h3>
                   <a class="movie-category" href="#">Faction</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fas fa-star" aria-hidden="true"></i> 7.7/10</span>
               </div>
           </div>
                
            <!--end avtion movie-->
            </div>
        <!--end action show-->
        
        
        
        <!--start fiction show-->
            <div class="none-fs">
                <div class="fiction-show">
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/fiction/s-l400.jpg')}}" alt="see" width="200" height="300">
                     <a href="#" class="play"><i class="fas fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>Supernatural</h3>
                   <a class="movie-category" href="#">Faction</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fas fa-star" aria-hidden="true"></i> 8.4/10</span>
               </div>
           </div>
                
            <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/fiction/810qrEg7kKL._AC_SL1500_.jpg')}}" width="200" height="300">
                     <a href="#" class="play"><i class="fas fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>Stranger things</h3>
                   <a class="movie-category" href="#">Faction</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fas fa-star" aria-hidden="true"></i> 8.9/10</span>
               </div>
           </div>
                
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/fiction/1cxevpavvpw21.jpg')}}"  alt="underwater" width="200" height="300">
                     <a href="#" class="play"><i class="fas fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>Lucifer</h3>
                   <a class="movie-category" href="#">Fiction</a><a class="movie-category" href="#">drama</a><br>
                   <span class="rate"><i class="fas fa-star" aria-hidden="true"></i> 8.2/10</span>
               </div>
           </div>
                
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/fiction/MV5BNjZkNzY4M2ItOWY0Ni00Y2ViLWE1NjItOTIyYzZjMzg5M2E1XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg')}}"  width="200" height="300">
                     <a href="#" class="play"><i class="fas fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>Lock & key</h3>
                   <a class="movie-category" href="#">Faction</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fas fa-star" aria-hidden="true"></i> 7.5/10</span>
               </div>
           </div>
                
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/fiction/32e22a600dca7fc0cca977be47f16e0b.jpg')}}" alt="see" width="200" height="300">
                     <a href="#" class="play"><i class="fas fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>Teen Wolf</h3>
                   <a class="movie-category" href="#">Fiction</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fas fa-star" aria-hidden="true"></i> 7.7/10</span>
               </div>
           </div>
                
            </div>
        </div>
        <!--end fiction show-->
        
        
        
        <!--start drama show-->
        <div class="none-ds">
                <div class="drama-show">
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/drama/krvjaf0a3jg41.jpg')}}" alt="see" width="200" height="300">
                     <a href="#" class="play"><i class="fas fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>Westworld</h3>
                   <a class="movie-category" href="#">Drama</a><a class="movie-category" href="#">Fiction</a><br>
                   <span class="rate"><i class="fas fa-star" aria-hidden="true"></i> 8.7/10</span>
               </div>
           </div>
                
            <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/drama/you_ver4.jpg')}}"  width="200" height="300">
                     <a href="#" class="play"><i class="fas fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>You</h3>
                   <a class="movie-category" href="#">Faction</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fas fa-star" aria-hidden="true"></i> 7.7/10</span>
               </div>
           </div>
                
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/drama/51EpjAt9YIL._AC_.jpg')}}"  alt="underwater" width="200" height="300">
                     <a href="#" class="play"><i class="fa fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>Peaky blinders</h3>
                   <a class="movie-category" href="#">Ficton</a><a class="movie-category" href="#">drama</a><br>
                   <span class="rate"><i class="fas fa-star" aria-hidden="true"></i> 8.8/10</span>
               </div>
           </div>
                
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/drama/The-Handmaids-Tale-Poster-buy-original-tv-posters-at-starstills__26619.1504627151.jpg')}}"  width="200" height="300">
                     <a href="#" class="play"><i class="fas fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>The handmaid's tale</h3>
                   <a class="movie-category" href="#">Faction</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fas fa-star" aria-hidden="true"></i> 8.5/10</span>
               </div>
           </div>
                
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/drama/rBVaV1wXSwuAdo3sAALHA-K9hX4796.jpg')}}" alt="see" width="200" height="300">
                     <a href="#" class="play"><i class="fas fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>Suits</h3>
                   <a class="movie-category" href="#">Drama</a><a class="movie-category" href="#">Comedy</a><br>
                   <span class="rate"><i class="fas fa-star" aria-hidden="true"></i> 8.5/10</span>
               </div>
           </div>
                
            </div>
        </div>
        <!--end drama show-->
        
        
        
            <!-- start comedy show-->
            <div class="none-cs">
            <div class="comedy-show">
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/drama/unnamed%20(1).jpg')}}"  alt="see" width="200" height="300">
                     <a href="#" class="play"><i class="fas fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>kidding</h3>
                   <a class="movie-category" href="#">Comedy</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fas fa-star" aria-hidden="true"></i> 7.5/10</span>
               </div>
           </div>
                
            <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/comedy/912-BLuQblL._SL1500_.jpg')}}"  width="200" height="300">
                     <a href="#" class="play"><i class="fas fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>Friends</h3>
                   <a class="movie-category" href="#">Comedy</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fas fa-star" aria-hidden="true"></i> 9.5/10</span>
               </div>
           </div>
                
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/comedy/download.jpg')}}"  alt="underwater" width="200" height="300">
                     <a href="#" class="play"><i class="fas fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>I;m not okay with this</h3>
                   <a class="movie-category" href="#">Comedy</a><a class="movie-category" href="#">drama</a><br>
                   <span class="rate"><i class="fas fa-star" aria-hidden="true"></i> 5.9/10</span>
               </div>
           </div>
                
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/comedy/1_WbUkGv9GRVqIYfbtz5KXOg.jpeg')}}" width="200" height="300">
                     <a href="#" class="play"><i class="fas fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>On my block</h3>
                   <a class="movie-category" href="#">Comedy</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fas fa-star" aria-hidden="true"></i> 7.5/10</span>
               </div>
           </div>
                
                <div class="item">
               <div class="movie-cover">
                     <img src="{{asset('img/comedy/81wl0PL9A-L._SY679_.jpg')}}" alt="see" width="200" height="300">
                     <a href="#" class="play"><i class="fas fa-play" aria-hidden="true"></i></a>
               </div>
               <div class="movie-content">
                   <h3>How i met your mother</h3>
                   <a class="movie-category" href="#">Faction</a><a class="movie-category" href="#">Drama</a><br>
                   <span class="rate"><i class="fas fa-star" aria-hidden="true"></i> 7.5/10</span>
               </div>
           </div>
            </div>
        </div>
            <!--end comedy show-->
        
        
    </div>
    </div>
    
    <div class="soon">
    <div class="container">
        <h2><a href="../coming%20soon/coming_soon.html">Coming soon</a></h2>
        
        <div class="firstSoon">
        <img src="{{asset('img/unnamed%20(2).jfif')}}" width="600">
        <div class="content-2">
        <a href="#" class="name2">Thor 3</a>
        <p>Thor: Love and Thunder is an upcoming American superhero film based on the Marvel Comics character</p>
        <div class="info2">
        <a class="movie-category" href="#">Fiction</a><a class="movie-category" href="#">Drama</a><br>   
            <span class="rate" style="color: white"><i class="fas fa-star" aria-hidden="true" style="padding-top: 6"></i> 8.5/10</span>
        </div>
        </div>
        </div>
        <div class="next">
            <button>Next</button>
        </div>
    </div>
    </div>
    
    <div class="tables">
    <div class="container">
        <h2>Choose the right plan for you</h2>
        <button>Submit</button>
        <table>
            <tr style="color: white">
                <th><i class="fas fa-crown" style="color: darkgoldenrod" ></i> Premium</th>
                <th><i class="fas fa-medal" style="color: darkgoldenrod"></i> Standard</th>
                <th><i class="far fa-grin-stars" style="color: darkgoldenrod"></i> Basic</th>
            </tr>
            <tr style="color: white">
                <th><input type="radio" name="type" value="1"> </th>
                <th><input type="radio" name="type" value="2"> </th>
                <th><input type="radio" name="type" value="3"> </th>
            </tr>
            <tr style="color: firebrick">
                <td>EGP200/Month</td>
                <td>EGP165/Month</td>
                <td>EGP120/Month</td>
            </tr>
            <tr style="color: white">
                <td>Stream in Ultra HD.</td>
                <td>Stream in High Definition.</td>
                <td>Stream in Standard Definition.</td>
            </tr>
            <tr style="color: white; font-weight: bolder">
                <td>Watch on 4 devices at a time.</td>
                <td>Watch on 2 devices at a time.</td>
                <td>Watch on 1 device at a time.</td>
            </tr>
        </table>
    </div>
    </div>

   
