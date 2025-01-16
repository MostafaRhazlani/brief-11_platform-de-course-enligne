<?php
    require_once __DIR__ . '/../../../classes/Database.php';
    require_once __DIR__ . '/../../../classes/Category.php';

    $db = new Database();
    $conn = $db->connect();

    $categories = new Category($conn);
    $resultCategories = $categories->getAllCategories();

?>

<?php include('../../layout/_HEADER.php') ?>
<!-- main body -->
<main class="bg-transparent">
    <!-- banner section -->
    <?php include('../banner.php') ?>

    <!--dashbord menu section -->
    <section>
        <div class="container-fluid-2">
            <div
                class="grid grid-cols-1 lg:grid-cols-12 gap-30px pt-30px pb-100px">
                <div class="lg:col-start-1 lg:col-span-3">
                    <!-- navigation menu -->
                    <?php include('../navigation-menu.php') ?>
                </div>
                <!-- dashboard content -->
                <div class="lg:col-start-4 lg:col-span-9">
                    <!-- quize attempts area -->
                    <div
                        class="p-10px pt-5 md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-5">
                        <!-- heading -->
                        <div
                            class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark gap-3 md:justify-end w-full flex justify-center items-center flex-wrap md:flex-nowrap">
                            <h2
                                class="text-2xl w-full font-bold text-blackColor dark:text-blackColor-dark">
                                All Categories
                            </h2>

                            <form action="./crudCategory/createCategoty.php" method="POST" class="gap-3 md:justify-end w-full flex justify-center flex-wrap md:flex-nowrap">
                                <input
                                    name="nameCategory"
                                    type="text"
                                    placeholder="Enter name category"
                                    class="h-52px w-full leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded">
                                    
                                <button class="text-sm w-full font-bold text-contentColor dark:text-contentColor-dark hover:text-whiteColor hover:bg-primaryColor text-center py-10px px-10px border border-primaryColor rounded">Add Category</button></button>
                            </form>
                        </div>

                        <!-- main content -->
                        <div class="overflow-auto">
                            <table class="w-full text-left">
                                <thead
                                    class="text-sm md:text-base text-blackColor dark:text-blackColor-dark bg-lightGrey5 dark:bg-whiteColor-dark leading-1.8 md:leading-1.8">
                                    <tr>
                                        <th class="px-5px py-10px md:px-5">ID</th>
                                        <th class="px-5px py-10px md:px-5">Category Name</th>
                                        <th class="px-5px py-10px md:px-5">Actions</th>
                                    </tr>
                                </thead>
                                <tbody
                                    class="text-size-13 md:text-base text-contentColor dark:text-contentColor-dark font-normal">
                                    <?php if(isset($resultCategories)) { ?>
                                        <?php $index = 0; foreach($resultCategories as $category) { ?>
                                            <tr
                                                class="leading-1.8 md:leading-1.8 bg-lightGrey5 dark:bg-whiteColor-dark">
                                                <th
                                                    class="px-5px py-10px md:px-5 font-normal text-wrap">
                                                    <p class="text-blackColor dark:text-blackColor-dark">
                                                        #<?php echo $index += 1 ?>
                                                    </p>
                                                </th>
                                                <td class="px-5px py-10px md:px-5">
                                                    <p><?php echo $category['nameCategory'] ?></p>
                                                </td>
                                                <td class="flex items-center gap-2 px-5px py-10px md:px-5">
                                                    <div class="text-xs">
                                                        <form action="./crudCategory/deleteCategory.php" method="post">
                                                            <input type="hidden" name="idCategory" value="<?php echo $category['id'] ?>">
                                                            <button class="h-22px inline-block px-7px leading-22px font-bold text-whiteColor hover:text-secondaryColor bg-secondaryColor hover:bg-whiteColor dark:hover:bg-whiteColor-dark border border-secondaryColor rounded-md">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <div class="text-xs">
                                                        <form action="./crudCategory/updateCategory.php" method="post" class="flex items-center">
                                                            <button class="h-22px inline-block px-7px leading-22px font-bold text-whiteColor hover:text-primaryColor bg-primaryColor hover:bg-whiteColor dark:hover:bg-whiteColor-dark border border-primaryColor rounded-md mr-2">
                                                                Edit
                                                            </button>
                                                            <input type="hidden" name="idCategory" value="<?php echo $category['id'] ?>">
                                                            <input
                                                                name="nameCategory"
                                                                value="<?php echo $category['nameCategory'] ?>"
                                                                type="text"
                                                                placeholder="name category"
                                                                class="h-30px leading-30px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded">
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    <?php } ?>
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