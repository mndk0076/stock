
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="../css/bootstrap-4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/faq.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>
	
  <body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
	  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">STOCK MARKET</a>
	  <input class="form-control form-control-dark w-100 mr-auto" type="text" placeholder="Search" aria-label="Search">

	  <div class="dropdown">
		  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Welcome Back Admin!
		  </button>
		  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" href="#">Username</a>
			<a class="dropdown-item" href="#">Settings</a>
			<a class="dropdown-item" href="#">Signout</a>
		  </div>
	 </div>
 </nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../includes/users.php">
              <span data-feather="file"></span>
              Users
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="..//includes/messages.php">
              <span data-feather="shopping-cart"></span>
              Messages
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../includes/events.php">
              <span data-feather="users"></span>
              Events
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../includes/blog.php">
              <span data-feather="bar-chart-2"></span>
              Blog
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../includes/faq.php">
              <span data-feather="layers"></span>
              FAQ
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

      <h2>FAQ</h2>
      
      <form action="faq.php" method="post">
      <div id="questionDiv">
        <div id="quesTitle" class="faqInfo">
            <label for="questiontitle">Subject:</label>
            <select name="questiontitle" id="questiontitle">
            <option value="default">Choose a Subject!</option>
            <option value="portfolio">Portfolio</option>
            <option value="stock">Stock</option>
            <option value="general">General</option>
            </select>
            <span id="titleErr"></span> 
        </div>

        <div id="quesDescription" class="faqInfo">
            <label for="questiondescription">Your Question:</label>
            <input type="textarea" name="questiondescription" id="questiondescription">
            <span id="descErr"></span> 
        </div>
            <input type="submit" value="submit" id="submit">
      </div>
        </form>
        <!--Space for List, Edit, Delete-->
	 <!--<form class="border border-light p-5">

		<p class="h4 mb-4 text-center">Sign in</p>

		<input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

		<input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

		<div class="d-flex justify-content-between">
			<div>
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
					<label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
				</div>
			</div>
			<div>
				<a href="">Forgot password?</a>
			</div>
		</div>

		<button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

		<div class="text-center">
			<p>Not a member?
				<a href="">Register</a>
			</p>

			<p>or sign in with:</p>
			<a type="button" class="light-blue-text mx-2">
				<i class="fab fa-facebook-f"></i>
			</a>
			<a type="button" class="light-blue-text mx-2">
				<i class="fab fa-twitter"></i>
			</a>
			<a type="button" class="light-blue-text mx-2">
				<i class="fab fa-linkedin-in"></i>
			</a>
			<a type="button" class="light-blue-text mx-2">
				<i class="fab fa-github"></i>
			</a>
		</div>
	</form>-->
    
    </main>
  </div>
</div>
<script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	</body>
</html>