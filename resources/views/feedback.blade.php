<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/feedback2.css') }}">
    <script  src="{{asset('js/trending.js')}}" >  </script>
    <link rel="icon" href="vvv.ico">
    <title>FeedbacK</title>
</head>
<body>
    <div id="error"></div>
    <form name="Feedback">
        <h1> Feedback</h1>
        </div>
        <div class="choice">
            Would you like to visit us again ?  <br>
            <input type="radio" value="Yes"> Yes 
            <input type="radio" value="No" > No  
        </div>
        <div class="main-box">

            <div class="user-info">
                <!--<label>Full name</label>-->
                <input class="user_input" type="text" name="username" placeholder="enter your name" required>
            </div>

            <div class="user-info">
                <!--<label>E-mail</label>-->
                <input class="user_input" type="email" name="username" placeholder="Example@gmail.com"required>
            </div>

            <div class="user-info">
                <!--<label>Phone Number</label>-->
                <input class="user_input" type="number" name="value" placeholder="enter your phone number" maxlength="11"required>
            </div>

            <div class="user-info">
                <!--<label>The Feedback</label>-->
                <br>
                <textarea class="user_input" placeholder="Message"></textarea>
            </div>

            <div class="user-info">
                <!--<label> choice </label>-->
                <input class="user_input" type="number" name="value" placeholder="Please rate our site from 1 to 10" maxlength="11">
            </div>

            <div class="submit">
                 <input type="submit" value="Send  Feedback">
            </div>
            

        </div>

    </form>
</body>
</html>