-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2022 at 07:59 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_mangement_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_years`
--

CREATE TABLE `academic_years` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academic_years`
--

INSERT INTO `academic_years` (`id`, `year`, `created_at`, `updated_at`) VALUES
(1, '2022-2022', '2022-09-03 17:44:59', '2022-09-03 17:44:59');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `class_name`, `created_at`, `updated_at`) VALUES
(1, 'V', '2022-09-03 17:45:26', '2022-09-03 17:45:26'),
(2, 'VI', '2022-09-03 17:51:17', '2022-09-03 17:51:17');

-- --------------------------------------------------------

--
-- Table structure for table `course_names`
--

CREATE TABLE `course_names` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_names`
--

CREATE TABLE `exam_names` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_names`
--

INSERT INTO `exam_names` (`id`, `exam_name`, `created_at`, `updated_at`) VALUES
(1, 'half-yearly-exam-2022', '2022-09-03 17:46:16', '2022-09-03 17:46:16'),
(2, 'final-yearly-exam-2022', '2022-09-03 17:46:40', '2022-09-03 17:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `exam_setups`
--

CREATE TABLE `exam_setups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `AyId` bigint(20) UNSIGNED DEFAULT NULL,
  `ExampNameId` bigint(20) UNSIGNED DEFAULT NULL,
  `ClassId` bigint(20) UNSIGNED DEFAULT NULL,
  `SectionId` bigint(20) UNSIGNED DEFAULT NULL,
  `SubjectId` bigint(20) UNSIGNED DEFAULT NULL,
  `GroupId` bigint(20) UNSIGNED DEFAULT NULL,
  `subjective` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objective` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Practical` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WeightedMarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CreatedDate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_setups`
--

INSERT INTO `exam_setups` (`id`, `AyId`, `ExampNameId`, `ClassId`, `SectionId`, `SubjectId`, `GroupId`, `subjective`, `objective`, `Practical`, `WeightedMarks`, `CreatedDate`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, 1, '50', '50', '0', NULL, NULL, '0', '2022-09-03 11:53:12', '2022-09-03 11:53:12'),
(2, 1, 2, 1, 1, 2, 2, '70', '30', '0', NULL, NULL, '0', '2022-09-03 11:53:32', '2022-09-03 11:53:32'),
(3, 1, 1, 2, 2, 3, 2, '70', '30', '0', NULL, NULL, '0', '2022-09-03 11:53:52', '2022-09-03 11:53:52'),
(4, 1, 2, 2, 2, 4, 3, '70', '30', '0', NULL, NULL, '0', '2022-09-03 11:54:13', '2022-09-03 11:54:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'science ', '2022-09-03 17:47:18', '2022-09-03 17:47:18'),
(2, 'Hum', '2022-09-03 17:48:41', '2022-09-03 17:48:41'),
(3, 'BSt', '2022-09-03 17:49:05', '2022-09-03 17:49:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_08_26_143653_create_academic_years_table', 1),
(5, '2022_08_26_143654_create_course_names_table', 1),
(6, '2022_08_26_143750_create_classes_table', 1),
(7, '2022_08_26_143821_create_groups_table', 1),
(8, '2022_08_26_143822_create_sections_table', 1),
(9, '2022_08_26_175244_create_students_table', 1),
(10, '2022_08_26_175344_create_subjects_table', 1),
(11, '2022_08_26_180137_create_exam_names_table', 1),
(12, '2022_08_26_180313_create_exam_setups_table', 1),
(13, '2022_08_27_131046_create_student_marks_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section_name`, `created_at`, `updated_at`) VALUES
(1, 'A-section', '2022-09-03 17:49:21', '2022-09-03 17:49:21'),
(2, 'B-section', '2022-09-03 17:49:39', '2022-09-03 17:49:39');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `AyId` bigint(20) UNSIGNED DEFAULT NULL,
  `ClassId` bigint(20) UNSIGNED DEFAULT NULL,
  `SectionId` bigint(20) UNSIGNED DEFAULT NULL,
  `StudentName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StudentCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RollNo` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SmsNumber` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `AyId`, `ClassId`, `SectionId`, `StudentName`, `StudentCode`, `RollNo`, `SmsNumber`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Towhidul islam', '3030', '11', '01719800437', '2022-09-03 11:50:43', '2022-09-03 11:50:43'),
(2, 1, 1, 2, 'Abir', '4040', '12', '01719800437', '2022-09-03 11:51:09', '2022-09-03 11:51:09');

-- --------------------------------------------------------

--
-- Table structure for table `student_marks`
--

CREATE TABLE `student_marks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `StudentId` int(11) DEFAULT NULL,
  `AyId` int(11) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `ExampNameId` int(11) DEFAULT NULL,
  `Subjective` double DEFAULT NULL,
  `Objective` double DEFAULT NULL,
  `Obtained` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_marks`
--

INSERT INTO `student_marks` (`id`, `StudentId`, `AyId`, `ClassId`, `SubjectId`, `ExampNameId`, `Subjective`, `Objective`, `Obtained`, `created_at`, `updated_at`) VALUES
(3, 1, 1, 1, 1, 1, 40, 30, NULL, '2022-09-03 11:54:58', '2022-09-03 11:54:58'),
(4, 2, 1, 1, 1, 1, 30, 30, NULL, '2022-09-03 11:54:58', '2022-09-03 11:54:58');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `AyId` bigint(20) UNSIGNED DEFAULT NULL,
  `GroupId` bigint(20) UNSIGNED DEFAULT NULL,
  `ClassId` bigint(20) UNSIGNED DEFAULT NULL,
  `SectionId` bigint(20) UNSIGNED DEFAULT NULL,
  `SubjectName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SubjectCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `AyId`, `GroupId`, `ClassId`, `SectionId`, `SubjectName`, `SubjectCode`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 'bangla 1', '505', '2022-09-03 11:51:45', '2022-09-03 11:51:45'),
(2, 1, 1, 2, NULL, 'bangla 2', '506', '2022-09-03 11:52:03', '2022-09-03 11:52:03'),
(3, 1, 2, 2, 1, 'English 1', '507', '2022-09-03 11:52:18', '2022-09-03 11:52:18'),
(4, 1, 3, 2, 2, 'bangla 1', '502', '2022-09-03 11:52:39', '2022-09-03 11:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `name`, `email`, `phone`, `address`, `gender`, `image`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Ariful islam tuhin', 'admin@gmail.com', '01774266791', NULL, NULL, NULL, 0, NULL, '$2y$10$EcuzY32Rf2NMDjtH4SmVB.j1ytFpvmNxja7yTBN1/lQqsGRMlTM1.', NULL, '2022-09-03 11:44:47', '2022-09-03 11:44:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_years`
--
ALTER TABLE `academic_years`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_names`
--
ALTER TABLE `course_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_names`
--
ALTER TABLE `exam_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_setups`
--
ALTER TABLE `exam_setups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_setups_ayid_foreign` (`AyId`),
  ADD KEY `exam_setups_exampnameid_foreign` (`ExampNameId`),
  ADD KEY `exam_setups_classid_foreign` (`ClassId`),
  ADD KEY `exam_setups_sectionid_foreign` (`SectionId`),
  ADD KEY `exam_setups_subjectid_foreign` (`SubjectId`),
  ADD KEY `exam_setups_groupid_foreign` (`GroupId`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_studentcode_unique` (`StudentCode`),
  ADD KEY `students_ayid_foreign` (`AyId`),
  ADD KEY `students_classid_foreign` (`ClassId`),
  ADD KEY `students_sectionid_foreign` (`SectionId`);

--
-- Indexes for table `student_marks`
--
ALTER TABLE `student_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjects_ayid_foreign` (`AyId`),
  ADD KEY `subjects_groupid_foreign` (`GroupId`),
  ADD KEY `subjects_classid_foreign` (`ClassId`),
  ADD KEY `subjects_sectionid_foreign` (`SectionId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_years`
--
ALTER TABLE `academic_years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_names`
--
ALTER TABLE `course_names`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_names`
--
ALTER TABLE `exam_names`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exam_setups`
--
ALTER TABLE `exam_setups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_marks`
--
ALTER TABLE `student_marks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exam_setups`
--
ALTER TABLE `exam_setups`
  ADD CONSTRAINT `exam_setups_ayid_foreign` FOREIGN KEY (`AyId`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_setups_classid_foreign` FOREIGN KEY (`ClassId`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_setups_exampnameid_foreign` FOREIGN KEY (`ExampNameId`) REFERENCES `exam_names` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_setups_groupid_foreign` FOREIGN KEY (`GroupId`) REFERENCES `groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_setups_sectionid_foreign` FOREIGN KEY (`SectionId`) REFERENCES `sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_setups_subjectid_foreign` FOREIGN KEY (`SubjectId`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ayid_foreign` FOREIGN KEY (`AyId`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `students_classid_foreign` FOREIGN KEY (`ClassId`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `students_sectionid_foreign` FOREIGN KEY (`SectionId`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ayid_foreign` FOREIGN KEY (`AyId`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subjects_classid_foreign` FOREIGN KEY (`ClassId`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subjects_groupid_foreign` FOREIGN KEY (`GroupId`) REFERENCES `groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subjects_sectionid_foreign` FOREIGN KEY (`SectionId`) REFERENCES `sections` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
