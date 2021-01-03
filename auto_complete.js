function showResult(str) {

  if (str.length == 0) { //exit if nothing has been typed in the textbox
    document.getElementById("txt").innerHTML = ""; //clear previous results
    return;
  }
  /*This code will ensure that the application works in both IE 5 & 6 and other high versions of IE and browsers.*/
  if (window.XMLHttpRequest) {
    xmlhttp = new XMLHttpRequest();
  } else {
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  /*checks if the AJAX interaction is complete and the status is 200 then updates the txt span with the returned results.*/
  xmlhttp.onreadystatechange = function () {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      document.getElementById("txt").innerHTML = xmlhttp.responseText;

    }

  }

  xmlhttp.open("GET", "data.php?name=" + str, true);
  xmlhttp.send();

}