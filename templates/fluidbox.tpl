{ignore}
<script>
$(function () {
    var selectors = "{/ignore}{$types}{ignore}"
    $(selectors).fluidbox({
        immediateOpen	: {/ignore}{if Config::get('plugins.fluidbox.immediateOpen') === true}true{else}false{/if}{ignore},
        loader	        : {/ignore}{if Config::get('plugins.fluidbox.loader') === true}true{else}false{/if}{ignore},
        maxWidth        : {/ignore}{Config::get('plugins.fluidbox.maxWidth')}{ignore},
        maxHeight	    : {/ignore}{Config::get('plugins.fluidbox.maxHeight')}{ignore},
        resizeThrottle	: {/ignore}{Config::get('plugins.fluidbox.resizeThrottle')}{ignore},
        stackIndex	    : {/ignore}{Config::get('plugins.fluidbox.stackIndex')}{ignore},
        stackIndexDelta	: {/ignore}{Config::get('plugins.fluidbox.stackIndexDelta')}{ignore},
        viewportFill	: {/ignore}{Config::get('plugins.fluidbox.viewportFill')}{ignore}
    });
});
</script>
{/ignore}
