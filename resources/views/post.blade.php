@include('layouts.header')
<body>
  <div class="page home-page">
    <!-- Main Navbar-->
    @include('layouts.top_nav')
    <div class="page-content d-flex align-items-stretch">
      @include('layouts.sidebar')  
      <div class="content-inner">
        <!-- Page Header-->
        <header class="page-header">
          <div class="container-fluid">
            <h2 class="no-margin-bottom">Home</h2>
          </div>
        </header>
        <section class="dashboard-counts no-padding-bottom">
          <div class="container-fluid">
            <!-- Recent Updates-->
            <div class="col-lg-12">
              <div class="recent-updates card">
                <div class="card-close">
                </div>
                <div class="card-header">
                  <h3 class="h4"><b>{{ $post->topicname }}</b> <small> by {{ $post->user->firstname." ".$post->user->lastname }}</small> <small class= pull-right><i>{{$post->created_at->diffForHumans()}} </i>&nbsp; &nbsp; <i class="fa fa-comments-o">&nbsp;7</i></small></h3>

                </div>
                <div class="card-body no-padding">
                  <!-- Item-->
                  <div class="item d-flex justify-content-between">
                    <div class="info d-flex">
                      {{-- <div class="icon"><i class="fa fa-paperclip"></i></div> --}}
                      {{-- <div class="title">
                        <h5><b>PHP Intro</b></h5>
                      </div> --}}
                      <div class="col-11 content">
                        <p> {{$post->description}} </p> 
                        <hr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          
                        <i class="fa fa-tag"> Kapoy</i><br/><br/>

                        <form>
                          {{csrf_field()}}
                          <div class="form-group col-md-12 col-xs-12">
                            <textarea type="text" name="reply" placeholder="Add commment here." class="form-control" required></textarea>
                          </div>
                          <div class="form-group col-md-1 col-xs-1 pull-right ">
                            <button type="submit" class="btn btn-primary">Comment</button>
                          </div>
                        </form>
                        

                      </div> 
                      
                    </div>
                  </div>
                  
                  <div class="row pull-right">
                    <h4><u><a href="/index"><i class="fa fa-long-arrow-left">&nbsp;</i>Return to Dashboard</a></u></h4>
                  </div>

                </div>
              </div>


            </section>



            @include('layouts.index_footer')