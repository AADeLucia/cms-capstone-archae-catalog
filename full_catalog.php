<!DOCTYPE html>
<html>
    <?php include 'head.php';?>
    <head>
        <title>Full Catalog</title>
    </head>
<body>
    <?php include 'rollins_header.php';?>
    
    <div id="body_content" class="container-fluid">
        <div class="row">
          <div class="col-2" id="sidebar_section">
            <nav class = "d-none d-md-block sidebar">
                <div class="sidebar-sticky">
                    <ul class = "nav flex-column">
                        <li class = "nav-item active"><a class = "nav-link" href="index.php">Home</a></li>
                        <li class = "nav-item"><a class = "nav-link" href="#">Full Catalog</a></li>
                        <li class = "nav-item"><a class = "nav-link" href="browse.php">Browse</a></li>
                        <li class = "nav-item"><a class = "nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
          </div>
          <div class="col" id="content_section">
            <div class="card-group">
                <div class="card">
                <img class="card-img-top" src="..." onerror="this.src='no_image.png';"/>
                <div class="card-block">
                  <h4 class="card-title">None</h4>
                  <p class="card-text">Material Type: None</p>
                  <p class="card-text">Surface Treatment: None</p>
                  <p class="card-text">Decoration: None</p>
                  <p class="card-text">Catalog Number: None</p>  
                </div>
              <div class="card">
                <img class="card-img-top" src="dagger.jpg" onerror="this.src='no_image.png';"/>
                <div class="card-block">
                  <h4 class="card-title">Mayan Dagger</h4>
                  <p class="card-text">Material Type: Pure evil</p>
                  <p class="card-text">Surface Treatment: Hellfire</p>
                  <p class="card-text">Decoration: None</p>
                  <p class="card-text">Catalog Number: 8OR452.60.1</p>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="ark.jpeg" onerror="this.src='no_image.png';"/>
                <div class="card-block">
                  <h4 class="card-title">Ark of the Covenant</h4>
                  <p class="card-text">Material Type: Heavenly Gold</p>
                  <p class="card-text">Surface Treatment: Lightning</p>
                  <p class="card-text">Decoration: Angels 'n shit</p>
                  <p class="card-text">Catalog Number: 8OR452.60.1</p>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
    </div>

</body>
<?php include 'footer.php';?>
</html>