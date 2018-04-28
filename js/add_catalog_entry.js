$(document).ready(function(){
  // When the full catalog number is set, fill in catalog number and bag log number
  $("#full_catalog_number").change(function(){
    $("#catalog_number").attr("value", get_catalog_number($("#full_catalog_number").val()));
    $("#baglog_number").attr("value", get_baglog_number($("#full_catalog_number").val()));
  });
  $("#catalog_date").attr("value", get_today_date());
  $("#photograph_file").change(function(){
    if(!$("#photograph_file").get(0).files.length == 0){
      $("#photographed").prop("checked", true);
    } else{
      $("#photographed").prop("checked", false);
    }});
    $("#collection_issue_notes").change(function(){
      if($("#collection_issue_notes").val()){
        $("#collection_issue").prop("checked", true);
      } else{
        $("#collection_issue").prop("checked", false);
      }});
});

function get_catalog_number(full_catalog_number) {
  return full_catalog_number.split(".").pop();
}

function get_baglog_number(full_catalog_number) {
  return full_catalog_number.split(".").slice(0,-1).join(".");
}

function get_today_date(){
  var date = new Date();
  var year = date.getFullYear();
  var month = date.getMonth()+1; // account for 0 indexing
  if (month < 10){
    month = '0' + month;
  }
  var day = date.getDate();
  if (day < 10){
    var day = '0' + day;
  }
  var formatted_date = year + "-" + month + "-" + day;
  return formatted_date;
}
