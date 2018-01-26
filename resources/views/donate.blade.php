@include('head')
<body>
  @include('header')
  <div class="container">
    <h2>Donate</h2>
    <hr />
    <p>Please help us continue to ensure that heirloom seeds will be available to future generations.  Your generous donation helps us continue our distribution, advocacy, and outreach.</p>
    <br />
    <p>Click the link to donate via Paypal:</p>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="hosted_button_id" value="YNZK5MSG4LACN">
      <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
      <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>
    <br />
    <br />
    <br />
    <br />
  </div>
    @include('footer')
</body>
