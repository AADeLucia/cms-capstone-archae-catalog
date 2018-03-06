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
    <?php include 'full_catalog_database.php';?>
    <!--<div class="col" id="content_section">
      <div class="card-group">
        <div class="card mb-3">
          <img class="img-responsive" id="artifact_thumbnail" src="dagger.jpg" onerror="this.src='no_image.png';"/>
          <div class="card-block">
            <h4 class="card-header">Mayan Dagger</h4>
          </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Material Type: Pure Evil</li>
              <li class="list-group-item">Surface Treatment: Hellfire</li>
              <li class="list-group-item">Decoration: None</li>
              <li class="list-group-item">Catalog Number: 8OR552.60.1</li>
            </ul>
        </div>
        
          <div class="card mb-3">
            <img class="img-responsive" id="artifact_thumbnail" src="ark.jpeg" onerror="this.src='no_image.png';"/>
            <div class="card-block">
              <h4 class="card-header">Ark of the Covenant</h4>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Material Type: Solid Gold</li>
              <li class="list-group-item">Surface Treatment: Lightning</li>
              <li class="list-group-item">Decoration: Angels 'n shit</li>
              <li class="list-group-item">Catalog Number: 8OR452.60.1</li>
            </ul>
          </div>
              
          <div class="card mb-3">
            <img class="card-img-top" id="artifact_thumbnail" src="..." onerror="this.src='no_image.png';"/>
              <div class="card-block">
                <h4 class="card-header">Null</h4>
              </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Material Type: None</li>
              <li class="list-group-item">Surface Treatment: None</li>
              <li class="list-group-item">Decoration: None</li>
              <li class="list-group-item">Catalog Number: None</li>
            </ul>
          </div>
      </div>
    </div> -->
  </div>
</div>
</div>

</body>
<?php include 'footer.php';?>
</html>