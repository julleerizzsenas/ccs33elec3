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
            <h2 class="no-margin-bottom">Add Question</h2>
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
                  <h3 class="h4">Tags</h3>
                </div>
                <div class="card-body no-padding">
                  <!-- Item-->
                  <div class="item d-flex justify-content-between">
                    <div class="info d-flex">
                      <div class="title">
                        <h5>Hello</h5>
                      </div>
                    </div>
                  </div>
                  <!-- Item-->
                  <div class="item d-flex justify-content-between">
                    <div class="info d-flex">
                      <div class="title">
                        <h5>World</h5>
                      </div>
                    </div>
                  </div>
                  <!-- Item        -->
                  <div class="item d-flex justify-content-between">
                    <div class="info d-flex">
                      <div class="title">
                        <h5>I</h5>
                      </div>
                    </div>
                  </div>
                  <!-- Item-->
                  <div class="item d-flex justify-content-between">
                    <div class="info d-flex">
                      <div class="title">
                        <h5>Am</h5>
                      </div>
                    </div>
                  </div>
                  <!-- Item-->
                  <div class="item d-flex justify-content-between">
                    <div class="info d-flex">
                      <div class="title">
                        <h5>Doing</h5>
                      </div>
                    </div>
                  </div>
                  <!-- Item-->
                  <div class="item d-flex justify-content-between">
                    <div class="info d-flex">
                      <div class="title">
                        <h5>The</h5>
                      </div>
                    </div>
                  </div>
                  <!-- Item-->
                  <div class="item d-flex justify-content-between">
                    <div class="info d-flex">
                      <div class="title">
                        <h5>Best</h5>
                      </div>
                    </div>
                  </div>
                  <!-- Item-->
                  <div class="item d-flex justify-content-between">
                    <div class="info d-flex">
                      <div class="title">
                        <h5>I</h5>
                      </div>
                    </div>
                  </div>
                  <!-- Item-->
                  <div class="item d-flex justify-content-between">
                    <div class="info d-flex">
                      <div class="title">
                        <h5>Can</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </section>

              @include('layouts.index_footer')