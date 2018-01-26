@include('head')
<body>
  @include('header')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Contact Us</h3>
        <p>FreeHeirloomSeeds@gmail.com</p>
        <hr />
        <form action=" {{url('contact')}} " method="POST">
          {{ csrf_field() }}

          <div class="form-group">
              <label name="email">Your email</label>
              <input type="text" id="email" name="email" class="form-control"  placeholder="you@youremail.com">
          </div>

          <div class="form-group">
              <label name="subject">Subject</label>
              <input type="text" id="subject" name="subject" class="form-control" placeholder="What's on your mind?">
          </div>

          <div class="form-group">
              <label name="comment">Message</label>
              <textarea id="comment" name="comment" class="form-control" placeholder="Your message here..."></textarea>
          </div>

          <input type="submit" name="submit" value="Send Message">

        </form>

      </div>
    </div>
  </div>
    @include('footer')
</body>
