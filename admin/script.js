function getstates(){
  var xmlhttp;
  try{
    xmlhttp = new XMLHttpRequest();
  }catch(e){
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  if(xmlhttp){
    var form     = document['form1'];
    var country  = form['select1'].value;
    xmlhttp.open("GET", country + ".json", true);
    xmlhttp.onreadystatechange = function(){
      if(this.readyState == 4){
        var select2 = $("#select2");
        var options = JSON.parse(this.responseText);
//        document.getElementById("select2").options.length = 0;
        select2.empty();
        for(var i in options){
          option            = $('<option>');
          option.value      = options[i].value;
          option.append(options[i].text);
          select2.append(option);
        }
      }
    }
    xmlhttp.send(null);
  }
}