<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="jumbotron text-center">
    <img src="images/dwi-l-st.png" alt="Dwi Listyowati" width="200" class="rounded-circle">
    <h1 class="display-4">Dwi Listyowati</h1>
    <p class="lead">College Student | Programmer</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#cfd1d0" fill-opacity="1"
            d="M0,32L0,192L130.9,192L130.9,128L261.8,128L261.8,192L392.7,192L392.7,256L523.6,256L523.6,64L654.5,64L654.5,192L785.5,192L785.5,96L916.4,96L916.4,96L1047.3,96L1047.3,64L1178.2,64L1178.2,288L1309.1,288L1309.1,128L1440,128L1440,320L1309.1,320L1309.1,320L1178.2,320L1178.2,320L1047.3,320L1047.3,320L916.4,320L916.4,320L785.5,320L785.5,320L654.5,320L654.5,320L523.6,320L523.6,320L392.7,320L392.7,320L261.8,320L261.8,320L130.9,320L130.9,320L0,320L0,320Z">
        </path>
    </svg>
</section>
<section id="about">
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <h2>About Me</h2>
            </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
            <div class="col-md-4">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, praesentium iusto ullam
                    consectetur eaque in reiciendis recusandae voluptatem provident deleniti fuga odit ratione minus
                    eveniet numquam doloribus deserunt. Facilis, omnis?</p>
            </div>
            <div class="col-md-4">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium assumenda fugit ea quos esse
                    eos sit dolorum iste! Sed molestias consequatur qui. Quia dignissimos aut voluptatum cupiditate,
                    facilis tempore doloribus.</p>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#8a8a8a" fill-opacity="1"
            d="M0,224L0,192L160,192L160,224L320,224L320,288L480,288L480,288L640,288L640,64L800,64L800,64L960,64L960,96L1120,96L1120,96L1280,96L1280,128L1440,128L1440,320L1280,320L1280,320L1120,320L1120,320L960,320L960,320L800,320L800,320L640,320L640,320L480,320L480,320L320,320L320,320L160,320L160,320L0,320L0,320Z">
        </path>
    </svg>
</section>
<section id="projects">
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <h2>My Projects</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="images/bpsearch.png" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="images/bpsearch.png" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="images/bpsearch.png" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#cfd1d0" fill-opacity="1"
            d="M0,288L0,64L288,64L288,128L576,128L576,64L864,64L864,224L1152,224L1152,64L1440,64L1440,320L1152,320L1152,320L864,320L864,320L576,320L576,320L288,320L288,320L0,320L0,320Z">
        </path>
    </svg>
</section>
<section id="contact">
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <h2>Contact Me</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" aria-describedby="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="email">
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="pesan" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark">Kirim</button>
                </form>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#212529" fill-opacity="1"
            d="M0,32L0,224L360,224L360,256L720,256L720,224L1080,224L1080,192L1440,192L1440,320L1080,320L1080,320L720,320L720,320L360,320L360,320L0,320L0,320Z">
        </path>
    </svg>
</section>

<footer class="bg-dark text-white text-center pb-4">
    <p>Created by <a href="https://www.instagram.com/dw_l_st/" target="_blank" class="text-white fw-bold">Dwi
            Listyowati</a></p>
</footer>
<?= $this->endSection(); ?>