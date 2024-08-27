<!DOCTYPE html>
<html lang="en">

<!-- ======= Head ======= -->
@include('frontend.head')

<body>

    <!-- ======= Header ======= -->
    @include('frontend.navbar')

    <!-- ======= Hero Section ======= -->
    @include('frontend.hero')
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        @include('frontend.client')
        <!-- End Cliens Section -->

        <!-- ======= About Us Section ======= -->
        @include('frontend.about')
        <!-- End About Us Section -->

        <!-- ======= Why Us Section ======= -->
        @include('frontend.whyus')
        <!-- End Why Us Section -->

        <!-- ======= Skills Section ======= -->
        @include('frontend.skills')
        <!-- End Skills Section -->

        <!-- ======= Services Section ======= -->
        @include('frontend.services')
        <!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        @include('frontend.cta')
        <!-- End Cta Section -->

        <!-- ======= Portfolio Section ======= -->
        @include('frontend.portofolio')
        <!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        @include('frontend.team')
        <!-- End Team Section -->

        <!-- ======= Pricing Section ======= -->
        @include('frontend.pricing')
        <!-- End Pricing Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        @include('frontend.faq')
        <!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        @include('frontend.contact')
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    {{-- Footer --}}
    @include('frontend.footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('frontend.js')

</body>

</html>
