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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-12">
                          <input type="text" placeholder="Title" class="form-control"> <br/><br/>
                          <textarea placeholder="Description" class="form-control"></textarea> <br/>
                          <br/><input type="text" placeholder="Tags" class="form-control"> <br/><br/><br/>
                            <button type="submit" class="btn btn-primary pull-right">Post</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@include('layouts.index_footer')