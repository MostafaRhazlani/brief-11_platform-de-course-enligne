<?php
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
                                    <!-- main content -->
                                    <div class="overflow-auto">
                                        <table class="w-full text-left">
                                            <thead
                                                class="text-sm md:text-base text-blackColor dark:text-blackColor-dark bg-lightGrey5 dark:bg-whiteColor-dark leading-1.8 md:leading-1.8">
                                                <tr>
                                                    <th class="px-5px py-10px md:px-5">ID</th>
                                                    <th class="px-5px py-10px md:px-5">Image</th>
                                                    <th class="px-5px py-10px md:px-5">Username</th>
                                                    <th class="px-5px py-10px md:px-5">Full Name</th>
                                                    <th class="px-5px py-10px md:px-5">Email</th>
                                                    <th class="px-5px py-10px md:px-5">Role</th>
                                                    <th class="px-5px py-10px md:px-5">Date Joined</th>
                                                    <th class="px-5px py-10px md:px-5">Status</th>
                                                    <th class="px-5px py-10px md:px-5">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody
                                                class="text-size-13 md:text-base text-contentColor dark:text-contentColor-dark font-normal">
                                                <?php if(isset($resultUsers)) { ?>
                                                    <?php $index = 0; foreach($resultUsers as $user) { ?>
                                                        <?php if($_SESSION['user']['id'] !== $user['id']) { ?>
                                                            <tr
                                                                class="leading-1.8 md:leading-1.8 bg-lightGrey5 dark:bg-whiteColor-dark">
                                                                <th
                                                                    class="px-5px py-10px md:px-5 font-normal text-wrap">
                                                                    <p class="text-blackColor dark:text-blackColor-dark">
                                                                        #<?php echo $index += 1 ?>
                                                                    </p>
                                                                </th>
                                                                <td class="px-5px py-10px md:px-5">
                                                                    <img class="w-34px h-34px rounded-full" src="../../../assets/images/<?php echo $user['imageProfile'] ?>" alt="">
                                                                </td>
                                                                <td class="px-5px py-10px md:px-5">
                                                                    <p><?php echo $user['username'] ?></p>
                                                                </td>
                                                                <td class="px-5px py-10px md:px-5">
                                                                    <p class="w-[140px]"><?php echo "{$user['firstName']} " . "{$user['lastName']}" ?></p>
                                                                </td>
                                                                <td class="px-5px py-10px md:px-5">
                                                                    <p><?php echo $user['email'] ?></p>
                                                                </td>
                                                                <td class="px-5px py-10px md:px-5">
                                                                    <p><?php echo $user['role'] ?></p>
                                                                </td>
                                                                <td class="px-5px py-10px md:px-5">
                                                                    <p class="w-[180px]"><?php echo $user['dateJoined'] ?></p>
                                                                </td>
                                                                <td class="px-5px py-10px md:px-5">
                                                                    <p><?php echo ($user['status'] == 1) ? '<span class="text-xs h-22px inline-block px-7px leading-22px font-bold text-whiteColor bg-primaryColor rounded-md">Active</span>' : '<span class="text-xs h-22px inline-block px-7px leading-22px font-bold text-whiteColor bg-greencolor2 rounded-md">Desactive</span>' ?></p>
                                                                </td>
                                                                <td class="px-5px py-10px md:px-5">
                                                                    <div class="text-xs">
                                                                        <form action="" method="post">
                                                                            <input type="hidden" name="idTag" value="">
                                                                            <button class="h-22px inline-block px-7px leading-22px font-bold text-whiteColor hover:text-secondaryColor bg-secondaryColor hover:bg-whiteColor dark:hover:bg-whiteColor-dark border border-secondaryColor rounded-md">
                                                                                Delete
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                    <?php } ?>
                                                <?php } ?>
                                            </tbody>
                                        </table>
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