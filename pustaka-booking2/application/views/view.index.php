<section>
    <h1><?php echo $judul ?></h1>
    <p align='justfy'>Pada pengertian codeigtener di atas tadi dijelaskan  bahwa codeigneter menggunakan metode MVC.
    Apa itu MVC? Kita juga Harus mengetahui apa itu MVC sebelum masuk dan lebih jauh dalam belajar codeigneter.</p>
    <p>MVC adalah teknik atau konsep yang memisahkan komponen utama menjadi tiga komponen yaitu model, view, dan controller</p>
    <ol type="a">
    <li>Model</li>
    <p align='justify'> Model adalag kelas yang mempresentasikan atau memodelkan tipe data yang akan digunakan oleh aplikasi.
    Model juga daoat didefinisikan sebagai bagian penanganan yang berhubungan dengan pengolahan atau manipulasi database. 
    Seperti misalnya mengambil data dari database, menginput dan pengolahan database lainnya. semua intruksi atau fungsi yang
    behubung dengan pengolahan database di letakkan di dalam model. sebagai contoh, jika ingin membuat aplikasi untuk menghitung
    luas dan keliling lingkaran, maka daoat memodelkan objek lingkaran sebagai kelas model.</p>
    <p align='justify'>Sebagai catatan, semua model harus disimpan di dalam folder aplication model.</p>
    <li>View</li>
    <p align='justify'>View merupakan bagian yang menangani halaman user interface atau halaman yang muncul pada user(pada browser).
    Tampilan dari user interface di kumpulkan pada view untuk memisahkannya dengan controller dan model sehingga memudahkan web designer
    web designer dalam melakukan pengembangan tampilan halaman website.</p>
    <li>Controller</li>
    <p align='justify'>Controller merupaka kumpulan intruksi aksi yang menghubungkan model dan view, jadi unsur tidak akan berhubungan
    dengan model secara langsung, intinya data yang tersimpan di database (model) di ambil oleh controller dan kemudian controller
    pula yang menampilkannya ke view, jadi controller lah yang mengolah intruksi.</p>
    <p align='justify'>Dari penjelasan tentang model view dan controller  di atas dapat di simpulkan bahwa controller sebagai penghubung
    view dan model. Misalnya pada aplikasi yang menampilkan data dengan menggunakan metode konsep mvc, controller memanggil intruksi
    pada model yang mengambil data pada database, kemudian controller yang meneruskannya pada view untuk di tampilkan. jadi jelas sudah dan
    sangat mudah dalam pengembangan aplikasi dengan cara mvc ini karena web designer atau front-end developer tidak perlu lagi berhubungan
    dengan controller, dia hanya perlu berhubungan dengan view untuk mendesign tampilan aplikasi, karena back end developer yang menangani
    bagian controller dan modelnya. Jadi pembagian tugas pun menjadi mudah dan pengembangan aplikasi dapat di lakukan dengan cepat dan struktur.</p>

</section>