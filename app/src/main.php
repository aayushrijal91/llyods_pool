<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<header>
    <nav class="navbar navbar-expand-xl navbar-light fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <svg width="36" height="23" viewBox="0 0 36 23" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <rect y="0.906982" width="36" height="5.02326" rx="2.51163" fill="currentColor" />
                    <rect y="9.27905" width="36" height="5.02326" rx="2.51163" fill="currentColor" />
                    <rect y="17.6514" width="36" height="5.02326" rx="2.51163" fill="currentColor" />
                </svg>
            </button>
            <a class="navbar-brand" href="./">
                <?= renderImg("logo.png", "logo", "d-none d-lg-block") ?>
                <?= renderImg("logo-grey.png", "logo", "logo-before-scroll d-lg-none") ?>
                <?= renderImg("logo-sm.png", "logo", "logo-after-scroll") ?>
            </a>
            <a href="tel:<?= $phone_number ?>" class="callIcon">
                <svg width="36" height="37" viewBox="0 0 36 37" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4039 0.563445C15.4653 0.686063 14.8076 1.24805 14.6314 2.07807C14.4509 2.92813 14.9175 3.83319 15.7094 4.16907C15.8596 4.23281 16.4184 4.25985 17.6471 4.26274C19.5489 4.26726 20.0415 4.33764 21.406 4.80009C25.7887 6.28556 30.2081 10.7178 31.7033 15.1273C32.2042 16.6045 32.326 17.6778 32.237 19.8312C32.2129 20.4159 32.2303 20.5498 32.3731 20.8756C32.8741 22.0189 34.3952 22.3044 35.3243 21.4293C35.8599 20.9249 35.997 20.3571 36 18.6312C36.0016 17.7203 35.9651 17.093 35.8794 16.5577C35.292 12.886 33.509 9.51104 30.547 6.46387C27.2497 3.07165 23.4838 1.05067 19.5517 0.563092C18.8721 0.478805 17.0504 0.479017 16.4039 0.563445ZM4.96592 4.02146C4.52187 4.11373 3.73067 4.50805 3.23539 4.88395C3.00283 5.06043 2.31643 5.71066 1.71015 6.32876C0.545797 7.51569 0.336423 7.81783 0.117745 8.62582C-0.0446238 9.22578 -0.0378585 10.8744 0.130571 11.7485C1.06293 16.5875 4.50418 22.186 9.65595 27.2449C12.9343 30.4642 16.0385 32.751 19.4702 34.4745C23.3373 36.4168 27.0183 37.0251 28.8527 36.025C29.342 35.7583 31.4866 33.5672 31.9382 32.8726C32.45 32.0856 32.6114 31.5517 32.5741 30.7699C32.5474 30.2121 32.5137 30.0851 32.2528 29.5598C31.6994 28.4457 30.2351 27.0751 28.5351 26.0802C26.6024 24.949 25.2545 24.9141 23.9402 25.9611C23.7385 26.1217 23.2118 26.6003 22.7697 27.0248C21.8097 27.9466 21.6428 28.0223 20.8644 27.89C19.1947 27.6062 16.3471 25.4191 12.7207 21.6353C10.2404 19.0472 8.84453 17.0248 8.61557 15.6872C8.48265 14.9106 8.54953 14.7694 9.55328 13.7073C10.7627 12.4276 11.0989 11.8925 11.2397 11.0233C11.3661 10.2423 11.1055 9.28847 10.4539 8.1477C9.6926 6.81493 8.11845 5.02634 7.25805 4.51652C6.50385 4.06968 5.63612 3.88225 4.96592 4.02146ZM17.6467 7.46847C17.0801 7.65568 16.7163 7.98153 16.4649 8.52699C16.1581 9.19274 16.3279 10.1097 16.8478 10.5936C17.1536 10.8781 17.544 11.0449 18.313 11.2192C20.1671 11.6396 21.3787 12.2883 22.6919 13.5635C24.15 14.9795 24.8781 16.3052 25.3304 18.3675C25.4362 18.8499 25.5486 19.1564 25.7047 19.3888C26.6377 20.7777 28.7204 20.3607 29.0704 18.7148C29.1453 18.3631 29.1368 18.2192 29.0023 17.5505C28.0396 12.7651 24.4004 8.91977 19.6319 7.64911C18.9154 7.45823 17.9449 7.36985 17.6467 7.46847Z" fill="currentColor" />
                </svg>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#why-us">Why Lloyds Pools?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#plunge-pools">Plunge Pools</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#custom-pools">Custom Pools</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#process">Stree-Free Process</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">FAQ</a>
                    </li>
                </ul>
                <a href="#form" class="btn btn-primary text-white">
                    Contact Us
                </a>
            </div>
        </div>
    </nav>
    <div class="banner">
        <div class="text-center"><?= renderImg("banner.png", "lib", "w-100 d-none d-md-block") ?></div>
        <div class="text-center"><?= renderImg("banner-sm.png", "lib", "w-100 d-md-none") ?></div>
        <div class="banner-container">
            <div class="container h-100">
                <div class="row justify-content-center justify-content-md-start h-100 align-items-center px-md-5 px-xxl-0">
                    <div class="col-8 col-md-10 col-xl-7 col-xxl-6">
                        <h1 class="fs-1 fw-600 line-height-1 text-center text-md-start">Get Your Dream Pool This <span class="gradient-text fw-800">Summer</span></h1>
                        <div class="row pt-5 pt-md-4 pt-xl-6">
                            <div class="col-md-9 col-lg-7 col-xl-8 col-xxl-7">
                                <div class="row justify-content-center">
                                    <div class="col-8 col-md">
                                        <a href="#form" class="btn btn-white text-primary px-4 btn-1">
                                            Get Started
                                        </a>
                                    </div>
                                    <div class="col d-none d-md-block">
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
    <div class="container d-none d-md-block">
        <?= renderImg("banner-posters.png", "lib", "banner-poster") ?>
    </div>
    <div class="poster-slider d-md-none py-4">
        <div class="mx-2"><?= renderImg("poster-1.png", 'lib', 'w-100') ?></div>
        <div class="mx-2"><?= renderImg("poster-2.png", 'lib', 'w-100') ?></div>
        <div class="mx-2"><?= renderImg("poster-3.png", 'lib', 'w-100') ?></div>
        <div class="mx-2"><?= renderImg("poster-4.png", 'lib', 'w-100') ?></div>
        <div class="mx-2"><?= renderImg("poster-5.png", 'lib', 'w-100') ?></div>
    </div>
</header>

<section class="about-us" id="why-us">
    <div class="about-us-inner">
        <div class="why-us">
            <div class="container">
                <?= renderImg('why-us-pool-sm.png', 'background', 'd-md-none why-us-pool-sm') ?>
                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <div class="row justify-content-end">
                            <div class="col-xl-6 col-xxl-5 text-center text-white">
                                <h2 class="fs-2 fw-600">Why Choose Lloyds Pools?</h2>
                                <div class="description">
                                    <p>Lloyds Pools are Sydney’s leading specialists in Custom, Plunge and Standard pool design and development.</p>
                                    <p>Our commitment is to provide a tailored and ‘stree-free’ process that meets quality solutions every step of the way. Our expert team of pool builders master Australian outdoor living by creating unique, affordable and functional pool designs and landscapes. Let us craft an inspiring and modern addition to your home and lifestyle - it's your time to enjoy a lifetime of luxury and entertainment.</p>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-7 col-lg-5 col-xl-9 pt-5">
                                        <div class="row">
                                            <div class="col">
                                                <a href="#gallery" class="btn btn-primary text-white">
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
            <?= renderImg('why-us.png', 'background', 'd-none d-md-block d-xl-none pt-5') ?>
        </div>

        <?= renderImg("poolside-bench.png", 'lib', 'w-100 d-md-none py-4') ?>

        <div class="container d-lg-none">
            <div class="pool-types-tab-wrapper">
                <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="plunge_pools-tab" data-bs-toggle="pill" data-bs-target="#plunge_pools" type="button" role="tab" aria-controls="plunge_pools" aria-selected="true">Plunge Pools</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="custom_pools-tab" data-bs-toggle="pill" data-bs-target="#custom_pools" type="button" role="tab" aria-controls="custom_pools" aria-selected="false">Custom Pools</button>
                    </li>
                </ul>
                <div class="tab-content pt-4" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="plunge_pools" role="tabpanel" aria-labelledby="plunge_pools-tab">
                        <div class="heading">Plunge Pools</div>
                        <div class="description">
                            <p>At Lloyds Pools, we specialise in designing and installing Plunge Pools that suit your backyard, surrounding architecture and budget.</p>
                            <p>Australian backyards are getting smaller and Plunge Pools have become the ideal solution for homeowners wanting to elevate their outdoor area with limited space. Its compact design provides the perfect balance of luxury, size and comfort.</p>
                            <div>Our Plunge Pools are the most affordable pool to operate on the market, saving you time and money on maintenance costs including heating, filtration and cleaning requirements. Relax and recharge with our Plunge Pool custom-design range.</div>
                        </div>
                        <div class="d-flex">
                            <a href="#form" class="btn btn-primary text-white px-5">
                                Enquire
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="custom_pools" role="tabpanel" aria-labelledby="custom_pools-tab">
                        <div class="heading">Custom Pools</div>
                        <div class="description">
                            <p>We understand that every backyard may differ in terms of shape and style. Our custom-built pool designs are personalised to meet your needs and desires by creating an outdoor area that flows and works aesthetically.</p>
                            <p>We work closely with you from initial consultation to design development, right down to the completed product.</p>
                            <p>Our experts at Lloyds Pools will advise you on a pool style that best compliments your space, whilst considering any budgetary constraints or construction challenges.</p>
                            <div>We help people use their homes to their full potential and create memories that will last.</div>
                        </div>
                        <div class="d-flex">
                            <a href="#form" class="btn btn-primary text-white px-5">
                                Enquire
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pool-types d-none d-lg-block">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11">
                        <div class="row gx-md-2 gx-xl-4 gx-xxl-5 gy-4 gy-md-0 h-100">
                            <div class="col-md-6 h-inherit" id="plunge-pools">
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
                            <div class="col-md-6 h-inherit" id="custom-pools">
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
        <div class="stress-free-process" id="process">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <div class="fs-2 text-center text-white fw-600 line-height-1 heading">The Personalised
                            “Stress-Free” Process</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="deck">
    <div class="container-fluid px-0 px-md-3">
        <div class="processes py-4 px-lg-4">
            <div class="card">
                <div class="position-relative w-100 d-flex justify-content-center"><?= renderImg("cushion-1.png", "lib", "cushion") ?></div>
                <div class="title">“Can we put a pool in our home?”</div>
                <div class="description">Just ask the question, Let Lloyds will do the leg work to determine the best way forward to have your pool proposal approved.</div>
            </div>
            <div class="card">
                <div class="position-relative w-100 d-flex justify-content-center"><?= renderImg("cushion-2.png", "lib", "cushion") ?></div>
                <div class="title">Initial On-Site<br> quotation</div>
                <div class="description">We give an initial quote for the design aspect of the pool.</div>
            </div>
            <div class="card">
                <div class="position-relative w-100 d-flex justify-content-center"><?= renderImg("cushion-3.png", "lib", "cushion") ?></div>
                <div class="title">Let’s Design – Personalised</div>
                <div class="description">Interactive process with Lloyds Design Team to finalise the pool of your dreams.</div>
            </div>
            <div class="card">
                <div class="position-relative w-100 d-flex justify-content-center"><?= renderImg("cushion-4.png", "lib", "cushion") ?></div>
                <div class="title">Council/Certifier Lodgement & Approval</div>
                <div class="description">Lloyds will handle all lodges and pre-approvals so you don’t have to.</div>
            </div>
            <div class="card">
                <div class="position-relative w-100 d-flex justify-content-center"><?= renderImg("cushion-5.png", "lib", "cushion") ?></div>
                <div class="title">Construction Quotation based on your personalised design.</div>
                <div class="description">Not happy with the price? No Problem, you own the plans and approval - your free to go to another contractor of your choice.</div>
            </div>
            <div class="card">
                <div class="position-relative w-100 d-flex justify-content-center"><?= renderImg("cushion-6.png", "lib", "cushion") ?></div>
                <div class="title">Happy with the price? Well its Time to install</div>
                <div class="description">We will begin building within days of acceptance.</div>
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

    <div class="faq" id="faq">
        <div class="container">
            <div class="text-center fs-2 fw-600 line-height-1 text-white pb-5 pb-md-8">Frequently Asked Questions</div>
            <div class="faq-slider">
                <div class="my-8 pt-xxl-8">
                    <div class="faq-card pb-md-8">
                        <div class="title">Does Size play a role in my decision?</div>
                        <div class="description">The size of the pool isn’t only dependent on the amount of space available in the area. It also depends on the zoning restrictions and your budget. Call up your contractor to seek guidance and comply with the zoning accommodation.</div>
                        <?= renderImg("faq-1.png", "lib", "faq-img faq-img-1") ?>
                    </div>
                </div>
                <div class="my-8">
                    <div class="faq-card pt-md-8">
                        <div class="title">What is the difference between an above and below ground pool?</div>
                        <div class="description">Soil removal and excavation are required for pools that are built above the ground whereas in-ground pools provide more permanent home. Hence, you ought to decide the kind of construction you would consider in building your pool.</div>
                        <?= renderImg("faq-2.png", "lib", "faq-img faq-img-2") ?>
                    </div>
                </div>
                <div class="my-8 pt-xxl-5">
                    <div class="faq-card pb-md-8">
                        <div class="title">What is needed to maintain my pool?</div>
                        <div class="description">Every pool comes with the responsibility of maintenance. You need to ensure that your pool is energy-efficient with substantial filtration and sound hydraulics. Other kits include usage of adequate skimmers, variable speed pumps, pool pump enclosures, larger pipes, sanitizers, chlorinators and more.</div>
                        <?= renderImg("faq-3.png", "lib", "faq-img faq-img-3") ?>
                    </div>
                </div>
                <div class="my-8">
                    <div class="faq-card pt-md-8">
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
            <div class="col-lg-5 col-xl-6">
                <?= renderImg("table.png", "lib") ?>
            </div>
            <div class="col-lg pt-6 pt-md-0">
                <div class="form-card">
                    <div class="fs-2 fw-600 line-height-1">Contact Us Today</div>
                    <form action="./src/form" method="POST" id="form">
                        <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
                        <div class="row gx-xxl-5 gy-5 gy-md-4 justify-content-lg-between">
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <label for="firstName">First Name</label>
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="E.g. John" id="firstName" name="firstName" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <label for="lastName">Last Name</label>
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="E.g. Smith" id="lastName" name="lastName" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <label for="email">Email Address</label>
                                <div class="input-group">
                                    <input class="form-control" type="email" id="email" placeholder="E.g. johnsmith@cliftons.com" name="email" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <label for="phone">Phone Number</label>
                                <div class="input-group">
                                    <input class="form-control" type="tel" placeholder="E.g. 0400000000" id="phone" name="phone" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <label for="postcode">Postcode</label>
                                <div class="input-group">
                                    <input class="form-control" type="tel" placeholder="E.g. 2000" id="postcode" name="postcode" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <label for="pooltype">Pool Type</label>
                                <div class="input-group">
                                    <select name="pooltype" id="pooltype" class="form-control">
                                        <option selected disabled>Select your prefered type</option>
                                        <option>Custom Pools</option>
                                        <option>Plunge Pools</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 pt-4 pt-lg-5">
                                <button type="submit" class="btn btn-white text-primary fw-700 fs-4 px-5">
                                    Enquire
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="text-center pt-4">
                    <a href="https://lloydsbuilding.com.au/" target="_blank" class="llyods_building_btn fs-4">
                        Need more than just a pool? <br class="d-md-none"><span class="fw-600">Visit Lloyd’s Building & Development <svg width="17" height="11" viewBox="0 0 17 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 5.5H15M15 5.5L10.68 1M15 5.5L10.68 10" stroke="#131518" stroke-width="2" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery" id="gallery">
    <div class="container-fluid px-0 px-md-4">
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