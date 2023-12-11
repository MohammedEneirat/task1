@extends('Procting.categori')

@section('side')
<nav class="col-md-3 d-sm-block sidebar">
    <div class="">
        <ul class="nav flex-column">
            <div class="card insideCard" id="click">
                <!-- header of card-->
                <div class="card-header ">
                  <div class="d-flex justify-content-between">
                    <span class="card-title h5">Cardiology</span>
                    <button value="live" class="btn btn-danger btn-xs live_butt badge"><span class="badge">&#8226; live </span></button>
                  </div>
                  <div class="d-flex justify-content-end mt-2">
                    <button value="live" class="btn btn-info btn-xs live_butt badge"><span class="badge">Go To</span></button>
                  </div>
                  <span class="small">Group:<b> Year1 | Group 6</b></span>
                  <br>
                  <span class="small">Date & time: <b>05/1/2024 | 08:00 JST</b></span>
                </div>
                <!-- body of card-->
                <div class="card-body insideBody">
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
                      <!-- data of cheating analysis-->
                      <br>
                      <span class="small">sort by</span>
                      <br>
                      <button class="btn btn-sm text-sm btn-order badge"><span class="text1">online</span></button>
                      <button class="btn btn-sm text-sm btn-order badge"><span class="text2">offline</span></button>
                      <button class="btn btn-sm text-sm btn-order badge"><span class="text3">cheating</span></button>
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
        </ul>
        <!-- tabel in side-->
        <div>
          <table class="table table-sm">
            <tbody>
              <tr class="ml-2 tr_tabel">
                <td class="">Name Name</td>
                <td class="text_tabel">online</td>
                <td>71%</td>
                <td class="bg-danger text-light text-center">71%</td>
                <td>
                  <i class="fas fa-user"></i>
                </td>
              </tr>
              <tr class="ml-2 tr_tabel">
                <td class="">Name Name</td>
                <td class="text_tabel">online</td>
                <td>71%</td>
                <td class="bg-danger text-light text-center">71%</td>
                <td>
                  <i class="fas fa-user"></i>
                </td>
              </tr>
              <tr class="ml-2 tr_tabel">
                <td class="">Name Name</td>
                <td class="text_tabel">online</td>
                <td>71%</td>
                <td class="bg-danger text-light text-center">71%</td>
                <td>
                  <i class="fas fa-user"></i>
                </td>
              </tr>
            </tbody>
          </table>
          
        </div>
    </div>
</nav>
@endsection
