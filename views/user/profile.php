<?php require_once __DIR__ . '/../../classes/Role.php'; ?>
<?php include('../layout/_HEADER.php') ?>
<!-- main body -->
<main class="bg-transparent">
  <?php include('./banner.php') ?>

  <!--dashbord menu section -->
  <section>
    <div class="container-fluid-2">
      <div
        class="grid grid-cols-1 lg:grid-cols-12 gap-30px pt-30px pb-100px">
        <?php include('./navigation-menu.php') ?>
        <!-- dashboard content -->
        <div class="lg:col-start-4 lg:col-span-9">
          <!-- profile details -->
          <div
            class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-5">
            <div
              class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark">
              <h2
                class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                My Profile
              </h2>
            </div>

            <div>
              <ul>
                <li
                  class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                  <div class="md:col-start-1 md:col-span-4">
                    <span class="inline-block">Registration Date</span>
                  </div>
                  <div class="md:col-start-5 md:col-span-8">
                    <span class="inline-block"><?php echo $_SESSION['user']['dateJoined'] ?></span>
                  </div>
                </li>

                <li
                  class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                  <div class="md:col-start-1 md:col-span-4">
                    <span class="inline-block">First Name</span>
                  </div>
                  <div class="md:col-start-5 md:col-span-8">
                    <span class="inline-block"><?php echo $_SESSION['user']['firstName'] ?></span>
                  </div>
                </li>
                <li
                  class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                  <div class="md:col-start-1 md:col-span-4">
                    <span class="inline-block">Last Name</span>
                  </div>
                  <div class="md:col-start-5 md:col-span-8">
                    <span class="inline-block"><?php echo $_SESSION['user']['lastName'] ?></span>
                  </div>
                </li>

                <li
                  class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                  <div class="md:col-start-1 md:col-span-4">
                    <span class="inline-block">Username</span>
                  </div>
                  <div class="md:col-start-5 md:col-span-8">
                    <span class="inline-block"><?php echo $_SESSION['user']['username'] ?></span>
                  </div>
                </li>

                <li
                  class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                  <div class="md:col-start-1 md:col-span-4">
                    <span class="inline-block">Email</span>
                  </div>
                  <div class="md:col-start-5 md:col-span-8">
                    <span class="inline-block"><?php echo $_SESSION['user']['email'] ?></span>
                  </div>
                </li>

                <li
                  class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                  <div class="md:col-start-1 md:col-span-4">
                    <span class="inline-block">Phone Number</span>
                  </div>
                  <div class="md:col-start-5 md:col-span-8">
                    <span class="inline-block"></span>
                  </div>
                </li>

                <li
                  class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                  <div class="md:col-start-1 md:col-span-4">
                    <span class="inline-block">Expert</span>
                  </div>
                  <div class="md:col-start-5 md:col-span-8">
                    <span class="inline-block"><?php echo $_SESSION['user']['experience'] ?></span>
                  </div>
                </li>

                <li
                  class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                  <div class="md:col-start-1 md:col-span-4">
                    <span class="inline-block">Biography</span>
                  </div>
                  <div class="md:col-start-5 md:col-span-8">
                    <span class="inline-block"><?php echo $_SESSION['user']['description'] ?></span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include('../layout/_FOOTER.php') ?>