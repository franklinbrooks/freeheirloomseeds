@include('head')
<body>
  @include('header')
  <div class="seedy">
  <div class="container">

<!-- card -->
<div class="row" id="noBottom">
      <div class="col s12">
        <div class="card-panel ">



      <div class="col-md-12">
        <h3>Contact Us</h3>
        <a href="mailto:FreeHeirloomSeeds@gmail.com?Subject=Free Heirloom Seeds" target="_top">FreeHeirloomSeeds@gmail.com</a>
        <hr />

<div class="container">
    <div class="row">
      <div class="col s12 center">
        <div class="card-panel">

        <form action=" {{url('contact')}} " method="POST">
          {{ csrf_field() }}

          <div class="form-group input-field">
              <label name="email" data-error="wrong" data-success="right">Your email</label>
              <input type="email" id="email" name="email" class="form-control validate"  placeholder="you@youremail.com" required>
          </div>

          <div class="form-group input-field">
              <label name="subject" data-error="wrong" data-success="right">Subject</label>
              <input type="text" id="subject" name="subject" class="form-control" placeholder="What's on your mind?" required>
          </div>

          <div class="form-group input-field">
              <label name="comment" data-error="wrong" data-success="right">Message</label>
              <textarea id="comment" name="comment" class="form-control" placeholder="Your message here..." required></textarea>
          </div>

          <input type="submit" name="submit" value="Send Message">

        </form>

        </div>
      </div>
    </div>
</div>




      </div>
    </div>
  </div>
</div>
</div>
</div>
    @include('footer')
</body>
