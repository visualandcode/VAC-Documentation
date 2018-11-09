## Pengenalan
> Secara singkat : Django adalah framework alias kerangka kerja untuk pengembangan website yang dibangun menggunakan bahasa Python.
>
> Berbeda dengan pengembangan web yang menggunakan bahasa PHP, yang bisa dipergunakan untuk membuat website dinamis tanpa framework. Bahasa Python tidak dapat digunakan langsung untuk membuat website dinamis dengan cara mencampur kode Python di dalam file HTML.
>
> Untuk itu, pengembangan website dinamis berbasis Python memerlukan framework atau kerangka kerja. Ada banyak framework Python di luar sana, Namun yang paling lengkap secara default adalah Django, sementara yang paling minimalist serta populer adalah Flask. 
> 
> Salah satu website besar yang menggunakan Django adalah Disqus, dan Instagram untuk backend server mereka.

## Phalcon vs Django
> Jika kamu pernah menggunakan framework pengembangan website lainnya seperti Laravel, Symfony dsb. Tentu kamu tidak asing dengan istilah MVC (Model-View-Controller). Dimana kamu memisahkan antara logika penyimpanan data, logika penyajian data, dan logika untuk menampilkan data.
> 
> Tidak berbeda jauh dengan framework lain, Django memiliki pola MVT (Model-View-Template), 
> 
> Secara singkat, Controller yang ada pada framework lain diganti dengan file urls.py atau biasa disebut dengan url routing. Sementara View pada framework lain diganti dengan Template pada Django. Template pada Django, selain dapat menghasilkan sebuah halaman web seperti HTML, juga bisa digunakan untuk menghasilkan JSON, XML, CSV, dll.
> 
> Model disini adalah data yang akan disimpan, digunakan, diproses oleh Django yang disimpan disuatu database. Sementara View adalah sebuah protokol atau tata cara yang ditulis oleh pemrogram untuk Django dalam merespon permintaan pengguna. 

## Django? Mengapa tidak PHP saja?
> Bagi kamu yang ingin mengenal Django, bisa diasumsikan bahwa kamu telah punya pengalaman dasar pembuatan website menggunakan bahasa lain seperti misalnya PHP, bukan begitu?
> 
> Karena sejatinya, sebuah framework seperti Django membutuhkan sedikit skill diatas pemula. Contohnya, jika menggunakan PHP kita bisa menyisipkan kode program ke dalam file HTML, sementara di Django kamu harus memisahkan logika program dengan file HTML. 
> 
> Selain itu, biaya setelah pembuatan website juga lebih besar daripada PHP. Jika kamu menggunakan PHP, maka kamu bisa menemukan shared hosting murah yang dapat menjalankan website berbasis PHP kamu itu. Beda halnya dengan website berbasis Django, yang saat ini (2018) minimal membutuhkan VPS karena belum ada shared hosting untuk website berbasis Django.

## Kalau Lebih Repot Daripada PHP, Mengapa Pakai Django?
> Bagi kamu yang telah memiliki pengalaman pengembangan website, tentunya pernah mengalami proses penulisan kode yang berulang-ulang. Hal ini adalah hal yang paling melelahkan dalam suatu proses pengembangan website.
> 
> Misalnya, kamu membuat website A dengan fitur login, dua bulan kemudian, kamu membuat website B yang juga memerlukan fitur login.
> 
> Jika kamu menggunakan PHP murni tanpa framework, tentunya kamu harus menulis kode yang menangani proses login tersebut berulang-ulang untuk setiap website yang berbeda.
> 
> Django mengajak penggunanya untuk memfokuskan diri pada fungsi dari sebuah website yang akan dibangun oleh mereka, sementara bagian yang melelahkan seperti penulisan kode yang berulang-ulang diambil alih oleh Django untuk mempermudah pekerjaan seorang pemrogram. 
>
> Dengan kata lain, Django yang akan menyediakan fitur login tersebut. Sementara kamu sebagai pemrogram web cukup berfokus pada logika pemrograman lainnya yang lebih penting

## Ok Kita Butuh Framework. Kenapa Harus Django?
> Django adalah salah satu web framework modern yang menjanjikan di masa depan, beberapa situs besar seperti Instagram, Disqus, Pinterest, Bit Bucket, sampai NASA sekalipun menggunakan Django pada server mereka. Django adalah sebuah kerangka kerja (framework) pembuatan website untuk bahasa pemrograman Python. 
>
>Python itu sendiri pada saat ini (2018) menjadi bahasa dengan peningkatan pengguna yang lebih pesat bahkan mengalahkan PHP yang masih populer di Indonesia.
> Mengapa?
Karena bahasa Python sangat multifungsi. Selain untuk pengembangan website, kamu juga bisa menggunakan bahasa Python untuk membuat kecerdasan buatan (machine learning, deep learning), data analysis, computer vision, Internet of Thing, dll

## MVC, Framework, Ribet? Kenapa Tidak Pakai PHP Murni Saja?
> Jika kamu pernah membangun sebuah aplikasi web sebelumnya, mungkin kamu pernah menjalani langkah-langkah klasik ini. Berikut adalah tahapan klasik yang dialami oleh seorang pengembang web.

1. Menulis sebuah aplikasi web dari 0
2. Menulis aplikasi web lainnya dari 0
3. Menyadari bahwa aplikasi yang pertama ternyata memiliki beberapa fungsi yang sama dengan aplikasi ke dua. (Contoh fitur login)
4. Memfaktorkan kode pemrograman pada kedua aplikasi tersebut sehingga kedua aplikasi tersebut dapat berjalan normal dengan kode yang sama pada beberapa fungsinya.
5. Mengulangi langkah 2-4 beberapa kali.
6. Pada akhirnya kamu menyadari bahwa yang kamu buat bukan hanya sebuah aplikasi website, tapi sebuah framework website!
Langkah-langkah yang disebutkan diatas adalah langkah yang dijalani oleh pencipta Django sebelumnya.

> Banyak dari pengembang web yang tidak sadar bahwa mereka lebih banyak menghabiskan waktu untuk membuat website karena menulis ulang kode yang seharusnya bisa ditulis sekali lantas dipakai berulang-ulang untuk beberapa website yang berbeda.


## Singkat Saja, Apa Keunggulan Django ?
> Hal yang menurut saya pribadi membuat Django lebih unggul daripada framework Python lainnya adalah karena Django telah menyediakan segala sesuatunya sehingga siap pakai. Mulai dari manajemen database menggunakan ORM (Object Relational Mapping), manajemen user, dsb.

> Selain itu Django lebih aman karena secara default telah mencegah celah keamanan seperti XSS, CSRF, SQL Injection dll. Bisa dikatakan, walaupun Django lebih sulit dipelajari untuk pemula dibandingkan dengan PHP, namun Django lebih aman dan dapat mempercepat pengembangan website yang lebih kompleks.

> Dan karena Django dibuat berdasarkan pengalaman sehari-hari pemrogram website untuk kantor berita, framework Django hampir setiap hari mendapatkan pembaruan fitur-fitur yang ditujukan untuk membuat sebuah framework yang lebih cepat, lebih tahan terhadap lonjakan pengguna yang tinggi, serta kemudahan dalam perawatan  sebuah website.






