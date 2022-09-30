// Script Untuk Menjalankan SweetAlert

const flashData = $(".flash-data").data("flashdata");
// console.log(flashData);
// "Data Komik" itu judul ditambahkan sendiri
if (flashData) {
  Swal.fire("Berhasil", "" + flashData, "success");
}

// Tombol Hapus
$(".tombol-hapus").on("click", function (e) {
  // Tidak menjalankan perintah action/href
  e.preventDefault();
  const href = $(this).attr("href");

  Swal.fire({
    title: "Apakah Anda Yakin?",
    text: "Data Yang Anda Pilih Akan Dihapus",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Hapus Data!",
  }).then((result) => {
    if (result.isConfirmed) {
      //  document.location.href = href;
      window.location.href = href;
    }
  });
});

// $('.export').on("click",function(){
//   window.location = "<?= base_url('Absensi/export'); ?>";
// });

$(".export").on("click", function () {
  window.location = "<?= base_url('Absensi/export'); ?>";
});

// // Function ini dijalankan ketika Halaman ini dibuka pada browser
// $(function(){
// setInterval(timestamp, 1000);//fungsi yang dijalan setiap detik, 1000 = 1 detik
// });

// //Fungi ajax untuk Menampilkan Jam dengan mengakses File ajax_timestamp.php
// function timestamp() {
// $.ajax({
// url: 'ajax_timestamp.php',
// success: function(data) {
// $('#timestamp').html(data);
// },
// });
// }

// window.setTimeout("waktu()", 1000);

// function waktu() {
// 	var waktu = new Date();
// 	setTimeout("waktu()", 1000);
// 	document.getElementById("jam").innerHTML = waktu.getHours();
// 	document.getElementById("menit").innerHTML = waktu.getMinutes();
// 	document.getElementById("detik").innerHTML = waktu.getSeconds();
// }
function hitung() {
  var hasil_1, hasil_2, hasil_3, hasil_4, hasil_5, hasil_6, hasil_7, hasil_8, hasil_9, hasil_10, hasil_11, hasil_12, hasil_13, hasil_14, hasil_15, range;
  let price = document.getElementById("pendapatan").value;
  var a = document.getElementById("container");

  var ac = Math.round((Math.sqrt(parseInt(price) / 10)));
  var ad = Math.round((Math.sqrt(parseInt(price) * 10)));
  console.log(ac);
  console.log(ad);

  if (price.length = 3) {
      range = Math.round(Math.sqrt(parseInt(price)));
  }; 
  if (price.length > 3) {
      range = ac;
  }; 
  if (price.length < 3) {
      range = ad;
  };

  // Bearis
  hasil_1 = Math.round((Math.sqrt(parseInt(price) / 10) - 0.124) ** 2);
  hasil_2 = Math.round((Math.sqrt(parseInt(price) / 10) - 0.25) ** 2);
  hasil_3 = Math.round((Math.sqrt(parseInt(price) / 10) - 0.5) ** 2);
  hasil_4 = Math.round((Math.sqrt(parseInt(price) / 10) - 0.75) ** 2);
  hasil_5 = Math.round((Math.sqrt(parseInt(price) / 10) - 1) ** 2);
  hasil_6 = Math.round((Math.sqrt(parseInt(price) / 10) - 1.25) ** 2);
  hasil_7 = Math.round((Math.sqrt(parseInt(price) / 10) - 1.5) ** 2);
  hasil_8 = Math.round((Math.sqrt(parseInt(price) / 10) - 1.75) ** 2);
  hasil_9 = Math.round((Math.sqrt(parseInt(price) / 10) - 2) ** 2);
  hasil_10 = Math.round((Math.sqrt(parseInt(price) / 10) - 3) ** 2);
  hasil_11 = Math.round((Math.sqrt(parseInt(price) / 10) - 4) ** 2);
  hasil_12 = Math.round((Math.sqrt(parseInt(price) / 10) - 5) ** 2);
  hasil_13 = Math.round((Math.sqrt(parseInt(price) / 10) - 6) ** 2);
  hasil_14 = Math.round((Math.sqrt(parseInt(price) / 10) - 7) ** 2);
  hasil_15 = Math.round((Math.sqrt(parseInt(price) / 10) - 8) ** 2);
  // Akhir Bearis
  // Hasil Bearis
  var hasil_ris_1 = hasil_1 * 10;
  var hasil_ris_2 = hasil_2 * 10;
  var hasil_ris_3 = hasil_3 * 10;
  var hasil_ris_4 = hasil_4 * 10;
  var hasil_ris_5 = hasil_5 * 10;
  var hasil_ris_6 = hasil_6 * 10;
  var hasil_ris_7 = hasil_7 * 10;
  var hasil_ris_8 = hasil_8 * 10;
  var hasil_ris_9 = hasil_9 * 10;
  var hasil_ris_10 = hasil_10 * 10;
  var hasil_ris_11 = hasil_11 * 10;
  var hasil_ris_12 = hasil_12 * 10;
  var hasil_ris_13 = hasil_13 * 10;
  var hasil_ris_14 = hasil_14 * 10;
  var hasil_ris_15 = hasil_15 * 10;
  // Akhir Hasil Bearis

  // Bullis
  var hasil_1lis = Math.round((Math.sqrt(parseInt(price) / 10) + 0.124) ** 2);
  var hasil_2lis = Math.round((Math.sqrt(parseInt(price) / 10) + 0.25) ** 2);
  var hasil_3lis = Math.round((Math.sqrt(parseInt(price) / 10) + 0.5) ** 2);
  var hasil_4lis = Math.round((Math.sqrt(parseInt(price) / 10) + 0.75) ** 2);
  var hasil_5lis = Math.round((Math.sqrt(parseInt(price) / 10) + 1) ** 2);
  var hasil_6lis = Math.round((Math.sqrt(parseInt(price) / 10) + 1.25) ** 2);
  var hasil_7lis = Math.round((Math.sqrt(parseInt(price) / 10) + 1.5) ** 2);
  var hasil_8lis = Math.round((Math.sqrt(parseInt(price) / 10) + 1.75) ** 2);
  var hasil_9lis = Math.round((Math.sqrt(parseInt(price) / 10) + 2) ** 2);
  var hasil_10lis = Math.round((Math.sqrt(parseInt(price) / 10) + 3) ** 2);
  var hasil_11lis = Math.round((Math.sqrt(parseInt(price) / 10) + 4) ** 2);
  var hasil_12lis = Math.round((Math.sqrt(parseInt(price) / 10) + 5) ** 2);
  var hasil_13lis = Math.round((Math.sqrt(parseInt(price) / 10) + 6) ** 2);
  var hasil_14lis = Math.round((Math.sqrt(parseInt(price) / 10) + 7) ** 2);
  var hasil_15lis = Math.round((Math.sqrt(parseInt(price) / 10) + 8) ** 2);
  // Akhir Bullis

  // Hasil Bullis
  var hasil_lis_1 = hasil_1lis * 10;
  var hasil_lis_2 = hasil_2lis * 10;
  var hasil_lis_3 = hasil_3lis * 10;
  var hasil_lis_4 = hasil_4lis * 10;
  var hasil_lis_5 = hasil_5lis * 10;
  var hasil_lis_6 = hasil_6lis * 10;
  var hasil_lis_7 = hasil_7lis * 10;
  var hasil_lis_8 = hasil_8lis * 10;
  var hasil_lis_9 = hasil_9lis * 10;
  var hasil_lis_10 = hasil_10lis * 10;
  var hasil_lis_11 = hasil_11lis * 10;
  var hasil_lis_12 = hasil_12lis * 10;
  var hasil_lis_13 = hasil_13lis * 10;
  var hasil_lis_14 = hasil_14lis * 10;
  var hasil_lis_15 = hasil_15lis * 10;



  // Akhir Bullis

  a.innerHTML = "<table border='1' cellspacing='0'> <tr> <th colspan='6' style='text-align: center;' >Price</th> </tr> <tr> <th colspan='2' style='text-align: center;'>Key Price</th> <th colspan='2' style='text-align: center;'>DATE</th> <th colspan='2' style='text-align: center;'>RANGE</th> </tr> <tr> <th th colspan='2' style='text-align: center;'>" + price + "</th> <th colspan='2' style='text-align: center;'> DERAJAT HARGA </th> <th colspan='2' style='text-align: center;'>" + range + "</th> </tr> <tr style='text-align: center;'><th colspan = '3' style='text-align: center;'>TITIK KRITIS BEARIS</th><th colspan = '3' style='text-align: center;'>TITIK KRITIS BULLIS</th></tr> <tr style='text-align: center;'><td>22.5&deg;</td><td>" + hasil_1 + "</td><td>" + hasil_ris_1 + "</td><td>22.5&deg;</td><td>" + hasil_1lis + "</td><td>" + hasil_lis_1 + "</td></tr>  <tr style='text-align: center;'><td>45&deg;</td><td>" + hasil_2 + "</td><td>" + hasil_ris_2 + "</td><td>45&deg;</td><td>" + hasil_2lis + "</td><td>" + hasil_lis_2 + "</td></tr> <tr style='text-align: center;'><td>90&deg;</td><td>" + hasil_3 + "</td><td>" + hasil_ris_3 + "</td><td>90&deg;</td><td>" + hasil_3lis + "</td><td>" + hasil_lis_3 + "</td></tr><tr style='text-align: center;'><td>135&deg;</td><td>" + hasil_4 + "</td><td>" + hasil_ris_4 + "</td><td>135&deg;</td><td>" + hasil_4lis + "</td><td>" + hasil_lis_4 + "</td></tr><tr style='text-align: center;'><td>180&deg;</td><td>" + hasil_5 + "</td><td>" + hasil_ris_5 + "</td><td>180&deg;</td><td>" + hasil_5lis + "</td><td>" + hasil_lis_5 + "</td></tr><tr style='text-align: center;'><td>225&deg;</td><td>" + hasil_6 + "</td><td>" + hasil_ris_6 + "</td><td>225&deg;</td><td>" + hasil_6lis + "</td><td>" + hasil_lis_6 + "</td></tr><tr style='text-align: center;'><td>270&deg;</td><td>" + hasil_7 + "</td><td>" + hasil_ris_7 + "</td><td>270&deg;</td><td>" + hasil_7lis + "</td><td>" + hasil_lis_7 + "</td></tr><tr style='text-align: center;'><td>315&deg;</td><td>" + hasil_8 + "</td><td>" + hasil_ris_8 + "</td><td>315&deg;</td><td>" + hasil_8lis + "</td><td>" + hasil_lis_8 + "</td></tr><tr style='text-align: center;'><td>360&deg;</td><td>" + hasil_9 + "</td><td>" + hasil_ris_9 + "</td><td>360&deg;</td><td>" + hasil_9lis + "</td><td>" + hasil_lis_9 + "</td></tr><tr style='text-align: center;'><td>540&deg;</td><td>" + hasil_10 + "</td><td>" + hasil_ris_10 + "</td><td>540&deg;</td><td>" + hasil_10lis + "</td><td>" + hasil_lis_10 + "</td></tr><tr style='text-align: center;'><td>720&deg;</td><td>" + hasil_11 + "</td><td>" + hasil_ris_11 + "</td><td>720&deg;</td><td>" + hasil_11lis + "</td><td>" + hasil_lis_11 + "</td></tr><tr style='text-align: center;'><td>900&deg;</td><td>" + hasil_12 + "</td><td>" + hasil_ris_12 + "</td><td>900&deg;</td><td>" + hasil_12lis + "</td><td>" + hasil_lis_12 + "</td></tr><tr style='text-align: center;'><td>1080&deg;</td><td>" + hasil_13 + "</td><td>" + hasil_ris_13 + "</td><td>1080&deg;</td><td>" + hasil_13lis + "</td><td>" + hasil_lis_13 + "</td></tr><tr style='text-align: center;'><td>1260&deg;</td><td>" + hasil_14 + "</td><td>" + hasil_ris_14 + "</td><td>1260&deg;</td><td>" + hasil_14lis + "</td><td>" + hasil_lis_14 + "</td></tr><tr style='text-align: center;'><td>1440&deg;</td><td>" + hasil_15 + "</td><td>" + hasil_ris_15 + "</td><td>1440&deg;</td><td>" + hasil_15lis + "</td><td>" + hasil_lis_15 + "</td></tr> </table>"


}
function hitung2() {
      var low=document.getElementById("low").value;
			var high=document.getElementById("high").value;
			var time=document.getElementById("time").value;
			var hasil;
			var a=document.getElementById("container");

      // Bearish Vector
			var price_change_point = parseInt(high) - parseInt(low);
			var vector_value_1 = Math.round(Math.sqrt(parseInt(price_change_point)**2 + parseInt(time)**2)); 
			var vector_value_2 = Math.sqrt(parseInt(vector_value_1)**2 + parseInt(vector_value_1)**2)*1.4; 
			var Hours_reversal_1 = Math.sin(45) * vector_value_2;
			var Hours_reversal_2 = Math.cos(45) * vector_value_2;
			var price_target_1 = parseInt(high) - vector_value_1;
			var price_target_2 = parseInt(high) - vector_value_2;


  // Akhir Bullis

  a.innerHTML = " <div class='table-responsive'>  <table border='1' cellspacing='0' style='margin-left:auto;margin-right:auto'> <tr> <th colspan='7' style='text-align: center;'> PRICE TIME VECTOR 1 HOURS TRADING SYSTEM</th> </tr> <tr><th>Price Time Radius Vector</th><th>Price Low</th><th>Price High</th><th>Time Change Hours</th><th>Price Change Points</th><th>Vector Value 1 </th><th>Vector Value 2</th></tr><tr><th>AB</th><th>"+low+"</th><th>"+high+"</th><th>"+time+"</th><th>"+price_change_point+"</th><th>"+vector_value_1+"</th><th>"+vector_value_2+"</th></tr><tr><th>BEARISH VECTOR</th><th></th><th></th><th>HOURS REVERSAL</th><th>HORUS REVERSAL</th><th>PRICE TARGET 1</th><th>PRICE TARGET 2</th></tr><tr><th>45</th><th></th><th></th><th>"+Hours_reversal_1+"</th><th>"+Hours_reversal_2+"</th><th>"+price_target_1+"</th><th>"+price_target_2+"</th></tr></table></div>"


}

function hitung3() {
  var low=document.getElementById("low2").value;
  var high=document.getElementById("high2").value;
  var time=document.getElementById("time2").value;
  var hasil;
  var a=document.getElementById("container");

  // Bearish Vector
  var price_change_point = parseInt(high) - parseInt(low);
  var vector_value_1 = Math.round(Math.sqrt(parseInt(price_change_point)**2 + parseInt(time)**2)); 
  var vector_value_2 = Math.sqrt(parseInt(vector_value_1)**2 + parseInt(vector_value_1)**2)*1.4; 
  var Hours_reversal_1 = Math.sin(45) * vector_value_2;
  var Hours_reversal_2 = Math.cos(45) * vector_value_2;
  var price_target_1 = parseInt(low) + vector_value_1;
  var price_target_2 = parseInt(low) + vector_value_2;


// Akhir Bullis

a.innerHTML = "<div class='table-responsive'> <table border='1' cellspacing='0' style='margin-left:auto;margin-right:auto'> <tr> <th colspan='7' style='text-align: center;'> PRICE TIME VECTOR 1 HOURS TRADING SYSTEM</th> </tr> <tr><th>Price Time Radius Vector</th><th>Price High</th><th>Price Low</th><th>Time Change Hours</th><th>Price Change Points</th><th>Vector Value 1 </th><th>Vector Value 2</th></tr><tr><th>AB</th><th>"+high+"</th><th>"+low+"</th><th>"+time+"</th><th>"+price_change_point+"</th><th>"+vector_value_1+"</th><th>"+vector_value_2+"</th></tr><tr><th>BULLISH VECTOR</th><th></th><th></th><th>HOURS REVERSAL</th><th>HORUS REVERSAL</th><th>PRICE TARGET 1</th><th>PRICE TARGET 2</th></tr><tr><th>45</th><th></th><th></th><th></th><th>"+Hours_reversal_2+"</th><th>"+price_target_1+"</th><th>"+price_target_2+"</th></tr></table></div>"


}