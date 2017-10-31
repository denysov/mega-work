var app = app || {};

app.resume = (function () {
    /**
     * Private properties 
     * Options
     */ 
    var options = {};
    
    /**
     * Private methods
     * Init events
     */ 
    var initEvents = function() {
        $('.app-save-education').off('click').on('click', onSaveEducationClick)
    },
    
    /**
     * On save education click button
     */ 
    onSaveEducationClick = function(e) {
        var $element = $(e.target);
        var $form    = $element.parents('form');
        
        $.ajax(options.saveEducationUrl, {
            type: 'post',
            data: $form.serialize(),
            beforeSend: function() {},
            success: onSaveSuccess,
            complete: function() {},
        });
    }, 
    
    /**
     * On save eduction success
     */ 
    onSaveSuccess = function(response) {
        
    };
 
    return {
        /**
         * Public methods
         */ 
        init: function(userOptions) {
            options = userOptions;
            initEvents();
        }
    }
})();