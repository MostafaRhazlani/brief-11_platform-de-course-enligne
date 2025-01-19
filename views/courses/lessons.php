<?php
    require_once __DIR__ . '/../../classes/Database.php';
    require_once __DIR__ . '/../../classes/Video.php';

    $db = new Database();
    $conn = $db->connect();
    
    if(isset($_GET['idCourse'])) {
        $idCourse = $_GET['idCourse'];

        $videosCourse = new Video($conn);
        $videosCourse->setIdCourse($idCourse);
        $resultVideos = $videosCourse->getVideosCourse();
    }

    if(isset($_GET['idVideo'])) {
        $idVideo = $_GET['idVideo'];

        $video = new Video($conn, $idVideo);
        $resultVideo = $video->getVideo();
    }
?>

<?php include('../layout/_HEADER.php') ?>
<!-- main body -->
<main class="bg-transparent">
    <!-- lesson section -->
    <section>
        <div class="container-fluid-2 pt-50px pb-100px">
            <div class="grid grid-cols-1 xl:grid-cols-12 gap-30px">
                <!-- lesson left -->
                <div class="xl:col-start-1 xl:col-span-4" data-aos="fade-up">
                    <!-- curriculum -->
                    <ul class="accordion-container curriculum">
                        <!-- accordion -->
                        <li class="accordion mb-25px overflow-hidden active">
                            <div
                                class="bg-whiteColor border border-borderColor dark:bg-whiteColor-dark dark:border-borderColor-dark rounded-t-md">
                                <!-- controller -->
                                <div>
                                    <button
                                        class="accordion-controller flex justify-between items-center text-xl text-headingColor font-bold w-full px-5 py-18px dark:text-headingColor-dark font-hind leading-[20px]">
                                        <span>Play List</span>

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
                                    </button>
                                </div>
                                <!-- content -->
                                <div class="accordion-content transition-all duration-500">
                                    <div class="content-wrapper p-10px md:px-30px">
                                        <ul>
                                            <?php if(isset($resultVideos)) { ?>
                                                <?php foreach($resultVideos as $video) { ?>
                                                    <li
                                                        class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark">
                                                        <div>
                                                            <h4
                                                                class="flex text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                                <i class="icofont-video-alt mr-10px"></i>
                                                                <a
                                                                    title="<?php echo $video['nameVideo'] ?>"
                                                                    href="lessons.php?idCourse=<?php echo $idCourse ?>&idVideo=<?php echo $video['id'] ?>"
                                                                    class="overflow-ellipsis font-medium text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover;text-primaryColor"><?php echo $video['nameVideo'] ?>
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div
                                                            class="text-blackColor dark:text-blackColor-dark text-sm flex items-center">
                                                            <a class="bg-primaryColor text-whiteColor text-sm ml-5 rounded py-0.5"
                                                                href="lessons.php?idCourse=<?php echo $idCourse ?>&idVideo=<?php echo $video['id'] ?>">
                                                                <p class="px-10px">
                                                                    <i class="icofont-eye"></i> Preview
                                                                </p>
                                                            </a>
                                                        </div>
                                                    </li>
                                                <?php } ?>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                            
                    </ul>
                </div>
                <!-- lesson right -->
                <div
                    class="xl:col-start-5 xl:col-span-8 relative"
                    data-aos="fade-up">
                    <div>

                        <div class="aspect-[16/9]">
                            <video class="w-full" controls>
                                <source src="../../assets/videos/<?php echo $resultVideo['nameVideo'] ?>" type="video/mp4">
                                <source src="../../assets/videos/<?php echo $resultVideo['nameVideo'] ?>" type="video/webm">
                                <source src="../../assets/videos/<?php echo $resultVideo['nameVideo'] ?>" type="video/ogg">
                                Your browser does not support HTML video.
                            </video>
                        </div>
                        <!-- titile -->
                        <h4
                            class="mt-15px text-size-32 md:text-4xl font-bold text-blackColor dark:text-blackColor-dark leading-43px md:leading-14.5"
                            data-aos="fade-up">
                            Title Video Here
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include('../layout/_FOOTER.php') ?>