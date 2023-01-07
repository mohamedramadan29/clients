-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2023 at 02:24 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clients`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounting_report`
--

CREATE TABLE `accounting_report` (
  `ar_id` int(11) NOT NULL,
  `ar_client_name` varchar(255) NOT NULL,
  `ar_legal` varchar(255) NOT NULL,
  `ar_account_num` varchar(255) NOT NULL,
  `ar_manager_name` varchar(255) NOT NULL,
  `ar_manager_phone` varchar(255) NOT NULL,
  `ar_client_email` varchar(255) NOT NULL,
  `ar_serv_reason` longtext NOT NULL,
  `ar_doc_scop` varchar(255) NOT NULL,
  `ar_old_doc` varchar(255) NOT NULL,
  `ar_new_doc` varchar(255) NOT NULL,
  `ar_prepare` varchar(255) NOT NULL,
  `ar_prepare_date` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `ar_files` longtext NOT NULL,
  `date_issuance` varchar(255) NOT NULL DEFAULT '0',
  `date_start_services` varchar(255) NOT NULL DEFAULT '0',
  `date_end_services` varchar(255) NOT NULL DEFAULT '0',
  `send_signed_contract` varchar(255) NOT NULL DEFAULT '0',
  `send_payment_fee` varchar(255) NOT NULL DEFAULT '0',
  `status` varchar(255) NOT NULL DEFAULT '0',
  `agree_services` varchar(255) NOT NULL,
  `send_link_note` varchar(255) NOT NULL,
  `send_sign_contract_payment_receipt` varchar(255) NOT NULL,
  `verification_contract_req` varchar(255) NOT NULL,
  `end_revision_work` varchar(255) NOT NULL,
  `send_end_fee` varchar(255) NOT NULL,
  `deposit_plat_form` varchar(255) NOT NULL,
  `notes` longtext NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounting_report`
--

INSERT INTO `accounting_report` (`ar_id`, `ar_client_name`, `ar_legal`, `ar_account_num`, `ar_manager_name`, `ar_manager_phone`, `ar_client_email`, `ar_serv_reason`, `ar_doc_scop`, `ar_old_doc`, `ar_new_doc`, `ar_prepare`, `ar_prepare_date`, `ar_files`, `date_issuance`, `date_start_services`, `date_end_services`, `send_signed_contract`, `send_payment_fee`, `status`, `agree_services`, `send_link_note`, `send_sign_contract_payment_receipt`, `verification_contract_req`, `end_revision_work`, `send_end_fee`, `deposit_plat_form`, `notes`, `user_id`) VALUES
(18, 'محمد رمضان السيد', 'شركة ذات مسئولية محدودة', '1111111111', 'عمل حر', '0101164273111111', 'mr319242@gmail.com', 'dggdg', 'sgdf', '2022-11-21', '2022-11-24', 'محمد رمضان', '2022-11-16', 'ملاحظات9.docx ', '', '', '', '0', '0', '0', '', '', '', '', '', '', '', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`, `admin_email`) VALUES
(1, 'admin', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `contract_report`
--

CREATE TABLE `contract_report` (
  `con_id` int(11) NOT NULL,
  `con_client_name` varchar(255) NOT NULL,
  `con_legal` varchar(255) NOT NULL,
  `con_account_num` varchar(255) NOT NULL,
  `con_uniq_num` varchar(255) NOT NULL,
  `con_account_type` varchar(255) NOT NULL,
  `con_year_start` varchar(255) NOT NULL,
  `con_year_end` varchar(255) NOT NULL,
  `con_reason` longtext NOT NULL,
  `con_client_prev` varchar(255) NOT NULL,
  `con_client_prev_img` varchar(255) NOT NULL,
  `con_client_prev_year` varchar(255) NOT NULL,
  `con_office_name_prev` varchar(255) NOT NULL,
  `con_verify_website` varchar(255) NOT NULL,
  `com_revision_prog` varchar(255) NOT NULL,
  `con_client_account_exer` varchar(255) NOT NULL,
  `con_years_required` varchar(255) NOT NULL,
  `con_comparison_year` varchar(255) NOT NULL,
  `con_income` varchar(255) NOT NULL,
  `con_manager_name` varchar(255) NOT NULL,
  `con_manager_phone` varchar(255) NOT NULL,
  `con_manager_email` varchar(255) NOT NULL,
  `con_accounter_name` varchar(255) NOT NULL,
  `con_accounter_phone` varchar(255) NOT NULL,
  `con_accounter_email` varchar(255) NOT NULL,
  `con_card_num` varchar(255) NOT NULL,
  `con_upload_birth` varchar(255) NOT NULL,
  `con_upload_mobile` varchar(255) NOT NULL,
  `con_upload_email` varchar(255) NOT NULL,
  `con_fee_money` varchar(255) NOT NULL,
  `con_fee_client` varchar(255) NOT NULL,
  `con_fee_import` varchar(255) NOT NULL,
  `con_fee_salary` varchar(255) NOT NULL,
  `con_fee_export` varchar(255) NOT NULL,
  `con_fee_sales` varchar(255) NOT NULL,
  `con_fee_expect` varchar(255) NOT NULL,
  `con_export_time` varchar(255) NOT NULL,
  `con_copy_eng` varchar(255) NOT NULL,
  `con_copy_extra` varchar(255) NOT NULL,
  `con_copy_stamp` varchar(255) NOT NULL,
  `con_attach_stamp` varchar(255) NOT NULL,
  `con_upload_report` varchar(255) NOT NULL,
  `con_prepare` varchar(255) NOT NULL,
  `con_prepare_time` varchar(255) NOT NULL,
  `con_files` longtext NOT NULL,
  `date_issuance` varchar(255) NOT NULL DEFAULT '0',
  `date_start_services` varchar(255) NOT NULL DEFAULT '0',
  `date_end_services` varchar(255) NOT NULL DEFAULT '0',
  `send_signed_contract` varchar(255) NOT NULL DEFAULT '0',
  `send_payment_fee` varchar(255) NOT NULL DEFAULT '0',
  `status` varchar(255) NOT NULL DEFAULT '0',
  `agree_services` varchar(255) NOT NULL DEFAULT '0',
  `send_link_note` varchar(255) NOT NULL DEFAULT '0',
  `send_sign_contract_payment_receipt` varchar(255) NOT NULL DEFAULT '0',
  `verification_contract_req` varchar(255) NOT NULL DEFAULT '0',
  `end_revision_work` varchar(255) NOT NULL DEFAULT '0',
  `send_end_fee` varchar(255) NOT NULL DEFAULT '0',
  `deposit_plat_form` varchar(255) NOT NULL DEFAULT '0',
  `notes` longtext NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contract_report`
--

INSERT INTO `contract_report` (`con_id`, `con_client_name`, `con_legal`, `con_account_num`, `con_uniq_num`, `con_account_type`, `con_year_start`, `con_year_end`, `con_reason`, `con_client_prev`, `con_client_prev_img`, `con_client_prev_year`, `con_office_name_prev`, `con_verify_website`, `com_revision_prog`, `con_client_account_exer`, `con_years_required`, `con_comparison_year`, `con_income`, `con_manager_name`, `con_manager_phone`, `con_manager_email`, `con_accounter_name`, `con_accounter_phone`, `con_accounter_email`, `con_card_num`, `con_upload_birth`, `con_upload_mobile`, `con_upload_email`, `con_fee_money`, `con_fee_client`, `con_fee_import`, `con_fee_salary`, `con_fee_export`, `con_fee_sales`, `con_fee_expect`, `con_export_time`, `con_copy_eng`, `con_copy_extra`, `con_copy_stamp`, `con_attach_stamp`, `con_upload_report`, `con_prepare`, `con_prepare_time`, `con_files`, `date_issuance`, `date_start_services`, `date_end_services`, `send_signed_contract`, `send_payment_fee`, `status`, `agree_services`, `send_link_note`, `send_sign_contract_payment_receipt`, `verification_contract_req`, `end_revision_work`, `send_end_fee`, `deposit_plat_form`, `notes`, `user_id`) VALUES
(28, 'hassan mohamed dgtfhfth', 'شركة ذات مسئولية محدودة', '1111111111', '1111', 'حسابات نظامية', '2022-11-20', '2022-12-10', 'details', 'لا', 'تم', '', '', 'نعم', 'نعم', 'لا ينطبق', '2022', '1010', 'تتبع نظام ضريبة الدخل', 'mohamed', '01011642731', 'mr319242@gmail.com', 'ali', '01011642731', 'mr319242@gmail.com', '11111111111', '111', '01011642731', 'mr319242@gmail.com', '10', '10', '20', '10', '10', '10', '100', 'لا ينطبق', 'لا ينطبق', 'نعم', 'نعم', 'لا ينطبق', 'نعم', 'mhamed rsttttt', '2022-11-29', '1665778950_event2.jpg ', '2022-11-21', '2022-12-02', '', '1', '1', '0', '2022-11-21', '', '', '', '', '', '2022-11-10', 'notes ..', 5);

-- --------------------------------------------------------

--
-- Table structure for table `priv`
--

CREATE TABLE `priv` (
  `priv_id` int(11) NOT NULL,
  `priv_name` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `helper` varchar(255) NOT NULL,
  `manager_review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `priv`
--

INSERT INTO `priv` (`priv_id`, `priv_name`, `owner`, `helper`, `manager_review`) VALUES
(1, 'عرض لوحة الصلاحيات', '1', '0', '1'),
(2, 'تحرير لوحة الصلاحيات', '1', '1', '0'),
(3, 'استعراض قائمة المستخدمين ', '0', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `privilage`
--

CREATE TABLE `privilage` (
  `priv_id` int(11) NOT NULL,
  `priv_users` varchar(255) NOT NULL,
  `priv_show` varchar(100) NOT NULL DEFAULT '0',
  `priv_edit` varchar(100) NOT NULL DEFAULT '0',
  `priv_show_users` varchar(100) NOT NULL DEFAULT '0',
  `priv_edit_users` varchar(100) NOT NULL DEFAULT '0',
  `priv_arrive_branch` varchar(100) NOT NULL DEFAULT '0',
  `priv_create_report` varchar(100) NOT NULL DEFAULT '0',
  `priv_show_attach` varchar(100) NOT NULL DEFAULT '0',
  `priv_agree_refuse_serv` varchar(100) NOT NULL DEFAULT '0',
  `priv_edit_report` varchar(100) NOT NULL DEFAULT '0',
  `priv_confirm_report` varchar(100) NOT NULL DEFAULT '0',
  `priv_confirm_receive_money` varchar(100) NOT NULL DEFAULT '0',
  `priv_finish_ref` varchar(100) NOT NULL DEFAULT '0',
  `priv_serv_start` varchar(100) NOT NULL DEFAULT '0',
  `priv_upload_mon` varchar(100) NOT NULL DEFAULT '0',
  `priv_show_all_report` varchar(100) NOT NULL DEFAULT '0',
  `priv_show_edit_prev` varchar(100) NOT NULL DEFAULT '0',
  `priv_edit_clients` varchar(100) NOT NULL DEFAULT '0',
  `priv_edit_accounts` varchar(100) NOT NULL DEFAULT '0',
  `priv_change_refuson_team` varchar(100) NOT NULL DEFAULT '0',
  `priv_paper_work` varchar(100) NOT NULL DEFAULT '0',
  `priv_paper_revision` varchar(100) NOT NULL DEFAULT '0',
  `priv_paper_start_work` varchar(100) NOT NULL DEFAULT '0',
  `priv_paper_end_archieve` varchar(100) NOT NULL DEFAULT '0',
  `priv_paper_edit_delete_add` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `privilage`
--

INSERT INTO `privilage` (`priv_id`, `priv_users`, `priv_show`, `priv_edit`, `priv_show_users`, `priv_edit_users`, `priv_arrive_branch`, `priv_create_report`, `priv_show_attach`, `priv_agree_refuse_serv`, `priv_edit_report`, `priv_confirm_report`, `priv_confirm_receive_money`, `priv_finish_ref`, `priv_serv_start`, `priv_upload_mon`, `priv_show_all_report`, `priv_show_edit_prev`, `priv_edit_clients`, `priv_edit_accounts`, `priv_change_refuson_team`, `priv_paper_work`, `priv_paper_revision`, `priv_paper_start_work`, `priv_paper_end_archieve`, `priv_paper_edit_delete_add`) VALUES
(1, 'المالك', ' ', 'نعم', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
(3, 'مساعد إداري', 'نعم', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(4, 'مدير مراجعة', 'نعم', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(7, 'ضيف', 'نعم', 'نعم', 'نعم', 'نعم', 'نعم', ' ', ' ', 'نعم', 'نعم', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 'نعم', ' ', ' ', 'نعم', 'نعم', 'نعم', 'نعم', ' '),
(8, 'مشرف إداري', 'نعم', 'نعم', ' ', ' ', 'نعم', ' ', ' ', ' ', 'نعم', ' ', ' ', 'نعم', ' ', ' ', ' ', ' ', 'نعم', 'نعم', ' ', ' ', ' ', ' ', 'نعم', ' '),
(9, 'عميل مباشر', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `tax_report`
--

CREATE TABLE `tax_report` (
  `tax_id` int(11) NOT NULL,
  `tax_client_name` varchar(255) NOT NULL,
  `tax_legal` varchar(255) NOT NULL,
  `tax_account_num` varchar(255) NOT NULL,
  `tax_account_type` varchar(255) NOT NULL,
  `tax_year_start` varchar(255) NOT NULL,
  `tax_year_end` varchar(255) NOT NULL,
  `tax_serv_type` varchar(255) NOT NULL,
  `tax_add_serv` varchar(255) NOT NULL,
  `tax_serv_reason` longtext NOT NULL,
  `tax_years_required` varchar(255) NOT NULL,
  `tax_income` varchar(255) NOT NULL,
  `tax_uniq_num` varchar(255) NOT NULL,
  `tax_client_prev` varchar(100) NOT NULL,
  `tax_client_prev_img` varchar(255) NOT NULL,
  `tax_client_prev_year` varchar(255) NOT NULL,
  `tax_verify_website` varchar(255) NOT NULL,
  `tax_client_account_exer` varchar(255) NOT NULL,
  `tax_manager_name` varchar(255) NOT NULL,
  `tax_manager_phone` varchar(255) NOT NULL,
  `tax_manager_email` varchar(255) NOT NULL,
  `tax_accounter_name` varchar(255) NOT NULL,
  `tax_accounter_phone` varchar(255) NOT NULL,
  `tax_accounter_email` varchar(255) NOT NULL,
  `tax_prepare` varchar(255) NOT NULL,
  `tax_prepare_date` varchar(255) NOT NULL,
  `tax_files` longtext NOT NULL,
  `date_issuance` varchar(255) NOT NULL DEFAULT '0',
  `date_start_services` varchar(255) NOT NULL DEFAULT '0',
  `date_end_services` varchar(255) NOT NULL DEFAULT '0',
  `send_signed_contract` varchar(255) NOT NULL DEFAULT '0',
  `send_payment_fee` varchar(255) NOT NULL DEFAULT '0',
  `status` varchar(255) NOT NULL DEFAULT '0',
  `agree_services` varchar(200) NOT NULL DEFAULT '0' COMMENT 'الموافقة على نموذج الخدمة',
  `send_link_note` varchar(200) DEFAULT '0' COMMENT 'إرسال عقد الارتباط',
  `send_sign_contract_payment_receipt` varchar(200) NOT NULL DEFAULT '0' COMMENT 'إرسال العقد الموقع وايصالات السداد',
  `verification_contract_req` varchar(200) NOT NULL DEFAULT '0' COMMENT 'التحقق من توقيع العقد وايصالات السداد',
  `end_revision_work` varchar(200) NOT NULL DEFAULT '0',
  `send_end_fee` varchar(200) NOT NULL DEFAULT '0',
  `deposit_plat_form` varchar(200) NOT NULL DEFAULT '0',
  `notes` longtext NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tax_report`
--

INSERT INTO `tax_report` (`tax_id`, `tax_client_name`, `tax_legal`, `tax_account_num`, `tax_account_type`, `tax_year_start`, `tax_year_end`, `tax_serv_type`, `tax_add_serv`, `tax_serv_reason`, `tax_years_required`, `tax_income`, `tax_uniq_num`, `tax_client_prev`, `tax_client_prev_img`, `tax_client_prev_year`, `tax_verify_website`, `tax_client_account_exer`, `tax_manager_name`, `tax_manager_phone`, `tax_manager_email`, `tax_accounter_name`, `tax_accounter_phone`, `tax_accounter_email`, `tax_prepare`, `tax_prepare_date`, `tax_files`, `date_issuance`, `date_start_services`, `date_end_services`, `send_signed_contract`, `send_payment_fee`, `status`, `agree_services`, `send_link_note`, `send_sign_contract_payment_receipt`, `verification_contract_req`, `end_revision_work`, `send_end_fee`, `deposit_plat_form`, `notes`, `user_id`) VALUES
(7, 'mohaed', 'شركة مساهمة', '1111111111', 'حسابات نظامية', '2022-11-29', '2022-12-30', 'تقديم فتح ملف المنشأة لدى هيئة الزكاة والضريبة', 'تقديم فتح ملف المنشأة لدى هيئة الزكاة والضريبة', 'rtrtrt', '2222', 'مختلطة زكوي وضريبي', '10011', 'لا', 'تم', '', 'نعم', 'لا ينطبق', 'hhh', ' 1112222111', 'mr319242@gmail.com', 'hh', '01016427311111111111', 'mr319242@gmail.com', 'g99', '2022-12-06', '2d8137b6-4f5e-43e9-9377-f0d9704c83d3.jpg ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_code` varchar(255) NOT NULL,
  `user_login_date` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `user_type` varchar(255) NOT NULL,
  `user_jop_title` varchar(255) NOT NULL,
  `user_personal_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_stat` varchar(200) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_code`, `user_login_date`, `user_type`, `user_jop_title`, `user_personal_name`, `user_name`, `user_password`, `user_phone`, `user_email`, `user_city`, `user_stat`) VALUES
(5, '3', '2022-11-06 21:22:20', 'ضيف', 'ضيف', 'محمد رمضان', 'admin', 'admin', '01011642731', 'mr319242@gmail.com', 'damanhour', '1'),
(7, '5', '2022-11-06 21:24:31', 'موظف', '', 'محمد رمضان السيد', 'admintr', 'admin', '01011642731', 'mr319242@gmail.com', 'damanhour', '1'),
(8, '6', '2022-11-06 22:37:10', 'موظف', '', 'استاذ ابراهيم', 'ibrahim', '123123123111', '01011642731', 'mr319242@gmail.com', 'damanhour', '1'),
(9, '4', '2022-11-19 00:35:11', 'موظف', 'مساعد إداري', 'حسن محمد حسن', 'hassan', 'admin', '01011642731', 'mr319242@gmail.com', 'damanhour', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounting_report`
--
ALTER TABLE `accounting_report`
  ADD PRIMARY KEY (`ar_id`),
  ADD KEY `constrain1` (`user_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contract_report`
--
ALTER TABLE `contract_report`
  ADD PRIMARY KEY (`con_id`),
  ADD KEY `contract` (`user_id`);

--
-- Indexes for table `priv`
--
ALTER TABLE `priv`
  ADD PRIMARY KEY (`priv_id`);

--
-- Indexes for table `privilage`
--
ALTER TABLE `privilage`
  ADD PRIMARY KEY (`priv_id`);

--
-- Indexes for table `tax_report`
--
ALTER TABLE `tax_report`
  ADD PRIMARY KEY (`tax_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounting_report`
--
ALTER TABLE `accounting_report`
  MODIFY `ar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contract_report`
--
ALTER TABLE `contract_report`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `priv`
--
ALTER TABLE `priv`
  MODIFY `priv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `privilage`
--
ALTER TABLE `privilage`
  MODIFY `priv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tax_report`
--
ALTER TABLE `tax_report`
  MODIFY `tax_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounting_report`
--
ALTER TABLE `accounting_report`
  ADD CONSTRAINT `constrain1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contract_report`
--
ALTER TABLE `contract_report`
  ADD CONSTRAINT `contract` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tax_report`
--
ALTER TABLE `tax_report`
  ADD CONSTRAINT `tax_report_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
