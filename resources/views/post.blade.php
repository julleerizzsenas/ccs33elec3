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
                <div class="card-header">
                  <h3 class="h4"><b>PHP Intro</b> <small> by Jane Doe</small> <small class= pull-right><i>January 21, 2018</i>&nbsp; &nbsp; <i class="fa fa-comments-o">&nbsp;7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></small></h3>
                  <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a><a href="#" class="dropdown-item trash"> <i class="fa fa-trash"></i>Delete</a></div>
                      </div>
                    </div>
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
                        <p>PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language. Originally created by Rasmus Lerdorf in 1994, the PHP reference implementation is now produced by The PHP Group. PHP originally stood for Personal Home Page, but it now stands for the recursive backronym PHP: Hypertext Preprocessor <br/><br/>

                        PHP code may be embedded into HTML code, or it can be used in combination with various web template systems, web content management systems, and web frameworks. PHP code is usually processed by a PHP interpreter implemented as a module in the web server or as a Common Gateway Interace (CGI) executable. The web server combines the results of the interpreted and executed PHP code, which may be any type of data, including images, with the generated web page. PHP code may also be executed with a command-line interface (CLI) and can be used to implement standalone graphical applications.</p> 
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