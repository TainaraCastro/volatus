//Toggle chevrons

function toggleChevron(e) {
$(e.target)
.prev('.panel-heading')
.find("i.indicator")
.toggleClass('glyphicon-chevron-down-custom glyphicon-chevron-up-custom');
        }
        $('#accordion').on('hidden.bs.collapse', toggleChevron);
        $('#accordion').on('shown.bs.collapse', toggleChevron);