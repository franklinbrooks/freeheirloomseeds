@include('head')
<body>
  @include('header')
  <main>

  <!--  Jumbotron div -->
      <div id="imageBackground">
        <div id="mytextbox">
          <h5>Distributing FREE Heirloom Seeds to the public.
              <br />
              <br>
              Empowering individuals &amp; communities to be self reliant.
          </h5>
          <br />
          <a class="waves-effect waves-light btn green center" href="about"> LEARN ABOUT US
          </a>
        </div>
      </div>

  <!--  Cards div  -->
      <div class=" green darken-1">
        <div class="container">
          <div class="section">
          <div class="row">
            <div class="col m12 l4">
              <div class="center promo green lighten-5 myCard z-depth-5">
                <i class="material-icons large">mail_outline</i>
                <p class="promo-caption">You Send Us A Self-Addressed Stamped Envelope</p>
                <p class="light center">Simple!</p>
              </div>
            </div>
            <div class="col m12 l4">
              <div class="center promo green lighten-5 myCard z-depth-5">
                <i class="material-icons large">local_shipping</i>
                <p class="promo-caption">We mail back heirloom seeds to you.
                <br />
                No charge.</p>
                <p class="light center">Free!</p>
              </div>
            </div>
            <div class="col m12 l4">
              <div class="center promo green lighten-5 myCard z-depth-5">
                <i class="material-icons large">public</i>
                <p class="promo-caption">You plant the seeds and help keep heirloom stocks vital.</p>
                <p class="light center">Wonderful!</p>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>


<!--  Seeds div -->
<div class="seeds">
  <div class="seedsText center">
    <h2 class="center" style="font-family: Roboto">get your free heirloom seeds<br />in time for spring planting!</h2>
    <a class="waves-effect waves-light btn green" href="seeds">
      PLACE ORDER
    </a>
  </div>
</div>

<!--  Instructions div  -->
<div class="instructions valign-wrapper">
  <div class="row">
    <div class="left-align flow-text col s5 offset-s1">
        <h3>How it works:</h3>
        <hr />
        <ul>
          <li>1. print our <a href="/freeheirloomseeds/seeds">seed order form</a></li>
        <li>2. include your garden size so we can try to send the right amount of seeds</li>
        <li>3. send the form and a self addressed stamped envelope to: </li>
          <div class="container right green darken-3">
            <div class="center" style="color:white">Free Seeds
            <br />
            c/o Stone Spirits
            <br />
            865B - 8th Street
            <br />
            Arcata CA 95521</div>
          </div>
        </li>
      </ul>
    </div>


    <div class="col s6 valign-wrapper">
      <img id="sase" class="col s12 center materialboxed" data-caption="A self-addressed stamped envelope" src="/freeheirloomseeds/public/images/sase.jpg">
    </div>


  </div>
</div>

        <!--  Distributors div  -->
          <div class="center distribution valign-wrapper">
            <div class="container">
              <div class="dist">
                <h4>Prefer to pick up seeds in person?
                  <br />
                  See a list of our distribution sites.
                </h4>
                <div>
                  <a class="waves-effect waves-light btn green" href="distributors">DISTRIBUTORS
                 </a>
               </div>
             </div>
          </div>
        </div>


      </main>
      @include('footer')
    </body>
</html>
