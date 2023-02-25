<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home | WorldProgramming</title>
</head>
<body>
        <?php
            include "Header.php";
        ?>


        <section class="text-gray-600 body-font bg-white p-10">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-blue-900">Welcome To WorldProgramming
                </h1>
                <p class="mb-8 leading-relaxed">Confused on which course to take? I have got you covered. Browse Languages and find out the best course for you. Its free! WorldProgramming is my attempt to teach basics and those coding techniques to people in short time which took me ages to learn.</p>
                <div class="flex justify-center">
                    <a href="Languages.php"><button class="inline-flex text-white bg-black border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Languages</button></a>
                    <a href="Blog.php"><button class="ml-4 inline-flex text-gray-700 bg-gray-200 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Explore Bolg</button></a>
                </div>
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="hero" src="first.jpg">
                </div>
            </div>
        </section>


        <center><h1 class="sm:text-3xl text-2xl font-medium title-font mb-14 text-blue-900">Populor Programming Languages</h1></center>

        <section class="text-gray-600 body-font">
            <div class="container px-14 py-0 mx-auto">
                <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/3">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-3xl overflow-hidden bg-white shadow-lg">
                    <img class="lg:h-48 md:h-36 w-full object-cover object-center rounded-3xl" src="HTML.jpg" alt="blog">
                    <div class="p-6">
                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Free Course</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">HTML 5</h1>
                        <p class="leading-relaxed mb-3">HTML 5 is used for ront-end devlopment and this section for HTML 5 all program and code to devlop any type of website. Click start learnig to see more infromation.</p>
                        <div class="flex items-center flex-wrap ">
                        <a href="/Web/Lang/HTML.php">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            Start Learinig
                        </button>
                        </a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/3">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-3xl overflow-hidden bg-white shadow-lg">
                    <img class="lg:h-48 md:h-36 w-full object-cover object-center rounded-3xl" src="CSS.png" alt="blog">
                    <div class="p-6">
                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Free Course</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">CSS 3</h1>
                        <p class="leading-relaxed mb-3">CSS 3 to use design a web page in this section to see diffrent type of design. Click start learning top see more infromation about CSS 3.</p>
                        <div class="flex items-center flex-wrap">
                        <a href="/Web/Lang/CSS.php">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            Start Learinig
                        </button>
                        </a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/3">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-3xl overflow-hidden bg-white shadow-lg">
                    <img class="lg:h-48 md:h-36 w-full object-cover object-center rounded-3xl" src="JavaScript.jpg" alt="blog">
                    <div class="p-6">
                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Free Course</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">JavaScript</h1>
                        <p class="leading-relaxed mb-3">JavaScript is used for front-end devlopment and back-end devlopment in this section all program about JavaScript. Click start learning to see more infromation.</p>
                        <div class="flex items-center flex-wrap ">
                        <a href="/Web/Lang/JavaScript.php">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            Start Learinig
                        </button>
                        </a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>



                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-10 mx-auto">
                        <h1 class="text-3xl font-medium title-font text-blue-900 mb-12 text-center">Testimonials</h1>
                        <div class="flex flex-wrap -m-4">
                        <div class="p-4 md:w-1/2 w-full">
                            <div class="h-full bg-gray-100 p-8 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                            </svg>
                            <p class="leading-relaxed mb-6">Hello guys, This is Anshu a full stact web devloper and founder of WorldProgramming. Main idea of devlopling this project WorldProgramming is given by Anshu. This plateform for all new programmer hai devloper.</p>
                            <a class="inline-flex items-center">
                                <img alt="testimonial" src="Anshu.jpg" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                                <span class="flex-grow flex flex-col pl-4">
                                <span class="title-font font-medium text-gray-900">Anshu Kumar</span>
                                <span class="text-gray-500 text-sm">Founder</span>
                                </span>
                            </a>
                            </div>
                        </div>
                        <div class="p-4 md:w-1/2 w-full">
                            <div class="h-full bg-gray-100 p-8 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                            </svg>
                            <p class="leading-relaxed mb-6">Hii guys, This is Ankita a front-end web devloper and founder of WorldProgramming. Second Main idea of devlopling this project WorldProgramming is given by Ankita. This plateform for all new programmer hai devloper.</p>
                            <a class="inline-flex items-center">
                                <img alt="testimonial" src="Ankita.jpg" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                                <span class="flex-grow flex flex-col pl-4">
                                <span class="title-font font-medium text-gray-900">Ankita kumari</span>
                                <span class="text-gray-500 text-sm">Designer</span>
                                </span>
                            </a>
                            </div>
                        </div>
                        </div>
                    </div>
                </section>



        <?php
            include "Footer.php";
        ?>

</body>
</html>