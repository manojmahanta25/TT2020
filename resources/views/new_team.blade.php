@include('elements.header')
<style type="text/css">
	.flip-card {
  background-color: transparent;
  width: 100%;
  height: 350px;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  color: black;
  background-color: white;
}

/* Style the back side */
.flip-card-back {
  background-color: dodgerblue;
  color: white;
  transform: rotateY(180deg);
  padding-top:80px;
}
</style>
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="heading" style="padding-top:50px;">
            <span>Meet Our</span>
            <h2>Team</h2>
        </div>  


         <div class="col-md-3" style="margin-bottom:15px;">
        	<div class="flip-card">
			  <div class="flip-card-inner">
			    <div class="flip-card-front">
			      <img src="{{ URL::asset('images/team/5.webp') }}" class="nteam_mem">
			    </div>
			    <div class="flip-card-back">
			      <h1>BHASKAR BURAGOHAIN</h1>
			      <p>MOBILE: +91 7662976178</p>
			    </div>
			  </div>
			</div>            
            <h4 style="background:white;color:black;text-align:center;">CORE TEAM MEMBER</h4>
        </div>
         <div class="col-md-3" style="margin-bottom:15px;">
        	<div class="flip-card">
			  <div class="flip-card-inner">
			    <div class="flip-card-front">
			      <img src="{{ URL::asset('images/team/6.webp') }}" class="nteam_mem">
			    </div>
			    <div class="flip-card-back">
			      <h1>DHRUBA BARUAH</h1>
			      <p>MOBILE: +91 7005043776</p>
			    </div>
			  </div>
			</div>            
            <h4 style="background:white;color:black;text-align:center;">CORE TEAM MEMBER</h4>
        </div>
        <div class="col-md-3" style="margin-bottom:15px;">
        	<div class="flip-card">
			  <div class="flip-card-inner">
			    <div class="flip-card-front">
			      <img src="{{ URL::asset('images/team/1.webp') }}" class="nteam_mem">
			    </div>
			    <div class="flip-card-back">
			      <h1>SHAHBAZ AZAD</h1>
			      <p>MOBILE: +91 7002158907</p>
			    </div>
			  </div>
			</div>            
            <h4 style="background:white;color:black;text-align:center;">CORE TEAM MEMBER</h4>
        </div>
         <div class="col-md-3" style="margin-bottom:15px;">
        	<div class="flip-card">
			  <div class="flip-card-inner">
			    <div class="flip-card-front">
			      <img src="{{ URL::asset('images/team/2.webp') }}" class="nteam_mem">
			    </div>
			    <div class="flip-card-back">
			      <h1>GOVIND BANURA</h1>
			      <p>MOBILE: +91 7086581398</p>
			    </div>
			  </div>
			</div>            
            <h4 style="background:white;color:black;text-align:center;">CORE TEAM MEMBER</h4>
        </div>
         <div class="col-md-3" style="margin-bottom:15px;">
        	<div class="flip-card">
			  <div class="flip-card-inner">
			    <div class="flip-card-front">
			      <img src="{{ URL::asset('images/team/3.webp') }}" class="nteam_mem">
			    </div>
			    <div class="flip-card-back">
			      <h1>BIDISHA BARMAN</h1>
			      <p>MOBILE: +91 9365943991</p>
			    </div>
			  </div>
			</div>            
            <h4 style="background:white;color:black;text-align:center;">CORE TEAM MEMBER</h4>
        </div>
         <div class="col-md-3" style="margin-bottom:15px;">
        	<div class="flip-card">
			  <div class="flip-card-inner">
			    <div class="flip-card-front">
			      <img src="{{ URL::asset('images/team/4.webp') }}" class="nteam_mem">
			    </div>
			    <div class="flip-card-back">
			      <h1>PRABAL DUTTA</h1>
			      <p>MOBILE: +91 8399894547</p>
			    </div>
			  </div>
			</div>            
            <h4 style="background:white;color:black;text-align:center;">CORE TEAM MEMBER</h4>
        </div>
         <div class="col-md-3" style="margin-bottom:15px;">
        	<div class="flip-card">
			  <div class="flip-card-inner">
			    <div class="flip-card-front">
			      <img src="{{ URL::asset('images/team/7.webp') }}" class="nteam_mem">
			    </div>
			    <div class="flip-card-back">
			      <h1>JYOTIBON HAZARIKA</h1>
			      <p>MOBILE: +91 9365076487</p>
			    </div>
			  </div>
			</div>            
            <h4 style="background:white;color:black;text-align:center;">CORE TEAM MEMBER</h4>
        </div>
         <div class="col-md-3" style="margin-bottom:15px;">
        	<div class="flip-card">
			  <div class="flip-card-inner">
			    <div class="flip-card-front">
			      <img src="{{ URL::asset('images/team/8.webp') }}" class="nteam_mem">
			    </div>
			    <div class="flip-card-back">
			      <h1>JYOTI PRASAD BORAH</h1>
			      <p>MOBILE: +91 8486621330</p>
			    </div>
			  </div>
			</div>            
            <h4 style="background:white;color:black;text-align:center;">CORE TEAM MEMBER</h4>
        </div>
        <div class="col-md-offset-4 col-md-3" style="margin-bottom:15px;">
        	<div class="flip-card">
			  <div class="flip-card-inner">
			    <div class="flip-card-front">
			      <img src="{{ URL::asset('images/team/9.webp') }}" class="nteam_mem">
			    </div>
			    <div class="flip-card-back">
			      <h1>SURAJ GUPTA</h1>
			      <p>MOBILE: +91 8753989940</p>
			    </div>
			  </div>
			</div>            
            <h4 style="background:white;color:black;text-align:center;">CORE TEAM MEMBER</h4>
        </div>
        <hr style="height: 5px;background-color: black;">
    </div>
</section>
@include('elements.footerwidget')
@include('elements.footer')
