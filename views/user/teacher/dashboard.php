<?php include('../../layout/_HEADER.php') ?>
<!-- main body -->
<main class="bg-transparent">
    <?php include('../banner.php') ?>

    <!--dashbord menu section -->
    <section>
        <div class="container-fluid-2">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-30px pt-30px pb-100px">
                <!-- navigation menu -->
                <?php include('../navigation-menu.php') ?>
                <!-- dashboard content -->
                <div class="lg:col-start-4 lg:col-span-9">
                    <!-- counter -->
                    <div
                        class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-5">
                        <div
                            class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark">
                            <h2
                                class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                                Dashboard
                            </h2>
                        </div>

                        <!-- counter area -->
                        <div
                            class="counter grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-x-30px gap-y-5 pb-5">
                            <div
                                class="p-5 md:px-10 md:py-50px bg-lightGrey5 dark:bg-whiteColor-dark rounded-lg2 shadow-accordion-dark">
                                <div class="flex gap-4">
                                    <div>
                                        <img
                                            src="/assets/images/counter/counter__1.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <p
                                            class="text-size-34 leading-[1.1] text-blackColor font-bold font-hind dark:text-blackColor-dark">
                                            <span data-countup-number="900"> 900</span><span>+</span>
                                        </p>
                                        <p
                                            class="text-blackColor font-medium leading-[18px] dark:text-blackColor-dark">
                                            Enrolled Courses
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="p-5 md:px-10 md:py-50px bg-lightGrey5 dark:bg-whiteColor-dark rounded-lg2 shadow-accordion-dark">
                                <div class="flex gap-4">
                                    <div>
                                        <img
                                            src="/assets/images/counter/counter__2.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <p
                                            class="text-size-34 leading-[1.1] text-blackColor font-bold font-hind dark:text-blackColor-dark">
                                            <span data-countup-number="500">500</span><span>+</span>
                                        </p>
                                        <p
                                            class="text-blackColor font-medium leading-[18px] dark:text-blackColor-dark">
                                            Active Courses
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="p-5 md:px-10 md:py-50px bg-lightGrey5 dark:bg-whiteColor-dark rounded-lg2 shadow-accordion-dark">
                                <div class="flex gap-4">
                                    <div>
                                        <img
                                            src="/assets/images/counter/counter__3.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <p
                                            class="text-size-34 leading-[1.1] text-blackColor font-bold font-hind dark:text-blackColor-dark">
                                            <span data-countup-number="300">300</span><span>k</span>
                                        </p>
                                        <p
                                            class="text-blackColor font-medium leading-[18px] dark:text-blackColor-dark">
                                            Complete Courses
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="p-5 md:px-10 md:py-50px bg-lightGrey5 dark:bg-whiteColor-dark rounded-lg2 shadow-accordion-dark">
                                <div class="flex gap-4">
                                    <div>
                                        <img
                                            src="/assets/images/counter/counter__4.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <p
                                            class="text-size-34 leading-[1.1] text-blackColor font-bold font-hind dark:text-blackColor-dark">
                                            <span data-countup-number="1500">1500</span><span>+</span>
                                        </p>
                                        <p
                                            class="text-blackColor font-medium leading-[18px] dark:text-blackColor-dark">
                                            Total Courses
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="p-5 md:px-10 md:py-50px bg-lightGrey5 dark:bg-whiteColor-dark rounded-lg2 shadow-accordion-dark">
                                <div class="flex gap-4">
                                    <div>
                                        <img
                                            src="/assets/images/counter/counter__3.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <p
                                            class="text-size-34 leading-[1.1] text-blackColor font-bold font-hind dark:text-blackColor-dark">
                                            <span data-countup-number="30">30</span><span>k</span>
                                        </p>
                                        <p
                                            class="text-blackColor font-medium leading-[18px] dark:text-blackColor-dark">
                                            Total Students
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="p-5 md:px-10 md:py-50px bg-lightGrey5 dark:bg-whiteColor-dark rounded-lg2 shadow-accordion-dark">
                                <div class="flex gap-4">
                                    <div>
                                        <img
                                            src="/assets/images/counter/counter__4.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <p
                                            class="text-size-34 leading-[1.1] text-blackColor font-bold font-hind dark:text-blackColor-dark">
                                            <span data-countup-number="90">90</span><span>,000k</span>
                                        </p>
                                        <p
                                            class="text-blackColor font-medium leading-[18px] dark:text-blackColor-dark">
                                            Total Earning
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- chart area-->
                    <div
                        class="py-10 px-5 mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-5">
                        <div class="flex flex-wrap">
                            <!-- linechart -->
                            <div class="w-full md:w-65%">
                                <div class="md:px-5 py-10px md:py-0">
                                    <div
                                        class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark flex justify-between items-center gap-2">
                                        <h2
                                            class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                                            Dashboard
                                        </h2>
                                        <div class="bg-whiteColor rounded-md relative">
                                            <select
                                                class="bg-transparent text-darkBlue w-42.5 px-3 py-6px focus:outline-none block appearance-none leading-1.5 relative z-20 focus:shadow-select border border-borderColor6 rounded-md">
                                                <option selected="" value="HTML">HTML</option>
                                                <option value="CSS">CSS</option>
                                                <option value="Javascript">Javascript</option>
                                                <option value="PHP">PHP</option>
                                                <option value="WordPress">WordPress</option>
                                            </select>
                                            <i
                                                class="icofont-simple-down absolute top-1/2 right-3 -translate-y-1/2 block text-lg z-10"></i>
                                        </div>
                                    </div>
                                    <canvas id="lineChart"></canvas>
                                </div>
                            </div>

                            <!-- piechart -->
                            <div class="w-full md:w-35%">
                                <div class="md:px-5 py-10px md:py-0">
                                    <div
                                        class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark flex justify-between items-center gap-2">
                                        <h2
                                            class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                                            Traffic
                                        </h2>
                                        <div class="bg-whiteColor rounded-md relative">
                                            <select
                                                class="bg-transparent text-darkBlue w-42.5 px-3 py-6px focus:outline-none block appearance-none leading-1.5 relative z-20 focus:shadow-select border border-borderColor6 rounded-md">
                                                <option selected="" value="Today">Today</option>
                                                <option value="Weekly">Weekly</option>
                                                <option value="Monthly">Monthly</option>
                                                <option value="Yearly">Yearly</option>
                                            </select>
                                            <i
                                                class="icofont-simple-down absolute top-1/2 right-3 -translate-y-1/2 block text-lg z-10"></i>
                                        </div>
                                    </div>
                                    <canvas id="pieChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-5 max-h-137.5 overflow-auto">
                        <div
                            class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark flex items-center justify-between gap-2 flex-wrap">
                            <h2
                                class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                                Total Feedbacks
                            </h2>
                            <a
                                href="../../course.html"
                                class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8">See More...</a>
                        </div>
                        <div class="overflow-auto">
                            <table class="w-full text-left text-nowrap">
                                <thead
                                    class="text-sm md:text-base text-blackColor dark:text-blackColor-dark bg-lightGrey5 dark:bg-whiteColor-dark leading-1.8 md:leading-1.8">
                                    <tr>
                                        <th class="px-5px py-10px md:px-5">Course Name</th>
                                        <th class="px-5px py-10px md:px-5">Enrolled</th>
                                        <th class="px-5px py-10px md:px-5">Rating</th>
                                    </tr>
                                </thead>
                                <tbody
                                    class="text-size-13 md:text-base text-contentColor dark:text-contentColor-dark font-normal">
                                    <tr class="leading-1.8 md:leading-1.8">
                                        <th class="px-5px py-10px md:px-5 font-normal">
                                            <p>Javascript</p>
                                        </th>
                                        <td class="px-5px py-10px md:px-5">
                                            <p>1100</p>
                                        </td>
                                        <td class="px-5px py-10px md:px-5">
                                            <div class="text-primaryColor">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-star w-14px inline-block">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr
                                        class="leading-1.8 md:leading-1.8 bg-lightGrey5 dark:bg-whiteColor-dark">
                                        <th class="px-5px py-10px md:px-5 font-normal">
                                            <p>PHP</p>
                                        </th>
                                        <td class="px-5px py-10px md:px-5">
                                            <p>700</p>
                                        </td>
                                        <td class="px-5px py-10px md:px-5">
                                            <div class="text-primaryColor">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-star w-14px inline-block">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="leading-1.8 md:leading-1.8">
                                        <th class="px-5px py-10px md:px-5 font-normal">
                                            <p>HTML</p>
                                        </th>
                                        <td class="px-5px py-10px md:px-5">
                                            <p>1350</p>
                                        </td>
                                        <td class="px-5px py-10px md:px-5">
                                            <div class="text-primaryColor">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-star w-14px inline-block">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr
                                        class="leading-1.8 md:leading-1.8 bg-lightGrey5 dark:bg-whiteColor-dark">
                                        <th class="px-5px py-10px md:px-5 font-normal">
                                            <p>Graphic</p>
                                        </th>
                                        <td class="px-5px py-10px md:px-5">
                                            <p>1266</p>
                                        </td>
                                        <td class="px-5px py-10px md:px-5">
                                            <div class="text-primaryColor">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-star w-14px inline-block">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include('../../layout/_FOOTER.php') ?>