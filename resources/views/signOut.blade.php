<!DOCTYPE html>
<html>
    <head>
        <title>signout feedback</title>
        <link rel="stylesheet" href="{{ asset('css/signOut.css') }}">
    </head>
    
    <body>
        <div class="all">
            <h1>Please Rate Our Website</h1>
            
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
             

                <span onclick="getRates1()" id="s" class="fa fa-star checked"></span>
                <span onclick="getRates2()" id="s" class="fa fa-star checked"></span>
                <span onclick="getRates3()" id="s" class="fa fa-star checked"></span>
                <span onclick="getRates4()" id="s" class="fa fa-star checked"></span>
                <span onclick="getRates5()" id="s" class="fa fa-star checked"></span>
            <br>
            <br>
        <div class="sign1">
            <label>WHAT DIDN'T YOU LIKE ABOUT OUR WEBSITE : </label>
            <br>
            <select class="select">
                <option>bad streaming quality</option>
                <option>wrong subtitles</option>
                <option>the website is difficult</option>
                <option>alot of ads</option>
                <option>few movies </option>
                <option>few series</option>
                <option>improperiate movies</option>
                <option>others</option>
            </select>
            </div>
            <div class="sign1">
            <label>HOW TO IMPROVE OUR WEBSITE</label>
                <br>
            <textarea placeholder="your message"></textarea>
          
            </div>
            <div>
            <a class="finish" href="../home/home.html">FINISH</a>
        </div>
            
        
    </div>
    </body>
    <script src="signout.js"></script>

</html>