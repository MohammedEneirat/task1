@extends('Procting.nav')

@section('category')
  @yield('side')
<div class="container-fluid mt-5">
    <div class="row outer_categ">
      <!-- col-3 its putting until making sidebar   12/3 = 4 number of categ in one row-->
        <div class="card col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-12 main_card" id="click">
          <!-- header of card-->
          <div class="card-header ">
            <div class="d-flex justify-content-between">
              <span class="card-title h5">Cardiology</span>
              <button value="live" class="btn btn-danger btn-sm live_butt badge"><span class="badge">&#8226; live </span></button>
            </div>
            <span class="small">Group:<b> Year1 | Group 6</b></span>
            <br>
            <span class="small">Date & time: <b>05/1/2024 | 08:00 JST</b></span>
          </div>
          <!-- body of card-->
          <div class="card-body">
            <div class="row">
              <div class="col-6 text-center">
                <!-- data about Students-->
                <span class="h6">Students</span>
                <br>
                <span>
                  <span class="student_text h5">109</span>
                  <span class="h5">/116</span>
                </span>
                <br>
                <span class="h6">Active</span>
                <br>
                <!-- data of cheating analysis-->
                <span class="small">Cheating Analysis</span>
                <span>
                  <br>
                  <span class="student_text text-danger h5">15</span>
                  <span class="h5">/109</span>
                </span>
              </div>
              <!-- draw circle on card-->
              <div class="col-6 text-center">
                <span class="h6">Progress</span>
                <div class="circle mt-2">
                  <div class="inner_circle">
                    <span class="text-dark h4"> 90%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card col-xl-2 col-lg-3 col-md-4 col-sm-6 main_card">
          <!-- header of card-->
          <div class="card-header ">
            <div class="d-flex justify-content-between">
              <span class="card-title h5">Cardiology</span>
              <button value="live" class="btn btn-danger btn-sm live_butt badge"><span class="badge">&#8226; live </span></button>
            </div>
            <span class="small">Group:<b> Year1 | Group 6</b></span>
            <br>
            <span class="small">Date & time: <b>05/1/2024 | 08:00 JST</b></span>
          </div>
          <!-- body of card-->
          <div class="card-body">
            <div class="row">
              <div class="col-6 text-center">
                <!-- data about Students-->
                <span class="h6">Students</span>
                <br>
                <span>
                  <span class="student_text h5">109</span>
                  <span class="h5">/116</span>
                </span>
                <br>
                <span class="h6">Active</span>
                <br>
                <!-- data of cheating analysis-->
                <span class="small">Cheating Analysis</span>
                <span>
                  <br>
                  <span class="student_text text-danger h5">15</span>
                  <span class="h5">/109</span>
                </span>
              </div>
              <!-- draw circle on card-->
              <div class="col-6 text-center">
                <span class="h6">Progress</span>
                <div class="circle mt-2">
                  <div class="inner_circle">
                    <span class="text-dark h4"> 90%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card col-xl-2 col-lg-3 col-md-4 col-sm-6 main_card">
          <!-- header of card-->
          <div class="card-header ">
            <div class="d-flex justify-content-between">
              <span class="card-title h5">Cardiology</span>
              <button value="live" class="btn btn-danger btn-sm live_butt badge"><span class="badge">&#8226; live </span></button>
            </div>
            <span class="small">Group:<b> Year1 | Group 6</b></span>
            <br>
            <span class="small">Date & time: <b>05/1/2024 | 08:00 JST</b></span>
          </div>
          <!-- body of card-->
          <div class="card-body">
            <div class="row">
              <div class="col-6 text-center">
                <!-- data about Students-->
                <span class="h6">Students</span>
                <br>
                <span>
                  <span class="student_text h5">109</span>
                  <span class="h5">/116</span>
                </span>
                <br>
                <span class="h6">Active</span>
                <br>
                <!-- data of cheating analysis-->
                <span class="small">Cheating Analysis</span>
                <span>
                  <br>
                  <span class="student_text text-danger h5">15</span>
                  <span class="h5">/109</span>
                </span>
              </div>
              <!-- draw circle on card-->
              <div class="col-6 text-center">
                <span class="h6">Progress</span>
                <div class="circle mt-2">
                  <div class="inner_circle">
                    <span class="text-dark h4"> 90%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card col-xl-2 col-lg-3 col-md-4 col-sm-6 main_card">
          <!-- header of card-->
          <div class="card-header ">
            <div class="d-flex justify-content-between">
              <span class="card-title h5">Cardiology</span>
              <button value="live" class="btn btn-danger btn-sm live_butt badge"><span class="badge">&#8226; live </span></button>
            </div>
            <span class="small">Group:<b> Year1 | Group 6</b></span>
            <br>
            <span class="small">Date & time: <b>05/1/2024 | 08:00 JST</b></span>
          </div>
          <!-- body of card-->
          <div class="card-body">
            <div class="row">
              <div class="col-6 text-center">
                <!-- data about Students-->
                <span class="h6">Students</span>
                <br>
                <span>
                  <span class="student_text h5">109</span>
                  <span class="h5">/116</span>
                </span>
                <br>
                <span class="h6">Active</span>
                <br>
                <!-- data of cheating analysis-->
                <span class="small">Cheating Analysis</span>
                <span>
                  <br>
                  <span class="student_text text-danger h5">15</span>
                  <span class="h5">/109</span>
                </span>
              </div>
              <!-- draw circle on card-->
              <div class="col-6 text-center">
                <span class="h6">Progress</span>
                <div class="circle mt-2">
                  <div class="inner_circle">
                    <span class="text-dark h4"> 90%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
<script>
  document.getElementById('click').addEventListener('click', function() {
            // Redirect to the desired route
            window.location.href = '{{ route("side") }}';
        });
</script>

@endsection