
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `guest` (
  `guest_id` int(11) NOT NULL,
  `guest_fname` varchar(30) NOT NULL,
  `guest_lname` varchar(30) NOT NULL,
  `guest_phone` varchar(30) NOT NULL,
  `guest_address` varchar(300) NOT NULL,
  `guest_arrive` date NOT NULL,
  `guest_status` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `guest` (`guest_id`, `guest_fname`, `guest_lname`, `guest_phone`, `guest_address`, `guest_arrive`, `guest_status`, `created_at`) VALUES
(1, 'Антоніо', 'Монтано', '+38 (068) 6850282', 'Бог знає уткі', '2023-01-23', 'invited', '2022-11-21 02:10:15'),
(2, 'Микола', 'Попович', '+38 (067) 7777777', 'Ужгород, Україна', '2022-12-18', 'uninvited', '2022-11-21 02:15:22'),
(3, 'Миколай', 'Святий', '+38 (050) 5856764', 'Гроу стріт, Лапландія', '2022-12-19', 'invited', '2022-11-21 02:20:35'),
(4, 'Мавпа', 'Рижа', '+38 (048) 3286591', 'Локальний мем', '2022-11-20', 'uninvited', '2022-11-21 02:25:51');


ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`);

ALTER TABLE `guest`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
