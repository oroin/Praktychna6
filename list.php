<?php
session_start();
include "database/database.php";
include 'component/header.php';
?>
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl max-h-screen-xl lg:py-26 lg:px-6">
        <div class="max-w-screen-2xl text-gray-500 sm:text-lg dark:text-gray-400">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <?php
            if(isset($_SESSION['message']) && isset($_SESSION['errorstyle'])){ ?>
            <div class="p-2 mb-4 text-sm text-<?php echo $_SESSION['errostyle']?>-700 bg-<?php echo $_SESSION['errorstyle']?>-100 rounded-lg dark:bg-<?php echo $_SESSION['errorstyle']?>-200 dark:text-<?php echo $_SESSION['errorstyle']?>-800" role="alert">
                <span class="font-medium"><?php echo $_SESSION['message']?></span>
            </div>
            <?php
            }
            unset($_SESSION['message']);
            unset($_SESSION['errorstyle']);
            ?>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Ім'я
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Телефон
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Адреса
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Статус
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Дія
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $showall = "SELECT * FROM guest";
                        $showfromdb = mysqli_query($databaseconnect, $showall);
                        if(mysqli_num_rows($showfromdb) > 0){
                            while ($guest = $showfromdb->fetch_assoc()) {
                            
                        ?>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                <?php echo $guest['guest_fname'];?> <?php echo $guest['guest_lname'];?>
                            </th>
                            <td class="px-6 py-4">
                                <?php echo $guest['guest_phone'];?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $guest['guest_address'];?>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <?php
                            if($guest['guest_status'] == 'invited'){ 
                           echo '<button" type="button" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-2 py-1 text-center mr-2 mb-2">Запрошено</button>';
                        
                            } else {
                                echo '<button" type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-2 py-1 text-center mr-2 mb-2">НЕ запрошено</button>';
                            }
                            ?>
                            </td>
                            <td class="px-6 py-4">
                            <a href="edit.php?guest_id=<?php echo $guest['guest_id'];?>" type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-2 py-1 text-center mr-2 mb-2 ">Редагувати</a>
                            <a href="delete.php?guest_id=<?php echo $guest['guest_id'];?>" type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-2 py-1 text-center mr-2 mb-2">Видалити</a>
                            </td>
                        </tr>
                        <?php
                        }
                    }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php
include 'component/footer.php';
?>