<!DOCTYPE html>
<html lang="en">
<!-- data-bs-theme="dark" -->

<header>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('assets/css/indexcss'); ?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Yeseva+One&display=swap" rel="stylesheet">

  <title>Home</title>
  <link rel="icon" type="image/x-icon" href="whiteLogo.png">
</header>
<style>
.icon-square {
    width: 3rem;
    height: 3rem;
    border-radius: .75rem;
}

.card {
    height: 250px;
    background: white;
    border-radius: 10px;
    transition: border-radius 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.shadow {
    box-shadow: inset 0 -3em 3em rgba(0, 0, 0, 0.1),
        0 0 0 2px rgb(190, 190, 190),
        0.3em 0.3em 1em rgba(0, 0, 0, 0.3);
}

.img-pin {
    background-color: #fff;
    width: 680px;
}

.container-btn {
    margin-top: 20px;
    justify-content: center;
}

button {
    background-color: #fff;
    padding: 5px 15px;
    transition: 0.3s;
}

button:hover {
    background-color: rgb(0, 0, 0);
    color: aliceblue;
}

button:active {
    background-color: rgb(56, 52, 52);
}

.t-title {
    text-align: center;
}

.testimonial {
    margin-top: 50px;
    display: flex;
    column-gap: 20px;
    height: max-content;
}

.text-box {
    width: 100%;
    text-align: justify;
    line-height: 30px;
    padding: 20px;
}

@media (max-width: 600px) {
    .header {
        text-align: center;
    }
    .img-pin{
        display: none;
        width: 1px;
    }

    .container{
        background-color: white; 
    }

    .album h2 {
        font-size: large;
    }

    .testimonial {
        display: grid;
        grid-template-columns: 1fr;
    }

    .row1 {
        justify-content: center;
    }

    .coming-soon {
        text-align: center;
    }
}

@media (max-width: 1023px) {
    .img-pin{
        display: none;
        width: 1px;
    }

    .testimonial {
        display: grid;
        grid-template-columns: 1fr;
    }

    .row1 {
        justify-content: center;
    }

    .coming-soon {
        text-align: center;
    }
}
    
</style>
<body>
  <section>
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Eleventh navbar example">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="<?= base_url('images/blackLogo.png'); ?>" alt="Alagods Logo" height="70px"></a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarsExample09">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="aboutUs.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutUs.php">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="product.php">Products & Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="meetTheTeam.php">Our Team</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>

  <section>
    <div class="container my-5">
      <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
        <div class="header col-lg-7 p-3 p-lg-5 pt-lg-3">
          <h1 class="headings display-4 fw-bold lh-1 text-body-emphasis">Elevate Your Style with Alagods Aesthetics'
            Signature
            Accessories</h1>
          <p class="lead mt-4">Our collection features beautifully designed button pins, keycaps, and ID laces, crafted
            to
            add a touch of uniqueness to your everyday look. Discover the perfect accessories to express your
            individuality and make a statement with Alagods Aesthetics.</p>
        </div>
        <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden">
          <img class="img-pin rounded-lg-1" src="bgPin.png">
        </div>
      </div>

      <div class="container mt-5">

        <h2 class="pb-2 border-bottom">Featured Designs</h2>
        <div class="row designs row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-3">
          <div class="col">
            <div class="card shadow-sm">
              <div class="card shadow"><img src="gising.png" alt="">
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <div class="card shadow"><img src="insomnia.png" alt="">
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <div class="card shadow"><img src="love.png" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="container-btn">
          <a class="viewProducts" href="product.html">
            <button>VIEW ALL DESIGNS</button>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="album py-5 bg-body-tertiary">
      <h2 class="t-title">WHAT THE PEOPLE THINKS ABOUT US</h2>
      <div class="container testimonial">
        <div class="text-box t1">"I'm beyond impressed with the button pins from Alagods Aesthetics! The designs are
          incredibly creative and the quality is top-notch. Every time I wear one of their pins, I receive compliments
          and inquiries about where I got them. Alagods Aesthetics has become my go-to for unique and stylish
          accessories!" <span><br><br>- Mark, Satisfied Customer</span></div>
        <div class="text-box t1">"Absolutely in love with the button pins from Alagods Aesthetics! The attention to
          detail and quality craftsmanship is unmatched. Each pin I've received is a little work of art, adding a touch
          of personality to my everyday outfits. I can't recommend Alagods Aesthetics enough for their unique and
          stunning button pins!" <span><br><br>- Sarah, Happy Customer</span></div>
        <div class="text-box t1">"I'm a collector of button pins, and Alagods Aesthetics has quickly become one of my
          favorite sources. Their pins are beautifully crafted, with vibrant colors and intricate details. I appreciate
          the variety of themes they offer, from pop culture references to artistic designs. Alagods Aesthetics has
          elevated my pin collection to a whole new level!" <span><br><br>- Emily, Button Pin Enthusiast</span></div>
      </div>
    </div>
  </section>

  <section>
    <div class="container px-4 py-5" id="hanging-icons">
      <h2 class="pb-2 border-bottom">Why us?</h2>
      <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="col d-flex align-items-start">
          <div
            class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-star-fill"
              viewBox="0 0 16 16">
              <path
                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
            </svg>
          </div>
          <div>
            <h3 class="fs-2 text-body-emphasis">Superior Quality</h3>
            <p>Exquisite craftsmanship and unwavering quality define our creations.</p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <div
            class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-brush-fill"
              viewBox="0 0 16 16">
              <path
                d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.118 8.118 0 0 1-3.078.132 3.659 3.659 0 0 1-.562-.135 1.382 1.382 0 0 1-.466-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04z" />
            </svg>
          </div>
          <div>
            <h3 class="fs-2 text-body-emphasis">Unique Designs</h3>
            <p>Unleash your individuality with our meticulously curated collection of distinctive designs.</p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <div
            class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-headset"
              viewBox="0 0 16 16">
              <path
                d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z" />
            </svg>
          </div>
          <div>
            <h3 class="fs-2 text-body-emphasis">Reliable Support</h3>
            <p>Reliable support and your satisfaction are our top priorities at Alagods Aesthetics.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container col-xxl-8 px-4 py-5">
      <div class="row row1 flex-lg-row align-items-center g-5 py-5 ml-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="customSample.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
            height="500" loading="lazy">
        </div>
        <div class=" coming-soon col-lg-6">
          <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Unlocking New Possibilities</h1>
          <p class="lead">Something incredible is coming soon to Alagods Aesthetics. Prepare to elevate your style with
            our exquisite new collection of button pins. Stay tuned for the big reveal and get ready to express yourself
            in a whole new way!</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-body-secondary">© 2023 Company, Inc</p>

        <a href="index.html"
          class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
          <img src="blackLogo.png" alt="Alagods Logo" height="60px">
        </a>

        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="index.html" class="nav-link px-2 text-body-secondary">Home</a></li>
          <li class="nav-item"><a href="aboutUs.html" class="nav-link px-2 text-body-secondary">About us</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Product & Services</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Our Team</a></li>
        </ul>
      </footer>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
