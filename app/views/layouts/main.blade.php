<!DOCTYPE html>
<html>
  <head>
    <title>Ribbit - A Treehouse Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }} />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <header class="page-header" >
        <ul class="nav nav-pills pull-right" >
          <li class="active" ><a href="#">Home</a></li>
          <li><a href="#">About Ribbit</a></li>
          <li><a href="#">Treehouse</a></li>
        </ul>
        <h3>Ribbit</h3>
      </header>
      
        <div class="jumbotron">
        <h1>Self-destructing message app</h1>
        <p class="lead">Learn how to build this fun little app by signing up for a Treehouse account today! We'll teach you how to build both apps from scratch!</p>
        <p class="btn-group">
          <a class="btn btn-success btn-lg" href="#">Download the app</a>
          <a class="btn btn-default btn-lg" href="#" >Text me the link</a>
        </p> 
      </div>

       <div class="row">
           <div class="col-sm-4">
          <h2>Delete photo &amp; video based on a timer</h2>
          <p>Learn how to write the code that downloads and displays messages, photos, and videos that timeout after a few seconds. Then create the code that deletes them from the back-end to make them "self destruct."</p>
        </div>

        <div class="col-sm-4">
          <h2>Build an easily managed friends list</h2>
          <p>Learn what Parse.com offers as a "backend-as-a-service" platform. Explore the user account management APIs provided by Parse.com and write the code to create and save a new user in a Parse.com data store.</p>
       </div>

        <div class="col-sm-4">
          <h2>Store &amp; retrieve data using cloud servers</h2>
          <p>We'll teach you how to upload images, video files, and messages to Parse.com's cloud servers. Then learn how to retrieve the data by setting up custom queries that download and display them in the app.</p>
        </div>
      </div>

      <hr>
      <div>
        <p>&copy; 2013 Ribbit - By Treehouse Island, Inc.</p>
      </div>
    </div>
  </body>
</html>