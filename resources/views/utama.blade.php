<!DOCTYPE html>
<html lang="en">
<head>

<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/')}}">BERANDA</a>
    <a class="navbar-brand" aria-current="page" href="{{url('code')}}">CODE</a>
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">

        <a class="nav-link active" aria-current="page" href="{{url('home')}}">TABEL KOMPONEN</a>
          
        </li>
    
        <li class="nav-item">

        
          
          </li>
      
        </li>
      </ul>
    </div>
  </div>
</nav>



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project UAS</title>
    

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
  
</head>
  
<body>
                <mb-9><center><h1>PROJECT UAS WEB PROGRAMING</h></center></mb-9>
    <h3><center>Bel Otomatis Menggunakan Sensor Avoid Dance Obstacle dan Buzzer Passive berbasis Arduino</center></h3>
    <div class="container text-center"></div>
    <tr>
            <center><img src="img/Picture1.png" width="500px" ></center>

            </tr> 
    <h3><center>Penggunaan bel pada rumah sangatlah penting bagi pemilik rumah dan juga tamu yang akan datang di rumah tersebut, dikarenakan pada suatu rumah yang besar jikalau tidak di pasangkan bel rumah maka tamu atau driver online akan kesusahan untuk memberitahu pemilik rumah bahwa mereka sudah di depan rumah. 
Penggunaan bel tombol juga sekarang jarang di ketahui oleh tamu karena bentuk dari bel tombol hampir sama dengan saklar lampu, maka dari itu perlu adanya sebuah system kontrol otomatis yang dimana ketika tamu atau driver online berdiri di depan pintu masuk maka pemilik rumah akan mengetahui bahwa ada tamu ataupun driver online di depan pintu rumah dan juga itu membantu tamu atau driver online agar lebih mudah memberitahu kepada pemilik rumah bahwa mereka sudah ada di depan rumah.
Maka dari itu ide yang di dapat adalah bel dengan system otomatis yang dimana ketika ada yang berdiri di depan pintu masuk maka pemilik rumah akan tahu tanpa tamu harus menekan tombol bel karena sensor yang saya dapatkan di kampus sensor halangan dan juga tranduser suara yang bisa di buatkan nada. 
Dalam bel otomatis ini sistem kontrol yang di gunakan adalah Arduino UNO yang di rangkaikan dengan sensor Avoid Dance Obstacle digunakan sebagai alat pendeteksi dimana ketika ada yang berdiri di depan pintu masuk maka sensor akan mengirimkan sinyal ke tranduser suara (Buzzer Passive). Buzzer passive digunakan untuk memberikan nada suara atau notifikasi kepada pemilik rumah untuk membukakan pintu rumah untuk tamu yang akan datang. 
</center></h3>
    <div class="container text-center"></div>
    <div class ="row">
        @stack('before-content')
        @yield('content')
        @stack('after-content')
    </div>

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/88y8ggw1yrpr2u8d18th02iceyad2cc267qn0cyqunvmiu5w/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
</body>

</html>