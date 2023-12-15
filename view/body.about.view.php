<?php
$logo = readEnv::get('company_name');
$slogan = readEnv::get('company_slogan');
?>
<div class="bg-gray-50">
    <div class="grid gap-4 mx-2 mt-10 bg-gray-300 divide-x lg:grid-cols-6 lg:grid-rows-1 sm:grid-cols-3 sm:grid-rows-2">


        <div class="">
            <div class="content-center justify-center "><img class="w-[90px] content-center mx-auto" src="./images/html5-logo2.png" alt="Html 5 logo"></div>
            <div class="text-justify " >HTML5 the latest web standards, to display and define hypertext</div>
        </div>

        <div>
            <div class="justify-center "><img class="w-[100px] mx-auto" src="./images/css3-logo.png" alt="CSS 3 logo"></div>
            <div class="text-justify ">CSS3 the lates and greatest standard for styling and shaping the web, with full browser compatibility </div>
        </div>

        <div>
            <div class="justify-center "><img class="w-[100px] mx-auto " src="./images/gg3po-newGnu-medium.png" alt="GNU logo"></div>
            <div class="text-justify ">GNU the symbol of free software, under the GPL</div>
        </div>

        <div>
            <div class="justify-center "><img class=" w-[90px] mx-auto" src="./images/Tux.png" alt="Linux logo"></div>
            <div class="text-justify ">Linux, the rock solid free and open source operating system to carry your business and the day</div>

        </div>

        <div>
            <div class="justify-center "><img class="w-[100px] mx-auto" src="./images/opensource_512.png" alt="Open source  logo"></div>
            <div class="text-justify ">Great open source software, works well, and respects your freedom and privacy</div>
        </div>

        <div>
            <div class="justify-center "><img class="w-[100px] mx-auto" src="./images/painting-brush.png" alt="web Design "></div>
            <div class="text-justify " >So your website would look good, not just work properly.</div>
        </div>

    </div>

    <div class="bg-gray-50">


        <h3 class="flex justify-center my-5 bg-gray-400 ">About Us</h3>

        <p class="mx-2 mb-2 font-sans text-lg font-normal text-justify"><span class="float-left mx-2 text-3xl font-extrabold text-red-800">Introduction:</span>

            Welcome to <span class="font-sans font-extrabold text-logo"><?php echo $logo; ?></span></span>, a dynamic one-person company dedicated to providing top-notch consulting, system integration, and web development solutions for small businesses. Founded by [Your Name], our company is driven by a passion for empowering small enterprises with the potential of open-source and free software. With years of expertise in the industry, we aim to be the go-to partner for businesses seeking cost-effective and innovative IT solutions.</p>

        <p class="mx-2 mb-2 font-sans text-lg font-normal text-justify"><span class="float-left mx-2 text-3xl font-extrabold text-red-800 ">Our Mission:</span>

            At <span class="font-sans font-extrabold text-logo"><?php echo $logo; ?></span>, our mission is to level the playing field for small businesses by harnessing the power of open-source and free software. We understand that budget constraints often hinder growth and technological advancement. Therefore, our primary goal is to offer high-quality services tailored to meet each client's unique requirements, without burdening them with excessive costs. We firmly believe that every business, regardless of its size, deserves access to cutting-edge technology, and we are committed to making that a reality.</p>

        <p class="mx-2 mb-2 font-sans text-lg font-normal text-justify "><span class="float-left mx-2 text-3xl font-extrabold text-red-800 ">What Sets Us Apart:</span>

            What distinguishes <span class="font-sans font-extrabold text-logo"><?php echo $logo; ?></span> from other consulting firms is our unwavering dedication to open-source and free software. We firmly believe that these technologies not only offer tremendous potential but also promote transparency, flexibility, and security. By leveraging the power of open-source tools, we enable our clients to escape vendor lock-ins and customize solutions to suit their specific needs. Our proficiency in system integration ensures seamless compatibility among different software components, streamlining operations and boosting efficiency.</p>

        <p class="mx-2 mb-2 font-sans text-lg font-normal text-justify "><span class="float-left mx-2 text-3xl font-extrabold text-red-800 ">Our Services:</span>

            At <span class="font-sans font-extrabold text-logo"><?php echo $logo; ?></span>, we offer a comprehensive range of services designed to cater to the diverse needs of small businesses. Our consulting services include thorough IT assessments, strategic planning, and technology roadmaps, enabling our clients to make informed decisions about their IT infrastructure. In system integration, we facilitate the smooth integration of various software systems, optimizing workflow and data exchange. Additionally, our web development services craft visually stunning and user-friendly websites that help businesses establish a robust online presence and enhance customer engagement.</P>

        <p class="mx-2 mb-2 font-sans text-lg font-normal text-justify "><span class="float-left mx-2 text-3xl font-extrabold text-red-800 ">Our Commitment:</span>

            We take immense pride in our commitment to excellence and customer satisfaction. Our approach is characterized by personalized attention to each project, ensuring that we not only meet but exceed our clients' expectations. We understand that small businesses have unique challenges, and our agile and customer-centric approach allows us to adapt quickly to their evolving needs. Our continuous support, even after project completion, ensures that our clients can rely on us as a trusted technology partner in their journey towards success.</P>

        </p class="mx-2 mb-2 font-sans text-lg font-normal text-justify">At <span class="font-sans font-extrabold text-logo"><?php echo $logo; ?></span>, we believe that every business deserves reliable and affordable IT solutions. Join us in embracing the potential of open-source and free software to transform your business and accelerate growth. Contact us today, and let's embark on a transformative journey together.</p>

        <p class="mb-12 ">&nbsp;</p>
    </div>
</div>