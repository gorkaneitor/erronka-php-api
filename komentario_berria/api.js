function komentarioaBidali(){
    if(document.getElementById('izena').value == "" || document.getElementById('komentarioaren_testua').value == ""){
        alert("Eremu guztiak bete behar dira");
    }else{
        //datuak web-zerbitzarira bidaltzeko XMLHttpRequest motako objetu bat sortu
        httpRequest = new XMLHttpRequest();
        
        //datuak web-zerbitzarira bidaltzeko eskaria konfiguratu

        httpRequest.open("POST","index.php",true);
        httpRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");

        //web-zerbitzaritik jasotako erantzuna nola porzesatuko den definitu

        httpRequest.onreadystatechange = function(){
            if(httpRequest.readyState == 4){
                if(httpRequest.status == 200){
                    document.getElementById('komentarioa').innerHTML = this.responseText;
                }else{
                    alert("falloa komunikazioan: " + this.statusText)
                }
            }
        }
        httpRequest.send("id=" + document.getElementById('id').value + "&izena="+ document.getElementById('izena').value + "&komentarioaren_testua=" + document.getElementById('komentarioaren_testua').value);
    }
}