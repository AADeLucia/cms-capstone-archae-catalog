<form name="contact_form" method="post" action="contact_send_email.php">
  <table width="450px">
    <tr>
      <td valign="top">
        <label for="first_name">First Name *</label>
      </td>
      <td valign="top">
        <input  required type="text" name="first_name" maxlength="50" size="30">
      </td>
    </tr>
    <tr>
      <td valign="top">
        <label for="last_name">Last Name *</label>
      </td>
      <td valign="top">
        <input  required type="text" name="last_name" maxlength="50" size="30">
      </td>
    </tr>
    <tr>
      <td valign="top">
        <label for="email">Email Address *</label>
      </td>
      <td valign="top">
        <input  required type="text" name="email" maxlength="80" size="30">
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
        <label for="subject">Subject</label>
      </td>
      <td valign="top">
        <input disabled type="text" value="<?php echo (isset($id) ? "Info Request: " .$row['full_catalog_number'] : "RCAL Collections Info Request");?>" name="subject" maxlength="30" size="30">
      </td>
    </tr>
    <tr>
      <td valign="top">
        <label for="comments">Comments *</label>
      </td>
      <td valign="top">
        <textarea  required name="comments" maxlength="1000" cols="25" rows="6"></textarea>
      </td>
    </tr>
    <tr>
      <td colspan="2" style="text-align:right">
        <input class="btn btn-primary" type="submit" value="Submit">
      </td>
    </tr>
  </table>
</form>
