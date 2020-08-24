// sweet alert
const flash_data = $('.flash-data').data('flashdata');
if (flash_data) {
    Swal.fire(
        'yeay',
        'Kamu berhasil ' + flash_data,
        'success'
    )
}

// sweetAlert confirm
const tombol_hapus = $('.tombol-hapus').on('click', function (event) {
    event.preventDefault();
    let data_tombol = $('.tombol-hapus').data('identitastombol');
    Swal.fire({
        title: 'Hapus ' + data_tombol + '?',
        text: "Data akan terhapus permanen",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus sekarang!'
    }).then((result) => {
        if (result.value) {
            document.location.href = tombol_hapus.attr('href');
        }
    })
});
