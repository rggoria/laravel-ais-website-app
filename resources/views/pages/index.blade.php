@extends('layouts.master')

@section('title')
    Homepage - AIS
@endsection

@section('content')

<section class="container my-5">
    <div class="row py-5">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <h1 class="fw-bolder">
                Singapore's First E-commerce Style Immigration Consultancy, Backed by Direct Work
                Pass Regulatorv Expertise
            </h1>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <p class="lead">
                At All Immigration Services, we specialize in simplifying Singapore's immigration
                and workforce processes for both individuals and businesses. With expertise in
                work pass applications, workforce planning, and immigration consultations, we
                provide tailored solutions to meet your unique needs.
            </p>
            <p class="lead">
                We are proud to be the first immigration consultancy in Singapore to offer a
                seamless, direct ordering process, similar to an e-commerce experience, Our
                innovative platform allows you to easily request services like work pass
                applications, visa renewals, and more, all from the convenience of your device.
                Simply select the services you need, complete your details, and let us handle
                the rest—making immigration support as simple as online shopping.
            </p>
            <p class="lead">
                Whether you have not incorporated a local company yet or are facing local
                hiring challenges, our Professional Employment Organisation (PEO) service
                ensure seamless hiring and compliance with labour regulations.
            </p>
            <p class="lead">
                Whether you're expanding your business or securing the right talent, our
                dedicated team is here to guide you every step of the way. Let us handle
                the complexities so you can focus on growth.
            </p>
            <div class="d-flex">
                <button class="btn btn-dark me-2">Learn More</button>
                <button class="btn btn-outline-dark">Sign Up</button>
            </div>
        </div>
    </div>
    <div class="text-center">
        <img src="{{ asset('asset/images/homepage/hero.jpg') }}" class="img-fluid w-100 h-50" alt="Hero Image">
    </div>
</section>

<section class="container my-5">
    <div class="row py-5">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <p class="fw-bolder">
                Expertise
            </p>
            <h1 class="fw-bolder">
                Running a business is tough. Applying for a work pass doesn't have to be.
            </h1>
            <p class="lead">
                At All Immigration Services, we bring years of direct regulatory experience
                to the work pass application process, ensuring efficient submissions and
                high success rates. With thousands of successful applications handled in
                the past, we are confident in delivering only the best. If challenges arise, we
                are equipped to navigate rejections smoothly and get your application
                back on track.
            </p>
            <p class="lead">
                Why pay more to other providers that may not have the depth of expertise
                we offer? Our tailored solutions save you time and reduce costs while you
                focus on growing your business!
            </p>
            <div class="d-flex">
                <button class="btn btn-outline-dark me-2">Learn More</button>
                <button class="btn">Sign Up ></button>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="text-center">
                <img src="{{ asset('asset/images/homepage/hero.jpg') }}" class="img-fluid w-100 h-100" alt="Hero Image">
            </div>
        </div>
    </div>
</section>

<section class="container my-5">
    <div class="row py-5">
        <div class="col-sm-12 col-md-12 col-lg-6">       
            <h1 class="fw-bolder">
                Expert Guidance for Hassle-Free Visa Renewals and Immigration Solutions
            </h1>
            <p class="lead">
                With the introduction of the Complementarity Assessment Framework
                (COMPASS), renewing work passes has become more complex, requiring
                additional checks and potentially new documentation. At All Immigration
                Services, we stay ahead of these changes, ensuring that your employees'
                passes are renewed smoothly and on time.
            </p>
            <p class="lead">
                Timely renewals provide assurance to your employees and prevent
                unnecessary disruptions to your business operations. Let us handle the
                renewals, so you can focus on running your company without disruptions
                or stress.
            </p>
            <div class="row">
                <div class="col">
                    <p class="fw-bolder">
                        Renewal Process
                    </p>
                    <p class="lead">
                        Stay compliant and avoid disruptions
                        with our efficient visa renewal services.
                    </p>
                </div>
                <div class="col">
                    <p class="fw-bolder">
                        Key Benefits
                    </p>
                    <p class="lead">
                        Experience peace of mind with our
                        reliable and timely renewal assistance.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="text-center">
                <img src="{{ asset('asset/images/homepage/hero.jpg') }}" class="img-fluid w-100 h-100" alt="Hero Image">
            </div>
        </div>
    </div>
</section>

<section class="container my-5">
    <div class="row py-5">
        <div class="col-sm-12 col-md-12 col-lg-6">       
            <h1 class="fw-bolder">
                Facing challenges with local
                hiring or looking to test the
                Singapore market before
                making a commitment?
            </h1>
            <h1 class="fw-bolder">
                Our PEO Solutions in Singapore
                have you covered.
            </h1>
            <p class="lead">
                At All Immigration Services, our Professional Employment Organization
                (PEO) services handle all your employees' administrative needs, including
                work pass applications, renewals, payroll management, and income tax
                declarations. We ensure full compliance with local regulations, allowing you
                to focus on growing your business while we manage the complexities of
                workforce administration.
            </p>          
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="text-center">
                <img src="{{ asset('asset/images/homepage/hero.jpg') }}" class="img-fluid w-100 h-100" alt="Hero Image">
            </div>
        </div>
    </div>  
</section>

<section class="container my-5">
    <div class="row py-5">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <p class="fw-bolder">
                Expertise
            </p>
            <h1 class="fw-bolder">
                Tailored consultancy to your
                immigration needs
            </h1>
            <p class="lead">
                We specialise in tailored immigration solutions designed to meet your unique needs. Our expert
                team is dedicated to guiding you through every step of the process. Click on the Whatsapp icon
                at the top of the page to get an initial assessment and quote.
            </p>            
        </div>
        <div class="row g-3 mb-5">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="card p-3" style="height: 25rem">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-cube fa-2x"></i>
                        </div>
                        <h4 class="card-title">
                            Personalised Support and
                            Case Management
                            Handled by The
                            Managing Director
                        </h4>
                        <p class="card-text">
                            Our personalised client support ensures you receive the
                            attention and guidance you deserve. Stay connected
                            with our Managing Director to 1-1 Whatsapp Group
                            Chat.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="card p-3" style="height: 25rem">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-cube fa-2x"></i>
                        </div>
                        <h4 class="card-title">
                            Compliance with
                            Singapore's Immigration
                            Regulations
                        </h4>
                        <p class="card-text">
                            We prioritise compliance with all local regulations to
                            safeguard your immigration journey.
                            From securing the correct work passes to meeting
                            evolving legal requirements, our commitment to
                            compliance minimises risks and protects your business.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="card p-3" style="height: 25rem">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-cube fa-2x"></i>
                        </div>
                        <h4 class="card-title">
                            Comprehensive Solutions
                            for Workforce Planning
                            and Business Expansion
                        </h4>
                        <p class="card-text">
                            We will assess the current workforce strength and
                            develop a strategic hiring plan tailored to your future
                            growth needs, ensuring you have the right talent in
                            place as your business expands.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex">
            <button class="btn btn-outline-dark me-2">Learn More</button>
            <button class="btn">Sign Up ></button>
        </div>
    </div>
</section>

<section class="container my-5">
    <div class="row py-5">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <h1 class="fw-bolder">
                Client Testimonials
            </h1>
            <p class="lead">
                Our clients' success stories speak volumes.
            </p>            
        </div>
        <style>  
            .user-image {
                width: 50px; /* Image size */
                height: 50px;
                border-radius: 50%; /* Round image */
                object-fit: cover; /* Maintain aspect ratio */
            }
        </style>
        <div class="row g-3 mb-5">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="card p-3" style="height: 20rem">
                    <div class="container mt-5">
                        <div class="rating" aria-hidden="true">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="fw-bolder my-3">
                            "Josh has been very professional in troubleshooting work pass
                            rejections and providing us with the appropriate solutions to
                            rectify"
                        </p>
                        <div class="d-flex mt-3">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="https://via.placeholder.com/50" alt="User" class="user-image">
                            </div>
                            <div class="mx-3">
                                <p class="fw-bolder m-0">
                                    John Doe
                                </p>
                                CEO, ABC Global
                            </div>
                            <div class="vr mx-3"></div>
                            <div class="d-flex justify-content-center align-items-center">
                                <div>
                                    <i class="fab fa-webflow"></i>
                                    <span class="fw-bolder">
                                        Webflow
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="card p-3" style="height: 20rem">
                    <div class="container mt-5">
                        <div class="rating" aria-hidden="true">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="fw-bolder my-3">
                            "Professional and efficient service that exceeded my
                            expectations!"
                        </p>
                        <div class="d-flex mt-3">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="https://via.placeholder.com/50" alt="User" class="user-image">
                            </div>
                            <div class="mx-3">
                                <p class="fw-bolder m-0">
                                    Jane Smith
                                </p>
                                Manager, Global Corp
                            </div>
                            <div class="vr mx-3"></div>
                            <div class="d-flex justify-content-center align-items-center">
                                <div>
                                    <i class="fab fa-webflow"></i>
                                    <span class="fw-bolder">
                                        Webflow
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container my-5">
    <div class="row py-5">
        <div class="col-sm-12 col-md-12 col-lg-6">       
            <h1 class="fw-bolder">
                Your Pathway to Successful
                Immigration: A Step-by-Step
                Guide
            </h1>                 
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">       
            <p class="lead">
                Navigating the complexities of immigration can be daunting. Our
                consultancy simplifies this process by guiding you through each step, from
                the initial consultation to securing your visa. With our expertise, you can
                feel confident in achieving your immigration goals.
            </p>
            <p class="lead">
                We will handle the administrative work and provide continuous support
                until your employee receives the work pass.
            </p>
        </div>
    </div>
    <div class="row g-3 mb-5">
        <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="card p-3" style="height: 25rem">
                <div class="card-body">
                    <div class="mb-3">
                        <i class="fas fa-cube fa-2x"></i>
                    </div>
                    <h4 class="card-title">
                        Step 1: Order our services through
                        our website, make payment and
                        upload requested documents
                    </h4>
                    <p class="card-text">
                        If you have any enquiries regarding the information or
                        document requested, you may contract us by clicking
                        the WhatsApp button above.
                    </p>
                </div>
                <div class="text-start">
                    <button class="btn">Start ></button>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="card p-3" style="height: 25rem">
                <div class="card-body">
                    <div class="mb-3">
                        <i class="fas fa-cube fa-2x"></i>
                    </div>
                    <h4 class="card-title">
                        Step 2: Verifying submitted
                        information and documents
                    </h4>
                    <p class="card-text">
                        Our team will process the submitted information and
                        documents, and may reach out to you for clarification.
                        If everything is in place, we will process your pass
                        application immediately.
                    </p>               
                </div>
                <div class="text-start">
                    <button class="btn">Plan ></button>
                </div>        
            </div>        
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="card p-3" style="height: 25rem">
                <div class="card-body">
                    <div class="mb-3">
                        <i class="fas fa-cube fa-2x"></i>
                    </div>
                    <h4 class="card-title">
                        Step 3: Bring your employee to
                        Singapore after approval
                    </h4>
                    <p class="card-text">
                        We handle the submission process and provide
                        continuous support from work pass application to the
                        day your employee receives the work pass.
                    </p>
                </div>
                <div class="text-start">
                    <button class="btn">Submit ></button>
                </div>                
            </div>
        </div>
    </div>
</section>

<section class="container my-5">
    <div class="row py-5">
        <div class="col-sm-12 col-md-12 col-lg-6">       
            <h1 class="fw-bolder">
                Start Your Immigration
                Journey Today
            </h1>
            <p class="lead">
                Ready to order services? Click the button below to kickstart your
                immigration journey.
            </p>
            <p class="lead">
                Unsure of how to proceed? Click on contact us and send us your enquiry.
            </p>
            <div class="d-flex">
                <button class="btn btn-dark me-2">Order Services Now</button>
                <button class="btn btn-outline-dark">Contact Us</button>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="text-center">
                <img src="{{ asset('asset/images/homepage/hero.jpg') }}" class="img-fluid w-100 h-100" alt="Hero Image">
            </div>
        </div>
    </div> 
</section>

<section class="container my-5">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Shop all</a></li>
          <li class="breadcrumb-item" aria-current="page">Category</li>
          <li class="breadcrumb-item" aria-current="page">Pass application Services</li>
        </ol>
    </nav>
    <div class="row g-3">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <img src="https://via.placeholder.com/600x400" alt="Large Image" class="img-fluid">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="row g-3">
                <div class="col-6">
                    <img src="https://via.placeholder.com/300x200" alt="Small Image 1" class="img-fluid">
                </div>
                <div class="col-6">
                    <img src="https://via.placeholder.com/300x200" alt="Small Image 2" class="img-fluid">
                </div>
                <div class="col-6">
                    <img src="https://via.placeholder.com/300x200" alt="Small Image 3" class="img-fluid">
                </div>
                <div class="col-6 position-relative">
                    <img src="https://via.placeholder.com/300x200" alt="Small Image 4" class="img-fluid">
                    <div class="badge bg-white text-dark position-absolute bottom-0 start-50 m-3">Show all photos</div>
                </div>                              
            </div>         
        </div>
    </div>
    <div class="row my-5">
        <div class="col-sm-12 col-md-12 col-lg-7">       
            <h1 class="fw-bolder">
                Employment Pass (EP) Application
            </h1>  
            <p>
                Our most popular package, tailored for most individuals. Some key facts include:
            </p>
            <ul>
                <li>
                    Will draw a minimum salary of S$5,000 for non-financial services sector, S$5,500 for financial services
                    (From 1 Jan 2025, it will be increased to $5,600 and S$6,200 respectively)
                </li>
                <li>
                    Able to bring in family members through Dependent Passes and Long Term Visit Passes (LTVP) - Additional
                    costs apply
                </li>
                <li>
                    Pass validity between 2 to 5 years
                    2 free appeals to MOM for any rejected applications.
                </li>
            </ul>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-details-tab" data-bs-toggle="tab" data-bs-target="#nav-details" type="button" role="tab" aria-controls="nav-details" aria-selected="true">Details</button>
                    <button class="nav-link" id="nav-shipping-tab" data-bs-toggle="tab" data-bs-target="#nav-shipping" type="button" role="tab" aria-controls="nav-shipping" aria-selected="false">Shipping</button>
                    <button class="nav-link" id="nav-returns-tab" data-bs-toggle="tab" data-bs-target="#nav-returns" type="button" role="tab" aria-controls="nav-returns" aria-selected="false">Returns</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-details" role="tabpanel" aria-labelledby="nav-details-tab" tabindex="0">
                    <p>
                        While we are confident of our application rates, there may be instances beyond our control that would result in a
                        pass rejection. Fret not, our team of experts are trained to navigate such scenarios to get your application back
                        on track. To sweeten the deal, we are providing up to free two appeals to salvage the application.
                    </p>
                </div>
                <div class="tab-pane fade" id="nav-shipping" role="tabpanel" aria-labelledby="nav-shipping-tab" tabindex="0">
                    <p>
                        This is shipping tab  
                    </p>
                </div>
                <div class="tab-pane fade" id="nav-returns" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                    <p>
                        This is return tab
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-5">       
            <h1 class="fw-bolder">
                S$999 (inclusive of S$365
                government fees - MOM)
            </h1>
            <div class="d-flex align-items-center">
                <div class="rating" aria-hidden="true">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span class="ms-3"> (5 stars) • 10 reviews</span>
            </div>
            <style>           
                .form-check-input:checked + label {
                    background-color: #343a40;
                    color: white;
                }
            </style>
            <form>
                <div>
                    <p>Variant</p>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="form-check form-check-inline w-100 h-100">
                                <input class="form-check-input" type="radio" name="options" id="radio1" value="standard" style="display: none;">
                                <label class="btn btn-outline-dark d-flex justify-content-center align-items-center w-100 h-100" for="radio1">Standard Package</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check form-check-inline w-100 h-100">
                                <input class="form-check-input" type="radio" name="options" id="radio2" value="option2" style="display: none;">
                                <label class="btn btn-outline-dark d-flex justify-content-center align-items-center w-100 h-100" for="radio2">Express Package</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check form-check-inline w-100 h-100">
                                <input class="form-check-input" type="radio" name="options" id="radio3" value="option3" style="display: none;">
                                <label class="btn btn-outline-dark d-flex justify-content-center align-items-center w-100 h-100" for="radio3">Deluxe Package</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-3">
                    <p>Quantity</p>
                    <input type="number" placeholder="Quantity">
                </div>
                <button type="button" class="btn btn-dark w-100 mb-3">Add to cart</button>
                <button type="button" class="btn btn-outline-dark w-100 mb-3">Buy now</button>
                <p class="text-center">Bulk order discounts available</p>
            </form>
        </div>
    </div>
</section>

<section class="container my-5">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Shop all</a></li>
          <li class="breadcrumb-item" aria-current="page">Category</li>
          <li class="breadcrumb-item" aria-current="page">Visa Services</li>
        </ol>
    </nav>
    <div class="row g-3">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <img src="https://via.placeholder.com/600x400" alt="Large Image" class="img-fluid">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="row g-3">
                <div class="col-6">
                    <img src="https://via.placeholder.com/300x200" alt="Small Image 1" class="img-fluid">
                </div>
                <div class="col-6">
                    <img src="https://via.placeholder.com/300x200" alt="Small Image 2" class="img-fluid">
                </div>
                <div class="col-6">
                    <img src="https://via.placeholder.com/300x200" alt="Small Image 3" class="img-fluid">
                </div>
                <div class="col-6 position-relative">
                    <img src="https://via.placeholder.com/300x200" alt="Small Image 4" class="img-fluid">
                    <div class="badge bg-white text-dark position-absolute bottom-0 start-50 m-3">Show all photos</div>
                </div>                              
            </div>         
        </div>
    </div>
    <div class="row my-5">
        <div class="col-sm-12 col-md-12 col-lg-7">       
            <h1 class="fw-bolder">
                Dependent Pass (DP) Application
            </h1>  
            <p>
                Tailored for individuals who are bringing in their spouse and children below age 21.
            </p>
            <ul>
                <li>
                    Main pass holder (Working parent) must draw a minimum salary of S$6,000.
                </li>
                <li>
                    For legally married spouse and Unmarried children under 21 years old, including legally adopted children.
                </li>
                <li>
                    Pass validity tagged to main pass holder (Working parent): between 2 to 5 years
                    2 free appeals to MOM for any rejected applications.
                </li>
            </ul>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-details-tab" data-bs-toggle="tab" data-bs-target="#nav-details" type="button" role="tab" aria-controls="nav-details" aria-selected="true">Details</button>
                    <button class="nav-link" id="nav-shipping-tab" data-bs-toggle="tab" data-bs-target="#nav-shipping" type="button" role="tab" aria-controls="nav-shipping" aria-selected="false">Shipping</button>
                    <button class="nav-link" id="nav-returns-tab" data-bs-toggle="tab" data-bs-target="#nav-returns" type="button" role="tab" aria-controls="nav-returns" aria-selected="false">Returns</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-details" role="tabpanel" aria-labelledby="nav-details-tab" tabindex="0">
                    <p>
                        While we are confident of our application rates, there may be instances beyond our control that would result in a
                        pass rejection. Fret not, our team of experts are trained to navigate such scenarios to get your application back
                        on track. To sweeten the deal, we are providing up to free two appeals to salvage the application.
                    </p>
                </div>
                <div class="tab-pane fade" id="nav-shipping" role="tabpanel" aria-labelledby="nav-shipping-tab" tabindex="0">
                    <p>
                        This is shipping tab  
                    </p>
                </div>
                <div class="tab-pane fade" id="nav-returns" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                    <p>
                        This is return tab
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-5">       
            <h1 class="fw-bolder">
                S$799 (inclusive of S$365
                government fees - MOM)
            </h1>
            <div class="d-flex align-items-center">
                <div class="rating" aria-hidden="true">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span class="ms-3"> (5 stars) • 10 reviews</span>
            </div>
            <form>
                <div>
                    <p>Variant</p>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="form-check form-check-inline w-100 h-100">
                                <input class="form-check-input" type="radio" name="options" id="radio1" value="standard" style="display: none;">
                                <label class="btn btn-outline-dark d-flex justify-content-center align-items-center w-100 h-100" for="radio1">Standard Package</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check form-check-inline w-100 h-100">
                                <input class="form-check-input" type="radio" name="options" id="radio2" value="option2" style="display: none;">
                                <label class="btn btn-outline-dark d-flex justify-content-center align-items-center w-100 h-100" for="radio2">Express Package</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check form-check-inline w-100 h-100">
                                <input class="form-check-input" type="radio" name="options" id="radio3" value="option3" style="display: none;">
                                <label class="btn btn-outline-dark d-flex justify-content-center align-items-center w-100 h-100" for="radio3">Deluxe Package</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-3">
                    <p>Quantity</p>
                    <input type="number" placeholder="Quantity">
                </div>
                <button type="button" class="btn btn-dark w-100 mb-3">Add to cart</button>
                <button type="button" class="btn btn-outline-dark w-100 mb-3">Buy now</button>
                <p class="text-center">Bulk order discounts available</p>
            </form>
        </div>
    </div>
</section>

<section class="container my-5">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Shop all</a></li>
          <li class="breadcrumb-item" aria-current="page">Category</li>
          <li class="breadcrumb-item" aria-current="page">Visa Services</li>
        </ol>
    </nav>
    <div class="row g-3">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <img src="https://via.placeholder.com/600x400" alt="Large Image" class="img-fluid">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="row g-3">
                <div class="col-6">
                    <img src="https://via.placeholder.com/300x200" alt="Small Image 1" class="img-fluid">
                </div>
                <div class="col-6">
                    <img src="https://via.placeholder.com/300x200" alt="Small Image 2" class="img-fluid">
                </div>
                <div class="col-6">
                    <img src="https://via.placeholder.com/300x200" alt="Small Image 3" class="img-fluid">
                </div>
                <div class="col-6 position-relative">
                    <img src="https://via.placeholder.com/300x200" alt="Small Image 4" class="img-fluid">
                    <div class="badge bg-white text-dark position-absolute bottom-0 start-50 m-3">Show all photos</div>
                </div>                              
            </div>         
        </div>
    </div>
    <div class="row my-5">
        <div class="col-sm-12 col-md-12 col-lg-7">       
            <h1 class="fw-bolder">
                Long Term Visit Pass (LTVP) Application
            </h1>  
            <p>
                Tailored for individuals who are bringing in family members who are not eligible for a dependent pass
            </p>
            <ul>
                <li>
                    Main pass holder (Working parent) must draw a minimum salary of S$6,000.
                </li>
                <li>
                    For common-law spouse, Unmarried handicapped children aged 21 and above, Unmarried step-children
                    under 21 years old and parents (if mass pass holder - working parent, is earning at least S$12,000)
                </li>
                <li>
                    Pass validity tagged to main pass holder (Working parent): between 2 to 5 years
                    2 free appeals to MOM for any rejected applications.
                </li>
            </ul>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-details-tab" data-bs-toggle="tab" data-bs-target="#nav-details" type="button" role="tab" aria-controls="nav-details" aria-selected="true">Details</button>
                    <button class="nav-link" id="nav-shipping-tab" data-bs-toggle="tab" data-bs-target="#nav-shipping" type="button" role="tab" aria-controls="nav-shipping" aria-selected="false">Shipping</button>
                    <button class="nav-link" id="nav-returns-tab" data-bs-toggle="tab" data-bs-target="#nav-returns" type="button" role="tab" aria-controls="nav-returns" aria-selected="false">Returns</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-details" role="tabpanel" aria-labelledby="nav-details-tab" tabindex="0">
                    <p>
                        While we are confident of our application rates, there may be instances beyond our control that would result in a
                        pass rejection. Fret not, our team of experts are trained to navigate such scenarios to get your application back
                        on track. To sweeten the deal, we are providing up to free two appeals to salvage the application.
                    </p>
                </div>
                <div class="tab-pane fade" id="nav-shipping" role="tabpanel" aria-labelledby="nav-shipping-tab" tabindex="0">
                    <p>
                        This is shipping tab  
                    </p>
                </div>
                <div class="tab-pane fade" id="nav-returns" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                    <p>
                        This is return tab
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-5">       
            <h1 class="fw-bolder">
                S$799 (inclusive of S$365
                government fees - MOM)
            </h1>
            <div class="d-flex align-items-center">
                <div class="rating" aria-hidden="true">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span class="ms-3"> (5 stars) • 10 reviews</span>
            </div>
            <form>
                <div>
                    <p>Variant</p>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="form-check form-check-inline w-100 h-100">
                                <input class="form-check-input" type="radio" name="options" id="radio1" value="standard" style="display: none;">
                                <label class="btn btn-outline-dark d-flex justify-content-center align-items-center w-100 h-100" for="radio1">Standard Package</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check form-check-inline w-100 h-100">
                                <input class="form-check-input" type="radio" name="options" id="radio2" value="option2" style="display: none;">
                                <label class="btn btn-outline-dark d-flex justify-content-center align-items-center w-100 h-100" for="radio2">Express Package</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check form-check-inline w-100 h-100">
                                <input class="form-check-input" type="radio" name="options" id="radio3" value="option3" style="display: none;">
                                <label class="btn btn-outline-dark d-flex justify-content-center align-items-center w-100 h-100" for="radio3">Deluxe Package</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-3">
                    <p>Quantity</p>
                    <input type="number" placeholder="Quantity">
                </div>
                <button type="button" class="btn btn-dark w-100 mb-3">Add to cart</button>
                <button type="button" class="btn btn-outline-dark w-100 mb-3">Buy now</button>
                <p class="text-center">Bulk order discounts available</p>
            </form>
        </div>
    </div>
</section>

<section class="container my-5">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Shop all</a></li>
          <li class="breadcrumb-item" aria-current="page">Category</li>
          <li class="breadcrumb-item" aria-current="page">Visa Services</li>
        </ol>
    </nav>
    <div class="row g-3">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <img src="https://via.placeholder.com/600x400" alt="Large Image" class="img-fluid">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="row g-3">
                <div class="col-6">
                    <img src="https://via.placeholder.com/300x200" alt="Small Image 1" class="img-fluid">
                </div>
                <div class="col-6">
                    <img src="https://via.placeholder.com/300x200" alt="Small Image 2" class="img-fluid">
                </div>
                <div class="col-6">
                    <img src="https://via.placeholder.com/300x200" alt="Small Image 3" class="img-fluid">
                </div>
                <div class="col-6 position-relative">
                    <img src="https://via.placeholder.com/300x200" alt="Small Image 4" class="img-fluid">
                    <div class="badge bg-white text-dark position-absolute bottom-0 start-50 m-3">Show all photos</div>
                </div>                              
            </div>         
        </div>
    </div>
    <div class="row my-5">
        <div class="col-sm-12 col-md-12 col-lg-7">       
            <h1 class="fw-bolder">
                OnePass Application
            </h1>  
            <p>
                The creme de la creme, piéce de resistance work pass available. Tailored for high income earners (Earning or will
                earn more than SS30,000 a month). We will order and absorb charges for employment verification proof if
                required to fulfil the government's (MOM) requirement.
            </p>
            <ul>
                <li>
                    Have drawn at least SS30,000 equivalent in fixed salary for the past 12 months, or will earn SS30,000
                    equivalent in the new job.
                    If salary criteria not met you may still qualify if you have outstanding achievements in certain sectors.
                </li>
                <li>
                    For common-law spouse, Unmarried handicapped children aged 21 and above, Unmarried step-children
                    under 21 years old and parents (if mass pass holder - working parent, is earning at least S$12,000)
                </li>
                <li>
                    Pass validity tagged to main pass holder (Working parent): between 2 to 5 years
                    2 free appeals to MOM for any rejected applications.
                </li>
            </ul>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-details-tab" data-bs-toggle="tab" data-bs-target="#nav-details" type="button" role="tab" aria-controls="nav-details" aria-selected="true">Details</button>
                    <button class="nav-link" id="nav-shipping-tab" data-bs-toggle="tab" data-bs-target="#nav-shipping" type="button" role="tab" aria-controls="nav-shipping" aria-selected="false">Shipping</button>
                    <button class="nav-link" id="nav-returns-tab" data-bs-toggle="tab" data-bs-target="#nav-returns" type="button" role="tab" aria-controls="nav-returns" aria-selected="false">Returns</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-details" role="tabpanel" aria-labelledby="nav-details-tab" tabindex="0">
                    <p>
                        While we are confident of our application rates, there may be instances beyond our control that would result in a
                        pass rejection. Fret not our team of experts are trained to navigate such scenarios to get your application back
                        on track. To sweeten the deal, we are providing up to free two appeals to salvage the application.
                    </p>
                </div>
                <div class="tab-pane fade" id="nav-shipping" role="tabpanel" aria-labelledby="nav-shipping-tab" tabindex="0">
                    <p>
                        This is shipping tab  
                    </p>
                </div>
                <div class="tab-pane fade" id="nav-returns" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                    <p>
                        This is return tab
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-5">       
            <h1 class="fw-bolder">
                S$1999 (inclusive of
                S$365 government fees -
                MOM)
            </h1>
            <div class="d-flex align-items-center">
                <div class="rating" aria-hidden="true">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span class="ms-3"> (5 stars) • 10 reviews</span>
            </div>
            <form>
                <div>
                    <p>Variant</p>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="form-check form-check-inline w-100 h-100">
                                <input class="form-check-input" type="radio" name="options" id="radio1" value="standard" style="display: none;">
                                <label class="btn btn-outline-dark d-flex justify-content-center align-items-center w-100 h-100" for="radio1">Standard Package</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check form-check-inline w-100 h-100">
                                <input class="form-check-input" type="radio" name="options" id="radio2" value="option2" style="display: none;">
                                <label class="btn btn-outline-dark d-flex justify-content-center align-items-center w-100 h-100" for="radio2">Express Package</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check form-check-inline w-100 h-100">
                                <input class="form-check-input" type="radio" name="options" id="radio3" value="option3" style="display: none;">
                                <label class="btn btn-outline-dark d-flex justify-content-center align-items-center w-100 h-100" for="radio3">Deluxe Package</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-3">
                    <p>Quantity</p>
                    <input type="number" placeholder="Quantity">
                </div>
                <button type="button" class="btn btn-dark w-100 mb-3">Add to cart</button>
                <button type="button" class="btn btn-outline-dark w-100 mb-3">Buy now</button>
                <p class="text-center">Bulk order discounts available</p>
            </form>
        </div>
    </div>
</section>

<section class="container my-5">
    <div class="py-5">
        <p class="fw-bolder">
            Discover
        </p>
        <h1 class="fw-bolder">
            Products
        </h1>
        <div class="d-flex justify-content-between align-items-center">
            <p class="lead mb-0">
                Explore our range of tailored immigration solutions today!
            </p>
            <a class="btn btn-outline-dark">View All</a>
        </div>
    </div>
    <div class="row">
        @foreach ( $productItems as $item)
            <div class="col-sm-12 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $item['title'] }}</h5>
                        <p class="card-text text-muted">{{ $item['type'] }}</p>
                        <p class="card-text">{{ $item['price'] }}</p>
                        <div class="mt-auto"></div>
                    </div>
                </div>
            </div>   
        @endforeach      
    </div>
</section>

@endsection

@section('scripts')
    <script>
        console.log("users view");
    </script>
@endsection