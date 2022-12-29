-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 29 2022 г., 20:51
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `chocolate`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(50) NOT NULL,
  `blog_subtitle` varchar(100) NOT NULL,
  `blog_slug` varchar(50) NOT NULL,
  `blog_image` varchar(50) NOT NULL,
  `blog_content` text NOT NULL,
  `blog_status` varchar(50) NOT NULL DEFAULT '1',
  `blog_view` int(11) NOT NULL,
  `blog_updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `blog_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_title`, `blog_subtitle`, `blog_slug`, `blog_image`, `blog_content`, `blog_status`, `blog_view`, `blog_updated_at`, `blog_created_at`) VALUES
(1, 'blog title 01', 'blog sub title 01', 'blog-title-01', '6209052edc0ae.jpg', 'Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Autem dolores, quae distinctio cumque reiciendis quas. Asperiores culpa maiores perspiciatis quis voluptatum soluta ex odit assumenda iure quos labore id ipsum deserunt aut totam ipsa temporibus voluptatem, voluptas. Exercitationem quam atque commodi architecto voluptatibus temporibus ex nulla sint consequatur velit sit magni dolore harum molestias doloremque hic optio, earum consectetur quaerat saepe eius accusamus eveniet error neque. Consequuntur, debitis libero animi nemo quae aut maiores doloribus labore placeat provident, saepe dolorem fuga sunt sed qui voluptatem ipsum? Deserunt cumque perspiciatis explicabo in eum cupiditate ipsam laudantium harum odit voluptas natus ea, qui quaerat aliquam nam nihil illum atque laboriosam iure animi! Inventore eaque eos, explicabo ab, culpa dolore esse temporibus, ut excepturi, reprehenderit quae magnam laudantium incidunt facere totam dignissimos atque in ipsa veniam accusantium delectus vero provident quisquam. Corrupti soluta totam voluptatibus beatae temporibus tempora quisquam commodi id officiis quae reprehenderit sit, quasi. Fugiat, voluptas architecto, fuga dolorum quas similique cumque ea expedita tempora modi quae ab deleniti nisi nam quisquam assumenda vero cupiditate odit sit, totam at animi nostrum, recusandae. Reiciendis laborum laudantium, ipsam aut, et corrupti facere deleniti aspernatur eaque quaerat eum perspiciatis odit quae, aliquam quod autem assumenda enim, dolor non. Impedit ut ducimus, perspiciatis quas magnam, rerum, praesentium eligendi quaerat necessitatibus eum modi illo nostrum corrupti deleniti pariatur. Adipisci error iusto quisquam ut ducimus eos id fugit, delectus, totam quaerat. Rem vel excepturi asperiores molestiae odio nobis illo quia! Iste nobis quasi maxime, error quaerat quam sapiente excepturi corrupti eum incidunt omnis ducimus asperiores? Quos ut, debitis amet impedit mollitia ipsa recusandae temporibus maxime vero tenetur vitae, velit odio accusamus animi autem quidem blanditiis, labore, voluptas incidunt. Necessitatibus praesentium voluptate odio doloribus iusto, quibusdam incidunt. Mollitia temporibus aliquam ullam eius dolorum, cupiditate, alias aspernatur distinctio error, delectus, quaerat? Consectetur rem alias nobis ab nesciunt itaque omnis illo id eum molestias, tempore sequi repudiandae labore laboriosam ullam qui, dolorem, natus nam officia maxime voluptas porro. Asperiores velit debitis, dolores qui ipsum, iste soluta. Doloremque, omnis dicta sint excepturi, incidunt culpa, sequi provident sed itaque, nemo natus. Recusandae, necessitatibus dolorem sunt repudiandae vel, dolore! Tempora excepturi aut deserunt molestiae dicta dolorem commodi eius quae doloremque architecto nisi earum id cumque nihil fuga reprehenderit incidunt repudiandae libero iure, aspernatur accusantium quibusdam, deleniti ab. At quibusdam voluptatem placeat aperiam exercitationem, assumenda, aut numquam animi sapiente blanditiis id earum repellat est inventore voluptate tenetur consectetur! Ab dolor, pariatur quas nobis eaque obcaecati vel, rem? Nemo voluptate veritatis molestias facere a dolores excepturi cumque necessitatibus labore tenetur minima beatae eum harum, iure vero omnis rem tempore similique consequuntur incidunt voluptatem natus mollitia! Nihil ipsa tempore laudantium quia ipsum ea neque, sed perspiciatis earum, quam expedita facere omnis similique fugiat repellat suscipit sit dignissimos modi ratione numquam asperiores id vel facilis velit nisi. Officiis incidunt, nam quasi excepturi, earum soluta placeat iusto quisquam maxime officia hic reiciendis dolorem, illum ex doloremque atque voluptatibus sunt quaerat. Placeat laborum deleniti repudiandae repellendus est officia voluptatibus laudantium, debitis impedit illum cum, culpa consequuntur distinctio facere eius iste quidem tenetur et at nobis fugit aperiam sit, sequi, magni maxime. Omnis, deserunt ipsam. Pariatur aspernatur voluptatibus cupiditate dolor, eaque in obcaecati at, quidem vitae. Blanditiis fugit quisquam nobis nostrum ad ipsum porro. Sit consectetur molestiae aperiam quas corrupti assumenda saepe quisquam quaerat, earum incidunt fuga officia! Id cupiditate non harum, sequi mollitia corrupti repudiandae a assumenda voluptate eligendi. Aut beatae quibusdam tenetur alias ut non, dolorum molestias iste impedit, odit deserunt magni accusamus exercitationem maxime amet. Error ex, fugiat ullam voluptate veritatis aspernatur est eaque iure fugit quaerat debitis quia optio non cupiditate unde, inventore asperiores. Odit repellat aut aliquid non delectus eos tenetur obcaecati, dolorum, animi, quasi, vero? Corporis dolores accusamus fugit est similique obcaecati dolor saepe, officiis fuga maxime inventore necessitatibus enim. Sit ducimus vel deserunt numquam labore odio repellat recusandae quibusdam culpa a voluptatibus expedita perferendis, amet nostrum fugiat doloribus excepturi accusantium distinctio voluptate, quo molestiae, ea officiis. Incidunt, commodi. Perferendis culpa eveniet quae suscipit cumque officia saepe aut, natus aliquid in nobis unde veritatis. Pariatur assumenda beatae blanditiis magnam corrupti, soluta consectetur illo, expedita ratione ipsa sed, laboriosam sit quibusdam sequi repellendus officia provident?', '1', 0, '2022-02-26 18:59:32', '2022-02-02 17:14:30'),
(4, 'blog title 02', 'blog title 02', 'blog-title-02', '620800dabe45e.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Vitae, velit dolores suscipit aliquam odio harum, sint repudiandae possimus maiores, sequi aliquid distinctio, fuga dolorem. Provident ad cum similique, et neque inventore id, totam laborum a vero unde harum deleniti animi quas amet! Sapiente modi, porro voluptates non fuga quidem in. Aperiam, qui quae dicta saepe consequatur numquam corporis nobis magni asperiores a veritatis. Dicta ullam alias impedit, optio eligendi sapiente. Ullam dolores nulla quaerat iure quod eligendi magnam quia voluptate sint consequatur perferendis nostrum, dolor fugiat, esse eum, non dolorum vero accusamus porro laudantium. Temporibus voluptas ipsum sint at, rem numquam vel provident, officiis. Itaque quis, totam quam porro excepturi pariatur quisquam commodi aspernatur facere provident, necessitatibus in et voluptas praesentium harum omnis nemo dolorum sit ab incidunt! Delectus accusantium, nesciunt, ducimus soluta dolor aliquid vitae ea voluptates, magnam minima natus quod in beatae vel, impedit nihil aperiam quis? Amet unde tenetur modi a tempora asperiores non similique hic aperiam nesciunt eveniet pariatur in sequi ipsum voluptate, error distinctio dolores ea alias blanditiis nisi aspernatur. Atque, enim mollitia nesciunt harum eaque. Quo distinctio velit earum, at minus laboriosam minima, incidunt eligendi expedita, nulla consequuntur itaque corrupti impedit eveniet consectetur nesciunt qui amet molestiae enim ratione quaerat odit facere. Nisi culpa ullam sapiente nemo harum commodi tenetur aspernatur debitis veniam esse repudiandae porro adipisci quisquam dignissimos facere recusandae pariatur beatae, cupiditate a asperiores aperiam. Praesentium sed eveniet officia, nulla aspernatur, iste, itaque assumenda nobis ut quos facere mollitia ad sapiente in dolorum corrupti, iusto accusamus ex. Sint, et porro mollitia in praesentium adipisci cumque similique nemo cum enim assumenda aliquam aut quibusdam reiciendis eos modi! Non, et eaque porro cum neque, est deleniti! Dolor perspiciatis unde ratione animi veniam aspernatur facere, molestias omnis, tenetur ut natus non pariatur repellendus amet ipsum autem! Asperiores at vero, aliquam maiores? Velit modi, distinctio tenetur tempore ad quod non temporibus inventore obcaecati, labore animi ipsum veniam, neque ab sed hic? Rerum saepe voluptatum, eaque. Reprehenderit incidunt eligendi pariatur perspiciatis omnis quae nisi, provident laborum. Veritatis recusandae ea dolorem, quos pariatur dolores suscipit eligendi ab quasi quaerat error debitis architecto? Aperiam ducimus explicabo, dignissimos atque similique saepe cupiditate soluta odit, tempora dolor est incidunt labore tenetur error pariatur magnam corporis hic quis. Unde reprehenderit perferendis, laboriosam, vitae necessitatibus iure accusantium fugit voluptatum! Veniam, quis deserunt nam, perferendis sequi ab inventore temporibus natus minima error quisquam alias aspernatur illo, dolorem ipsum adipisci blanditiis qui. Voluptate amet tempore itaque officia recusandae est, sequi aliquid nobis quasi eos iusto voluptatibus eligendi minus, suscipit. Eveniet maiores soluta, corporis numquam doloremque laudantium, dignissimos. Praesentium ipsam, a. Debitis eos possimus incidunt id, consectetur perferendis eaque, porro? Voluptatem, earum, modi? Corrupti dolorum beatae molestiae, minus animi iure itaque quibusdam repellat temporibus eius perspiciatis incidunt libero asperiores ipsum aliquam, autem rerum commodi, nulla consectetur eos adipisci officiis natus magni? Aspernatur quaerat ducimus blanditiis suscipit. Sint ullam exercitationem officiis reiciendis quas explicabo sapiente labore, corporis sequi ducimus saepe dolore aperiam, veritatis mollitia vitae consectetur dignissimos error suscipit doloribus maiores aliquid quam obcaecati. Tenetur soluta voluptate quod quibusdam iste labore consequatur architecto officia illo consectetur est fuga, dolorum nisi nemo a sapiente ipsam, molestias minima sequi tempora, porro commodi. Odio voluptatibus nam blanditiis maxime, accusantium cumque. Quasi illo vero nobis, cupiditate. Asperiores quae fugiat hic! Officia provident quas, eligendi dicta reiciendis similique ullam praesentium veniam voluptas nam nesciunt atque repellendus ipsum. Blanditiis quis voluptate, dolore nobis architecto. Ducimus, accusantium praesentium ut delectus neque quasi sint corporis possimus assumenda voluptates repellat cum velit repellendus cumque adipisci minima tempore impedit quo. Repellat, numquam. Alias, vero odio porro omnis vitae quas explicabo necessitatibus tempore sed, iure? Provident iusto ratione blanditiis libero praesentium. Velit quisquam quod pariatur explicabo. Aliquid ut quos similique accusamus quaerat, hic harum, corporis praesentium dicta iure, doloremque repellendus possimus illum deserunt eaque consequatur inventore magnam dolores laborum, beatae libero. Consequatur tenetur quibusdam est repudiandae obcaecati, iure vero veniam praesentium quas dolorum itaque ea sequi voluptatem temporibus reprehenderit deserunt aut quidem, dolore illum, maiores aliquid similique, maxime? Soluta molestiae, obcaecati hic optio repellendus! Voluptas inventore similique totam voluptatem praesentium accusamus illum repellat vel tenetur nam eaque quasi itaque ipsam aliquam obcaecati tempora, non debitis perferendis atque cumque odit aspernatur corrupti sapiente repellendus. Distinctio facere rerum obcaecati autem sit eum deserunt temporibus earum voluptas, repellendus magnam dolorem vitae harum, nostrum, minima natus dolor neque quam? Autem minima, in expedita ea voluptatibus illo, provident, veniam dicta aliquam culpa, harum quod laboriosam alias esse repellat commodi assumenda distinctio nihil. Ipsa et reiciendis impedit quia laborum illum atque consequuntur debitis officiis, dolor quo tenetur eaque, blanditiis dicta? Enim, tenetur saepe quos alias eum rem quis eos similique ut, possimus vero doloremque ipsum animi aut impedit? Quod maxime voluptate fuga impedit animi tempore dicta quisquam illum suscipit pariatur saepe esse ratione quam reprehenderit perspiciatis voluptates doloribus placeat ex, porro? Veritatis nam omnis possimus voluptate cumque, et exercitationem itaque distinctio quasi quo aperiam molestiae maxime quaerat ducimus deleniti autem minus! Ea explicabo, voluptatum nesciunt, quam animi dignissimos nemo possimus architecto eveniet error aliquid dolorum quis eum esse officia nulla? Fuga, accusamus quaerat officiis magnam repellat ipsum reprehenderit molestiae maiores temporibus dolores earum quia labore. Eligendi vero dicta nesciunt, veritatis recusandae error ipsa cumque alias saepe sapiente ratione doloremque quo hic? Esse nesciunt at tempore ducimus fugiat, voluptatum velit maiores soluta, atque itaque hic veritatis ea inventore dolores commodi fuga similique, mollitia maxime minima molestias iusto quos rerum. Fuga dolore magni, nostrum laudantium id eum. Autem ipsum adipisci rerum, quia debitis facilis quae repudiandae recusandae soluta. Quibusdam quidem aperiam consequuntur, iure pariatur quos excepturi officiis ad voluptas molestias quod nam provident voluptatibus alias ut itaque at consectetur veniam. Repellendus dolor itaque officia fugit accusamus enim, porro debitis dicta modi iste nesciunt nobis corporis commodi iusto perferendis, autem voluptatum inventore molestiae nihil quos tempora atque? Id dolorem sequi voluptate, laborum quo, temporibus saepe facere doloribus corporis itaque aut perferendis cupiditate! Facilis assumenda repellendus et, ab obcaecati mollitia delectus officia nam molestiae omnis tempora repudiandae iste?', '1', 0, '2022-02-12 18:42:11', '2022-02-12 18:42:11'),
(5, 'blog title 03', 'blog title 03', 'blog-title-03', '62090528e8692.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, soluta! Praesentium atque quaerat, consequatur voluptatum eveniet quibusdam voluptatibus quisquam, in obcaecati placeat neque distinctio architecto sunt nam nobis recusandae itaque nulla repudiandae amet asperiores totam vitae suscipit. Amet voluptas, eum itaque quo a, inventore, excepturi obcaecati illo eius ullam ipsa officia molestiae assumenda porro? Incidunt reprehenderit autem ratione eius quis amet laborum cum in laudantium, repellat dolore consequatur nam ex ducimus porro hic a corrupti sint maiores omnis quasi sit odio! In rem, officia porro ratione, atque ducimus tenetur maiores laborum facere esse, facilis id ab, eveniet architecto illo est voluptates sed magnam beatae provident sequi veniam. Impedit modi ut quas minima voluptatem qui quaerat dolore neque labore, tempora nulla iste accusamus, harum dignissimos eaque recusandae error delectus, odio vero soluta, facilis totam ipsa doloribus. Possimus neque suscipit hic officiis nisi iure, nostrum placeat earum fugit quae quasi fugiat repellendus consequatur laborum delectus dicta soluta aperiam at voluptatum qui, ipsum, deserunt atque necessitatibus? Doloremque numquam, odit obcaecati nihil sapiente quod nostrum ullam explicabo, vel porro, esse fugit hic officiis saepe in a officia corporis amet. Voluptatem optio animi distinctio rerum cumque id totam suscipit iste hic labore, dicta earum reprehenderit assumenda officia, perspiciatis nisi? Repellat dolores quos nihil! Non molestiae recusandae, tempora dolores pariatur suscipit unde fugit ea sunt dicta, nihil nam quisquam, dolorem quasi illum laborum architecto necessitatibus amet! Facere assumenda architecto, id ex eaque sed praesentium modi porro velit ipsa quia doloribus quam asperiores? Facilis voluptates reiciendis ducimus aliquid, voluptatibus molestias officiis aspernatur laborum odit, et odio corporis velit id perferendis, saepe ipsam iusto assumenda quam beatae! Veniam consequatur laborum inventore fugit consequuntur et voluptatum dolorem incidunt repellat. Ab commodi assumenda nemo labore veritatis reprehenderit, aliquid, sit, mollitia deleniti iste vero quas minima atque? Modi totam mollitia, dolore quia voluptatum amet quos ratione omnis distinctio ea fugit iusto suscipit, a cum praesentium expedita voluptatibus saepe vitae voluptas sunt maiores ipsum doloribus, provident! Accusamus, accusantium. Illo accusantium repellat saepe veritatis nemo consequuntur fugiat sunt dolorum excepturi aliquid. Perferendis deleniti quidem dolore necessitatibus ipsam consectetur, fugiat dolor unde quas incidunt, facere pariatur atque quos officia officiis voluptatum rem, consequuntur, ducimus tenetur recusandae nesciunt perspiciatis rerum beatae. Praesentium, inventore aspernatur libero nulla minus ipsa necessitatibus facilis, numquam, sit dolor vel a! Porro, modi, nulla. Adipisci, eveniet voluptatem ex odio dolorem libero, quidem facere repellendus, facilis blanditiis nesciunt accusamus optio inventore quas consectetur repellat? At totam expedita nam eius maxime id aliquid incidunt vero fugiat magni? Vitae esse error, dolor quisquam, laboriosam rem placeat hic veritatis exercitationem commodi repellendus non eligendi! Voluptates eligendi ullam beatae quasi voluptatibus iure facere error provident atque, ipsum esse, praesentium repellendus accusantium omnis repellat obcaecati ad quis tenetur, doloribus officiis, consequuntur voluptatem minus dolore. Ipsam illum excepturi, porro, deserunt soluta veniam vitae officiis maxime, reiciendis nemo nesciunt repellat dolor corrupti. Dolorum tenetur aliquam illo soluta laudantium enim officia hic fugiat sunt, officiis sequi magni libero consequatur ad ipsa. Magni quis et repellat ipsam quaerat similique eveniet sapiente!', '1', 0, '2022-02-26 19:01:53', '2022-02-12 18:54:13'),
(29, 'blog title 04', 'blog title 04', 'blog-title-04', '621ab1949374b.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga vitae tempore ducimus, neque repudiandae quidem quis nobis debitis repellat exercitationem asperiores, rem delectus culpa! Ipsam sequi, hic cumque modi impedit.', '1', 0, '2022-02-26 23:02:44', '2022-02-26 23:02:44');

-- --------------------------------------------------------

--
-- Структура таблицы `buy`
--

CREATE TABLE `buy` (
  `buy_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_login` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phone` varchar(100) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `buy_card` varchar(50) NOT NULL DEFAULT '',
  `buy_type` varchar(50) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `buy_status` int(11) NOT NULL DEFAULT 1,
  `buy_price` float NOT NULL,
  `buy_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `buy`
--

INSERT INTO `buy` (`buy_id`, `user_id`, `user_login`, `user_email`, `user_phone`, `user_address`, `buy_card`, `buy_type`, `user_ip`, `buy_status`, `buy_price`, `buy_created_at`) VALUES
(2, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 35, '2022-02-20 22:06:50'),
(3, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 35, '2022-02-21 18:19:39'),
(4, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 148, '2022-02-21 22:02:42'),
(5, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 22, '2022-02-21 22:04:45'),
(6, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 22, '2022-02-21 22:06:28'),
(7, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 22, '2022-02-21 22:07:58'),
(8, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 148, '2022-02-22 08:50:36'),
(9, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 9, '2022-02-22 08:52:05'),
(10, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 22, '2022-02-22 10:16:56'),
(11, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 6, '2022-02-22 10:18:28'),
(12, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 13, '2022-02-22 10:19:15'),
(13, 2200, 'cookie', 'cookie@gmail.com', '+994519991111', 'Aze, Baku, 28.M', '4567456798744565', '', '654.987.789.654', 1, 9, '2022-02-22 21:50:13'),
(14, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 9, '2022-02-22 22:20:01'),
(15, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 6, '2022-02-22 22:23:23'),
(16, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 6, '2022-02-22 22:23:47'),
(17, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 1390, '2022-02-22 22:29:09'),
(18, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 18, '2022-02-22 22:58:25'),
(19, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 18, '2022-02-22 22:58:37'),
(20, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 18, '2022-02-22 22:59:25'),
(21, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 18, '2022-02-22 22:59:53'),
(22, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 21, '2022-02-22 23:12:07'),
(23, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 9, '2022-02-22 23:13:51'),
(24, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 22, '2022-02-23 22:15:55'),
(25, 2201, 'apsi', 'apsi@gmail.com', '+994519992233', 'Aze, Baku, 20 y.M', '3212456798743214', '', '159.951.357.159', 1, 13, '2022-02-23 22:15:59'),
(26, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 22, '2022-02-23 22:42:51'),
(27, 2201, 'apsi', 'apsi@gmail.com', '+994519992233', 'Aze, Baku, 20 y.M', '3212456798744565', '', '159.951.357.159', 1, 24, '2022-02-24 18:55:53'),
(28, 2201, 'apsi', 'apsi@gmail.com', '+994519992233', 'Aze, Baku, 20 y.M', '3212456798744565', '', '159.951.357.159', 1, 21, '2022-02-24 18:56:50'),
(29, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 21, '2022-02-24 21:17:21'),
(30, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 158, '2022-02-24 21:18:04'),
(31, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 3496, '2022-02-24 21:24:13'),
(32, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 24, '2022-02-24 21:45:03'),
(33, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 13, '2022-02-25 00:40:56'),
(34, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 13, '2022-02-25 00:44:34'),
(35, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 8, '2022-02-25 21:50:35'),
(36, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 80, '2022-02-27 01:24:54'),
(37, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 80, '2022-02-27 01:34:41'),
(38, 1913, 'admin', 'admin@gmail.com', '+994519991100', 'Aze, Baku, elm.M', '3212456798744565', '', '127.0.0.1', 1, 10, '2022-02-28 01:40:30');

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cart_product_name` varchar(50) NOT NULL,
  `cart_product_image` varchar(50) NOT NULL,
  `cart_product_price` int(11) NOT NULL,
  `cart_product_piece` int(11) NOT NULL DEFAULT 1,
  `cart_price_total` int(11) NOT NULL,
  `cart_product_portion` varchar(100) NOT NULL,
  `cart_status` int(11) NOT NULL DEFAULT 1,
  `orders_status` int(11) NOT NULL DEFAULT 0,
  `cart_updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `cart_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `section_id` int(1) NOT NULL DEFAULT 3,
  `category` varchar(50) NOT NULL,
  `category_title` varchar(50) NOT NULL,
  `category_subtitle` varchar(50) NOT NULL,
  `category_slug` varchar(50) NOT NULL,
  `category_description` varchar(1000) NOT NULL,
  `category_content` text NOT NULL,
  `category_image` varchar(50) NOT NULL,
  `category_status` int(11) NOT NULL DEFAULT 1,
  `category_updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`category_id`, `section_id`, `category`, `category_title`, `category_subtitle`, `category_slug`, `category_description`, `category_content`, `category_image`, `category_status`, `category_updated_at`, `category_created_at`) VALUES
(1, 3, 'other', 'другие', 'other', 'other', '', '', 'other.jpg', 0, '2022-01-17 08:26:50', '2022-01-17 08:26:50'),
(2, 3, 'category 1', 'категория 1', 'category 1', 'category-1', '', '', 'category-1.jpg', 1, '2022-01-17 08:26:50', '2022-01-17 08:26:50'),
(3, 3, 'category 2', 'категория 2', 'category 2', 'category-2', '', '', 'category-2.jpg', 1, '2022-01-17 08:26:50', '2022-01-17 08:26:50'),
(4, 3, 'category 3', 'категория 3', 'category 3', 'category-3', '', '', 'category-3.jpg', 1, '2022-01-17 08:26:50', '2022-01-17 08:26:50'),
(5, 3, 'category 4', 'категория 4', 'category 4', 'category-4', '', '', 'category-4.jpg', 1, '2022-01-17 08:26:50', '2022-01-17 08:26:50'),
(6, 3, 'category 5', 'категория 5', 'category 5', 'category-5', '', '', '61fac93736cda.jpg', 1, '2022-02-02 18:11:03', '2022-02-02 18:11:03');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_image` varchar(50) NOT NULL,
  `gallery_status` int(11) NOT NULL DEFAULT 1,
  `gallery_updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `gallery_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_image`, `gallery_status`, `gallery_updated_at`, `gallery_created_at`) VALUES
(360, '6208c27bad7f9.jpg', 1, '2022-02-13 08:34:03', '2022-02-13 08:34:03'),
(361, '6208c27bcef29.png', 1, '2022-02-13 08:34:03', '2022-02-13 08:34:03'),
(362, '6208c27c2d934.jpg', 1, '2022-02-13 08:34:04', '2022-02-13 08:34:04'),
(363, '6208c27c5b79f.jpg', 1, '2022-02-13 08:34:04', '2022-02-13 08:34:04'),
(364, '6208c27c82c90.jpg', 1, '2022-02-13 08:34:04', '2022-02-13 08:34:04'),
(365, '6208c27ca14df.jpg', 1, '2022-02-13 08:34:04', '2022-02-13 08:34:04'),
(366, '6208c27cb8fcd.png', 1, '2022-02-13 08:34:04', '2022-02-13 08:34:04'),
(367, '6208c27cd6c64.jpg', 1, '2022-02-13 08:34:04', '2022-02-13 08:34:04'),
(368, '6208c27d0b685.jpg', 1, '2022-02-13 08:34:05', '2022-02-13 08:34:05'),
(369, '6208c27d29ed4.jpg', 1, '2022-02-13 08:34:05', '2022-02-13 08:34:05'),
(370, '6208c27d3fa81.jpg', 1, '2022-02-13 08:34:05', '2022-02-13 08:34:05'),
(371, '6208c27d5ac20.jpg', 1, '2022-02-13 08:34:05', '2022-02-13 08:34:05'),
(372, '6208c27d77cff.jpg', 1, '2022-02-13 08:34:05', '2022-02-13 08:34:05'),
(373, '6208c27d98876.jpg', 1, '2022-02-13 08:34:05', '2022-02-13 08:34:05');

-- --------------------------------------------------------

--
-- Структура таблицы `guest`
--

CREATE TABLE `guest` (
  `guest_id` int(11) NOT NULL,
  `guest_ip` varchar(50) NOT NULL,
  `guest_status` int(11) NOT NULL DEFAULT 1,
  `guest_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `guest`
--

INSERT INTO `guest` (`guest_id`, `guest_ip`, `guest_status`, `guest_created_at`) VALUES
(828, '127.0.0.1', 1, '2022-02-28 15:43:04');

-- --------------------------------------------------------

--
-- Структура таблицы `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_image` varchar(50) NOT NULL,
  `image_updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `image_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `image`
--

INSERT INTO `image` (`image_id`, `product_id`, `image_image`, `image_updated_at`, `image_created_at`) VALUES
(74, 271, '61f555874dfb4.jpg', '2022-01-29 14:56:07', '2022-01-29 14:56:07'),
(75, 271, '61f5558756165.jpg', '2022-01-29 14:56:07', '2022-01-29 14:56:07'),
(76, 271, '61f555876cf05.png', '2022-01-29 14:56:07', '2022-01-29 14:56:07'),
(77, 271, '61f555877db00.jpg', '2022-01-29 14:56:07', '2022-01-29 14:56:07'),
(78, 273, '61f555dcaf1da.jpg', '2022-01-29 14:57:32', '2022-01-29 14:57:32'),
(79, 273, '61f555dcbd14b.jpg', '2022-01-29 14:57:32', '2022-01-29 14:57:32'),
(80, 273, '61f555dcd5021.jpg', '2022-01-29 14:57:32', '2022-01-29 14:57:32'),
(81, 273, '61f555dce369c.png', '2022-01-29 14:57:32', '2022-01-29 14:57:32'),
(82, 274, '61f555f09284f.jpg', '2022-01-29 14:57:52', '2022-01-29 14:57:52'),
(179, 16, '621ad8e2f1d32.jpg', '2022-02-27 01:50:26', '2022-02-27 01:50:26'),
(180, 16, '621ad8e318c91.jpg', '2022-02-27 01:50:27', '2022-02-27 01:50:27'),
(181, 1, '621ad8ef59a76.jpg', '2022-02-27 01:50:39', '2022-02-27 01:50:39'),
(182, 1, '621ad8ef7a5ee.png', '2022-02-27 01:50:39', '2022-02-27 01:50:39');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL DEFAULT 1,
  `menu_name` varchar(50) NOT NULL,
  `menu_title` varchar(50) NOT NULL,
  `menu_subtitle` varchar(50) NOT NULL,
  `menu_slug` varchar(50) NOT NULL,
  `menu_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`menu_id`, `section_id`, `menu_name`, `menu_title`, `menu_subtitle`, `menu_slug`, `menu_status`) VALUES
(1, 1, 'admin', 'админ', 'действия', 'admin', 1),
(2, 1, 'setting', 'настройки', 'настройка сайта', 'setting', 1),
(3, 1, 'notice', 'уведомление', 'уведомление сайта', 'notice', 1),
(4, 1, 'user', 'Пользователь', 'все пользователи', 'user', 1),
(5, 1, 'guest', 'гости', 'все гости', 'guest', 1),
(6, 1, 'blog', 'блог', 'все посты', 'blog', 1),
(7, 1, 'video', 'видео', 'все видео', 'video', 1),
(8, 1, 'gallery', 'галерея', 'все картинки', 'gallery', 1),
(9, 1, 'slider', 'слайдер ', 'картинки слайдера', 'slider', 1),
(10, 2, 'catgory', 'категории', 'все категории', 'category', 1),
(12, 2, 'product', 'продукты', 'все продукты', 'product', 1),
(13, 2, 'orders', 'заказы', 'заказы', 'orders', 1),
(14, 2, 'payment', 'оплаченные заказы ', 'заказы', 'payment', 0),
(15, 2, 'shop', 'все покупки', 'магазин', 'buy', 1),
(16, 3, 'other', 'другие', 'other', 'product/category/other', 1),
(17, 3, 'category 1', 'категория 1', 'category 1', 'product/category/category-1', 1),
(18, 3, 'category 2', 'категория 2', 'category 2', 'product/category/category-2', 1),
(19, 3, 'category 3', 'категория 3', 'category 3', 'product/category/category-3', 1),
(20, 3, 'category 4', 'категория 4', 'category 4', 'product/category/category-4', 1),
(21, 3, 'category 5', 'категория 5', 'category 5', 'product/category/category-5', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `notice_message` varchar(300) NOT NULL,
  `notice_body` varchar(300) NOT NULL,
  `notice_status` int(11) NOT NULL DEFAULT 1,
  `notice_type` varchar(50) NOT NULL DEFAULT 'user',
  `notice_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `notice`
--

INSERT INTO `notice` (`notice_id`, `user_id`, `notice_message`, `notice_body`, `notice_status`, `notice_type`, `notice_created_at`) VALUES
(130, 2270, 'from admin', 'ваш заказ отклонено', 1, 'user', '2022-03-01 15:45:05'),
(143, 1913, 'from cookie', 'new order product', 0, 'user', '2022-03-01 19:24:08');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `orders_image` varchar(50) NOT NULL,
  `orders_card` varchar(16) NOT NULL,
  `orders_status` int(11) NOT NULL DEFAULT 0,
  `orders_confirm` int(11) NOT NULL DEFAULT 0,
  `orders_refusal` int(11) NOT NULL DEFAULT 0,
  `orders_mailer` int(11) NOT NULL DEFAULT 0,
  `orders_price` float NOT NULL,
  `orders_type` varchar(50) NOT NULL DEFAULT 'delivery',
  `user_email` varchar(50) NOT NULL,
  `user_login` varchar(50) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `user_confirm` int(11) NOT NULL DEFAULT 1,
  `orders_updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `orders_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`orders_id`, `user_id`, `orders_image`, `orders_card`, `orders_status`, `orders_confirm`, `orders_refusal`, `orders_mailer`, `orders_price`, `orders_type`, `user_email`, `user_login`, `user_phone`, `user_address`, `user_confirm`, `orders_updated_at`, `orders_created_at`) VALUES
(544, 2293, '', '', 0, 0, 0, 0, 21, 'delivery', '111', '111', '', 'Aze, Baku, azadliq.M', 1, '2022-03-01 18:42:18', '2022-03-01 18:42:18'),
(546, 1, '', '', 0, 0, 0, 0, 10, 'delivery', '', '', '', '', 1, '2022-03-01 18:46:31', '2022-03-01 18:46:31'),
(548, 2295, '', '', 0, 0, 0, 0, 3, 'delivery', '111', '111', '', 'Aze, Baku, azadliq.M', 1, '2022-03-01 18:47:46', '2022-03-01 18:47:46');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_subtitle` varchar(50) NOT NULL,
  `product_description` varchar(50) NOT NULL,
  `product_content` text NOT NULL,
  `product_about` varchar(1000) NOT NULL,
  `product_slug` varchar(50) NOT NULL,
  `product_image` varchar(50) NOT NULL,
  `product_price` float NOT NULL,
  `product_stock` int(11) NOT NULL DEFAULT 10,
  `product_portion` varchar(50) NOT NULL DEFAULT '1 (kg)',
  `product_buy` int(11) NOT NULL DEFAULT 0,
  `product_view` int(11) NOT NULL DEFAULT 0,
  `product_status` int(11) NOT NULL DEFAULT 1,
  `product_updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `product_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `product_subtitle`, `product_description`, `product_content`, `product_about`, `product_slug`, `product_image`, `product_price`, `product_stock`, `product_portion`, `product_buy`, `product_view`, `product_status`, `product_updated_at`, `product_created_at`) VALUES
(1, 5, 'Simon Fitzpatrick', 'product subtitle 4', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quas magnam deserunt quod quisquam, voluptate velit doloribus eveniet quae tenetur adipisci porro perferendis est neque dolore quam cupiditate aspernatur. Reprehenderit corrupti doloribus similique, maiores modi fugiat, itaque reiciendis perspiciatis voluptate officiis inventore odit porro eius voluptates repellendus, obcaecati debitis vitae consectetur, ipsam veritatis! Ipsum cupiditate enim nostrum vitae hic, labore cum id blanditiis ducimus modi veritatis nihil, quas ut ratione quasi, assumenda quibusdam aliquam suscipit libero. Architecto culpa rerum provident, excepturi accusamus cumque ipsam quae deserunt maiores consequuntur itaque suscipit aliquam non perspiciatis. Consectetur praesentium quas ea possimus labore vel voluptates nisi itaque. Repudiandae magnam, earum sequi placeat, est perferendis veritatis, atque molestiae veniam iusto quidem aliquam. Vel architecto iure, magni ratione. Cum assumenda quia, laborum doloribus ea autem possimus, sequi amet odit laboriosam cupiditate ipsam molestiae voluptatum corrupti voluptatibus eum non id corporis ex incidunt sed dolor, veniam deserunt, vero aut. Quis velit ducimus voluptatem quam molestias, et eius consequuntur quas voluptate doloribus quibusdam officia libero cum, saepe amet obcaecati. Minus ullam odio voluptas quo ipsam, voluptatum velit laboriosam laborum officia quae itaque repellendus necessitatibus sed autem repellat eveniet vitae dignissimos impedit, sint alias eaque ea, magnam illo quis. Reprehenderit dolor, facere eius. Magnam illum, maxime est earum, ipsam numquam temporibus totam rem nesciunt soluta corrupti nihil molestias delectus rerum obcaecati, tempora dignissimos. Excepturi, omnis eaque ipsum! Ipsa repellat iste ullam unde minus totam, non facilis magnam sapiente, eligendi vero tenetur aspernatur explicabo cum eum doloribus deleniti laudantium! Nulla, illo.', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium ex facere, officia optio architecto a minus necessitatibus placeat. Totam amet nesciunt eos obcaecati maxime culpa fugit provident ipsa ut. Asperiores beatae nisi aut recusandae enim ducimus dolore nam modi. Porro veniam totam quidem a eum, distinctio asperiores tempora officiis rem.', 'simon-fitzpatrick', '620926f1e4eaf.jpg', 8, 77, '300(gr)', 144, 32023, 1, '2022-02-01 06:04:34', '2022-02-01 06:04:34'),
(2, 4, 'Dolan Mullins', 'product subtitle 5', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quas magnam deserunt quod quisquam, voluptate velit doloribus eveniet quae tenetur adipisci porro perferendis est neque dolore quam cupiditate aspernatur. Reprehenderit corrupti doloribus similique, maiores modi fugiat, itaque reiciendis perspiciatis voluptate officiis inventore odit porro eius voluptates repellendus, obcaecati debitis vitae consectetur, ipsam veritatis! Ipsum cupiditate enim nostrum vitae hic, labore cum id blanditiis ducimus modi veritatis nihil, quas ut ratione quasi, assumenda quibusdam aliquam suscipit libero. Architecto culpa rerum provident, excepturi accusamus cumque ipsam quae deserunt maiores consequuntur itaque suscipit aliquam non perspiciatis. Consectetur praesentium quas ea possimus labore vel voluptates nisi itaque. Repudiandae magnam, earum sequi placeat, est perferendis veritatis, atque molestiae veniam iusto quidem aliquam. Vel architecto iure, magni ratione. Cum assumenda quia, laborum doloribus ea autem possimus, sequi amet odit laboriosam cupiditate ipsam molestiae voluptatum corrupti voluptatibus eum non id corporis ex incidunt sed dolor, veniam deserunt, vero aut. Quis velit ducimus voluptatem quam molestias, et eius consequuntur quas voluptate doloribus quibusdam officia libero cum, saepe amet obcaecati. Minus ullam odio voluptas quo ipsam, voluptatum velit laboriosam laborum officia quae itaque repellendus necessitatibus sed autem repellat eveniet vitae dignissimos impedit, sint alias eaque ea, magnam illo quis. Reprehenderit dolor, facere eius. Magnam illum, maxime est earum, ipsam numquam temporibus totam rem nesciunt soluta corrupti nihil molestias delectus rerum obcaecati, tempora dignissimos. Excepturi, omnis eaque ipsum! Ipsa repellat iste ullam unde minus totam, non facilis magnam sapiente, eligendi vero tenetur aspernatur explicabo cum eum doloribus deleniti laudantium! Nulla, illo.', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium ex facere, officia optio architecto a minus necessitatibus placeat. Totam amet nesciunt eos obcaecati maxime culpa fugit provident ipsa ut. Asperiores beatae nisi aut recusandae enim ducimus dolore nam modi. Porro veniam totam quidem a eum, distinctio asperiores tempora officiis rem.', 'dolan-mullins', '620926f9eb222.jpg', 13, 98, '262(gr)', 713, 53951, 1, '2022-02-01 06:04:38', '2022-02-01 06:04:38'),
(3, 2, 'Ronan Spencer', 'product subtitle 6', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quas magnam deserunt quod quisquam, voluptate velit doloribus eveniet quae tenetur adipisci porro perferendis est neque dolore quam cupiditate aspernatur. Reprehenderit corrupti doloribus similique, maiores modi fugiat, itaque reiciendis perspiciatis voluptate officiis inventore odit porro eius voluptates repellendus, obcaecati debitis vitae consectetur, ipsam veritatis! Ipsum cupiditate enim nostrum vitae hic, labore cum id blanditiis ducimus modi veritatis nihil, quas ut ratione quasi, assumenda quibusdam aliquam suscipit libero. Architecto culpa rerum provident, excepturi accusamus cumque ipsam quae deserunt maiores consequuntur itaque suscipit aliquam non perspiciatis. Consectetur praesentium quas ea possimus labore vel voluptates nisi itaque. Repudiandae magnam, earum sequi placeat, est perferendis veritatis, atque molestiae veniam iusto quidem aliquam. Vel architecto iure, magni ratione. Cum assumenda quia, laborum doloribus ea autem possimus, sequi amet odit laboriosam cupiditate ipsam molestiae voluptatum corrupti voluptatibus eum non id corporis ex incidunt sed dolor, veniam deserunt, vero aut. Quis velit ducimus voluptatem quam molestias, et eius consequuntur quas voluptate doloribus quibusdam officia libero cum, saepe amet obcaecati. Minus ullam odio voluptas quo ipsam, voluptatum velit laboriosam laborum officia quae itaque repellendus necessitatibus sed autem repellat eveniet vitae dignissimos impedit, sint alias eaque ea, magnam illo quis. Reprehenderit dolor, facere eius. Magnam illum, maxime est earum, ipsam numquam temporibus totam rem nesciunt soluta corrupti nihil molestias delectus rerum obcaecati, tempora dignissimos. Excepturi, omnis eaque ipsum! Ipsa repellat iste ullam unde minus totam, non facilis magnam sapiente, eligendi vero tenetur aspernatur explicabo cum eum doloribus deleniti laudantium! Nulla, illo.', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium ex facere, officia optio architecto a minus necessitatibus placeat. Totam amet nesciunt eos obcaecati maxime culpa fugit provident ipsa ut. Asperiores beatae nisi aut recusandae enim ducimus dolore nam modi. Porro veniam totam quidem a eum, distinctio asperiores tempora officiis rem.', 'ronan-spencer', '6209044157933.png', 3, 98, '344(gr)', 130, 57725, 1, '2022-02-01 06:04:42', '2022-02-01 06:04:42'),
(4, 4, 'Fredericka Romero', 'product subtitle 7', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quas magnam deserunt quod quisquam, voluptate velit doloribus eveniet quae tenetur adipisci porro perferendis est neque dolore quam cupiditate aspernatur. Reprehenderit corrupti doloribus similique, maiores modi fugiat, itaque reiciendis perspiciatis voluptate officiis inventore odit porro eius voluptates repellendus, obcaecati debitis vitae consectetur, ipsam veritatis! Ipsum cupiditate enim nostrum vitae hic, labore cum id blanditiis ducimus modi veritatis nihil, quas ut ratione quasi, assumenda quibusdam aliquam suscipit libero. Architecto culpa rerum provident, excepturi accusamus cumque ipsam quae deserunt maiores consequuntur itaque suscipit aliquam non perspiciatis. Consectetur praesentium quas ea possimus labore vel voluptates nisi itaque. Repudiandae magnam, earum sequi placeat, est perferendis veritatis, atque molestiae veniam iusto quidem aliquam. Vel architecto iure, magni ratione. Cum assumenda quia, laborum doloribus ea autem possimus, sequi amet odit laboriosam cupiditate ipsam molestiae voluptatum corrupti voluptatibus eum non id corporis ex incidunt sed dolor, veniam deserunt, vero aut. Quis velit ducimus voluptatem quam molestias, et eius consequuntur quas voluptate doloribus quibusdam officia libero cum, saepe amet obcaecati. Minus ullam odio voluptas quo ipsam, voluptatum velit laboriosam laborum officia quae itaque repellendus necessitatibus sed autem repellat eveniet vitae dignissimos impedit, sint alias eaque ea, magnam illo quis. Reprehenderit dolor, facere eius. Magnam illum, maxime est earum, ipsam numquam temporibus totam rem nesciunt soluta corrupti nihil molestias delectus rerum obcaecati, tempora dignissimos. Excepturi, omnis eaque ipsum! Ipsa repellat iste ullam unde minus totam, non facilis magnam sapiente, eligendi vero tenetur aspernatur explicabo cum eum doloribus deleniti laudantium! Nulla, illo.', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium ex facere, officia optio architecto a minus necessitatibus placeat. Totam amet nesciunt eos obcaecati maxime culpa fugit provident ipsa ut. Asperiores beatae nisi aut recusandae enim ducimus dolore nam modi. Porro veniam totam quidem a eum, distinctio asperiores tempora officiis rem.', 'fredericka-romero', '6209043403a60.jpg', 10, 52, '581(gr)', 826, 58524, 1, '2022-02-01 06:04:46', '2022-02-01 06:04:46'),
(5, 4, 'Dustin Obrien', 'product subtitle 8', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quas magnam deserunt quod quisquam, voluptate velit doloribus eveniet quae tenetur adipisci porro perferendis est neque dolore quam cupiditate aspernatur. Reprehenderit corrupti doloribus similique, maiores modi fugiat, itaque reiciendis perspiciatis voluptate officiis inventore odit porro eius voluptates repellendus, obcaecati debitis vitae consectetur, ipsam veritatis! Ipsum cupiditate enim nostrum vitae hic, labore cum id blanditiis ducimus modi veritatis nihil, quas ut ratione quasi, assumenda quibusdam aliquam suscipit libero. Architecto culpa rerum provident, excepturi accusamus cumque ipsam quae deserunt maiores consequuntur itaque suscipit aliquam non perspiciatis. Consectetur praesentium quas ea possimus labore vel voluptates nisi itaque. Repudiandae magnam, earum sequi placeat, est perferendis veritatis, atque molestiae veniam iusto quidem aliquam. Vel architecto iure, magni ratione. Cum assumenda quia, laborum doloribus ea autem possimus, sequi amet odit laboriosam cupiditate ipsam molestiae voluptatum corrupti voluptatibus eum non id corporis ex incidunt sed dolor, veniam deserunt, vero aut. Quis velit ducimus voluptatem quam molestias, et eius consequuntur quas voluptate doloribus quibusdam officia libero cum, saepe amet obcaecati. Minus ullam odio voluptas quo ipsam, voluptatum velit laboriosam laborum officia quae itaque repellendus necessitatibus sed autem repellat eveniet vitae dignissimos impedit, sint alias eaque ea, magnam illo quis. Reprehenderit dolor, facere eius. Magnam illum, maxime est earum, ipsam numquam temporibus totam rem nesciunt soluta corrupti nihil molestias delectus rerum obcaecati, tempora dignissimos. Excepturi, omnis eaque ipsum! Ipsa repellat iste ullam unde minus totam, non facilis magnam sapiente, eligendi vero tenetur aspernatur explicabo cum eum doloribus deleniti laudantium! Nulla, illo.', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium ex facere, officia optio architecto a minus necessitatibus placeat. Totam amet nesciunt eos obcaecati maxime culpa fugit provident ipsa ut. Asperiores beatae nisi aut recusandae enim ducimus dolore nam modi. Porro veniam totam quidem a eum, distinctio asperiores tempora officiis rem.', 'dustin-obrien', '6209042c6b8bf.jpg', 13, 87, '964(gr)', 529, 32584, 1, '2022-02-01 06:04:50', '2022-02-01 06:04:50'),
(6, 4, 'Tanisha Garza', 'product subtitle 9', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quas magnam deserunt quod quisquam, voluptate velit doloribus eveniet quae tenetur adipisci porro perferendis est neque dolore quam cupiditate aspernatur. Reprehenderit corrupti doloribus similique, maiores modi fugiat, itaque reiciendis perspiciatis voluptate officiis inventore odit porro eius voluptates repellendus, obcaecati debitis vitae consectetur, ipsam veritatis! Ipsum cupiditate enim nostrum vitae hic, labore cum id blanditiis ducimus modi veritatis nihil, quas ut ratione quasi, assumenda quibusdam aliquam suscipit libero. Architecto culpa rerum provident, excepturi accusamus cumque ipsam quae deserunt maiores consequuntur itaque suscipit aliquam non perspiciatis. Consectetur praesentium quas ea possimus labore vel voluptates nisi itaque. Repudiandae magnam, earum sequi placeat, est perferendis veritatis, atque molestiae veniam iusto quidem aliquam. Vel architecto iure, magni ratione. Cum assumenda quia, laborum doloribus ea autem possimus, sequi amet odit laboriosam cupiditate ipsam molestiae voluptatum corrupti voluptatibus eum non id corporis ex incidunt sed dolor, veniam deserunt, vero aut. Quis velit ducimus voluptatem quam molestias, et eius consequuntur quas voluptate doloribus quibusdam officia libero cum, saepe amet obcaecati. Minus ullam odio voluptas quo ipsam, voluptatum velit laboriosam laborum officia quae itaque repellendus necessitatibus sed autem repellat eveniet vitae dignissimos impedit, sint alias eaque ea, magnam illo quis. Reprehenderit dolor, facere eius. Magnam illum, maxime est earum, ipsam numquam temporibus totam rem nesciunt soluta corrupti nihil molestias delectus rerum obcaecati, tempora dignissimos. Excepturi, omnis eaque ipsum! Ipsa repellat iste ullam unde minus totam, non facilis magnam sapiente, eligendi vero tenetur aspernatur explicabo cum eum doloribus deleniti laudantium! Nulla, illo.', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium ex facere, officia optio architecto a minus necessitatibus placeat. Totam amet nesciunt eos obcaecati maxime culpa fugit provident ipsa ut. Asperiores beatae nisi aut recusandae enim ducimus dolore nam modi. Porro veniam totam quidem a eum, distinctio asperiores tempora officiis rem.', 'tanisha-garza', '6209041fd2e2f.png', 18, 71, '700(gr)', 581, 66738, 1, '2022-02-01 06:04:54', '2022-02-01 06:04:54'),
(7, 2, 'Wayne Curry', 'product subtitle 10', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quas magnam deserunt quod quisquam, voluptate velit doloribus eveniet quae tenetur adipisci porro perferendis est neque dolore quam cupiditate aspernatur. Reprehenderit corrupti doloribus similique, maiores modi fugiat, itaque reiciendis perspiciatis voluptate officiis inventore odit porro eius voluptates repellendus, obcaecati debitis vitae consectetur, ipsam veritatis! Ipsum cupiditate enim nostrum vitae hic, labore cum id blanditiis ducimus modi veritatis nihil, quas ut ratione quasi, assumenda quibusdam aliquam suscipit libero. Architecto culpa rerum provident, excepturi accusamus cumque ipsam quae deserunt maiores consequuntur itaque suscipit aliquam non perspiciatis. Consectetur praesentium quas ea possimus labore vel voluptates nisi itaque. Repudiandae magnam, earum sequi placeat, est perferendis veritatis, atque molestiae veniam iusto quidem aliquam. Vel architecto iure, magni ratione. Cum assumenda quia, laborum doloribus ea autem possimus, sequi amet odit laboriosam cupiditate ipsam molestiae voluptatum corrupti voluptatibus eum non id corporis ex incidunt sed dolor, veniam deserunt, vero aut. Quis velit ducimus voluptatem quam molestias, et eius consequuntur quas voluptate doloribus quibusdam officia libero cum, saepe amet obcaecati. Minus ullam odio voluptas quo ipsam, voluptatum velit laboriosam laborum officia quae itaque repellendus necessitatibus sed autem repellat eveniet vitae dignissimos impedit, sint alias eaque ea, magnam illo quis. Reprehenderit dolor, facere eius. Magnam illum, maxime est earum, ipsam numquam temporibus totam rem nesciunt soluta corrupti nihil molestias delectus rerum obcaecati, tempora dignissimos. Excepturi, omnis eaque ipsum! Ipsa repellat iste ullam unde minus totam, non facilis magnam sapiente, eligendi vero tenetur aspernatur explicabo cum eum doloribus deleniti laudantium! Nulla, illo.', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium ex facere, officia optio architecto a minus necessitatibus placeat. Totam amet nesciunt eos obcaecati maxime culpa fugit provident ipsa ut. Asperiores beatae nisi aut recusandae enim ducimus dolore nam modi. Porro veniam totam quidem a eum, distinctio asperiores tempora officiis rem.', 'wayne-curry', '6209041979ee3.jpg', 11, 62, '330(gr)', 471, 39551, 1, '2022-02-01 06:06:53', '2022-02-01 06:06:53'),
(8, 2, 'Tanek Richardson', 'product subtitle 11', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quas magnam deserunt quod quisquam, voluptate velit doloribus eveniet quae tenetur adipisci porro perferendis est neque dolore quam cupiditate aspernatur. Reprehenderit corrupti doloribus similique, maiores modi fugiat, itaque reiciendis perspiciatis voluptate officiis inventore odit porro eius voluptates repellendus, obcaecati debitis vitae consectetur, ipsam veritatis! Ipsum cupiditate enim nostrum vitae hic, labore cum id blanditiis ducimus modi veritatis nihil, quas ut ratione quasi, assumenda quibusdam aliquam suscipit libero. Architecto culpa rerum provident, excepturi accusamus cumque ipsam quae deserunt maiores consequuntur itaque suscipit aliquam non perspiciatis. Consectetur praesentium quas ea possimus labore vel voluptates nisi itaque. Repudiandae magnam, earum sequi placeat, est perferendis veritatis, atque molestiae veniam iusto quidem aliquam. Vel architecto iure, magni ratione. Cum assumenda quia, laborum doloribus ea autem possimus, sequi amet odit laboriosam cupiditate ipsam molestiae voluptatum corrupti voluptatibus eum non id corporis ex incidunt sed dolor, veniam deserunt, vero aut. Quis velit ducimus voluptatem quam molestias, et eius consequuntur quas voluptate doloribus quibusdam officia libero cum, saepe amet obcaecati. Minus ullam odio voluptas quo ipsam, voluptatum velit laboriosam laborum officia quae itaque repellendus necessitatibus sed autem repellat eveniet vitae dignissimos impedit, sint alias eaque ea, magnam illo quis. Reprehenderit dolor, facere eius. Magnam illum, maxime est earum, ipsam numquam temporibus totam rem nesciunt soluta corrupti nihil molestias delectus rerum obcaecati, tempora dignissimos. Excepturi, omnis eaque ipsum! Ipsa repellat iste ullam unde minus totam, non facilis magnam sapiente, eligendi vero tenetur aspernatur explicabo cum eum doloribus deleniti laudantium! Nulla, illo.', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium ex facere, officia optio architecto a minus necessitatibus placeat. Totam amet nesciunt eos obcaecati maxime culpa fugit provident ipsa ut. Asperiores beatae nisi aut recusandae enim ducimus dolore nam modi. Porro veniam totam quidem a eum, distinctio asperiores tempora officiis rem.', 'tanek-richardson', '6209040ba7a2d.jpg', 9, 57, '571(gr)', 673, 85512, 1, '2022-02-01 06:06:58', '2022-02-01 06:06:58'),
(9, 2, 'Mariko Frye', 'product subtitle 12', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quas magnam deserunt quod quisquam, voluptate velit doloribus eveniet quae tenetur adipisci porro perferendis est neque dolore quam cupiditate aspernatur. Reprehenderit corrupti doloribus similique, maiores modi fugiat, itaque reiciendis perspiciatis voluptate officiis inventore odit porro eius voluptates repellendus, obcaecati debitis vitae consectetur, ipsam veritatis! Ipsum cupiditate enim nostrum vitae hic, labore cum id blanditiis ducimus modi veritatis nihil, quas ut ratione quasi, assumenda quibusdam aliquam suscipit libero. Architecto culpa rerum provident, excepturi accusamus cumque ipsam quae deserunt maiores consequuntur itaque suscipit aliquam non perspiciatis. Consectetur praesentium quas ea possimus labore vel voluptates nisi itaque. Repudiandae magnam, earum sequi placeat, est perferendis veritatis, atque molestiae veniam iusto quidem aliquam. Vel architecto iure, magni ratione. Cum assumenda quia, laborum doloribus ea autem possimus, sequi amet odit laboriosam cupiditate ipsam molestiae voluptatum corrupti voluptatibus eum non id corporis ex incidunt sed dolor, veniam deserunt, vero aut. Quis velit ducimus voluptatem quam molestias, et eius consequuntur quas voluptate doloribus quibusdam officia libero cum, saepe amet obcaecati. Minus ullam odio voluptas quo ipsam, voluptatum velit laboriosam laborum officia quae itaque repellendus necessitatibus sed autem repellat eveniet vitae dignissimos impedit, sint alias eaque ea, magnam illo quis. Reprehenderit dolor, facere eius. Magnam illum, maxime est earum, ipsam numquam temporibus totam rem nesciunt soluta corrupti nihil molestias delectus rerum obcaecati, tempora dignissimos. Excepturi, omnis eaque ipsum! Ipsa repellat iste ullam unde minus totam, non facilis magnam sapiente, eligendi vero tenetur aspernatur explicabo cum eum doloribus deleniti laudantium! Nulla, illo.', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium ex facere, officia optio architecto a minus necessitatibus placeat. Totam amet nesciunt eos obcaecati maxime culpa fugit provident ipsa ut. Asperiores beatae nisi aut recusandae enim ducimus dolore nam modi. Porro veniam totam quidem a eum, distinctio asperiores tempora officiis rem.', 'mariko-frye', '6209040318732.jpg', 3, 77, '474(gr)', 257, 53644, 1, '2022-02-01 06:07:02', '2022-02-01 06:07:02'),
(10, 2, 'Tara Fletcher', 'product subtitle 13', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quas magnam deserunt quod quisquam, voluptate velit doloribus eveniet quae tenetur adipisci porro perferendis est neque dolore quam cupiditate aspernatur. Reprehenderit corrupti doloribus similique, maiores modi fugiat, itaque reiciendis perspiciatis voluptate officiis inventore odit porro eius voluptates repellendus, obcaecati debitis vitae consectetur, ipsam veritatis! Ipsum cupiditate enim nostrum vitae hic, labore cum id blanditiis ducimus modi veritatis nihil, quas ut ratione quasi, assumenda quibusdam aliquam suscipit libero. Architecto culpa rerum provident, excepturi accusamus cumque ipsam quae deserunt maiores consequuntur itaque suscipit aliquam non perspiciatis. Consectetur praesentium quas ea possimus labore vel voluptates nisi itaque. Repudiandae magnam, earum sequi placeat, est perferendis veritatis, atque molestiae veniam iusto quidem aliquam. Vel architecto iure, magni ratione. Cum assumenda quia, laborum doloribus ea autem possimus, sequi amet odit laboriosam cupiditate ipsam molestiae voluptatum corrupti voluptatibus eum non id corporis ex incidunt sed dolor, veniam deserunt, vero aut. Quis velit ducimus voluptatem quam molestias, et eius consequuntur quas voluptate doloribus quibusdam officia libero cum, saepe amet obcaecati. Minus ullam odio voluptas quo ipsam, voluptatum velit laboriosam laborum officia quae itaque repellendus necessitatibus sed autem repellat eveniet vitae dignissimos impedit, sint alias eaque ea, magnam illo quis. Reprehenderit dolor, facere eius. Magnam illum, maxime est earum, ipsam numquam temporibus totam rem nesciunt soluta corrupti nihil molestias delectus rerum obcaecati, tempora dignissimos. Excepturi, omnis eaque ipsum! Ipsa repellat iste ullam unde minus totam, non facilis magnam sapiente, eligendi vero tenetur aspernatur explicabo cum eum doloribus deleniti laudantium! Nulla, illo.', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium ex facere, officia optio architecto a minus necessitatibus placeat. Totam amet nesciunt eos obcaecati maxime culpa fugit provident ipsa ut. Asperiores beatae nisi aut recusandae enim ducimus dolore nam modi. Porro veniam totam quidem a eum, distinctio asperiores tempora officiis rem.', 'tara-fletcher', '620903fa6829a.jpg', 16, 76, '375(gr)', 617, 97578, 1, '2022-02-01 06:07:06', '2022-02-01 06:07:06'),
(11, 3, 'Lucian Browning', 'product subtitle 14', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quas magnam deserunt quod quisquam, voluptate velit doloribus eveniet quae tenetur adipisci porro perferendis est neque dolore quam cupiditate aspernatur. Reprehenderit corrupti doloribus similique, maiores modi fugiat, itaque reiciendis perspiciatis voluptate officiis inventore odit porro eius voluptates repellendus, obcaecati debitis vitae consectetur, ipsam veritatis! Ipsum cupiditate enim nostrum vitae hic, labore cum id blanditiis ducimus modi veritatis nihil, quas ut ratione quasi, assumenda quibusdam aliquam suscipit libero. Architecto culpa rerum provident, excepturi accusamus cumque ipsam quae deserunt maiores consequuntur itaque suscipit aliquam non perspiciatis. Consectetur praesentium quas ea possimus labore vel voluptates nisi itaque. Repudiandae magnam, earum sequi placeat, est perferendis veritatis, atque molestiae veniam iusto quidem aliquam. Vel architecto iure, magni ratione. Cum assumenda quia, laborum doloribus ea autem possimus, sequi amet odit laboriosam cupiditate ipsam molestiae voluptatum corrupti voluptatibus eum non id corporis ex incidunt sed dolor, veniam deserunt, vero aut. Quis velit ducimus voluptatem quam molestias, et eius consequuntur quas voluptate doloribus quibusdam officia libero cum, saepe amet obcaecati. Minus ullam odio voluptas quo ipsam, voluptatum velit laboriosam laborum officia quae itaque repellendus necessitatibus sed autem repellat eveniet vitae dignissimos impedit, sint alias eaque ea, magnam illo quis. Reprehenderit dolor, facere eius. Magnam illum, maxime est earum, ipsam numquam temporibus totam rem nesciunt soluta corrupti nihil molestias delectus rerum obcaecati, tempora dignissimos. Excepturi, omnis eaque ipsum! Ipsa repellat iste ullam unde minus totam, non facilis magnam sapiente, eligendi vero tenetur aspernatur explicabo cum eum doloribus deleniti laudantium! Nulla, illo.', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium ex facere, officia optio architecto a minus necessitatibus placeat. Totam amet nesciunt eos obcaecati maxime culpa fugit provident ipsa ut. Asperiores beatae nisi aut recusandae enim ducimus dolore nam modi. Porro veniam totam quidem a eum, distinctio asperiores tempora officiis rem.', 'lucian-browning', '620903f4b8296.jpg', 18, 85, '140(gr)', 163, 84490, 1, '2022-02-01 06:07:33', '2022-02-01 06:07:33'),
(12, 2, 'Amir Kennedy', 'product subtitle 15', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quas magnam deserunt quod quisquam, voluptate velit doloribus eveniet quae tenetur adipisci porro perferendis est neque dolore quam cupiditate aspernatur. Reprehenderit corrupti doloribus similique, maiores modi fugiat, itaque reiciendis perspiciatis voluptate officiis inventore odit porro eius voluptates repellendus, obcaecati debitis vitae consectetur, ipsam veritatis! Ipsum cupiditate enim nostrum vitae hic, labore cum id blanditiis ducimus modi veritatis nihil, quas ut ratione quasi, assumenda quibusdam aliquam suscipit libero. Architecto culpa rerum provident, excepturi accusamus cumque ipsam quae deserunt maiores consequuntur itaque suscipit aliquam non perspiciatis. Consectetur praesentium quas ea possimus labore vel voluptates nisi itaque. Repudiandae magnam, earum sequi placeat, est perferendis veritatis, atque molestiae veniam iusto quidem aliquam. Vel architecto iure, magni ratione. Cum assumenda quia, laborum doloribus ea autem possimus, sequi amet odit laboriosam cupiditate ipsam molestiae voluptatum corrupti voluptatibus eum non id corporis ex incidunt sed dolor, veniam deserunt, vero aut. Quis velit ducimus voluptatem quam molestias, et eius consequuntur quas voluptate doloribus quibusdam officia libero cum, saepe amet obcaecati. Minus ullam odio voluptas quo ipsam, voluptatum velit laboriosam laborum officia quae itaque repellendus necessitatibus sed autem repellat eveniet vitae dignissimos impedit, sint alias eaque ea, magnam illo quis. Reprehenderit dolor, facere eius. Magnam illum, maxime est earum, ipsam numquam temporibus totam rem nesciunt soluta corrupti nihil molestias delectus rerum obcaecati, tempora dignissimos. Excepturi, omnis eaque ipsum! Ipsa repellat iste ullam unde minus totam, non facilis magnam sapiente, eligendi vero tenetur aspernatur explicabo cum eum doloribus deleniti laudantium! Nulla, illo.', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium ex facere, officia optio architecto a minus necessitatibus placeat. Totam amet nesciunt eos obcaecati maxime culpa fugit provident ipsa ut. Asperiores beatae nisi aut recusandae enim ducimus dolore nam modi. Porro veniam totam quidem a eum, distinctio asperiores tempora officiis rem.', 'amir-kennedy', '620903ebaf3f1.jpg', 14, 76, '763(gr)', 204, 77244, 1, '2022-02-01 06:07:41', '2022-02-01 06:07:41'),
(13, 4, 'Kirk Stein', 'product subtitle 16', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quas magnam deserunt quod quisquam, voluptate velit doloribus eveniet quae tenetur adipisci porro perferendis est neque dolore quam cupiditate aspernatur. Reprehenderit corrupti doloribus similique, maiores modi fugiat, itaque reiciendis perspiciatis voluptate officiis inventore odit porro eius voluptates repellendus, obcaecati debitis vitae consectetur, ipsam veritatis! Ipsum cupiditate enim nostrum vitae hic, labore cum id blanditiis ducimus modi veritatis nihil, quas ut ratione quasi, assumenda quibusdam aliquam suscipit libero. Architecto culpa rerum provident, excepturi accusamus cumque ipsam quae deserunt maiores consequuntur itaque suscipit aliquam non perspiciatis. Consectetur praesentium quas ea possimus labore vel voluptates nisi itaque. Repudiandae magnam, earum sequi placeat, est perferendis veritatis, atque molestiae veniam iusto quidem aliquam. Vel architecto iure, magni ratione. Cum assumenda quia, laborum doloribus ea autem possimus, sequi amet odit laboriosam cupiditate ipsam molestiae voluptatum corrupti voluptatibus eum non id corporis ex incidunt sed dolor, veniam deserunt, vero aut. Quis velit ducimus voluptatem quam molestias, et eius consequuntur quas voluptate doloribus quibusdam officia libero cum, saepe amet obcaecati. Minus ullam odio voluptas quo ipsam, voluptatum velit laboriosam laborum officia quae itaque repellendus necessitatibus sed autem repellat eveniet vitae dignissimos impedit, sint alias eaque ea, magnam illo quis. Reprehenderit dolor, facere eius. Magnam illum, maxime est earum, ipsam numquam temporibus totam rem nesciunt soluta corrupti nihil molestias delectus rerum obcaecati, tempora dignissimos. Excepturi, omnis eaque ipsum! Ipsa repellat iste ullam unde minus totam, non facilis magnam sapiente, eligendi vero tenetur aspernatur explicabo cum eum doloribus deleniti laudantium! Nulla, illo.', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium ex facere, officia optio architecto a minus necessitatibus placeat. Totam amet nesciunt eos obcaecati maxime culpa fugit provident ipsa ut. Asperiores beatae nisi aut recusandae enim ducimus dolore nam modi. Porro veniam totam quidem a eum, distinctio asperiores tempora officiis rem.', 'kirk-stein', '620903e399a62.jpg', 9, 65, '686(gr)', 973, 79346, 1, '2022-02-01 06:07:51', '2022-02-01 06:07:51'),
(14, 2, 'Brenna Higgins', 'product subtitle 17', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quas magnam deserunt quod quisquam, voluptate velit doloribus eveniet quae tenetur adipisci porro perferendis est neque dolore quam cupiditate aspernatur. Reprehenderit corrupti doloribus similique, maiores modi fugiat, itaque reiciendis perspiciatis voluptate officiis inventore odit porro eius voluptates repellendus, obcaecati debitis vitae consectetur, ipsam veritatis! Ipsum cupiditate enim nostrum vitae hic, labore cum id blanditiis ducimus modi veritatis nihil, quas ut ratione quasi, assumenda quibusdam aliquam suscipit libero. Architecto culpa rerum provident, excepturi accusamus cumque ipsam quae deserunt maiores consequuntur itaque suscipit aliquam non perspiciatis. Consectetur praesentium quas ea possimus labore vel voluptates nisi itaque. Repudiandae magnam, earum sequi placeat, est perferendis veritatis, atque molestiae veniam iusto quidem aliquam. Vel architecto iure, magni ratione. Cum assumenda quia, laborum doloribus ea autem possimus, sequi amet odit laboriosam cupiditate ipsam molestiae voluptatum corrupti voluptatibus eum non id corporis ex incidunt sed dolor, veniam deserunt, vero aut. Quis velit ducimus voluptatem quam molestias, et eius consequuntur quas voluptate doloribus quibusdam officia libero cum, saepe amet obcaecati. Minus ullam odio voluptas quo ipsam, voluptatum velit laboriosam laborum officia quae itaque repellendus necessitatibus sed autem repellat eveniet vitae dignissimos impedit, sint alias eaque ea, magnam illo quis. Reprehenderit dolor, facere eius. Magnam illum, maxime est earum, ipsam numquam temporibus totam rem nesciunt soluta corrupti nihil molestias delectus rerum obcaecati, tempora dignissimos. Excepturi, omnis eaque ipsum! Ipsa repellat iste ullam unde minus totam, non facilis magnam sapiente, eligendi vero tenetur aspernatur explicabo cum eum doloribus deleniti laudantium! Nulla, illo.', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium ex facere, officia optio architecto a minus necessitatibus placeat. Totam amet nesciunt eos obcaecati maxime culpa fugit provident ipsa ut. Asperiores beatae nisi aut recusandae enim ducimus dolore nam modi. Porro veniam totam quidem a eum, distinctio asperiores tempora officiis rem.', 'brenna-higgins', '620903dd7ef3d.jpg', 13, 100, '637(gr)', 153, 21147, 1, '2022-02-01 06:09:14', '2022-02-01 06:09:14'),
(15, 5, 'Zorita Reilly', 'product subtitle 18', 'Lorem ipsum dolor sit amet consectetur adipisicing', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quas magnam deserunt quod quisquam, voluptate velit doloribus eveniet quae tenetur adipisci porro perferendis est neque dolore quam cupiditate aspernatur. Reprehenderit corrupti doloribus similique, maiores modi fugiat, itaque reiciendis perspiciatis voluptate officiis inventore odit porro eius voluptates repellendus, obcaecati debitis vitae consectetur, ipsam veritatis! Ipsum cupiditate enim nostrum vitae hic, labore cum id blanditiis ducimus modi veritatis nihil, quas ut ratione quasi, assumenda quibusdam aliquam suscipit libero. Architecto culpa rerum provident, excepturi accusamus cumque ipsam quae deserunt maiores consequuntur itaque suscipit aliquam non perspiciatis. Consectetur praesentium quas ea possimus labore vel voluptates nisi itaque. Repudiandae magnam, earum sequi placeat, est perferendis veritatis, atque molestiae veniam iusto quidem aliquam. Vel architecto iure, magni ratione. Cum assumenda quia, laborum doloribus ea autem possimus, sequi amet odit laboriosam cupiditate ipsam molestiae voluptatum corrupti voluptatibus eum non id corporis ex incidunt sed dolor, veniam deserunt, vero aut. Quis velit ducimus voluptatem quam molestias, et eius consequuntur quas voluptate doloribus quibusdam officia libero cum, saepe amet obcaecati. Minus ullam odio voluptas quo ipsam, voluptatum velit laboriosam laborum officia quae itaque repellendus necessitatibus sed autem repellat eveniet vitae dignissimos impedit, sint alias eaque ea, magnam illo quis. Reprehenderit dolor, facere eius. Magnam illum, maxime est earum, ipsam numquam temporibus totam rem nesciunt soluta corrupti nihil molestias delectus rerum obcaecati, tempora dignissimos. Excepturi, omnis eaque ipsum! Ipsa repellat iste ullam unde minus totam, non facilis magnam sapiente, eligendi vero tenetur aspernatur explicabo cum eum doloribus deleniti laudantium! Nulla, illo.', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium ex facere, officia optio architecto a minus necessitatibus placeat. Totam amet nesciunt eos obcaecati maxime culpa fugit provident ipsa ut. Asperiores beatae nisi aut recusandae enim ducimus dolore nam modi. Porro veniam totam quidem a eum, distinctio asperiores tempora officiis rem.', 'zorita-reilly', '620903d7b5cda.jpg', 6, 68, '696(gr)', 665, 92213, 1, '2022-02-01 06:09:23', '2022-02-01 06:09:23'),
(16, 4, 'Emily Strong', 'product subtitle 19', 'Rem quibusdam nisi ssss', 'Adipisci lorem accusssss', 'Dolores mollitia excs', 'emily-strong', '620903d2a32d8.jpg', 749, 30, 'Consectetur nisi rat', 962, 73338, 1, '2022-02-27 21:39:56', '2022-02-01 06:09:34');

-- --------------------------------------------------------

--
-- Структура таблицы `section`
--

CREATE TABLE `section` (
  `section_id` int(11) NOT NULL,
  `section` varchar(50) NOT NULL,
  `section_title` varchar(50) NOT NULL,
  `section_subtitle` varchar(50) NOT NULL,
  `section_icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `section`
--

INSERT INTO `section` (`section_id`, `section`, `section_title`, `section_subtitle`, `section_icon`) VALUES
(1, 'setting', 'настройка', 'все настройки', 'react.svg'),
(2, 'product', 'продукты', 'все продукты ', 'flame.svg'),
(3, 'category', 'категории', 'продукты по категории ', 'category.svg');

-- --------------------------------------------------------

--
-- Структура таблицы `setting`
--

CREATE TABLE `setting` (
  `setting_id` int(11) NOT NULL,
  `setting_description` varchar(50) NOT NULL,
  `setting_key` varchar(50) NOT NULL,
  `setting_value` text NOT NULL,
  `setting_type` varchar(50) NOT NULL,
  `setting_updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `setting_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `setting`
--

INSERT INTO `setting` (`setting_id`, `setting_description`, `setting_key`, `setting_value`, `setting_type`, `setting_updated_at`, `setting_created_at`) VALUES
(1, 'phone', 'phone', '+994509999999', 'main', '2022-02-12 04:18:15', '0000-00-00 00:00:00'),
(2, 'location', 'location', '975 Liberty Ave, Union, NJ 07083, USA', 'main', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'email', 'email', 'web@creams@gmail.com', 'main', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'footer text', 'footer_text', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique error repudiandae commodi placeat. Veniam vel porro laborum, velit quas eligendi totam at rerum inventore consectetur atque magni.', 'main', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'instagram', 'instagram', 'instagram.com', 'main', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'facebook', 'facebook', 'facebook.com', 'main', '2022-01-29 08:31:36', '0000-00-00 00:00:00'),
(11, 'about us', 'about_us', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste corporis fugiat animi suscipit earum voluptatibus repudiandae asperiores dignissimos laudantium. Illo, ex sint provident perspiciatis optio cumque velit, odit dolorem inventore iste? Repellat ea perspiciatis excepturi aut minima fuga, provident vero hic? Voluptatibus odit similique quam tenetur repudiandae nemo asperiores est labore id unde dolor totam illo optio sed libero dolorum rem explicabo tempora assumenda modi consectetur nobis, molestiae! Provident ut repudiandae sequi, incidunt vel recusandae. Veritatis voluptate ut similique tenetur ipsum fuga cumque tempora, pariatur voluptates accusantium nisi quia. Ex impedit, nulla expedita eaque veniam quae error velit voluptatum. Perspiciatis harum numquam quidem quasi iure animi aut magni, possimus culpa, quo alias quod enim ipsum, totam ullam excepturi asperiores soluta magnam est, ratione deleniti unde molestiae. Laboriosam, delectus itaque tempora. Aliquam accusamus perspiciatis excepturi temporibus labore. Aspernatur, cumque quaerat accusamus! Minus ratione molestias facere numquam nisi repudiandae, saepe fugiat in accusamus suscipit, provident fugit inventore veniam architecto, enim aperiam vel, nemo ipsa sunt nostrum aliquid. Minus, consectetur! Culpa est quibusdam aliquam quidem dolores ut dolorum delectus magni officia recusandae nam dolor libero veritatis, doloremque, optio, perferendis repellendus maxime totam exercitationem provident? Enim facilis nemo quos inventore quas quia, earum rerum accusantium qui numquam eum voluptates exercitationem voluptatem incidunt mollitia quidem, illo. Consectetur sint itaque explicabo. Hic, facilis. Possimus necessitatibus autem corporis ipsam sunt a consequuntur ipsum odio incidunt beatae, obcaecati consectetur ut ducimus blanditiis voluptatibus numquam fugit dignissimos eaque doloremque quisquam sequi quo commodi molestias sit. Ut commodi esse ex!', 'main', '2022-02-27 21:34:05', '2022-01-23 05:33:07');

-- --------------------------------------------------------

--
-- Структура таблицы `shop`
--

CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL,
  `buy_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shop_product_name` varchar(50) NOT NULL,
  `shop_product_image` varchar(50) NOT NULL,
  `shop_product_price` int(11) NOT NULL,
  `shop_total_price` float NOT NULL,
  `shop_product_piece` int(11) NOT NULL DEFAULT 1,
  `shop_product_portion` varchar(100) NOT NULL,
  `shop_updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `shop_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `shop`
--

INSERT INTO `shop` (`shop_id`, `buy_id`, `product_id`, `user_id`, `shop_product_name`, `shop_product_image`, `shop_product_price`, `shop_total_price`, `shop_product_piece`, `shop_product_portion`, `shop_updated_at`, `shop_created_at`) VALUES
(2, 2, 17, 1913, 'Brenna Higgins', '620903dd7ef3d.jpg', 13, 0, 1, '637(gr)', '2022-02-20 22:06:50', '2022-02-20 22:06:50'),
(3, 2, 16, 1913, 'Kirk Stein', '620903e399a62.jpg', 9, 0, 1, '686(gr)', '2022-02-20 22:06:51', '2022-02-20 22:06:51'),
(4, 2, 18, 1913, 'Zorita Reilly', '620903d7b5cda.jpg', 6, 0, 1, '696(gr)', '2022-02-20 22:06:51', '2022-02-20 22:06:51'),
(5, 2, 19, 1913, 'Ryan Perkins', '620903d2a32d8.jpg', 7, 0, 1, '474(gr)', '2022-02-20 22:06:52', '2022-02-20 22:06:52'),
(6, 3, 16, 1913, 'Kirk Stein', '620903e399a62.jpg', 9, 0, 1, '686(gr)', '2022-02-21 18:19:39', '2022-02-21 18:19:39'),
(7, 3, 17, 1913, 'Brenna Higgins', '620903dd7ef3d.jpg', 13, 0, 1, '637(gr)', '2022-02-21 18:19:40', '2022-02-21 18:19:40'),
(8, 3, 18, 1913, 'Zorita Reilly', '620903d7b5cda.jpg', 6, 0, 1, '696(gr)', '2022-02-21 18:19:40', '2022-02-21 18:19:40'),
(9, 3, 19, 1913, 'Ryan Perkins', '620903d2a32d8.jpg', 7, 0, 1, '474(gr)', '2022-02-21 18:19:40', '2022-02-21 18:19:40'),
(10, 4, 19, 1913, 'Ryan Perkins', '620903d2a32d8.jpg', 7, 0, 1, '474(gr)', '2022-02-21 22:02:42', '2022-02-21 22:02:42'),
(11, 4, 18, 1913, 'Zorita Reilly', '620903d7b5cda.jpg', 6, 0, 1, '696(gr)', '2022-02-21 22:02:42', '2022-02-21 22:02:42'),
(12, 4, 17, 1913, 'Brenna Higgins', '620903dd7ef3d.jpg', 13, 0, 1, '637(gr)', '2022-02-21 22:02:42', '2022-02-21 22:02:42'),
(13, 4, 16, 1913, 'Kirk Stein', '620903e399a62.jpg', 9, 0, 1, '686(gr)', '2022-02-21 22:02:43', '2022-02-21 22:02:43'),
(14, 4, 12, 1913, 'Mariko Frye', '6209040318732.jpg', 3, 0, 1, '474(gr)', '2022-02-21 22:02:43', '2022-02-21 22:02:43'),
(15, 4, 13, 1913, 'Tara Fletcher', '620903fa6829a.jpg', 16, 0, 1, '375(gr)', '2022-02-21 22:02:43', '2022-02-21 22:02:43'),
(16, 4, 14, 1913, 'Lucian Browning', '620903f4b8296.jpg', 18, 0, 1, '140(gr)', '2022-02-21 22:02:44', '2022-02-21 22:02:44'),
(17, 4, 15, 1913, 'Amir Kennedy', '620903ebaf3f1.jpg', 14, 0, 1, '763(gr)', '2022-02-21 22:02:44', '2022-02-21 22:02:44'),
(18, 4, 6, 1913, 'Ronan Spencer', '6209044157933.png', 3, 0, 1, '344(gr)', '2022-02-21 22:02:44', '2022-02-21 22:02:44'),
(19, 4, 9, 1913, 'Tanisha Garza', '6209041fd2e2f.png', 18, 0, 1, '700(gr)', '2022-02-21 22:02:44', '2022-02-21 22:02:44'),
(20, 4, 10, 1913, 'Wayne Curry', '6209041979ee3.jpg', 11, 0, 1, '330(gr)', '2022-02-21 22:02:45', '2022-02-21 22:02:45'),
(21, 4, 11, 1913, 'Tanek Richardson', '6209040ba7a2d.jpg', 9, 0, 1, '571(gr)', '2022-02-21 22:02:45', '2022-02-21 22:02:45'),
(22, 4, 4, 1913, 'Simon Fitzpatrick', '620926f1e4eaf.jpg', 8, 0, 1, '300(gr)', '2022-02-21 22:02:46', '2022-02-21 22:02:46'),
(23, 4, 5, 1913, 'Dolan Mullins', '620926f9eb222.jpg', 13, 0, 1, '262(gr)', '2022-02-21 22:02:46', '2022-02-21 22:02:46'),
(24, 5, 16, 1913, 'Kirk Stein', '620903e399a62.jpg', 9, 0, 1, '686(gr)', '2022-02-21 22:04:46', '2022-02-21 22:04:46'),
(25, 5, 17, 1913, 'Brenna Higgins', '620903dd7ef3d.jpg', 13, 0, 1, '637(gr)', '2022-02-21 22:04:46', '2022-02-21 22:04:46'),
(26, 6, 17, 1913, 'Brenna Higgins', '620903dd7ef3d.jpg', 13, 0, 1, '637(gr)', '2022-02-21 22:06:28', '2022-02-21 22:06:28'),
(27, 6, 16, 1913, 'Kirk Stein', '620903e399a62.jpg', 9, 0, 1, '686(gr)', '2022-02-21 22:06:28', '2022-02-21 22:06:28'),
(28, 7, 16, 1913, 'Kirk Stein', '620903e399a62.jpg', 9, 0, 1, '686(gr)', '2022-02-21 22:07:58', '2022-02-21 22:07:58'),
(29, 7, 17, 1913, 'Brenna Higgins', '620903dd7ef3d.jpg', 13, 0, 1, '637(gr)', '2022-02-21 22:07:58', '2022-02-21 22:07:58'),
(30, 8, 19, 1913, 'Ryan Perkins', '620903d2a32d8.jpg', 7, 0, 1, '474(gr)', '2022-02-22 08:50:37', '2022-02-22 08:50:37'),
(31, 8, 18, 1913, 'Zorita Reilly', '620903d7b5cda.jpg', 6, 0, 1, '696(gr)', '2022-02-22 08:50:37', '2022-02-22 08:50:37'),
(32, 8, 17, 1913, 'Brenna Higgins', '620903dd7ef3d.jpg', 13, 0, 1, '637(gr)', '2022-02-22 08:50:37', '2022-02-22 08:50:37'),
(33, 8, 16, 1913, 'Kirk Stein', '620903e399a62.jpg', 9, 0, 1, '686(gr)', '2022-02-22 08:50:37', '2022-02-22 08:50:37'),
(34, 8, 15, 1913, 'Amir Kennedy', '620903ebaf3f1.jpg', 14, 0, 1, '763(gr)', '2022-02-22 08:50:38', '2022-02-22 08:50:38'),
(35, 8, 14, 1913, 'Lucian Browning', '620903f4b8296.jpg', 18, 0, 1, '140(gr)', '2022-02-22 08:50:38', '2022-02-22 08:50:38'),
(36, 8, 13, 1913, 'Tara Fletcher', '620903fa6829a.jpg', 16, 0, 1, '375(gr)', '2022-02-22 08:50:38', '2022-02-22 08:50:38'),
(37, 8, 12, 1913, 'Mariko Frye', '6209040318732.jpg', 3, 0, 1, '474(gr)', '2022-02-22 08:50:38', '2022-02-22 08:50:38'),
(38, 8, 11, 1913, 'Tanek Richardson', '6209040ba7a2d.jpg', 9, 0, 1, '571(gr)', '2022-02-22 08:50:39', '2022-02-22 08:50:39'),
(39, 8, 10, 1913, 'Wayne Curry', '6209041979ee3.jpg', 11, 0, 1, '330(gr)', '2022-02-22 08:50:39', '2022-02-22 08:50:39'),
(40, 8, 9, 1913, 'Tanisha Garza', '6209041fd2e2f.png', 18, 0, 1, '700(gr)', '2022-02-22 08:50:40', '2022-02-22 08:50:40'),
(41, 8, 6, 1913, 'Ronan Spencer', '6209044157933.png', 3, 0, 1, '344(gr)', '2022-02-22 08:50:40', '2022-02-22 08:50:40'),
(42, 8, 5, 1913, 'Dolan Mullins', '620926f9eb222.jpg', 13, 0, 1, '262(gr)', '2022-02-22 08:50:40', '2022-02-22 08:50:40'),
(43, 8, 4, 1913, 'Simon Fitzpatrick', '620926f1e4eaf.jpg', 8, 0, 1, '300(gr)', '2022-02-22 08:50:41', '2022-02-22 08:50:41'),
(44, 9, 16, 1913, 'Kirk Stein', '620903e399a62.jpg', 9, 0, 1, '686(gr)', '2022-02-22 08:52:05', '2022-02-22 08:52:05'),
(45, 10, 16, 1913, 'Kirk Stein', '620903e399a62.jpg', 9, 0, 1, '686(gr)', '2022-02-22 10:16:56', '2022-02-22 10:16:56'),
(46, 10, 18, 1913, 'Zorita Reilly', '620903d7b5cda.jpg', 6, 0, 1, '696(gr)', '2022-02-22 10:16:56', '2022-02-22 10:16:56'),
(47, 11, 18, 1913, 'Zorita Reilly', '620903d7b5cda.jpg', 6, 0, 1, '696(gr)', '2022-02-22 10:18:28', '2022-02-22 10:18:28'),
(48, 12, 17, 1913, 'Brenna Higgins', '620903dd7ef3d.jpg', 13, 0, 1, '637(gr)', '2022-02-22 10:19:15', '2022-02-22 10:19:15'),
(49, 13, 16, 2200, 'Kirk Stein', '620903e399a62.jpg', 9, 0, 1, '686(gr)', '2022-02-22 21:50:13', '2022-02-22 21:50:13'),
(50, 14, 16, 1913, 'Kirk Stein', '620903e399a62.jpg', 9, 0, 1, '686(gr)', '2022-02-22 22:20:01', '2022-02-22 22:20:01'),
(51, 15, 18, 1913, 'Zorita Reilly', '620903d7b5cda.jpg', 6, 0, 1, '696(gr)', '2022-02-22 22:23:23', '2022-02-22 22:23:23'),
(52, 16, 18, 1913, 'Zorita Reilly', '620903d7b5cda.jpg', 6, 0, 1, '696(gr)', '2022-02-22 22:23:47', '2022-02-22 22:23:47'),
(53, 17, 19, 1913, 'Ryan Perkins', '620903d2a32d8.jpg', 7, 0, 10, '474(gr)', '2022-02-22 22:29:09', '2022-02-22 22:29:09'),
(54, 17, 18, 1913, 'Zorita Reilly', '620903d7b5cda.jpg', 6, 0, 10, '696(gr)', '2022-02-22 22:29:09', '2022-02-22 22:29:09'),
(55, 17, 17, 1913, 'Brenna Higgins', '620903dd7ef3d.jpg', 13, 0, 5, '637(gr)', '2022-02-22 22:29:09', '2022-02-22 22:29:09'),
(56, 17, 16, 1913, 'Kirk Stein', '620903e399a62.jpg', 9, 0, 10, '686(gr)', '2022-02-22 22:29:09', '2022-02-22 22:29:09'),
(57, 17, 12, 1913, 'Mariko Frye', '6209040318732.jpg', 3, 0, 10, '474(gr)', '2022-02-22 22:29:10', '2022-02-22 22:29:10'),
(58, 17, 13, 1913, 'Tara Fletcher', '620903fa6829a.jpg', 16, 0, 10, '375(gr)', '2022-02-22 22:29:10', '2022-02-22 22:29:10'),
(59, 17, 14, 1913, 'Lucian Browning', '620903f4b8296.jpg', 18, 0, 10, '140(gr)', '2022-02-22 22:29:10', '2022-02-22 22:29:10'),
(60, 17, 15, 1913, 'Amir Kennedy', '620903ebaf3f1.jpg', 14, 0, 10, '763(gr)', '2022-02-22 22:29:10', '2022-02-22 22:29:10'),
(61, 17, 6, 1913, 'Ronan Spencer', '6209044157933.png', 3, 0, 10, '344(gr)', '2022-02-22 22:29:11', '2022-02-22 22:29:11'),
(62, 17, 9, 1913, 'Tanisha Garza', '6209041fd2e2f.png', 18, 0, 10, '700(gr)', '2022-02-22 22:29:11', '2022-02-22 22:29:11'),
(63, 17, 10, 1913, 'Wayne Curry', '6209041979ee3.jpg', 11, 0, 10, '330(gr)', '2022-02-22 22:29:11', '2022-02-22 22:29:11'),
(64, 17, 11, 1913, 'Tanek Richardson', '6209040ba7a2d.jpg', 9, 0, 5, '571(gr)', '2022-02-22 22:29:11', '2022-02-22 22:29:11'),
(65, 17, 4, 1913, 'Simon Fitzpatrick', '620926f1e4eaf.jpg', 8, 0, 10, '300(gr)', '2022-02-22 22:29:11', '2022-02-22 22:29:11'),
(66, 17, 5, 1913, 'Dolan Mullins', '620926f9eb222.jpg', 13, 0, 10, '262(gr)', '2022-02-22 22:29:12', '2022-02-22 22:29:12'),
(67, 18, 9, 1913, 'Tanisha Garza', '6209041fd2e2f.png', 18, 0, 1, '700(gr)', '2022-02-22 22:58:26', '2022-02-22 22:58:26'),
(68, 19, 9, 1913, 'Tanisha Garza', '6209041fd2e2f.png', 18, 0, 1, '700(gr)', '2022-02-22 22:58:37', '2022-02-22 22:58:37'),
(69, 20, 9, 1913, 'Tanisha Garza', '6209041fd2e2f.png', 18, 0, 1, '700(gr)', '2022-02-22 22:59:26', '2022-02-22 22:59:26'),
(70, 21, 9, 1913, 'Tanisha Garza', '6209041fd2e2f.png', 18, 0, 1, '700(gr)', '2022-02-22 22:59:53', '2022-02-22 22:59:53'),
(71, 22, 4, 1913, 'Simon Fitzpatrick', '620926f1e4eaf.jpg', 8, 0, 1, '300(gr)', '2022-02-22 23:12:08', '2022-02-22 23:12:08'),
(72, 22, 5, 1913, 'Dolan Mullins', '620926f9eb222.jpg', 13, 0, 1, '262(gr)', '2022-02-22 23:12:08', '2022-02-22 23:12:08'),
(73, 23, 16, 1913, 'Kirk Stein', '620903e399a62.jpg', 9, 0, 1, '686(gr)', '2022-02-22 23:13:51', '2022-02-22 23:13:51'),
(74, 24, 16, 1913, 'Kirk Stein', '620903e399a62.jpg', 9, 0, 1, '686(gr)', '2022-02-23 22:15:55', '2022-02-23 22:15:55'),
(75, 24, 18, 1913, 'Zorita Reilly', '620903d7b5cda.jpg', 6, 0, 1, '696(gr)', '2022-02-23 22:15:56', '2022-02-23 22:15:56'),
(76, 24, 19, 1913, 'Ryan Perkins', '620903d2a32d8.jpg', 7, 0, 1, '474(gr)', '2022-02-23 22:15:56', '2022-02-23 22:15:56'),
(77, 25, 18, 2201, 'Zorita Reilly', '620903d7b5cda.jpg', 6, 0, 1, '696(gr)', '2022-02-23 22:15:59', '2022-02-23 22:15:59'),
(78, 25, 19, 2201, 'Ryan Perkins', '620903d2a32d8.jpg', 7, 0, 1, '474(gr)', '2022-02-23 22:15:59', '2022-02-23 22:15:59'),
(79, 26, 16, 1913, 'Kirk Stein', '620903e399a62.jpg', 9, 0, 1, '686(gr)', '2022-02-23 22:42:51', '2022-02-23 22:42:51'),
(80, 26, 18, 1913, 'Zorita Reilly', '620903d7b5cda.jpg', 6, 0, 1, '696(gr)', '2022-02-23 22:42:51', '2022-02-23 22:42:51'),
(81, 26, 19, 1913, 'Ryan Perkins', '620903d2a32d8.jpg', 7, 0, 1, '474(gr)', '2022-02-23 22:42:52', '2022-02-23 22:42:52'),
(82, 27, 1, 2201, 'Simon Fitzpatrick', '620926f1e4eaf.jpg', 8, 0, 1, '300(gr)', '2022-02-24 18:55:53', '2022-02-24 18:55:53'),
(83, 27, 2, 2201, 'Dolan Mullins', '620926f9eb222.jpg', 13, 0, 1, '262(gr)', '2022-02-24 18:55:54', '2022-02-24 18:55:54'),
(84, 27, 3, 2201, 'Ronan Spencer', '6209044157933.png', 3, 0, 1, '344(gr)', '2022-02-24 18:55:54', '2022-02-24 18:55:54'),
(85, 28, 1, 2201, 'Simon Fitzpatrick', '620926f1e4eaf.jpg', 8, 0, 1, '300(gr)', '2022-02-24 18:56:50', '2022-02-24 18:56:50'),
(86, 28, 2, 2201, 'Dolan Mullins', '620926f9eb222.jpg', 13, 0, 1, '262(gr)', '2022-02-24 18:56:51', '2022-02-24 18:56:51'),
(87, 29, 1, 1913, 'Simon Fitzpatrick', '620926f1e4eaf.jpg', 8, 0, 1, '300(gr)', '2022-02-24 21:17:21', '2022-02-24 21:17:21'),
(88, 29, 2, 1913, 'Dolan Mullins', '620926f9eb222.jpg', 13, 0, 1, '262(gr)', '2022-02-24 21:17:22', '2022-02-24 21:17:22'),
(89, 30, 1, 1913, 'Simon Fitzpatrick', '620926f1e4eaf.jpg', 8, 0, 1, '300(gr)', '2022-02-24 21:18:05', '2022-02-24 21:18:05'),
(90, 30, 2, 1913, 'Dolan Mullins', '620926f9eb222.jpg', 13, 0, 1, '262(gr)', '2022-02-24 21:18:05', '2022-02-24 21:18:05'),
(91, 30, 3, 1913, 'Ronan Spencer', '6209044157933.png', 3, 0, 1, '344(gr)', '2022-02-24 21:18:06', '2022-02-24 21:18:06'),
(92, 30, 4, 1913, 'Fredericka Romero', '6209043403a60.jpg', 10, 0, 1, '581(gr)', '2022-02-24 21:18:06', '2022-02-24 21:18:06'),
(93, 30, 5, 1913, 'Dustin Obrien', '6209042c6b8bf.jpg', 13, 0, 1, '964(gr)', '2022-02-24 21:18:06', '2022-02-24 21:18:06'),
(94, 30, 6, 1913, 'Tanisha Garza', '6209041fd2e2f.png', 18, 0, 1, '700(gr)', '2022-02-24 21:18:07', '2022-02-24 21:18:07'),
(95, 30, 7, 1913, 'Wayne Curry', '6209041979ee3.jpg', 11, 0, 1, '330(gr)', '2022-02-24 21:18:08', '2022-02-24 21:18:08'),
(96, 30, 8, 1913, 'Tanek Richardson', '6209040ba7a2d.jpg', 9, 0, 1, '571(gr)', '2022-02-24 21:18:09', '2022-02-24 21:18:09'),
(97, 30, 9, 1913, 'Mariko Frye', '6209040318732.jpg', 3, 0, 1, '474(gr)', '2022-02-24 21:18:09', '2022-02-24 21:18:09'),
(98, 30, 10, 1913, 'Tara Fletcher', '620903fa6829a.jpg', 16, 0, 1, '375(gr)', '2022-02-24 21:18:09', '2022-02-24 21:18:09'),
(99, 30, 11, 1913, 'Lucian Browning', '620903f4b8296.jpg', 18, 0, 1, '140(gr)', '2022-02-24 21:18:10', '2022-02-24 21:18:10'),
(100, 30, 12, 1913, 'Amir Kennedy', '620903ebaf3f1.jpg', 14, 0, 1, '763(gr)', '2022-02-24 21:18:10', '2022-02-24 21:18:10'),
(101, 30, 13, 1913, 'Kirk Stein', '620903e399a62.jpg', 9, 0, 1, '686(gr)', '2022-02-24 21:18:10', '2022-02-24 21:18:10'),
(102, 30, 15, 1913, 'Zorita Reilly', '620903d7b5cda.jpg', 6, 0, 1, '696(gr)', '2022-02-24 21:18:10', '2022-02-24 21:18:10'),
(103, 30, 16, 1913, 'Ryan Perkins', '620903d2a32d8.jpg', 7, 0, 1, '474(gr)', '2022-02-24 21:18:11', '2022-02-24 21:18:11'),
(104, 31, 1, 1913, 'Simon Fitzpatrick', '620926f1e4eaf.jpg', 8, 616, 77, '300(gr)', '2022-02-24 21:24:13', '2022-02-24 21:24:13'),
(105, 31, 2, 1913, 'Dolan Mullins', '620926f9eb222.jpg', 13, 858, 66, '262(gr)', '2022-02-24 21:24:13', '2022-02-24 21:24:13'),
(106, 31, 3, 1913, 'Ronan Spencer', '6209044157933.png', 3, 165, 55, '344(gr)', '2022-02-24 21:24:13', '2022-02-24 21:24:13'),
(107, 31, 4, 1913, 'Fredericka Romero', '6209043403a60.jpg', 10, 440, 44, '581(gr)', '2022-02-24 21:24:14', '2022-02-24 21:24:14'),
(108, 31, 8, 1913, 'Tanek Richardson', '6209040ba7a2d.jpg', 9, 297, 33, '571(gr)', '2022-02-24 21:24:14', '2022-02-24 21:24:14'),
(109, 31, 7, 1913, 'Wayne Curry', '6209041979ee3.jpg', 11, 242, 22, '330(gr)', '2022-02-24 21:24:14', '2022-02-24 21:24:14'),
(110, 31, 6, 1913, 'Tanisha Garza', '6209041fd2e2f.png', 18, 180, 10, '700(gr)', '2022-02-24 21:24:14', '2022-02-24 21:24:14'),
(111, 31, 5, 1913, 'Dustin Obrien', '6209042c6b8bf.jpg', 13, 130, 10, '964(gr)', '2022-02-24 21:24:15', '2022-02-24 21:24:15'),
(112, 31, 9, 1913, 'Mariko Frye', '6209040318732.jpg', 3, 30, 10, '474(gr)', '2022-02-24 21:24:15', '2022-02-24 21:24:15'),
(113, 31, 10, 1913, 'Tara Fletcher', '620903fa6829a.jpg', 16, 160, 10, '375(gr)', '2022-02-24 21:24:15', '2022-02-24 21:24:15'),
(114, 31, 11, 1913, 'Lucian Browning', '620903f4b8296.jpg', 18, 18, 1, '140(gr)', '2022-02-24 21:24:15', '2022-02-24 21:24:15'),
(115, 31, 12, 1913, 'Amir Kennedy', '620903ebaf3f1.jpg', 14, 140, 10, '763(gr)', '2022-02-24 21:24:15', '2022-02-24 21:24:15'),
(116, 31, 13, 1913, 'Kirk Stein', '620903e399a62.jpg', 9, 90, 10, '686(gr)', '2022-02-24 21:24:16', '2022-02-24 21:24:16'),
(117, 31, 15, 1913, 'Zorita Reilly', '620903d7b5cda.jpg', 6, 60, 10, '696(gr)', '2022-02-24 21:24:16', '2022-02-24 21:24:16'),
(118, 31, 16, 1913, 'Ryan Perkins', '620903d2a32d8.jpg', 7, 70, 10, '474(gr)', '2022-02-24 21:24:16', '2022-02-24 21:24:16'),
(119, 32, 1, 1913, 'Simon Fitzpatrick', '620926f1e4eaf.jpg', 8, 8, 1, '300(gr)', '2022-02-24 21:45:03', '2022-02-24 21:45:03'),
(120, 32, 2, 1913, 'Dolan Mullins', '620926f9eb222.jpg', 13, 13, 1, '262(gr)', '2022-02-24 21:45:04', '2022-02-24 21:45:04'),
(121, 32, 3, 1913, 'Ronan Spencer', '6209044157933.png', 3, 3, 1, '344(gr)', '2022-02-24 21:45:04', '2022-02-24 21:45:04'),
(122, 33, 2, 1913, 'Dolan Mullins', '620926f9eb222.jpg', 13, 13, 1, '262(gr)', '2022-02-25 00:40:56', '2022-02-25 00:40:56'),
(123, 34, 2, 1913, 'Dolan Mullins', '620926f9eb222.jpg', 13, 13, 1, '262(gr)', '2022-02-25 00:44:34', '2022-02-25 00:44:34'),
(124, 35, 1, 1913, 'Simon Fitzpatrick', '620926f1e4eaf.jpg', 8, 8, 1, '300(gr)', '2022-02-25 21:50:35', '2022-02-25 21:50:35'),
(125, 36, 1, 1913, 'Simon Fitzpatrick', '620926f1e4eaf.jpg', 8, 80, 10, '300(gr)', '2022-02-27 01:24:54', '2022-02-27 01:24:54'),
(126, 37, 1, 1913, 'Simon Fitzpatrick', '620926f1e4eaf.jpg', 8, 80, 10, '300(gr)', '2022-02-27 01:34:41', '2022-02-27 01:34:41'),
(127, 38, 4, 1913, 'Fredericka Romero', '6209043403a60.jpg', 10, 10, 1, '581(gr)', '2022-02-28 01:40:30', '2022-02-28 01:40:30'),
(128, 39, 1, 1913, 'Simon Fitzpatrick', '620926f1e4eaf.jpg', 8, 8, 1, '300(gr)', '2022-03-01 15:43:24', '2022-03-01 15:43:24'),
(129, 39, 4, 1913, 'Fredericka Romero', '6209043403a60.jpg', 10, 10, 1, '581(gr)', '2022-03-01 15:43:25', '2022-03-01 15:43:25'),
(130, 39, 3, 1913, 'Ronan Spencer', '6209044157933.png', 3, 3, 1, '344(gr)', '2022-03-01 15:43:25', '2022-03-01 15:43:25'),
(131, 39, 2, 1913, 'Dolan Mullins', '620926f9eb222.jpg', 13, 13, 1, '262(gr)', '2022-03-01 15:43:25', '2022-03-01 15:43:25'),
(132, 40, 1, 2200, 'Simon Fitzpatrick', '620926f1e4eaf.jpg', 8, 8, 1, '300(gr)', '2022-03-01 19:24:47', '2022-03-01 19:24:47'),
(133, 40, 3, 2200, 'Ronan Spencer', '6209044157933.png', 3, 3, 1, '344(gr)', '2022-03-01 19:24:47', '2022-03-01 19:24:47'),
(134, 40, 2, 2200, 'Dolan Mullins', '620926f9eb222.jpg', 13, 13, 1, '262(gr)', '2022-03-01 19:24:47', '2022-03-01 19:24:47'),
(135, 40, 5, 2200, 'Dustin Obrien', '6209042c6b8bf.jpg', 13, 13, 1, '964(gr)', '2022-03-01 19:24:48', '2022-03-01 19:24:48');

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_image` varchar(50) NOT NULL,
  `slider_updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `slider_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_image`, `slider_updated_at`, `slider_created_at`) VALUES
(37, '6208c3b2da207.jpg', '2022-02-13 08:39:14', '2022-02-13 08:39:14'),
(38, '6208c3b311ef2.jpg', '2022-02-13 08:39:15', '2022-02-13 08:39:15'),
(39, '6208c3b3276b7.jpg', '2022-02-13 08:39:15', '2022-02-13 08:39:15'),
(40, '6208c3b344f66.jpg', '2022-02-13 08:39:15', '2022-02-13 08:39:15'),
(41, '6208c3b36bc87.jpg', '2022-02-13 08:39:15', '2022-02-13 08:39:15');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_login` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_status` int(11) NOT NULL DEFAULT 1,
  `user_destroy` int(11) NOT NULL DEFAULT 0,
  `user_level` int(11) NOT NULL DEFAULT 1,
  `user_type` varchar(50) NOT NULL DEFAULT 'user',
  `user_ip` varchar(50) NOT NULL,
  `user_phone` varchar(13) NOT NULL,
  `user_card` varchar(16) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `user_updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_login`, `user_password`, `user_status`, `user_destroy`, `user_level`, `user_type`, `user_ip`, `user_phone`, `user_card`, `user_address`, `user_updated_at`, `user_created_at`) VALUES
(1913, 'admin@gmail.com', 'admin', '111', 1, 0, 101, 'admin', '127.0.0.1', '994519886699', '3212456798744565', 'Aze, Baku, elm.M', '2022-12-29 16:45:37', '2022-01-23 04:59:30'),
(2200, 'cookie@gmail.com', 'cookie', '111', 1, 0, 2, 'moderator', '127.0.0.1', '', '', 'Aze, Baku, 28.M', '2022-11-24 17:02:19', '2022-01-23 04:59:30'),
(2201, 'apsi@gmail.com', 'apsi', '111', 1, 0, 1, 'user', '159.951.357.159', '', '', 'Aze, Baku, 20 y.M', '2022-02-24 14:54:16', '2022-01-23 04:59:30'),
(2203, 'caiser@gmail.com', 'caiser', '111', 1, 0, 1, 'user', '753.453.984.785', '', '', 'Aze, Baku, azadliq.M', '2022-02-22 18:43:56', '2022-01-23 04:59:30');

-- --------------------------------------------------------

--
-- Структура таблицы `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `video_type` varchar(50) NOT NULL DEFAULT 'gallery',
  `video_video` varchar(50) NOT NULL,
  `video_image` varchar(50) NOT NULL,
  `video_status` int(11) NOT NULL DEFAULT 1,
  `video_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `video`
--

INSERT INTO `video` (`video_id`, `video_type`, `video_video`, `video_image`, `video_status`, `video_created_at`) VALUES
(48, 'main', '621a5dff0bf20.mp4', '621a5dff0bb38.jpg', 1, '2022-02-26 17:06:07'),
(51, 'gallery', '621a77d9476be.mp4', '621a77d93e24b.png', 1, '2022-02-26 18:56:25'),
(52, 'gallery', '621a77f85b62f.mp4', '621a77f85b247.jpg', 1, '2022-02-26 18:56:56');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Индексы таблицы `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`buy_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `orders_id` (`orders_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Индексы таблицы `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`),
  ADD KEY `guest_ip` (`guest_ip`),
  ADD KEY `guest_status` (`guest_status`);

--
-- Индексы таблицы `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `image_image` (`image_image`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `menu_name` (`menu_name`),
  ADD KEY `menu_title` (`menu_title`);

--
-- Индексы таблицы `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `orders_image` (`orders_image`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `product_slug` (`product_slug`),
  ADD KEY `product_name` (`product_name`),
  ADD KEY `product_image` (`product_image`),
  ADD KEY `product_status` (`product_status`);

--
-- Индексы таблицы `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Индексы таблицы `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`setting_id`),
  ADD KEY `setting_key` (`setting_key`);

--
-- Индексы таблицы `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shop_id`),
  ADD KEY `buy_id` (`buy_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`),
  ADD KEY `slider_image` (`slider_image`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_status` (`user_status`);

--
-- Индексы таблицы `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`),
  ADD KEY `video_video` (`video_video`),
  ADD KEY `video_video_2` (`video_video`),
  ADD KEY `video_image` (`video_image`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `buy`
--
ALTER TABLE `buy`
  MODIFY `buy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1965;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=406;

--
-- AUTO_INCREMENT для таблицы `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=829;

--
-- AUTO_INCREMENT для таблицы `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT для таблицы `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=553;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT для таблицы `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `setting`
--
ALTER TABLE `setting`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `shop`
--
ALTER TABLE `shop`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2299;

--
-- AUTO_INCREMENT для таблицы `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

DELIMITER $$
--
-- События
--
CREATE DEFINER=`root`@`localhost` EVENT `GuestDelete` ON SCHEDULE EVERY 1 DAY STARTS '2022-02-20 15:16:19' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM guest WHERE NOW() - INTERVAL 1 DAY > guest_created_at$$

CREATE DEFINER=`root`@`localhost` EVENT `NoticeCreate` ON SCHEDULE EVERY 1 DAY STARTS '2022-02-23 17:20:00' ON COMPLETION NOT PRESERVE ENABLE DO INSERT INTO `notice` (`notice_message`, `notice_body`, `notice_type`)
VALUES ('from admin', 'добрый день', 'all')$$

CREATE DEFINER=`root`@`localhost` EVENT `NoticeDelete` ON SCHEDULE EVERY 1 HOUR STARTS '2022-02-27 00:00:25' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM `notice` WHERE `notice_status` = 0$$

CREATE DEFINER=`root`@`localhost` EVENT `OrdersCartDelete` ON SCHEDULE EVERY 2 HOUR STARTS '2022-02-21 16:25:00' ON COMPLETION NOT PRESERVE ENABLE DO DELETE o, c FROM orders o, cart c WHERE o.orders_status = 0 AND c.orders_status = 0 AND NOW() - INTERVAL 1 HOUR > o.orders_created_at$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
