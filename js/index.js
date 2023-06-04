
window.onload = function(){ 
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("open-modal");
    var closeBtn = document.getElementById('close_modal');

    btn.onclick = function() {
        modal.style.display = "block";
        // document.getElementById('body').style.opacity = '0.6';
    }
    closeBtn.onclick = function(){
        modal.style.display = "none";
    }

};

