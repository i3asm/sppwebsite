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
