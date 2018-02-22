<!DOCTYPE html>
<html>
    <?php include 'head.php';?>
    <head>
        <title>Home</title>
    </head>
<body>
    <?php include 'rollins_header.php';?>
    
    <div id="body_content" class="container-fluid">
        <div class="row">
          <div class="col-2" id="sidebar_section">
            <nav class = "d-none d-md-block sidebar">
                <div class="sidebar-sticky">
                    <ul class = "nav flex-column">
                        <li class = "nav-item active"><a class = "nav-link" href="#">Home</a></li>
                        <li class = "nav-item"><a class = "nav-link" href="browse.php">Browse</a></li>
                        <li class = "nav-item"><a class = "nav-link" href="#">Search</a></li>
                        <li class = "nav-item"><a class = "nav-link" href="#">Contact</a></li>
                    </ul>
                </div>
            </nav>
          </div>
          <div class="col" id="content_section">
              <p>Fusce vehicula, odio interdum viverra fringilla, dui lectus congue ante, finibus imperdiet leo est in quam. Nullam eu sapien gravid,  convallis purus vel, rutrum orci. Sed sapien urna, maximus non augue et, pulvinar condimentum nibh. Aliquam facilisis faucibus lacinia. Donec lectus nulla, tempus vitae faucibus eu, fermentum ut dui. Nunc ac ante pharetra dui viverra imperdiet vel eget mauris. Nullam fermentum ligula felis, tincidunt vestibulum velit sollicitudin eu. Donec tempor suscipit erat non gravida.</p>
          </div>
        </div>
    </div>

</body>
<?php include 'footer.php';?>
</html>