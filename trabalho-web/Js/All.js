//const searchInput = document.getElementById("search-input");
const searchButton = document.getElementById("search-button");
const text = document.getElementById("search-input");
const url = document.location.href;

document.onreadystatechange = function() {
    if (url.substring(url.lastIndexOf('/') + 1) == "") {
        showSlides();
    }
    if (url.substring(url.lastIndexOf('/') + 1) == "Home.php") {
        showSlides();
    }
}
window.onload = function() {

    if (url.substring(url.lastIndexOf('/') + 1) == "perfil.php") {
        let UwU = document.getElementById("carro");
        let a = document.createElement("li");
        a.innerText = getCookie("sess");
        UwU.appendChild(a);
    }
    
    if (url.substring(url.lastIndexOf('/') + 1) == "Produtos.php") {
        pesquisar('pesq');
        Prod();
    }
    if (getCookie("sess") != "") {
        document.getElementById('login').innerHTML = "Conta";
        document.getElementById("login").href="../Html/perfil.php";

        const logoff = document.createElement("a");
        logoff.innerHTML = "Sair";
        logoff.id = "logoff";
        const temp = document.createElement("li")
        temp.id = "temp";
        document.getElementById("ul").appendChild(temp);
        document.getElementById("temp").appendChild(logoff);
        document.getElementById("logoff").addEventListener("click", function() {
        deleteCookie('sess');
        document.location.replace("../Html/Home.php");
})
    }
    
}
window.addEventListener('beforeunload', function(event) {
    if (url.substring(url.lastIndexOf('/') + 1) == "Produtos.php") {
            deleteCookie('pesq');
    }
});
searchButton.addEventListener("click", function() { 

    if (url.substring(url.lastIndexOf('/') + 1) != "Produtos.php") {
        document.location.replace("../Html/Produtos.php");
    }
    setCookie('pesq', text.value);
    bp();
    
});
text.addEventListener("keydown", function(e) {
    if (e.key === 'Enter') {
        // Check if Enter key is pressed
        searchButton.click();
        // Trigger button click
    }
})

function pesquisar(a) {
    document.getElementById("search-input").value = getCookie(a);
    bp();
}

function bp() {
    //document.location.replace("Produtos.html");
    //searchInput.innerHTML = "awa";

    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("search-input");
    filter = input.value.toUpperCase();
    ul = document.getElementById("imgs");
    li = ul.getElementsByClassName("exemploMoletons");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("h4")[0];
        console.log(a);
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

function setCookie(cname, cvalue) {
    const d = new Date();
    d.setTime(d.getTime() + (1*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        document.cookie = cname+'=; Max-Age=-99999999;';  
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

function deleteCookie(cname) {
    document.cookie = cname + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
}

function awa(){
    console.log('awa');
}

function replaceConf(evt, conf) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(conf).style.display = "block";
    evt.currentTarget.className += " active";
}
let slideIndex = 1;
function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            slides[slideIndex-1].style.display = "block";
            setTimeout(showSlides, 3000); // Change image every 2 seconds
}

function Prod() {
    let temp = document.getElementById('imgs').getElementsByTagName("img");

    for (i = 0;i < temp.length ;i++) {
        // Create a class attribute:
        const att = document.createAttribute("onclick");
        // Set a value of the class attribute
        att.value = "document.location.replace('../Html/janelaP.php')";

        temp[i].setAttributeNode(att);
    }
}

function repl() {
    document.location.replace('../Html/janelaP.php');
}

function uo() {
    setCookie("moletom", document.alt);
};
