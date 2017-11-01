var app = app || {};

app.navigation = (function () {
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
        $('.app-profile-link').off('click').on('click', onLinkClick)
    },
    
    /**
     * On save education click button
     */ 
    onLinkClick = function(e) {
        event.preventDefault();
        event.stopPropagation();
        
        var $element    = $(e.target);
        var endpointUrl = $element.attr('href');
        
        $('.active').removeClass('active');
        $element.parents('li').addClass('active');
        
        $('.app-profile-container').html('');
        
        window.history.pushState("", "", endpointUrl);
        
        $.ajax(endpointUrl, {
            type: 'get',
            data: {},
            beforeSend: showLoading,
            success: onGetResourceSuccess,
            complete: hideLoading,
        });
    }, 
    
    /**
     * On save eduction success
     */ 
    onGetResourceSuccess = function(response) {
        $('.app-profile-container').html(response);
    },
    
    /**
     * Shows loader spinner
     */ 
    showLoading = function() {
        $('.app-loading-block').show();
    },
    
    /**
     * Hides loader spinner
     */ 
    hideLoading = function() {
        $('.app-loading-block').hide();
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