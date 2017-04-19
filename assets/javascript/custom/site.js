// ------------------ General & Micro-interactions for page -------------------------
$(function() {
    $( ".entry-content p" ).each(function() {
        var watcher = scrollMonitor.create( $(this), -50 );
        watcher.enterViewport(function() {
            $(this.watchItem).addClass('fade-in');
            this.destroy();
        });
    });

});