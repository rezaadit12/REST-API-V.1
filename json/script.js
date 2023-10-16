
//  mengubah object menjadi json

let dataSiswa = {

    nama : 'Muhamad Reza Aditya',
    nis : 12209186,
    email : "rezaadit@smkwikrama.sch.id"

} 
// JSON.stringify adalah kunci utama
let dataSiswaJson = JSON.stringify(dataSiswa);
console.log(dataSiswaJson);

// ==================================



// mengubah json menjadi object with jQuery
$.getJSON('coba.json', function(hasil){
    console.log(hasil);
});
// ========================================

