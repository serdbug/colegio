function accion(ndt)
    {
                    var nombre=$("#nombre"+ndt).val();
                    var ctgr=$("#ctgr"+ndt).val();
                    var direccion=$("#direccion"+ndt).val();
                   
                    
                    $.ajax({
                        url:'update.php',
                        method:'POST',
                        data:{
                            nombre:nombre,
                            ctgr:ctgr,
                            direccion:direccion,
                            queid:ndt
                            
                        },
                        success:function(response){
                            alert(response);
                           
                        }
                    });
                };

//consultar la tabla

function showCustomer(str) {
  var xhttp;    
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  //xhttp.open("GET", "getcustomer.php?midato="+str, true);
 
 
  xhttp.open("GET", "ders.php?midato="+str, true);
  xhttp.send();

  
}

//actualizar

 
