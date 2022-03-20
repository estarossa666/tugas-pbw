function send()
{
    var modal = document.getElementById("myModal");
    var modalFail = document.getElementById("ModalFail");
    var check = document.getElementById("terms");
    var btn = document.getElementById("sendButton");
    var span = document.getElementsByClassName("close")[0];
    var span1 = document.getElementsByClassName("close1")[0];
    
    btn.onclick = function() {
        if(check.checked){
            modal.style.display = "block";
        }
        else{
            modalFail.style.display = "block";
        }
    }
    
    span.onclick = function() {
        modal.style.display = "none";
    }
    
    span1.onclick = function() {
        modalFail.style.display = "none";
    }
}

function backtotop(){
    document.documentElement.scrollTop = 0;
}