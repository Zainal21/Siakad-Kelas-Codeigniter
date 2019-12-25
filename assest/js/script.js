const tombol = document.querySelector('#tombol');
tombol.addEventListener('click', function () {

    Swal({
        title: 'Halo ',
        text: 'Saya Sedang belajar mengenai SweetAlert ',
        type: 'warning'
    });
});