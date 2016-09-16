
function getItems() {
  $.ajax({
     type: "GET",
     url: 'http://rock-on.dk/wlg/WLG_func.php',
     success: function (response) { // response is value echoed from php call
            //alert(response);
            $("#loader").css("display", "none");
            $("#list").html(response);
            $("#wishlist").css("display", "inline");
            
            $("#content").css("background", "#FFFF88");
            $("#content").css("box-shadow", "-4px 4px rgba(0,0,0,0.24)");
     }
  });
}