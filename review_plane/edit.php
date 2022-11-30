<?php
if (isset($_GET['tax_id'])) {
    $tax_id = $_GET['tax_id'];
    $stmt = $connect->prepare('SELECT * FROM tax_report WHERE tax_id=?');
    $stmt->execute([$tax_id]);
    $user_data = $stmt->fetch();
}

if (isset($_GET['ar_id'])) {
    $ar_id = $_GET['ar_id'];
    $stmt = $connect->prepare('SELECT * FROM accounting_report WHERE ar_id=?');
    $stmt->execute([$ar_id]);
    $user_data = $stmt->fetch();
}

if (isset($_GET['con_id'])) {
    $con_id = $_GET['con_id'];
    $stmt = $connect->prepare('SELECT * FROM contract_report WHERE con_id=?');
    $stmt->execute([$con_id]);
    $user_data = $stmt->fetch();
}
?>

<div class='container-fluid'>
    <div class='data'>
        <div class="data2 ">
            <div class='bread'>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label='breadcrumb'>
                    <ol class='breadcrumb'>
                        <li class='breadcrumb-item'> <i class='fa fa-heart'></i> <a href='main.php?dir=dashboard&page=dashboard'> ادارة مهام العملاء </a> <i class='fa fa-chevron-left'></i> </li>
                        <li class='breadcrumb-item active' aria-current='page'> مذكرة تخطيط المراجعة الخاصة بالعميل</li>
                    </ol>
                </nav>
            </div>
            <div class='myform'>
                <!-- ********************** END CODE ********************** -->
                <form id='add_form' class='form-group message_form ajax_form' action='main_ajax.php?dir=clients/accounting_report&page=ajax_add' method='POST' autocomplete='on' enctype='multipart/form-data'>
                    <div class='row'>

                        <div class='col-lg-12'>
                            <div class='form-data print_content '>
                                <div class='box2'>
                                    <label id='name'> اســـم العميـــــــــل <span> * </span> </label>
                                    <input required class='form-control' type='text' name='ar_client_name' value="<?php
                                                                                                                    if (isset($_GET['tax_id'])) {
                                                                                                                        echo $user_data['tax_client_name'];
                                                                                                                    }
                                                                                                                    if (isset($_GET['ar_id'])) {
                                                                                                                        echo $user_data['ar_client_name'];
                                                                                                                    }
                                                                                                                    if (isset($_GET['con_id'])) {
                                                                                                                        echo $user_data['con_client_name'];
                                                                                                                    }
                                                                                                                    ?>">
                                </div>
                                <div class='box2'>

                                    <label id='name_en'> السنة المالية <span> * </span></label>
                                    <input required class='form-control' type='text' name='ar_client_name' value="<?php
                                                                                                                    if (isset($_GET['tax_id'])) {
                                                                                                                        echo $user_data['tax_years_required'];
                                                                                                                    }
                                                                                                                    if (isset($_GET['ar_id'])) {
                                                                                                                        echo '--';
                                                                                                                    }
                                                                                                                    if (isset($_GET['con_id'])) {
                                                                                                                        echo $user_data['con_years_required'];
                                                                                                                    }
                                                                                                                    ?>">
                                </div>
                                <div class="box report_plane">
                                    <label for="" class="bg bg-gray"> 1 ــ المهمة ونطاقها وإدارتها / </label>
                                    <label for="" class="bg bg-gray"> 1 ــ1 : نطاق المهمة على ضوء خطاب الاتفاق الموقع عليه مع العميل: </label>

                                    <textarea name="" class="form-control"> مراجعة حسابات المنشأة وفقاً لمعايير المراجعة المتعارف عليها و إبداء رأينا الفني المحايد فيما إذا كانت القوائم المالية للمنشأة تظهر بصورة عادلة المركز المالي وفقا لمعايير المحاسبة المتعارف عليها </textarea>
                                </div>
                                <div class="box report_plane">
                                    <label for="" class="bg bg-gray"> 1-2 : أي بنود هامة وردت ضمن خطاب التكليف والتي تتطلب الإهتمام بها:</label>

                                    <input type="text" name="" class="form-control" value="لا يوجد بنود هامة  معينة غير متعارف عليها . سوى ماذكر في الفقرة الأولى أعلاه .">
                                    <input type="text" name="" class="form-control" value="">
                                    <input type="text" name="" class="form-control" value="">
                                </div>
                                <div class="box report_plane">
                                    <label for="" class="bg bg-gray"> 1ــ3 : المساعدة التي سيقدمها العميل في تسهيل أعمال المراجعة : </label>
                                    <input type="text" name="" class="form-control" value="">
                                    <ul class="list-unstyled">
                                        <li> ــ إعداد موازين المراجعة بالمجاميع و الأرصدة . </li>
                                        <li> ــ إعداد كشوف تحليلية (Breakdown) لجميع الحسابات توضح مفردات كل حساب بحيث يطابق إجمالي الرصيد للحساب المبلغ المعروض في ميزان المراجعة . </li>
                                        <li>ــ إعداد كشوف لحركة جميع الحسابات خلال الفترة محل المراجعة. </li>
                                        <li> ــ عرض المستندات المؤيدة للمعاملات والأرصدة للإطلاع عليها وفحصها وتقديم نسخ ضوئية منها عند الطلب للإحتفاظ بها في ملف المراجعة . </li>
                                    </ul>
                                </div>
                                <div class="box report_plane">
                                    <label for="" class="bg bg-gray"> 1ــ4 : الإتفاق مع العميل على مكان مناسب لفريق المراجعة والأجهزة المطلوبة : </label>
                                    <input type="text" name="" class="form-control" value="">
                                    <ul class="">
                                        <li>تم تخصيص المكان الملائم في المنشأة للشروع في ممارسة أعمال المراجعة </li>
                                        <li>تم تخصيص أجهزة حاسب آلي وطابعات وماسح ضوئي كافية في الموقع . </li>

                                    </ul>
                                </div>
                                <div class="box report_plane">
                                    <label for="" class="bg bg-gray"> 1ــ5 : المواعيد الهامة المتوقعة : </label>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">تاريخ انتهاء أعمال التخطيط:</span>
                                        <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo date("mm/dd/yyyy"); ?>">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> حضور الجرد السنوي: </span>
                                        <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> تاريخ بدء أعمال المراجعة: </span>
                                        <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> بدء العمل الميداني المرحلي: </span>
                                        <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> بدء العمل الميداني النهائي: </span>
                                        <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"> إقرار الزكاة و الضرائب: </span>
                                        <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">تقرير مراجع الحسابات: </span>
                                        <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>

                                </div>
                                <div class="box report_plane">
                                    <label for="" class="bg bg-gray"> 1ـــ6 : الوقت المتوقع لبنود الخدمة : </label>

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th> رمز الخدمة </th>
                                                <th> نوع المهمة </th>
                                                <th> الوقت المتوقع </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> 1000 </td>
                                                <td> الملف الدائم </td>
                                                <td> <input value="" type="text" id="value1" name="" class="form-control"> </td>
                                            </tr>
                                            <tr>
                                                <td> 2000 </td>
                                                <td>التخطيط</td>
                                                <td> <input type="text" id="value2" name="" class="form-control"> </td>
                                            </tr>
                                            <tr>
                                                <td> 3000 </td>
                                                <td> ميزان المراجعة والتعديلات </td>
                                                <td> <input type="text" id="" name="" class="form-control"> </td>
                                            </tr>
                                            <tr>
                                                <td> 4000 </td>
                                                <td> النقد والبنوك </td>
                                                <td> <input type="text" id="" name="" class="form-control"> </td>
                                            </tr>
                                            <tr>
                                                <td> 5000 </td>
                                                <td>المدينون</td>
                                                <td> <input type="text" id="" name="" class="form-control"> </td>
                                            </tr>
                                            <tr>
                                                <td> 6000 </td>
                                                <td> المصروفات المقدمة والأرصدة المدينة الأخرى </td>
                                                <td> <input type="text" id="" name="" class="form-control"> </td>
                                            </tr>
                                            <tr>
                                                <td> 7000 </td>
                                                <td>الأصول الثابتة</td>
                                                <td> <input type="text" id="" name="" class="form-control"> </td>
                                            </tr>
                                            <tr>
                                                <td> 8000 </td>
                                                <td> المخزون </td>
                                                <td> <input type="text" id="" name="" class="form-control"> </td>
                                            </tr>
                                            <tr>
                                                <td> 9000 </td>
                                                <td> الذمم الدائنة التجارية </td>
                                                <td> <input type="text" id="" name="" class="form-control"> </td>
                                            </tr>
                                            <tr>
                                                <td> 10000 </td>
                                                <td> المصاريف المستحقة والدائنة الأخرى </td>
                                                <td> <input type="text" id="" name="" class="form-control"> </td>
                                            </tr>
                                            <tr>
                                                <td> 11000 </td>
                                                <td> مراجعة حقوق الملكية </td>
                                                <td> <input type="text" id="" name="" class="form-control"> </td>
                                            </tr>
                                            <tr>
                                                <td> 12000 </td>
                                                <td> المدينون والمبيعات </td>
                                                <td> <input type="text" id="" name="" class="form-control"> </td>
                                            </tr>
                                            <tr>
                                                <td> 13000 </td>
                                                <td> المصاريف </td>
                                                <td> <input type="text" id="" name="" class="form-control"> </td>
                                            </tr>
                                            <tr>
                                                <td> 14000 </td>
                                                <td> إجراءات مراجعة أخرى </td>
                                                <td> <input type="text" id="" name="" class="form-control"> </td>
                                            </tr>
                                            <tr>
                                                <td> 15000 </td>
                                                <td> القوائم المالية ومذكرة الانتهاء </td>
                                                <td> <input type="text" id="" name="" class="form-control"> </td>
                                            </tr>
                                            <tr>
                                                <td> </td>
                                                <td> الإجمــالي </td>
                                                <td> <input type="text" id="" name="" class="form-control"> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="box report_plane">
                                    <label for="" class="bg bg-gray"> 1ـــ7 : فريق المراجعة والمراجعون المشاركون : </label>
                                    <p> تم اختيار فريق المراجعة من : </p>
                                    <div class="input-group mb-3">
                                        <label class="btn" for="">مراجع أول :</label>
                                        <select class="form-control" class="form-select" id="">
                                            <option selected> اختر </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <label class="btn" for=""> مراجع ثاني :</label>
                                        <select class="form-control" class="form-select" id="">
                                            <option selected> اختر </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <label class="btn" for=""> مراجع ثالث :</label>
                                        <select class="form-control" class="form-select" id="">
                                            <option selected> اختر </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <label class="btn" for=""> مدير مراجعة :</label>
                                        <select class="form-control" class="form-select" id="">
                                            <option selected> اختر </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <label class="btn" for=""> مشرف جودة :</label>
                                        <select class="form-control" class="form-select" id="">
                                            <option selected> اختر </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <label class="btn" for=""> محاسب قانوني :</label>
                                        <select class="form-control" class="form-select" id="">
                                            <option selected> اختر </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                        </select>
                                    </div>

                                </div>
                                <div class="box report_plane">
                                    <label for="" class="bg bg-gray"> 1ــ7 : الإلتزام بالإستقلالية : </label>
                                    <ul class="list-unstyled">
                                        <li> • أتعاب المراجعة وكافة المصروفات الجارية التي تم دفعها بواسطة ذلك العميل ليست بالقيمة التي تضعف من موضوعية أداء واستقلالية فريق العمل من المراجعين. </li>
                                        <li> • فريق العمل ليس على علم بأي نزاع أو تعارض مصالح مع ذلك العميل / أو بين ذلك العميل وأي شخص آخر في مكتبنا. </li>
                                        <li> • لاتوجد أتعاب مستحقة طرف العميل قد تؤثر في موضوعية أداء المكتب واستقلاليته. </li>
                                        <li> • لايوجد نزاع قضائي جاري بين العميل والمكتب. </li>
                                        <li> • فريق العمل يعلم طبيعة نشاط العميل و لديه الخبرة الكافية للقيام بتلك الخدمة. </li>
                                        <li> • فريق العمل يستوعب العميل ولديهم القناعة بأنه يمكن الاستمرار في التعامل مع العميل. </li>
                                        <li> • لايوجد موظف في منشأة العميل كان شريكاً أو من كبار موظفي المكتب لدينا أو من المحتمل أن يكون كذلك. </li>
                                        <li> • أعمال الحسابات والأعمال الأخرى التي تتم نيابة عن العميل من إعداد وضبط للقوائم المالية هي أعمال مقبولة من قبلهم والمكتب لم يلعب دور الإدارة لهم وقد تم تخطيط اختبارات المراجعة لتغطي الأعمال المكلفين بها لإبداء الرأي في صحة هذة القوائم المالية. </li>
                                        <li> • فريق العمل وعائلاتهم لديهم استقلال تام عن العميل. </li>
                                        <li> • لاتوجد إرتباطات مالية بين فريق العمل وبين العميل. </li>
                                    </ul>
                                </div>

                            </div>
                            <div class='box submit_box'>
                                <button type="button" class="btn btn-danger printbtn"> طباعه <i class="fa fa-print"></i> </button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </form>
        <!--*********************** START CODE ******************** -->
        <!-- Area to display the percent of progress -->
        <!-- area to display a message after completion of upload -->
        <div id='status'></div>
    </div>
</div>