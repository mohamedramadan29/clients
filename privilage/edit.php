<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    /****** */
    $priv_show = isset($_POST['priv_show_own']) ? 1 : 0;
    $priv_show_ad_sup = isset($_POST['priv_show_ad_sup']) ? 1 : 0;
    $priv_show_ma_assis = isset($_POST['priv_show_ma_assis']) ? 1 : 0;
    $priv_show_mang_revie = isset($_POST['priv_show_mang_revie']) ? 1 : 0;
    $priv_show_reviwer = isset($_POST['priv_show_reviwer']) ? 1 : 0;
    $priv_show_qua_super = isset($_POST['priv_show_qua_super']) ? 1 : 0;
    $priv_show_live_client = isset($_POST['priv_show_live_client']) ? 1 : 0;
    $priv_show_client = isset($_POST['priv_show_client']) ? 1 : 0;
    /******** */
    $priv_edit = isset($_POST['priv_edit_own']) ? 1 : 0;
    $priv_edit_ad_sup = isset($_POST['priv_edit_ad_sup']) ? 1 : 0;
    $priv_edit_ma_assis = isset($_POST['priv_edit_ma_assis']) ? 1 : 0;
    $priv_edit_mang_revie = isset($_POST['priv_edit_mang_revie']) ? 1 : 0;
    $priv_edit_reviwer = isset($_POST['priv_edit_reviwer']) ? 1 : 0;
    $priv_edit_qua_super = isset($_POST['priv_edit_qua_super']) ? 1 : 0;
    $priv_edit_live_client = isset($_POST['priv_edit_live_client']) ? 1 : 0;
    $priv_edit_client = isset($_POST['priv_edit_client']) ? 1 : 0;

    /** *** */

    $priv_show_users = isset($_POST['priv_show_users_own']) ? 1 : 0;
    $priv_show_users_ad_sup = isset($_POST['priv_show_users_ad_sup']) ? 1 : 0;
    $priv_show_users_ma_assis = isset($_POST['priv_show_users_ma_assis']) ? 1 : 0;
    $priv_show_users_mang_revie = isset($_POST['priv_show_users_mang_revie']) ? 1 : 0;
    $priv_show_users_reviwer = isset($_POST['priv_show_users_reviwer']) ? 1 : 0;
    $priv_show_users_qua_super = isset($_POST['priv_show_users_qua_super']) ? 1 : 0;
    $priv_show_users_live_client = isset($_POST['priv_show_users_live_client']) ? 1 : 0;
    $priv_show_users_client = isset($_POST['priv_show_users_client']) ? 1 : 0;

    /******** */
    $priv_edit_users = isset($_POST['priv_edit_users_own']) ? 1 : 0;
    $priv_edit_users_ad_sup = isset($_POST['priv_edit_users_ad_sup']) ? 1 : 0;
    $priv_edit_users_ma_assis = isset($_POST['priv_edit_users_ma_assis']) ? 1 : 0;
    $priv_edit_users_mang_revie = isset($_POST['priv_edit_users_mang_revie']) ? 1 : 0;
    $priv_edit_users_reviwer = isset($_POST['priv_edit_users_reviwer']) ? 1 : 0;
    $priv_edit_users_qua_super = isset($_POST['priv_edit_users_qua_super']) ? 1 : 0;
    $priv_edit_users_live_client = isset($_POST['priv_edit_users_live_client']) ? 1 : 0;
    $priv_edit_users_client = isset($_POST['priv_edit_users_client']) ? 1 : 0;

    /** *** */

    /******** */
    $user_all_branch_own = isset($_POST['user_all_branch_own']) ? 1 : 0;
    $user_all_branch_ad_sup = isset($_POST['user_all_branch_ad_sup']) ? 1 : 0;
    $user_all_branch_ma_assis = isset($_POST['user_all_branch_ma_assis']) ? 1 : 0;
    $user_all_branch_mang_revie = isset($_POST['user_all_branch_mang_revie']) ? 1 : 0;
    $user_all_branch_reviwer = isset($_POST['user_all_branch_reviwer']) ? 1 : 0;
    $user_all_branch_qua_super = isset($_POST['user_all_branch_qua_super']) ? 1 : 0;
    $user_all_branch_live_client = isset($_POST['user_all_branch_live_client']) ? 1 : 0;
    $user_all_branch_client = isset($_POST['user_all_branch_client']) ? 1 : 0;

    /** *** */


    /******** */
    $create_report_own = isset($_POST['create_report_own']) ? 1 : 0;
    $create_report_ad_sup = isset($_POST['create_report_ad_sup']) ? 1 : 0;
    $create_report_ma_assis = isset($_POST['create_report_ma_assis']) ? 1 : 0;
    $create_report_mang_revie = isset($_POST['create_report_mang_revie']) ? 1 : 0;
    $create_report_reviwer = isset($_POST['create_report_reviwer']) ? 1 : 0;
    $create_report_qua_super = isset($_POST['create_report_qua_super']) ? 1 : 0;
    $create_report_live_client = isset($_POST['create_report_live_client']) ? 1 : 0;
    $create_report_client = isset($_POST['create_report_client']) ? 1 : 0;

    /** *** */

    /******** */
    $show_attach_own = isset($_POST['show_attach_own']) ? 1 : 0;
    $show_attach_ad_sup = isset($_POST['show_attach_ad_sup']) ? 1 : 0;
    $show_attach_ma_assis = isset($_POST['show_attach_ma_assis']) ? 1 : 0;
    $show_attach_mang_revie = isset($_POST['show_attach_mang_revie']) ? 1 : 0;
    $show_attach_reviwer = isset($_POST['show_attach_reviwer']) ? 1 : 0;
    $show_attach_qua_super = isset($_POST['show_attach_qua_super']) ? 1 : 0;
    $show_attach_live_client = isset($_POST['show_attach_live_client']) ? 1 : 0;
    $show_attach_client = isset($_POST['show_attach_client']) ? 1 : 0;

    /** *** */

    /******** */
    $agree_refuse_own = isset($_POST['agree_refuse_own']) ? 1 : 0;
    $agree_refuse_ad_sup = isset($_POST['agree_refuse_ad_sup']) ? 1 : 0;
    $agree_refuse_ma_assis = isset($_POST['agree_refuse_ma_assis']) ? 1 : 0;
    $agree_refuse_mang_revie = isset($_POST['agree_refuse_mang_revie']) ? 1 : 0;
    $agree_refuse_reviwer = isset($_POST['agree_refuse_reviwer']) ? 1 : 0;
    $agree_refuse_qua_super = isset($_POST['agree_refuse_qua_super']) ? 1 : 0;
    $agree_refuse_live_client = isset($_POST['agree_refuse_live_client']) ? 1 : 0;
    $agree_refuse_client = isset($_POST['agree_refuse_client']) ? 1 : 0;

    /** *** */

    /******** */
    $edit_report_own = isset($_POST['edit_report_own']) ? 1 : 0;
    $edit_report_ad_sup = isset($_POST['edit_report_ad_sup']) ? 1 : 0;
    $edit_report_ma_assis = isset($_POST['edit_report_ma_assis']) ? 1 : 0;
    $edit_report_mang_revie = isset($_POST['edit_report_mang_revie']) ? 1 : 0;
    $edit_report_reviwer = isset($_POST['edit_report_reviwer']) ? 1 : 0;
    $edit_report_qua_super = isset($_POST['edit_report_qua_super']) ? 1 : 0;
    $edit_report_live_client = isset($_POST['edit_report_live_client']) ? 1 : 0;
    $edit_report_client = isset($_POST['edit_report_client']) ? 1 : 0;

    /** *** */


    /******** */
    $confirm_send_re_own = isset($_POST['confirm_send_re_own']) ? 1 : 0;
    $confirm_send_re_ad_sup = isset($_POST['confirm_send_re_ad_sup']) ? 1 : 0;
    $confirm_send_re_ma_assis = isset($_POST['confirm_send_re_ma_assis']) ? 1 : 0;
    $confirm_send_re_mang_revie = isset($_POST['confirm_send_re_mang_revie']) ? 1 : 0;
    $confirm_send_re_reviwer = isset($_POST['confirm_send_re_reviwer']) ? 1 : 0;
    $confirm_send_re_qua_super = isset($_POST['confirm_send_re_qua_super']) ? 1 : 0;
    $confirm_send_re_live_client = isset($_POST['confirm_send_re_live_client']) ? 1 : 0;
    $confirm_send_re_client = isset($_POST['confirm_send_re_client']) ? 1 : 0;

    /** *** */

    /******** */
    $confirm_recieve_money_own = isset($_POST['confirm_recieve_money_own']) ? 1 : 0;
    $confirm_recieve_money_ad_sup = isset($_POST['confirm_recieve_money_ad_sup']) ? 1 : 0;
    $confirm_recieve_money_ma_assis = isset($_POST['confirm_recieve_money_ma_assis']) ? 1 : 0;
    $confirm_recieve_money_mang_revie = isset($_POST['confirm_recieve_money_mang_revie']) ? 1 : 0;
    $confirm_recieve_money_reviwer = isset($_POST['confirm_recieve_money_reviwer']) ? 1 : 0;
    $confirm_recieve_money_qua_super = isset($_POST['confirm_recieve_money_qua_super']) ? 1 : 0;
    $confirm_recieve_money_live_client = isset($_POST['confirm_recieve_money_live_client']) ? 1 : 0;
    $confirm_recieve_money_client = isset($_POST['confirm_recieve_money_client']) ? 1 : 0;

    /** *** */



    /******** */
    $finish_ref_own = isset($_POST['finish_ref_own']) ? 1 : 0;
    $finish_ref_ad_sup = isset($_POST['finish_ref_ad_sup']) ? 1 : 0;
    $finish_ref_ma_assis = isset($_POST['finish_ref_ma_assis']) ? 1 : 0;
    $finish_ref_mang_revie = isset($_POST['finish_ref_mang_revie']) ? 1 : 0;
    $finish_ref_reviwer = isset($_POST['finish_ref_reviwer']) ? 1 : 0;
    $finish_ref_qua_super = isset($_POST['finish_ref_qua_super']) ? 1 : 0;
    $finish_ref_live_client = isset($_POST['finish_ref_live_client']) ? 1 : 0;
    $finish_ref_client = isset($_POST['finish_ref_client']) ? 1 : 0;

    /** *** */

    /******** */
    $confirm_start_serv_own = isset($_POST['confirm_start_serv_own']) ? 1 : 0;
    $confirm_start_serv_ad_sup = isset($_POST['confirm_start_serv_ad_sup']) ? 1 : 0;
    $confirm_start_serv_ma_assis = isset($_POST['confirm_start_serv_ma_assis']) ? 1 : 0;
    $confirm_start_serv_mang_revie = isset($_POST['confirm_start_serv_mang_revie']) ? 1 : 0;
    $confirm_start_serv_reviwer = isset($_POST['confirm_start_serv_reviwer']) ? 1 : 0;
    $confirm_start_serv_qua_super = isset($_POST['confirm_start_serv_qua_super']) ? 1 : 0;
    $confirm_start_serv_live_client = isset($_POST['confirm_start_serv_live_client']) ? 1 : 0;
    $confirm_start_serv_client = isset($_POST['confirm_start_serv_client']) ? 1 : 0;

    /** *** */

    /******** */
    $confirm_end_serv_own = isset($_POST['confirm_end_serv_own']) ? 1 : 0;
    $confirm_end_serv_ad_sup = isset($_POST['confirm_end_serv_ad_sup']) ? 1 : 0;
    $confirm_end_serv_ma_assis = isset($_POST['confirm_end_serv_ma_assis']) ? 1 : 0;
    $confirm_end_serv_mang_revie = isset($_POST['confirm_end_serv_mang_revie']) ? 1 : 0;
    $confirm_end_serv_reviwer = isset($_POST['confirm_end_serv_reviwer']) ? 1 : 0;
    $confirm_end_serv_qua_super = isset($_POST['confirm_end_serv_qua_super']) ? 1 : 0;
    $confirm_end_serv_live_client = isset($_POST['confirm_end_serv_live_client']) ? 1 : 0;
    $confirm_end_serv_client = isset($_POST['confirm_end_serv_client']) ? 1 : 0;

    /** *** */

    /******** */
    $confirm_upload_own = isset($_POST['confirm_upload_own']) ? 1 : 0;
    $confirm_upload_ad_sup = isset($_POST['confirm_upload_ad_sup']) ? 1 : 0;
    $confirm_upload_ma_assis = isset($_POST['confirm_upload_ma_assis']) ? 1 : 0;
    $confirm_upload_mang_revie = isset($_POST['confirm_upload_mang_revie']) ? 1 : 0;
    $confirm_upload_reviwer = isset($_POST['confirm_upload_reviwer']) ? 1 : 0;
    $confirm_upload_qua_super = isset($_POST['confirm_upload_qua_super']) ? 1 : 0;
    $confirm_upload_live_client = isset($_POST['confirm_upload_live_client']) ? 1 : 0;
    $confirm_upload_client = isset($_POST['confirm_upload_client']) ? 1 : 0;

    /** *** */

    /******** */
    $view_create_rev_files_own = isset($_POST['view_create_rev_files_own']) ? 1 : 0;
    $view_create_rev_files_ad_sup = isset($_POST['view_create_rev_files_ad_sup']) ? 1 : 0;
    $view_create_rev_files_ma_assis = isset($_POST['view_create_rev_files_ma_assis']) ? 1 : 0;
    $view_create_rev_files_mang_revie = isset($_POST['view_create_rev_files_mang_revie']) ? 1 : 0;
    $view_create_rev_files_reviwer = isset($_POST['view_create_rev_files_reviwer']) ? 1 : 0;
    $view_create_rev_files_qua_super = isset($_POST['view_create_rev_files_qua_super']) ? 1 : 0;
    $view_create_rev_files_live_client = isset($_POST['view_create_rev_files_live_client']) ? 1 : 0;
    $view_create_rev_files_client = isset($_POST['view_create_rev_files_client']) ? 1 : 0;

    /** *** */

    /******** */
    $edit_client_info_own = isset($_POST['edit_client_info_own']) ? 1 : 0;
    $edit_client_info_ad_sup = isset($_POST['edit_client_info_ad_sup']) ? 1 : 0;
    $edit_client_info_ma_assis = isset($_POST['edit_client_info_ma_assis']) ? 1 : 0;
    $edit_client_info_mang_revie = isset($_POST['edit_client_info_mang_revie']) ? 1 : 0;
    $edit_client_info_reviwer = isset($_POST['edit_client_info_reviwer']) ? 1 : 0;
    $edit_client_info_qua_super = isset($_POST['edit_client_info_qua_super']) ? 1 : 0;
    $edit_client_info_live_client = isset($_POST['edit_client_info_live_client']) ? 1 : 0;
    $edit_client_info_client = isset($_POST['edit_client_info_client']) ? 1 : 0;

    /** *** */


    /******** */
    $edit_accounts_own = isset($_POST['edit_accounts_own']) ? 1 : 0;
    $edit_accounts_ad_sup = isset($_POST['edit_accounts_ad_sup']) ? 1 : 0;
    $edit_accounts_ma_assis = isset($_POST['edit_accounts_ma_assis']) ? 1 : 0;
    $edit_accounts_mang_revie = isset($_POST['edit_accounts_mang_revie']) ? 1 : 0;
    $edit_accounts_reviwer = isset($_POST['edit_accounts_reviwer']) ? 1 : 0;
    $edit_accounts_qua_super = isset($_POST['edit_accounts_qua_super']) ? 1 : 0;
    $edit_accounts_live_client = isset($_POST['edit_accounts_live_client']) ? 1 : 0;
    $edit_accounts_client = isset($_POST['edit_accounts_client']) ? 1 : 0;

    /** *** */


    /******** */
    $change_refus_team_own = isset($_POST['change_refus_team_own']) ? 1 : 0;
    $change_refus_team_ad_sup = isset($_POST['change_refus_team_ad_sup']) ? 1 : 0;
    $change_refus_team_ma_assis = isset($_POST['change_refus_team_ma_assis']) ? 1 : 0;
    $change_refus_team_mang_revie = isset($_POST['change_refus_team_mang_revie']) ? 1 : 0;
    $change_refus_team_reviwer = isset($_POST['change_refus_team_reviwer']) ? 1 : 0;
    $change_refus_team_qua_super = isset($_POST['change_refus_team_qua_super']) ? 1 : 0;
    $change_refus_team_live_client = isset($_POST['change_refus_team_live_client']) ? 1 : 0;
    $change_refus_team_client = isset($_POST['change_refus_team_client']) ? 1 : 0;

    /** *** */


    /******** */
    $paper_work_own = isset($_POST['paper_work_own']) ? 1 : 0;
    $paper_work_ad_sup = isset($_POST['paper_work_ad_sup']) ? 1 : 0;
    $paper_work_ma_assis = isset($_POST['paper_work_ma_assis']) ? 1 : 0;
    $paper_work_mang_revie = isset($_POST['paper_work_mang_revie']) ? 1 : 0;
    $paper_work_reviwer = isset($_POST['paper_work_reviwer']) ? 1 : 0;
    $paper_work_qua_super = isset($_POST['paper_work_qua_super']) ? 1 : 0;
    $paper_work_live_client = isset($_POST['paper_work_live_client']) ? 1 : 0;
    $paper_work_client = isset($_POST['paper_work_client']) ? 1 : 0;

    /** *** */

    /******** */
    $paper_revision_own = isset($_POST['paper_revision_own']) ? 1 : 0;
    $paper_revision_ad_sup = isset($_POST['paper_revision_ad_sup']) ? 1 : 0;
    $paper_revision_ma_assis = isset($_POST['paper_revision_ma_assis']) ? 1 : 0;
    $paper_revision_mang_revie = isset($_POST['paper_revision_mang_revie']) ? 1 : 0;
    $paper_revision_reviwer = isset($_POST['paper_revision_reviwer']) ? 1 : 0;
    $paper_revision_qua_super = isset($_POST['paper_revision_qua_super']) ? 1 : 0;
    $paper_revision_live_client = isset($_POST['paper_revision_live_client']) ? 1 : 0;
    $paper_revision_client = isset($_POST['paper_revision_client']) ? 1 : 0;

    /** *** */

    /******** */
    $paper_start_own = isset($_POST['paper_start_own']) ? 1 : 0;
    $paper_start_ad_sup = isset($_POST['paper_start_ad_sup']) ? 1 : 0;
    $paper_start_ma_assis = isset($_POST['paper_start_ma_assis']) ? 1 : 0;
    $paper_start_mang_revie = isset($_POST['paper_start_mang_revie']) ? 1 : 0;
    $paper_start_reviwer = isset($_POST['paper_start_reviwer']) ? 1 : 0;
    $paper_start_qua_super = isset($_POST['paper_start_qua_super']) ? 1 : 0;
    $paper_start_live_client = isset($_POST['paper_start_live_client']) ? 1 : 0;
    $paper_start_client = isset($_POST['paper_start_client']) ? 1 : 0;

    /** *** */


    /******** */
    $end_archieve_own = isset($_POST['end_archieve_own']) ? 1 : 0;
    $end_archieve_ad_sup = isset($_POST['end_archieve_ad_sup']) ? 1 : 0;
    $end_archieve_ma_assis = isset($_POST['end_archieve_ma_assis']) ? 1 : 0;
    $end_archieve_mang_revie = isset($_POST['end_archieve_mang_revie']) ? 1 : 0;
    $end_archieve_reviwer = isset($_POST['end_archieve_reviwer']) ? 1 : 0;
    $end_archieve_qua_super = isset($_POST['end_archieve_qua_super']) ? 1 : 0;
    $end_archieve_live_client = isset($_POST['end_archieve_live_client']) ? 1 : 0;
    $end_archieve_client = isset($_POST['end_archieve_client']) ? 1 : 0;

    /** *** */


    /******** */
    $paper_add_edit_own = isset($_POST['paper_add_edit_own']) ? 1 : 0;
    $paper_add_edit_ad_sup = isset($_POST['paper_add_edit_ad_sup']) ? 1 : 0;
    $paper_add_edit_ma_assis = isset($_POST['paper_add_edit_ma_assis']) ? 1 : 0;
    $paper_add_edit_mang_revie = isset($_POST['paper_add_edit_mang_revie']) ? 1 : 0;
    $paper_add_edit_reviwer = isset($_POST['paper_add_edit_reviwer']) ? 1 : 0;
    $paper_add_edit_qua_super = isset($_POST['paper_add_edit_qua_super']) ? 1 : 0;
    $paper_add_edit_live_client = isset($_POST['paper_add_edit_live_client']) ? 1 : 0;
    $paper_add_edit_client = isset($_POST['paper_add_edit_client']) ? 1 : 0;

    /** *** */



    $stmt = $connect->prepare("UPDATE new_priv SET
        priv_show_own=?,priv_show_ad_sup=?, priv_show_ma_assis=?,priv_show_mang_revie=?,priv_show_reviwer=?,
        priv_show_qua_super=?, priv_show_live_client=?,priv_show_client=?,
        
        priv_edit_own=?,priv_edit_ad_sup=?, priv_edit_ma_assis=?,priv_edit_mang_revie=?,priv_edit_reviwer=?,
        priv_edit_qua_super=?, priv_edit_live_client=?,priv_edit_client=?,

        priv_show_users_own=?,priv_show_users_ad_sup=?, priv_show_users_ma_assis=?,priv_show_users_mang_revie=?,priv_show_users_reviwer=?,
        priv_show_users_qua_super=?, priv_show_users_live_client=?,priv_show_users_client=?,

        priv_edit_users_own=?,priv_edit_users_ad_sup=?, priv_edit_users_ma_assis=?,priv_edit_users_mang_revie=?,priv_edit_users_reviwer=?,
        priv_edit_users_qua_super=?, priv_edit_users_live_client=?,priv_edit_users_client=?,

        user_all_branch_own=?,user_all_branch_ad_sup=?, user_all_branch_ma_assis=?,user_all_branch_mang_revie=?,user_all_branch_reviwer=?,
        user_all_branch_qua_super=?, user_all_branch_live_client=?,user_all_branch_client=?,


        create_report_own=?,create_report_ad_sup=?, create_report_ma_assis=?,create_report_mang_revie=?,create_report_reviwer=?,
        create_report_qua_super=?, create_report_live_client=?,create_report_client=?,

        show_attach_own=?,show_attach_ad_sup=?, show_attach_ma_assis=?,show_attach_mang_revie=?,
        show_attach_reviwer=?,
        show_attach_qua_super=?, show_attach_live_client=?,show_attach_client=?,

        agree_refuse_own=?,agree_refuse_ad_sup=?, agree_refuse_ma_assis=?,agree_refuse_mang_revie=?,
        agree_refuse_reviwer=?,
        agree_refuse_qua_super=?, agree_refuse_live_client=?,agree_refuse_client=?,

        edit_report_own=?,edit_report_ad_sup=?, edit_report_ma_assis=?,edit_report_mang_revie=?,
        edit_report_reviwer=?,
        edit_report_qua_super=?, edit_report_live_client=?,edit_report_client=?,
        
        confirm_send_re_own=?,confirm_send_re_ad_sup=?, confirm_send_re_ma_assis=?,confirm_send_re_mang_revie=?,
        confirm_send_re_reviwer=?,
        confirm_send_re_qua_super=?, confirm_send_re_live_client=?,confirm_send_re_client=?,

        confirm_recieve_money_own=?,confirm_recieve_money_ad_sup=?, confirm_recieve_money_ma_assis=?,confirm_recieve_money_mang_revie=?,
        confirm_recieve_money_reviwer=?,
        confirm_recieve_money_qua_super=?, confirm_recieve_money_live_client=?,confirm_recieve_money_client=?,

        finish_ref_own=?,finish_ref_ad_sup=?, finish_ref_ma_assis=?,finish_ref_mang_revie=?,
        finish_ref_reviwer=?,
        finish_ref_qua_super=?, finish_ref_live_client=?,finish_ref_client=?,

        confirm_start_serv_own=?,confirm_start_serv_ad_sup=?, confirm_start_serv_ma_assis=?,confirm_start_serv_mang_revie=?,
        confirm_start_serv_reviwer=?,
        confirm_start_serv_qua_super=?, confirm_start_serv_live_client=?,confirm_start_serv_client=?,

        confirm_end_serv_own=?,confirm_end_serv_ad_sup=?, confirm_end_serv_ma_assis=?,confirm_end_serv_mang_revie=?,
        confirm_end_serv_reviwer=?,
        confirm_end_serv_qua_super=?, confirm_end_serv_live_client=?,confirm_end_serv_client=?,

        confirm_upload_own=?,confirm_upload_ad_sup=?, confirm_upload_ma_assis=?,confirm_upload_mang_revie=?,
        confirm_upload_reviwer=?,
        confirm_upload_qua_super=?, confirm_upload_live_client=?,confirm_upload_client=?,

        view_create_rev_files_own=?,view_create_rev_files_ad_sup=?, view_create_rev_files_ma_assis=?,view_create_rev_files_mang_revie=?,
        view_create_rev_files_reviwer=?,
        view_create_rev_files_qua_super=?, view_create_rev_files_live_client=?,view_create_rev_files_client=?,

        edit_client_info_own=?,edit_client_info_ad_sup=?, edit_client_info_ma_assis=?,edit_client_info_mang_revie=?,
        edit_client_info_reviwer=?,
        edit_client_info_qua_super=?, edit_client_info_live_client=?,edit_client_info_client=?,

        edit_accounts_own=?,edit_accounts_ad_sup=?, edit_accounts_ma_assis=?,edit_accounts_mang_revie=?,
        edit_accounts_reviwer=?,
        edit_accounts_qua_super=?, edit_accounts_live_client=?,edit_accounts_client=?,

        change_refus_team_own=?,change_refus_team_ad_sup=?, change_refus_team_ma_assis=?,change_refus_team_mang_revie=?,
        change_refus_team_reviwer=?,
        change_refus_team_qua_super=?, change_refus_team_live_client=?,change_refus_team_client=?,


        paper_work_own=?,paper_work_ad_sup=?, paper_work_ma_assis=?,paper_work_mang_revie=?,
        paper_work_reviwer=?,
        paper_work_qua_super=?, paper_work_live_client=?,paper_work_client=?,

        paper_revision_own=?,paper_revision_ad_sup=?, paper_revision_ma_assis=?,paper_revision_mang_revie=?,
        paper_revision_reviwer=?,
        paper_revision_qua_super=?, paper_revision_live_client=?,paper_revision_client=?,

        
        paper_start_own=?,paper_start_ad_sup=?, paper_start_ma_assis=?,paper_start_mang_revie=?,
        paper_start_reviwer=?,
        paper_start_qua_super=?, paper_start_live_client=?,paper_start_client=?,

        end_archieve_own=?,end_archieve_ad_sup=?, end_archieve_ma_assis=?,end_archieve_mang_revie=?,
        end_archieve_reviwer=?,
        end_archieve_qua_super=?, end_archieve_live_client=?,end_archieve_client=?,

        paper_add_edit_own=?,paper_add_edit_ad_sup=?, paper_add_edit_ma_assis=?,paper_add_edit_mang_revie=?,
        paper_add_edit_reviwer=?,
        paper_add_edit_qua_super=?, paper_add_edit_live_client=?,paper_add_edit_client=?

        


        
        
        
        ");
    $stmt->execute(array(
        $priv_show, $priv_show_ad_sup, $priv_show_ma_assis, $priv_show_mang_revie, $priv_show_reviwer,
        $priv_show_qua_super, $priv_show_live_client, $priv_show_client,


        $priv_edit, $priv_edit_ad_sup, $priv_edit_ma_assis, $priv_edit_mang_revie, $priv_edit_reviwer,
        $priv_edit_qua_super, $priv_edit_live_client, $priv_edit_client,

        $priv_show_users, $priv_show_users_ad_sup, $priv_show_users_ma_assis, $priv_show_users_mang_revie, $priv_show_users_reviwer,
        $priv_show_users_qua_super, $priv_show_users_live_client, $priv_show_users_client,

        $priv_edit_users, $priv_edit_users_ad_sup, $priv_edit_users_ma_assis, $priv_edit_users_mang_revie, $priv_edit_users_reviwer,
        $priv_edit_users_qua_super, $priv_edit_users_live_client, $priv_edit_users_client,

        $user_all_branch_own, $user_all_branch_ad_sup, $user_all_branch_ma_assis, $user_all_branch_mang_revie, $user_all_branch_reviwer,
        $user_all_branch_qua_super, $user_all_branch_live_client, $user_all_branch_client,

        $create_report_own, $create_report_ad_sup, $create_report_ma_assis, $create_report_mang_revie, $create_report_reviwer,
        $create_report_qua_super, $create_report_live_client, $create_report_client,

        $show_attach_own, $show_attach_ad_sup, $show_attach_ma_assis, $show_attach_mang_revie, $show_attach_reviwer,
        $show_attach_qua_super, $show_attach_live_client, $show_attach_client,

        $agree_refuse_own, $agree_refuse_ad_sup, $agree_refuse_ma_assis, $agree_refuse_mang_revie, $agree_refuse_reviwer,
        $agree_refuse_qua_super, $agree_refuse_live_client, $agree_refuse_client,

        $edit_report_own, $edit_report_ad_sup, $edit_report_ma_assis, $edit_report_mang_revie, $edit_report_reviwer,
        $edit_report_qua_super, $edit_report_live_client, $edit_report_client,

        $confirm_send_re_own, $confirm_send_re_ad_sup, $confirm_send_re_ma_assis, $confirm_send_re_mang_revie, $confirm_send_re_reviwer,
        $confirm_send_re_qua_super, $confirm_send_re_live_client, $confirm_send_re_client,

        $confirm_recieve_money_own, $confirm_recieve_money_ad_sup, $confirm_recieve_money_ma_assis,
        $confirm_recieve_money_mang_revie, $confirm_recieve_money_reviwer,
        $confirm_recieve_money_qua_super, $confirm_recieve_money_live_client, $confirm_recieve_money_client,

        $finish_ref_own, $finish_ref_ad_sup, $finish_ref_ma_assis,
        $finish_ref_mang_revie, $finish_ref_reviwer,
        $finish_ref_qua_super, $finish_ref_live_client, $finish_ref_client,

        $confirm_start_serv_own, $confirm_start_serv_ad_sup, $confirm_start_serv_ma_assis,
        $confirm_start_serv_mang_revie, $confirm_start_serv_reviwer,
        $confirm_start_serv_qua_super, $confirm_start_serv_live_client, $confirm_start_serv_client,

        $confirm_end_serv_own, $confirm_end_serv_ad_sup, $confirm_end_serv_ma_assis,
        $confirm_end_serv_mang_revie, $confirm_end_serv_reviwer,
        $confirm_end_serv_qua_super, $confirm_end_serv_live_client, $confirm_end_serv_client,

        $confirm_upload_own, $confirm_upload_ad_sup, $confirm_upload_ma_assis,
        $confirm_upload_mang_revie, $confirm_upload_reviwer,
        $confirm_upload_qua_super, $confirm_upload_live_client, $confirm_upload_client,

        $view_create_rev_files_own, $view_create_rev_files_ad_sup, $view_create_rev_files_ma_assis,
        $view_create_rev_files_mang_revie, $view_create_rev_files_reviwer,
        $view_create_rev_files_qua_super, $view_create_rev_files_live_client, $view_create_rev_files_client,


        $edit_client_info_own, $edit_client_info_ad_sup, $edit_client_info_ma_assis,
        $edit_client_info_mang_revie, $edit_client_info_reviwer,
        $edit_client_info_qua_super, $edit_client_info_live_client, $edit_client_info_client,

        $edit_accounts_own, $edit_accounts_ad_sup, $edit_accounts_ma_assis,
        $edit_accounts_mang_revie, $edit_accounts_reviwer,
        $edit_accounts_qua_super, $edit_accounts_live_client, $edit_accounts_client,

        $change_refus_team_own, $change_refus_team_ad_sup, $change_refus_team_ma_assis,
        $change_refus_team_mang_revie, $change_refus_team_reviwer,
        $change_refus_team_qua_super, $change_refus_team_live_client, $change_refus_team_client,

        $paper_work_own, $paper_work_ad_sup, $paper_work_ma_assis,
        $paper_work_mang_revie, $paper_work_reviwer,
        $paper_work_qua_super, $paper_work_live_client, $paper_work_client,

        $paper_revision_own, $paper_revision_ad_sup, $paper_revision_ma_assis,
        $paper_revision_mang_revie, $paper_revision_reviwer,
        $paper_revision_qua_super, $paper_revision_live_client, $paper_revision_client,

        $paper_start_own, $paper_start_ad_sup, $paper_start_ma_assis,
        $paper_start_mang_revie, $paper_start_reviwer,
        $paper_start_qua_super, $paper_start_live_client, $paper_start_client,

        $end_archieve_own, $end_archieve_ad_sup, $end_archieve_ma_assis,
        $end_archieve_mang_revie, $end_archieve_reviwer,
        $end_archieve_qua_super, $end_archieve_live_client, $end_archieve_client,

        $paper_add_edit_own, $paper_add_edit_ad_sup, $paper_add_edit_ma_assis,
        $paper_add_edit_mang_revie, $paper_add_edit_reviwer,
        $paper_add_edit_qua_super, $paper_add_edit_live_client, $paper_add_edit_client


    ));
    if ($stmt) { ?>

        <script>
           // document.getElementById("add_form_user").reset();
            setTimeout(() => {
                let url = "main.php?dir=privilage&page=report";
                window.location.href = url;
            });
        </script>

<?php
       // header('Location:main.php?dir=privilage&page=report');
    }
}
