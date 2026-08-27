@extends('layouts.app')

@section('title', 'Request a Quote - Xclip')

@section('content')

{{-- =====================================================
     RFQ HERO
===================================================== --}}

<section class="rfq-hero">

    <div class="container">

        <div class="rfq-hero-box">

            <p class="section-label">
                REQUEST A QUOTE
            </p>

            <h1>
                Let's Start
                <span>Your Project.</span>
            </h1>

            <p>
                Tell us about your project and business needs.
                Our team will review your requirements and
                get back to you.
            </p>

        </div>

    </div>

</section>


{{-- =====================================================
     RFQ INTRO
===================================================== --}}

<section class="rfq-intro">

    <div class="container">

        <div class="rfq-intro-grid">

            <div>

                <p class="section-label">
                    HOW IT WORKS
                </p>

                <h2>
                    Tell Us
                    What You Need.
                </h2>

            </div>

            <div>

                <p>
                    Complete the form below with as much
                    information as possible. This will help
                    the Xclip team understand your project
                    requirements.
                </p>

                <div class="rfq-steps">

                    <div class="rfq-step">

                        <span>01</span>

                        <div>
                            <h3>Submit</h3>
                            <p>
                                Send your project requirements
                                through the form.
                            </p>
                        </div>

                    </div>

                    <div class="rfq-step">

                        <span>02</span>

                        <div>
                            <h3>Review</h3>
                            <p>
                                Our team reviews your requirements
                                and project information.
                            </p>
                        </div>

                    </div>

                    <div class="rfq-step">

                        <span>03</span>

                        <div>
                            <h3>Discuss</h3>
                            <p>
                                We contact you to discuss the
                                project in more detail.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =====================================================
     RFQ FORM
===================================================== --}}

<section class="rfq-form-section">

    <div class="container">

        <div class="rfq-form-wrapper">

            <div class="rfq-form-header">

                <p class="section-label">
                    PROJECT INFORMATION
                </p>

                <h2>
                    Request
                    a Quote.
                </h2>

                <p>
                    Please provide your contact and project
                    information below.
                </p>

            </div>


            <form class="rfq-form">


                {{-- =================================================
                     COMPANY INFORMATION
                ================================================== --}}

                <div class="rfq-form-section-title">

                    <span>01</span>

                    <h3>
                        Company Information
                    </h3>

                </div>


                <div class="rfq-form-grid">

                    <div class="form-group">

                        <label for="company">
                            Company Name
                        </label>

                        <input
                            type="text"
                            id="company"
                            name="company"
                            placeholder="Your company name">

                    </div>


                    <div class="form-group">

                        <label for="company_type">
                            Company / Organization Type
                        </label>

                        <select
                            id="company_type"
                            name="company_type">

                            <option value="">
                                Select type
                            </option>

                            <option value="private">
                                Private Company
                            </option>

                            <option value="government">
                                Government
                            </option>

                            <option value="organization">
                                Organization
                            </option>

                            <option value="individual">
                                Individual
                            </option>

                            <option value="other">
                                Other
                            </option>

                        </select>

                    </div>

                </div>


                {{-- =================================================
                     CONTACT INFORMATION
                ================================================== --}}

                <div class="rfq-form-section-title">

                    <span>02</span>

                    <h3>
                        Contact Information
                    </h3>

                </div>


                <div class="rfq-form-grid">

                    <div class="form-group">

                        <label for="name">
                            Contact Name
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Your full name">

                    </div>


                    <div class="form-group">

                        <label for="position">
                            Position
                        </label>

                        <input
                            type="text"
                            id="position"
                            name="position"
                            placeholder="Your position">

                    </div>


                    <div class="form-group">

                        <label for="email">
                            Email
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="your@email.com">

                    </div>


                    <div class="form-group">

                        <label for="phone">
                            Phone / WhatsApp
                        </label>

                        <input
                            type="text"
                            id="phone"
                            name="phone"
                            placeholder="+62 xxx xxxx xxxx">

                    </div>

                </div>


                {{-- =================================================
                     PROJECT INFORMATION
                ================================================== --}}

                <div class="rfq-form-section-title">

                    <span>03</span>

                    <h3>
                        Project Information
                    </h3>

                </div>


                <div class="rfq-form-grid">

                    <div class="form-group">

                        <label for="project_name">
                            Project Name
                        </label>

                        <input
                            type="text"
                            id="project_name"
                            name="project_name"
                            placeholder="Project name">

                    </div>


                    <div class="form-group">

                        <label for="service">
                            Service Category
                        </label>

                        <select
                            id="service"
                            name="service">

                            <option value="">
                                Select service
                            </option>

                            <option value="construction">
                                Construction
                            </option>

                            <option value="trade">
                                Trade
                            </option>

                            <option value="industrial">
                                Industrial
                            </option>

                            <option value="professional">
                                Professional Services
                            </option>

                            <option value="other">
                                Other
                            </option>

                        </select>

                    </div>

                </div>


                {{-- =================================================
                     PROJECT LOCATION
                ================================================== --}}

                <div class="rfq-form-grid">

                    <div class="form-group">

                        <label for="project_location">
                            Project Location
                        </label>

                        <input
                            type="text"
                            id="project_location"
                            name="project_location"
                            placeholder="City / Province / Country">

                    </div>


                    <div class="form-group">

                        <label for="project_status">
                            Project Status
                        </label>

                        <select
                            id="project_status"
                            name="project_status">

                            <option value="">
                                Select status
                            </option>

                            <option value="planning">
                                Planning
                            </option>

                            <option value="tender">
                                Tender / Procurement
                            </option>

                            <option value="ready">
                                Ready to Start
                            </option>

                            <option value="ongoing">
                                Ongoing
                            </option>

                        </select>

                    </div>

                </div>


                {{-- =================================================
                     BUDGET + TIMELINE
                ================================================== --}}

                <div class="rfq-form-grid">

                    <div class="form-group">

                        <label for="budget">
                            Estimated Budget
                        </label>

                        <select
                            id="budget"
                            name="budget">

                            <option value="">
                                Select budget range
                            </option>

                            <option value="under-100m">
                                Under Rp 100 Million
                            </option>

                            <option value="100m-500m">
                                Rp 100 – 500 Million
                            </option>

                            <option value="500m-1b">
                                Rp 500 Million – 1 Billion
                            </option>

                            <option value="1b-5b">
                                Rp 1 – 5 Billion
                            </option>

                            <option value="above-5b">
                                Above Rp 5 Billion
                            </option>

                            <option value="not-decided">
                                Not Decided Yet
                            </option>

                        </select>

                    </div>


                    <div class="form-group">

                        <label for="timeline">
                            Expected Timeline
                        </label>

                        <select
                            id="timeline"
                            name="timeline">

                            <option value="">
                                Select timeline
                            </option>

                            <option value="less-1-month">
                                Less than 1 Month
                            </option>

                            <option value="1-3-months">
                                1 – 3 Months
                            </option>

                            <option value="3-6-months">
                                3 – 6 Months
                            </option>

                            <option value="6-12-months">
                                6 – 12 Months
                            </option>

                            <option value="more-12-months">
                                More than 12 Months
                            </option>

                        </select>

                    </div>

                </div>


                {{-- =================================================
                     PROJECT DESCRIPTION
                ================================================== --}}

                <div class="rfq-form-section-title">

                    <span>04</span>

                    <h3>
                        Project Details
                    </h3>

                </div>


                <div class="form-group">

                    <label for="description">
                        Project Description
                    </label>

                    <textarea
                        id="description"
                        name="description"
                        rows="7"
                        placeholder="Describe your project, requirements, scope of work, specifications, or other information..."></textarea>

                </div>


                {{-- =================================================
                     DOCUMENT
                ================================================== --}}

                <div class="form-group">

                    <label for="document">
                        Supporting Document
                    </label>

                    <input
                        type="file"
                        id="document"
                        name="document">

                    <small>
                        You can attach a project brief,
                        specification, drawing, or other
                        supporting document.
                    </small>

                </div>


                {{-- =================================================
                     AGREEMENT
                ================================================== --}}

                <div class="rfq-agreement">

                    <label>

                        <input
                            type="checkbox"
                            name="agreement">

                        <span>
                            I confirm that the information
                            provided is accurate and may be
                            used by Xclip to contact me
                            regarding this request.
                        </span>

                    </label>

                </div>


                {{-- =================================================
                     SUBMIT
                ================================================== --}}

                <button
                    type="button"
                    class="rfq-submit">
                    Submit Request →
                </button>


            </form>

        </div>

    </div>

</section>


{{-- =====================================================
     RFQ CTA
===================================================== --}}

<section class="rfq-cta">

    <div class="container">

        <p class="section-label">
            NEED HELP?
        </p>

        <h2>
            Not Sure
            Where to Start?
        </h2>

        <p>
            If you're not sure which information to provide,
            you can contact our team directly.
        </p>

        <a href="/contact">
            Contact Xclip →
        </a>

    </div>

</section>

@endsection