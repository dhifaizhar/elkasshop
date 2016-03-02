function mulai(){
    var waktu = new Date();
    var hari = new Array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
    var bulan = new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
    var jam = waktu.getHours();
    jam = jam < 10 ? "0"+jam : jam;
    var menit = waktu.getMinutes();
    menit = menit < 10 ? "0"+menit : menit;
    var detik = waktu.getSeconds();
    detik = detik < 10 ? "0"+detik : detik;

    document.getElementById("tanggal").innerHTML = hari[waktu.getDay()] + ", " +waktu.getDate() +" " +bulan[waktu.getMonth()] +" " +waktu.getFullYear();
    document.getElementById("jam").innerHTML = jam;
    document.getElementById("menit").innerHTML = menit;
    document.getElementById("detik").innerHTML = detik;
}

setInterval("mulai()", 1000);