<div class="container-fluid customer_report">
    <div class="data">
        <div class="bread">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <i class="fa fa-heart"></i> <a href="main.php?dir=dashboard&page=dashboard"> ادارة مهام العملاء </a> <i class="fa fa-chevron-left"></i> </li>
                    <li class="breadcrumb-item active" aria-current="page">مشاهدة الزاكاة والضرائب </li>
                </ol>
            </nav>
        </div>
        <!-------------------------- START NEW WHATSAPP MEMEBER------------------------->
        <!-- Content Row -->
        <!-- START MODEL TO ADD NEW RECORD  -->
    </div>
    <!-- END RECORD TO EDIT NEW RECORD  -->




    <div class="table-responsive">


        <table id="tableone" class="table table-light table-hover table-bordered table-responsive">
            <thead>
                <tr>

                    <th> رمز العميل </th>
                    <th style="width: 250px;"> اسم العميل </th>
                    <th> السنة المالية </th>
                    <th> نوع الخدمة </th>
                    <th> ارسال طلب الخدمة للمكتب </th>
                    <th> الموافقة على نموذج الخدمة </th>
                    <th> إرسال عقد الارتباط </th>
                    <th> إرسال العقد الموقع وايصالات السداد </th>
                    <th> التحقق من توقيع العقد وايصالات السداد </th>
                    <th> تأكيد بدء الخدمة </th>
                    <th>الانتهاء من أعمال المراجعة </th>
                    <th> إرسال ايصال سداد الدفعة الأخيرة </th>
                    <th> تأكيد انتهاء الخدمة </th>
                    <th> إيداع في منصة قوائم </th>
                    <th> الحالة </th>

                    <!--    <th> مذكرة التخطيط </th> -->
                </tr>
            </thead>
            <tbody>

                <!-- Show Tax Services (زكاء وضرائب)  -->
                <?php
                $stmt = $connect->prepare('SELECT * FROM tax_report ORDER BY tax_id DESC');
                $stmt->execute();
                $alltype = $stmt->fetchAll();
                foreach ($alltype as $type) { ?>
                    <tr>
                        <td>
                            <a class="btn btn-primary btn-sm" href="main.php?dir=record_screen&page=view_tax&tax_id=<?php echo $type['tax_id']; ?>"> <?php echo $type['tax_id']; ?> </a>
                        </td>
                        <td> <?php echo $type['tax_client_name']; ?> </td>
                        <td> <?php echo $type['tax_years_required']; ?> </td>
                        <td> زكاة وضرائب </td>
                        <td>
                            <?php
                            if ($type['tax_prepare_date'] == 0) { ?>
                                <form action="" method="post">
                                    <button style="border: none; background-color:transparent" name="send_end_fee_send" href="#" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" ارسال التاكيد  ">
                                        <img style="width:30px; " src="uploads/error.gif" alt="">
                                    </button>
                                </form>

                            <?php
                            } else {
                            ?>
                                <button style="border: none; background-color:transparent" name="send_end_fee_send" href="#" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" <?php echo "Good"; ?> ">
                                    <img style="width:30px; " src="uploads/done.gif" alt="">
                                </button>

                            <?php
                            }

                            ?>
                        </td>
                        <td><?php
                            if ($type['agree_services'] == 0) { ?>
                                <form action="" method="post">
                                    <button type="submit" name="agree_services" style="border: none; background-color:transparent" name="send_end_fee_send" href="#" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" ارسال التاكيد  ">
                                        <img style="width:30px; " src="uploads/error.gif" alt="">
                                    </button>
                                </form>
                                <?php
                                if (isset($_POST['agree_services'])) {
                                    $stmt = $connect->prepare("UPDATE tax_report SET agree_services=1 WHERE tax_id=?");
                                    $stmt->execute(array($type['tax_id']));
                                    if ($stmt) {
                                ?>
                                        <script>
                                            alert(" تم التعديل بنجاح ");
                                        </script>

                                <?php
                                        // header('refresh:0');
                                    }
                                }

                                ?>

                            <?php
                            } else {
                            ?>
                                <button style="border: none; background-color:transparent" name="send_end_fee_send" href="#" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" تمت ">
                                    <img style="width:30px; " src="uploads/done.gif" alt="">
                                </button>
                            <?php
                            }

                            ?>
                        </td>
                        <td> <?php
                                if ($type['send_link_note'] == 0) { ?>
                                <form action="" method="post">
                                    <button style="border: none; background-color:transparent" name="send_link_note" href="#" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" ارسال التاكيد  ">
                                        <img style="width:30px;" src="uploads/error.gif" alt="">
                                    </button>
                                </form>
                                <?php
                                    if (isset($_POST['send_link_note'])) {
                                        $stmt = $connect->prepare("UPDATE tax_report SET send_link_note=1 WHERE tax_id=?");
                                        $stmt->execute(array($type['tax_id']));
                                        if ($stmt) {
                                ?>
                                        <script>
                                            alert(" تم التعديل بنجاح ");
                                        </script>

                                <?php
                                            // header('refresh:0');
                                        }
                                    }

                                ?>
                            <?php
                                } else {
                            ?>
                                <button style="border: none; background-color:transparent" name="send_end_fee_send" href="#" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" تمت ">
                                    <img style="width:30px; " src="uploads/done.gif" alt="">
                                </button>
                            <?php
                                }
                            ?>
                        </td>
                        <td><?php
                            if ($type['send_sign_contract_payment_receipt'] == 0) { ?>
                                <button style="border: none; background-color:transparent" name="send_end_fee_send" href="#" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" ارسال التاكيد  ">
                                    <img style="width:30px; " src="uploads/error.gif" alt="">
                                </button>
                            <?php
                            } else {
                            ?>
                                <button style="border: none; background-color:transparent" name="send_end_fee_send" href="#" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" تمت ">
                                    <img style="width:30px; " src="uploads/done.gif" alt="">
                                </button>
                            <?php
                            }
                            ?>
                        </td>
                        <td><?php
                            if ($type['verification_contract_req'] == 0) { ?>
                                <button style="border: none; background-color:transparent" name="send_end_fee_send" href="#" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" ارسال التاكيد  ">
                                    <img style="width:30px; " src="uploads/error.gif" alt="">
                                </button>
                            <?php
                            } else {
                            ?>
                                <button style="border: none; background-color:transparent" name="send_end_fee_send" href="#" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" تمت ">
                                    <img style="width:30px; " src="uploads/done.gif" alt="">
                                </button>
                            <?php
                            }

                            ?>
                        </td>
                        <td> <?php
                                if ($type['date_start_services'] == 0) { ?>
                                <button style="border: none; background-color:transparent" name="send_end_fee_send" href="#" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" ارسال التاكيد  ">
                                    <img style="width:30px; " src="uploads/error.gif" alt="">
                                </button>
                            <?php
                                } else {
                            ?>
                                <button style="border: none; background-color:transparent" name="send_end_fee_send" href="#" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" تمت ">
                                    <img style="width:30px; " src="uploads/done.gif" alt="">
                                </button>
                            <?php
                                }
                            ?>
                        </td>
                        <td> <?php
                                if ($type['end_revision_work'] == 0) { ?>
                                <button style="border: none; background-color:transparent" name="send_end_fee_send" href="#" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" ارسال التاكيد  ">
                                    <img style="width:30px; " src="uploads/error.gif" alt="">
                                </button>
                            <?php
                                } else {
                            ?>
                                <button style="border: none; background-color:transparent" name="send_end_fee_send" href="#" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" تمت ">
                                    <img style="width:30px; " src="uploads/done.gif" alt="">
                                </button>
                            <?php
                                }
                            ?>
                        </td>
                        <td>
                            <?php
                            if ($type['send_end_fee'] == 0) { ?>
                                <button style="border: none; background-color:transparent" name="send_end_fee_send" href="#" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" ارسال التاكيد  ">
                                    <img style="width:30px; " src="uploads/error.gif" alt="">
                                </button>
                            <?php
                            } else {
                            ?>
                                <button style="border: none; background-color:transparent" name="send_end_fee_send" href="#" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" تمت ">
                                    <img style="width:30px; " src="uploads/done.gif" alt="">
                                </button>
                            <?php
                            }

                            ?>
                        </td>
                        <td>
                            <?php
                            if ($type['date_end_services'] == 0) { ?>
                                <button style="border: none; background-color:transparent" name="send_end_fee_send" href="#" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" ارسال التاكيد  ">
                                    <img style="width:30px; " src="uploads/error.gif" alt="">
                                </button>
                            <?php
                            } else {
                            ?>
                                <button style="border: none; background-color:transparent" name="send_end_fee_send" href="#" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" تمت ">
                                    <img style="width:30px; " src="uploads/done.gif" alt="">
                                </button>
                            <?php
                            }

                            ?>
                        </td>
                        <td>
                            <?php
                            if ($type['deposit_plat_form'] == 0) { ?>
                                <button style="border: none; background-color:transparent" name="send_end_fee_send" href="#" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" ارسال التاكيد  ">
                                    <img style="width:30px; " src="uploads/error.gif" alt="">
                                </button>
                            <?php
                            } else {
                            ?>
                                <button style="border: none; background-color:transparent" name="send_end_fee_send" href="#" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" تمت ">
                                    <img style="width:30px; " src="uploads/done.gif" alt="">
                                </button>
                            <?php
                            }

                            ?>
                        </td>
                        <td>
                            قائمة
                        </td>
                        <!--
                            <td> <a class="btn btn-primary btn-sm" href="main.php?dir=record_screen&page=view_tax&tax_id=<?php echo $type['tax_id']; ?>"> <i class="fa fa-eye fa-sm"></i> </a> </td>
                            <td> <a href="main.php?dir=review_plane&page=edit&tax_id=<?php echo $type['tax_id']; ?>" class="btn btn-outline-success btn-sm"> مذكرة التخطيط </a> </td>
                                -->
                    </tr> <?php
                            ?>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>



</div>
</div>
</div>