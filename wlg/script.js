
function getItems() {
  
  var lv_url = "http://rock-on.dk/wlg/WLG_func.php";
  
  var r = new XMLHttpRequest();
  r.open("GET", lv_url, true);
  r.onreadystatechange = function () {
    if (r.readyState != 4 || r.status != 200) return;
    
            document.getElementById("loader").style.display = "none";
            document.getElementById("list").innerHTML = r.responseText;
            document.getElementById("wishlist").style.display = "inline";
    
            var offsetHeight = document.getElementById('topdiv').offsetHeight;
            offsetHeight += document.getElementById('list').offsetHeight + 30;
    
            document.getElementById("content").style.height = offsetHeight + "px";
            document.getElementById("content").style.marginTop = (Math.round(offsetHeight / 2) + 30) + "px";      
    
            document.getElementById("content").style.background = "#FFFF88";
            document.getElementById("content").style.boxShadow = "-4px 4px rgba(0,0,0,0.24)";
    
    };
  r.send();
  
  /*
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
  */
}