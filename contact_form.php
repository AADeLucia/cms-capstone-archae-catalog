<!DOCTYPE html>
<html>
    <?php include 'head.php';?>
    <head>
        <title>Contact</title>
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
                        <li class = "nav-item"><a class = "nav-link" href="full_catalog.php">Full Catalog</a></li>
                        <li class = "nav-item"><a class = "nav-link" href="browse.php">Browse</a></li>
                        <li class = "nav-item"><a class = "nav-link" href="#">Contact</a></li>
                    </ul>
                </div>
            </nav>
          </div>
          <div class="col" id="content_section">
            <form name="contactform" method="post" action="send_form_email.php">
            <table width="450px">
            <tr>
             <td valign="top">
              <label for="first_name">First Name *</label>
             </td>
             <td valign="top">
              <input  type="text" name="first_name" maxlength="50" size="30">
             </td>
            </tr>
            <tr>
             <td valign="top">
              <label for="last_name">Last Name *</label>
             </td>
             <td valign="top">
              <input  type="text" name="last_name" maxlength="50" size="30">
             </td>
            </tr>
            <tr>
             <td valign="top">
              <label for="email">Email Address *</label>
             </td>
             <td valign="top">
              <input  type="text" name="email" maxlength="80" size="30">
             </td>
            </tr>
            <tr>
             <td valign="top">
              <label for="telephone">Telephone Number</label>
             </td>
             <td valign="top">
              <input  type="text" name="telephone" maxlength="30" size="30">
             </td>
            </tr>
            <tr>
             <td valign="top">
              <label for="comments">Comments *</label>
             </td>
             <td valign="top">
              <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
             </td>
            </tr>
            <tr>
             <td colspan="2" style="text-align:center">
              <input type="submit" value="Submit">
             </td>
            </tr>
            </table>
            </form>
          </div>
        </div>
    </div>

</body>
<?php include 'footer.php';?>
</html>