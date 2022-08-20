## Special API Pancake
Aplikasi API Pancake, tidak tahu ini untuk apa, tapi intinya untuk belajar, bagamaina membuat API entah Restfull API server atau Client. tapi lebih ke aplikasi tools yang di dapat dari openAPI.

# FOCUS;LEARNINGBYDOING;KEEPGOING;COMMIT;DONTGIVEIN

**Spesifikasi**
- [x] PHP Native
- [x] Template dengan bootstrap 3
- [x] Menggunakan php curl untuk mengambil data dari Sumber API
- [x] Menggunakan libraries guzzle untuk mengambil data dari sumber API

**Siapkan tools dibawah**
- [x] Webserver (Laragon)
- [x] Editor (Visual Studio Code)
- [x] API Tools (Postman / Thunderbolt dari extension VSCode)

**Siapkan**
- [x] Assets Source Code Bootstrap 3 (Download di situs resmi)
- [x] API Key dari newsapi.org (buat akun sendiri)

# FOCUS;LEARNINGBYDOING;KEEPGOING;COMMIT;DONTGIVEIN

**Credential API (readsevenone)**
- [x] **For Development Testing**
- [x] API Key : **910186c24d154fce9bc03bca9794e87f** (APIKey newsapi.org)
- [x] API Key : **da7b4d74** (APIKey omdbapi.com)
- [x] Email : hedmcw@arxxwalls.com
- [x] Password : helda123@@

**Credential API (ninjandri)**
- [x] **For Development Testing**
- [x] API Key : **47a4098ce41c45a0970940bcd28c399a** (Key newsapi.org)
- [x] Email : farkateyde@vusra.com
- [x] Password : ninjandri

# FOCUS;LEARNINGBYDOING;KEEPGOING;COMMIT;DONTGIVEIN

**Metode Get Data**
Kita ambil data dari API url menggunakan 2 metode :
- [x] Get data API menggunakan metode Curl
- [ ] Get data API menggunakan metode libraries guzzle php

**Project**
Task Project : Bagi tugas
- [x] Ambil data profile di Github API (readsevenone & ninjandri)
- [ ] Ambil data berita di news API (ninjandri)
- [ ] Ambil data film di omdb API (readsevenone)



**Cara main**
```php
newsAPI.org
BASE_URL : https://newsapi.org/v2/

# -----
# Menampilkan berita dengan kategori "Top headlines from TechCrunch right now"
# -----
[GET] https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=API_KEY

omdbapi.com
BASE_URL : http://www.omdbapi.com/

# -----
# Menampilkan data movie
# -----
[GET] http://www.omdbapi.com/?apikey=[yourkey]&[parameters]
```

