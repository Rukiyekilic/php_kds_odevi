-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 May 2018, 14:06:30
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kds2001`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ders`
--

CREATE TABLE `ders` (
  `ders_id` int(11) NOT NULL,
  `ders_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ders_fiyat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ders`
--

INSERT INTO `ders` (`ders_id`, `ders_ad`, `ders_fiyat`) VALUES
(1, 'Zumba', 50),
(2, 'Salsa', 50),
(3, 'Yoga', 100),
(4, 'Fitness', 150),
(5, 'Pilates', 120),
(6, 'Reformer', 200),
(7, 'Yüzme', 80);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ders_programi`
--

CREATE TABLE `ders_programi` (
  `ders_programi_id` int(11) NOT NULL,
  `ders_id` int(11) NOT NULL,
  `semt_id` int(11) NOT NULL,
  `hoca_id` int(11) NOT NULL,
  `ders_saat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ders_programi`
--

INSERT INTO `ders_programi` (`ders_programi_id`, `ders_id`, `semt_id`, `hoca_id`, `ders_saat`) VALUES
(1, 1, 1, 1, 11),
(2, 2, 2, 2, 12),
(3, 3, 3, 3, 13),
(4, 4, 4, 4, 14),
(5, 5, 5, 5, 15),
(6, 6, 6, 6, 16),
(7, 7, 7, 7, 17),
(8, 1, 1, 1, 18),
(9, 2, 2, 2, 19),
(10, 3, 3, 3, 20),
(11, 3, 3, 8, 13);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hocalar`
--

CREATE TABLE `hocalar` (
  `hoca_id` int(11) NOT NULL,
  `hoca_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hoca_soyad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hoca_tecrube` int(11) NOT NULL,
  `hoca_yas` int(11) NOT NULL,
  `hoca_cinsiyet` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hocalar`
--

INSERT INTO `hocalar` (`hoca_id`, `hoca_ad`, `hoca_soyad`, `hoca_tecrube`, `hoca_yas`, `hoca_cinsiyet`) VALUES
(1, 'Okan', 'Çetin', 1, 24, 'Erkek'),
(2, 'Mecit', 'Seyisoğlu', 2, 25, 'Erkek'),
(3, 'Fulya', 'Köse', 3, 26, 'Kadın'),
(4, 'Ayşegül', 'Yalçın', 4, 27, 'Kadın'),
(5, 'Gülistan', 'Aba', 5, 28, 'Kadın'),
(6, 'Yılmaz', 'Aydın', 6, 30, 'Erkek'),
(7, 'İpek', 'Gürsoy', 7, 50, 'Kadın'),
(8, 'Rukiye', 'Kılıç', 7, 22, 'Kadın\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `semt`
--

CREATE TABLE `semt` (
  `semt_id` int(11) NOT NULL,
  `semt_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `semt`
--

INSERT INTO `semt` (`semt_id`, `semt_ad`) VALUES
(1, 'Buca'),
(2, 'Bornova'),
(3, 'Balçova'),
(4, 'Konak'),
(5, 'Bayraklı'),
(6, 'Karşıyaka'),
(7, 'Göztepe'),
(8, 'Çeşme'),
(9, 'Foça'),
(10, 'Güzelbahçe');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ders`
--
ALTER TABLE `ders`
  ADD PRIMARY KEY (`ders_id`);

--
-- Tablo için indeksler `ders_programi`
--
ALTER TABLE `ders_programi`
  ADD PRIMARY KEY (`ders_programi_id`),
  ADD KEY `ders_id` (`ders_id`),
  ADD KEY `semt_id` (`semt_id`),
  ADD KEY `hoca_id` (`hoca_id`);

--
-- Tablo için indeksler `hocalar`
--
ALTER TABLE `hocalar`
  ADD PRIMARY KEY (`hoca_id`);

--
-- Tablo için indeksler `semt`
--
ALTER TABLE `semt`
  ADD PRIMARY KEY (`semt_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ders_programi`
--
ALTER TABLE `ders_programi`
  MODIFY `ders_programi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `ders_programi`
--
ALTER TABLE `ders_programi`
  ADD CONSTRAINT `ders_programi_ibfk_1` FOREIGN KEY (`semt_id`) REFERENCES `semt` (`semt_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ders_programi_ibfk_2` FOREIGN KEY (`hoca_id`) REFERENCES `hocalar` (`hoca_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ders_programi_ibfk_3` FOREIGN KEY (`ders_id`) REFERENCES `ders` (`ders_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
