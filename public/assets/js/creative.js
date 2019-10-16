$(document).ready(function () {

    $('#kabupaten-ortu').prop('disabled', true)
    $('#provinsi-ortu').change(function () {
        if ($(this).val() == "") {
            $('#kabupaten-ortu').prop('disabled', true)
        } else {
            $('#kabupaten-ortu').prop('disabled', false)
        }
    })

    $('#kecamatan-ortu').prop('disabled', true)
    $('#kabupaten-ortu').change(function () {
        if ($(this).val() == "") {
            $('#kecamatan-ortu').prop('disabled', true)
        } else {
            $('#kecamatan-ortu').prop('disabled', false)
        }
    })

    $('#kelurahan-ortu').prop('disabled', true)
    $('#kecamatan-ortu').change(function () {
        if ($(this).val() == "") {
            $('#kelurahan-ortu').prop('disabled', true)
        } else {
            $('#kelurahan-ortu').prop('disabled', false)
        }
    })


    $.ajax({
        url: 'http://127.0.0.1:8000/api/provinsi',
        type: 'GET',
        dataType: 'html',
        success: function (data) {
            const obj = JSON.parse(data)
            $.each(obj['semuaprovinsi'], function (key, val) {
                $('#provinsi-ortu').append('<option value="'+ val['id'] + val['nama']+ '">'+ val['nama'] +'</option>')
            })

        },

    })


    $('#provinsi-ortu').change(function () {
        let provinsi_id = $('#provinsi-ortu').val().replace(/\D/g, '')
        $.ajax({
            url: 'http://127.0.0.1:8000/api/kabupaten/' + provinsi_id,
            type: 'GET',
            dataType: 'html',
            success: function (data) {
                $('#kabupaten-ortu').append('<option>Pilih Kabupaten</option>')
                $('#kabupaten-ortu').html(data)
            },

        })
    })

    $('#kabupaten-ortu').change(function () {
        let kabupaten_id = $('#kabupaten-ortu').val().replace(/\D/g, '')
        $.ajax({
            url: 'http://127.0.0.1:8000/api/kecamatan/' + kabupaten_id,
            type: 'GET',
            dataType: 'html',
            success: function (data) {
                $('#kecamatan-ortu').append('<option>Pilih kecamatan</option>')
                $('#kecamatan-ortu').html(data)
            },

        })
    })


    $('#kecamatan-ortu').change(function () {
        let kecamatan_id = $('#kecamatan-ortu').val().replace(/\D/g, '')
        $.ajax({
            url: 'http://127.0.0.1:8000/api/kelurahan/' + kecamatan_id,
            type: 'GET',
            dataType: 'html',
            success: function (data) {
                $('#kelurahan-ortu').append('<option>Pilih kelurahan</option>')
                $('#kelurahan-ortu').html(data)
            },

        })
    })
    
})


    
