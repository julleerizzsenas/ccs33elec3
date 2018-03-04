@include('layouts.header')

@if (Session::has('message'))
<div class= " {{ Session::get('alert') }} ">
  {{ Session::get('message') }}
</div>
@endif

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
            <form method = "POST" action = "/posts">
              {{csrf_field() }}

            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="line"></div>

                        <div class="form-group row">
                          <div class="col-sm-12">

                          <input type="text" placeholder="Title" class="form-control" id="topicname" name="topicname" required> <br/><br/>

                          <textarea placeholder="Description" class="form-control" id="description" name="description"></textarea> <br/><br/>

                          <input type="text" placeholder="Tags" data-role="tagsinput" id="tags" name="tags" class="tm-input form-control tm-input-info"/>
                          <input type="hidden" name="tagsdata" class="tagsdata"><br/><br/><br/>

                          <button type="submit" class="btn btn-primary pull-right">Post</button>

                          </div>
                        </div>

                </div>
            </div>
        </div>

      <script type="text/javascript">
            $(".tm-input").tagsManager();
            $('.tagsdata').val()=$('#tags').tagsinput('item');

      </script>

      </form>
    </section>


@include('layouts.index_footer')