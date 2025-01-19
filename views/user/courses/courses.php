<?php
    require_once __DIR__ . '/../../../classes/Database.php';
    require_once __DIR__ . '/../../../classes/Cource.php';
    require_once __DIR__ . '/../../../classes/Video.php';

    $db = new Database();
    $conn = $db->connect();

    $courses = new Course($conn);
    
    if(isset($_POST['status'])) {
        $courses->setStatusCourse($_POST['status']);
        $resultCourses = $courses->getCoursesByStatus();
    } else {
        $resultCourses = $courses->getCourses();
    }
    
?>

<?php include('../../layout/_HEADER.php') ?>
<!-- main body -->
<main class="bg-transparent">
    <!-- banner section -->
    <?php include('../banner.php') ?>

    <!--dashbord menu section -->
    <section>
        <div class="container-fluid-2">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-30px pt-30px pb-100px">
                <div class="lg:col-start-1 lg:col-span-3">
                    <!-- navigation menu -->
                    <?php include('../navigation-menu.php') ?>
                </div>
                <!-- dashboard content -->
                <div class="lg:col-start-4 lg:col-span-9">
                    <!-- courses area -->
                    <div
                        class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-5">
                        <!-- heading -->
                        <div
                            class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark">
                            <h2
                                class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                                Course Status
                            </h2>
                        </div>
                        <div class="tab">
                            <div
                                class="tab-links flex flex-wrap mb-10px lg:mb-50px rounded gap-10px">
                                <form action="./courses.php" method="POST">
                                    <button 
                                        name="all"
                                        class=" relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap <?php if($courses->getStatusCourse() == "") echo 'active' ?>">
                                        ALL COURSES
                                    </button>
    
                                    <button 
                                        name="status"
                                        value="1"
                                        class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap <?php if($courses->getStatusCourse() == 1) echo 'active' ?>">
                                        PUBLISH
                                    </button>
    
                                    <button 
                                        name="status"
                                        value="0"
                                        class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap <?php if($courses->getStatusCourse() == 0) echo 'active' ?>">
                                        PENDING
                                    </button>
                                </form>
                            </div>
                            <div class="tab-contents">
                                <div class="transition-all duration-300">
                                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-30px">

                                        <?php if(isset($resultCourses)) { ?>
                                            <?php foreach($resultCourses as $course) { ?>
                                                <!-- card -->
                                                <div class="group">
                                                    <div class="tab-content-wrapper">
                                                        <div
                                                            class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark">
                                                            <!-- card image -->
                                                            <div class="relative mb-4">
                                                                <a
                                                                    href="../../course-details.html"
                                                                    class="w-full overflow-hidden rounded">
                                                                    <img
                                                                        src="../../../assets/images/grid/<?php echo $course['image'] ?>"
                                                                        alt=""
                                                                        class="w-full transition-all duration-300 group-hover:scale-110">
                                                                </a>
                                                                <div
                                                                    class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                                                                    <div>
                                                                        <p
                                                                            class="text-xs text-whiteColor px-4 py-[3px] bg-blue rounded font-semibold">
                                                                            <?php echo $course['nameCategory'] ?>
                                                                        </p>
                                                                    </div>
                                                                    <a
                                                                        class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                                                        href="#"><i
                                                                            class="icofont-heart-alt text-base py-1 px-2"></i></a>
                                                                </div>
                                                            </div>
                                                            <!-- card content -->
                                                            <div>
                                                                <div class="grid grid-cols-2 mb-15px">
                                                                    <div class="flex items-center">
                                                                        <div>
                                                                            <i
                                                                                class="icofont-book-alt pr-5px text-primaryColor text-lg"></i>
                                                                        </div>
                                                                        <div>
                                                                        <?php 
                                                                            $videos = new Video($conn);
                                                                            $videos->setIdCourse($course['id']);
                                                                            $totalVideos = $videos->totalVideo();
                                                                        ?>
                                                                            <span
                                                                                class="text-sm text-black dark:text-blackColor-dark"><?php echo $totalVideos ?> Lesson</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex items-center">
                                                                        <div>
                                                                            <i
                                                                                class="icofont-clock-time pr-5px text-primaryColor text-lg"></i>
                                                                        </div>
                                                                        <div>
                                                                            <span
                                                                                class="text-sm text-black dark:text-blackColor-dark">2 hr 10 min</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a
                                                                    href="../../courses/detailCourse.php?idCourse=<?php echo $course['id'] ?>"
                                                                    class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                                                    <?php echo $course['title'] ?>
                                                                </a>
                                                                <!-- price -->
                                                                <div
                                                                    class="text-lg font-semibold text-primaryColor flex font-inter mb-4">
                                                                    <span> $<?php echo $course['price'] ?></span>
                                                                    <div class="ml-6">
                                                                        <?php if($course['payStatus'] === 0) { ?>
                                                                            <span class="text-base font-semibold text-greencolor">Free</span>
                                                                        <?php } else { ?>
                                                                            <span class="text-base font-semibold text-secondaryColor">Premuim</span>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                                <!-- author and rating-->
                                                                <div class="pt-15px border-t border-borderColor flex justify-between">
                                                                    <div>
                                                                        <a
                                                                            href="instructor-details.html"
                                                                            class="text-base w-full font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor">
                                                                            <img class="w-[30px] h-[30px] rounded-full mr-10px" src="../../../assets/images/<?php echo $course['imageProfile'] ?>" alt="">
                                                                            <?php echo "{$course['firstName']} " . "{$course['lastName']}" ?>
                                                                        </a>
                                                                    </div>
                                                                    <div>
                                                                        <?php if($_SESSION['user']['role'] === 'admin') { ?>
                                                                            <?php if($course['statusCourse'] == 0) { ?>
                                                                                <div>
                                                                                    <form action="./acceptCourse.php" method="POST">
                                                                                        <input type="hidden" name="idCourse" value="<?php echo $course['id'] ?>">
                                                                                        <input type="hidden" name="accept" value="1">
                                                                                        <button class="text-size-15 inline-block px-25px leading-22px font-bold text-whiteColor hover:text-greencolor bg-greencolor hover:bg-whiteColor dark:hover:bg-whiteColor-dark border border-greencolor rounded">
                                                                                            Accept
                                                                                        </button>
                                                                                    </form>
                                                                                </div>
                                                                            <?php } ?>
                                                                        <?php } ?>
                                                                        <div>
                                                                            <form action="./deleteCourse.php" method="POST">
                                                                                <input type="hidden" name="idCourse" value="<?php echo $course['id'] ?>">
                                                                                <button class="w-full text-size-15 inline-block px-25px leading-22px font-bold text-whiteColor hover:text-secondaryColor bg-secondaryColor hover:bg-whiteColor dark:hover:bg-whiteColor-dark border border-secondaryColor rounded">
                                                                                    Delete
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include('../../layout/_FOOTER.php') ?>