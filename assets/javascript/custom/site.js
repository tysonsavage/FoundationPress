// ------------------ General & Micro-interactions for page -------------------------
$(function() {

    $( ".entry-content p" ).each(function() {
        var watcher = scrollMonitor.create( $(this), -65 );
        watcher.enterViewport(function() {
            $(this.watchItem).addClass('fade-in');
            this.destroy();
        });
    });

    $( ".main-nav li" )
        .removeClass('active')
        .each(function() {
            // match the href to the location.href to set active state.
            if($(this).data('link') === window.location.pathname) $(this).addClass('active');
        });
});