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
        url: '/api/provinsi',
        type: 'GET',
        dataType: 'html',
        success: function (data) {
            const obj = JSON.parse(data)
            $.each(obj['semuaprovinsi'], function (key, val) {
                $('#provinsi-ortu').prepend('<option value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
            })

        },

    })


    $('#provinsi-ortu').change(function () {
        $('#kabupaten-ortu').empty()
        $('#kabupaten-ortu').prepend('<option>Pilih Kabupaten</option>')
        let provinsi_id = $(this).val().replace(/\D/g, '')
        if (provinsi_id) {
            $.ajax({
                url: '/api/kabupaten/' + provinsi_id,
                type: 'GET',
                dataType: 'html',
                success: function (data) {
                    const obj = JSON.parse(data)
                    $.each(obj['kabupatens'], function (key, val) {
                        $('#kabupaten-ortu').append('<option value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                    })

                },

            })
        }
    })



    $('#kabupaten-ortu').change(function () {
        let kabupaten_id = $('#kabupaten-ortu').val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kecamatan/' + kabupaten_id,
            type: 'GET',
            dataType: 'html',
            success: function (data) {
                $('#kecamatan-ortu').html(data)
                $('#kecamatan-ortu').prepend('<option selected>Pilih kecamatan</option>')

            },

        })
    })


    $('#kecamatan-ortu').change(function () {
        let kecamatan_id = $('#kecamatan-ortu').val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kelurahan/' + kecamatan_id,
            type: 'GET',
            dataType: 'html',
            success: function (data) {
                $('#kelurahan-ortu').html(data)
                $('#kelurahan-ortu').prepend('<option selected>Pilih kelurahan</option>')

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
        url: '/api/provinsi',
        type: 'GET',
        dataType: 'html',
        success: function (data) {
            const obj = JSON.parse(data)
            $.each(obj['semuaprovinsi'], function (key, val) {
                $('#provinsi-wali').prepend('<option value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
            })

        },

    })



    $('#provinsi-wali').change(function () {
        $('#kabupaten-wali').empty()
        $('#kabupaten-wali').prepend('<option>Pilih Kabupaten</option>')
        let provinsi_id = $(this).val().replace(/\D/g, '')
        let kabupaten_asal = "Kab. Bangkalan";
        if (provinsi_id) {
            $.ajax({
                url: '/api/kabupaten/' + provinsi_id,
                type: 'GET',
                dataType: 'html',
                success: function (data) {
                    const obj = JSON.parse(data)
                    $.each(obj['kabupatens'], function (key, val) {
                        let list_kabupaten = $('#kabupaten-wali').append('<option ' + 'value="' + val['id'] + val['nama'] + '">' + val['nama'] + '</option>')
                        list_kabupaten
                        // if (kabupaten_asal == val['nama']) {
                        //     $(list_kabupaten).find('option[value="' + val['id'] + kabupaten_asal + '"]').attr("selected", "selected");
                        // }
                    })

                },

            })
        }
    })

    $('#kabupaten-wali').change(function () {
        let kabupaten_id = $('#kabupaten-wali').val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kecamatan/' + kabupaten_id,
            type: 'GET',
            dataType: 'html',
            success: function (data) {
                $('#kecamatan-wali').html(data)
                $('#kecamatan-wali').prepend('<option selected>Pilih kecamatan</option>')

            },

        })
    })


    $('#kecamatan-wali').change(function () {
        let kecamatan_id = $('#kecamatan-wali').val().replace(/\D/g, '')
        $.ajax({
            url: '/api/kelurahan/' + kecamatan_id,
            type: 'GET',
            dataType: 'html',
            success: function (data) {
                $('#kelurahan-wali').html(data)
                $('#kelurahn-wali').prepend('<option selected>Pilih Kelurahan</option>')

            },

        })
    })


    $(document).ready(function () {
        // Format mata uang.
        $('.uang').mask('0.000.000.000', { reverse: true });
    })

    $(document).ready(function () {
        // Format nomor hp
        $('.telepon').mask('0000-0000-0000', { reverse: true });
    })

    $(document).ready(function () {
        // Format max length
        $('.isMax3').mask('000', { reverse: true });
    })

    $(document).ready(function () {
        $('.isMax4').mask('0000', { reverse: true })
    })

    $('.isMaxLength').maxlength({
        alwaysShow: true,
        threshold: 10,
        warningClass: "label label-success",
        limitReachedClass: "label label-warning",
        placement: 'bottom',
        preText: '  ',
        separator: ' / ',
        postText: ' karakter.'
    });

    //upload gambar
    function bacaGambar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#gambar_nodin').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#foto_profil").change(function () {
        bacaGambar(this);
        $('#file_dipilih').append($('#foto_profil')[0].files[0].name)
    });


})



