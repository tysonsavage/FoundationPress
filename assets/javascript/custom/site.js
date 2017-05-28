// ------------------ General & Micro-interactions for page -------------------------
$(function() {

    $( ".entry-content p" ).each(function() {
        var watcher = scrollMonitor.create( $(this), -65 );
        watcher.enterViewport(function() {
            $(this.watchItem).addClass('fade-in');
            this.destroy();
        });
    });
    var path = window.location.pathname;
    if(path !== '/') path = path.split('/')[1];

    $( ".main-nav li a" )
        .removeClass('active')
        .each(function() {
            // match the href to the location.href to set active state.
            if(path === $(this).data('link')){
                $(this).addClass('active');
            }
        });
});