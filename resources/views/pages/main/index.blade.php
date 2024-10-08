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
                <a href="{{ route("services") }}" class="btn btn-dark me-2">
                    Learn More
                </a>
            </div>
        </div>
    </div>
    <div class="text-center">
        <img src="{{ asset('asset/images/homepage/hero.jpg') }}" class="img-fluid w-100 h-50" alt="Hero Image">
    </div>
</section>

{{-- About Us Section --}}

<section class="container my-5">
    <div class="row g-3 py-5">
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
            <div class="row g-3">
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
    <div class="row g-3 py-5">
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
                At All Immigration Services, our Employer of Record (EOR) / Professional Employment
                Organisation (PEO) services handle all your employees' administrative needs, including
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
    <div class="row g-3 py-5">
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
                        Step 1: Order our services through
                        our website, make payment and
                        our team will reach out to you
                    </h4>
                    <p class="card-text">
                        We will contact you via email to sign an
                        authorisation form, and request other
                        formation and documents relating to
                        work pass application.
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
                        Step 2: Verifying submitted
                        information and documents
                    </h4>
                    <p class="card-text">
                        Our team will process the submitted information and
                        documents, and may reach out to you for clarification.
                        When everything is finalised we will process your pass
                        application immediately.
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
                        Step 3: Bring your employee to
                        Singapore after approval
                    </h4>
                    <p class="card-text">
                        We handle the submission process and provide
                        continuous support from work pass application to the
                        day your employee receives the work pass.
                    </p>
                </div>            
            </div>
        </div>
    </div>
</section>

<section class="container my-5">
    <div class="row g-3 py-5">
        <div class="col-sm-12 col-md-12 col-lg-6">       
            <h1 class="fw-bolder">
                Start Your Immigration
                Journey Today
            </h1>
            <p class="lead">
                Ready to order services browse our product catalogue below to kickstart your
                immigration journey.
            </p>
            <p class="lead">
                Unsure of how to proceed? Click on contact us and send us your enquiry.
            </p>
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
                With a strong foundation in immigration services, our founder brings unparalleled expertise. An MBA graduate and former Ministry of Manpower employee, they are committed to guiding clients through every step of the immigration process.
            </p>
            <div class="row g-3">
                <div class="col">
                    <p class="fw-bolder">
                        Credential
                    </p>
                    <p class="lead">
                        MBA qualification, former Labour Ministry employee, and ISCA associate.
                    </p>
                </div>
                <div class="col">
                    <p class="fw-bolder">
                        Experience
                    </p>
                    <p class="lead">
                        Years of dedicated service in immigration consultancy.
                    </p>
                </div>
                <div class="d-flex gap-3">
                    <a href="{{ route("consultation") }}" class="btn btn-outline-dark">Learn More</a>
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

@endsection

@section('scripts')
    <script>
        console.log("users view");
    </script>
@endsection