<?php
session_start();
include "database/database.php";
include 'component/header.php';

if (isset($_POST['submit'])) {
  $guest_fname = ($_POST['guest_fname']);
  $guest_lname = ($_POST['guest_lname']);
  $guest_phone = ($_POST['guest_phone']);
  $guest_arrive = ($_POST['guest_arrive']);
  $guest_address = ($_POST['guest_address']);
  $guest_status = isset($_POST['status']) ? $_POST['status'] : 'uninvited';

  $todatabase = "INSERT INTO guest (guest_fname, guest_lname, guest_phone, guest_address, guest_arrive, guest_status) VALUES ('$guest_fname', '$guest_lname', '$guest_phone', '$guest_address', '$guest_arrive', '$guest_status')";

  $toinsert = mysqli_query($databaseconnect, $todatabase);
  if ($toinsert) {
    $_SESSION['message'] = "Гостя успішно додано";
    $_SESSION['errorstyle'] = "green";
  } else {
    $_SESSION['message'] = "Гостя не вдалось додати!!!";
    $_SESSION['errorstyle'] = "red";
  }
}
?>
<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
    <div class="max-w-screen-2xl text-gray-500 sm:text-lg dark:text-gray-400">
      <?php
      if (isset($_SESSION['message']) && isset($_SESSION['errorstyle'])) { ?>
        <div class="p-2 mb-4 text-sm text-<?php echo $_SESSION['errostyle'] ?>-700 bg-<?php echo $_SESSION['errorstyle'] ?>-100 rounded-lg dark:bg-<?php echo $_SESSION['errorstyle'] ?>-200 dark:text-<?php echo $_SESSION['errorstyle'] ?>-800" role="alert">
          <span class="font-medium"><?php echo $_SESSION['message'] ?></span>
        </div>
      <?php
      }
      unset($_SESSION['message']);
      unset($_SESSION['errorstyle']);
      ?>
      <form action="" method="POST">
        <div class="grid gap-6 mb-6 lg:grid-cols-2">
          <div>
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ім'я</label>
            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Введіть ім'я" required="" autocomplete="off" name="guest_fname">
          </div>
          <div>
            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Прізвище</label>
            <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Введіть прізвище" required="" autocomplete="off" name="guest_lname">
          </div>
          <div>
            <label for="guest_phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Номер телефону</label>
            <input type="address" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Введіть номер телефону" required="" autocomplete="off" name="guest_phone">
          </div>

          <div>
            <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Дата прибуття</label>
            <input type="date" id="website" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="" autocomplete="off" name="guest_arrive">
          </div>
          <div>
            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Адреса</label>
            <input type="text" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Введіть адресу" required="" autocomplete="off" name="guest_address">
          </div>
        </div>
          <div>
            <label for="default-toggle" class="inline-flex relative items-center cursor-pointer">
              <input type="checkbox" value="invited" id="default-toggle" class="sr-only peer" name="status">
              <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
              <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">
Перемкніть, щоб запросити</span>
            </label>
          </div>
          <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5  py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" name="submit">Надіслати</button>
      </form>
  </div>
</section>
<?php
include 'component/footer.php';
?>