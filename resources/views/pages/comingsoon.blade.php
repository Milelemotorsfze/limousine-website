<!DOCTYPE html>
<html>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bgimg {
  background-image: url('/uploads/Sliders/GMC - Slider.jpg');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}

.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

hr {
  margin: auto;
  width: 40%;
}
</style>
<body>

<div class="bgimg">
  <div class="topleft">
  <img src="{{asset('/uploads/Logo/Milele Limousine - Web 1.png')}}" class="logo-image" style="max-width: 250px !important;" alt="limousine-logo" ></a>
  </div>
  <div class="middle">
  <h1 style="color:#cc6119;">MILELE LIMOUSINE</h1>
  <hr>
    <h2>WE ARE COMING SOON !!</h2>
    
  </div>
  <div class="bottomleft">
    <p>We are the most popular limousine service in United Arab Emirates.</p>
  </div>
</div>

</body>
</html>
