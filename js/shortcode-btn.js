(function() {  
    tinymce.create('tinymce.plugins.button', {  
        init : function(ed, url) {  
            ed.addButton('button', {  
                title : 'Add a Button',  
                image : url+'/../images/admin/button.png',  
                onclick : function() {  
                     ed.selection.setContent('[button size="" type="" icon="" white=""]' + ed.selection.getContent() + '[/button]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('button', tinymce.plugins.button);  
})();  