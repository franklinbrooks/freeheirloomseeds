@include('head')
<body>
  @include('header')


   <div class="seedy">
  <div class="container">

<!-- card -->
<div class="row">
      <div class="col s12">
        <div class="card-panel ">



    <h2>Donate</h2>
    <hr />
    <p class="flow-text">Please help us continue to ensure that heirloom seeds will be available to future generations.  Your generous donation helps us continue our distribution, advocacy, and outreach.</p>
    <br />

    <div class="row center">
      <div class="col s8 offset-s2 center">
        <div class="card-panel green darken-4 center">
          <h5 class="white-text">Donate via Paypal:
          </h5>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="YNZK5MSG4LACN">
              <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
          </form>
        </div>
      </div>
    </div>

    <br />
    <br />
    <br />
    <br />
  </div>

    <!-- card -->
        </div>
      </div>
    </div>


    @include('footer')
</body>
