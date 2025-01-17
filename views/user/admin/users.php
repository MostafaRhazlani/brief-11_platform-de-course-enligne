<?php
    require_once __DIR__ . '/../../classes/Role.php';   
    require_once __DIR__ . '/../../../classes/Database.php';
    require_once __DIR__ . '/../../../classes/User.php';

    $db = new Database();
    $conn = $db->connect();

    $users = new User($conn);

    if(isset($_POST['role'])) {
        $users->setRole($_POST['role']);
    } else {
        $users->setRole("admin");
    }
    $resultUsers = $users->getUsers();

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
                                All Users
                            </h2>
                        </div>
                        <div class="tab">
                            <div
                                class="tab-links flex flex-wrap mb-10px lg:mb-50px rounded gap-10px">
                                <form action="" method="POST">
                                    <button 
                                        name="role"
                                        value="admin"
                                        class=" relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap <?php if($users->getRole() === 'admin') echo 'active' ?>">
                                        ADMINS
                                    </button>
    
                                    <button 
                                        name="role"
                                        value="teacher"
                                        class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap <?php if($users->getRole() === 'teacher') echo 'active' ?>">
                                        TEACHERS
                                    </button>
    
                                    <button 
                                        name="role"
                                        value="student"
                                        class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap <?php if($users->getRole() === 'student') echo 'active' ?>">
                                        STUDENTS
                                    </button>
                                </form>
                            </div>
                            <div class="tab-contents">
                                <div class="transition-all duration-300">
                                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-30px">
                                        <?php if(isset($resultUsers)) { ?>
                                            <?php foreach($resultUsers as $user) { ?>
                                                <?php if($_SESSION['user']['id'] !== $user['id']) { ?>
                                                    <!-- card -->
                                                    <div class="group">
                                                        <div class="tab-content-wrapper">
                                                            <div
                                                                class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark">
                                                                <!-- card image -->
                                                                <div class="relative mb-4">
                                                                    <a
                                                                        href="../../course-details.html"
                                                                        class="w-full overflow-hidden rounded flex justify-center">
                                                                        <img
                                                                            src="../../../assets/images/<?php echo $user['imageProfile'] ?>"
                                                                            alt=""
                                                                            class="w-90px h-90px rounded-full">
                                                                    </a>
                                                                </div>
                                                                <!-- card content -->
                                                                <div>
                                                                    <div class="mb-10px flex flex-col text-center">
                                                                        <a
                                                                            href="#"
                                                                            class="text-xl font-semibold text-blackColor font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                                                            <?php echo "{$user['firstName']} " . "{$user['lastName']}" ?>
                                                                        </a>
                                                                        <span class="text-sm dark:text-blackColor-dark"><?php echo $user['username'] ?></span>
                                                                    </div>
                                                                    <!-- action -->
                                                                    <?php if($_SESSION['user']['role'] === 'admin') { ?>
                                                                        <div class="pt-15px border-t border-borderColor flex justify-between items-center">
                                                                            <div>
                                                                                <form action="./statusUser.php" method="POST">
                                                                                    <input type="hidden" name="idCourse" value="<?php echo $course['id'] ?>">
                                                                                    <?php if($user['status'] == 1) { ?>
                                                                                        <button class="w-full text-size-15 inline-block px-25px leading-22px font-bold text-whiteColor hover:text-greencolor bg-greencolor hover:bg-whiteColor dark:hover:bg-whiteColor-dark border border-greencolor rounded">
                                                                                            Active
                                                                                        </button>
                                                                                    <?php } else { ?>
                                                                                        <button class="w-full text-size-15 inline-block px-25px leading-22px font-bold text-whiteColor hover:text-primaryColor bg-primaryColor hover:bg-whiteColor dark:hover:bg-whiteColor-dark border border-primaryColor rounded">
                                                                                            Desactive
                                                                                        </button>
                                                                                    <?php } ?>
                                                                                </form>
                                                                            </div>
                                                                            <div>
                                                                                <form action="./deleteCourse.php" method="POST">
                                                                                    <input type="hidden" name="idCourse" value="<?php echo $course['id'] ?>">
                                                                                    <button class="w-full text-size-15 inline-block px-25px leading-22px font-bold text-whiteColor hover:text-secondaryColor bg-secondaryColor hover:bg-whiteColor dark:hover:bg-whiteColor-dark border border-secondaryColor rounded">
                                                                                        Delete
                                                                                    </button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
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