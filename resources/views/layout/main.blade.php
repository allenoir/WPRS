<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
//post card styles

.card{
  border: none;
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
 overflow:hidden;
 border-radius:20px;
 min-height:450px;
   box-shadow: 0 0 12px 0 rgba(0,0,0,0.2);

 @media (max-width: 768px) {
  min-height:350px;
}

@media (max-width: 420px) {
  min-height:300px;
}

 &.card-has-bg{
 transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
  background-size:120%;
  background-repeat:no-repeat;
  background-position: center center;
  &:before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: inherit;
    -webkit-filter: grayscale(1);
  -moz-filter: grayscale(100%);
  -ms-filter: grayscale(100%);
  -o-filter: grayscale(100%);
  filter: grayscale(100%);}

  &:hover {
    transform: scale(0.98);
     box-shadow: 0 0 5px -2px rgba(0,0,0,0.3);
    background-size:130%;
     transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);

    .card-img-overlay {
      transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
      background: rgb(255,186,33);
     background: linear-gradient(0deg, rgba(255,186,33,0.5) 0%, rgba(255,186,33,1) 100%);
     }
  }
}
 .card-footer{
  background: none;
   border-top: none;
    .media{
     img{
       border:solid 3px rgba(255,255,255,0.3);
     }
   }
 }
  .card-title{font-weight:800}
 .card-meta{color:rgba(0,0,0,0.3);
  text-transform:uppercase;
   font-weight:500;
   letter-spacing:2px;}
 .card-body{ 
   transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
 

  }
 &:hover {
   .card-body{
     margin-top:30px;
     transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
   }
 cursor: pointer;
 transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
}
 .card-img-overlay {
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
 background: rgb(255,186,33);
background: linear-gradient(0deg, rgba(255,186,33,0.3785889355742297) 0%, rgba(255,186,33,1) 100%);
}
}
@media (max-width: 767px){
  
}
    </style>

    <title>ANANDARA</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
          <a href="/" class="navbar-brand"><img src="img/logo.png" class="nav-iconn" height="30"></a>

          <a class="navbar-brand" href="">ANANDARA</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item {{ ($title === "Home") ? 'active':'' }}">
                <a class="nav-link {{ ($title === "Home") ? 'active':'' }}" href="/">Home</a>
              </li>
              <li class="nav-item{{ ($title === "Destinasi") ? 'active':'' }}">
                <a class="nav-link {{ ($title === "Destinasi") ? 'active':'' }}" href="/destinasi">Destinasi</a>
              </li>
              <li class="nav-item{{ ($title === "category") ? 'active':'' }}">
                <a class="nav-link {{ ($title === "category") ? 'active':'' }}" href="/category">Kategori</a>
              </li>
             <li class="nav-item{{ ($title === "Blog") ? 'active':'' }}">
                <a class="nav-link {{ ($title === "Blog") ? 'active':'' }}" href="/blog">Blog</a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="container mt-4">
          @yield('isi')
        </div>
    
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>