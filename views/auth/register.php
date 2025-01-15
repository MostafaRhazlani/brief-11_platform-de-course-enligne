<?php include('../layout/_HEADER.php'); ?>

<main class="bg-transparent">
    <!-- banner section -->
    <section>
        <!-- banner section -->
        <div
            class="bg-lightGrey10 dark:bg-lightGrey10-dark relative z-0 overflow-y-visible py-50px md:py-20 lg:py-100px 2xl:pb-150px 2xl:pt-40.5">
            <!-- animated icons -->
            <div>
                <img
                    class="absolute left-0 bottom-0 md:left-[14px] lg:left-[50px] lg:bottom-[21px] 2xl:left-[165px] 2xl:bottom-[60px] animate-move-var z-10"
                    src="../../assets/images/herobanner/herobanner__1.png"
                    alt=""><img
                    class="absolute left-0 top-0 lg:left-[50px] lg:top-[100px] animate-spin-slow"
                    src="../../assets/images/herobanner/herobanner__2.png"
                    alt=""><img
                    class="absolute right-[30px] top-0 md:right-10 lg:right-[575px] 2xl:top-20 animate-move-var2 opacity-50 hidden md:block"
                    src="../../assets/images/herobanner/herobanner__3.png"
                    alt="">

                <img
                    class="absolute right-[30px] top-[212px] md:right-10 md:top-[157px] lg:right-[45px] lg:top-[100px] animate-move-hor"
                    src="../../assets/images/herobanner/herobanner__5.png"
                    alt="">
            </div>
            <div class="container">
                <div class="text-center">
                    <h1
                        class="text-3xl md:text-size-40 2xl:text-size-55 font-bold text-blackColor dark:text-blackColor-dark mb-7 md:mb-6 pt-3">
                        Sign up
                    </h1>
                    <ul class="flex gap-1 justify-center">
                        <li>
                            <a
                                href="../home/index.php"
                                class="text-lg text-blackColor2 dark:text-blackColor2-dark">Home <i class="icofont-simple-right"></i></a>
                        </li>
                        <li>
                            <span
                                class="text-lg text-blackColor2 dark:text-blackColor2-dark">Sign up</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--form section -->
    <section class="relative">
        <div class="container py-100px">
            <div class="tab md:w-2/3 mx-auto">
                <!-- tab controller -->

                <div class="tab-links grid grid-cols-2 gap-11px text-blackColor text-lg lg:text-size-22 font-semibold font-hind mb-43px mt-30px md:mt-0">
                    <a href="./login.php" class="flex justify-center py-9px lg:py-6 hover:text-primaryColor dark:text-whiteColor dark:hover:text-primaryColor bg-white dark:bg-whiteColor-dark dark:hover:bg-whiteColor-dark hover:bg-white relative group/btn shadow-bottom hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard">
                        <span class="absolute w-0 h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>
                        Login
                    </a>
                    <a href ="./register.php" class="flex justify-center py-9px lg:py-6 hover:text-primaryColor dark:hover:text-primaryColor dark:text-whiteColor bg-lightGrey7 dark:bg-lightGrey7-dark hover:bg-white dark:hover:bg-whiteColor-dark relative group/btn hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard">
                        <span class="absolute w-full h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>
                        Sign Up
                    </a>
                </div>

                <!--  tab contents -->
                <div
                    class="shadow-container bg-whiteColor dark:bg-whiteColor-dark pt-10px px-5 pb-10 md:p-50px md:pt-30px rounded-5px">
                    <div class="tab-contents">
                        <!-- sign up form-->
                        <div class="transition-opacity duration-150 ease-linear">
                        <!-- heading   -->
                        <div class="text-center">
                            <h3
                                class="text-size-32 font-bold text-blackColor dark:text-blackColor-dark mb-2 leading-normal">
                                Sign Up
                            </h3>
                        </div>

                        <form action="./newUser.php" method="POST" class="pt-25px" data-aos="fade-up">
                            <div
                                class="grid grid-cols-1 lg:grid-cols-2 lg:gap-x-30px gap-y-25px mb-25px">
                                <div>
                                <label
                                    class="text-contentColor dark:text-contentColor-dark mb-10px block">First Name</label>
                                <input
                                    name="firstName"
                                    type="text"
                                    placeholder="First Name"
                                    class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded">
                                    <?php echo (isset($_SESSION['validationFirstName'])) ? "<span class='text-secondaryColor'>".$_SESSION['validationFirstName'] ."</span>" : ''?>
                                </div>
                                <div>
                                <label
                                    class="text-contentColor dark:text-contentColor-dark mb-10px block">Last Name</label>
                                <input
                                    name="lastName"
                                    type="text"
                                    placeholder="Last Name"
                                    class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded">
                                    <?php echo (isset($_SESSION['validationLastName'])) ? "<span class='text-secondaryColor'>". $_SESSION['validationLastName'] ."</span>" : '' ?>
                                </div>
                            </div>
                            <div
                                class="grid grid-cols-1 lg:grid-cols-2 lg:gap-x-30px gap-y-25px mb-25px">
                                <div>
                                <label
                                    class="text-contentColor dark:text-contentColor-dark mb-10px block">Username</label>
                                <input
                                    name="username"
                                    type="text"
                                    placeholder="Username"
                                    class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded">
                                    <?php echo (isset($_SESSION['validationUsername'])) ? "<span class='text-secondaryColor'>". $_SESSION['validationUsername'] ."</span>" : '';
                                          echo (isset($_SESSION['existUsername'])) ? "<span class='text-secondaryColor'>". $_SESSION['existUsername'] ."</span>" : ''
                                    ?>
                                </div>
                                <div>
                                <label
                                    class="text-contentColor dark:text-contentColor-dark mb-10px block">Email</label>
                                <input
                                    name="email"
                                    type="email"
                                    placeholder="Your Email"
                                    class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded">
                                    <?php echo (isset($_SESSION['validationEmail'])) ? "<span class='text-secondaryColor'>". $_SESSION['validationEmail'] ."</span>" : '';
                                            echo (isset($_SESSION['existEmail'])) ? "<span class='text-secondaryColor'>". $_SESSION['existEmail'] ."</span>" : ''

                                    ?>
                                </div>
                            </div>
                            <div
                                class="grid grid-cols-1 lg:grid-cols-2 lg:gap-x-30px gap-y-25px mb-25px">
                                <div>
                                    <label
                                        class="text-contentColor dark:text-contentColor-dark mb-10px block">Password</label>
                                    <input
                                        name="password"
                                        type="password"
                                        placeholder="Password"
                                        class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded">
                                        <?php echo (isset($_SESSION['validationPassword'])) ? "<span class='text-secondaryColor'>". $_SESSION['validationPassword'] ."</span>" : '' ?>
                                </div>
                                <div>
                                    <label
                                        class="text-contentColor dark:text-contentColor-dark mb-10px block">Re-Enter Password</label>
                                    <input
                                        name="confirm_password"
                                        type="password"
                                        placeholder="Re-Enter Password"
                                        class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded">
                                        <?php echo isset($_SESSION['invalidPassword']) ? "<span class='text-secondaryColor'>". $_SESSION['invalidPassword'] ."</span>" : '';
                                        ?>
                                </div>
                            </div>
                            <div>
                                <label class="text-contentColor dark:text-contentColor-dark mb-10px block">Choose what you want to be</label>
                                <select name="role" id="" class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded">
                                    <option class="text-black" value="student">Student</option>
                                    <option value="teacher">Teacher</option>
                                </select>
                            </div>
                            
                            <div class="mt-25px text-center">
                                <button
                                type="submit"
                                class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px w-full border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark">
                                Sign up
                                </button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- animated icons -->
        <div>
            <img
                loading="lazy"
                class="absolute right-[14%] top-[30%] animate-move-var"
                src="../../assets/images/education/hero_shape2.png"
                alt="Shape">
            <img
                loading="lazy"
                class="absolute left-[5%] top-1/2 animate-move-hor"
                src="../../assets/images/education/hero_shape3.png"
                alt="Shape">
            <img
                loading="lazy"
                class="absolute left-1/2 bottom-[60px] animate-spin-slow"
                src="../../assets/images/education/hero_shape4.png"
                alt="Shape">
            <img
                loading="lazy"
                class="absolute left-1/2 top-10 animate-spin-slow"
                src="../../assets/images/education/hero_shape5.png"
                alt="Shape">
        </div>
    </section>
</main>

<?php
    session_unset();
    include('../layout/_FOOTER.php') 
?>
