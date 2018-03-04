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
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-4 col-sm-4">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="fa fa-quora"></i></div>
                    <div class="title"><span>Questions</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="{#val.value}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                      </div>
                    </div>
                    <div class="number"><strong>{{ $totalposts }}</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-4 col-sm-4">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="fa fa-comments-o"></i></div>
                    <div class="title"><span>Comments</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="{#val.value}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                      </div>
                    </div>
                    <div class="number"><strong>{{ $totalcomments }}</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-4 col-sm-4">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="fa fa-tags"></i></div>
                    <div class="title"><span>Tags</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="{#val.value}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number"><strong>{{ $totaltags }}</strong></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
                <!-- Recent Updates-->
                <div class="col-lg-12">
                  <div class="recent-updates card">
                    {{-- <div class="card-close">
                    </div> --}}
                    <div class="card-header">
                      <h3 class="h4">Recent Updates</h3>
                    </div>
                    <div class="card-body no-padding">
                      <!-- Item-->
        
                      @foreach ($posts as $post)

                      <div class="item d-flex justify-content-between">
                        <div class="info d-flex">
                          <div class="nf-icon"><i class="fa fa-sticky-note-o"></i></div>
                          <div class="title">
                            <h5><b><a href="/posts/{{ $post->id }}" class="post">{{ $post->topicname }}</b></a><small><i> &nbsp; by {{ $post->user->name }} </i></small></h5>
                      <p class="rightt"><small><i> Date Published: <i class="green">{{ $post->created_at->toFormattedDateString() }}</i></p></i></small>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;{{ str_limit($post->description, $limit = 300, $end = ' ...') }}
                            <a href="/posts/{{ $post->id }}">
                              <b><i>Read more</i></b>
                            </a>
                          </div>
                        </div>
                      </div>

                      
                    
                     
                      @endforeach
                      {{ $posts->links() }}

              </div>
          </section>

    <div class="clearfix">

          
@include('layouts.index_footer')