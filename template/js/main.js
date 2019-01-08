$('#competitionCities').on('change', function (e) {
    e.preventDefault();
    $id = this.value;
    $.post('/city-locations', {
        id: $id,
    }, onAjaxSuccess);

    function onAjaxSuccess(data) {
        $('#competitionLocations').find('option').remove();
        var result = JSON.parse(data);
        for(var i=0; i<result.length; i++) {
            var o = new Option(result[i][1], result[i][0]);
            $(o).html(result[i][1]);
            $("#competitionLocations").append(o);
        }
    }
});