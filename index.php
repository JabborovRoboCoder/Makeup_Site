 <!-- Bismillahir rohmanir rohim  -->

    <?php 
        require "include/boshi.php";
        require "baza.php";

        $buyruq=$pdo->prepare("SELECT * FROM images ORDER BY id DESC");
        $buyruq->execute();

        $img_olish=$buyruq->fetchAll();
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           $ism=$_POST['ism'];
           $email=$_POST['email'];
           $raqam=$_POST['raqam'];
           $xabar=$_POST['xabar'];
           $buyruq= $pdo->prepare("INSERT INTO kontakt (ism,email,raqam,xabar) VALUES (?,?,?,?)");
           $buyruq->execute([$ism,$email,$raqam,$xabar]);
           
        }
    ?>
    
    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4 " src="./rasmlar/emblema.jpg" alt="" width="112" height="97">
        <h1 class="display-5 fw-bold text-body-emphasis">Xush kelibsiz</h1>
        <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Siz hozirda professional makiyaj xizmatlari joylashgan
to'g'ri manzildasiz.Agar xizmatimiz  sizga yoqmasa,bizga xizmat haqqini to'lashingiz shart emas </p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
           <a href="namuna.php"> <button type="button" class="btn btn-primary btn-lg px-4 gap-3" >Bog'lanish</button></a>
        </div>
        </div>
    </div>
 <!-- ++++++++++++ -->
    <div class="container">
        <hr class="featurette-divider">
        <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-body-secondary">It’ll blow your mind.</span></h2>
            <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
        </div>
        <div class="col-md-5">
            <img src="/giflar/gif1.gif" alt="takoy qizni rasmi" width="500" height="500">
        </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-body-secondary">See for yourself.</span></h2>
            <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="/giflar/gif2.gif" alt="takoy qizni rasmi" width="500" height="500">
        </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span class="text-body-secondary">Checkmate.</span></h2>
            <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better Ko'proq of what this would look like with some actual content. Your content.</p>
        </div>
        <div class="col-md-5">
            <img src="/giflar/gif3.gif" alt="takoy qizni rasmi" width="500" height="500">
        </div>
        </div>
        <hr class="featurette-divider">
    </div> 
     <!-- +++++++++ -->
     <div class="container">
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="display-4 fw-normal">Namunalar</h1>
            <p class="fs-5 text-body-secondary">Bizning eng yaxshi ishlaarimizdan namunalar</p>
            </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php foreach($img_olish as $olish): ?>
                        <div class="col" >
                            <div class="card shadow-sm">
                                <?php echo "<img src='data:" . $olish['mime_type'] . ";base64," . base64_encode($olish['image_data']) . "' width=100% height=350>";?>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $olish['malumot'] ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Bog'lanish</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
        </div>
        <hr class="featurette-divider">
    </div> <
     <!-- ++++++++++++++ -->
    <div class="container">
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Pricing</h1>
        <p class="fs-5 text-body-secondary">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Free</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$0<small class="text-body-secondary fw-light">/mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                <li>10 users included</li>
                <li>2 GB of storage</li>
                <li>Email support</li>
                <li>Help center access</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Free</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$0<small class="text-body-secondary fw-light">/mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                <li>10 users included</li>
                <li>2 GB of storage</li>
                <li>Email support</li>
                <li>Help center access</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Free</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$0<small class="text-body-secondary fw-light">/mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                <li>10 users included</li>
                <li>2 GB of storage</li>
                <li>Email support</li>
                <li>Help center access</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
            </div>
            </div>
        </div>
        </div>
        <hr class="featurette-divider">
    </div>
    
    <!-- ++++++++++++ -->
    <div class="container">
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h2 class="display-4 fw-normal">Pricing</h2>
        <p class="fs-5 text-body-secondary">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./rasmlar/mutaxasis1.jpg" class="d-block w-100" alt="mutaxasis">
                        </div>
                        <div class="carousel-item">
                            <img src="./rasmlar/mutaxasis2.jpg" class="d-block w-100" alt="mutaxasis">
                        </div>
                        <div class="carousel-item">
                            <img src="./rasmlar/mutaxasis3.jpg" class="d-block w-100" alt="mutaxasis">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./rasmlar/mutaxasis4.jpg" class="d-block w-100" alt="mutaxasis">
                        </div>
                        <div class="carousel-item">
                            <img src="./rasmlar/mutaxasis5.jpg" class="d-block w-100" alt="mutaxasis">
                        </div>
                        <div class="carousel-item">
                            <img src="./rasmlar/mutaxasis6.jpg" class="d-block w-100" alt="mutaxasis">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>   <br><br>
    <hr> 
    <!-- ++++++++++++++ -->
    <div class="container mb-4" >

        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>

        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
            a matter of hours to help you.</p>

        <div class="row">

            <div class="col-md-9 mb-md-0 mb-5">
                <form  method="post" action="">

                    <div class="row">

                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" name="ism" class="form-control">
                                <label class="">Your name</label>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" name="email" placeholder="nomi@gmail.com" pattern=".+@gmail\.com" class="form-control">
                                <label class="">Your email</label>
                            </div>
                        </div>
                        

                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <!-- <input type="number" name="mavzu" "> -->
                                <input type="tel"  name="raqam" placeholder="90-123-45-67" pattern="[0-9]{2}[0-9]{3}[0-9]{2}[0-9]{2}" class="form-control" >
                                <label class="">Subject</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">

                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" name="xabar" rows="2" class="form-control md-textarea" placeholder="Xabaringiz 300 ta  belgidan oshmasligi kerak " maxlength="300" ></textarea>
                                <label>Your message</label>
                            </div>

                        </div>
                    </div>
                    <div class="text-center text-md-left">
                        <input class="btn btn-primary" type="submit">
                     </div>
                     <div class="status"></div>
                </form>
            </div>

            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>San Francisco, CA 94126, USA</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+ 01 234 567 89</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>contact@mdbootstrap.com</p>
                    </li>
                </ul>
            </div>

        </div>
        <hr class="featurette-divider">
    </div>
<br>
    <?php require "include/oxiri.php" ?>   