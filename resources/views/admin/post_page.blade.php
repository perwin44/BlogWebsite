<!DOCTYPE html>
<html>
  <head>

    @include('admin.css')

    <style type="text/css">

    .post_title{
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        padding: 30px;
        color: white;
    }

    .div_center{
        text-align: center;
        padding: 30px;
    }

    label{
        display: inline-block;
        width: 200px;
    }

    </style>

  </head>
  <body>

    @include('admin.header')

    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->

      @include('admin.sidebar')

      <!-- Sidebar Navigation end-->
      <div class="page-content">

        @if(session()->has('message'))

        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
        </div>

        @endif



        <h1 class="post_title">App Post</h1>

        <div>

            <form action="{{url('add_post')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="div_center">

                    <label>Post Title</label>

                    <input type="text" name="title">

                </div>

                <div class="div_center">

                    <label>Post Description</label>

                    <textarea name="description"></textarea>

                </div>

                <div class="div_center" >

                    <label>Add Image</label>

                    <input type="file" name="image"></input>

                </div>

                <div class="div_center">

                    <input type="submit" class="btn btn-primary"></input>

                </div>


            </form>






        </div>


        <footer class="footer">
            <div class="footer__block block no-margin-bottom">
              <div class="container-fluid text-center">
                <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                 <p class="no-margin-bottom">2018 &copy; Your company. Download From <a target="_blank" href="https://templateshub.net">Templates Hub</a>.</p>
              </div>
            </div>
          </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="Admincss/vendor/jquery/jquery.min.js"></script>
    <script src="Admincss/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="Admincss/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="Admincss/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="Admincss/vendor/chart.js/Chart.min.js"></script>
    <script src="Admincss/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="Admincss/js/charts-home.js"></script>
    <script src="Admincss/js/front.js"></script>
  </body>
</html>
