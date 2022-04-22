function generate() {
    const kodePendaftaran = document.getElementById("inputqr").value;
    localStorage.setItem("KodePendaftaran", kodePendaftaran);

    return;
}

window.addEventListener('load', () => {
    const x = localStorage.getItem('KodePendaftaran');

    console.log(x);

    var img = document.getElementById("img12");

    new QRious({
        element: img,
        value: 'Nomor Kode Pendaftaran : ' + x,
        size: 100
    });
});