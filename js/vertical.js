
mw.loader.using( [ 'mediawiki.util' ] ).done( function () {

    function addAdjustHeightsListeners() {
        window.addEventListener('resize', adjustHeights);
        var containers = document.querySelectorAll('#mw-content-text .mw-parser-output');
        containers.forEach(addAdjustHeightsListener);
    }

    function addAdjustHeightsListener(container) {
        container.addEventListener('change', function() {
            adjustHeight(container);
        })
    }

    function adjustHeights() {
        var scrollTop = document.documentElement.scrollTop;
        var scrollHeight = document.documentElement.scrollHeight;
        var containers = document.querySelectorAll('#mw-content-text .mw-parser-output');
        containers.forEach(adjustHeight);
        document.querySelector('.liberty-content-header').style.height = document.querySelector('.liberty-content-main').offsetHeight + 'px';
        document.documentElement.scrollTop = scrollTop * (document.documentElement.scrollHeight / scrollHeight);
    }

    function adjustHeight(container) {
        container.style.height = getComputedStyle(container).getPropertyValue('column-width');
        container.style.height = container.scrollHeight + 'px';
    }

    mw.hook('wikipage.content').add(addAdjustHeightsListeners);
    mw.hook('wikipage.content').add(adjustHeights);
} );