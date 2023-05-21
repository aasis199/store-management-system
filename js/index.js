
    // var modal = ;
    var btn = document.getElementById("open-modal");
    var modal = document.getElementById("modal-content");
    var closeBtn = document.getElementById('close_modal');
    // modal.style.display = "none";

    btn.onclick = function() {
        modal.style.display = 'block';
    }
    closeBtn.onclick = function(){
        modal.style.display = 'none';
    }

