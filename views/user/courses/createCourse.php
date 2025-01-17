<?php
    require_once __DIR__ . '/../../../classes/Database.php'; 
    require_once __DIR__ . '/../../../classes/Category.php';
    
    $db = new Database();
    $conn =$db->connect();

    $categories = new Category($conn);

    $allGategories = $categories->getAllCategories();


?>

<?php include('../../layout/_HEADER.php') ?>
<!-- main body -->
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
                    src="../../../assets/images/herobanner/herobanner__1.png"
                    alt=""><img
                    class="absolute left-0 top-0 lg:left-[50px] lg:top-[100px] animate-spin-slow"
                    src="../../../assets/images/herobanner/herobanner__2.png"
                    alt=""><img
                    class="absolute right-[30px] top-0 md:right-10 lg:right-[575px] 2xl:top-20 animate-move-var2 opacity-50 hidden md:block"
                    src="../../../assets/images/herobanner/herobanner__3.png"
                    alt="">

                <img
                    class="absolute right-[30px] top-[212px] md:right-10 md:top-[157px] lg:right-[45px] lg:top-[100px] animate-move-hor"
                    src="../../../assets/images/herobanner/herobanner__5.png"
                    alt="">
            </div>
            <div class="container">
                <div class="text-center">
                    <h1
                        class="text-3xl md:text-size-40 2xl:text-size-55 font-bold text-blackColor dark:text-blackColor-dark mb-7 md:mb-6 pt-3">
                        Create Course
                    </h1>
                    <ul class="flex gap-1 justify-center">
                        <li>
                            <a
                                href="/views/home/index.php"
                                class="text-lg text-blackColor2 dark:text-blackColor2-dark">Home <i class="icofont-simple-right"></i></a>
                        </li>
                        <li>
                            <span
                                class="text-lg text-blackColor2 dark:text-blackColor2-dark">Create Course</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--create course section -->
    <div>
        <div class="container pt-100px pb-100px" data-aos="fade-up">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-x-30px gap-y-5">
                <!-- create course left -->
                <form action="./insertCourse.php" method="POST" class="lg:col-start-1 lg:col-span-8" enctype="multipart/form-data">
                    <div data-aos="fade-up" class="lg:col-start-1 lg:col-span-8">
                        <ul class="accordion-container curriculum create-course">
                            <!-- accordion -->
                            <li class="accordion mb-5 active">
                                <div
                                    class="bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-t-md">
                                    <!-- controller -->
                                    <div class="py-5 px-30px">
                                        <div
                                            class="cursor-pointer accordion-controller flex justify-between items-center text-lg text-headingColor font-semibold w-full dark:text-headingColor-dark font-hind leading-27px rounded-t-md">
                                            <div>
                                                <span>Course Info</span>
                                            </div>
                                            <svg
                                                class="transition-all duration-500 rotate-0"
                                                width="20"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 16 16"
                                                fill="#212529">
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <!-- content -->
                                    <div
                                        class="accordion-content transition-all duration-500 overflow-hidden">
                                        <div class="content-wrapper py-4 px-5">
                                            <div class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8">
                                                <!-- <form
                                                    class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8"
                                                    data-aos="fade-up"> -->
                                                    <div>
                                                        <label class="mb-3 block font-semibold">Course Image</label>
                                                        <div class="profile-picture mb-7 rounded-md">
                                                            <input
                                                                name="imageCourse"
                                                                class="file-uploader" 
                                                                type="file" 
                                                                accept="image/*" 
                                                                onchange="uploadImage(event)" />
                                                            <img id="imagePreview" class="preview w-full h-full object-cover" src="#" alt="Image Preview" style="display:none;" />
                                                        </div>
                                                    </div>
                                                    <div class="grid grid-cols-1 mb-15px gap-15px">
                                                        <div>
                                                            <label class="mb-3 block font-semibold">Course Title</label>
                                                            <input
                                                                name="title"
                                                                type="text"
                                                                placeholder="Course Title"
                                                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                                        </div>
                                                        
                                                        <div>
                                                            <div
                                                                class="grid grid-cols-1 md:grid-cols-2 gap-30px">
                                                                <div>
                                                                    <label
                                                                        class="text-xs uppercase text-placeholder block font-semibold text-opacity-50 leading-1.8">Categories</label>
                                                                    <div
                                                                        class="bg-whiteColor relative rounded-md">
                                                                        <select
                                                                            name="idCategory"
                                                                            class="text-base bg-transparent text-blackColor2 w-full p-13px pr-30px focus:outline-none block appearance-none relative z-20 focus:shadow-select rounded-md">
                                                                            <option value="" selected>Select</option>
                                                                            <?php if(isset($allGategories)) { ?>
                                                                                <?php foreach($allGategories as $category) { ?>
                                                                                    <option value="<?php echo $category['id'] ?>"><?php echo $category['nameCategory'] ?></option>
                                                                                <?php } ?>
                                                                            <?php } ?>
                                                                        </select>
                                                                        <i
                                                                            class="icofont-simple-down absolute top-1/2 right-3 -translate-y-1/2 block text-lg z-10"></i>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <label
                                                                        class="text-xs uppercase text-placeholder block font-semibold text-opacity-50 leading-1.8">SHORT BY OFFER</label>
                                                                    <div
                                                                        class="bg-whiteColor relative rounded-md">
                                                                        <select
                                                                            name="payStatus"
                                                                            class="text-base bg-transparent text-blackColor2 w-full p-13px pr-30px focus:outline-none block appearance-none relative z-20 focus:shadow-select rounded-md">
                                                                            <option selected="1">premium</option>
                                                                            <option value="0">Free</option>
                                                                        </select>
                                                                        <i
                                                                            class="icofont-simple-down absolute top-1/2 right-3 -translate-y-1/2 block text-lg z-10"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-5">
                                                                <label
                                                                    class="text-xs uppercase text-placeholder block font-semibold text-opacity-50 leading-1.8">Tags</label>
                                                                <div
                                                                    class="bg-whiteColor relative rounded-md">
                                                                    <select
                                                                        name="idTag[]"
                                                                        multiple
                                                                        class="text-base bg-transparent text-blackColor2 w-full p-13px pr-30px focus:outline-none block appearance-none relative z-20 focus:shadow-select rounded-md">
                                                                        <option selected="">Select</option>
                                                                        <option value="1">Web Design</option>
                                                                        <option value="2">Graphic</option>
                                                                        <option value="3">English</option>
                                                                        <option value="4">
                                                                            Spoken English
                                                                        </option>
                                                                        <option value="5">Art Painting</option>
                                                                        <option value="6">
                                                                            App Development
                                                                        </option>
                                                                        <option value="7">
                                                                            Web Application
                                                                        </option>
                                                                        <option value="7">
                                                                            Php Development
                                                                        </option>
                                                                    </select>
                                                                    <i
                                                                        class="icofont-simple-down absolute top-1/2 right-3 -translate-y-1/2 block text-lg z-10"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <label class="mb-3 block font-semibold">Price ($)</label>
                                                            <input
                                                                name="price"
                                                                type="text"
                                                                placeholder="Free Regular Price ($)"
                                                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                                        </div>
                                                        <div>
                                                            <label class="mb-3 block font-semibold">Title Of Description</label>
                                                            <input
                                                                name="titleDescription"
                                                                type="text"
                                                                placeholder="Course Slug"
                                                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                                        </div>
                                                    </div>
                                                    <div class="mb-15px">
                                                        <label class="mb-3 block font-semibold">About Course</label>
                                                        <textarea
                                                            name="description"
                                                            class="w-full py-10px px-5 text-sm text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md"
    
                                                            cols="30"
                                                            rows="10">
                                                        </textarea>
                                                    </div>
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- accordion -->
                            <li class="accordion mb-5">
                                <div
                                    class="bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark">
                                    <!-- controller -->
                                    <div class="py-5 px-30px">
                                        <div
                                            class="cursor-pointer accordion-controller flex justify-between items-center text-lg text-headingColor font-semibold w-full dark:text-headingColor-dark font-hind leading-27px">
                                            <div>
                                                <span>Course Videos</span>
                                            </div>
                                            <svg
                                                class="transition-all duration-500 rotate-0"
                                                width="20"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 16 16"
                                                fill="#212529">
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <!-- content -->
                                    <div
                                        class="accordion-content transition-all duration-500 overflow-hidden h-0">
                                        <div class="content-wrapper py-4 px-5">
                                            <div class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8">
                                                <!-- <form
                                                    class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8"
                                                    data-aos="fade-up"> -->
                                                    <div class="grid grid-cols-1 mb-15px gap-15px">
                                                        <div>
                                                            <label class="mb-3 block font-semibold">Add Your Video URL</label>
                                                            <input
                                                                name="videos[]"
                                                                type="file"
                                                                placeholder="Select Video searche"
                                                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                                        </div>
                                                        <div>
                                                            <div class="mb-3 block">
                                                                Example:
                                                                <a
                                                                    class="hover:text-primaryColor"
                                                                    href="#">https://www.youtube.com/watch?v=yourvideoid</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
    
                        <div
                            class="mt-10 leading-1.8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-x-30px gap-y-5">
                            <div data-aos="fade-up" class="lg:col-start-1 lg:col-span-4">
                                <a
                                    href="/views/user/courses/courses.php"
                                    class="text-whiteColor bg-primaryColor w-full p-13px hover:text-whiteColor hover:bg-secondaryColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-secondaryColor text-center">
                                    Preview
                                </a>
                            </div>
    
                            <div data-aos="fade-up" class="lg:col-start-5 lg:col-span-8">
                                <button
                                    class="text-whiteColor bg-primaryColor w-full p-13px hover:text-whiteColor hover:bg-secondaryColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-secondaryColor text-center">
                                    Create Course
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- create course right-->
                <div data-aos="fade-up" class="lg:col-start-9 lg:col-span-4">
                    <div class="p-30px border-2 border-primaryColor">
                        <ul>
                            <li class="my-7px flex gap-10px">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="14"
                                    height="14"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-check flex-shrink-0">
                                    <polyline
                                        points="20 6 9 17 4 12"
                                        class="text-greencolor"></polyline>
                                </svg>
                                <p
                                    class="text-lg text-contentColor dark:text-contentColor-dark leading-1.45">
                                    Set the Course Price option or make it free.
                                </p>
                            </li>
                            <li class="my-7px flex gap-10px">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="14"
                                    height="14"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-check flex-shrink-0">
                                    <polyline
                                        points="20 6 9 17 4 12"
                                        class="text-greencolor"></polyline>
                                </svg>
                                <p
                                    class="text-lg text-contentColor dark:text-contentColor-dark leading-1.45">
                                    Standard size for the course thumbnail.
                                </p>
                            </li>
                            <li class="my-7px flex gap-10px">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="14"
                                    height="14"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-check flex-shrink-0">
                                    <polyline
                                        points="20 6 9 17 4 12"
                                        class="text-greencolor"></polyline>
                                </svg>
                                <p
                                    class="text-lg text-contentColor dark:text-contentColor-dark leading-1.45">
                                    Course Info is where you fill information course.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include('../../layout/_FOOTER.php') ?>