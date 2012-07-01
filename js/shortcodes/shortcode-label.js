(function() {  
    tinymce.create('tinymce.plugins.label', {  
        init : function(ed, url) {  
            ed.addButton('label', {  
                title : 'Add a Label',  
                image : url+'/../images/admin/button.png',  
                onclick : function() {  
                     ed.selection.setContent('[label type=""]' + ed.selection.getContent() + '[/label]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('label', tinymce.plugins.label);  
})();  