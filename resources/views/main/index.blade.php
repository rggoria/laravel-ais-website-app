@extends('layouts.app')

@section('title')
    Homepage - AIS
@endsection

@section('content')

{{-- Hero Header Section --}}
<section class="container my-5">
    <div class="row g-3 py-5">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <h1 class="fw-bolder">
                Singapore’s First E-Commerce Style Immigration Services Company, Backed With Direct Regulatory Expertise
            </h1>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <p class="lead">
                With years of hands-on regulatory experience, All Immigration Services simplifies Singapore’s immigration and workforce processes for both individuals and companies. Our core expertise includes work visa applications, workforce planning, and personalized immigration consultations.
            </p>
            <p class="lead">
                As the first immigration services provider in Singapore to offer a streamlined e-commerce-style ordering process, our innovative platform enables you to track your application progress, receive outcome alerts, and easily request additional services as needed.
            </p>
            <p class="lead">
                Whether you’re expanding your business or seeking the right talent, our dedicated team is here to support you every step of the way. We handle the complexities so you can focus on growth!
            </p>
            <div class="d-flex">
                <a href="{{ route("services") }}" class="btn btn-dark me-2">
                    Learn More
                </a>
            </div>
        </div>
    </div>
    <div class="text-center">
        <img src="{{ asset('asset/images/homepage/main_page_1.jpg') }}" class="img-fluid w-100 h-50" alt="Hero Image">
    </div>
</section>

{{-- About Us Section --}}

<section class="container my-5">
    <div class="row g-3 py-5">
        <div class="col-sm-12 col-md-12 col-lg-6">       
            <h1 class="fw-bolder">
                Expert Guidance for Hassle-Free Visa Applications, Renewals and Immigration Solutions
            </h1>
            <p class="lead">
                With the introduction of the Complementarity Assessment Framework (COMPASS), the process for applying and renewing work passes has become more stringent, requiring additional checks and documentation. At All Immigration Services, we stay ahead of these changes to ensure your employees’ passes are secured smoothly and on time.
            </p>
            <p class="lead">
                Timely applications and renewals provide assurance for your employees and prevent unnecessary disruptions to your business operations. Let us manage the renewal process so you can focus on running your company—without disruptions or stress.
            </p>
            <div class="row g-3">
                <div class="col">
                    <p class="fw-bolder">
                        Simplied, Compliant Application & Renewal process
                    </p>
                    <p class="lead">
                        Stay compliant and avoid disruptions with our efficient visa application and renewal services.
                    </p>
                </div>
                <div class="col">
                    <p class="fw-bolder">
                        Key Benefits
                    </p>
                    <p class="lead">
                        Enjoy peace of mind with our reliable and timely assistance every step of the way.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="text-center">
                <img src="{{ asset('asset/images/homepage/main_page_2.jpg') }}" class="img-fluid w-100 h-100" alt="Hero Image">
            </div>
        </div>
    </div>
</section>

<section class="container my-5">
    <div class="row g-3 py-5">
        <div class="col-sm-12 col-md-12 col-lg-6">       
            <h1 class="fw-bolder">
                Looking to test the Singapore market before making a commitment?
            </h1>
            <h1 class="fw-bolder">
                Our PEO Solutions in Singapore have you covered.
            </h1>
            <p class="lead">
                At All Immigration Services, our Employer of Record (EOR) and Professional Employment Organization (PEO) services take care of all your employees' administrative needs, from work pass applications and renewals to payroll management and income tax declarations. We ensure full compliance with local regulations, so you can focus on growing your business while we handle the complexities of workforce administration.
            </p>          
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="text-center">
                <img src="{{ asset('asset/images/homepage/main_page_3.jpg') }}" class="img-fluid w-100 h-100" alt="Hero Image">
            </div>
        </div>
    </div>  
</section>

<section class="container my-5">
    <div class="row g-3 py-5">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <p class="fw-bolder">
                Expertise
            </p>
            <h3 class="fw-bolder">
                Every client faces unique immigration challenges. To get started, click the WhatsApp icon at the top of the page and provide a brief description of your situation. After our initial assessment, we’ll offer a tailored quote for our consultation services.
            </h3>       
        </div>
        <div class="row g-3 mb-5">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="card p-3" style="height: 25rem">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-cube fa-2x"></i>
                        </div>
                        <h4 class="card-title">
                            Personalised Support and Case Management Handled by The Managing Director</h4>
                        <p class="card-text">
                            Our personalized client support ensures you receive the dedicated attention and guidance you deserve. Stay connected through a 1-on-1 WhatsApp group chat with our Managing Director for direct communication.
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
                            Compliance with Singapore's Immigration Regulations
                        </h4>
                        <p class="card-text">
                            We prioritise compliance with all local regulations to safeguard your immigration journey. From securing the correct work passes to meeting evolving legal requirements, our commitment to compliance minimises risks and protects your business.
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
                            Comprehensive Solutions for Workforce Planning and Business Expansion
                        </h4>
                        <p class="card-text">
                            We will assess the current workforce strength and develop a strategic hiring plan tailored to your future growth needs, ensuring you have the right talent in place as your business expands.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- How It Works Section --}}
<section class="container my-5">
    <div class="row g-3 py-5">
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
                        Step 1: Order our services through our website and make payment.
                    </h4>
                    <p class="card-text">
                        You will receive a welcome email, together with login details to our customer portal, AIS Gateway
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
                        Step 2: Sign and upload required documents in our portal.
                    </h4>
                    <p class="card-text">
                        Our team will check and process right away if everything is in order.
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
                        Step 3: Bring your employee to Singapore after approval
                    </h4>
                    <p class="card-text">
                        We handle the submission process and provide continuous support from work pass application to the day your employee receives the work pass.
                    </p>
                </div>            
            </div>
        </div>
    </div>
</section>

<section class="container my-5">
    <div class="row g-3 py-5">
        <div class="col-sm-12 col-md-12 col-lg-6">       
            <h3 class="fw-bolder">
                Ready to begin your immigration journey? Explore our service catalogue to find the solutions you need and place your order to get started!
            </h3>          
            <a href="{{ route('services') }}" class="btn btn-outline-dark mb-3">Services</a>
            <h3 class="fw-bolder">
                Still unsure of how to proceed? Just click the WhatsApp icon at the top of the page to message us directly for assistance
            </h3>  
            <a href="https://wa.me/message/W7WPF3DBC6LFM1" class="btn btn-outline-dark">Contact Us</a>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="text-center">
                <img src="{{ asset('asset/images/homepage/hero.jpg') }}" class="img-fluid w-100 h-100" alt="Hero Image">
            </div>
        </div>
    </div> 
</section>

{{-- Consultation Section --}}
<section class="container my-5">
    <div class="row g-3 py-5">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <p class="fw-bolder">
                Expertise
            </p> 
            <h1 class="fw-bolder">
                Your Trusted Immigration Consultant in Singapore
            </h1>
            <p class="lead">
                Our founder brings extensive experience in immigration services, combining hands-on regulatory compliance expertise, an MBA, and a background in accounting. This unique skill set ensures that every client receives precise, business-oriented guidance that is both compliant and informed. With our commitment to excellence, we offer tailored solutions that address each client’s unique immigration needs with clarity and expertise.
            </p>            
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="text-center">
                <img src="{{ asset('asset/images/homepage/main_page_4.jpg') }}" class="img-fluid w-100 h-100" alt="Hero Image">
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
    <script>
        console.log("users view");
    </script>
@endsection