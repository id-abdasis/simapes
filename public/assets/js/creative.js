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


    // Data alamat orang tua
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
    

    // Data alamat wali


    $('#kabupaten-wali').prop('disabled', true)
    $('#provinsi-wali').change(function () {
        if ($(this).val() == "") {
            $('#kabupaten-wali').prop('disabled', true)
        } else {
            $('#kabupaten-wali').prop('disabled', false)
        }
    })

    $('#kecamatan-wali').prop('disabled', true)
    $('#kabupaten-wali').change(function () {
        if ($(this).val() == "") {
            $('#kecamatan-wali').prop('disabled', true)
        } else {
            $('#kecamatan-wali').prop('disabled', false)
        }
    })

    $('#kelurahan-wali').prop('disabled', true)
    $('#kecamatan-wali').change(function () {
        if ($(this).val() == "") {
            $('#kelurahan-wali').prop('disabled', true)
        } else {
            $('#kelurahan-wali').prop('disabled', false)
        }
    })


    $.ajax({
        url: 'http://127.0.0.1:8000/api/provinsi',
        type: 'GET',
        dataType: 'html',
        success: function (data) {
            const obj = JSON.parse(data)
            $.each(obj['semuaprovinsi'], function (key, val) {
                $('#provinsi-wali').append('<option value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
            })

        },

    })


    $('#provinsi-wali').change(function () {
        let provinsi_id = $('#provinsi-wali').val().replace(/\D/g, '')
        $.ajax({
            url: 'http://127.0.0.1:8000/api/kabupaten/' + provinsi_id,
            type: 'GET',
            dataType: 'html',
            success: function (data) {
                $('#kabupaten-wali').append('<option>Pilih Kabupaten</option>')
                $('#kabupaten-wali').html(data)
            },

        })
    })

    $('#kabupaten-wali').change(function () {
        let kabupaten_id = $('#kabupaten-wali').val().replace(/\D/g, '')
        $.ajax({
            url: 'http://127.0.0.1:8000/api/kecamatan/' + kabupaten_id,
            type: 'GET',
            dataType: 'html',
            success: function (data) {
                $('#kecamatan-wali').append('<option>Pilih kecamatan</option>')
                $('#kecamatan-wali').html(data)
            },

        })
    })


    $('#kecamatan-wali').change(function () {
        let kecamatan_id = $('#kecamatan-wali').val().replace(/\D/g, '')
        $.ajax({
            url: 'http://127.0.0.1:8000/api/kelurahan/' + kecamatan_id,
            type: 'GET',
            dataType: 'html',
            success: function (data) {
                $('#kelurahan-wali').append('<option>Pilih kelurahan</option>')
                $('#kelurahan-wali').html(data)
            },

        })
    })

})


    
