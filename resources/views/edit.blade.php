@include('head')
<body class="main">
  @include('header')
  <div class="seedy">
    <div class="container">

      <!-- card -->
      <div class="row" id="noBottom">
        <div class="col s12">
          <div class="card-panel ">

            <h2 class="hide-on-small-only">Seed Edit Form</h2>
            <h2 class="center hide-on-med-and-up">Seed Edit Form</h2>
            <hr />
            <div class="container ">
              <form action="">
                <label for="">Name: </label>
                <input type="text">
                <br />
                <label for="">Latin name: </label>
                <input type="text">
                <br />
                <label for="">Type: </label>
                <input type="text">
                <br />
                <label for="">Photo URL: </label>
                <input type="text">
                <br />
                <label for="">Description</label>
                <input type="text">
                <br />
                <label for="">Days to harvest:</label>
                <input type="text">
                <br />
                <label for="">Instructions: </label>
                <input type="text">
                <br />
                <label for="">Pests and Diseases: </label>
                <input type="text">
                <br />
                <label for="">Seed saving tips: </label>
                <input type="text">
                <br />
                <label for="">Seed source: </label>
                <input type="text">
                <button>SAVE</button>
                <a href=" {{ url('/dashboard') }} "><div class="add">CANCEL</div></a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('footer')
</body>
