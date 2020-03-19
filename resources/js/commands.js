$(document).ready(function () {
    $('.btnSync').on('click', function () {
        $.ajax({
            type: "post",
            url: "/api/event",
            data: {
                id: 1,
                test: 'test'
            },
            //headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
            success: function (response) {
                console.log(response)
            }
        });
    })

    $('.btnTestRq').on('click', function () {
        console.log('sending...')
        let req = {
            id: 'central_demo|CS_12',
            time: [32, 14],
            info: [50]
        }
        $.ajax({
            type: "post",
            url: "http://192.168.0.45:9010",
            data: JSON.stringify(req),
            success: function (response) {
                console.log(response)
                $('.terminalRes').append(`<p class="m-0">Hecho</p>`)
            }
        });
    })
});