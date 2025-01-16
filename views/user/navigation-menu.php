<?php $page = $_SERVER['PHP_SELF'];?>

<div class="lg:col-start-1 lg:col-span-3">
    <!-- navigation menu -->
    <div
        class="p-30px pt-5 lg:p-5 2xl:p-30px 2xl:pt-5 rounded-lg2 shadow-accordion dark:shadow-accordion-dark bg-whiteColor dark:bg-whiteColor-dark">
        <!-- greeting -->
        <h5
            class="text-sm leading-1 font-semibold uppercase text-contentColor dark:text-contentColor-dark bg-lightGrey5 dark:bg-whiteColor-dark p-10px pb-7px mt-5 mb-10px">
            WELCOME, MICLE OBEMA
        </h5>
        <ul>
            <li
                class="py-10px border-b border-borderColor dark:border-borderColor-dark">
                <a href="/views/user/admin/dashboard.php" class="<?php echo ($page === "/views/user/admin/dashboard.php" || $page === "/views/user/teacher/dashboard.php") ? "text-primaryColor dark:text-primaryColor" : "text-contentColor dark:text-contentColor-dark"?> hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-home">
                        <path
                            d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                    Dashboard
                </a>
            </li>
            <li
                class="py-10px border-b border-borderColor dark:border-borderColor-dark">
                <a
                    href="/views/user/profile.php"
                    class="<?php echo ($page === "/views/user/profile.php") ? "text-primaryColor dark:text-primaryColor" : "text-contentColor dark:text-contentColor-dark"?> hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-user">
                        <path
                            d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    My Profile</a>
            </li>
            <li
                class="py-10px border-b border-borderColor dark:border-borderColor-dark">
                <a href="/views/user/courses/courses.php" class="<?php echo ($page === "/views/user/courses/courses.php") ? "text-primaryColor dark:text-primaryColor" : "text-contentColor dark:text-contentColor-dark"?> hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-bookmark">
                        <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                    </svg>
                    Courses
                </a>
            </li>
            <li
                class="py-10px border-b border-borderColor dark:border-borderColor-dark">
                <a href="/views/user/admin/tags.php" class="<?php echo ($page === "/views/user/admin/tags.php") ? "text-primaryColor dark:text-primaryColor" : "text-contentColor dark:text-contentColor-dark"?> hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap">
                    <svg 
                        xmlns="http://www.w3.org/2000/svg" 
                        width="16"
                        height="24" 
                        viewBox="0 -960 960 960" 
                        width="24px" 
                        fill="currentColor">
                        <path d="m159-168-34-14q-31-13-41.5-45t3.5-63l72-156v278Zm160 88q-33 0-56.5-23.5T239-160v-240l106 294q3 7 6 13.5t8 12.5h-40Zm206-4q-32 12-62-3t-42-47L243-622q-12-32 2-62.5t46-41.5l302-110q32-12 62 3t42 47l178 488q12 32-2 62.5T827-194L525-84Zm-86-476q17 0 28.5-11.5T479-600q0-17-11.5-28.5T439-640q-17 0-28.5 11.5T399-600q0 17 11.5 28.5T439-560Zm58 400 302-110-178-490-302 110 178 490ZM319-650l302-110-302 110Z"/>
                    </svg>
                    Tags
                </a>
            </li>
            <li
                class="py-10px border-b border-borderColor dark:border-borderColor-dark">
                <a href="/views/user/admin/categories.php" class="<?php echo ($page === "/views/user/admin/categories.php") ? "text-primaryColor dark:text-primaryColor" : "text-contentColor dark:text-contentColor-dark"?> hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap">
                    <svg 
                        xmlns="http://www.w3.org/2000/svg" 
                        width="16"
                        height="24" 
                        viewBox="0 -960 960 960" 
                        width="24px"
                        fill="currentColor">
                        <path d="m260-520 220-360 220 360H260ZM700-80q-75 0-127.5-52.5T520-260q0-75 52.5-127.5T700-440q75 0 127.5 52.5T880-260q0 75-52.5 127.5T700-80Zm-580-20v-320h320v320H120Zm580-60q42 0 71-29t29-71q0-42-29-71t-71-29q-42 0-71 29t-29 71q0 42 29 71t71 29Zm-500-20h160v-160H200v160Zm202-420h156l-78-126-78 126Zm78 0ZM360-340Zm340 80Z"/>
                    </svg>
                    Categories
                </a>
            </li>
        </ul>
        <!-- user -->
        <h5 class="text-sm leading-1 font-semibold uppercase text-contentColor dark:text-contentColor-dark bg-lightGrey5 dark:bg-whiteColor-dark p-10px pb-7px mt-5 mb-10px">
            USER
        </h5>
        <ul>
            <li
                class="py-10px border-b border-borderColor dark:border-borderColor-dark">
                <a href="/views/user/settings.php" class="<?php echo ($page === "/views/user/settings.php") ? "text-primaryColor dark:text-primaryColor" : "text-contentColor dark:text-contentColor-dark"?> hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-settings">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path
                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                    </svg>
                    Settings
                </a>
            </li>

            <li
                class="py-10px border-b border-borderColor dark:border-borderColor-dark">
                <a
                    href="/views/auth/logout.php"
                    class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap">
                    <svg 
                        xmlns="http://www.w3.org/2000/svg" 
                        width="16" 
                        height="24" 
                        viewBox="0 -960 960 960" 
                        width="24px" 
                        fill="currentColor">
                        <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/>
                    </svg>
                    Logout</a>
            </li>
        </ul>
    </div>
</div>