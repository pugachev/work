(function() {
    'use strict';
  
    var cmds = document.getElementsByClassName('btn');
    var i;
  
    for (i = 0; i < cmds.length; i++) {
      cmds[i].addEventListener('click', function(e) {
        //e.preventDefault();
        //document.getElementById('btn_' + this.dataset.id);
        //document.getElementById('btn_inner_' + this.dataset.id).text();
        $('#btn_inner_'+ this.dataset.id).text("’Ç‰ÁÏ");
      });
    }
    
    
  
  })();