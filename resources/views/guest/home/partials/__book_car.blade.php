<section class="awe-section-2">
    <section class="section_booking">
        <div class="wrap_booking">
            <div class="container">
                <form accept-charset="UTF-8" action="/contact" id="contact2" method="post">
                    <input name="FormType" type="hidden" value="contact">
                    <input name="utf8" type="hidden" value="true">




                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="col_flied">
                                <div class="left_flied">
                                    <span>Thông tin</span>
                                    <input type="hidden" id="email1" class="form-control form-control-lg" value="emailmacdinh@gmail.com" name="contact[email]">
                                    <input type="hidden" id="ContactFormInfo" autocomplete="off" class="form-control  form-control-lg" value="Khách hàng" name="contact[Name]">
                                    <input placeholder="Email/SĐT" type="text" id="ContactFormInfo" autocomplete="off" class="form-control  form-control-lg" required="" value="" name="contact[Thông tin]">
                                </div>
                                <div class="right_flied icon_1 fa1 user m1">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="col_flied">
                                <div class="left_flied filed_each tuyenduong">
                                    <span>Dịch vụ</span>
                                    <input placeholder="Chọn dịch vụ" type="text" autocomplete="off" class="form-control  form-control-lg" required="" value="" name="contact[Dịch vụ]">
                                    <select name="category1" id="category1">
                                        <option value="">Chọn dịch vụ</option>



                                        <option data-link="1829886" data-value="Xe nổi bật" value="/xe-noi-bat">Xe nổi bật</option>




                                        <option data-link="1829851" data-value="Thuê xe hoa" value="/thue-xe-hoa">Thuê xe hoa</option>




                                        <option data-link="1829850" data-value="Thuê xe du lịch" value="/thue-xe-du-lich">Thuê xe du lịch</option>




                                        <option data-link="1829887" data-value="Thuê xe có lái" value="/thue-xe-co-lai">Thuê xe có lái</option>




                                        <option data-link="1829929" data-value="Thuê xe gia đình" value="/thue-xe-gia-dinh">Thuê xe gia đình</option>


                                    </select>
                                </div>
                                <div class="right_flied icon_1 fa1 option m1">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="col_flied">
                                <div class="left_flied filed_each loaixe">
                                    <span>Loại xe</span>
                                    <input placeholder="Loại xe" type="text" autocomplete="off" class="form-control  form-control-lg" required="" value="" name="contact[Loại xe]">
                                    <select class="subcat" id="category2" name="category2">
                                        <option disabled="disabled" selected="selected">Loại xe</option>
















                                    </select>
                                </div>
                                <div class="right_flied icon_1 fa1 fa_angle_down">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="col_flied">
                                <div class="left_flied giaxe">
                                    <span>Giá/Ngày</span>
                                    <input placeholder="Giá/ngày" type="text" id="ContactFormPrice" name="contact[Giá ngày]" autocomplete="off" class="form-control  form-control-lg" required="">
                                </div>
                                <div class="right_flied icon_1 fa1 fa_money">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="col_flied">
                                <div class="left_flied group_go">
                                    <span>Thời gian đi</span>
                                    <input placeholder="Thời gian đi" type="text" autocomplete="off" id="StartDate" class="date_picker ngayden form-control  form-control-lg hasDatepicker" required="" value="" name="contact[Ngày đi]">
                                </div>
                                <div class="right_flied icon_1 icon_2 fa1 date m5">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="col_flied">
                                <div class="left_flied group_out">
                                    <span>Thời gian về</span>
                                    <input placeholder="Thời gian về" type="text" disabled="disabled" autocomplete="off" id="EndDate" class="date_picker ngaydi form-control  form-control-lg hasDatepicker" required="" value="" name="contact[Ngày về]">
                                </div>
                                <div class="right_flied icon_1 icon_2 fa1 date m5">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="col_flied">
                                <div class="left_flied">
                                    <span>Ghi chú</span>
                                    <input placeholder="Ghi chú" type="text" autocomplete="off" class="form-control  form-control-lg" value="" name="contact[body]">
                                </div>
                                <div class="right_flied icon_1 icon_3 fa1 note m6">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <button type="submit" class="btn_70 button_gradient">Gửi thông tin đặt xe</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <script>
            $(function(){

                var $cat = $("#category1"),
                    $subcat = $(".subcat");

                var optgroups = {};

                $subcat.each(function(i,v){
                    var $e = $(v);
                    var _id = $e.attr("id");
                    optgroups[_id] = {};
                    $e.find("optgroup").each(function(){
                        var _r = $(this).data("rel");
                        $(this).find("option").addClass("is-dyn");
                        optgroups[_id][_r] = $(this).html();
                    });
                });
                $subcat.find("optgroup").remove();

                var _lastRel;
                $cat.on("change",function(){
                    var _rel = $(this).val();
                    if(_lastRel === _rel) return true;
                    _lastRel = _rel;
                    $subcat.find("option").attr("style","");
                    $subcat.val("");
                    $subcat.find(".is-dyn").remove();
                    if(!_rel) return $subcat.prop("disabled",true);
                    $subcat.each(function(){
                        var $el = $(this);
                        var _id = $el.attr("id");
                        $el.append(optgroups[_id][_rel]);
                    });
                    $subcat.prop("disabled",false);
                });

            });
            $('.tuyenduong select').change(function() {
                $('.tuyenduong input').attr('value', $(this).find(' option:selected').attr('data-value'));
                setTimeout(function(){
                    $('.giaxe input').attr('value', $('.loaixe select option:selected').attr('data-price'));
                },500);
            });
            $('.loaixe select').change(function() {
                $('.loaixe input').attr('value', $(this).find(' option:selected').val())
                $('.giaxe input').attr('value', $(this).find('option:selected').attr('data-price'))
            });
        </script>
    </section>
</section>