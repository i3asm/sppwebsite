@extends('mainStyle')

@section('head')

    <!--JavaScript -->
{{--    <script src="{{asset('js/GPA.js')}}"></script>--}}

    <script>
        $(document).ready(function () {
            //five-point gpa system

            $('.five-gpa').click(function () {
                $('option[data-option=1]').val('5.00');
                $('option[data-option=2]').val('4.75');
                $('option[data-option=3]').val('4.50');
                $('option[data-option=4]').val('4.00');
                $('option[data-option=5]').val('3.50');
                $('option[data-option=6]').val('3.00');
                $('option[data-option=7]').val('2.50');
                $('option[data-option=8]').val('2.00');
                $('option[data-option=9]').val('1.00');
            });

            //four-point gpa system

            $('.four-gpa').click(function () {
                $('option[data-option=1]').val('4.00');
                $('option[data-option=2]').val('3.75');
                $('option[data-option=3]').val('3.50');
                $('option[data-option=4]').val('3.00');
                $('option[data-option=5]').val('2.50');
                $('option[data-option=6]').val('2.00');
                $('option[data-option=7]').val('1.50');
                $('option[data-option=8]').val('1.00');
                $('option[data-option=9]').val('0.00');
            });

            //calculate gpa on button click
            $('.calc').click(function () {
                var subject_count = $('.subject').length;
                var total_hours = 0.0;
                var total_gpa = 0.0;
                var prevHours = parseFloat($('#prevHours').val()) || 0;
                var prevGPA = parseFloat($('#prevGPA').val() || 0) * prevHours;
                console.log(prevHours, prevGPA);
                for (let i = 1; i <= subject_count; i++) {
                    var grade = $('.grade' + i).val();
                    var hour = $('.hours' + i).val();
                    hour = parseFloat(hour);
                    total_hours = total_hours + hour;
                    total_gpa = total_gpa + grade * hour;
                }
                console.log(total_gpa, total_hours);
                total_hours += prevHours;
                total_gpa += prevGPA;
                console.log(total_gpa, total_hours);
                var gpa = parseFloat(total_gpa / total_hours).toFixed(2);
                if (gpa === 0) {
                    gpa = 'set subjects first';
                }
                $('.gpa-grade').html(gpa);
            });

            //add subject on button click
            $('.add_subject').click(function () {
                $('.subject:first')
                    .clone()
                    .insertAfter('.subject:last');
                var subject_count = $('.subject').length;
                $('.subject:last').attr('id', 'subject' + subject_count);
                $('.subject:last .subject-number').html(subject_count);
                $('.subject:last .grade1')
                    .removeClass('grade1')
                    .addClass('grade' + subject_count);
                $('.subject:last .hours1')
                    .removeClass('hours1')
                    .addClass('hours' + subject_count);

                $("i#remove-btn:last").attr("style","");
            });


        });

        function killMe(elm) {
            // elm.parent.remove();
            var numOfSubjects = document.getElementsByClassName("subject").length;
            var parent = elm.parentElement.parentElement;
            var number = parent.getElementsByClassName("subject-number")[0].innerHTML;
            var hours = parent.getElementsByClassName("hours")[0];
            var grade = parent.getElementsByClassName("grade")[0];
            console.log(number + " / " + numOfSubjects)
            var i;
            for (i = number - 1; i < numOfSubjects - 1; i++) {
                var subject = document.getElementsByClassName("subject")[i + 1];
                subject.id = "subject" + (i + 1);
                (subject.getElementsByClassName("subject-number")[0]).innerHTML = (i + 1);
                $(subject.getElementsByClassName("hours")[0]).removeClass('hours' + (i + 2)).addClass('hours' + (i + 1));
                $(subject.getElementsByClassName("grade")[0]).removeClass('grade' + (i + 2)).addClass('grade' + (i + 1));
            }
            parent.remove();

        }
    </script>

    <!--CSS files-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/GPA.css', true)}}">

@endsection

@section('content')
    <!--GPA calculator-->
    <div class="main main-raised">
        <div class="container ">
            <div class="section">

                <div class="container" dir="rtl">
                    <div class="row gpa-system">
                        <div class="col col-sm-1 checkBox">
                            <label>
                                نظام 5.00
                                <input type="radio" class="five-gpa" name="gpa-type" checked/>
                            </label>
                        </div>
                        <div class="col col-sm-1 checkBox">
                            <label>
                                نظام 4.00
                                <input type="radio" class="four-gpa" name="gpa-type"/>
                            </label>
                        </div>
                    </div>
                    <div class="row gpa-system form-group">
                        <div class="col col-md-2">
                            <input type="text" class="form-control" id="prevGPA" placeholder="المعدل السابق"/>
                        </div>
                        <div class="col col-md-2">
                            <input type="text" class="form-control" id="prevHours" placeholder="عدد الساعات السابقة"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row form-group subject" id="subject1">
                                <div class="col col-md-4 subject-header">
                                    <i class="fas fa-times remove-subject" id="remove-btn" onclick="killMe(this)"
                                       style="display: none"></i>
                                    <p>المقرر #<span class="subject-number">1</span></p>
                                </div>

                                <div class="col col-md-2">
                                    <input type="number" class="hours hours1 form-control" min="0"
                                           placeholder="الساعات"/>
                                </div>
                                <div class="col col-md-2">
                                    <select class="grade grade1" style="width: 100%;">
                                        <option data-option="1" value="5.00">A+</option>
                                        <option data-option="2" value="4.75">A</option>
                                        <option data-option="3" value="4.50">B+</option>
                                        <option data-option="4" value="4.00">B</option>
                                        <option data-option="5" value="3.50">C+</option>
                                        <option data-option="6" value="3.00">C</option>
                                        <option data-option="7" value="2.50">D+</option>
                                        <option data-option="8" value="2.00">D</option>
                                        <option data-option="9" value="1.00">F</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div>
                            <button class="btn btn-primary calc">احسب</button>
                        </div>
                        <div style="margin-right:5px;">
                            <button class="btn btn-info add_subject">اضافة مقرر</button>
                        </div>
                        <div class="row" style="margin-right:5px; ">
                            <h3 style="margin-top: 5px; margin-right: 10px;">معدلك: </h3>
                            <h3 class="gpa-grade" style="margin-top: 5px; margin-right: 10px;"> 0.0</h3>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

@endsection

