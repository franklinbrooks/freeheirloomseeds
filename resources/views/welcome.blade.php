@include('head')
<body>
  @include('header')
  <main>

  <!--  Jumbotron div -->
      <div id="imageBackground" class="row valign-wrapper">
        <div id="mytextbox" class="col l6 offset-l1 s8 offset-s2">
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
                <p class="promo-caption">1. You Send Us A Self-Addressed Stamped Envelope</p>
                <p class="light center">Simple!</p>
                <br />
              </div>
            </div>
            <div class="col m12 l4">
              <div class="center promo green lighten-5 myCard z-depth-5">
                <i class="material-icons large">local_shipping</i>
                <p class="promo-caption">2. We mail back heirloom seeds to you.
                <br />
                No charge.</p>
                <p class="light center">Free!</p>
                <br />
              </div>
            </div>
            <div class="col m12 l4">
              <div class="center promo green lighten-5 myCard z-depth-5">
                <i class="material-icons large">public</i>
                <p class="promo-caption">3. You plant the seeds and help keep heirloom stocks vital.</p>
                <p class="light center">Wonderful!</p>
                <br />
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>


<!--  Seeds div -->
<div id="seeds" class="row valign-wrapper">
  <div class="seedsText center col l8 offset-l2 s10 offset-s1">
    <h2>
      Get your free heirloom seeds
      <br />
      in time for spring planting!
    </h2>
    <a class="waves-effect waves-light btn green" href="seeds">
      PLACE ORDER
    </a>
    <br />
    <br />
  </div>
</div>

<!--  Instructions div  -->
<div class="instructions valign-wrapper">
  <div class="row">
    <div class="left-align flow-text col s10 offset-s1 l5 offset-l1">
        <h3>How it works:</h3>
        <hr />
        <ul>
          <li>1. print our <a href="FreeHeirloomSeeds.pdf" download="FreeHeirloomSeeds Order Form" id="orderForm" class="red-text"><i id="download" class="material-icons">get_app</i>seed order form (.PDF)</a></li>
        <li>2. include your garden size so we can try to send the right amount of seeds</li>
        <li>3. send the form and a self addressed stamped envelope to: </li>
          <div class="container green darken-3">
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
    <div class="col l6 s12 valign-wrapper"><br />
      <div class="center col s12 "><br />
      <img id="sase" class="col s8 offset-s2 responsive-img center" src="/freeheirloomseeds/public/images/sase.jpg">
      </div>
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
