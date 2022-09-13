<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="./"><?= renderImg("logo.png", "logo") ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Why Lloyds Pools?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Plunge Pools</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Custom Pools</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Stree-Free Process</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                </ul>
                <a href="#form" class="btn btn-primary text-white">
                    Contact Us
                </a>
            </div>
        </div>
    </nav>
    <div class="banner">
        <div class="text-center"><?= renderImg("banner.png", "lib", "w-100") ?></div>
        <div class="banner-container">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-md-9 col-lg-7 col-xl-6">
                        <h1 class="fs-1 fw-600 line-height-1 text-center text-md-start">Get Your Dream Pool This <span class="gradient-text fw-800">Summer</span></h1>
                        <div class="row pt-5 pt-md-4 pt-lg-6">
                            <div class="col-md-9 col-xl-8 col-xxl-7">
                                <div class="row">
                                    <div class="col">
                                        <a href="#form" class="btn btn-white text-primary px-4 btn-1">
                                            Get Started
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="#form" class="btn btn-bordered border-white text-white px-4 btn-2">
                                            Enquire
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <?= renderImg("banner-posters.png", "lib", "banner-poster") ?>
    </div>
</header>

<section class="about-us">
    <div class="about-us-inner">
        <div class="why-us">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="row justify-content-end">
                            <div class="col-lg-5 text-center text-white">
                                <h2 class="fs-2 fw-600">Why Choose Lloyds Pools?</h2>
                                <div class="description">
                                    <p>Lloyds Pools are Sydney’s leading specialists in Custom, Plunge and Standard pool design and development.</p>
                                    <p>Our commitment is to provide a tailored and ‘stree-free’ process that meets quality solutions every step of the way. Our expert team of pool builders master Australian outdoor living by creating unique, affordable and functional pool designs and landscapes. Let us craft an inspiring and modern addition to your home and lifestyle - it's your time to enjoy a lifetime of luxury and entertainment.</p>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-7 col-lg-9 pt-5">
                                        <div class="row">
                                            <div class="col">
                                                <a href="#form" class="btn btn-primary text-white">
                                                    See Our Work
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="#form" class="btn btn-bordered border-white text-white">
                                                    Contact Us
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?= renderImg('why-us.png', 'background', 'd-lg-none pt-5') ?>
        </div>
        <div class="pool-types">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="row gx-md-2 gx-xxl-5 gy-4 gy-md-0 h-100">
                            <div class="col-md-6 h-inherit">
                                <div class="pool-type-card">
                                    <div>
                                        <div class="fs-2 fw-600 line-height-1">Plunge Pools</div>
                                        <div class="description">
                                            <p>At Lloyds Pools, we specialise in designing and installing Plunge Pools that suit your backyard, surrounding architecture and budget.</p>
                                            <p>Australian backyards are getting smaller and Plunge Pools have become the ideal solution for homeowners wanting to elevate their outdoor area with limited space. Its compact design provides the perfect balance of luxury, size and comfort.</p>
                                            <div>Our Plunge Pools are the most affordable pool to operate on the market, saving you time and money on maintenance costs including heating, filtration and cleaning requirements. Relax and recharge with our Plunge Pool custom-design range.</div>
                                        </div>
                                    </div>
                                    <a href="#form" class="btn btn-primary text-white px-5">
                                        Enquire
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 h-inherit">
                                <div class="pool-type-card">
                                    <div>
                                        <div class="fs-2 fw-600 line-height-1">Custom Pools</div>
                                        <div class="description">
                                            <p>We understand that every backyard may differ in terms of shape and style. Our custom-built pool designs are personalised to meet your needs and desires by creating an outdoor area that flows and works aesthetically.</p>
                                            <p>We work closely with you from initial consultation to design development, right down to the completed product.</p>
                                            <p>Our experts at Lloyds Pools will advise you on a pool style that best compliments your space, whilst considering any budgetary constraints or construction challenges.</p>
                                            <div>We help people use their homes to their full potential and create memories that will last.</div>
                                        </div>
                                    </div>
                                    <a href="#form" class="btn btn-primary text-white px-5">
                                        Enquire
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="stress-free-process" id="stress-free-process">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <div class="fs-2 text-center text-white fw-600 line-height-1">The Personalised
                            “Stress-Free” Process</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="deck">
    <div class="container-fluid">
        <div class="processes py-4 px-lg-4">
            <div class="row gx-2 gy-4 gy-lg-0 h-100">
                <div class="col-md-6 col-lg-4 col-xl-2 h-inherit">
                    <div class="card">
                        <div class="position-relative w-100 d-flex justify-content-center"><?= renderImg("cushion-1.png", "lib", "cushion") ?></div>
                        <div class="title">“Can we put a pool in our home?”</div>
                        <div class="description">Just ask the question, Let Lloyds will do the leg work to determine the best way forward to have your pool proposal approved.</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-2 h-inherit">
                    <div class="card">
                        <div class="position-relative w-100 d-flex justify-content-center"><?= renderImg("cushion-2.png", "lib", "cushion") ?></div>
                        <div class="title">Initial On-Site<br> quotation</div>
                        <div class="description">We give an initial quote for the design aspect of the pool.</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-2 h-inherit">
                    <div class="card">
                        <div class="position-relative w-100 d-flex justify-content-center"><?= renderImg("cushion-3.png", "lib", "cushion") ?></div>
                        <div class="title">Let’s Design – Personalised</div>
                        <div class="description">Interactive process with Lloyds Design Team to finalise the pool of your dreams.</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-2 h-inherit">
                    <div class="card">
                        <div class="position-relative w-100 d-flex justify-content-center"><?= renderImg("cushion-4.png", "lib", "cushion") ?></div>
                        <div class="title">Council/Certifier Lodgement & Approval</div>
                        <div class="description">Lloyds will handle all lodges and pre-approvals so you don’t have to.</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-2 h-inherit">
                    <div class="card">
                        <div class="position-relative w-100 d-flex justify-content-center"><?= renderImg("cushion-5.png", "lib", "cushion") ?></div>
                        <div class="title">Construction Quotation based on your personalised design.</div>
                        <div class="description">Not happy with the price? No Problem, you own the plans and approval - your free to go to another contractor of your choice.</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-2 h-inherit">
                    <div class="card">
                        <div class="position-relative w-100 d-flex justify-content-center"><?= renderImg("cushion-6.png", "lib", "cushion") ?></div>
                        <div class="title">Happy with the price? Well its Time to install</div>
                        <div class="description">We will begin building within days of acceptance.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center pt-4 pt-md-5 pt-lg-7">
            <div class="col col-md-4 col-lg-3 col-xl-2 col-xxl-auto">
                <a href="#form" class="btn btn-primary text-white px-4">
                    Get Started
                </a>
            </div>
            <div class="col col-md-4 col-lg-3 col-xl-2 col-xxl-auto">
                <a href="#form" class="btn btn-bordered border-white text-white px-4">
                    Learn More
                </a>
            </div>
        </div>
    </div>

    <div class="faq">
        <div class="container">
            <div class="text-center fs-2 fw-600 line-height-1 text-white pb-5 pb-md-8">Frequently Asked Questions</div>
            <div class="row gx-xxl-5 gy-4 gy-md-6 gy-lg-0">
                <div class="col-md-6 col-lg-3 pt-lg-8">
                    <div class="faq-card pb-8">
                        <div class="title">Does Size play a role in my decision?</div>
                        <div class="description">The size of the pool isn’t only dependent on the amount of space available in the area. It also depends on the zoning restrictions and your budget. Call up your contractor to seek guidance and comply with the zoning accommodation.</div>
                        <?= renderImg("faq-1.png", "lib", "faq-img faq-img-1") ?>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="faq-card pt-8">
                        <div class="title">What is the difference between an above and below ground pool?</div>
                        <div class="description">Soil removal and excavation are required for pools that are built above the ground whereas in-ground pools provide more permanent home. Hence, you ought to decide the kind of construction you would consider in building your pool.</div>
                        <?= renderImg("faq-2.png", "lib", "faq-img faq-img-2") ?>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 pt-mt-5">
                    <div class="faq-card pb-8">
                        <div class="title">What is needed to maintain my pool?</div>
                        <div class="description">Every pool comes with the responsibility of maintenance. You need to ensure that your pool is energy-efficient with substantial filtration and sound hydraulics. Other kits include usage of adequate skimmers, variable speed pumps, pool pump enclosures, larger pipes, sanitizers, chlorinators and more.</div>
                        <?= renderImg("faq-3.png", "lib", "faq-img faq-img-3") ?>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="faq-card pt-8">
                        <div class="title">What other pool features are available?</div>
                        <div class="description">Lightning and water features are always meant to maximize the enjoyment of a pool. Depending on your usage, you can go for shallow-beach style entries, underwater benches, a swim-up bar and play areas for basketball or volleyball. Another convenient way to protect an unsupervised pool is to opt for an automatic pool safety cover.</div>
                        <?= renderImg("faq-4.png", "lib", "faq-img faq-img-4") ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="form">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <?= renderImg("table.png", "lib") ?>
            </div>
            <div class="col-lg-6">
                <div class="form-card">
                    <div class="fs-2 fw-600 line-height-1">Contact Us Today</div>
                    <form action="./src/form" method="POST">
                        <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
                        <div class="row gx-xxl-5 gy-4 justify-content-lg-between">
                            <div class="col-12 col-md-6">
                                <label for="firstName">First Name</label>
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="E.g. John" id="firstName" name="firstName" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="lastName">Last Name</label>
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="E.g. Smith" id="lastName" name="lastName" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="email">Email Address</label>
                                <div class="input-group">
                                    <input class="form-control" type="email" id="email" placeholder="E.g. johnsmith@cliftons.com" name="email" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="phone">Phone Number</label>
                                <div class="input-group">
                                    <input class="form-control" type="tel" placeholder="E.g. 0400000000" id="phone" name="phone" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="postcode">Postcode</label>
                                <div class="input-group">
                                    <input class="form-control" type="tel" placeholder="E.g. 2000" id="postcode" name="postcode" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="pooltype">Pool Type</label>
                                <div class="input-group">
                                    <select name="service" id="service" class="form-control">
                                        <option selected disabled>Select your prefered type</option>
                                        <option>Fence spray painting</option>
                                        <option>Timber staining</option>
                                        <option>Renovations/Extensions</option>
                                        <option>Pressure washing</option>
                                        <option>Minor rot repairs</option>
                                        <option>Period homes</option>
                                        <option>Commercial & strata re-paints</option>
                                        <option>Interior & exterior painting</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 pt-4 pt-lg-5">
                                <button type="submit" class="btn btn-white text-primary fw-700 fs-4 px-4 px-xl-5">
                                    Enquire
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="text-center text-dark fs-4 letter-spacing-n01 pt-4">Need more than just a pool? <span class="fw-600">Visit Lloyd’s Building & Development <svg width="17" height="11" viewBox="0 0 17 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 5.5H15M15 5.5L10.68 1M15 5.5L10.68 10" stroke="#131518" stroke-width="2" />
                        </svg>
                    </span></div>
            </div>
        </div>
    </div>
</section>

<section class="gallery">
    <div class="container-fluid">
        <div class="gallery-slider px-xxl-5">
            <div><?= renderImg('gallery-1.jpg', 'lib') ?></div>
            <div><?= renderImg('gallery-2.jpg', 'lib') ?></div>
            <div><?= renderImg('gallery-3.jpg', 'lib') ?></div>
            <div><?= renderImg('gallery-4.jpg', 'lib') ?></div>
            <div><?= renderImg('gallery-1.jpg', 'lib') ?></div>
            <div><?= renderImg('gallery-2.jpg', 'lib') ?></div>
            <div><?= renderImg('gallery-3.jpg', 'lib') ?></div>
            <div><?= renderImg('gallery-4.jpg', 'lib') ?></div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>